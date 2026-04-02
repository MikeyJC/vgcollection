<?php

use App\models\User;
use App\models\VideoGame;

require './app/bootstrap.php';

$user = new User('admin', 'admin');

echo $user->getUsername();

$videoGame = new VideoGame();
echo 'Test2';