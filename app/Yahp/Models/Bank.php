<?php

namespace App\Yahp\Models;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{

    protected $table = 'bank';
    protected $fillable = [
       'numero','nome'
    ];
    
}
