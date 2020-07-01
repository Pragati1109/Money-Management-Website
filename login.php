<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>User Login</title>
        <?php
        include 'sub/head.php';
        ?>
    </head>
    <body>
        
        <?php
        include 'sub/navbar.php';
        ?>
        
        <!--login form-->
        <div class="container top">
            <div class="row">                
                <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
                    
                            <h2>LOGIN</h2>                            
                        
                        <div class="panel-body">
                            <div class='text-warning'>
                                <p>Login to begin!!</p>
                            </div>
                            <form action='validation_.php' method='post'>
                                <div class='form-group'>
                                    <label>Username/E-mail</label>
                                    <input class='form-control' type='text' placeholder='username' name='name' required='true'>
                                </div>
                                <div class='form-group'>
                                    <label>Password</label>
                                    <input class='form-control' type='password' placeholder='Password' name='password' required='true'>
                                </div>
                                <button type='submit' name='submit' class='btn btn-primary'>Login</button>
                            </form>
                            
                        </div>
                        <div>Don't have an account? <a href='signup.php'>Register</a></div>
                    </div>
                </div>
            </div>
        
       <?php 
       include 'sub/footer.php';
       ?>
    </body>
</html>
        
