<?php

use Core\Database;


$config = require base_path("config.php");
$db = new Database($config['database']);

$query = "select * from notes";
$notes = $db->query($query)->fetchAll();

require base_path("views/notes/index.view.php", [$heading = "My Notes"]);