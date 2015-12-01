@extends('template')

@section('conteudo')
	<div class="row">
		<div class="col-md-offset-3 col-md-6 col-md-offset-3">
			<ul class="breadcrumb">
				<li>{{ $grupo->gru_nome }}</li>
				<li class="active">Editar</li>
			</ul>
			<h1>Editar Grupo</h1>

			<form method="POST" action="/grupos/editar/{{ $grupo->gru_codigo }}">
				<div class="form-group">
					<label>Nome do grupo</label>
					<input type="text" name="nome" value="{{ $grupo->gru_nome }}" class="form-control">
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="hidden" name="_method" value="PUT">

				<input type="submit" value="Editar" class="btn btn-default">
			</form>
		</div>
	</div>
@endsection