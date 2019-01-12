<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Ong;

class OngController extends Controller
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
            'telefone' => request('telefone'),
        ];

        Ong::create($data);

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
        $ongs = Ong::get();

        return view('pages.dashboard.ongs.listar-ong', compact('ongs'));
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

        $ong = Ong::where('id', $id)->first();

        return view('pages.dashboard.ongs.editar-ong', compact('ong'));
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

        Ong::where('id', $id)->update(['cnpj' => request('cnpj'), 'nome' => request('nome'), 'telefone' => request('telefone')]);
    
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

        Ong::where('id', $id)->delete();

        return back();
    }
}
