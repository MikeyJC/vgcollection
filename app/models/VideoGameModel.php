<?php

namespace App\models;

class VideoGameModel extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'videogames';
    }

    public function getVideoGames($limit = 10, $offset = 0)
    {
        $offset = "";
        if ($offset > 0) {
            $offset = " OFFSET ".intval($offset);
        }
        $sql = "SELECT vg.id, vg.name, vg.platform, vg.release_date, d.name AS 'Developer', p.name AS 'Publisher' FROM videogames AS vg
         LEFT JOIN developers AS d ON vg.developer_id = d.id
         LEFT JOIN publishers AS p ON vg.publisher_id = p.id
         ORDER BY id ASC LIMIT ?".$offset;
        return $this->db->select($sql, ["i", $limit]);
    }
}