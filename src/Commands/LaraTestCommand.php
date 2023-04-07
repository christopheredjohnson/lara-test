<?php

namespace Christopheredjohnson\LaraTest\Commands;

use Illuminate\Console\Command;

class LaraTestCommand extends Command
{
    public $signature = 'lara-test';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
