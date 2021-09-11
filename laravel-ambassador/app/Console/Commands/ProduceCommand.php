<?php

namespace App\Console\Commands;

use App\Jobs\ProduceJob;
use Illuminate\Console\Command;

class ProduceCommand extends Command
{
    protected $signature = 'produce';
    
    public function handle()
    {
        ProduceJob::dispatch();
    }
}
