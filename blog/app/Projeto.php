<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $table = 'projetos';
    public $timestamps = false;
    protected $fillable = array('id','cnpj', 'nome', 'descricao');
}
