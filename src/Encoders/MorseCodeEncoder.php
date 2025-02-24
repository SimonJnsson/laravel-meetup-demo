<?php

namespace Meetup\Encoder\Encoders;

class MorseCodeEncoder implements Contracts\Encoder
{
    protected array $morseMap = [
        'a' => '.-', 'b' => '-...', 'c' => '-.-.', 'd' => '-..', 'e' => '.',
        'f' => '..-.', 'g' => '--.', 'h' => '....', 'i' => '..', 'j' => '.---',
        'k' => '-.-', 'l' => '.-..', 'm' => '--', 'n' => '-.', 'o' => '---',
        'p' => '.--.', 'q' => '--.-', 'r' => '.-.', 's' => '...', 't' => '-',
        'u' => '..-', 'v' => '...-', 'w' => '.--', 'x' => '-..-', 'y' => '-.--',
        'z' => '--..', ' ' => '/'
    ];

    public function encode(string $text): string
    {
        $text = strtolower($text);

        $encoded = array_map(fn($char) => $this->morseMap[$char] ?? '', str_split($text));
        $encoded = array_filter($encoded);

        return implode(' ', $encoded);
    }
}
