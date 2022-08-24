<?php


try{
    $db= new PDO('mysql:host=localhost;dbname=projet;charset=utf8;', 'root', '');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}