<?php

namespace App\Yahp\Models;
use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{

    protected $table = 'campanhas';
    protected $fillable = [
        'id','titulo','categoria_id','valor','data_encerramento','profile_image','video','descricao','status','user_id','motivo_deletado'
    ];
    protected $guarded = ['created_at', 'update_at'];
    protected $with = ['categoria'];
    protected $dates = ['data_encerramento'];

    // categorias
    public function categoria()
    {
        return $this->hasOne(Category::class, 'id', 'categoria_id');
    }
}
