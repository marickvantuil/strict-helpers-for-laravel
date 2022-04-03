<?php

use function Marick\LaravelSafe\config;

test('example', function (array $output) {
    [$actual, $expected] = $output;
    expect($actual)->toBe($expected);
})->with([
    function () {
        return [
            config('app.name')->string(),
            'Laravel'
        ];
    },
]);
