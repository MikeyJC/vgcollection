<?php

namespace App\controllers;

use App\models\VideoGameModel;
use Error;

class VideoGameController extends BaseController
{
    public function listAction($model = null, $call = null): void
    {
        $model = new VideoGameModel();
        $call = 'getVideoGames';
        parent::listAction($model, $call);
    }

    public function createAction($model = null, $call = null): void
    {
        $model = new VideoGameModel();
        $call = 'createVideoGame';
        parent::createAction($model, $call);
    }

    public function updateAction($model = null, $call = null): void
    {
        $model = new VideoGameModel();
        $call = 'updateVideoGame';
        parent::updateAction($model, $call);
    }

    public function deleteAction($model = null, $call = null): void
    {
        $model = new VideoGameModel();
        $call = 'deleteVideoGame';
        parent::deleteAction($model, $call);
    }
}