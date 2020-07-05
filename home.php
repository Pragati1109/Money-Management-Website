<?php

session_start();

if(!isset($_SESSION['username'])){
    header('location: login.php');
}

$con = mysqli_connect("localhost","root","",'MM') or die(mysqli_error($con));
$name = $_SESSION['username'];
$select_query = "select amount from spend where name = '$name'";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$select_query_2 = "select budget from budget where name = '$name'";
$select_query_result_2 = mysqli_query($con,$select_query_2) or die(mysqli_error($con));
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
                        <a href='budget.php'><img src="img/Budget.png"></a>
                        <div class="caption">
                            <center>
                            <h3>Budget</h3>
                            <p>Add/modify the spending limits and begin.</p>
                        </div>
                    </div>
                </div>
                    
                        <div class="col-sm-4">
                            <div class="thumbnail">
                                <a href='spendings.php'><img src="img/Spendings.png"></a>
                                <div class="caption">
                                    <center>
                                        <h3>Spendings</h3>
                                        <p>Add and keep track of your daily spendings, here.</p>                                       
                                </div>
                            </div>
                        </div>
                        
                
                <?php
                $budget=0;
                while($row = mysqli_fetch_array($select_query_result_2)){
                    $budget = $row[0];
                };

                $total_=0;
                while($row = mysqli_fetch_array($select_query_result)){
                $total_ = $total_ + $row[0];
                }
                ?>
                        <div class="col-sm-4">
                            <div class="thumbnail">                               
                                <?php if($budget<$total_){?>
                                <div style="text-align:center;justify-content:center;color:red">
                                    <h1>Warning!!!</h1>
                                    <h2>Your spendings have exceeded your budget</h2>
                                    <br>
                                    <br>
                                <?php $excess = $total_ - $budget; ?>
                                    <h1><center><b>Exceeded by</b></center></h1>
                                    <h1><center><b><?php echo "Rs. "."$excess"."/-";?></b></center></h1>
                                    <br>
                                    <br><br>
                                    <br><br><br>
                                </div>
                                <?php }else{?>
                                <div class="thumbnail">
                                <img src="img/smile1.png">
                                <div class="caption">
                                    <center>
                                        <h3>No warnings!!!</h3>
                                        <p>-</p>                                       
                                </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>                                       
                </div>
            </div>
         
        
       <?php 
       include 'sub/footer.php';
       ?>
        
        
    </body>
</html>
