<?php

namespace Meetup\Encoder;

class Encoder {

    private static array $encoders = [
        'morse' => Encoders\MorseCodeEncoder::class,
    ];

    public static function encode(string $text, string $method): string
    {
        $method = strtolower($method);

        if (!isset(self::$encoders[$method])) {
            throw new \InvalidArgumentException("Unsupported encoding method: {$method}");
        }

        $encoderClass = self::$encoders[$method];

        $encoder = new $encoderClass();

        return $encoder->encode($text);
    }
}
