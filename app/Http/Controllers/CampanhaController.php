<?php

namespace App\Http\Controllers;

use App\Yahp\Services\CampanhaService;
use Illuminate\Http\Request;

class CampanhaController extends Controller
{
    //
    public function __construct(CampanhaService $campanhaService)
    {
        $this->middleware('auth');
        $this->campanhaService = $campanhaService;
    }


     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function index()
     {
         $data = [
             'campanha' => $this->campanhaService->renderList(),
             'pageTitle' => 'Campanha'
         ];

         return view('pages.campanha.index',$data);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         $data = [
             'pageTitle' => 'Adicionar Campanha'
         ];

         return view('pages.campanha.create',$data);
     }

     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         try {

             $insert = $this->campanhaService->buildInsert($request->all());
             alert()->success('Sucesso','Campanha adicionada com sucesso.')->persistent('Fechar');
             return redirect()->route('campanha.index');

         } catch (\Exception $e) {

             \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
             alert()->error('Erro','Erro em adicionar a Campanha.')->persistent('Fechar');
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

         return view('pages.campanha.edit',$data);
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

             $update = $this->campanhaService->buildUpdate($id,$request->all());
             alert()->success('Sucesso','Campanha alterada com sucesso.')->persistent('Fechar');
             return redirect()->route('campanha.edit',$id);

         } catch (\Exception $e) {

             \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
             alert()->error('Erro','Erro em alterar a Campanha.')->persistent('Fechar');
             return redirect()->route('campanha.edit',$id)->withInput();

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
 }
