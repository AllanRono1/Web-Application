<?php

require "Validator.php";


$config = require "config.php";
$db = new Database($config['database']);

$heading = "Create Your Notes";

$validator = new Validator;

if ($_SERVER ['REQUEST_METHOD'] === 'POST'){
$error = [];
    if($validator->string(($_POST['body']) === 0)){
        $error['body'] = 'Warning! cannot be empty';
    }

    if (strlen($_POST['body']) > 500){
        $error['body'] = 'passed the required number of characters(500)';
    }

    if (empty($error)) {
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
        'body' => $_POST['body'],
        'user_id' => 1
    
    ]);
}
}

require "views/create-notes.view.php";