<?php

namespace App\Yahp\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $table = 'photos';
    protected $fillable = [
        'area', 'area_id', 'path', 'principal', 'mensagem_rejeitado'
    ];
}
