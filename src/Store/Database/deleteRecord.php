<?php

$id = json_decode($_GET["id"]);

for ($i=0;$i<count($id);$i++) {
    $id[$i] = intval($id[$i]);
}

require_once("DatabaseManager.php");

$db =  new \Store\Database\DatabaseManager();
$db->connect();
$isDeleted = $db->deleteRecord($id);

echo json_encode($isDeleted);
