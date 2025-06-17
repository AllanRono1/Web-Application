<?php 

use Core\App;
use Core\Validator;

$db = App::resolve('Core\Database');

$heading = "Note";
$currentUserId = 1;
//find the corresponding note

$query = "select * from notes WHERE id = :id";
$note = $db->query($query, [':id' => $_POST['id']])->fetchOrFail();

//authorize that the user can edit the note
authorize($note["user_id"] === $currentUserId);
//validate the form
$error=[];

if(! Validator::string(($_POST['body']), 1, 500)){
        $error['body'] = 'Warning! cannot be empty or You have exceeded the no. of input required(1000)';
    }
    
    if (count($error)) {
        return require base_path("views/notes/edit.view.php");
    }
//if no validation errors,update the record in the notes db table

$db->query("update notes set body = :body where id = :id", ['id' => $_POST['id'], 'body' => $_POST['body']]);

#redirect user
header('location: /notes');
die();