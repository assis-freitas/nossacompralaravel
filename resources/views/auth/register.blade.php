@extends('template')

@section('conteudo')
<!-- resources/views/auth/register.blade.php -->

<div class="col-md-offset-3 col-md-6 col-md-offset-3">
    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form method="POST" action="/cadastrar">
        {!! csrf_field() !!}

        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="usu_nome" value="{{ old('nome') }}" class="form-control">
        </div>

        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="usu_email" value="{{ old('email') }}" class="form-control">
        </div>

        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="usu_senha" class="form-control">
        </div>

        <div class="form-group">
            <label>Confirmar Senha</label>
            <input type="password" name="usu_senha_confirmation" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-default">Cadastrar</button>
        </div>
    </form>
</div>
@endsection