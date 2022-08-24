<?php
require_once("Model/Manager.php");

class SpecialityManager  extends Manager
{
     public function getSpecialitys()
    {
        $db = $this->dbConnect();
         $specialitys = $db->query("SELECT * FROM speciality ORDER BY speciality_name ASC");
        
        return $specialitys;
    }

    public function getSpeciality($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT * FROM speciality WHERE speciality_id = ? ");
   		$req->execute(array($id));
    	$speciality = $req->fetch();

        return $speciality;
    }

        
    public function addSpeciality($speciality_code, $speciality_name, $speciality_desc)
    {
        $db = $this->dbConnect();
        $qry = $db->prepare('INSERT INTO speciality( speciality_code,speciality_name, speciality_desc) VALUES(?,?,?)');
        $affectedLines = $qry->execute(array( $speciality_code, $speciality_name, $speciality_desc));

        return $affectedLines;
    }

    public function disableSpeciality($speciality_id){
        $db = $this->dbConnect();
        $qry = $db->prepare('UPDATE speciality set deleted = :deleted where speciality_id = :speciality_id') ;
        $updt  = $qry->execute(array('deleted' => "1", 'speciality_id' => $speciality_id)) ;
        
        return $updt;
    }

    public function enableSpeciality($speciality_id){
        $db = $this->dbConnect();
        $qry = $db->prepare('UPDATE speciality set deleted = :deleted where speciality_id = :speciality_id') ;
        $updt  = $qry->execute(array('deleted' => "0", 'speciality_id' => $speciality_id)) ;
        
        return $updt;
    }


    public function updateSpeciality($speciality_id,$speciality_code, $speciality_name, $speciality_desc )
    {
        $db = $this->dbConnect();
        $rqst3 = $db->prepare('UPDATE speciality set 
            speciality_code =: speciality_code,
           speciality_name = :speciality_name,
           speciality_desc = :speciality_desc
            where speciality_id = :speciality_id') ;

        $updt = $rqst3->execute(array(
            'speciality_code' => $speciality_code, 
            'speciality_name' => $speciality_name, 
            'speciality_desc' => $speciality_desc, 
            'speciality_id' => $speciality_id )) or die (print_r($rqst3->errorInfo()));
        
        return $updt;

    }

}
