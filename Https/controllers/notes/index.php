<?php

use Core\App;

$db = App::resolve('Core\Database');

$query = "select * from notes";
$notes = $db->query($query)->fetchAll();

require base_path("views/notes/index.view.php", [$heading = "My Notes"]);