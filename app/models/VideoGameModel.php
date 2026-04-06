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
         ORDER BY id LIMIT ?" .$offset;
        return $this->db->select($sql, ["i", $limit]);
    }

    public function createVideoGame($data){
        $fields = [];
        $values = [];
        foreach ($data as $key => $value) {
            $fields[] = $key;
            if ($key != 'publisher_id' && $key != 'developer_id') {
                $values[] = "'{$value}'";
            } else {
                $values[] = $value;
            }
        }
        $sql = "INSERT INTO videogames(".implode(',', $fields).") VALUES (".implode(',', $values).")";
        $result = $this->db->insert($sql);
        $res = [];
        if ($result) {
            return ($res['response'] = 'Successfully created new entry!');
        } else {
            return ($res['response'] = 'Failed to create new entry!');
        }
    }

    public function updateVideoGame($data, $id){
        $fields = [];
        $values = [];
        foreach ($data as $key => $value) {
            if ($key != 'publisher_id' && $key != 'developer_id') {
                $values[] = "$key = '$value'";
            } else {
                $values[] = "$key = $value";
            }
        }
        $sql = "UPDATE videogames SET ".implode(", ", $values)." WHERE id = ?";
        $result = $this->db->update($sql, $id);
        $res = [];
        if ($result) {
            return ($res['response'] = 'Successfully updated entry!');
        } else {
            return ($res['response'] = 'Failed to update entry!');
        }
    }

    public function deleteVideoGame($id)
    {
        $sql = "DELETE FROM videogames WHERE id = ?";
        $result = $this->db->delete($sql, $id);
        $res = [];
        if ($result) {
            return ($res['response'] = 'Successfully deleted entry!');
        } else {
            return ($res['response'] = 'Failed to delete entry!');
        }
    }
}