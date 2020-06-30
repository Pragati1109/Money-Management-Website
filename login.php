<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Lifestyle Store</title>
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
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       
        <!--login form-->
        <div class="container top">
            <div class="row">                
                <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>LOGIN</h3>                            
                        </div>
                        <div class="panel-body">
                            <div class='text-warning'>
                                <p>Login to make a purchase</p>
                            </div>
                            <form>
                                <div class='form-group'>
                                    <input class='form-control' type='email' placeholder='Email' name='email' required='true'>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control' type='password' placeholder='Password' name='password' required='true'>
                                </div>
                                <button type='submit' name='submit' class='btn btn-primary'>Login</button>
                            </form>
                            
                        </div>
                        <div class="panel-footer">Don't have an account?<a href='signup.html'>Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!--Footer of index page-->
        <footer>
            <div class="container">
                <center>
                    <p>Copyright © Lifestyle Store. All Rights Reserved | Contact Us: +91 90000 00000.</P>
            </div>
        </footer>
    </div>
    </body>
</html>
        
