@extends('template')

@section('conteudo')
	<div class="col-md-offset-3 col-md-6 col-md-offset-3">

		<h1>Editar Grupo</h1>


		<form method="POST" action="{{ action('ListasController@update', ['idGrupo' => $grupo->gru_codigo, 'id' => $lista->lis_codigo]) }}">
			<div class="form-group">
				<label>Nome da lista</label>
				<input type="text" name="nome" value="{{ $lista->lis_nome }}" class="form-control">
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Data Inicial</label>
						<input type="date" name="dataInicial" value="{{ $lista->lis_data_inicial }}" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Data Final</label>
						<input type="date" name="dataFinal" value="{{ $lista->lis_data_final }}" class="form-control">
					</div>
				</div>
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="_method" value="PUT">

			<input type="submit" value="Editar" class="btn btn-default">
		</form>
	</div>
@endsection