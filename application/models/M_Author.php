<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Author extends MY_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function AddAuthor($Array){
        $writerEmail = $Array['Email'];
        
        $Arrayw['FirstName']=$Array['FirstName'];
		$Arrayw['LastName']=$Array['LastName'];
		$Arrayw['Phone']=$Array['Phone'];
		$Arrayw['Email']=$writerEmail;
		$Arrayw['isActive'] = "1";
		$Arrayw['About']=$Array['About'];
		
		$Arrayw['Facebook']=$Array['Facebook'];
		$Arrayw['Twitter']=$Array['Twitter'];
		$Arrayw['Pinterest']=$Array['Pinterest'];
		$Arrayw['Instagram']=$Array['Instagram'];
		
		 $config['upload_path']   = 'media/upload/author/'; 
         $config['allowed_types'] = 'gif|jpg|png|jpeg'; 
         $config['max_size']      = 2048; 
         $config['max_width']     = 2000; 
         $config['max_height']    = 2000;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('file')) {
            
         }
		 else { 
           $image_data = $this->upload->data() ; 
             $Arrayw['Picture'] = $image_data['file_name'];
         } 
		
		
		
        
        if (!$this->isEmailExists($writerEmail)){
            if($this->Insert("author", $Arrayw))
			{
            return "Author ".$Arrayw['FirstName']." Added Successfully!";
			
			}
        }else{
            return "This email is already exists";
        }
    }
	
	
	public function isEmailExists($Email){
        $Query = $this->SelectAllWhere("author", array("Email"=>$Email));
        if ($Query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    
    
   
   
	 public function getAllAuthors(){
        $Query = $this->SelectAll('author');
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	
	
	 public function getAllActiveAuthors(){
       	$this->db->select('*');
		$this->db->from('author');
		$this->db->where('isActive',1);
		$this->db->order_by('FirstName', "asc");
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
    }
	
	
	
    
    public function getAuthorInfo($idAuthor){
        
		 $Query = $this->SelectAllWhere("author", array("id"=>$idAuthor));
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result[0];
        }
    }
	
	
	
	
	public function Follow($idAuthor){
        
		if(!$this->isFollow($idAuthor))
		{
		$data['idUser']=$this->session->userdata('User_id');
		$data['idAuthor']=$idAuthor;
		if($this->Insert("user_follow", $data))
			return true;
		}
		return true;
    }
	public function unFollow($idAuthor){
        
		if($this->isFollow($idAuthor))
		{
		$data['idUser']=$this->session->userdata('User_id');
		$data['idAuthor']=$idAuthor;
		if($this->Delete("user_follow", array("idAuthor"=>$idAuthor,'idUser'=>$this->session->userdata('User_id'))))
			return true;
		}
		return true;
    }
	
	public function isFollow($idAuthor){
        $user=$this->session->userdata('User_id');
		$Query = $this->SelectAllWhere("user_follow", array("idUser"=>$user,'idAuthor'=>$idAuthor));
		if ($Query->num_rows() > 0){
			return true;
		}
    }
	
	
	 public function getArticle($author){
        //$Query = $this->SelectAll('article');
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where('Author', $author);
		$this->db->where("isPublished", 1);
		$this->db->order_by('postTime', 'desc');
		


		$Query = $this->db->get();

        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	
	public function getRecipe($author){
        //$Query = $this->SelectAll('article');
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where("isActive", 1);
		$this->db->where('recepieBy', $author);
		//$this->db->join('article', 'article.Author = author.id');
		
		$Query = $this->db->get();

        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	
	public function myArticle($author){
		$num=0;
        //$Query = $this->SelectAll('article');
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where('Author', $author);
		$this->db->where("isPublished", 1);
		$Query = $this->db->get();

         $num=$num+$Query->num_rows;
		 
		 
		 $this->db->select('*');
		$this->db->from('recepie');
		$this->db->where('recepieBy', $author);
		$this->db->where("isActive", 1);
		$Query = $this->db->get();

         $num=$num+$Query->num_rows;
		   
		   
		   
		   
		return $num;  
        
    }
	
	
	public function myFollower($author){
        //$Query = $this->SelectAll('article');
		$this->db->select('*');
		$this->db->from('user_follow');
		$this->db->where('idAuthor', $author);
		$Query = $this->db->get();
	     return $Query->num_rows;
       
    }
	
	public function getmyFollower($author){
        //$Query = $this->SelectAll('article');
		$this->db->select('*');
		$this->db->from('user_follow');
		$this->db->where('idAuthor', $author);
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
	     return $Query->result();
		}
       
    }
	
	
	
	public function notifyFollower($author,$notf,$url)
	{
	$aut= $this->getAuthorInfo($author);
	$name=$aut->FirstName.' '.$aut->LastName;
	$notfic = $name.' has uploaded new article '.$notf;
	$user = $this->getmyFollower($author);
	date_default_timezone_set("Asia/Kolkata");
	$date = date('Y-m-d H:i:s');
if($user):
	foreach ($user as $usr):
	$ar['idUser']=$usr->idUser;
	$ar['Notification']=$notfic;
	$ar['not_link']= $url;
	$ar['type']=1;
	$ar['not_time']=$date;
	$this->Insert("user_notify", $ar);
	endforeach;
endif;
	}
	public function notifyFollowerCatA($cat,$notf,$url)
	{
	$aut= $this->M_Category->getCategoryInfo_art($cat);
	$name=$aut->CategoryTitle;
	$notfic = $name.' has new article '.$notf;
	$this->db->limit(1);
	$this->db->select('*');
	$this->db->from('user_follow_topic');
	$this->db->where('idCat' ,$cat);
	$Query = $this->db->get();
	$user=$Query->result();
	date_default_timezone_set("Asia/Kolkata");
	$date = date('Y-m-d H:i:s');
if($user):
	foreach ($user as $usr):
	$ar['idUser']=$usr->idUser;
	$ar['Notification']=$notfic;
	$ar['not_link']= $url;
	$ar['type']=1;
	$ar['not_time']=$date;
	$this->Insert("user_notify", $ar);
	endforeach;
endif;
	}
	
	public function notifyFollowerCatR($cat,$notf,$url)
	{
	$this->load->model("m_category");
	$this->M_Category= new M_Category();
	$aut= $this->M_Category->getCategoryInfo_rec($cat);
	$name=$aut->CategoryTitle;
	$notfic = $name.' has new Recipe '.$notf;
	$this->db->limit(1);
	$this->db->select('*');
	$this->db->from('user_follow_topic');
	$this->db->where('idCat' ,$cat);
	$Query = $this->db->get();
	$user=$Query->result();
	date_default_timezone_set("Asia/Kolkata");
	$date = date('Y-m-d H:i:s');
if($user):
	foreach ($user as $usr):
	$ar['idUser']=$usr->idUser;
	$ar['Notification']=$notfic;
	$ar['not_link']= $url;
	$ar['type']=2;
	$ar['not_time']=$date;
	$this->Insert("user_notify", $ar);
	endforeach;
endif;
	}


	public function notifyFollowerrcp($author,$notf,$url)
	{
	$aut= $this->getAuthorInfo($author);
	$name=$aut->FirstName.' '.$aut->LastName;
	
	$notfic = $name.' has uploaded new recipe '.$notf;
	$user = $this->getmyFollower($author);
	
	
	
	date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
	

if($user):
	foreach ($user as $usr):
	
	$ar['idUser']=$usr->idUser;
	$ar['Notification']=$notfic;
	$ar['not_link']= $url;
	$ar['type']=2;
	$ar['not_time']=$date;
	$this->Insert("user_notify", $ar);
	
	endforeach;
endif;
	
    
	}





    public function updateAuthor($idAuthor, $Array){
		$config['upload_path']   = 'media/upload/author/'; 
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
		 unset($Array['file']);
		
		
		
        $this->UpdateAll("author", $Array, array("id"=>$idAuthor));
    }
    
    public function deleteAuthor($idAuthor){
        $this->Delete("author", array("id"=>$idAuthor));
        
    }
}