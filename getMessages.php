<?php

$pdo = new PDO("mysql:host=localhost;dbname=chat","root", "");
$result =  $pdo->query('SELECT * FROM messages')->fetchAll();

echo json_encode($result);
                        