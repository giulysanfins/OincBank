<?php

namespace App\Http\Controllers;

use App\Mail\mensagemNegado;
use Illuminate\Http\Request;
use App\Yahp\Services\PaymentService;
use App\Yahp\Services\UserService;
use App\Mail\mensagemSacar;
use Illuminate\Support\Facades\Mail;


class PaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PaymentService $paymentService, UserService $userService)
    {
        $this->paymentService = $paymentService;
        $this->userService = $userService;
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
                'pagamentos' => $this->paymentService->renderList(),
            ];
        } else {
            $data = [
                'pagamentos' => $this->paymentService->renderByUser(auth()->user()->id),
            ];
        }


        return view('admin.pagamentos.index',$data);
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
        //
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
    // aqui é para o ADM aceitar ou não
    public function update(Request $request, $id)
    {
        try {

            $payment = $this->paymentService->renderEdit($id);
            // dd($payment->campanha->user_id);
            $user = $this->userService->renderEdit($payment->campanha->user_id);

            $update = $this->paymentService->buildUpdate($id,$request->all());
            Mail::to($user->email)->send(new mensagemNegado($id));

            // Mail::send(new mensagemNegado($id));

            alert()->success('Sucesso','Pagamento solicitado com sucesso.')->persistent('Fechar');
            return redirect()->route('pagamentos.index');

        } catch (\Exception $e) {
           \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
           alert()->error('Erro','Erro em atualizar pagamento.')->persistent('Fechar');
           return redirect()->route('pagamentos.index')->withInput();
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saque($id, Request $request)
    {
        try {

            // dd('oi');
            $insert = $this->paymentService->buildInsert($request->merge([
                'status' => 1,
                'tipo' => 2,
                'valor' => str_replace(',','.',str_replace('.','',$request->valor)),
                'user_id' => auth()->user()->id,
                'campanha_id' => $id,
                'tipo' => 2
                ])->all());
                Mail::send(new mensagemSacar($insert->id));
            alert()->success('Sucesso','Saque solicitado com sucesso.')->persistent('Fechar');
            return redirect()->route('campanha.index');

        } catch (\Exception $e) {
           \Log::error($e->getFile() . "\n" . $e->getLine() . "\n" . $e->getMessage());
           alert()->error('Erro','Erro em solicitar o saque.')->persistent('Fechar');
           return redirect()->route('campanha.index')->withInput();
        }
    }

}
