<?php
require_once("Model/Manager.php");

class DomaineManager extends Manager
{
     public function getDomaines()
    {
        $db = $this->dbConnect();
         $domaines = $db->query("SELECT * FROM domaine ORDER BY domaine_name ASC");
        
        return $domaines;
    }

    public function getDomaine($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT * FROM domaine WHERE domaine_id = ? ");
   		$req->execute(array($id));
    	$domaine = $req->fetch();

        return $domaine;
    }

        
    public function addDomaine($domaine_code, $domaine_name, $domaine_desc)
    {
        $db = $this->dbConnect();
        $qry = $db->prepare('INSERT INTO domaine(domaine_code, domaine_name, domaine_desc) VALUES(?,?,?)');
        $affectedLines = $qry->execute(array($domaine_code, $domaine_name, $domaine_desc));

        return $affectedLines;
    }

    public function disableDomaine($domaine_id){
        $db = $this->dbConnect();
        $qry = $db->prepare('UPDATE domaine set deleted = :deleted where domaine_id = :domaine_id') ;
        $updt  = $qry->execute(array('deleted' => "1", 'domaine_id' => $domaine_id)) ;
        
        return $updt;
    }

    public function enableDomaine($domaine_id){
        $db = $this->dbConnect();
        $qry = $db->prepare('UPDATE domaine set deleted = :deleted where domaine_id = :domaine_id') ;
        $updt  = $qry->execute(array('deleted' => "0", 'domaine_id' => $domaine_id)) ;
        
        return $updt;
    }


    public function updateDomaine($domaine_id, $domaine_code, $domaine_name, $domaine_desc )
    {
        $db = $this->dbConnect();
        $rqst1 = $db->prepare('UPDATE domaine set 
            domaine_code = :domaine_code,
            domaine_name = :domaine_name,
            domaine_desc = :domaine_desc
            where domaine_id = :domaine_id') ;

        $updt = $rqst1->execute(array(
            'domaine_code' => $domaine_code, 
            'domaine_name' => $domaine_name, 
            'domaine_desc' => $domaine_desc, 
            'domaine_id' => $domaine_id )) or die (print_r($rqst1->errorInfo()));
        
        return $updt;

    }

}
