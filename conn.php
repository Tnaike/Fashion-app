<?php

$dbserver = "localhost";
$dbuser = "root";
$dbpwd = "";
$dbname = "clientbaze_db";

$conn = mysqli_connect("$dbserver", "$dbuser","$dbpwd", "$dbname") or die(mysqli_error());

?>