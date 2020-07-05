<?php

session_start();

include "sub/con1.php";

if (!$con) {
  die('Not connected : ' . mysql_error());
}

mysqli_select_db($con,'MM');

$title = $_POST['title'];
$amount = $_POST['amount'];

$name = $_SESSION['username'];
$entry = "insert into spend(name,title,amount) values('$name','$title','$amount')";
mysqli_query($con,$entry);

header('location: spendings.php');

?>