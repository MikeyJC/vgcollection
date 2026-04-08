<?php

use App\controllers\DeveloperController;
use App\controllers\PublisherController;
use App\controllers\UserController;
use App\controllers\VideoGameController;

require '../../app/bootstrap.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );
if (!isset($uri[5]) || !isset($uri[6])) {
    header("HTTP/1.1 404 Not Found");
    exit();
}
$requestToken = null;
//If the token is sent in a header HTTP_AUTHORIZATION
if (isset($_SERVER["HTTP_AUTHORIZATION"])) {
    $requestToken = $_SERVER["HTTP_AUTHORIZATION"];
}
$authorizedTokens = AUTH_TOKENS;
$requestMethod = $_SERVER["REQUEST_METHOD"];
if (($requestMethod == 'POST' || $requestMethod == 'PUT' || $requestMethod == 'DELETE') && !isset($authorizedTokens[$requestToken])) {
    header("HTTP/1.1 401 Unauthorized");
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
    case 'developers':
        $objController = new DeveloperController();
        break;
    case 'publishers':
        $objController = new PublisherController();
        break;
    default:
        header("HTTP/1.1 404 Not Found");
        exit();
}
$strMethod = $uri[6].'Action';
$objController->$strMethod();
