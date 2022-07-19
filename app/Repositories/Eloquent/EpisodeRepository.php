<?php

namespace App\Repositories\Eloquent;

use App\Models\Episode;
use App\Models\Season;
use App\Repositories\Contracts\EpisodeRepositoryInterface;

class EpisodeRepository implements EpisodeRepositoryInterface
{
    protected $episode;
    protected $season;

    public function __construct(Episode $episode, Season $season)
    {
        $this->episode = $episode;
        $this->season = $season;
    }

    public function season()
    {
        return $this->episode->belongsTo($this->season);        
    }
}