<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Host extends Model
{
    protected $table = 'hosts';
    public $timestamps = false;
    protected $fillable = array('cpf', 'id_endereco', 'nome', 'telefone');
    protected $primaryKey = 'id_host';
}
