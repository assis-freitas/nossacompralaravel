@extends('template')

@section('conteudo')
	<h1>Editar Grupo</h1>


	<form method="POST" action="/grupos/editar/{{ $grupo->gru_codigo }}">
		<label>Nome do grupo</label>
		<input type="text" name="nome" value="{{ $grupo->gru_nome }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="PUT">

		<input type="submit" value="Editar">
	</form>
@endsection