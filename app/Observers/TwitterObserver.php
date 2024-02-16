<?php

namespace App\Observers;

use App\Jobs\SendTwitterNotification;
use App\Models\Twitter;

class TwitterObserver
{
    /**
     * Handle the Twitter "created" event.
     */
    public function created(Twitter $twitter): void
    {
        SendTwitterNotification::dispatch($twitter);
    }

    /**
     * Handle the Twitter "updated" event.
     */
    public function updated(Twitter $twitter): void
    {
        //
    }

    /**
     * Handle the Twitter "deleted" event.
     */
    public function deleted(Twitter $twitter): void
    {
        //
    }

    /**
     * Handle the Twitter "restored" event.
     */
    public function restored(Twitter $twitter): void
    {
        //
    }

    /**
     * Handle the Twitter "force deleted" event.
     */
    public function forceDeleted(Twitter $twitter): void
    {
        //
    }
}
