<?php

use Core\Validator;

use Core\App;

$db = App::resolve('Core\Database');

$heading = "Create Your Notes";

$error = [];


#validate the form for creating notes    
if(! Validator::string(($_POST['body']), 1, 500)){
        $error['body'] = 'Warning! cannot be empty or You have exceeded the no. of input required(1000)';
    }
    
    if (! empty($error)) {
        return require base_path("views/notes/create.view.php");
    }
#find the user_id of the author to fill the body to send to the database
    $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)',[
        'body' => $_POST['body'],
        'user_id' => 1]);
#redirect and kill
    header('location: /create-note');
    die();