<?php

namespace App\Listeners;

use App\Events\SeriesCreated as EventsSeriesCreated;
use App\Mail\SeriesCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Auth\User;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class EmailUsersAboutSeriesCreated implements ShouldQueue
{
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(EventsSeriesCreated $event)
    {   
        // Enviar email para destinatários
        $userList = User::all();

        foreach ($userList as $index => $user) {
            $email = new SeriesCreated(
                $event->seriesId, 
                $event->seriesName, 
                $event->seriesSeasonQty, 
                $event->seriesEpisodePerSeason
            );

            $when = now()->addSeconds($index * 2);
            Mail::to($user())->later($when, $email);
        }
    }
}
