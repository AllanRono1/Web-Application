<?php

#login our user if credential matches
use Core\App;
use Core\Database;
use Core\Validator;
use Https\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];



$db = App::resolve("Core\Database");

$form = new LoginForm;
if (! $form->validate($email,$password)) {
    return require base_path("views/sessions/create.view.php", [$error = $form->errors()]);

}

#match credentials

$users = $db->query("select * from users where email = :email", [
    'email' => $email
])->fetch();

if($users){
    #match the corresponding password for the email

if (password_verify($password, $users['password']))
{
    login($users);
    header('location: /');
    exit();
}}

return require base_path("views/sessions/create.view.php", [$error['email'] = "No matching account for that email address and password"]);
