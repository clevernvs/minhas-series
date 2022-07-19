<?php

namespace App\Http\Controllers;

use App\Http\Repositories\Contracts\SeriesRepositoryInterface;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{
    protected $serie;

    public function __construct(SeriesRepositoryInterface $serie)
    {
        $this->serie = $serie;
    }

    public function index(SeriesRepositoryInterface $series)
    {
        $seasons = $series->seasons()->with('episodes')->get();

        return view('seasons.index')
            ->with('seasons', $seasons)
            ->with('series', $series);
    }
}
