<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Grupo;
use App\Lista;

class ListasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $grupo = Grupo::where('gru_codigo', '=', $id)->first();
        $listas = Lista::where('gru_codigo', '=', $id)->get();

        return view('listas.index', ['listas' => $listas, 'grupo' => $grupo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $grupo = Grupo::where('gru_codigo', '=', $id)->first();
        return view('listas.novo', [ 'grupo' => $grupo ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        Lista::create([
            'lis_nome'         => $request->input('nome'),
            'lis_data_inicial' => $request->input('dataInicial'),
            'lis_data_final'   => $request->input('dataFinal'),
            'gru_codigo'       => $id
        ]);

        return redirect('/grupos/'.$id.'/listas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idGrupo, $id)
    {
        $grupo = Grupo::where('gru_codigo', '=', $id)->first();
        $lista = Lista::where('lis_codigo', '=', $id)->first();

        return view('listas.editar', ['lista' => $lista, 'grupo' => $grupo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idGrupo, $id)
    {
        Lista::where('lis_codigo', '=', $id)
               ->update([
                    'lis_nome' => $request->input('nome'),
                    'lis_data_inicial' => $request->input('dataInicial'),
                    'lis_data_final' => $request->input('dataFinal'),
                ]);
        return redirect('/grupos/'.$idGrupo.'/listas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $idGrupo, $id)
    {
        if($request->input('acao') == 'Sim'){
            Lista::where('lis_codigo', '=', $id)
                   ->delete();
        }

        return redirect('/grupos/'.$idGrupo.'/listas');
    }

    public function delete($idGrupo, $id){
        $grupo = Grupo::where('gru_codigo', '=', $id)->first();
        $lista = Lista::where('lis_codigo', '=', $id)->first();

        return view('listas.excluir', [ 'lista' => $lista, 'grupo' => $grupo ]);
    }
}
