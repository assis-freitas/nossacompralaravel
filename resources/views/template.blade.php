<!DOCTYPE html>
<html>
<head>
	<title>Nossa Compra</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/estilo.css') }}">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Nossa Compra</a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                @if(!Auth::check())
                <form class="navbar-form navbar-right" action="/entrar/" role="search" method="post">
					<div class="form-group">
						<input title="Insira seu E-mail" type="text" class="form-control" placeholder="E-mail" name="user" autocomplete="off">
						<input title="Insira sua Senha" type="password" class="form-control" placeholder="Senha" name="pass">
					</div>
					<button title="Entrar em sua conta" type="submit" class="btn btn-default">Entrar</button>
				</form>
                @endif
                <ul class="nav navbar-nav navbar-right">
                    @if(Auth::check())
                        <li>
                            <a title="Ver todos seus grupos" href="/dashboard/">Meus Grupos</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> usuário_email <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="fa fa-cog"></i> Configurações</a>
                                </li>
                                <li>
                                    <a href="/logout/"><i class="fa fa-sign-out"></i> Sair</a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a title="Voltar a pagina inicial" href="/">Inicio</a></li>
                        <li><a title="Cadastrar um novo usuario" href="/cadastro/">Cadastrar</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid" id="conteudo">
		@yield('conteudo')
	</div>

	<div class="container" id="footer">
        <div class="row">
            <div class="col-md-12">
                <p>
                    &copy; <?php echo date("Y"); ?> &middot;  Todos os direitos reservados &middot; <span style="font-family: Pacifico">Nossa Compra</span>
                </p>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
        $('[data-toggle="tooltip"]').tooltip();
    </script>
    @yield('scripts')
</body>
</html>