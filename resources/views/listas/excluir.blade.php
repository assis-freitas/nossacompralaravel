@extends('template')

@section('conteudo')
	<ul class="breadcrumb">
		<li><a href="{{ action('ListasController@index', ['id' => $grupo->gru_codigo]) }}">{{ $grupo->gru_nome }}</a></li>
		<li>Listas</li>
		<li>{{ $lista->lis_nome }}</li>
		<li class="active">Excluir</li>
	</ul>
	<h1>Você realmente deseja excluir a lista {{ $lista->lis_nome }}?</h1>

	<form method="POST" action="{{ action('ListasController@destroy', ['idGrupo' => $grupo->gru_codigo, 'id' => $lista->lis_codigo]) }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<input type="submit" value="Sim" name="acao" class="btn btn-default btn-danger">
		<input type="submit" value="Não" name="acao" class="btn btn-default">
	</form>
@endsection