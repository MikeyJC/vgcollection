<?php

namespace App\controllers;

use App\models\UserModel;

class UserController extends BaseController
{
    public function listAction($model = null, $call = null): void
    {
        $model = new UserModel();
        $call = 'getUsers';
        parent::listAction($model, $call);
    }
}