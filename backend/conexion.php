<?php

$link = 'mysql:host=localhost;dbname=api';
$usuario = 'root';
$pass = '';

try{

    $pdo = new PDO($link,$usuario,$pass);
    //echo "Conectado a la DB";

}catch (PDOException $e){
   
    print " !Error¡: " . $e->getMessage() . "<br/>";
    die();

}