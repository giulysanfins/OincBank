<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yahp\Services\CampanhaService;
use App\Yahp\Services\PaymentService;
use App\Yahp\Services\ParameterService;
use Illuminate\Support\Facades\Input;

class WebsiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CampanhaService $campanhaService, PaymentService $paymentService, ParameterService $parameterService)
    {
        $this->campanhaService = $campanhaService;
        $this->paymentService = $paymentService;
        $this->parameterService = $parameterService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'minpay' => $this->parameterService->renderBySlug('campanha.num'),
        ];

        return view('website.index',$data);
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
            'minpay' => $this->parameterService->renderBySlug('campanha.num'),
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

    /**
     * Show the application TOS.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tos()
    {
        return view('website.tos');
    }

    /**
     * Show the application politica.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function politica()
    {
        return view('website.politica');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

            return redirect()->route('website.payment.checkout',$insert->id);

        } catch (\Exception $e) {
           \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
           alert()->error('Erro','Erro em realizar o pagamento.')->persistent('Fechar');
           return redirect()->route('website.campanhas.detalhes',$id)->withInput();
        }
    }

    public function checkout($id)
    {
        $pagamento = $this->paymentService->renderEdit($id);

        // Configura credenciais
        \MercadoPago\SDK::setAccessToken('TEST-3909980958286743-112018-c6a4d0c6de187c2bfd0897f4169cf7cf-41701013');

        // Cria um objeto de preferência
        $preference = new \MercadoPago\Preference();

        // Cria um item na preferência
        $item = new \MercadoPago\Item();
        $item->id = $pagamento->id;
        $item->title = $pagamento->campanha->titulo." | ".$pagamento->campanha_id."-".$pagamento->id;
        $item->quantity = 1;
        $item->unit_price = $pagamento->valor;
        $item->currency_id = "BRL";
        $preference->items = array($item);
        $preference->back_urls = array(
            "success" => "http://localhost:8000/pagamento/sucesso/".$pagamento->campanha_id,
            "failure" => "http://localhost:8000/pagamento/falha/".$pagamento->campanha_id,
            "pending" => "http://localhost:8000/pagamento/pendente/".$pagamento->campanha_id
        );
        $preference->auto_return = "approved";
        $preference->save();

        $data = [
            'pagamento' => $this->paymentService->renderEdit($id),
            'preference' => $preference,
        ];

        return view('website.pagamento-checkout',$data);
    }

    public function sucesso(Request $request,$id)
    {
        try {
            // http://localhost:8000/pagamento/sucesso/1
            if (count($request->all()) == 0)
            {
                $data = [
                    'exception' => null,
                ];

                return view('errors.403',$data);

            } elseif($request->status === 'approved') {

                $update = $this->paymentService->buildUpdate($id,[
                    'status' => 2, //sucesso
                    'pagamento_id' => $request->payment_id,
                    'pagamento_tipo' => $request->payment_type,
                    'preference_id' => $request->preference_id,
                ]);

                return view('website.sucesso');
            }

        } catch (\Exception $e) {
           \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
           alert()->error('Erro','')->persistent('Fechar');
           return redirect()->route('website.campanhas.detalhes',$id)->withInput();
        }
    }

    public function pending(Request $request,$id)
    {
        try {
            // http://localhost:8000/pagamento/sucesso/1
            if (count($request->all()) == 0)
            {
                $data = [
                    'exception' => null,
                ];

                return view('errors.403',$data);

            } elseif($request->status === 'pending') {

                $update = $this->paymentService->buildUpdate($id,[
                    'status' => 3, // status = pendente
                    'pagamento_id' => $request->payment_id,
                    'pagamento_tipo' => $request->payment_type,
                    'preference_id' => $request->preference_id,
                ]);

                return view('website.pendente');
            }

        } catch (\Exception $e) {
           \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
           alert()->error('Erro','Erro em realizar o pagamento.')->persistent('Fechar');
           return redirect()->route('website.campanhas.detalhes',$id)->withInput();
        }
    }

    public function failed(Request $request,$id)
    {
        try {
            // http://localhost:8000/pagamento/sucesso/1
            if (count($request->all()) == 0)
            {
                $data = [
                    'exception' => null,
                ];

                return view('errors.403',$data);

            } elseif($request->status === 'failure') {

                $update = $this->paymentService->buildUpdate($id,[
                    'status' => 4, // status = falha
                    'pagamento_id' => $request->payment_id,
                    'pagamento_tipo' => $request->payment_type,
                    'preference_id' => $request->preference_id,
                ]);

                return view('website.falha');
            }

        } catch (\Exception $e) {
           \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
           alert()->error('Erro','')->persistent('Fechar');
           return redirect()->route('website.campanhas.detalhes',$id)->withInput();
        }
    }
}
