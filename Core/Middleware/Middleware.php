<?php

namespace Core\Middleware;

class Middleware
{
    const GPS = [
        'auth' => Auth::class,
        'guest' => Guest::class
    ];

    public static function resolve($key) 
    {
        if (! $key) {
            return;
        }
         $middleware = static::GPS[$key] ?? false;
        if (! $middleware) {
            throw new \Exception("No matching middleware found for key ".$key);
        }

         (new $middleware)->handle();
    }
}