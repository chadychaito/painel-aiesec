<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

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
            'nome' => request('nomeCompleto'),
            'cpf' => request('cpf'),
            'id_endereco' => $endereco->id, 
            'telefone' => request('telefone'),
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
        /* Pega todos os Hosts e faz Join com a tabela de Endereços*/
       $hosts_join = DB::table('hosts')->join('enderecos', 'hosts.id_endereco', '=', 'enderecos.id')->get();

        return view('pages.dashboard.hosts.listar-host', compact('hosts_join'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id_host = Input::get('id');

        $host = Host::where('id_host', $id_host)->first();
        $endereco = Endereco::where('id', $host->id_endereco)->first();

        return view('pages.dashboard.hosts.editar-host', compact('host', 'endereco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id_host = Input::get('id');

        /* Auxiliar para conseguir acessar o id_endereco */
        $host_aux = Host::where('id_host', $id_host)->first();
        
        $host = Host::where('id_host', $host_aux->id_host)->update(['cpf' => request('cpf'), 'nome' => request('nomeCompleto'), 'telefone' => request('telefone')]);
        
        $endereco = Endereco::where('id', $host_aux->id_endereco)->update(['logradouro' => request('logradouro'), 'numero' => request('numero'), 'complemento' => request('complemento')]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id_host = Input::get('id');
        
        $host = Host::where('id_host', $id_host)->first();

        $destroy_end = Endereco::where('id', $host->id_endereco)->delete();

        $destroy_host = $host->delete();

        return back();
    }
}
