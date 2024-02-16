<?php

namespace App\Jobs;

use App\Models\Alarm;
use App\Models\News;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendNewsNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */

    protected $news;
    public function __construct(News $news)
    {
        $this->news = $news;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $alarms = Alarm::where('platform', 'news')
            ->where('source', $this->news->source)
            ->get();

        foreach ($alarms as $alarm)
        {
            //get users email, and mobile number
            //send notification to user
            //and anything
        }
    }
}
