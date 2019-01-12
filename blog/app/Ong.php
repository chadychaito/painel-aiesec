<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ong extends Model
{
    protected $table = 'ongs';
    public $timestamps = false;
    protected $fillable = array('id','cnpj', 'nome', 'telefone');
}
