@extends('template')

@section('conteudo')
	<ul class="breadcrumb">
		<li>{{ $grupo->gru_nome }}</li>
		<li>{{ $lista->lis_nome }}</li>
		<li>Itens</li>
		<li>{{ $item->ite_descricao }}</li>
		<li class="active">Excluir</li>
	</ul>
	<h1>Você realmente deseja excluir o item {{ $item->ite_descricao }}?</h1>

	<form method="POST" action="{{ action('ItemsController@destroy', ['idGrupo' => $grupo->gru_codigo, 'idLista' => $lista->lis_codigo, 'id' => $item->ite_codigo]) }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<input type="submit" value="Sim" name="acao" class="btn btn-default btn-danger">
		<input type="submit" value="Não" name="acao" class="btn btn-default">
	</form>
@endsection