<?php

$config = require "config.php";
$db = new Database($config['database']);

$heading = "My Notes";

$notes = $db->query("select * from notes WHERE user_id = 1")->fetchAll(PDO::FETCH_ASSOC);

require "views/notes.view.php";