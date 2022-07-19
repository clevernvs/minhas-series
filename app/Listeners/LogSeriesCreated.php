<?php

namespace App\Listeners;

use App\Events\SeriesCreated as EventsSeriesCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class LogSeriesCreated implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\SeriesCreated  $event
     * @return void
     */
    public function handle(EventsSeriesCreated $event)
    {
       Log::info("A série {$event->seriesName} foi criada com sucesso.");
    }
}
