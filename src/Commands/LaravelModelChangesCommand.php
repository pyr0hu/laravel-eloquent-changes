<?php

namespace Pyr0hu\LaravelModelChanges\Commands;

use Illuminate\Console\Command;

class LaravelModelChangesCommand extends Command
{
    public $signature = 'laravel-model-changes';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
