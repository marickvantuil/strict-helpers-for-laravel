<?php

declare(strict_types=1);

namespace Marick\LaravelSafe {
    use JetBrains\PhpStorm\Pure;

    #[Pure]
    function value(mixed $value, ...$args): Safe
    {
        return new Safe('value', ...func_get_args());
    }

    #[Pure]
    function config($key = null, $default = null): Safe
    {
        return new Safe('config', ...func_get_args());
    }
}

namespace {

    use Marick\LaravelSafe\Safe;

    function safeConfig($key = null, $default = null): Safe
    {
        return new Safe('config', ...func_get_args());
    }
}
