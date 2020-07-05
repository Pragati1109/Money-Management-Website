<?php

session_start();

header('location: login.php');

include "sub/con1.php";

mysqli_select_db($con,'mm');

$name = $_POST['name'];
$mail = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from userdata where name = '$name' && password = '$pass'";

$result = mysqli_query($con,$s);        

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location: home.php');
}else{
    header('location: login.php');
}

?>
