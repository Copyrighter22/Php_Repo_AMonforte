<?php

use Framework\App;
//SENSE MODEL -> NOMÉS VISTA
$users = App::get('database')->selectAll('users');

require '../resources/views/users.blade.php';