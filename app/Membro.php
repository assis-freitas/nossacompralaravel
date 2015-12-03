<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table = 'tb_membros';

    protected $fillabled = ['usu_codigo','gru_codigo','mem_tipo'];

    protected $primarykey = ['mem_codigo'];

    protected function user(){
    	return $this->belongsTo('App\User', 'usu_codigo');
    }

}
