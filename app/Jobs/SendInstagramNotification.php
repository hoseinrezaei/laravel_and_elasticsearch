<?php

namespace App\Jobs;

use App\Models\Alarm;
use App\Models\Instagram;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendInstagramNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $instagram;

    /**
     * Create a new job instance.
     */
    public function __construct(Instagram $instagram)
    {
        $this->instagram = $instagram;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $alarms = Alarm::where('platform', 'news')
            ->where('source', $this->instagram->source_username)
            ->get();

        foreach ($alarms as $alarm)
        {
            //get users email, and mobile number
            //send notification to user
            //and anything
        }
    }
}
