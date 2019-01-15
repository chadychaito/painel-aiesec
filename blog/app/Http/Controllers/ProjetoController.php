<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Projeto;

class ProjetoController extends Controller
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
        $data = [
            'cnpj' => request('cnpj'),
            'nome' => request('nome'),
            'descricao' => request('descricao'),
        ];

        $projeto = Projeto::create($data);

        /* Verifica se informou o arquivo e se é válido */
		if ($request->hasFile('image') && $request->file('image')->isValid()) {
			 
			// Recupera a extensão do arquivo
			$extension = $request->image->extension();
	 
			// Define finalmente o nome como sendo o ID.EXTENSÃO 
			$nameFile = "{$projeto->id}.{$extension}";
	 
			// Faz o upload na pasta storage/public/projeto
			$upload = $request->image->storeAs('projetos', $nameFile);
	 
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
        $projetos = Projeto::get();
        
        return view('pages.dashboard.projetos.listar-projeto', compact('projetos'));
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

        $projeto = Projeto::where('id', $id)->first();
        
        return view('pages.dashboard.projetos.editar-projeto', compact('projeto'));
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

        Projeto::where('id', $id)->update(['cnpj' => request('cnpj'), 'nome' => request('nome'), 'descricao' => request('descricao')]);
        
        /* Verifica se informou o arquivo e se é válido */
		if ($request->hasFile('image') && $request->file('image')->isValid()) {
			 
			// Recupera a extensão do arquivo
			$extension = $request->image->extension();
	 
			// Define finalmente o nome como sendo o ID.EXTENSÃO 
			$nameFile = "{$id}.{$extension}";
	 
			// Faz o upload na pasta storage/public/projeto
			$upload = $request->image->storeAs('projetos', $nameFile);
	 
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = Input::get('id');

        Projeto::where('id', $id)->delete();
        
        return back();
    }
}
