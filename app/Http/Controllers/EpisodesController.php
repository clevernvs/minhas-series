<?php

namespace App\Http\Controllers;

use App\Http\Repositories\Contracts\EpisodeRepositoryInterface;
use App\Http\Repositories\Contracts\SeasonRepositoryInterface;
use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    protected $season;
    protected $episode;

    public function __construct(SeasonRepositoryInterface $season, EpisodeRepositoryInterface $episode)
    {
        $this->season = $season;
        $this->episode = $episode;
    }

    public function index(SeasonRepositoryInterface $season)    
    {        
        return view('episodes.index')
            ->with('episodes', $season->episodes)
            ->with('mensagem.sucesso', $season('mensagem.sucesso'))
            ->with('title', 'Episódios');        
    }

    // public function update(Request $request, Season $season)
    public function update(SeasonRepositoryInterface $season, Request $request)
    {
        $watchedEpisodes = $request->episodes;
        $season->episodes->each(function($this->episode) use ($watchedEpisodes) {
            $episode->watched = in_array($episode->id, $watchedEpisodes);
        });

        $season->push();

        return to_route('episodes.index', $season->id)
            ->with('mensagem.sucesso', 'Episódios marcados como assistidos.');
        
    }
}
