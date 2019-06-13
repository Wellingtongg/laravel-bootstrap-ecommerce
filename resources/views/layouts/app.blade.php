@php
    $qtdCarrinho = 0;
    if (Auth::check())
    {
        $qtdCarrinho = App\Models\PedidoProduto::join('pedidos', 'pedidos.id', '=', 'pedido_produtos.pedido_id')
            ->where('pedido_produtos.status', 'RE')
            ->where('pedidos.user_id', Auth::user()->id)
            ->count();
    }

    if ($qtdCarrinho > 0) {
        $display = '';
    } else {
        $display = 'd-none';
    }
@endphp

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bootstrap</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/js/all.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Loja Online
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link container-carrinho" href="{{ route('carrinho.index') }}">
                                    <div class="box-carrinho">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>
                                    <span class="qtd-carrinho {{ $display }}">{{ $qtdCarrinho }}</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('carrinho.compras') }}">Minhas compras</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Olá, {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="text-white bg-dark py-5">
            
        </footer>
    </div>
</body>
</html>


<style>
        .box-carrinho {
            background-color: orange;
            border-radius: 100%;
            color: #343a40;
            font-size: 15px;
            padding: 6px;
        }
    
        .qtd-carrinho {
            background-color: red;
            border-radius: 100%;
            color: #fff;
            font-size: 12px;
            font-weight: bold;
            height: 15px;
            line-height: 11px;
            padding: 2px;
            position: absolute;
            right: 0;
            text-align: center;
            top: 7%;
            width: 15px;
        }

        .container-carrinho {
            position: relative;
        }

        @media screen and (max-width: 768px) {
            .container-carrinho {
            width: 29px;
            }
        }
    </style>

<script>
    jQuery(document).ready(function() {
        var windowHeight = jQuery(window).height();
        var contentHeight = jQuery('#app').height();

        if (windowHeight > contentHeight) {
            jQuery('footer').css('marginTop', windowHeight - contentHeight);
        }
    });        
</script>