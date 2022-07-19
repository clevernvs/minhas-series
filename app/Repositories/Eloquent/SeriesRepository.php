<?php

namespace App\Repositories\Eloquent;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;
use App\Repositories\Contracts\SeriesRepositoryInterface;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

// class SeriesRepository extends AbstractRepository implements SeriesRepositoryInterface
class SeriesRepository implements SeriesRepositoryInterface
{    
    // protected $model = Series::class;
    protected $serie;
    protected $season;
    protected $episode;

    public function __construct(Series $serie, Season $season, Episode $episode)
    {
        $this->serie = $serie;
        $this->season = $season;
        $this->episode = $episode;
    }

    public function all()
    {
        return $this->serie->all();
    }

    public function add(Request $request)
    {
        return DB::transaction(function () use ($request, &$serie) {
            
            $serie = $this->serie->create([
                'nome' => $request->nome,
                'cover' => $request->coverPath,
            ]);
            
            $seasons = [];
            for ($i = 1; $i <= $request->seasonsQty; $i++) {
                $seasons[] = [
                    'series_id' => $serie->id,
                    'number' => $i
                ];
            }
            // Season::insert($seasons);
            $this->season->insert($seasons);

            
            $episodes = [];
            foreach ($serie->seasons as $season) {
                for ($j = 1; $j <= $request->episodesPerSeason; $j++) {
                    $episodes[] = [
                        'season_id' => $season->id,
                        'number' => $j
                    ];
                }
            }
            // Episode::insert($episodes);
            $this->episode->insert($episodes);

            return $serie;
        });
    }

    public function delete()
    {
        return $this->serie->delete();        
    }

    public function update()
    {
        return $this->serie->create();        
    }

    public function seasons()
    {
        // return $this->hasMany($this->season, 'series_id');
        // return $this->hasMany(Season::class, 'series_id');
    }


}
