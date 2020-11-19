<?php

namespace App\Yahp\Models;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    protected $table = 'modules';
    protected $fillable = [
        'name','route','icon','slug','type','menu_master','order'
    ];
    
}
