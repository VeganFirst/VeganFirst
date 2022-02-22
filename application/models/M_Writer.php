<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Writer extends MY_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function RegisterWriter($Array){
        $writerEmail = $Array['Email'];
        $writerPassword = $Array['Password'];
        
        $Arrayw['FirstName']=$Array['FirstName'];
		$Arrayw['LastName']=$Array['LastName'];
		$Arrayw['Phone']=$Array['Phone'];
		$Arrayw['Email']=$writerEmail;
		$Arrayw['Password'] = $writerPassword;
        $Arrayw['isActive'] = "1";
        
        if (!$this->isEmailExists($writerEmail)){
            if($this->Insert("writer", $Arrayw))
			{
            return "You have successfully signup.";
			
			}
        }else{
            return "This email is already exists";
        }
    }
    
    public function login($Email, $Password){
		
        $Query = $this->SelectAllWhere("writer", array("Email"=>$Email, "Password"=>$Password));
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            if ($Result[0]->isActive=="0"){
                return "This writer is inactive";
            }else{
				
				$_SESSION['Writer_Login'] = $Result[0]->id;
				$_SESSION['Writer_Name'] = $Result[0]->FirstName.' '.$Result[0]->LastName;
	   date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
  
	   $this->UpdateAll("writer",array("LastLogin"=>$date),array('id'=>$Result[0]->id));

                redirect(base_url()."writer/dashboard");
            }
        }else{
            return "Invalid email or password";
        }
    }
    
    public function isEmailExists($Email){
        $Query = $this->SelectAllWhere("writer", array("Email"=>$Email));
        if ($Query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function isWriterLogin(){
        if (isset($_SESSION['Writer_Login'])){
            return $_SESSION['Writer_Login'];
        }else{
            return FALSE;
        }
    }
	 public function getAllWriters(){
        $Query = $this->SelectAll('writer');
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
    
    public function getWriterInfo($idWriter){
       // $Query = $this->db->query("SELECT * FROM writer");
		 $Query = $this->SelectAllWhere("writer", array("id"=>$idWriter));
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result[0];
        }
    }
	
	
	
	
    
    
    public function updateWriter($idWriter, $Array){
        $this->UpdateAll("writer", $Array, array("id"=>$idWriter));
		return "Profile Updated Successfully!";
    }
    
    public function deleteWriter($idWriter){
        $this->Delete("writer", array("id"=>$idWriter));
        
    }
	
	
	
	public function activeWriter(){
    
	
	$this->db->where('isActive',1);
	$this->db->from('writer');
	$count = $this->db->count_all_results();
	return $count;
	}
}