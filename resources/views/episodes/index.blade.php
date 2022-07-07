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
