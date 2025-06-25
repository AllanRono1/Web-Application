<?php

use Core\App;

$db = App::resolve('Core\Database');

$heading = "Note";
$currentUserId = 1;

$id = ($_GET['id']);

$query = "select * from notes WHERE id = :id";
$note = $db->query($query, [':id' => $id])->fetchOrFail();

authorize($note["user_id"] === $currentUserId);


require base_path("views/notes/show.view.php");