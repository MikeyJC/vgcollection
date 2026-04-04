<?php

namespace App\models;

class VideoGameModel extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'videogames';
    }
}