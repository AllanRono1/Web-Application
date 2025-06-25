<?php

#login our user if credential matches
use Https\Forms\LoginForm;
use Core\Authenticator;

$email = $_POST['email'];
$password = $_POST['password'];
$access = $_POST['access'];



//create a login form and try to validate email and password

$form = new LoginForm;
if (! $form->validate($email,$password,$access)) {
    return require base_path("views/sessions/create.view.php", [$error = $form->errors()]);

}

#match credentials and match corresponding password


if ((new Authenticator)->attempt($email, $password)) {
    redirect('/');
}
$form->error('email', "No matching account for that email address and password.");



return require base_path("views/sessions/create.view.php");

