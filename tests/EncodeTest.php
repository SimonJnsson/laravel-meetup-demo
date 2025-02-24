<?php

use Meetup\Encoder\Encoder;

it('encodes a message using the specified method', function () {
    $result = Encoder::encode('hello world', 'morse');
    expect($result)->toBe('.... . .-.. .-.. --- / .-- --- .-. .-.. -..');
});

it('throws an exception for unsupported encoding methods', function () {
    expect(fn() => Encoder::encode('hello world', 'unsupported'))
        ->toThrow(InvalidArgumentException::class, 'Unsupported encoding method: unsupported');
});

it('throws an exception if the encoder class does not exist', function () {
    config(['meetup-demo.encoders' => [
        'invalid' => 'NonExistentClass'
    ]]);
    expect(fn() => Encoder::encode('hello world', 'invalid'))
        ->toThrow(InvalidArgumentException::class, "Encoder 'invalid' must implement the Encoder interface");
});

it('throws an exception if the encoder does not implement the required interface', function () {
    config(['meetup-demo.encoders' => [
        'invalid' => stdClass::class
    ]]);
    expect(fn() => Encoder::encode('hello world', 'invalid'))
        ->toThrow(InvalidArgumentException::class, "Encoder 'invalid' must implement the Encoder interface");
});
