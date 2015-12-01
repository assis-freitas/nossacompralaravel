<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Grupo;

class GruposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::where('usu_codigo', '=', '1')->get();
        return view('grupos.index', ['grupos' => $grupos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupos.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Grupo::create([
            'gru_nome'   => $request->input('nome'),
            'usu_codigo' => 1
        ]);

        return redirect('/grupos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grupo = Grupo::where('gru_codigo', '=', $id)->first();

        return view('grupos.editar', [ 'grupo' => $grupo ]);
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
        Grupo::where('gru_codigo', '=', $id)
               ->update(['gru_nome' => $request->input('nome')]);

        return redirect('/grupos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if($request->input('acao') == 'Sim'){
            Grupo::where('gru_codigo', '=', $id)
                   ->delete();
        }

        return redirect('/grupos');
    }

    public function delete($id){
        $grupo = Grupo::where('gru_codigo', '=', $id)->first();

        return view('grupos.excluir', [ 'grupo' => $grupo ]);
    }
}
