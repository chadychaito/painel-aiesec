<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\Endereco;
use App\Buddy;

class BuddyController extends Controller
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

        /* Criando Buddy */
        $data_buddy = [
            'cpf' => request('cpf'),
            'id_endereco' => $endereco->id, 
        ];
        Buddy::create($data_buddy);
        
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
        $buddys_join = DB::table('buddys')->join('enderecos', 'buddys.id_endereco', '=', 'enderecos.id')->get();

        return view('pages.dashboard.buddies.listar-buddy', compact('buddys_join'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id_buddy = Input::get('id');

        $buddy = Buddy::where('id_buddy', $id_buddy)->first();
        $endereco = Endereco::where('id', $buddy->id_endereco)->first();

        return view('pages.dashboard.buddies.editar-buddy', compact('buddy', 'endereco'));
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
        $id_buddy = Input::get('id');

        /* Auxiliar para conseguir acessar o id_endereco */
        $buddy_aux = Buddy::where('id_buddy', $id_buddy)->first();
        
        $buddy = Buddy::where('id_buddy', $buddy_aux->id_buddy)->update(['cpf' => request('cpf')]);
        
        $endereco = Endereco::where('id', $buddy_aux->id_endereco)->update(['logradouro' => request('logradouro'), 'numero' => request('numero'), 'complemento' => request('complemento')]);

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
        $id_buddy = Input::get('id');
        
        $buddy = Buddy::where('id_buddy', $id_buddy)->first();

        $destroy_end = Endereco::where('id', $buddy->id_endereco)->delete();

        $destroy_buddy = $buddy->delete();

        return back();
    }
}
