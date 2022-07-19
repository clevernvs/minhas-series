<form action="{{ route('series.store') }}" method="POST">
    @csrf
    @method('PUT')
    {{-- @isset($update)
        @method('PUT')
    @endisset --}}
    <div class="mb-3">
        <label for="nome" class="form-label">Nome da Série:</label>
        <input type="text" id="nome" name="nome" class="form-control" @isset($nome) value="{{ $nome }}" @endisset />
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>

