<?php

$config = require "config.php";
$db = new Database($config['database']);

$heading = "Note";
$currentUserId = 1;


$id = ($_GET['id']);
//$user = ($_GET['1']);

$query = "select * from notes WHERE id = :id";
$note = $db->query($query, [':id' => $id])->fetch();

if(! $note) {
    abort(404);
}

if($note["user_id"] != $currentUserId) {
    abort(Response::FORBIDDEN);
}

//dd($note);

require "views/note.view.php";