<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Intercambista extends Model
{
    protected $table = 'intercambistas';
    public $timestamps = false;
    protected $fillable = array('passaporte', 'nome', 'sexo', 'data_nasc', 'telefone', 'email', 'stats', 'senha', 'buddy', 'host', 'projeto', 'data_inicio');
}
