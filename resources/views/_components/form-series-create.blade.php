<form action="{{ route('series.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">
        <div class="col-8">
            <label for="nome" class="form-label">Nome da Série:</label>
            <input id="nome" name="nome" type="text" class="form-control" value="{{ old('nome') }}" autofocus />
        </div>
        <div class="col-2">
            <label for="seasonsQty" class="form-label">Temporadas:</label>
            <input id="seasonsQty" name="seasonsQty" type="text" class="form-control" value="{{ old('seasonsQty') }}" />
        </div>
        <div class="col-2">
            <label for="episodesPerSeason" class="form-label">Eps / Temporada:</label>
            <input id="episodesPerSeason" name="episodesPerSeason" type="text" class="form-control" value="{{ old('episodesPerSeason') }}" />
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <label for="cover" class="form-label">Capa:</label>
            <input id="cover" name="cover" type="file" class="form-control" accept="image/jpeg, image/jpg, image/png"/>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Adicionar</button>
</form>  

