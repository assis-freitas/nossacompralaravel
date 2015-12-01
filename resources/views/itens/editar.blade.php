@extends('template')

@section('conteudo')
	<ul class="breadcrumb">
		<li><a href="{{ action('ListasController@index', ['id' => $grupo->gru_codigo]) }}">{{ $grupo->gru_nome }}</a></li>
		<li>{{ $lista->lis_nome }}</li>
		<li>Itens</li>
		<li>{{ $item->ite_descricao }}</li>
		<li class="active">Editar</li>
	</ul>
	<h1>Editar Item</h1>


	<form method="POST" action="{{ action('ItemsController@update', ['idGrupo' => $grupo->gru_codigo, 'idLista' => $lista->lis_codigo, 'id' => $item->ite_codigo]) }}">
		<label>Descrição</label>
		<input type="text" name="descricao" value="{{ $item->ite_descricao }}">

		<label>Quantidade</label>
		<input type="number" name="quantidade" value="{{ $item->ite_quantidade }}">

		<input type="radio" name="status" value="1" @if($item->ite_status == 1) checked @endif>
		<label>Comprado</label>

		<input type="radio" name="status" value="0" @if($item->ite_status == 0) checked @endif>
		<label>Não Comprado</label>

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="PUT">

		<input type="submit" value="Editar">
	</form>
@endsection