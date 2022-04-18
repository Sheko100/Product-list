<?php
$server_name = "localhost";
$username = "370363";
$password = "SF53iHNOYXXq73Z2";
$db_name = "370363";

$conn = new mysqli($server_name, $username, $password, $db_name);

if($conn->connect_error) {
    die("connection failed: ".$conn->connect_error);
}


?>