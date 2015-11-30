@extends('template')

@section('conteudo')
	<h1>Grupos</h1>
	<a href="/grupos/novo">Novo Grupo</a>
	@if(count($grupos) > 0)

		<table>
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome</th>
					<th>Opções</th>
				</tr>
			</thead>
			<tbody>
				@foreach($grupos as $grupo)
					<tr>
						<td>{{ $grupo->gru_codigo }}</td>
						<td>{{ $grupo->gru_nome }}</td>
						<td>
							<a href="/grupos/editar/{{ $grupo->gru_codigo }}">Editar</a>
							<a href="/grupos/excluir/{{ $grupo->gru_codigo }}">Excluir</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>Nenhum grupo encontrado</p>
	@endif
@endsection