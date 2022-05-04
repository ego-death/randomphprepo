<?php

$server = "localhost:3307";
$username = "root";
$pw = "";
$db = "pracdb";

$conn = mysqli_connect($server, $username, $pw, $db);

if (!$conn) {
    die("The connection has failed");
}
?>