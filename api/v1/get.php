<?php

use App\config\Database;

include '../../app/config/Database.php';#

$conn = new Database();

$sql = "SELECT * FROM users";

$result = $conn->db->query($sql);

$data = [];

while($row = $result->fetch_assoc()) {

    $data[] = $row;

}

header('Content-Type: application/json');

echo json_encode($data);

