<?php

namespace App\Providers;

use App\Repositories\Contracts\SeriesRepositoryInterface;
use App\Repositories\Eloquent\SeriesRepository;
use Illuminate\Support\ServiceProvider;

class SeriesRepositoryProvider extends ServiceProvider
{

    // public array $bindings = [
    public $bindings = [
        SeriesRepositoryInterface::class => SeriesRepository::class,
    ];


    // public function register()
    // {
    //     // $this->app->bind(SeriesRepository::class, EloquentSeriesRepository::class);
    //     $this->app->bind(SeriesRepositoryInterface::class, SeriesRepository::class);
    //     $this->app->bind(SeriesRepository::class, SeriesRepositoryInterface::class);
    // }

}
