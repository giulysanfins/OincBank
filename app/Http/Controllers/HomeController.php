<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        $url = explode('?',url()->previous());
        if(count($url) != 1)
        {
            $var = explode('=',$url[1]);
    
            if(count($var) == 2 & $var[0] == 'campanha')
            {
                return redirect()->route('website.campanhas.detalhes',$var[1]);
            }
        } else {
            return view('dashboard');
        }
    }
}
