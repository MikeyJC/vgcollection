<?php

namespace App\controllers;

use App\models\VideoGameModel;
use Error;

class VideoGameController extends BaseController
{
    public function listAction($model = null, $method = null): void
    {
        $model = new VideoGameModel();
        $method = 'getVideoGames';
        parent::listAction($model, $method);
    }

    public function createAction($model = null, $method = null): void
    {
        $model = new VideoGameModel();
        $method = 'createVideoGame';
        parent::createAction($model, $method);
    }
}