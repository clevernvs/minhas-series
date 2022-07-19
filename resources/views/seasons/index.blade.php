@extends('layouts.template')

{{-- @section('title', 'Episódios') --}}
@section('title', $title)

@section('content')

    <div class="row text-center mt-3">        
        <h1>Temporadas de </h1> {{-- <h1>Temporadas de {{ $series->nome }}</h1> --}}
        <hr />
    </div>

    <div class="text-center">
        <img src="{{ asset("storage/{$series->cover}") }}" alt="Capa da série" class="img-fluid" style="height: 400px;"/>
    </div>

    <ul class="list-group">       
        <li class="list-group-item d-flex justify-between align-items-center">
            <a href="{{ route('episodes.index') }}">
                Temporada: <b>01</b>
            </a>
            <span class="badge bg-secondary">1 / 10</span>
        </li>
        
    </ul>

    {{-- 
    <ul class="list-group">
        @foreach ($seasons as $season)
        <li class="list-group-item d-flex justify-between align-items-center">
            <a href="{{ route('episodes.index', $season->id) }}">
                Temporada: <b>{{ $season->number }}</b>
            </a>

            <span class="badge bg-secondary">
               {{ $season->numberOfWatchedEpisodes() }} / {{ $season->episodes->count() }}
            </span>
        </li>
        @endforeach
    </ul> 
    --}}
    
@endsection

{{-- <x-layout title="Temporadas de {{ $series->nome }}">

    <ul class="list-group">
        @foreach ($seasons as $season)
        <li class="list-group-item d-flex justify-between align-items-center">
            <a href="{{ route('episodes.index', $season->id) }}">
                Temporada: <b>{{ $season->number }}</b>
            </a>

            <span class="badge bg-secondary">
               {{ $season->numberOfWatchedEpisodes() }} / {{ $season->episodes->count() }}
            </span>
        </li>
        @endforeach
    </ul>
</x-layout> --}}
