<?php

use Core\Database;


$config = require base_path("config.php");
$db = new Database($config['database']);

$heading = "Note";
$currentUserId = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = ($_GET['id']);

$query = "select * from notes WHERE id = :id";
$note = $db->query($query, [':id' => $id])->fetchOrFail();

authorize($note["user_id"] === $currentUserId);

$id = ($_GET['id']);
    $swali = "delete from notes where id = :id";
    $db->query($swali, [':id' => $id]);
    header('Location: /notes');
    exit();


} else {
        $id = ($_GET['id']);
    $query = "select * from notes WHERE id = :id";
$note = $db->query($query, [':id' => $id])->fetchOrFail();

authorize($note["user_id"] === $currentUserId);

}
//header("location: /");


//dd($note);

require base_path("views/notes/show.view.php");