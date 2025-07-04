<?php

namespace Https\Forms;

use Core\Validator;

use Core\ValidationException;

use Core\Session;

class LoginForm
{
    protected $error = [];

    public function __construct(public array $attributes)
    {
    if (! Validator::email($attributes['email'])) {
$this->error['email'] = "Invalid email address";
}

if (! Validator::string($attributes['password'])) {
    $this->error['password'] = "Please provide a valid password";
}

    }

    public static function validate($attributes)
    {
        $instance = new static($attributes);

        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function throw()
    {
        ValidationException::throw($this->error(), $this->attributes);
    }

    public function failed()
    {
        return count($this->error);

    }

    public function error(){
        return $this->error;
    }

    public function errors($field, $message)
    {
        $this->error[$field] = $message;

        return $this;
    }
}
