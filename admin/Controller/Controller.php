<?php

// Chargement des classes
require_once('Model/DomaineManager.php');
require_once('Model/UtilisateurManager.php');
require_once('Model/SpecialityManager.php');
require_once('Model/DepertementManager.php');




function listDomaines()
{
    $domaineManager = new DomaineManager(); // Création d'un objet
    $domaines = $domaineManager->getDomaines(); // Appel d'une fonction de cet objet

    require('view/listDomainesView.php');
}


function domaine()
{
    $domaineManager = new DomaineManager();
    $specialityManager = new SpecialityManager();

    $domaine = $domaineManager->getDomaine($_GET['domaine_id']);
    $specialitys = $specialityManager->getSpecialitiesDomaine($_GET['domaine_id']);

    require('view/domaineView.php');
}

function addDomaine($domaine_code, $domaine_name, $domaine_desc)
{
    $domaineManager = new DomaineManager();
    $request = $domaineManager->addDomaine($domaine_code, $domaine_name, $domaine_desc);

    if ($request === false) {
        throw new Exception('Impossible d\'ajouter le domaine !');
    }
    else {
        header('Location: index.php?action=domaineCreate');
    }
}

function domaineDisable($domaine_id){
    $domaineManager = new DomaineManager();
    $request = $domaineManager->disableDomaine($domaine_id);
    //var_dump($request);
    
    if ($request === false) {
        throw new Exception('Impossible de desactiver le domaine !');
    }
    else {
        header('Location: index.php?action=domaineCreate');
    }
}

function domaineEnable($domaine_id){
    $domaineManager = new DomaineManager();
    $request = $domaineManager->enableDomaine($domaine_id);
    //var_dump($request);
    
    if ($request === false) {
        throw new Exception('Impossible d\'activer le domaine !');
    }
    else {
        header('Location: index.php?action=domaineCreate');
    }
}

function domaineModify($domaine_id)
{
    $domaineManager = new DomaineManager();
    $domaine = $domaineManager->getDomaine($domaine_id);

    $domaines = $domaineManager->getDomaines(); 

    require('view/domaineCreate.php');
}

function domaineAdd()
{
    $domaineManager = new DomaineManager();
    $domaines = $domaineManager->getDomaines(); 

    require('view/domaineCreate.php');
}

function modifyDomaine($domaine_code, $domaine_name, $domaine_desc)
{
    $domaineManager = new DomaineManager();

    //var_dump($serialnumber);
    $operation = $domaineManager->updateDomaine($_GET['domaine_id'], $domaine_code, $domaine_name, $domaine_desc);

    if ($operation === false) {
                     //var_dump($_GET['domaine_id'], $domaine_name); 
                     throw new Exception('Impossible de modifier le Domaine !');
    } else {
                    header('Location: index.php?action=domaineCreate');
    }
}








function listUtulisateures()
{
    $utilisateurManager = new UtilisateurManager(); // Création d'un objet
    $utilisateures = $utilisateurManager->getUtilisateures(); // Appel d'une fonction de cet objet

    require('view/listutilisateurView.php');
}




function addUtilisateur($util_role, $util_dept, $util_speciality)
{
    $utilisateurManager = new UtilisateurManager();
    $reqst = $utilisateurManager->addUtilisateur($util_role, $util_dept, $util_speciality);

    if ($reqst === false) {
        throw new Exception('Impossible d\'ajouter lutulisateur !');
    }
    else {
        header('Location: index.php?action=utilisateurCreate');
    }
}

function utilisateurDisable($util_id){

    $utilisateurManager = new UtilisateurManager();  
      $request =  $utilisateurManager->disableUtilisateur($util_id);
    //var_dump($request);
    
    if ($request === false) {
        throw new Exception('Impossible de desactiver l utulisateur !');
    }
    else {
        header('Location: index.php?action=utilisateurCreate');
    }
}

function utilisateurEnable($util_id){
    $utilisateurManager = new UtilisateurManager();  
    $request =  $utilisateurManager->enableUtilisateur($util_id);
    //var_dump($request);
    
    if ($request === false) {
        throw new Exception('Impossible d\activer lutulisateur !');
    }
    else {
        header('Location: index.php?action=utilisateurCreate');
    }
}

function utilisateurModify($util_id)
{
    $utilisateurManager = new UtilisateurManager();  
    $utilisateur = $utilisateurManager->getUtilisateur($util_id); 

    $utilisateures = $utilisateurManager->getUtilisateures(); 
    require('view/utilisateurCreate.php');
}

function utilisateurAdd()
{
    $utilisateurManager = new UtilisateurManager();  
    $utilisateures = $utilisateurManager->getUtilisateures(); 

    require('view/utilisateurCreate.php');
}

