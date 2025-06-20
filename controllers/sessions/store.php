<?php

#login our user if credential matches

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve("Core\Database");

$email = $_POST['email'];
$password = $_POST['password'];


$error = [];

if (! Validator::string($email)) {
$error['email'] = "Invalid email address";
}

if (! Validator::string($password)) {
    $error['password'] = "Incorrect password";
}

if (! empty($error)){
    return require base_path("views/sessions/create.view.php");
}

#match credentials

$users = $db->query("select * from users where email = :email", [
    'email' => $email
])->fetch();

if(! $users){
    #match the corresponding password for the email

if (password_verify($password, $users['password']))
{
    login($users);
    header('location: /');
    exit();
}}

return require base_path("views/sessions/create.view.php", [$error['email'] = "No matching account for that email address and password"]);
