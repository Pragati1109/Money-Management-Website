<?php

session_start();

include "sub/con2.php";

$name = $_SESSION['username'];

$budget = $_POST['budget'];

$bud = "insert into budget(name,budget) values('$name','$budget')";

mysqli_query($con,$bud);

header('location: budget.php');
?>

