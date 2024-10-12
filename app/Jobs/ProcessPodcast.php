<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Sleep;
use Illuminate\Support\Facades\Redis;
class ProcessPodcast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public array $datos;
    
    public function __construct(array $datos)
    {
        $this->datos = $datos;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->datos as $key => $value) {
            \Log::info($key);
            Sleep::for(1)->second();
        }
    }
}
