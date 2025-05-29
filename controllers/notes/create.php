<?php

require "Validator.php";


$config = require "config.php";
$db = new Database($config['database']);

$heading = "Create Your Notes";

if ($_SERVER ['REQUEST_METHOD'] === 'POST'){
$error = [];
    if(!Validator::string(($_POST['body']), 1, 500)){
        $error['body'] = 'Warning! cannot be empty or You have exceeded the no. of input required(1000)';
    }

    if (empty($error)) {
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
        'body' => $_POST['body'],
        'user_id' => 1
    
    ]);
}
}

require "views/create-notes.view.php";