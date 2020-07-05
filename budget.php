<!DOCTYPE html>

<?php
session_start();
$con = mysqli_connect("localhost","root","",'MM') or die(mysqli_error($con));
$name = $_SESSION['username'];
$select_query = "select budget from budget where name = '$name'";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$select_query_2 = "select amount from spend where name = '$name'";
$select_query_result_2 = mysqli_query($con,$select_query_2) or die(mysqli_error($con));
?>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Budget</title>
        <?php
        include "sub/head.php";
        ?>
        <style>
            .bg-modal{
                width: 100%;
                height: 100%;
                background-color: rgba(0,0,0,0.7);
                position: absolute;
                top: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                display: none
            }
            
            .modal-content{
                width: 500px;
                height: 300px;
                background-color: white;
                border-radius: 4px;
                text-align: center;
                padding: 20px;
                position: relative;
            }
            .input{
                width: 50%;
                display: block;
                margin: 15px auto;
            }
            .close{
                position: absolute;
                top: 0;
                right: 14px;
                font-size: 42px;
                transform: rotate(45deg);
                cursor: pointer;
            }
        </style>
    </head>
    
    <body>
        
        <?php
        include "sub/navbar2.php";
        $budget=0;
        ?>
        
        <div class="container bottom" style='position:absolute; top: 100px;left:10px; justify-content: center; align-items: center; align-items: center !important'>
            <div>
                
                <div class="col-lg-4">
                    <div class="thumbnail">
                        <div class="caption"> 
                            <h1><center>To set the spending limit click on the image below.<center></h1>
                        </div>
                        <a href='#' id='popup'><img src="img/BudgetTracker.png"></a>
                    </div>
                </div>
                
                <div class ="col-lg-8">
                    
                    <div class="jumbotron col-lg-8">
                        <h2><center>Your Spending Limit: </center></h2>
                        <?php while($row = mysqli_fetch_array($select_query_result)){
                            $budget = $row[0];
                        }
                        ?>
                        <h1><center><?php echo "Rs. "."$budget"."/-";?></center></h1>
                        <br>
                        <br>
                        <div style='text-align: right'>
                            <a href='#' id='pop2'><button class='button btn btn-primary'>  Modify Budget  </button></a>
                        </div>
                    </div>
                    
                    <div class="jumbotron col-lg-8" style="align-content: center">
                        <?php 
                            $total_ = 0;
                            while($row = mysqli_fetch_array($select_query_result_2)){
                                $total_ = $total_ + $row[0];
                            };
                        ?>
                        <table class="table table-hover" style="text-align:left">
                            <tbody>
                                <tr style="text-align:center">
                                    <th colspan="2"><h2>Details:</h2></th>
                                </tr>
                                <tr>
                                    <td>Budget: </td>
                                    <td style="text-align:right; color: blue"><?php echo "$budget"."/-"?><td>
                                </tr>
                                <tr>
                                    <td>Total Spendings:</td>
                                    <td style="text-align:right; color:red"><?php echo "$total_"."/-";?></td>
                                </tr>
                                <?php
                                $t = $budget - $total_;
                                ?> 
                                <tr>
                                    <th>Amount Left: </th>
                                    <th style="text-align:right; color: green"><?php echo "$t"."/-";?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
                
            </div>
        </div>
                              
                
        <div class='bg-modal'>
            <div class='modal-content'>
                <h2><b>Spending Limit</b></h2><br>
                <form action='budget_.php' method='post'>
                    <label>Enter the amount</lable><br>
                    <input type='number' placeholder='Amount' name='budget'><br><br><br>
                    <button type='submit' name='submit' class='btn btn-primary'>Submit</button><br><br><br>
                    
                </form>
                <div class='close'>+</div>
            </div>
        </div> 
        
        
        <script>
            document.getElementById('popup').addEventListener('click', function(){
            document.querySelector('.bg-modal').style.display = 'flex';  
            });

            document.querySelector('.close').addEventListener('click',function(){
            document.querySelector('.bg-modal').style.display = 'none';
            });
        </script>
        <script>
            document.getElementById('pop2').addEventListener('click', function(){
            document.querySelector('.bg-modal').style.display = 'flex';  
            });

            document.querySelector('.close').addEventListener('click',function(){
            document.querySelector('.bg-modal').style.display = 'none';
            });
        </script>
        <?php
        include "sub/footer.php";
        ?>
        
    </body>
</html>
