<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Shop extends MY_Model{
    public function __construct() {
		parent::__construct();
		
	}
    public function getAllCourses(){
		$this->db->select('*');
		$this->db->from('shop_online_course');
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	
	public function getAllActiveCourses(){
		$this->db->select('*');
		$this->db->from('shop_online_course');
		$this->db->where("status",1);
		//$this->db->order_by('position','asc');
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	public function AddCourses($Array){
		$Url = $this->CreateSlug($Array['course_name']);
		
	   	date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$Array['updated_on'] = $date;
		
			$config['file_name']= time();
			$config['upload_path']   = 'media/upload/course/'; 
			$config['allowed_types'] = 'jpg|png'; 
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file'))
			{
				$this->upload->display_errors();
			}
			else 
			{ 
				$image_data = $this->upload->data() ;
				$Array['course_image'] = $image_data['file_name'];
			}
		 
		if (!$this->isEmailExists($Url)){
			$Array['course_url']=$Url;
			$this->db->insert('shop_online_course', $Array);
			$id = $this->db->insert_id();  
			if($id)
			{
				
			return "Course ".$Array['title']." Added Successfully!";
			
			}
		}else{
			return "This Course is already exists Please Change url";
		}
	}
	
	
	public function UpdateCourse($id,$Array){
	   	date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$Array['updated_on'] = $date;
			$config['file_name']= time();
			$config['upload_path']   = 'media/upload/course/'; 
			$config['allowed_types'] = 'jpg|png'; 
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file'))
			{
				$this->upload->display_errors();
			}
			else 
			{ 
				$image_data = $this->upload->data() ;
				$Array['course_image'] = $image_data['file_name'];
			}
		 
		$this->UpdateAll("shop_online_course", $Array, array("id_course"=>$id));
	}
	public function getCourseInfo($id){
		$this->db->select('*');
		 $this->db->from('shop_online_course');
		 $this->db->where("id_course",$id);
		 $Query =$this->db->get();
		if ($Query->num_rows() > 0){
		   $rs =  $Query->result();
		   return $rs[0];
		}
	}
	public function getCourseDetail($id){
		$this->db->select('*');
		 $this->db->from('shop_online_course');
		 $this->db->where("course_url",$id);
		 $Query =$this->db->get();
		if ($Query->num_rows() > 0){
		   $rs =  $Query->result();
		   return $rs[0];
		}
	}

	public function isEmailExists($Email){
		$Query = $this->SelectAllWhere("shop_online_course", array("course_url"=>$Email));
		if ($Query->num_rows() > 0){return true;}else{return false;}
	}
	
	public function deleteCourse($id){
        $this->Delete("shop_online_course", array("id_course"=>$id));
        
    }
	
	
    
}