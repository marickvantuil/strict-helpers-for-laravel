# Use Laravel's helpers with strict type checking

Laravel offers some handy helpers out-of-the-box. But their return types can make it difficult to combine it with static code analysis like PHPStan:

```php
echo strlen(config('app.name'));
```
> Parameter #1 $string of function strlen expects string, mixed given

This happens because the helper can theoretically return any type:

```php
/**
 * Get / set the specified configuration value.
 *
 * If an array is passed as the key, we will assume you want to set an array of values.
 *
 * @param  array|string|null  $key
 * @param  mixed  $default
 * @return mixed|\Illuminate\Config\Repository
 */
function config($key = null, $default = null)
```

This package wraps Laravel's helpers and adds nice methods that always expect a clear return type.
If the method has a different return type, an exception will automatically be thrown, making it strict and 'safe'.

```php
use function Marick\LaravelSafe\config;

echo strlen(config('app.name')->string());
```

Or use the global helper:

```php
echo strlen(safeConfig('app.name'));

# Or in class form...
Helper::config('app.name')->string();
```
