<?php

namespace App\models;

class VideoGame extends Base
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'videogames';
    }
}