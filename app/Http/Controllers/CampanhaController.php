<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\newLaravelTips;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Str;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use App\Mail\mensagemDesativado;
use Illuminate\Support\Facades\Hash;

use App\Yahp\Services\CategoryService;
use App\Yahp\Services\PaymentService;
use App\Yahp\Services\BankService;
use App\Yahp\Services\UserService;
use App\Yahp\Services\CampanhaService;
use App\Yahp\Services\PhotoService;


class CampanhaController extends Controller
{


    public function __construct(
        CampanhaService $campanhaService,
        CategoryService $categoryService,
        PaymentService $paymentService,
        BankService $bankService,
        UserService $userService,
        PhotoService $photoService
        )
    {
        $this->middleware('auth');
        $this->campanhaService = $campanhaService;
        $this->categoryService = $categoryService;
        $this->paymentService = $paymentService;
        $this->bankService = $bankService;
        $this->userService = $userService;
        $this->photoService = $photoService;
    }

     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {

         if(auth()->user()->role == 1)
         {
            $data = [
                'campanhas' => $this->campanhaService->renderList(),
                'pageTitle' => 'Cofrinho',
                'campanhas_pendentes' => $this->campanhaService->renderByStatus(1),
                'campanhas_desativadas' => $this->campanhaService->renderByStatus(4),
                'campanhas_aprovadas' => $this->campanhaService->renderByStatus(2),
                'campanhas_expiradas' => $this->campanhaService->renderByStatus(5),
                'campanhas_excluidas' => $this->campanhaService->renderByStatus(0),
                'categorias' => $this->categoryService->renderByStatus(1),
                'pagamentos' => $this->paymentService->renderList(),
            ];

         } elseif (auth()->user()->role == 2) {
            $data = [
                'campanhas' => $this->campanhaService->renderByUser(auth()->user()->id),
                'pageTitle' => 'Cofrinho',
                'campanhas_pendentes' => $this->campanhaService->renderByStatusUser(1,auth()->user()->id),
                'campanhas_desativadas' => $this->campanhaService->renderByStatusUser(4,auth()->user()->id),
                'campanhas_aprovadas' => $this->campanhaService->renderByStatusUser(2,auth()->user()->id),
                'campanhas_expiradas' => $this->campanhaService->renderByStatusUser(2,auth()->user()->id),
                'categorias' => $this->categoryService->renderByStatus(1),
                'bancos' => $this->bankService->renderList(),
                'pagamentos' => $this->paymentService->renderByUser(auth()->user()->id),
            ];
        }

        return view('admin.campanha.index',$data);
     }

     public function index_delete()
     {

         if(auth()->user()->role == 1)
         {
            $data = [
                'campanhas' => $this->campanhaService->renderList(),
                'pageTitle' => 'Cofrinho',
                'campanhas_aprovadas' => $this->campanhaService->renderByStatus(2),
                'campanhas_expiradas' => $this->campanhaService->renderByStatus(5)

            ];

         } elseif (auth()->user()->role == 2) {
            $data = [
                'campanhas' => $this->campanhaService->renderByUser(auth()->user()->id),
                'pageTitle' => 'Cofrinho',
                'campanhas_aprovadas' => $this->campanhaService->renderByStatusUser(2,auth()->user()->id),
                'campanhas_expiradas' => $this->campanhaService->renderByStatusUser(5,auth()->user()->id)
            ];
        }

        return view('admin.campanha.desativar',$data);
     }


     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $data = [
             'pageTitle' => 'Adicionar Cofrinho',
             'categorias' => $this->categoryService->renderByStatus(1),
         ];

