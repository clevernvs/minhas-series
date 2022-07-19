@extends('layouts.template')

@section('title', $title)

@section('content')
<div class="row text-center mt-3">    
    <h1>Séries</h1> 
    <hr />
</div>

<div class="row">
    <div class="col-2 mb-3">
        <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">
            <i class="bi bi-plus-square"></i> Adicionar Série
        </a>
    </div>
</div>

<ul class="list-group">
    @foreach ($series as $serie) 
    <li class="list-group-item d-flex align-items-center" style="justify-content: space-between;">
        <div class="d-flex align-items-center">
            {{-- <img src="{{ asset("storage/{$serie->cover}") }}" alt="Thumbnail de {{$series->nome}}" class="thumbnail me-3" width="100" /> --}}
            <img src="" alt="Thumbnail de Nome da Série" class="thumbnail me-3" width="100" />
      
            <span><i class="bi bi-film"></i> <b>{{ $serie->nome }}</b></span> 
            {{-- <span><i class="bi bi-film"></i> <b>Nome da Série</b></span>  --}}
        </div>
        <span class="d-flex">
            <a  href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">
            {{-- <a  href="#" class="btn btn-primary btn-sm"> --}}
                <i class="bi bi-pencil-square"></i>
            </a>
            <button type="submit" class="btn btn-danger btn-sm ms-2">
                <i class="bi bi-x-square"></i>
            </button>
        </span>
    </li>
@endforeach 
</ul>

{{-- 

@auth
<a href="{{ route('series.create') }}" class="btn btn-dark mb-2">+ Adicionar série</a>
@endauth 

<ul class="list-group">
    @foreach ($series as $serie) 
    <li class="list-group-item d-flex justify-between align-items-center">       
        
            @auth<a href="{{ route('seasons.index', $serie->id) }}">@endauth
                <i class="bi bi-film"></i> {{ $serie->nome }}
            @auth</a>@endauth 
        
            @auth
            <span class="d-flex">            
                <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">
                    <i class="bi bi-pencil-square"></i> Editar
                </a>

                <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="bi bi-x-square"></i>Remover
                    </button>
                </form> 
            }
            </span>
            @endauth 
        
    </li>
    @endforeach 
</ul>

--}}

@endsection



{{-- <x-layout title="Séries" :mensagem-sucesso='$mensagemSucesso'>
    @auth
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">+ Adicionar série</a>
    @endauth

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-between align-items-center">

            @auth<a href="{{ route('seasons.index', $serie->id) }}">@endauth
                {{ $serie->nome }}
            @auth</a>@endauth

            @auth
            <span class="d-flex">
                <a href="{{ route('series.edit', $serie->id) }}" class="btn-btn-primary btn-sm">Editar</a>

                <form action="{{ route('series.destroy', $serie->id) }}" method="post" class="ms-2">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Remover</button>
                </form>
            </span>
            @endauth
        </li>
        @endforeach
    </ul>
</x-layout> --}}