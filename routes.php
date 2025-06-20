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
$router->get('/register', 'controllers/registration/create.php')->only('guest');
$router->post('/register', 'controllers/registration/store.php');

$router->get('/login', 'controllers/sessions/create.php')->only('guest');
$router->post('/session', 'controllers/sessions/store.php')->only('guest');
$router->delete('/session', 'controllers/sessions/destroy.php')->only('auth');


$router->get('/notes', 'controllers/notes/index.php')->only('auth');
$router->get('/note', 'controllers/notes/show.php');
$router->delete('/note', 'controllers/notes/destroy.php');


$router->get('/note/edit', 'controllers/notes/edit.php');
$router->patch('/notes', 'controllers/notes/update.php');


$router->post('/create-note', 'controllers/notes/create.php');
$router->get('/create-note', 'controllers/notes/create.php');
$router->post('/notes', 'controllers/notes/store.php');