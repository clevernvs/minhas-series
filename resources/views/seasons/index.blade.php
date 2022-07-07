<x-layout title="Temporadas de {{ $series->nome }}">

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
</x-layout>
