<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yahp\Services\CampanhaService;
use App\Yahp\Services\PaymentService;


class WebsiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CampanhaService $campanhaService, PaymentService $paymentService)
    {
        $this->campanhaService = $campanhaService;
        $this->paymentService = $paymentService;
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

    public function tos()
    {
        return view('website.tos');
    }


    public function politica(){

        return view('website.politica');
    }

    public function payment($id, Request $request) 
    {
        try {

            if($request->valor_manual == null)
            {
                $valor = $request->valor_auto;
            } else {
                $valor = $request->valor_manual;
            }

            $insert = $this->paymentService->buildInsert([
                'user_id' => auth()->user()->id,
                'campanha_id' => $id,
                'valor' => str_replace(',','.',str_replace('.','',$valor)),
                'status' => 1,
            ]);

            

            alert()->success('Sucesso','Pagamento realizado com sucesso.')->persistent('Fechar');
            return redirect()->route('website.campanhas.detalhes',$id);

        } catch (\Exception $e) {
           \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
           alert()->error('Erro','Erro em realizar o pagamento.')->persistent('Fechar');
           return redirect()->route('website.campanhas.detalhes',$id)->withInput();
        }
    }
}
