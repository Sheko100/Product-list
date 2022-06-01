<?php

$sku = $_GET["sku"];

require_once("DatabaseManager.php");
$db =  new \Store\Database\DatabaseManager();
$db->connect();
$isAvailable = $db->checkAvailabilityOf($sku);

echo json_encode($isAvailable);
