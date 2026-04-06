<?php

namespace App\controllers;

use App\models\UserModel;
use Error;

class UserController extends BaseController
{
    public function listAction($model = null, $method = null): void
    {
        $model = new UserModel();
        $method = 'getUsers';
        parent::listAction($model, $method);
    }
}