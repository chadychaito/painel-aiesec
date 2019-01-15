<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

use App\Intercambista;

class IntercambistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

        $data = [
            'passaporte' => request('numPassaporte'),
            'nome' => request('nomeCompleto'),
            'sexo' => request('sexo'), 
            'data_nasc' => request('dataNascimento'),
            'telefone' => request('numTelefone'),
            'stats' => request('status'),
            'buddy' => request('buddy'),
            'host' => request('nomeHost'),
            'projeto' => request('projeto'),
            'data_inicio' => request('dataInicio'),
        ];
        
        /* Criando um Model Intercambista com os dados */ //Ja insere no BD
        Intercambista::create($data);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $intercambistas = Intercambista::get();
        $count = count($intercambistas);
        return view('pages.dashboard.intercambistas.listar-intercambista', compact('intercambistas', 'count'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $num_passaporte = Input::get('num_pass');

        $intercambista = Intercambista::where('passaporte', '=', $num_passaporte)->first();
        
        return view('pages.dashboard.intercambistas.editar-intercambista', compact('intercambista'));
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
        $num_passaporte = Input::get('num_pass');

        $update_nome = Intercambista::where('passaporte', $num_passaporte)->update(['nome' => $request->input('nomeCompleto')]);
    
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
        $num_passaporte = Input::get('num_pass');
        
        $intercambista =Intercambista::where('passaporte', $num_passaporte)->delete();
        
        return back();
    }
}
