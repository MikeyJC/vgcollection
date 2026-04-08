<?php

namespace App\models;

class UserModel extends BaseModel
{
    protected $username;

    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    public function getUsers($limit = 10, $offset = 0)
    {
        $offset = "";
        if ($offset > 0) {
            $offset = " OFFSET ".intval($offset);
        }
        return $this->db->select("SELECT username FROM users ORDER BY id LIMIT ?" .$offset, ["i", $limit]);
    }

    public function getUsername()
    {
        return $this->username;
    }
}