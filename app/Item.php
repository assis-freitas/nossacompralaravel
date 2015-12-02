<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = "tb_items";

    protected $fillable = ['ite_codigo', 'lis_codigo', 'ite_descricao', 'ite_quantidade', 'ite_quantidade'];

    protected $primaryKey = 'ite_codigo';
}
