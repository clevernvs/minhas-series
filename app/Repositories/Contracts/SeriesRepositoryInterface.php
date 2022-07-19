<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Models\Season;
use App\Models\Episode;
use Illuminate\Http\Request;

interface SeriesRepositoryInterface
{    
    public function __construct(Series $serie, Season $season, Episode $episode);
    public function all();
    public function add(Request $request);
    public function delete();
    public function update();
    public function seasons();
}
