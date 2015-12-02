@extends('template')

@section('conteudo')
	<div class="col-md-offset-3 col-md-6 col-md-offset-3">
		<h1>Novo Grupo</h1>

		<form method="POST" action="/grupos">
			<div class="form-group">
				<label>Nome do grupo</label>
				<input type="text" name="nome" class="form-control">
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<input type="submit" value="Adicionar" class="btn btn-default">
		</form>
	</div>
@endsection