<?php

namespace Hitocean\DistanceCalculator\Commands;

use Illuminate\Console\Command;

class DistanceCalculatorCommand extends Command
{
    public $signature = 'distance-calculator';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
