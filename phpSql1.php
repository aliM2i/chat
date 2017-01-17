<<?php session_start(); ?>
<!DOCTYPE html>
<html>

    <head>
     </head>
<body>
    
    <div>
        
    <?php
    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=sql","root", "");
    
    for ($i=1;$i<=1000;$i++)
    {
       $pdo->query('INSERT INTO client (nom) VALUES("client".'$i')');
        
    }  
      
      ?>

       
       
            
   
   </div>

</body>
</html>
