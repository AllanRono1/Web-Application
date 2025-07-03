<?php

use Core\Session;

require base_path("views/sessions/create.view.php", [
    'error' => Session::get('error')]);