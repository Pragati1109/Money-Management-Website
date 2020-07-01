<?php

session_start();

header('location: login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'budgettracker');

$name = $_POST['name'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];

$s = "select * from userdata where email = '$name'";

$result = mysqli_query($con,$s);        

$num = mysqli_num_rows($result);

if($num == 1){
    echo "<h1>Username taken.</h1>";
}else{
    $reg = "insert into userdata(name,email,password,contact,city,address) values('$name','$mail','$pass','$contact','$city','$address')";
    mysqli_query($con,$reg);
    echo "<h1>Successfully registered.</h1>";
}

?>

