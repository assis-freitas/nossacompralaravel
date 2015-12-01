<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Grupo;
use App\Lista;
use App\Item;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idGrupo, $idLista)
    {
        $grupo = Grupo::where('gru_codigo', '=', $idGrupo)->first();
        $lista = Lista::where('lis_codigo', '=', $idLista)->first();
        $itens = Item::where('lis_codigo', '=', $idLista)->get();

        return view('itens.index', ['itens' => $itens, 'grupo' => $grupo, 'lista' => $lista]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idGrupo, $idLista)
    {
        $grupo = Grupo::where('gru_codigo', '=', $idGrupo)->first();
        $lista = Lista::where('lis_codigo', '=', $idLista)->first();

        return view('itens.novo', [ 'grupo' => $grupo, 'lista' => $lista ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idGrupo, $idLista)
    {
        Item::create([
            'ite_descricao'  => $request->input('descricao'),
            'ite_quantidade' => $request->input('quantidade'),
            'ite_status'     => $request->input('status'),
            'lis_codigo'     => $idLista,
        ]);

        return redirect('/grupos/'.$idGrupo.'/listas/'.$idLista.'/itens');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idGrupo, $idLista, $id)
    {
        $grupo = Grupo::where('gru_codigo', '=', $idGrupo)->first();
        $lista = Lista::where('lis_codigo', '=', $idLista)->first();
        $item = Item::where('ite_codigo', '=', $id)->first();

        return view('itens.editar', ['item' => $item, 'grupo' => $grupo, 'lista' => $lista]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idGrupo, $idLista, $id)
    {
        Item::where('ite_codigo', '=', $id)
              ->update([
                    'ite_descricao'  => $request->input('descricao'),
                    'ite_quantidade' => $request->input('quantidade'),
                    'ite_status'     => $request->input('status'),
                    'lis_codigo'     => $idLista,
                ]);

        return redirect('/grupos/'.$id.'/listas/'.$idLista.'/itens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $idGrupo, $idLista, $id)
    {
        if($request->input('acao') == 'Sim'){
            Item::where('ite_codigo', '=', $id)
                  ->delete();
        }

        return redirect('/grupos/'.$idGrupo.'/listas/'.$idLista.'/itens');
    }

    public function delete($idGrupo, $idLista, $id){
        $grupo = Grupo::where('gru_codigo', '=', $idGrupo)->first();
        $lista = Lista::where('lis_codigo', '=', $idLista)->first();
        $item = Item::where('ite_codigo', '=', $id)->first();

        return view('itens.excluir', ['item' => $item, 'grupo' => $grupo, 'lista' => $lista]);
    }
}
