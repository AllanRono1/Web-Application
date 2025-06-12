<?php

use Core\Database;


$config = require base_path("config.php");
$db = new Database($config['database']);

$heading = "Note";
$currentUserId = 1;


$id = ($_GET['id']);

$query = "select * from notes WHERE id = :id";
$note = $db->query($query, [':id' => $id])->fetchOrFail();

authorize($note["user_id"] === $currentUserId);


//dd($note);

require base_path("views/notes/show.view.php");