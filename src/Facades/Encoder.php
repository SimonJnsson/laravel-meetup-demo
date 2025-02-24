<?php

namespace Meetup\Encoder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Meetup\Encoder\Encoder
 */
class Encoder extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Meetup\Encoder\Encoder::class;
    }
}
