<?php

namespace Meetup\Encoder;

class Encoder {

    public static function encode(string $text, string $method, array $options = []): string
    {
        $method = strtolower($method);
        $encoders = config('meetup-demo.encoders', []);

        if (!isset($encoders[$method])) {
            throw new \InvalidArgumentException("Unsupported encoding method: {$method}");
        }

        $encoderClass = $encoders[$method];

        if (!class_exists($encoderClass) || !in_array(Encoders\Contracts\Encoder::class, class_implements($encoderClass))) {
            throw new \InvalidArgumentException("Encoder '{$method}' must implement the Encoder interface");
        }

        /** @var \Meetup\Encoder\Encoders\Contracts\Encoder $encoder */
        $encoder = new $encoderClass();

        return $encoder->encode($text, $options);
    }
}
