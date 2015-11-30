@extends('template')

@section('conteudo')
	<h1>Novo Grupo</h1>

	<form method="POST" action="/grupos">
		<label>Nome do grupo</label>
		<input type="text" name="nome">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<input type="submit" value="Adicionar">
	</form>
@endsection