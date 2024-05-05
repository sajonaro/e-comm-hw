<?php
    require 'sessionFunctions.php';
    
    startSession();
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>session counter page</title>
</head>
    <body>
        <h1>session testing PHP Page</h1>
            
        <p> 
            <?php echo "Hello World!"; ?>
        </p>

        <p>
            <?php echo "session counter";
                  echo countSession();   
            ?>    
        </p>
        
        
        <p>
            <?php  echo checkLoadedIniFile(); ?>    
        </p>
        
    </body>
</html>