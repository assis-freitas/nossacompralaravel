@extends('template')

@section('conteudo')
	<div class="col-md-offset-3 col-md-6 col-md-offset-3">
		<ul class="breadcrumb">
			<li><a href="{{ action('ListasController@index', ['id' => $grupo->gru_codigo]) }}">{{ $grupo->gru_nome }}</a></li>
			<li>Listas</li>
			<li class="active">Novo</li>
		</ul>
		<h1>Nova Lista</h1>

		<form method="POST" action="{{ action('ListasController@store', ['id' => $grupo->gru_codigo]) }}">
			<div class="form-group">
				<label>Nome da lista</label>
				<input type="text" name="nome" class="form-control">
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Data Inicial</label>
						<input type="date" name="dataInicial" class="form-control">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label>Data Final</label>
						<input type="date" name="dataFinal" class="form-control">
					</div>
				</div>
			</div>

			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<input type="submit" value="Adicionar" class="btn btn-default">
		</form>
	</div>
@endsection