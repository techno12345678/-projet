<?php
require_once("Model/Manager.php");

class DepertementManager extends Manager
{
     public function getDepertements()
    {
        $db = $this->dbConnect();
         $depertements = $db->query("SELECT * FROM depertement ORDER BY depertement_name ASC");
        
        return $depertements;
    }

    public function getDepertement($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT * FROM depertement WHERE depertement_id = ? ");
   		$req->execute(array($id));
    	$depertement = $req->fetch();

        return $depertement;
    }

        
    public function addDepertement($depertement_code, $depertement_name, $depertement_numr)
    {
        $db = $this->dbConnect();
        $qry = $db->prepare('INSERT INTO depertement(depertement_code, depertement_name, depertement_numr) VALUES(?,?,?)');
        $affectedLines = $qry->execute(array($depertement_code, $depertement_name, $depertement_numr));

        return $affectedLines;
    }

    public function disableDepertement($depertement_id){
        $db = $this->dbConnect();
        $qry = $db->prepare('UPDATE depertement set deleted = :deleted where depertement_id = :depertement_id') ;
        $updt  = $qry->execute(array('deleted' => "1", 'depertement_id' => $depertement_id)) ;
        
        return $updt;
    }

    public function enableDepertement($depertement_id){
        $db = $this->dbConnect();
        $qry = $db->prepare('UPDATE depertement set deleted = :deleted where depertement_id = :depertement_id') ;
        $updt  = $qry->execute(array('deleted' => "0", 'depertement_id' => $depertement_id)) ;
        
        return $updt;
    }


    public function updateDepertement($depertement_id, $depertement_code, $depertement_name, $depertement_numr )
    {
        $db = $this->dbConnect();
        $rqst1 = $db->prepare('UPDATE depertement set 
            depertement_code = :depertement_code,
            depertement_name = :depertement_name,
            depertement_numr = :depertement_numr
            where depertement_id = :depertement_id') ;

        $updt = $rqst1->execute(array(
            'depertement_code' => $depertement_code, 
            'depertement_name' => $depertement_name, 
            'depertement_numr' => $depertement_numr, 
            'depertement_id' => $depertement_id )) or die (print_r($rqst1->errorInfo()));
        
        return $updt;

    }

}
