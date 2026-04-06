<?php

const PROJECT_ROOT_PATH = __DIR__ . "/../";

require_once __DIR__ . '/../vendor/autoload.php';

// include main configuration file
require_once PROJECT_ROOT_PATH . "/app/config/config.php";
// include the base controller file
require_once PROJECT_ROOT_PATH . "/app/controllers/BaseController.php";
// include the use model file
require_once PROJECT_ROOT_PATH . "/app/models/UserModel.php";