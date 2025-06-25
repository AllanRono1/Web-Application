<?php

echo ini_get('session.save_path');

$_SESSION['name'] = 'Kipngetich Rono';

require base_path("views/index.view.php", [$heading = "Home"]);