<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Spendings</title>
        <?php
        include 'sub/head.php';
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
        
        
        
         <div class="container bottom" style='position:absolute; top: 100px;left:10px; align-items: center !important'>
            <div>
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
            </div>
         </div>
        
        
        <div class='bg-modal'>
            <div class='modal-content'>
                <div class='close'>+</div>
                <h2><b>Spending</b></h2>
                <form action=''>
                    <input type='text' placeholder='Title'><br><br>
                    <input type='number' placeholder='Amount'><br><br>
                    <a href='' class='button'>Submit</a><br>
                </form>
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
        
        <?php
        include 'sub/footer.php';
        ?>
    </body>
</html>
