<?php

namespace Https\Forms;

use Core\Validator;

class LoginForm
{
    protected $error = [];

    public function validate($email,$password)
    {
        if (! Validator::email($email)) {
$this->error['email'] = "Invalid email address";
}

if (! Validator::string($password,1,10)) {
    $this->error['password'] = "Incorrect password";
}

return empty($this->error);
    }

    public function error(){
        return $this->error;
    }

    public function errors($field, $message)
    {
        $this->error[$field] = $message;
    }
}
