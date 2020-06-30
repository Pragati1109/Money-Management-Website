<!DOCTYPE html>
<!--
Money management app 
Create a website/Android app that can track, maintain, and update the user’s spending. 
Each time the user spends money, she should be able to make an entry in the app of the amount spent and the item it was spent on. 
Moreover, it should display general statistics to the user such as their total spending, budget, etc. 
The app should have a register and login system for individual users and store all user data in a database. 
Points of focus​: Provide unique features that could help your app stand out from trivial money management apps such as 
overspending warnings, monthly limitations, etc. 
Technology​: Any 
-->
<html>
    <head>
        <title>Manage It Right</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        
        <!-- The header of the index page-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Budget Tracker</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Banner and content on it -->
        
        <div id="banner-image">
            <div class="container">
                <center>
                <div class="inner-banner-image">
                    <div id="banner-content">
                        <h1>It’s all coming together</h1>
                        <p>When you’re on top of your money, life is good. 
                        <p>We help you effortlessly manage your finances in one place</p>
                        <a href="products.html" class="btn btn-danger btn-lg active">Sign Up for Free</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer of index page-->
        <footer>
            <div class="container">
                <center>
                    <p>Copyright © Manage It Right. All Rights Reserved | Contact Us: +91 90000 00000.</P>
            </div>
        </footer>
    </body>
</html>
