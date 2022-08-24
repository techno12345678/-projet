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
                if (($_GET['action'] == 'addDomaine') and (!isset($_GET['domaine_id'])) ) {  
                        //$_GET['id'] = null;
                            addDomaine($_POST['domaine_code'],$_POST['domaine_name'],$_POST['domaine_desc']); 
                }
                elseif (($_GET['action'] == 'modifyDomaine') and ($_GET['domaine_id'] > 0) ) {
                                modifyDomaine($_POST['domaine_code'],$_POST['domaine_name'],$_POST['domaine_desc']);
                    }
                elseif ($_GET['action'] == 'domaineCreate') {
                    if (!isset($_GET['domaine_id'])) {
                        domaineAdd();    //add domaine
                    }
                    elseif (isset($_GET['domaine_id']) && $_GET['domaine_id'] > 0){
                        domaineModify($_GET['domaine_id']); //modify domine
                    }
                 }
                 elseif ($_GET['action'] == 'domaineDisable') {
                    if (isset($_GET['domaine_id'])) {
                        domaineDisable($_GET['domaine_id']);    //disable domaine
                    }
                 }
                 elseif ($_GET['action'] == 'domaineEnable') {
                    if (isset($_GET['domaine_id'])) {
                        domaineEnable($_GET['domaine_id']);    //disable domaine
                    }
                 }
                 elseif ($_GET['action'] == 'listDomaines') {
                        listDomaines();    //list domaines
                 }







               
                if (isset($_GET['action'])) {
                    if (($_GET['action'] == 'addUtilisateur') and (!isset($_GET['util_id'])) ) {  
                            //$_GET['id'] = null;
                            addUtilisateur($_POST['util_role'],$_POST['util_dept'],$_POST['util_speciality']); 
                    }
                    elseif (($_GET['action'] == 'modifyutilisateur') and ($_GET['util_id'] > 0) ) {
                        modifyutilisateur($_POST['util_role'],$_POST['util_dept'],$_POST['util_speciality']); 
                    }
                    elseif ($_GET['action'] == 'utilisateurCreate') {
                        if (!isset($_GET['util_id'])) {
                            utilisateurAdd();    //add utilisateur
                        }
                        elseif (isset($_GET['util_id']) && $_GET['util_id'] > 0){
                            utilisateurModify($_GET['util_id']); //modify utilisateur
                        }
                     }
                     elseif ($_GET['action'] == 'utilisateurDisable') {
                        if (isset($_GET['util_id'])) {
                            utilisateurDisable($_GET['util_id']);    //disable utilisateur
                        }
                     }
                     elseif ($_GET['action'] == 'utilisateurEnable') {
                        if (isset($_GET['util_id'])) {
                            utilisateurEnable($_GET['util_id']);    //disable utilisateur
                        }
                     }
                     elseif ($_GET['action'] == 'listUtulisateures') {
                        listUtulisateures();    //list utilisateur
                     }






        
                     if (isset($_GET['action'])) {
                        if (($_GET['action'] == 'addSpeciality') and (!isset($_GET['speciality_id'])) ) {  
                                //$_GET['id'] = null;
                                    addSpeciality($_POST['speciality_code'],$_POST['speciality_name'],$_POST['speciality_desc']); 
                        }
                        elseif (($_GET['action'] == 'modifySpeciality') and ($_GET['speciality_id'] > 0) ) {
                                        modifySpeciality($_POST['speciality_code'],$_POST['speciality_name'],$_POST['speciality_desc']);
                            }
                        elseif ($_GET['action'] == 'specialityCreate') {
                            if (!isset($_GET['speciality_id'])) {
                                specialityAdd();    //add speciality
                            }
                            elseif (isset($_GET['speciality_id']) && $_GET['speciality_id'] > 0){
                                specialityModify($_GET['speciality_id']); //modify speciality
                            }
                         }
                         elseif ($_GET['action'] == 'specialityDisable') {
                            if (isset($_GET['speciality_id'])) {
                                specialityDisable($_GET['speciality_id']);    //disable speciality
                            }
                         }
                         elseif ($_GET['action'] == 'specialityEnable') {
                            if (isset($_GET['speciality_id'])) {
                                specialityEnable($_GET['speciality_id']);    //disable speciality
                            }
                         }
                         elseif ($_GET['action'] == 'listSpecialitys') {
                                listSpecialitys();    //list specialitys
                         }
        



                         if (isset($_GET['action'])) {
                            if (($_GET['action'] == 'addDepertement') and (!isset($_GET['depertement_id'])) ) {  
                                    //$_GET['id'] = null;
                                        addDepertement($_POST['depertement_code'],$_POST['depertement_name'],$_POST['depertement_numr']); 
                            }
                            elseif (($_GET['action'] == 'modifyDepertement') and ($_GET['depertement_id'] > 0) ) {
                                            modifyDepertement($_POST['depertement_code'],$_POST['depertement_name'],$_POST['depertement_numr']);
                                }
                            elseif ($_GET['action'] == 'depertementCreate') {
                                if (!isset($_GET['depertement_id'])) {
                                    depertementAdd();    //add depertement
                                }
                                elseif (isset($_GET['depertement_id']) && $_GET['depertement_id'] > 0){
                                    depertementModify($_GET['depertement_id']); //modify depertement
                                }
                             }
                             elseif ($_GET['action'] == 'depertementDisable') {
                                if (isset($_GET['depertement_id'])) {
                                    depertementDisable($_GET['depertement_id']);    //disable depertement
                                }
                             }
                             elseif ($_GET['action'] == 'depertementEnable') {
                                if (isset($_GET['depertement_id'])) {
                                    depertementEnable($_GET['depertement_id']);    //disable depertement
                                }
                             }
                             elseif ($_GET['action'] == 'listDepertements') {
                                    listdepertements();    //list depertements
                             }
                        















            }   }}}
        else listDomaines();
    } 
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

?>
