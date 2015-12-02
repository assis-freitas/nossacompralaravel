@extends('template')

@section('conteudo')
	<ul class="breadcrumb">
		<li>{{ $grupo->gru_nome }}</li>
		<li>{{ $lista->lis_nome }}</li>
		<li class="active">Itens</li>
	</ul>
	<h1>Itens</h1>
	<a href="{{ action('ItemsController@create', ['idGrupo' => $grupo->gru_codigo, 'idLista' => $lista->lis_codigo]) }}" class="btn btn-default">Novo Item</a>
	@if(count($itens) > 0)

		<table class="table">
			<thead>
				<tr>
					<th>Código</th>
					<th>Descrição</th>
					<th>Quantidade</th>
					<th>Status</th>
					<th>Opções</th>
				</tr>
			</thead>
			<tbody>
				@foreach($itens as $item)
					<tr>
						<td>{{ $item->ite_codigo }}</td>
						<td>{{ $item->ite_descricao }}</td>
						<td>{{ $item->ite_quantidade }}</td>
						<td>
							@if($item->ite_status == 0)
								Não foi comprado
							@else
								Comprado
							@endif
						</td>
						<td>
							<a href="{{ action('ItemsController@edit', ['idGrupo' =>  $grupo->gru_codigo, 'idLista' => $lista->lis_codigo, 'id' => $item->ite_codigo]) }}">Editar</a>
							<a href="{{ action('ItemsController@delete', ['idGrupo' =>  $grupo->gru_codigo, 'idLista' => $lista->lis_codigo, 'id' => $item->ite_codigo]) }}">Excluir</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p id="erroGrupo">Nenhum item foi encontrado</p>
	@endif
@endsection