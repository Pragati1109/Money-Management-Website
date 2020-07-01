<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Register</title>
        <?php
        include 'sub/head.php'
        ?>
    </head>
    <body>
        
        <?php
        include 'sub/navbar.php';
        ?>
       
        <!--signup form-->
        <div class="container top">
            <div class="row">                
                <div class="col-md-6 col-md-offset-3 col-xs-8 col-xs-offset-2">
                    <div class="panel">
                        <div class='panel-info'>
                            <h2><b>SIGN UP</b></h2>                            
                        </div>
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
        </div>
        
        
       <?php 
       include 'sub/footer.php';
       ?>
    </body>
</html>
        