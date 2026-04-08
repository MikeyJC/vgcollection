<?php

namespace App\models;

class DeveloperModel extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'developers';
    }

    public function getDevelopers($limit = 10, $offset = 0)
    {
        $params = "";
        if ($limit > 0) {
            $params = "LIMIT {$limit} ";
            if ($offset > 0) {
                $params .= " OFFSET ".intval($offset);
            }
        }
        $sql = "SELECT * FROM developers AS d
         ORDER BY id " .$params;
        return $this->db->select($sql);
    }

    public function createDeveloper($data){
        $fields = [];
        $values = [];
        foreach ($data as $key => $value) {
            $fields[] = $key;
            $values[] = $value;
        }
        $sql = "INSERT INTO developers(".implode(',', $fields).") VALUES (".implode(',', $values).")";
        $result = $this->db->insert($sql);
        $res = [];
        if ($result) {
            return ($res['response'] = 'Successfully created new entry!');
        } else {
            return ($res['response'] = 'Failed to create new entry!');
        }
    }

    public function updateDeveloper($data, $id){
        $values = [];
        foreach ($data as $key => $value) {
            $values[] = "$key = $value";
        }
        $sql = "UPDATE developers SET ".implode(", ", $values)." WHERE id = ?";
        $result = $this->db->update($sql, $id);
        $res = [];
        if ($result) {
            return ($res['response'] = 'Successfully updated entry!');
        } else {
            return ($res['response'] = 'Failed to update entry!');
        }
    }

    public function deleteDeveloper($id)
    {
        $sql = "DELETE FROM developers WHERE id = ?";
        $result = $this->db->delete($sql, $id);
        $res = [];
        if ($result) {
            return ($res['response'] = 'Successfully deleted entry!');
        } else {
            return ($res['response'] = 'Failed to delete entry!');
        }
    }
}