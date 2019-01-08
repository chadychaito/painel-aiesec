<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Atrativo;

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

        // Agrupa os dados
        $data = [
            'nome' => request('nome'),
            'descricao' => request('descricao-ponto'), 
            'endereco' => request('endereco'),
        ];
        
        //Cria um MODEL atrativo com os dados
        $ponto_atrativo = Atrativo::create($data);
        
        /* Verifica se informou o arquivo e se é válido */
		if ($request->hasFile('image') && $request->file('image')->isValid()) {
			 
			// Recupera a extensão do arquivo
			$extension = $request->image->extension();
	 
			// Define finalmente o nome como sendo o ID.EXTENSÃO 
			$nameFile = "{$ponto_atrativo->id}.{$extension}";
	 
			// Faz o upload na pasta storage/public/pontos
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
        $pontos_atrativos = Atrativo::get();
        return view ('pages.dashboard.pontos-turisticos.listar-pontos-turisticos', compact('pontos_atrativos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id = Input::get('id');

        $ponto_atrativo = Atrativo::where('id', $id)->first();
        
        return view('pages.dashboard.pontos-turisticos.editar-pontos-turisticos', compact('ponto_atrativo'));
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
        $id = Input::get('id');

        $update_nome = Atrativo::where('id', '=', $id)->update(['nome' => $request->input('nome')]);
        
        return back();
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
