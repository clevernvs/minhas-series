@extends('layouts.template')

{{-- @section('title', 'Episódios') --}}
@section('title', $title)

@section('content')

    <div class="row text-center mt-3">        
        <h1>Episódios - 01 Temporada</h1> {{-- <h1>Episódios -  {{ $season->number }} Temporada</h1> --}}
        <hr />
    </div>

    <form action="" method="POST">
        @csrf
        <ul class="list-group">
            <li class="list-group-item d-flex justify-between">
                <div class="col-11">
                    Episódio: <b>01</b>
                </div>
                <div class="col-1 text-right">
                    {{-- <input name="episodes[]" type="checkbox" value="{{ $episode->id }}" @if ($episode->wachted) checked @endif> --}}
                    <input name="episodes[]" type="checkbox" />                    
                </div>
                
            </li>
        </ul>

        <button class="btn btn-primary mt-2 mb-2">Salvar</button>
    </form>    
    
    {{-- 
    <form action="" method="POST">
        @csrf
        <ul class="list-group">
            @foreach ($episodes as $episode)
            <li class="list-group-item d-flex justify-between align-items-center">
                Episódio: <b>{{ $episode->number }}</b>
                <input name="episodes[]" type="checkbox" value="{{ $episode->id }}" @if ($episode->wachted) checked @endif>
            </li>
            @endforeach
        </ul>

        <button class="btn btn-primary mt-2 mb-2">Salvar</button>
    </form>
    --}}
@endsection


{{-- 
<x-layout title="Episódios" :mensagem-sucesso='$mensagemSucesso'>

    <form action="" method="POST">
        @csrf
        <ul class="list-group">
            @foreach ($episodes as $episode)
            <li class="list-group-item d-flex justify-between align-items-center">
                Episódio: <b>{{ $episode->number }}</b>
                <input name="episodes[]" type="checkbox" value="{{ $episode->id }}" @if ($episode->wachted) checked @endif>
            </li>
            @endforeach
        </ul>

        <button class="btn btn-primary mt-2 mb-2">Salvar</button>
    </form>

</x-layout> 
--}}
