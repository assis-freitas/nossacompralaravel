@extends('template')

@section('conteudo')
	<div class="col-md-offset-3 col-md-6 col-md-offset-3">
		<ul class="breadcrumb">
			<li>{{ $grupo->gru_nome }}</li>
			<li>{{ $lista->lis_nome }}</li>
			<li>Itens</li>
			<li class="active">Novo</li>
		</ul>
		<h1>Novo Item</h1>

		<form method="POST" action="{{ action('ItemsController@store', ['idGrupo' => $grupo->gru_codigo, 'idLista' => $lista->lis_codigo]) }}">
			
			<div class="form-group">
				<label>Descrição</label>
				<input type="text" name="descricao" class="form-control">
			</div>

			<div class="form-group">
				<label>Quantidade</label>
				<input type="number" name="quantidade" class="form-control">
			</div>

			<div class="form-group">
				<input type="radio" name="status" value="1" checked>
				<label>Comprado</label>

				<input type="radio" name="status" value="0">
				<label>Não Comprado</label>
			</div>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<input type="submit" value="Adicionar" class="btn btn-default">
		</form>
	</div>
@endsection