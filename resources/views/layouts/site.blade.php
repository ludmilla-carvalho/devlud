<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <base href="{{ route('site.index') }}" />

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content="Programadora, desenvolvimento web, Front-end e Back-end (Full-stack). Sites responsivos.">
    <meta name="keywords" content="Desenvolvimento web, Front-end, Back-end, Full-stack, php, thml5, wordpress, css, laravel, cakephp"/>

    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ route('site.index') }}" />
    <meta property="og:image" content="{{ asset('images/logo.svg') }}" />

    <!-- Styles -->
    <link href="{{ asset('css/site/site.css') }}" rel="stylesheet">
    @stack('styles')

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107570390-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-107570390-1');
    </script>

</head>
<?php
if(Request::is('habilidade/*') || Request::is('habilidades')){
    $b_class='skill';
}else{
    $b_class='';
}
?>
<body class="{{ $b_class }}">

    <div class="wrapper">

        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('site.index') }}">
                    <img src="{{ asset('images/logo.svg') }}" alt="{{ config('app.name', 'Laravel') }}" class="logo">
                    <h1 style="display: none;">DevLud</h1>
                </a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li  @if(Request::is('/')) class="active" @endif><a href="{{ route('site.index') }}">Home <span class="sr-only">(current)</span></a></li>
                    <li @if(Request::is('portfolio/*') || Request::is('portfolio')) class="active" @endif><a href="{{ route('site.portfolio') }}">Portfolio</a></li>
                    <li @if(Request::is('habilidade/*') || Request::is('habilidades')) class="active" @endif><a href="{{ route('site.skills') }}">Habilidades</a></li>
                    <li @if(Request::is('sobre')) class="active" @endif><a href="{{ route('site.about') }}">Sobre</a></li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li @if(Request::is('contato')) class="active" @endif><a href="{{ route('site.contact') }}">Contato</a></li>
                    <li><a href="https://www.linkedin.com/in/ludmilla-carvalho" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://github.com/ludmilla-carvalho" target="_blank"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.facebook.com/ludmilla.carvalho666" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>


        @yield('content')
        <div class="push"></div>
    </div>

    <footer id="footer" class="footer">
        <ul class="nav navbar-nav">
            <li @if(Request::is('contato')) class="active" @endif><a href="{{ route('site.contact') }}">Contato</a></li>
            <li><a href="https://www.linkedin.com/in/ludmilla-carvalho" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="https://github.com/ludmilla-carvalho/" target="_blank"><i class="fa fa-github-alt" aria-hidden="true"></i></a></li>
            <li><a href="https://www.facebook.com/ludmilla.carvalho666" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('js/site/site.js') }}"></script>
    @stack('scripts')
</body>
</html>
