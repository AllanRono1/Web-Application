<?php

namespace Https\Forms;

use Core\Validator;

class LoginForm
{
    protected $error = [];

    public function validate($email,$password,$deny)
    {
        if (! Validator::string($email)) {
$this->error['email'] = "Invalid email address";
}

if (! Validator::string($password, 1, 10)) {
    $this->error['password'] = "Incorrect password";
}

return empty($this->error);
    }

    public function errors(){
        return $this->error;
    }

    public function error($field, $message)
    {
        $this->error[$field] = $message;
    }
}
