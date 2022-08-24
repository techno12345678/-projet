<?php

session_start();

include_once('../config/dbConfig.php');
if(isset($_POST['validate'])){

if(!empty($_POST['name'])  AND !empty($_POST['email'] ) AND !empty($_POST['password']  )){

    $user_name = htmlspecialchars($_POST['name']);
    $user_email = htmlspecialchars($_POST['email']);
    $user_password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $checkIfUserAlreadyExists =$db->prepare('SELECT email FROM userlogin WHERE email = ?');
    $checkIfUserAlreadyExists->execute(array($user_email));

    if($checkIfUserAlreadyExists->rowCount() == 0){
            
        //Insérer l'utilisateur dans la bdd
        $insertUserOnWebsite =$db->prepare('INSERT INTO userlogin(name, email, password)VALUES(?, ?, ?)');
        $insertUserOnWebsite->execute(array($user_name, $user_email,  $user_password));
 //Récupérer les informations de l'utilisateur
 $getInfosOfThisUserReq =$db->prepare('SELECT id,  name,email FROM userlogin WHERE name = ? AND email = ?');
 $getInfosOfThisUserReq->execute(array($user_name, $user_email));

 $usersInfos = $getInfosOfThisUserReq->fetch();

 //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
 $_SESSION['auth'] = true;
 $_SESSION['id'] = $usersInfos['id'];
 $_SESSION['firstname'] = $usersInfos['name'];
 $_SESSION['emailuser'] = $usersInfos['email'];



 //Rediriger l'utilisateur vers la page d'accueil
 header("Location: signuplogin.php");

    }else{
        $errorMsg = "L'utilisateur existe déjà sur le site";
          
    }
   }else{
    $errorMsg ="vueiler insecri avant de connect ..  ";

     }
}

?>