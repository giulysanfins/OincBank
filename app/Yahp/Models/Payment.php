<?php

namespace App\Yahp\Models;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $table = 'payments';
    protected $fillable = [
       'user_id','campanha_id','valor','status','pagamento_id',
       'pagamento_tipo','preference_id'
    ];
    protected $with = ['user','campanha'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function campanha()
    {
        return $this->hasOne(Campanha::class, 'id', 'campanha_id');
    }
    
}
