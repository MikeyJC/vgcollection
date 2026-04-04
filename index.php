<?php

use App\models\UserModel;
use App\models\VideoGameModel;

require './app/bootstrap.php';

$user = new UserModel('admin', 'admin');

echo $user->getUsername();

$videoGame = new VideoGameModel();
echo 'Test2';