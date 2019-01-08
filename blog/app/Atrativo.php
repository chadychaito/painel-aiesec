<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atrativo extends Model
{
    protected $table = 'atrativos';
    public $timestamps = false;
    protected $fillable = array('id', 'nome', 'descricao', 'endereco');
}
