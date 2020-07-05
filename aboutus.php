<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>About us</title>
        <?php
        include "sub/head.php";
        ?>
    </head>
    <body>
        <?php
        include "sub/navbar2.php";
        ?>
        
        <div class="container">
            <div class="jumbotron" style='position: absolute; top:100px; width: 80%;justify-content:center'>
                <h1>Budget Tracker</h1>
                <h2>We aim at helping you to set budget and keep track of your daily spendings.</h2>
                <br>
                <br>
                <h2><b>How it works?</b></h2>
                <ol>
                    <li>
                        <h3>Register yourself first</h3>
                        <p>Click on the 'Signup' option or register for free option on the 'BudgetTracker' page.</p> 
                    </li>
                    <li>
                        <h3>Login</h3>
                        <p>Click on the 'Login' button and enter your name and password and click on 'Login'</p>
                    </li>
                    <li>
                        <h3>Set the Budget</h3>
                        <p>Click on the 'Budget' tab in the navigation bar or on the 'Budget' image, you'll be directed to the Budget page. Now, click on the 'Spending Limits' image or the 'Modify Budget' button on the page and enter the Budget amount. Click on 'Submit'</p>
                    </li>
                    <li>
                        <h3>Add your spendings</h3>
                        <p>Now, go the 'Spendings' page by click on the 'Spending' option on the navigation bar or on the 'Spendings' image in the home page. Now, click on the 'Spendings' image or the 'Add' button and enter the details of your spendings; and click on 'submit'. You'll see your daily expenses, budget, total spendings and amount left in the table on the spendings page.</p>
                    </li>
                    <li>
                        <h3>Warnings</h3>
                        <p>You'll see the warning for over spending (exceeding your budget) on the home page and on the spendings page also.</p>
                    </li>
                </ol>
            </div>
        </div>
        
        <?php
        include "sub/footer.php";
        ?>
    </body>
</html>
