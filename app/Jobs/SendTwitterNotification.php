<?php

namespace App\Jobs;

use App\Models\Alarm;
use App\Models\Twitter;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendTwitterNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $twitter;

    /**
     * Create a new job instance.
     */
    public function __construct(Twitter $twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $alarms = Alarm::where('platform', 'twitter')
            ->where('source', $this->twitter->source_username)
            ->get();

        foreach ($alarms as $alarm)
        {
            //get users email, and mobile number
            //send notification to user
            //and anything
        }
    }
}
