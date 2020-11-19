<?php

namespace App\Yahp\Models;
use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{

    protected $table = 'campanhas';
    protected $fillable = [
        'titulo','categoria','valor','data_encerramento','url','video','descricao'
    ];
    protected $guarded = ['id', 'created_at', 'update_at'];
}
