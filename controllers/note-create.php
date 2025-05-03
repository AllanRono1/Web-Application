<?php

$config = require "config.php";
$db = new Database($config['database']);

$heading = "Create Your Notes";

if ($_SERVER ['REQUEST_METHOD'] === 'POST'){
$error = [];
    if(strlen($_POST['body']) === 0){
        $error['body'] = 'can not be empty';
    }

    if (empty($error)) {
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
        'body' => $_POST['body'],
        'user_id' => 1
    
    ]);
}
}

require "views/create-notes.view.php";