<?php
require_once("Model/Manager.php");

class CandidatManager extends Manager
{
     public function getCandidats()
    {
        $db = $this->dbConnect();
         $candidats = $db->query("SELECT * FROM candidat ORDER BY nom ASC");
        
        return $candidats;
    }

    public function getCandidat($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT * FROM candidat WHERE candidat_id = ? ");
   		$req->execute(array($id));
    	$candidat = $req->fetch();

        return $candidat;
    }

        
    public function addCandidat( $nom,$prenom,$birthday, $telephone,$adresse,$diplome,$titrediplome,$datediplome, $fonction,
    $employer,$logiciel, $themef,$placef,  $datef,$categorie)
    {
        $db = $this->dbConnect();
        $qry = $db->prepare('INSERT INTO candidat( nom, prenom, birthday,telephone,adresse,diplome,titrediplome,datediplome, fonction,
        employer,logiciel, themef,placef,  datef,categorie) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $affectedLines = $qry->execute(array( $nom,$prenom,$birthday, $telephone,$adresse,$diplome,$titrediplome,$datediplome, $fonction,
        $employer,$logiciel ,$themef,$placef,  $datef,$categorie));

        return $affectedLines;
    }


    public function updateCandidat($candidat_id,$nom,$prenom,$birthday, $telephone,$adresse,$diplome,$titrediplome,$datediplome, $fonction,
    $employer,$logiciel, $themef,$placef,  $datef,$categorie)
    {
        $db = $this->dbConnect();
        $rqst1 = $db->prepare('UPDATE candidat set 
            nom = :nom,
            prenom = :prenom,
            birthday = :birthday,
            telephone=:telephone,
            adresse=:adresse,
            diplome=:diplome,
            titrediplome=:titrediplome,
            fonction=:fonction,
            employer=:employer,
            themef=:themef,
            placef=:placef,
            datef=:datef,
           categorie=:categorie,
           logiciel=:logiciel


            where candidat_id = :candidat_id') ;

        $updt = $rqst1->execute(array(
            'nom' => $nom, 
            'prenom' => $prenom, 
            'birthday' => $birthday, 
           
             'telephone' =>$telephone,
              'adresse'=>$adresse,
              'diplome'=>$diplome,
              'titrediplome'=>$titrediplome,
                'fonction'=>$fonction,
                'employer'=>$employer,
                'logiciel'=>$logiciel,
                'themef'=>$themef,

                'placef'=>$placef,
                'datef'=>$datef,
                'categorie'=>$categorie,
                'logiciel'=>$logiciel,


            'candidat_id' => $candidat_id )) or die (print_r($rqst1->errorInfo()));
        
        return $updt;

    }


    
}









 ?>