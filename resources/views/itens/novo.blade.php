@extends('template')

@section('conteudo')
	<ul class="breadcrumb">
		<li>{{ $grupo->gru_nome }}</li>
		<li>{{ $lista->lis_nome }}</li>
		<li>Itens</li>
		<li class="active">Novo</li>
	</ul>
	<h1>Novo Item</h1>

	<form method="POST" action="{{ action('ItemsController@store', ['idGrupo' => $grupo->gru_codigo, 'idLista' => $lista->lis_codigo]) }}">
		<label>Descrição</label>
		<input type="text" name="descricao">

		<label>Quantidade</label>
		<input type="number" name="quantidade">

		<input type="radio" name="status" value="1" checked>
		<label>Comprado</label>

		<input type="radio" name="status" value="0">
		<label>Não Comprado</label>

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<input type="submit" value="Adicionar">
	</form>
@endsection