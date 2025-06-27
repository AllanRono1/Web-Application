<?php

#login our user if credential matches
use Https\Forms\LoginForm;
use Core\Authenticator;
use Core\Session;

$email = $_POST['email'];
$password = $_POST['password'];
//create a login form and try to validate email and password

$form = new LoginForm();

if ($form->validate($email,$password)) {
if ((new Authenticator)->attempt($email, $password)) {
    redirect('/');
}
$form->errors("email", "No matching account for that email address and password.");
}

Session::flash('error', $form->error());

return redirect('/login');
//return require base_path("views/sessions/create.view.php", $error = $form->error());

