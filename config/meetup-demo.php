<?php

return [
    'encoders' => [
        'morse' => Meetup\Encoder\Encoders\MorseCodeEncoder::class,
        'caesar' => Meetup\Encoder\Encoders\CaesarCipherEncoder::class,
    ],
];
