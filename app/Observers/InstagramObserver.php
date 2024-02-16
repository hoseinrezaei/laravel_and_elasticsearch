<?php

namespace App\Observers;

use App\Jobs\SendInstagramNotification;
use App\Models\Instagram;

class InstagramObserver
{
    /**
     * Handle the Instagram "created" event.
     */
    public function created(Instagram $instagram): void
    {
        SendInstagramNotification::dispatch($instagram);
    }

    /**
     * Handle the Instagram "updated" event.
     */
    public function updated(Instagram $instagram): void
    {
        //
    }

    /**
     * Handle the Instagram "deleted" event.
     */
    public function deleted(Instagram $instagram): void
    {
        //
    }

    /**
     * Handle the Instagram "restored" event.
     */
    public function restored(Instagram $instagram): void
    {
        //
    }

    /**
     * Handle the Instagram "force deleted" event.
     */
    public function forceDeleted(Instagram $instagram): void
    {
        //
    }
}
