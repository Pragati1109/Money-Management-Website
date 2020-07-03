<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');
if (!$con) {
  die('Not connected : ' . mysql_error());
}

mysqli_select_db($con,'MM');

$title = $_POST['title'];
$amount = $_POST['amount'];

$tabl = "select * from spend";
$tabl_ = mysqli_query($con,$tabl);
if(!$tabl_){
    $creat = "create table spend(name varchar(255) not null, title varchar(255) not null, amount int(255) not null)";
    mysqli_query($con,$creat);
}

$name = $_SESSION['username'];
$entry = "insert into spend(name,title,amount) values('$name','$title','$amount')";
mysqli_query($con,$entry);

header('location: spendings.php');

?>