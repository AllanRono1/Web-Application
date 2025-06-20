<?php

namespace Core\Middleware;

class Middleware
{
    const GPS = [
        'auth' => Auth::class,
        'guest' => Guest::class
    ];
}