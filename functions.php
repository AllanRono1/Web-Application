<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return ($_SERVER['REQUEST_URI'] === $value);
}

function authorize($condition){
    if(!  $condition){
        abort(Response::FORBIDDEN);
    }
}

function base_path($path, $attributes = [])
{
    extract ($attributes);
    return BASE_PATH . $path;
}