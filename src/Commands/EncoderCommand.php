<?php

namespace Meetup\Encoder\Commands;

use Illuminate\Console\Command;

class EncoderCommand extends Command
{
    public $signature = 'laravel-meetup-demo';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
