<?php

namespace Core\Middleware;

class Auth 
{
    public function handle()
    {
         if (! $_SESSION['users'] ?? false) {
                  header('location: /');
                  exit();
               }
    }
}