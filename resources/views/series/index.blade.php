<x-layout title="Séries" :mensagem-sucesso='$mensagemSucesso'>
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
</x-layout>