<?php

namespace App\Providers;

use App\Events\OurExampleEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class OurExampleListerner
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(OurExampleEvent $event): void
    {
        //
    }
}
