<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <?php
        include 'sub/head.php'
        ?>
    </head>
    <body style='background: url(img/4); background-size: cover'>
        
        <?php
        include 'sub/navbar.php';
        ?>
       
        <!--signup form-->
        <div class="container top" style='background: rgba(0,0,0,0.7); max-width: 700px; padding: 30px; margin: 90px auto;color: #f8f8f8'>
            <div class="row">                
                <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
                    
                    <h1><b><center>SIGN UP</center></b></h1>                            
                        
                        <div class="panel-body">                           
                            <form action='register_.php' method='post'>
                                <div class='form-group'>
                                    <input class='form-control' type='text' placeholder='Name' name='name' required>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control' type='email' placeholder='Email' name='email' required>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control' type='password' placeholder='Password' name='password' required>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control' type='number' placeholder='Contact' name='contact' required>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control' type='text' placeholder='City' name='city' required>
                                </div>
                                <div class='form-group'>
                                    <input class='form-control' type='text' placeholder='Address' name='address' required>
                                </div>
                                <button type='submit' name='submit' class='btn btn-primary'>Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
        
        
       <?php 
       include 'sub/footer.php';
       ?>
    </body>
</html>
        