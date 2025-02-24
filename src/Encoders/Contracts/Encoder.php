<?php

namespace Meetup\Encoder\Encoders\Contracts;

interface Encoder
{
    public function encode(string $text): string;
}
