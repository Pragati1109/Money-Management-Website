<!DOCTYPE html>
<html>
    <head>
        <title>User Login</title>
        <?php
        include 'sub/head.php';
        ?>
    </head>
    <body style='background: url(img/4); background-size: cover'>
        
        <?php
        include 'sub/navbar.php';
        ?>
        
        <!--login form-->
        <div class="container top" style='background: rgba(0,0,0,0.7); max-width: 700px; padding: 30px; margin: 90px auto;color: #f8f8f8'>
            <div class="row">                
                <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
                    
                    <h1><b><center>LOG IN</center></b></h1>                            
                        
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
        
