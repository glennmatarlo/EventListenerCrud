<?php

namespace App\Listeners;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CrudListener
{
      /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        DB::table('logs')->insert([
            'user_id'   => auth()->user()->id,
            'log_entry'  => $event->log,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
