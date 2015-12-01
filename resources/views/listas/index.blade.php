@extends('template')

@section('conteudo')
	<ul class="breadcrumb">
		<li><a href="{{ action('ListasController@index', ['id' => $grupo->gru_codigo]) }}">{{ $grupo->gru_nome }}</a></li>
		<li class="active">Listas</li>
	</ul>
	<h1>Listas</h1>
	<a href="{{ action('ListasController@create', ['id' => $grupo->gru_codigo]) }}" class="btn btn-default">Nova Lista</a>
	@if(count($listas) > 0)
		<div id="boxs">
			@foreach($listas as $lista)
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3>{{ $lista->lis_nome }}</h3>
						</div>
						<div class="panel-body">
							<a href="{{ action('ListasController@edit', ['idGrupo' => $grupo->gru_codigo, 'id' => $lista->lis_codigo]) }}" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Editar Lista"><i class="fa fa-pencil-square-o"></i></a>
							<a href="{{ action('ListasController@delete', ['idGrupo' => $grupo->gru_codigo, 'id' => $lista->lis_codigo]) }}" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Excluir Lista"><i class="fa fa-minus-circle"></i></a>
							<a href="{{ action('ItemsController@index', ['idGrupo' => $grupo->gru_codigo, 'id' => $lista->lis_codigo]) }}" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Itens da Lista"><i class="fa fa-list-ul"></i></a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	@else
		<p id="erroGrupo">Nenhuma lista foi encontrada</p>
	@endif
@endsection