<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yahp\Services\CampanhaService;
use App\Yahp\Services\CategoryService;


class WebsiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CampanhaService $campanhaService, CategoryService $categoryService)
    {
        $this->campanhaService = $campanhaService;
        $this->categoryService = $categoryService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('website.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function campanhas()
    {
        $data = [
            'campanhas' => $this->campanhaService->renderByStatus(2),
            'categorias' => $this->categoryService->renderByStatus(1)
        ];

        return view('website.campanhas',$data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function detalhes($id)
    {
        $data = [
            'campanha' => $this->campanhaService->renderEdit($id),
        ];

        return view('website.detalhe-campanhas',$data);
    }

    public function tos()
    {
        return view('website.tos');
    }


    public function politica(){

        return view('website.politica');
    }

    public function duvidas(){

        return view('website.duvidas');
    }

    public function faq(){

        return view('website.faq');
    }



    public function search(Request $request){

        if($request->q != ''){

             $campanha = $this->campanhaService->renderBySearch($request->q);
            // dd($campanha);
             if(count($campanha) > 0)
             {
                 $data = [
                     'campanhas' => $campanha,
                     'pageTitle' => 'Campanha',
                     'query' => $request->q,
                 ];
                //  dd($data);
                 return view('website.search',$data);
             }
             else{

                 $data = [
                     'campanha' => $this->campanhaService->renderList(),
                     'pageTitle' => 'Campanha'
                 ];

                 //mudar para rota
                 alert()->warning("Dados não encontrados");
                 return view('website.campanhas',$data);
             }
        }
        return view('website.index')->withMessage("Nada encontrado 2");
     }
}
