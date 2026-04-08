<?php

namespace App\controllers;

use App\models\DeveloperModel;

class DeveloperController extends BaseController
{
    public function listAction($model = null, $call = null): void
    {
        $model = new DeveloperModel();
        $call = 'getDevelopers';
        parent::listAction($model, $call);
    }

    public function createAction($model = null, $call = null): void
    {
        $model = new DeveloperModel();
        $call = 'createDeveloper';
        parent::createAction($model, $call);
    }

    public function updateAction($model = null, $call = null): void
    {
        $model = new DeveloperModel();
        $call = 'updateDeveloper';
        parent::updateAction($model, $call);
    }

    public function deleteAction($model = null, $call = null): void
    {
        $model = new DeveloperModel();
        $call = 'deleteDeveloper';
        parent::deleteAction($model, $call);
    }
}