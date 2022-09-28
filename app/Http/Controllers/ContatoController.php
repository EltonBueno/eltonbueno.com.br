<?php

namespace App\Http\Controllers;

use App\Models\contato;
use Illuminate\Http\Request;


class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatos = Contato::OrderBy('');
        return view('contato.index')->with(compact('contatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contato = null;
        return view('contato.form')->with(compact('contato'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $contato = new Contato();
        $contato->fill($request->all());
        $contato->save();
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function show(contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function edit(contato $contato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contato $contato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(contato $contato)
    {
        //
    }
}
