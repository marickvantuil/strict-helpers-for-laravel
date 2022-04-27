<?php

declare(strict_types=1);

namespace Marick\LaravelStrict {
    use JetBrains\PhpStorm\Pure;

    #[Pure]
    function value(mixed $value, ...$args): Strict
    {
        return new Strict('value', ...func_get_args());
    }

    #[Pure]
    function config($key = null, $default = null): Strict
    {
        return new Strict('config', ...func_get_args());
    }
}

namespace {

    use Marick\LaravelStrict\Strict;

    function strictConfig($key = null, $default = null): Strict
    {
        return new Strict('config', ...func_get_args());
    }
}
