<nav class="navbar navbar-expand-lg text-light bg-dark">
    <div class="container-fluid">
        <a href="{{ route('series.index') }}" class="navbar-brand">
            <i class="bi-film d-inline-block align-text-top"></i>
            Minhas Series
        </a>
        
        {{-- @auth --}}
        <form  method="post">
            @csrf
            <button type="submit" class="btn btn-link">
                Sair <i class="bi bi-box-arrow-right"></i>
            </button>
        </form>
        {{-- @endauth --}}
    
        {{-- @guest
        <a href="{{ route('login') }}">Entrar</a>
        @endguest --}}
    </div>
</nav>
