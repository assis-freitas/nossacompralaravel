@extends('template')

@section('conteudo')
	<ul class="breadcrumb">
		<li><a href="{{ action('ListasController@index', ['id' => $grupo->gru_codigo]) }}">{{ $grupo->gru_nome }}</a></li>
		<li>Listas</li>
		<li class="active">Novo</li>
	</ul>
	<h1>Nova Lista</h1>

	<form method="POST" action="{{ action('ListasController@store', ['id' => $grupo->gru_codigo]) }}">
		<label>Nome da lista</label>
		<input type="text" name="nome">

		<label>Data Inicial</label>
		<input type="date" name="dataInicial">

		<label>Data Final</label>
		<input type="date" name="dataFinal">

		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<input type="submit" value="Adicionar">
	</form>
@endsection