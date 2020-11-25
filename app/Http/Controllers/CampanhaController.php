<?php

namespace App\Http\Controllers;


use App\Yahp\Services\CampanhaService;
use App\Yahp\Services\PhotoService;

use Illuminate\Http\Request;
use Storage;
use Carbon\Carbon;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;


use App\Yahp\Services\CategoryService;



class CampanhaController extends Controller
{
    //

    public function __construct(CampanhaService $campanhaService,CategoryService $categoryService)
    {
        $this->middleware('auth');
        $this->campanhaService = $campanhaService;
        $this->categoryService = $categoryService;

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
                'pageTitle' => 'Campanha',
                'campanhas_pendentes' => $this->campanhaService->renderByStatus(1),
                'campanhas_desativadas' => $this->campanhaService->renderByStatus(0),
                'campanhas_aprovadas' => $this->campanhaService->renderByStatus(2)
            ];
   
         } elseif (auth()->user()->role == 2) {
            $data = [
                'campanhas' => $this->campanhaService->renderByUser(auth()->user()->id),
                'pageTitle' => 'Campanha'
            ]; 
        }

        return view('admin.campanha.index',$data);
     }

     public function mostrar($id)
     {
         $data = [
             'campanhas' => $this->campanhaService->renderEdit($id),
             'pageTitle' => 'Campanha',
                         'photo' => $this->photoService->renderPhotoUser('users',auth()->user()->id)

         ];

         return view('pages.campanha.show',$data);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $data = [
             'pageTitle' => 'Adicionar Campanha',
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
            // dd($request->all());
            //  if($request->file('photo_perfil'))
            //  {
                $ext = $request->file('photo_perfil')->extension();
                $ts = Carbon::now()->timestamp;
                $filename = $ts."_".$user_id.".".$ext;
                $upload = Storage::putFileAs('public/images',$request->file('photo_perfil'),$filename);

                $data = $this->campanhaService->buildInsert($request->merge([
                    'profile_image' => $filename,
                    'user_id' => auth()->user()->id,
                    'status' => 1,
                    'valor' => str_replace(',','.',str_replace('.','',$request->valor))
                ])->all());
                alert()->success('Sucesso','Campanha adicionada com sucesso.')->persistent('Fechar');
            //  }

            //  dd($data);
             return redirect()->route('campanha.index',$data);

        } catch (\Exception $e) {

             \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
             alert()->error('Erro','Erro em adicionar a Campanha.')->persistent('Fechar');
             return redirect()->route('campanha.index')->withInput();

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
         //
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
             'pageTitle' => 'Editar Campanha'
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

             $update = $this->campanhaService->buildUpdate($id,$request->merge([
                'valor' => str_replace(',','.',str_replace('.','',$request->valor))
             ])->all());
             alert()->success('Sucesso','Campanha alterada com sucesso.')->persistent('Fechar');
             return redirect()->route('campanha.index',$id);

         } catch (\Exception $e) {
             \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
             alert()->error('Erro','Erro em alterar a Campanha.')->persistent('Fechar');
             return redirect()->route('campanha.index',$id)->withInput();
         }
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         //
     }


     public function desativar(Request $request, $id)
     {
         try {

             $update = $this->campanhaService->buildUpdate($id,['status' => 0]);

             alert()->success('Sucesso','Campanha desativada com sucesso.')->persistent('Fechar');
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

             alert()->success('Sucesso','Campanha ativada com sucesso.')->persistent('Fechar');
             return redirect()->route('campanha.index');

         } catch (\Exception $e) {

             \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
             alert()->error('Erro','Erro em alterar a Campanha.')->persistent('Fechar');
             return redirect()->route('campanha.index')->withInput();


         }
     }
 }
