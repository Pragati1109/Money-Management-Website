<?php

session_start();

header('location: spendings.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'budgettracker');

$title = $_POST['title'];
$amount = $_POST['amount'];

$entry = "insert into spend('title','amount') values('$title','$amount')";
mysqli_query($con,$entry);

?>