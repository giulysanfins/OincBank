<?php

namespace App\Yahp\Models;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{

    protected $table = 'parameters';
    protected $fillable = [
        'nome','slug','area','valor'
    ];
    
}
