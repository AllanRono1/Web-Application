<?php

namespace Core;

use Core\Session;


class Authenticator 
{

public function attempt($email,$password)
{
    #check in the db if there are users with their corresponding emails
    $users = App::resolve("Core\Database")->query("select * from users where email = :email", [
    'email' => $email
])->fetch();

if($users){
    #match the corresponding password for the email

if (password_verify($password, $users['password']))
{
    $this->login($users);
    return true;
}
}
return false;

}

public function login($users)
{
    $_SESSION['users'] = [
        'email' => $users['email']
    ];
    session_regenerate_id(true);
}

public function logout()
{
Session::destroy();
}

}