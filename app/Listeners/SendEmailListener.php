<?php

namespace App\Listeners;

use App\Jobs\SendEmailJob;
use App\Mail\SendMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        SendEmailJob::dispatch($event->data)->delay(now()->addSeconds(5));
    }
}
