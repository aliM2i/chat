<?php 
session_start();

    $_SESSION["pseudo"]=$_POST['pseudo'];
    echo  $_SESSION["pseudo"];
    
  header("Location:traitement.php")  
    
 ?>