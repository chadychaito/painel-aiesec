<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $table = 'enderecos';
    public $timestamps = false;
    protected $fillable = array('id', 'logradouro', 'numero', 'complemento');
}
