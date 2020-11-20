<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yahp\Services\CampanhaService;


class WebsiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CampanhaService $campanhaService)
    {
        $this->campanhaService = $campanhaService;
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
}
