<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $table = 'tb_listas';

    protected $fillable = ['gru_codigo', 'lis_nome', 'lis_data_inicial', 'lis_data_final'];
}
