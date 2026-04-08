<?php

namespace App\controllers;

use App\models\PublisherModel;

class PublisherController extends BaseController
{
    public function listAction($model = null, $call = null): void
    {
        $model = new PublisherModel();
        $call = 'getPublishers';
        parent::listAction($model, $call);
    }

    public function createAction($model = null, $call = null): void
    {
        $model = new PublisherModel();
        $call = 'createPublisher';
        parent::createAction($model, $call);
    }

    public function updateAction($model = null, $call = null): void
    {
        $model = new PublisherModel();
        $call = 'updatePublisher';
        parent::updateAction($model, $call);
    }

    public function deleteAction($model = null, $call = null): void
    {
        $model = new PublisherModel();
        $call = 'deletePublisher';
        parent::deleteAction($model, $call);
    }
}