@component('mail::message')

# A série {{ $nomeSerie }} foi criada.

A série {{ $nomeSerie }} foi criada informando que tem {{ $qtdTemporadas }} temporadas e {{ $qtdEpisodiosPorTemporada }} episódios por temporada.

Acesse:
{{-- @component('mail::button', ['url' => route('seasons.index'), $idSerie]) --}}
@component('mail::button', ['url' => '#', $idSerie])
    Ver série
@endcomponent

@endcomponent