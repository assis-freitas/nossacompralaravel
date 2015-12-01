@extends('template')

@section('conteudo')
	<div class="row">
		<div class="col-md-offset-3 col-md-6 col-offset-3">
			<ul class="breadcrumb">
				<li><a href="{{ action('ListasController@index', ['id' => $grupo->gru_codigo]) }}">{{ $grupo->gru_nome }}</a></li>
				<li class="active">Excluir</li>
			</ul>
			<h1>Você realmente deseja excluir o grupo {{ $grupo->gru_nome }}?</h1>

			<form method="POST" action="/grupos/excluir/{{ $grupo->gru_codigo }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="DELETE">

				<input type="submit" value="Sim" name="acao" class="btn btn-default btn-danger">
				<input type="submit" value="Não" name="acao" class="btn btn-default">
			</form>
		</div>
	</div>
@endsection