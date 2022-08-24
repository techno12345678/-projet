<?php
// Initialiser la session
session_start();

// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if(!isset($_SESSION["name"])){
    header("Location: signuplogin.php");
    exit(); 
}
require('Controller/Controller.php');

try {
            if (isset($_GET['action'])) {


                
           

                if (($_GET['action'] == 'addCandidat') and (!isset($_GET['candidat_id'])) ) {  
                            addCandidat($_POST['nom'],$_POST['prenom'],$_POST['birthday'],$_POST['telephone'],$_POST['adresse'],$_POST['diplome'],$_POST['titrediplome'],$_POST['datediplome'],$_POST['fonction'],$_POST['employer'],$_POST['logiciel'],$_POST['themef'],$_POST['placef'],$_POST['datef'],$_POST['categorie']); 
                }
                elseif (($_GET['action'] == 'modifyCandidat') and ($_GET['candidat_id'] > 0) ) {
                                modifyCandidat($_POST['nom'],$_POST['prenom'],$_POST['birthday'],$_POST['telephone'],$_POST['adresse'],$_POST['diplome'],$_POST['titrediplome'],$_POST['datediplome'],$_POST['fonction'],$_POST['employer'],$_POST['logiciel'],$_POST['themef'],$_POST['placef'],$_POST['datef'],$_POST['categorie']);
                    }
                elseif ($_GET['action'] == 'candidatCreate') {
                    if (!isset($_GET['candidat_id'])) {
                        candidatAdd(!isset($_GET['candidat_id']));    //add candidat
                    }
                    elseif (isset($_GET['candidat_id']) && $_GET['candidat_id'] > 0){
                        candidatModify($_GET['candidat_id']); //modify domine
                    }
                    if ($_GET['action'] == 'candidatView') {
                        if (!isset($_GET['candidat_id'])) {
                           
                            candidatView(!isset($_GET['candidat_id']));    
                        }
               }
                 

                    
                    




               
                         

}}
        else listcandidats();
    } 
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

?>
