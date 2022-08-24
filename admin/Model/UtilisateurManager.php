


<?php
require_once("Model/Manager.php");



class UtilisateurManager extends Manager
{

public function getUtilisateures()
{
    $db = $this->dbConnect();
     $utilisateures = $db->query("SELECT * FROM utilisateur ORDER BY util_role ASC");
    
    return $utilisateures;
}

public function getUtilisateur($id)
{
    $db = $this->dbConnect();
    $req = $db->prepare("SELECT * FROM utilisateur WHERE util_id = ? ");
       $req->execute(array($id));
    $utilisateur = $req->fetch();

    return $utilisateur;
}

    
public function addUtilisateur($util_role, $util_dept, $util_speciality)
{
    $db = $this->dbConnect();
    $qry = $db->prepare('INSERT INTO utilisateur(util_role, util_dept, util_speciality) VALUES(?,?,?)');
    $affectedLines = $qry->execute(array($util_role, $util_dept, $util_speciality));

    return $affectedLines;
}

public function disableUtilisateur($util_id){
    $db = $this->dbConnect();
    $qry = $db->prepare('UPDATE utilisateur set deleted = :deleted where util_id = :util_id') ;
    $updt  = $qry->execute(array('deleted' => "1", 'util_id' => $util_id)) ;
    
    return $updt;
}

public function enableUtilisateur($util_id){
    $db = $this->dbConnect();
    $qry = $db->prepare('UPDATE utilisateur set deleted = :deleted where util_id = :util_id') ;
    $updt  = $qry->execute(array('deleted' => "0", 'util_id' => $util_id)) ;
    
    return $updt;
}


public function updateUtilisateur($util_id,$util_role, $util_dept, $util_speciality )
{
    $db = $this->dbConnect();
    $rqst2 = $db->prepare('UPDATE utilisateur set 
        util_role = :util_role,
        util_dept = :util_dept,
        util_speciality = :util_speciality
        where util_id = :util_id') ;

    $updt = $rqst2->execute(array(
        'util_role' => $util_role, 
        'util_dept' => $util_dept, 
        'util_speciality' => $util_speciality, 
        'util_id' => $util_id )) or die (print_r($rqst2->errorInfo()));
    
    return $updt;
}

}