function modifyutilisateur($util_role, $util_dept, $util_speciality)
{
    $utilisateurManager = new UtilisateurManager();  

    //var_dump($serialnumber);
    $opertion = $utilisateurManager->updateUtilisateur($_GET['util_id'],$util_role, $util_dept, $util_speciality);

    if ($opertion === false) {
                     //var_dump($_GET['util_id'], $utilisateur_role); 
                     throw new Exception('Impossible de modifier lutilisateur !');
    } else {
                    header('Location: index.php?action=utilisateurCreate');
    }
}









function listSpecialitys()
{
   $specialityManager = new SpecialityManager (); // Création d'un objet
    $specialitys =$specialityManager->getSpecialitys(); // Appel d'une fonction de cet objet

    require('view/listSpecialityView.php');
}




function addSpeciality($speciality_code, $speciality_name, $speciality_desc)
{
   $specialityManager = new SpecialityManager();
    $request =$specialityManager->addSpeciality($speciality_code, $speciality_name, $speciality_desc);

    if ($request === false) {
        throw new Exception('Impossible d\'ajouter le speciality !');
    }
    else {
        header('Location: index.php?action=specialityCreate');
    }
}

function specialityDisable($speciality_id){
   $specialityManager = new SpecialityManager();
    $request =$specialityManager->disableSpeciality($speciality_id);
    //var_dump($request);
    
    if ($request === false) {
        throw new Exception('Impossible de desactiver le speciality !');
    }
    else {
        header('Location: index.php?action=specialityCreate');
    }
}

function specialityEnable($speciality_id){
   $specialityManager = new SpecialityManager();
    $request =$specialityManager-> enableSpeciality($speciality_id);
    //var_dump($request);
    
    if ($request === false) {
        throw new Exception('Impossible d\'activer le speciality !');
    }
    else {
        header('Location: index.php?action=specialityCreate');
    }
}

function specialityModify($speciality_id)
{
    $specialityManager = new SpecialityManager();
        $speciality =$specialityManager->getSpeciality($speciality_id);

    $specialitys =$specialityManager->getSpecialitys();

    require('view/specialityCreate.php');
}

function specialityAdd()
{
   $specialityManager = new SpecialityManager();
    $specialitys =$specialityManager->getSpecialitys();

    require('view/specialityCreate.php');
}

function modifySpeciality($speciality_code, $speciality_name, $speciality_desc)
{
   $specialityManager = new SpecialityManager();

    //var_dump($serialnumber);
    $operation =$specialityManager->updateSpeciality($_GET['speciality_id'], $speciality_code, $speciality_name, $speciality_desc);

    if ($operation === false) {
                     //var_dump($_GET['speciality_id'], $speciality_name); 
                     throw new Exception('Impossible de modifier le Speciality !');
    } else {
                    header('Location: index.php?action=specialityCreate');
    }
}







function listDepertements()
{
   $depertementManager = new DepertementManager(); // Création d'un objet
    $depertements =$depertementManager->getDepertements(); // Appel d'une fonction de cet objet

    require('view/listDepertementView.php');
}




function addDepertement($depertement_code, $depertement_name, $depertement_nmro)
{
   $depertementManager = new DepertementManager();
    $request =$depertementManager->adddepertement($depertement_code, $depertement_name, $depertement_nmro);

    if ($request === false) {
        throw new Exception('Impossible d\'ajouter le depertement !');
    }
    else {
        header('Location: index.php?action=depertementCreate');
    }
}

function depertementDisable($depertement_id){
   $depertementManager = new DepertementManager();
    $request =$depertementManager->disableDepertement($depertement_id);
    //var_dump($request);
    
    if ($request === false) {
        throw new Exception('Impossible de desactiver le depertement !');
    }
    else {
        header('Location: index.php?action=depertementCreate');
    }
}

function depertementEnable($depertement_id){
   $depertementManager = new DepertementManager();
    $request =$depertementManager-> enableDepertement($depertement_id);
    //var_dump($request);
    
    if ($request === false) {
        throw new Exception('Impossible d\'activer le depertement !');
    }
    else {
        header('Location: index.php?action=depertementCreate');
    }
}

function depertementModify($depertement_id)
{
    $depertementManager = new DepertementManager();
        $depertement =$depertementManager->getDepertement($depertement_id);

    $depertements =$depertementManager->getDepertements();

    require('view/depertementCreate.php');
}

function depertementAdd()
{
   $depertementManager = new DepertementManager();
    $depertements =$depertementManager->getDepertements();

    require('view/depertementCreate.php');
}

function modifyDepertement($depertement_code, $depertement_name, $depertement_numro)
{
   $depertementManager = new DepertementManager();

    //var_dump($serialnumber);
    $operation =$depertementManager->updatedepertement($_GET['depertement_id'], $depertement_code, $depertement_name, $depertement_numro);

    if ($operation === false) {
                     //var_dump($_GET['depertement_id'], $depertement_name); 
                     throw new Exception('Impossible de modifier le depertement !');
    } else {
                    header('Location: index.php?action=depertementCreate');
    }
}




















