<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Endereco;
use App\Host;


class HostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Criando Endereco */
        $data_end = [
            'logradouro' => request('logradouro'),
            'numero' => request('numero'),
            'complemento' => request('complemento'),
        ];
        $endereco = Endereco::create($data_end);

        /* Criando Host */
        $data_host = [
            'cpf' => request('cpf'),
            'id_endereco' => $endereco->id, 
        ];
        Host::create($data_host);
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        /* Pega todos os Hosts */
        $hosts = Host::get();
        $enderecos = Endereco::get();
        
        /* Para cada Host procura seu Endereço na Tabela 'enderecos' 
        foreach($hosts as $host){
            $endereco = Endereco::where('id', $host->id_endereco)->first();
        }*/

        return view('pages.dashboard.hosts.listar-hosts', compact('hosts', 'enderecos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
