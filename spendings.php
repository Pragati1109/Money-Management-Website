<!DOCTYPE html>
<?php
session_start();
$con = mysqli_connect("localhost","root","",'MM') or die(mysqli_error($con));
$name = $_SESSION['username'];
$select_query = "select title,amount,date from spend where name = '$name'";
$select_query_result = mysqli_query($con,$select_query) or die(mysqli_error($con));
$select_query_2 = "select budget from budget where name = '$name'";
$select_query_result_2 = mysqli_query($con,$select_query_2) or die(mysqli_error($con));
$select_query_3 = "select title,amount,date from spend where name = '$name'";
$select_query_result_3 = mysqli_query($con,$select_query_3) or die(mysqli_error($con));
?>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Spendings</title>
        <?php
        include 'sub/head.php';
        $total=0;
        $total_=0;
        $budget=0;
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
        include 'sub/navbar2.php'
        ?>
        
        <?php while($row = mysqli_fetch_array($select_query_result_2)){
            $budget = $row[0];
        }
        ?>
        
              
         <div class="container bottom" style='position:absolute; top: 100px;left:10px; align-items: center !important'>
            <div class="row">
                
                <div class="col-sm-4">
                    <div class="thumbnail">
                        <a href='#' id='popup'><img src="img/Spendings.png"></a>
                        <div class="caption">
                            <center>
                            <h3>Add Spendings</h3>
                            <p>Click to add your spendings.</p>
                        </div>
                    </div>
                </div>
                
                <div class ="col-sm-8">
                    <div class="thumbnail">
                        <?php 
                        $n=0;
                        $total = 0;
                        $total_=0;
                        while($row = mysqli_fetch_array($select_query_result)){
                            $total_ = $total_ + $row[1];
                        };
                        ?>
                        <?php 
                        if($budget < $total_){?>
                        <div style="text-align:center;color: red;">
                            <h2><center>Warning: You have crossed your spending limit.</center></h2>                                  
                            <h1><center>Over Spending!!!</center></h1>
                        </div>
                        <?php }elseif(($budget-$total_)<=(0.1*$budget)){?>
                        <div style="text-align:center;color: red;">
                            <h2><center>Warning: Amount left is less than 10% of Budget..</center></h2>                                  
                            <h1><center>Beware!!!</center></h1>
                        </div>
                        <?php }?>
                        <table class="table table-striped table-hover">
                            <tbody>                               
                                <tr>
                                    <th colspan="4" style="text-align:center"><?php echo "<h3>Here is your budget sheet, </h3>"."<h3>$name</h3>"?></th>
                                </tr>
                                <tr style="text-align: center">
                                    <th>Sr. No</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th style="text-align:right">Amount</th>
                                </tr>
                                
                                <?php while($row = mysqli_fetch_array($select_query_result_3)){?>
                                <?php $n = $n + 1; ?>           
                                <tr>
                                    <td><?php echo "$n";?></td>
                                    <td><?php echo "$row[0]";?></td>
                                    <td><?php echo "$row[2]";?></td>
                                    <td style="text-align: right;"><?php echo "$row[1]"."/-";?></td>
                                </tr>                               
                                <?php }?>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th style='text-align:right'><a href="#" id='pop'><button class='button btn btn-primary'>  Add more  </button></a></th>
                                </tr>
                                
                                <tr>
                                    <th colspan='3' style="text-align:center"><h4>Your budget: </h4></th>
                                    <th style='text-align:right; color:blue;'><?php echo "<h4>"."$budget"."/-</h4>";?></th>
                                </tr>
                                <tr>
                                    <th colspan="3" style="text-align: center"><h4>Total Spendings:</h4></th>
                                    <th style='text-align:right; color:red;'><?php echo "<h4>- "."$total_"."/-</h4>";?></th>
                                </tr>
                                <?php
                                $left = 0;
                                $left= $budget - $total_;
                                ?>
                                <tr>
                                    <th colspan='3' style="text-align:center"><h4>Amount Left: </h4></th>
                                    <th style='text-align:right; color:green;'><?php echo "<h4>"."$left"."/-</h4>";?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
         </div>
        
        <div class='bg-modal'>
            <div class='modal-content'>
                <h2><b>Spending</b></h2><br>
                <form action='spend_.php' method='post'>
                    <label>Enter title</label><br>
                    <input type='text' placeholder='Title' name='title'><br>
                    <label>Enter amount</lable><br>
                    <input type='number' placeholder='Amount' name='amount'><br><br><br>
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
            document.getElementById('pop').addEventListener('click', function(){
            document.querySelector('.bg-modal').style.display = 'flex';  
            });

            document.querySelector('.close').addEventListener('click',function(){
            document.querySelector('.bg-modal').style.display = 'none';
            });
        </script>
        
        
        <?php
        include 'sub/footer.php';
        ?>
        
    </body>
</html>
