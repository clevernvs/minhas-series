<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Autenticador;
use App\Http\Repositories\SeriesRepository;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository)
    {
        $this->middleware(Autenticador::class)->except('index');
    }

    public function index(Request $request)
    {
        $series = Series::all();

        $mensagemSucesso = session('messagem.sucesso');

        return view('series.index')->with('series', $series)->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $serie = $this->repository->add($request);

        return to_route('series.index')->with('mensagem.sucesso', "A série '{$serie->nome}' adicionada com sucesso!");
    }

    public function destroy(Series $series, Request $request)
    {
        $series->delete();

        // return redirect()->route('series.index');
        return to_route('series.index')->with('message.sucesso', "A série '{$series->nome}' removida com sucesso!");
    }

    public function edit(Series $series)
    {

        return view('series.edit')->with('serie', $series);
    }

    public function update(Series $series, SeriesFormRequest $request)
    {
        // $series->nome = $request->nome;
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')->with('mensagem.sucesso', "A série '{$series->nome}' foi atualizada com sucesso!");
    }
}
