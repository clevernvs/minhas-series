<x-layout title="Editar Série '{{ $serie->nome }}'">
    <x-form action="{{ route('series.store') }}" :nome="$serie->nome" :update="true" />
</x-layout>
