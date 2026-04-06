<?php

use App\controllers\UserController;
use App\controllers\VideoGameController;

require '../../app/bootstrap.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
if (!isset($uri[5]) || !isset($uri[6])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}
$objController = null;
switch ($uri[5]) {
    case 'users':
        $objController = new UserController();
        break;
    case 'videogames':
        $objController = new VideoGameController();
        break;
    default:
        header("HTTP/1.1 404 Not Found");
        exit();
}
$strMethod = $uri[6].'Action';
$objController->$strMethod();
