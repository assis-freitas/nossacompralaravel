<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = "tb_grupos";

    protected $fillable = ['gru_nome', 'usu_codigo'];
}