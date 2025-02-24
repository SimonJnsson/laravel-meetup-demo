<?php

namespace Meetup\Encoder\Encoders;

class CaesarCipherEncoder implements Contracts\Encoder
{
    protected int $defaultShift = 3;

    public function encode(string $text, array $options = []): string
    {
        $shift = $options['shift'] ?? $this->defaultShift;
        $result = '';

        foreach (str_split($text) as $char) {
            if (ctype_alpha($char)) {
                $offset = ord(ctype_upper($char) ? 'A' : 'a');
                $result .= chr((ord($char) - $offset + $shift) % 26 + $offset);
            } else {
                $result .= $char;
            }
        }

        return $result;
    }
}
