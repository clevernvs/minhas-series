<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - MinhasSeries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
<body>
    @include('_partials.navbar')

    <div class="container">      
        
        {{-- 
        <div class="row text-center mt-3">
            <h1> {{ $title }}</h1>
            <hr />
        </div>

        @isset($mensagemSucesso)
        <div class="alert alert-sucess">
            {{ $mensagemSucesso }}
        </div>
        @endisset

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{ $slot }} 
        --}}

    @yield('content')

</div>

@include('_partials.footer')

</body>
</html>


{{-- 
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - MinhasSeries</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <div class="row text-center">
        <h1>{{ $title }}</h1>
        <hr />
    </div>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a href="{{ route('series.index') }}" class="navbar-brand" href="#">Minhas Series</a>

            @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-link">Sair</button>
            </form>
            @endauth

            @guest
            <a href="{{ route('login') }}">Entrar</a>
            @endguest
        </div>
    </nav>

    @isset($mensagemSucesso)
    <div class="alert alert-sucess">
        {{ $mensagemSucesso }}
    </div>
    @endisset

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ $slot }}
</div>
</body>
</html> 
--}}
