<?php

namespace Core; 


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
$_SESSION = [];
session_destroy();

$params = session_get_cookie_params();
setcookie('PHPSESSID', '', time() -3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

}

}