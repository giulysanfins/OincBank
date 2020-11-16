<?php

namespace App\Yahp\Models;
use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{

    protected $table = 'dados';
    protected $fillable = [
        'dispositivo_id','litros','nivel_galao_01','nivel_galao_02'
    ];
    
}
