<?php

use Core\Database;
use Core\Validator;


$config = require base_path("config.php");
$db = new Database($config['database']);

$heading = "Create Your Notes";

$error = [];

    
if(! Validator::string(($_POST['body']), 1, 500)){
        $error['body'] = 'Warning! cannot be empty or You have exceeded the no. of input required(1000)';
    }
    
    if (! empty($error)) {
        return require base_path("views/notes/create.view.php");
    }

    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
        'body' => $_POST['body'],
        'user_id' => 1]);

    header('location: /create-note');
    die();