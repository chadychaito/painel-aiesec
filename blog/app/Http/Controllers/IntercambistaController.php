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
        $result = DB::insert("INSERT INTO `intercambistas`(`passaporte`, `nome`, `sexo`, `data_nasc`, `telefone`, `stats`, `buddy`, `host`, `projeto`, `data_inicio`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ? , ?)", 
                            [ 
                            $request->input('numPassaporte'),
                            $request->input('nomeCompleto'),
                            $request->input('sexo'), 
                            $request->input('dataNascimento'),
                            $request->input('numTelefone'),
                            $request->input('status'),
                            $request->input('buddy'),
                            $request->input('nomeHost'),
                            $request->input('projeto'),
                            $request->input('dataInicio')]);

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
        return view('pages.dashboard.intercambistas.listar-intercambista', compact('intercambistas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $num_passaporte = Input::get('num_pass');

        $intercambista = DB::table('intercambistas')->where('passaporte', '=', $num_passaporte)->first();
        
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

        $update_nome = DB::table('intercambistas')->where('passaporte', $num_passaporte)->update(['nome' => $request->input('nomeCompleto')]);
    
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
        
        $intercambista = DB::table('intercambistas')->where('passaporte', $num_passaporte)->delete();
        return back();
    }
}
