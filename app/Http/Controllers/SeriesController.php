<?php

namespace App\Http\Controllers;

// use App\Http\Middleware\Autenticador;

use App\Events\SeriesCreated;
use App\Http\Requests\SeriesFormRequest;
use App\Repositories\Contracts\SeriesRepositoryInterface;
use Illuminate\Http\Request;

class SeriesController extends Controller
{    
    protected $serie;

    public function __construct(SeriesRepositoryInterface $serie)
    {
        $this->serie = $serie;
    }

    // public function teste()
    // {
    //     $series = $this->serie->all();

    //     return view('series.index', [
    //         'title' => 'Home',
    //         'series' => $series
    //     ]);
    // }

    public function index(SeriesRepositoryInterface $serie)
    {           
        $series = $serie->all();        
        $mensagemSucesso = session('messagem.sucesso');

        return view('series.index', [
            'title' => 'Home',
            'series' => $series,
            'mensagemSucesso' => $mensagemSucesso
        ]);
    }

    public function create()
    {
        return view('series.create', [
            'title' => 'Adicionar',
        ]);
    }

    public function store(SeriesRepositoryInterface $serie, Request $request)
    {
        $coverPath = null;

        if ($request->hasFile('cover')) {
            $coverPath = $request->file('cover')->store('series_cover', 'public');            
        }        

        $request->coverPath = $coverPath;

        $serie = $serie->add($request);

        SeriesCreated::dispatch($serie->id, $serie->nome, $request->seasonsQty, $request->episodesPerSeason);

        return to_route('series.index')
            ->with('mensagem.sucesso', "A série '{$serie->nome}' adicionada com sucesso!");        
    }

    public function destroy(SeriesRepositoryInterface $serie, Request $request)
    {
        $nomeSerie = $request->nome;
        $serie->delete();
        
        return to_route('series.index')
            ->with('message.sucesso', "A série '{$nomeSerie}' removida com sucesso!");        
    }

    public function edit(SeriesRepositoryInterface $serie)
    {
        return view('series.edit')
            ->with('serie', $serie)
            ->with('title', 'Editar Série');
    }

    public function update(SeriesRepositoryInterface $serie, Request $request)
    {
        $nomeSerie = $request->nome;
        $serie->update($request->all());
        
        return to_route('series.index')
            ->with('mensagem.sucesso', "A série '{$nomeSerie}' foi atualizada com sucesso!");
    }
}
