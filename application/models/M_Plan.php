<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Plan extends MY_Model{
    public function __construct() {
		parent::__construct();
		
	}
    
	
	public function getAllActivePlans(){
		$this->db->select('*');
		$this->db->from('plans');
		$this->db->where("status",1);
		$this->db->order_by('position','asc');
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	
	public function getAllActivePlansByCat($id){
		$this->db->select('*');
		$this->db->from('plans');
		$this->db->where("cat",$id);
		$this->db->where("status",1);
		$this->db->order_by('position','asc');
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	
	
	
	
	public function getAllPlans(){
		$this->db->select('*');
		$this->db->from('plans');
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	
	public function AddPlan($Array){
		$Url = $this->CreateSlug($Array['title']);
		
	   	date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$Array['updated_on'] = $date;
		
			$config['file_name']= time();
			$config['upload_path']   = 'media/plan/'; 
			$config['allowed_types'] = 'jpg|png'; 
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file'))
			{
				$this->upload->display_errors();
			}
			else 
			{ 
				$image_data = $this->upload->data() ;
				$Array['image_name'] = $image_data['file_name'];
			}
		 
		if (!$this->isEmailExists($Url)){
			$Array['Url']=$Url;
			$this->db->insert('plans', $Array);
			$id = $this->db->insert_id();  
			if($id)
			{
				
			return "Plan ".$Array['title']." Added Successfully!";
			
			}
		}else{
			return "This Plan is already exists Please Change url";
		}
	}
	
	
	public function UpdatePlan($id,$Array){
		$Url = $this->CreateSlug($Array['title']);
		
	   	date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$Array['updated_on'] = $date;
			$config['file_name']= time();
			$config['upload_path']   = 'media/plan/'; 
			$config['allowed_types'] = 'jpg|png'; 
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file'))
			{
				$this->upload->display_errors();
			}
			else 
			{ 
				$image_data = $this->upload->data() ;
				$Array['image_name'] = $image_data['file_name'];
			}
		 
		$this->UpdateAll("plans", $Array, array("idPlan"=>$id));
	}
	public function getPlanInfo($id){
		$this->db->select('*');
		 $this->db->from('plans');
		 $this->db->where("idPlan",$id);
		 $Query =$this->db->get();
		if ($Query->num_rows() > 0){
		   $rs =  $Query->result();
		   return $rs[0];
		}
	}
	public function isEmailExists($Email){
		$Query = $this->SelectAllWhere("plans", array("url"=>$Email));
		if ($Query->num_rows() > 0){return true;}else{return false;}
	}
	
	public function deletePlan($id){
        $this->Delete("plans", array("idPlan"=>$id));
        
    }
	
	
	public function getAllActivePlanCats(){
		$this->db->select('*');
		$this->db->from('plan_cat');
		$this->db->where("isActive",1);
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	public function getAllPlanCats(){
		$this->db->select('*');
		$this->db->from('plan_cat');
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	
	public function AddPlanCat($Array){
		
		$this->db->insert('plan_cat', $Array);
		$id = $this->db->insert_id();  
		if($id)
		{
			return "Plan ".$Array['title']." Added Successfully!";
		}
	}
	
	
	public function UpdatePlanCat($id,$Array){
		$this->UpdateAll("plan_cat", $Array, array("id"=>$id));
	}
	public function getPlanCatInfo($id){
		 $this->db->select('*');
		 $this->db->from('plan_cat');
		 $this->db->where("id",$id);
		 $Query =$this->db->get();
		 if ($Query->num_rows() > 0){
		   $rs =  $Query->result();
		   return $rs[0];
		 }
	}
	
	
	public function deletePlanCat($id){
        $this->Delete("plan_cat", array("id"=>$id));
    }
	
	
    
}