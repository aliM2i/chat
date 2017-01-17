<?php
session_start();


$pdo = new PDO("mysql:host=localhost;dbname=chat","root", "");
$pdo->query('INSERT INTO messages (auteur,message,date) VALUES("'.$_SESSION['pseudo'].'","'.$_POST['message'].'", "'.date('y-m-d H:i:s').'")');




                        