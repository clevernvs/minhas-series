{{-- <x-layout title="Editar Série '{{ $serie->nome }}'">
    <x-form action="{{ route('series.store') }}" :nome="$serie->nome" :update="true" />
</x-layout> --}}


@extends('layouts.template')

{{-- @section('title', 'Editar Série') --}}
@section('title', $title)

@section('content')

    <div class="row text-center mt-3">
        {{-- <h1>Editar Série {{ $serie->nome }}</h1> --}}
        <h1>Editar Série</h1>
        <hr />
    </div>

    @component('_components.form-series-edit')
    @endcomponent

@endsection