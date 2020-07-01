<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location: login.php');
}
?>

<html>
    <head>
        <title>Home:BudgetTracker</title>
        <?php
        include 'sub/head.php';
        ?>
    </head>
    
    <body style = "background: url(img/1.jpeg) no-repeat center; backgroung-size: cover">
        
        <?php 
        include 'sub/navbar2.php';
        ?>
        
        <div id="banner-image">
            <div class="container">
                <center>
                <div class="inner-banner-image">
                    <div id="banner-content">
                        <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
                    </div>
                </div>
            </div>
        </div>
        
       <?php 
       include 'sub/footer.php';
       ?>
    </body>
</html>
