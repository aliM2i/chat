<?php session_start(); ?>
<!DOCTYPE html>
<html>

    <head>
        <link href="CSS.css" rel="stylesheet" type="text/css"/>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
     <script src="main.js"></script>
    </head>
<body>
    
    <div>
        
    <?php
    
   
        //  se connecte à notre base de données
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=chat', 'root', '');
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
          
       
      ?>

        <form id="form">	
            <textarea name="messageT" rows="4" cols="50" id="message"></textarea><br />            
            <button  name="envoi" id="envoi">Envoi du message</button >
            <input type="text"  name="message" id="messageUser" /><br />
        </form>
       
            
   
   </div>

</body>
</html>
