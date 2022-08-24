<?php

// Chargement des classes
require_once('Model/CandidatManager.php');





function listCandidats()
{
    $candidatManager = new CandidatManager(); // Création d'un objet
    $candidats = $candidatManager->getCandidats(); // Appel d'une fonction de cet objet

    require('view/candidatCreate.php');
}



function addCandidat( $nom,$prenom,$birthday, $telephone,$adresse,$diplome,$titrediplome,$datediplome, $fonction,
$employer, $themef,$placef,  $datef,$categorie,$logiciel)
{
    $candidatManager = new CandidatManager();
    $request = $candidatManager->addCandidat( $nom,$prenom,$birthday, $telephone,$adresse,$diplome,$titrediplome,$datediplome, $fonction,
    $employer, $themef,$placef,  $datef,$categorie,$logiciel);

    if ($request === false) {
        throw new Exception('Impossible d\'ajouter le candidat !');
    }
    else {
        header('Location: index.php?action=candidatCreate');
    }
}



function candidatModify($candidat_id)
{
    $candidatManager = new CandidatManager();
    $candidat = $candidatManager->getCandidat($candidat_id);

    $candidats = $candidatManager->getCandidats(); 

    require('view/candidatCreate.php');
}

function candidatAdd($candidat_id)
{
    $candidatManager = new CandidatManager();
    $candidat = $candidatManager->getCandidat($candidat_id);

    $candidats = $candidatManager->getCandidats(); 

    require('view/viewCandidat.php');
}

function modifyCandidat( $nom,$prenom,$birthday, $telephone,$adresse,$diplome,$titrediplome,$datediplome, $fonction,
$employer, $themef,$placef,  $datef,$categorie,$logiciel)
{
    $candidatManager = new CandidatManager();

    //var_dump($serialnumber);
    $operation = $candidatManager->updateCandidat($_GET['candidat_id'], $nom,$prenom,$birthday, $telephone,$adresse,$diplome,$titrediplome,$datediplome, $fonction,
$employer, $themef,$placef,  $datef,$categorie,$logiciel);

    if ($operation === false) {
                     //var_dump($_GET['candidat_id'], $candidat_name); 
                     throw new Exception('Impossible de modifier le candidat !');
    } else {
                    header('Location: index.php?action=candidatCreate');
    }
}








