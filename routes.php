<?php

//return [
//   '/' => 'controllers/index.php',
//   '/about' => 'controllers/about.php',
//   '/notes' => 'controllers/notes/index.php',
//   '/note' => 'controllers/notes/show.php',
//   '/create-note' => 'controllers/notes/create.php',
//   '/contact' => 'controllers/contact.php'
//];

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');

$router->post('/create-note', 'controllers/notes/create.php');
$router->get('/create-note', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');