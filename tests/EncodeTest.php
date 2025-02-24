<?php

use Meetup\Encoder\Encoder;

it('encodes a message using the specified method', function () {
    $result = Encoder::encode('hello world', 'morse');
    expect($result)->toBe('.... . .-.. .-.. --- / .-- --- .-. .-.. -..');
});
