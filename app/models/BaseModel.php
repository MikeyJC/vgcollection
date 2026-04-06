<?php

namespace App\models;

use App\config\Database;

class BaseModel
{
    protected $db;
    protected $table;
    protected $id;
    public function __construct()
    {
        $this->db = new Database();
    }
}