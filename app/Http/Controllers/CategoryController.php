<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yahp\Services\CategoryService;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'categorias' => $this->categoryService->renderList(),
        ];

        return view('admin.config.categorias.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            $update = $this->categoryService->buildInsert($request->merge(['status' => 1])->all());
            alert()->success('Sucesso','Categoria adicionada com sucesso.')->persistent('Fechar');
            return redirect()->route('categorias.index');

        } catch (\Exception $e) {
           \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
           alert()->error('Erro','Erro em adicionar a Categoria.')->persistent('Fechar');
           return redirect()->route('categorias.index')->withInput();
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
        //
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
            $update = $this->categoryService->buildUpdate($id,$request->all());
            alert()->success('Sucesso','Categoria alterada com sucesso.')->persistent('Fechar');
            return redirect()->route('categorias.index');

        } catch (\Exception $e) {
           \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
           alert()->error('Erro','Erro em alterar a Categoria.')->persistent('Fechar');
           return redirect()->route('categorias.index')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deactive($id)
    {
        try {
            $deactive = $this->categoryService->buildUpdate($id,[
                'status' => 0
            ]);
            alert()->success('Sucesso','Categoria desativada com sucesso.')->persistent('Fechar');
            return redirect()->route('categorias.index');

        } catch (\Exception $e) {
           \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
           alert()->error('Erro','Erro em desativar a Categoria.')->persistent('Fechar');
           return redirect()->route('categorias.index')->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function active($id)
    {
        try {
            $active = $this->categoryService->buildUpdate($id,[
                'status' => 1
            ]);
            alert()->success('Sucesso','Categoria ativo com sucesso.')->persistent('Fechar');
            return redirect()->route('categorias.index');

        } catch (\Exception $e) {
           \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
           alert()->error('Erro','Erro em ativar a Categoria.')->persistent('Fechar');
           return redirect()->route('categorias.index')->withInput();
        }
    }
}
