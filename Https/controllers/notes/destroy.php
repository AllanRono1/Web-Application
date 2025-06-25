<?php

//use Core\Database;
use Core\App;

$db = App::resolve('Core\Database');

$currentUserId = 1;


$id = ($_POST['id']);

$query = "select * from notes WHERE id = :id";
$note = $db->query($query, [':id' => $id])->fetchOrFail();


authorize($note["user_id"] === $currentUserId);

$swali = "delete from notes where id = :id";
$db->query($swali, [':id' => $id]);


header('Location: /notes');

exit();
