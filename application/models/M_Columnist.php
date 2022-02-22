<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Columnist extends MY_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function AddColumnist($Array){
        $writerEmail = $Array['Email'];
        
        $Arrayw['Name']=$Array['Name'];
		$Arrayw['Url']=$this->CreateSlug($Array['Name']);
		$Arrayw['Email']=$writerEmail;
		$Arrayw['isActive'] = "1";
		
		$Arrayw['Speciality']=$Array['Speciality'];
		$Arrayw['descrp']=$Array['descrp'];
		$Arrayw['Facebook']=$Array['Facebook'];
		$Arrayw['Twitter']=$Array['Twitter'];
		$Arrayw['Pinterest']=$Array['Pinterest'];
		$Arrayw['Instagram']=$Array['Instagram'];
		
		 $config['upload_path']   = 'media/upload/columnist/'; 
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
         $config['max_size']      = 1024; 
         $config['max_width']     = 2000; 
         $config['max_height']    = 2000;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('file')) {
            
         }
		 else { 
           $image_data = $this->upload->data() ; 
             $Arrayw['Picture'] = $image_data['file_name'];
         }
		 
		 
		 /*if ( ! $this->upload->do_upload('file_banner')) {
            
         }
		 else { 
           $image_data = $this->upload->data() ; 
             $Arrayw['Banner'] = $image_data['file_name'];
         }  */
		
		
		
        
        if (!$this->isEmailExists($writerEmail)){
            if($this->Insert("columnist", $Arrayw))
			{
            return "Columnist ".$Arrayw['Name']." Added Successfully!";
			
			}
        }else{
            return "This email is already exists";
        }
    }
	
	
	public function isEmailExists($Email){
        $Query = $this->SelectAllWhere("columnist", array("Email"=>$Email));
        if ($Query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    
    
   
   
	 public function getAllColumnist(){
        $Query = $this->SelectAll('columnist');
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	
	
	 public function getAllActiveColumnist(){
        
		$Query = $this->SelectAllWhere("columnist", array("isActive"=>1));
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	
	
	
    
    public function getColumnistInfo($idAuthor){
        
		 $Query = $this->SelectAllWhere("columnist", array("idColumnist"=>$idAuthor));
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result[0];
        }
    }
	
    
    
    public function updateColumnist($idAuthor, $Array){
		 
		 $config['upload_path']   = 'media/upload/columnist/'; 
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
         $config['max_size']      = 1024; 
         $config['max_width']     = 2000; 
         $config['max_height']    = 2000;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('file')) {
            
         }
		 else { 
           $image_data = $this->upload->data() ; 
             $Array['Picture'] = $image_data['file_name'];
         }
		
        $this->UpdateAll("columnist", $Array, array("idColumnist"=>$idAuthor));
    }
    
    public function deleteColumnist($idAuthor){
        $this->Delete("columnist", array("idColumnist"=>$idAuthor));
        
    }
	
	
	public function AddQuestion($Array){
			date_default_timezone_set("Asia/Kolkata");
			$date = date('Y-m-d H:i:s');
			$Array['postTime'] = $date;

            if($this->Insert("questions", $Array))
			{
            return "Question ".$Array['question']." Added Successfully!";
			}
			else
			{
				return  "Try Again";
			}
        
    }
	 public function getAllQuestion(){
        //$Query = $this->SelectAll('article');
		$this->db->select('*');
		$this->db->from('questions');
		$this->db->join('columnist', 'columnist.idColumnist = questions.idColumnist');
		$Query = $this->db->get();

        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	
	 public function getQuestionInfo($quest){
		$this->db->select('*');
		$this->db->from('questions');
		$this->db->where('idQuestion', $quest);
		$this->db->join('columnist', 'columnist.idColumnist = questions.idColumnist');
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            $Result= $Query->result();
			return $Result[0];
        }
    }
	public function getColumnistView($quest){
		$Query = $this->SelectAllWhere("columnist", array("Url"=>$quest));
        if ($Query->num_rows() > 0){
            $Result= $Query->result();
			return $Result[0];
        }
    }
	
	public function getQuestionView($quest,$limit, $start){

		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('questions');
		$this->db->order_by("postTime","desc");
		$this->db->where('idColumnist', $quest);
		$Query = $this->db->get();
		//$Query = $this->SelectAllWhere("questions", array("idColumnist"=>$quest));
        if ($Query->num_rows() > 0){
            $Result= $Query->result();
			return $Result;
        }
    }
	
	
	public function countQuestion($quest){
		$this->db->select('*');
		$this->db->from('questions');
		$this->db->where('idColumnist', $quest);
		$Query = $this->db->get();
		return $Query->num_rows;
    }
	
	 public function updateQuestion($idAuthor, $Array){
		 $this->UpdateAll("questions", $Array, array("idQuestion"=>$idAuthor));
    }
	public function deleteQuestion($idAuthor){
        $this->Delete("questions", array("idQuestion"=>$idAuthor));
        
    }
}