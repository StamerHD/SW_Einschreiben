<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sw_einschreiben";

$connection = mysqli_connect($servername, $username, $password, $dbname);

if (!$connection) {
 die("verbindung fehlgeschlagen");
}


 ?>
