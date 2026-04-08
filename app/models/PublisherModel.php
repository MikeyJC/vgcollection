<?php

namespace App\models;

class PublisherModel extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
        $this->table = 'publishers';
    }

    public function getPublishers($limit = 10, $offset = 0, $orderBy = 'id', $dir = 'ASC')
    {
        if ($dir !== 'ASC' && $dir !== 'DESC') {
            $dir = 'ASC';
        }
        $params = "ORDER BY $orderBy $dir";
        if ($limit > 0) {
            $params .= " LIMIT {$limit} ";
            if ($offset > 0) {
                $params .= " OFFSET ".intval($offset);
            }
        }
        $sql = "SELECT * FROM publishers AS d " .$params;
        return $this->db->select($sql);
    }

    public function createPublisher($data){
        $fields = [];
        $values = [];
        foreach ($data as $key => $value) {
            $fields[] = $key;
            $value = mysqli_real_escape_string($this->db->conn, $value);
            $values[] = "'{$value}'";;
        }
        $sql = "INSERT INTO publishers(".implode(',', $fields).") VALUES (".implode(',', $values).")";
        $result = $this->db->insert($sql);
        $res = [];
        if ($result) {
            return ($res['response'] = 'Successfully created new entry!');
        } else {
            return ($res['response'] = 'Failed to create new entry!');
        }
    }

    public function updatePublisher($data, $id){
        $values = [];
        foreach ($data as $key => $value) {
            $value = mysqli_real_escape_string($this->db->conn, $value);
            $values[] = "$key = '$value'";
        }
        $sql = "UPDATE publishers SET ".implode(", ", $values)." WHERE id = ?";
        $result = $this->db->update($sql, $id);
        $res = [];
        if ($result) {
            return ($res['response'] = 'Successfully updated entry!');
        } else {
            return ($res['response'] = 'Failed to update entry!');
        }
    }

    public function deletePublisher($id)
    {
        $sql = "DELETE FROM publishers WHERE id = ?";
        $result = $this->db->delete($sql, $id);
        $res = [];
        if ($result) {
            return ($res['response'] = 'Successfully deleted entry!');
        } else {
            return ($res['response'] = 'Failed to delete entry!');
        }
    }
}