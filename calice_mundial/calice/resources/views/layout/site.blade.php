<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>@yield('titulo')</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Teste tralala</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">Vendas</a>
                </li>
                <li>
                    <a href="#">Estoque</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Cadastros <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">Clientes</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Produtos</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Pedidos</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Relatórios <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="#">Vendas</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Financeiro</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">Logado como: Fulano</a>
                </li>
                <li>
                    <a href="#">Sair</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script href="js/bootstrap.min.js"></script>
<script href="js/jquery.min.js"></script>
</body>
</html>
