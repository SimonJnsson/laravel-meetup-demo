<?php

use Meetup\Encoder\Encoders\MorseCodeEncoder;

beforeEach(function () {
    $this->encoder = new MorseCodeEncoder();
});

it('encodes a single word to morse code', function () {
    $result = $this->encoder->encode('hello');
    expect($result)->toBe('.... . .-.. .-.. ---');
});

it('encodes a sentence with spaces to morse code', function () {
    $result = $this->encoder->encode('hello world');
    expect($result)->toBe('.... . .-.. .-.. --- / .-- --- .-. .-.. -..');
});

it('handles unknown characters gracefully', function () {
    $result = $this->encoder->encode('hello world!');
    expect($result)->toBe('.... . .-.. .-.. --- / .-- --- .-. .-.. -..');
});

it('encodes an empty string to an empty result', function () {
    $result = $this->encoder->encode('');
    expect($result)->toBe('');
});
