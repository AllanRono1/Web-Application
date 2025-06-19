<?php

use Core\Validator;
use Core\App;

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

$user = $db->query("select * from users where email = :email", ['email' => $_POST['email']])->fetch();
if ($user) {
    #if user exists redirect to the login page
    header("location: /");
    exit();
} else {
    #if not create a account for the new user and save records to database
$db->query("INSERT INTO users(email, password) VALUES(:email, :password)", [
     'email' => $email,
     'password' => $password
 ]);
    
     #mark the user has logged in
    $_SESSION['users'] = [
        'email' => $email
    ];

    #redirect to home page

    header("location: /");
    exit();
}