         return view('admin.campanha.create',$data);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
        try
        {
            $user_id = auth()->user()->id;

            $file = $request->file('photo_perfil');
            $image = Image::make($file);
            $image->orientate();
            $ext = $request->file('photo_perfil')->extension();
            $ts = Carbon::now()->timestamp;
            $filename = $ts."_".$user_id.".".$ext;
            $image->save(storage_path('app/public/images/') . $filename);



            $data = $this->campanhaService->buildInsert($request->merge([
                'profile_image' => $filename,
                'user_id' => auth()->user()->id,
                'status' => 2,
                'valor' => str_replace(',','.',str_replace('.','',$request->valor)),
                'data_encerramento' => Carbon::createFromFormat('d/m/Y', $request->data_encerramento),
            ])->all());

            if($request->file('fotos') != null)
            {
                foreach($request->fotos as $foto)
                {
                    $ext = $foto->extension();
                    $random = Str::random(15);
                    $ts = Carbon::now()->timestamp;
                    $filename = $random."_".$ts.".".$ext;
                    $upFoto = Storage::putFileAs('public/images', $foto, $filename);
                    $insertPhoto = $this->photoService->buildInsert([
                        'area' => 'campanha',
                        'area_id' => $data->id,
                        'path' => $filename,
                    ]);
                }
            }

            alert()->success('Sucesso','Cofrinho adicionado com sucesso.')->persistent('Fechar');
            return redirect()->route('campanha.index',$data);

        } catch (\Exception $e) {

             \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
             alert()->error('Erro','Erro em adicionar o Cofrinho.')->persistent('Fechar');
             return redirect()->route('campanha.create')->withInput();
         }
     }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
        $pags = $this->paymentService->renderByCampanha($id);
        $campanha =  $this->campanhaService->renderEdit($id);
        $valorTotal = 0;
        $balanco = 0;

        foreach($pags as $pag)
        {
            // arrecadações
            if($pag->status == 2 && $pag->tipo == 1)
            {
                $valorTotal = $valorTotal + $pag->valor;
            }

            // saldo
            if($pag->tipo == 1 && $pag->status == 2)
            {
                $balanco = $balanco + $pag->valor;
            } elseif ($pag->tipo == 2 && $pag->status == 2)
            {
                $balanco = $balanco - $pag->valor;
            }
        }

        $data = [
            'ownerPhoto' => $this->photoService->renderPhotoUser('users', $campanha->user_id),
            'campanha' => $this->campanhaService->renderEdit($id),
            'pageTitle' => 'Visualizar Cofrinho',
            'pagamentos' => $this->paymentService->renderByCampanha($id),
            'valorTotal' => $valorTotal,
            'bancos' => $this->bankService->renderList(),
            'balanco' => $balanco,
            'perc' => (($valorTotal*100)/$campanha->valor),
            'clientes' => $this->userService->renderList(),
            'photos' => $this->photoService->renderByCampanha($id)
        ];


        return view('admin.campanha.show',$data);
    }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         $data = [
             'campanha' => $this->campanhaService->renderEdit($id),
             'categorias' => $this->categoryService->renderByStatus(1),
             'pageTitle' => 'Editar Cofrinho',
             'photos' => $this->photoService->renderByCampanha($id)
         ];

         return view('admin.campanha.edit',$data);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
         try {
            $user_id = auth()->user()->id;

            if($request->file('photo_perfil'))
              {

                $user_id = auth()->user()->id;

                $file = $request->file('photo_perfil');
                $image = Image::make($file);
                $image->orientate();
                $ext = $request->file('photo_perfil')->extension();
                $ts = Carbon::now()->timestamp;
                $filename = $ts."_".$user_id.".".$ext;
                $image->save(storage_path('app/public/images/') . $filename);
                $update = $this->campanhaService->buildUpdate($id,$request->merge([
                    'valor' => str_replace(',','.',str_replace('.','',$request->valor)),
                    'profile_image' => $filename,
                    'data_encerramento' => Carbon::createFromFormat('d/m/Y', $request->data_encerramento),
                 ])->all());
                 alert()->success('Sucesso','Cofrinho alterado com sucesso.')->persistent('Fechar');
                 return redirect()->route('campanha.index',$id);
              }
              else{
                $update = $this->campanhaService->buildUpdate($id,$request->merge([
                    'valor' => str_replace(',','.',str_replace('.','',$request->valor)),
                    'data_encerramento' => Carbon::createFromFormat('d/m/Y', $request->data_encerramento),
                 ])->all());
                 alert()->success('Sucesso','Cofrinho alterado com sucesso.')->persistent('Fechar');
                 return redirect()->route('campanha.edit',$id);
              }


         } catch (\Exception $e) {
             \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
             alert()->error('Erro','Erro em alterar o Cofrinho.')->persistent('Fechar');
             return redirect()->route('campanha.edit',$id)->withInput();
         }
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy(Request $request,$id)
     {
        try {
             $update = $this->campanhaService->buildUpdate($id,[
                'status' => 0,
                'motivo_deletado' => $request->motivo_deletado
            ]);
            Mail::send(new newLaravelTips($id));
            alert()->success('Sucesso','Cofrinho excluido com sucesso.')->persistent('Fechar');
            return redirect()->route('campanha.index');
        } catch (\Exception $e) {
            \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
            alert()->error('Erro','Erro em excluir o Cofrinho.')->persistent('Fechar');
            return redirect()->route('campanha.index')->withInput();
        }
     }


     public function desativar(Request $request, $id)
     {
         try {
            $escolha = $request->motivo_deletado;
            $update = $this->campanhaService->buildUpdate($id,[
                'status' => 4,
                'motivo_deletado' => $escolha
            ]);
            Mail::send(new mensagemDesativado($id));
            alert()->success('Sucesso','Cofrinho desativado com sucesso.')->persistent('Fechar');
            return redirect()->route('campanha.index');
         } catch (\Exception $e) {
             \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
             alert()->error('Erro','Erro em alterar a Campanha.')->persistent('Fechar');
             return redirect()->route('campanha.index')->withInput();
         }
     }

     public function ativar(Request $request, $id)
     {
         try {
            $update = $this->campanhaService->buildUpdate($id,['status' => 2]);
            alert()->success('Sucesso','Cofrinho ativado com sucesso.')->persistent('Fechar');
            return redirect()->route('campanha.index');
         } catch (\Exception $e) {
            \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
            alert()->error('Erro','Erro em alterar o Cofrinho.')->persistent('Fechar');
            return redirect()->route('campanha.index')->withInput();
         }
     }


     public function apagar_adm($id)
     {
        try {
            // Mail::send(new newLaravelTips($id));
             dd('passou');
            $update = $this->campanhaService->buildUpdate($id,['status' => 0]);
            alert()->success('Sucesso','Cofrinho excluido com sucesso.')->persistent('Fechar');
            return redirect()->route('campanha.index');
        } catch (\Exception $e) {
            \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
            alert()->error('Erro','Erro em excluir o Cofrinho.')->persistent('Fechar');
            return redirect()->route('campanha.index')->withInput();
        }
     }

     public function insertFoto(Request $request)
     {
        try {
            if($request->file('fotos') != null)
            {
                foreach($request->fotos as $foto)
                {
                    $ext = $foto->extension();
                    $random = Str::random(15);
                    $ts = Carbon::now()->timestamp;
                    $filename = $random."_".$ts.".".$ext;
                    $upFoto = Storage::putFileAs('public/images', $foto, $filename);
                    $insertPhoto = $this->photoService->buildInsert([
                        'area' => 'campanha',
                        'area_id' => $request->cofrinho_id,
                        'path' => $filename,
                    ]);
                }
                alert()->success('Sucesso','Foto adicionada com sucesso.')->persistent('Fechar');
            } else {
                alert()->warning('Atenção','Sem fotos para fazer upload.')->persistent('Fechar');
            }

            return redirect()->route('campanha.edit',$request->cofrinho_id);
        } catch (\Exception $e) {
            \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
            alert()->error('Erro','Erro em excluir o Cofrinho.')->persistent('Fechar');
            return redirect()->route('campanha.edit',$request->cofrinho_id)->withInput();
        }
     }

     public function destroyFoto($id, Request $request)
     {
        try {
            $photo = $this->photoService->renderEdit($id);
            Storage::delete('public/images/'.$photo->path);
            $deletePhoto = $this->photoService->buildDelete($photo->id);
            alert()->success('Sucesso','Foto excluida com sucesso.')->persistent('Fechar');
            return redirect()->route('campanha.edit',$request->cofrinho_id);
        } catch (\Exception $e) {
            \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
            alert()->error('Erro','Erro em excluir o Cofrinho.')->persistent('Fechar');
            return redirect()->route('campanha.edit',$request->cofrinho_id)->withInput();
        }
     }

     public function principalFoto($id, Request $request)
     {
        try {
            if($request->file('photo_perfil'))
            {
                $ext = $request->file('photo_perfil')->extension();
                $ts = Carbon::now()->timestamp;
                $random = Str::random(15);
                $filename = $random."_".$ts.".".$ext;
                $upload = Storage::putFileAs('public/images', $request->file('photo_perfil'),$filename);
                $update = $this->campanhaService->buildUpdate($id,$request->merge([
                    'profile_image' => $filename
                 ])->all());
                 alert()->success('Sucesso','Cofrinho alterado com sucesso.')->persistent('Fechar');
            }
            else
            {
                $update = $this->campanhaService->buildUpdate($id,$request->all());
                alert()->success('Sucesso','Cofrinho alterado com sucesso.')->persistent('Fechar');
            }

            return redirect()->route('campanha.edit',$id);
        } catch (\Exception $e) {
            \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
            alert()->error('Erro','Erro em excluir foto.')->persistent('Fechar');
            return redirect()->route('campanha.edit',$id)->withInput();
        }
     }



 }
