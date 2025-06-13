<?php

namespace Core;

class Router {

protected $routes = [];

public function get($uri, $controller)
{
   $this->routes[] = [
      'uri' => $uri,
      'controllers' => $controller,
      'method' => 'GET'
   ];
}

public function post($uri, $controller)
{
   $this->routes[] = [
      'uri' => $uri,
      'controllers' => $controller,
      'method' => 'POST'
   ];
}

public function delete($uri, $controller)
{
   $this->routes[] = [
      'uri' => $uri,
      'controllers' => $controller,
      'method' => 'DELETE'
   ];
}


public function route($uri, $method)
{
   foreach ($this->routes as $route){
      if ($route['uri'] === $uri) {
         return require base_path($route['controllers']);
      }
   }

   $this->abort();
}

 protected function abort($code = 404) {
 http_response_code($code);
 require base_path("views/{$code}.php");
 die();
}

}