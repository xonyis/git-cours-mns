<?php

$dbhost = "localhost";
$dbname = "????";
$dbuser = "root";
$dbpwd = "";

try{
    $connexion = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=utf8",$dbuser,$dbpwd);
    echo("zbi c'est connecté");
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    die("Erreur:".$e->getMessage());
}


?>