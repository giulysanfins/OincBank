<?php

namespace App\Yahp\Models;
use Illuminate\Database\Eloquent\Model;

class Campanha extends Model
{

    protected $table = 'campanhas';
    protected $fillable = [
        'titulo','categoria_id','valor','data_encerramento','profile_image','video','descricao','status','user_id'
    ];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $with = ['categoria'];

    // 
    public function categoria()
    {
        return $this->hasOne(Category::class, 'id', 'categoria_id');
    }
}
