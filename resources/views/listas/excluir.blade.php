@extends('template')

@section('conteudo')
	<h1>Você realmente deseja excluir o grupo {{ $grupo->gru_nome }}?</h1>

	<form method="POST" action="/grupos/excluir/{{ $grupo->gru_codigo }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<input type="submit" value="Sim" name="acao">
		<input type="submit" value="Não" name="acao">
	</form>
@endsection