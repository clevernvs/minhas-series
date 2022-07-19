<?php

namespace Tests\Feature;

use App\Http\Requests\SeriesFormRequest;
use App\Repositories\Contracts\SeriesRepositoryInterface;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SeriesRepositoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_when_a_series_created_its_seasons_and_episodes_must_also_be_created()
    {
        // Arrange
        $repository = $this->app->make(SeriesRepositoryInterface::class);
        $request = new SeriesFormRequest();
        $request->nome = 'Nome da Série';
        $request->seasonsQty = 1;
        $request->episodesPerSeason = 1;
        
        // Act
        $repository->add($request);
        
        // Assert
        $this->assertDatabaseHas('series', ['nome' => 'Nome da Série']);
        $this->assertDatabaseHas('seasons', ['number' => 1]);
        $this->assertDatabaseHas('episodes', ['number' => 1]);
    }
}
