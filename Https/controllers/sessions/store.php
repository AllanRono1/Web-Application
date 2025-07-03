<?php

#login our user if credential matches
use Https\Forms\LoginForm;
use Core\Authenticator;
use Core\Session;
use Core\ValidationException;

//create a login form and try to validate email and password

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$signedIn = (new Authenticator)->attempt($attributes['email'], $attributes['password']);

if (!$signedIn) {
    $form->errors("email", "No matching account for that email address and password.")
    ->throw();
}
$form->errors("email", "No matching account for that email address and password.")
->throw();

redirect('/');
