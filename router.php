<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
//dd($uri);


 $routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/contact' => 'controllers/contact.php'
 ];

 function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
     } else {
        abort(404);
     }

 }

 function abort($code) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
 }

 routeToController($uri, $routes);