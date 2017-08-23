<?php
$host= "localhost";
$user = "root";
$pass = "";
$db = "druglist";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!mysqli_select_db($conn, $db)) {
    die("Error");
  # code...
}


 ?>
