<?php


$heading = 'Edit note';

use Core\App;
use Core\Database;

$db = App::resolve('Core\Database');

$currentUserId = 1;

$heading = 'Edit note';

$id = ($_GET['id']);

$query = "select * from notes WHERE id = :id";
$note = $db->query($query, [':id' => $id])->fetchOrFail();

authorize($note["user_id"] === $currentUserId);

require base_path("views/notes/edit.view.php");
