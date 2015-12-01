@extends('template')

@section('conteudo')
	<ul class="breadcrumb">
		<li><a href="{{ action('ListasController@index', ['id' => $grupo->gru_codigo]) }}">{{ $grupo->gru_nome }}</a></li>
		<li>Listas</li>
		<li>{{ $lista->lis_nome }}</li>
		<li class="active">Editar</li>
	</ul>

	<h1>Editar Grupo</h1>


	<form method="POST" action="{{ action('ListasController@update', ['idGrupo' => $grupo->gru_codigo, 'id' => $lista->lis_codigo]) }}">
		<label>Nome da lista</label>
		<input type="text" name="nome" value="{{ $lista->lis_nome }}">

		<label>Data Inicial</label>
		<input type="date" name="dataInicial" value="{{ $lista->lis_data_inicial }}">

		<label>Data Final</label>
		<input type="date" name="dataFinal" value="{{ $lista->lis_data_final }}">

		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="PUT">

		<input type="submit" value="Editar">
	</form>
@endsection