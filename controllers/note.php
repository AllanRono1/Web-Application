<?php

$config = require "config.php";
$db = new Database($config['database']);

$heading = "Note";

$id = ($_GET['id']);
$query = "select * from notes WHERE id = ?";
$note = $db->query($query, [$id] )->fetchAll();

require "views/note.view.php";