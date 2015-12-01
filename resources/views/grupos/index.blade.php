@extends('template')

@section('conteudo')
	<h1>Grupos</h1>
	<a href="/grupos/novo" class="btn btn-default">Novo Grupo</a>
	<div class="clearfix"></div> 
	@if(count($grupos) > 0)
		<div id="boxs">
			@foreach($grupos as $grupo)
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3>{{ $grupo->gru_nome }}</h3>
						</div>
						<div class="panel-body">
							<a href="{{ action('GruposController@edit', ['id' => $grupo->gru_codigo]) }}" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Editar Grupo"><i class="fa fa-pencil"></i></a>
							<a href="{{ action('GruposController@delete', ['id' => $grupo->gru_codigo]) }}" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Excluir Grupo"><i class="fa fa-times-circle"></i></a>
							<a href="{{ action('ListasController@index', ['id'   => $grupo->gru_codigo]) }}" class="btn btn-default"  data-toggle="tooltip" data-placement="bottom" title="Lista de Compras"><i class="fa fa-list"></i></a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	@else
		<p id="erroGrupo">Nenhum grupo foi encontrado</p>
	@endif
@endsection