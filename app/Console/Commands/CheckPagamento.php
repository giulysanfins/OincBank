<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Yahp\Services\PaymentService;

class CheckPagamento extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'verificar:pagamento';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verificar os pagamentos';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(PaymentService $paymentService)
    {
        parent::__construct();
        $this->paymentService = $paymentService;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $pagamentos = $this->paymentService->renderByStatus(3);
        foreach($pagamentos as $pagamento)
        {
            if($pagamento->pagamento_id != null)
            {
                $auth_id = "APP_USR-3909980958286743-112018-30608f8141126d95d48219543b6ada80-41701013";
                $code = "Bearer ".$auth_id;
                $url = "https://api.mercadopago.com/v1/payments/".$pagamento->pagamento_id;
        
                $client =  new \GuzzleHttp\Client(['headers' => ['Content-Type' => 'application/json', 'Authorization' => $code]]);  
                $request = $client->get($url);
                $decode = json_decode($request->getBody()->getContents(),true);
                
                if($decode['status'] == 'approved')
                {
                    $update = $this->paymentService->buildUpdate($pagamento->id,[
                        'status' => 2, //sucesso
                    ]);
                }
            }
        }

        $this->line('Finalizado com sucesso.');

    }
}
