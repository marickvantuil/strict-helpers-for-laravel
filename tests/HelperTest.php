<?php

use function Marick\LaravelStrict\config;

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
