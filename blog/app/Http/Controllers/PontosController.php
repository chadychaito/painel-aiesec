<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PontosController extends Controller
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
        $result = DB::insert("INSERT INTO `pontosatrativos`(`nome`, `descricao`, `endereco`) VALUES (?, ?, ?)", 
        [$request->input('nome'),
        $request->input('descricao-ponto'),
        $request->input('endereco')]);
        
        // Verifica se informou o arquivo e se é válido
		if ($request->hasFile('image') && $request->file('image')->isValid()) {
			 
			// Recupera a extensão do arquivo
			$extension = $request->image->extension();
	 
			// Define finalmente o nome
			$nameFile = "{$request->input('nome')}.{$extension}";
	 
			// Faz o upload:
			$upload = $request->image->storeAs('pontos', $nameFile);
	 
			// Verifica se NÃO deu certo o upload (Redireciona de volta)
			if ( !$upload )
				return redirect()
							->back()
							->with('error', 'Falha ao fazer upload')
							->withInput();
	 
		}

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
        $pontos_atrativos = DB::table('pontosatrativos')->get();
        return view ('pages.dashboard.pontos-turisticos.listar-pontos-turisticos', compact('pontos_atrativos'));
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
