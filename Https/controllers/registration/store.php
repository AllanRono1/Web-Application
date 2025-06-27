<?php

use Core\Authenticator;
use Core\Validator;
use Core\App;
use Https\Forms\LoginForm;

$db = App::resolve('Core\Database');


$email = $_POST['email'];
$password = $_POST['password'];

#validate if email for registration

$error = [];

if (! Validator::email($email)){
    $error['email'] = "Input a valid email, buddy";
}

if (! Validator::string($password, 6, 255)){
    $error['password'] = "Invalid password";
}

if (! empty($error)) {
    return require base_path("views/registration/create.view.php");
}

#if the user exists, login to the page

$users = $db->query("select * from users where email = :email", ['email' => $_POST['email']])->fetch();
if ($users) {
    #if user exists redirect to the login page
    header("location: /");
    exit();
} else {
    #if not create a account for the new user and save records to database
$db->query("INSERT INTO users(email, password) VALUES(:email, :password)", [
     'email' => $email,
     'password' => password_hash($password, PASSWORD_BCRYPT)
 ]);
    
     #mark the user has logged in
    login($users);

    #redirect to home page

    header("location: /");
    exit();
}
