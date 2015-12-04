@extends('template')

@section('conteudo')
	<h1>Membros</h1>
	
	@if(count($membros) > 0)

		<table class="table">
			<thead>
				<tr>
					<th>Código do membros</th>
					<th>codigo do usuario</th>
					<th>Codigo do grupo</th>
					<th>Tipo do membro</th>
					<th>Nome membro que pega de usuario</th>
				</tr>
			</thead>
			<tbody>
				@foreach($membros as $membro)
					<tr>
						<td>{{ $membro->mem_codigo }}</td>
						<td>{{ $membro->usu_codigo }}</td>
						<td>{{ $membro->gru_codigo }}</td>
						<td>{{ $membro->mem_tipo }}</td>
						<td>{{ $membro->user->usu_nome }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p id="erroGrupo">Nenhum Membro foi encontrado</p>
	@endif
@endsection