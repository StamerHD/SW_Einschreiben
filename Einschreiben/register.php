<?php
require "database.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pw = $_POST['pw'];

$sql = "INSERT INTO users (vorname, nachname, email, pw) VALUES ('$fname', '$lname', 'email', '$pw')";
mysqli_query($connection, $sql);

header("Location: success.php");




 ?>
