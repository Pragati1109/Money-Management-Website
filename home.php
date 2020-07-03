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
    
    
    <body style = "background: url(img/3.jpg) no-repeat center; background-size: cover">
        
        
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
        
        
        <div class="container bottom">
            <div>
                
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <a href='spendings.php'><img src="img/Spendings.png"></a>
                        <div class="caption">
                            <center>
                            <h3>Spendings</h3>
                            <p>-</p>
                        </div>
                    </div>
                </div>
                    
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <a href='budget.php'><img src="img/Budget.png"></a>
                                <div class="caption">
                                    <center>
                                        <h3>Budget</h3>
                                        <p>-</p>                                       
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <a href='history.php'><img src="img/History.png"></a>
                                <div class="caption">
                                    <center>
                                        <h3>History</h3>
                                        <p>-</p>
                                </div>
                            </div>
                        </div>                                       
                </div>
            </div>
         
        
       <?php 
       include 'sub/footer.php';
       ?>
        
        
    </body>
</html>
