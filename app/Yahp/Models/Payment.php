<?php

namespace App\Yahp\Models;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $table = 'payments';
    protected $fillable = [
       'user_id','campanha_id','valor','status','pagamento_id','pagamento_tipo','preference_id',
       'status','documento', 'bank_id','agencia','conta_corrente','tipo','data_pagamento','motivo_negado','anonimo'
    ];
    protected $dates = ['data_pagamento'];

    protected $with = ['user','campanha','banco'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function campanha()
    {
        return $this->hasOne(Campanha::class, 'id', 'campanha_id');
    }

    public function banco()
    {
        return $this->hasOne(Bank::class, 'id', 'bank_id');
    }

}
