<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');
if (!$con) {
  die('Not connected : ' . mysql_error());
}

$db_selected = mysqli_select_db($con,'MM');
if (!$db_selected) {
 $p = "create database MM";
 mysqli_query($con,$p);
}

mysqli_select_db($con,"MM");

$table = "select * from userdata";
$table_ = mysqli_query($con,$table);
if(!$table_){
    $create = "create table userdata(name varchar(255) not null, email varchar(255) not null, password varchar(255) not null, contact int(10) not null, city varchar(255) not null, address varchar(255) not null)";
    mysqli_query($con,$create);
}

        
$name = $_POST['name'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];

$s = "select * from userdata where name = '$name'";

$result = mysqli_query($con,$s);        

$num = mysqli_num_rows($result);

if($num == 1){
    echo "<h1><center>Username taken.<center></h1>";
    echo "<a href = 'signup.php'><center>Click here to return to Signup page.<center></a>";
}else{
    $reg = "insert into userdata(name,email,password,contact,city,address) values('$name','$mail','$pass','$contact','$city','$address')";
    mysqli_query($con,$reg);
    header('location: login.php');
}

?>

