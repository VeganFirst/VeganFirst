<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Recipes extends MY_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function AddRecipes($Array){
        $writerEmail = $Array['Url'];
        $ingr=$Array['Ingredients'];
		unset($Array['Ingredients']);
		$Array['Ingredients']=json_encode($ingr);
       date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
        $Array['postTime'] = $date;
		$Array['Views']=0;
		 $config['upload_path']   = 'media/upload/recipes/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 3000; 
         $config['max_width']     = 2024; 
         $config['max_height']    = 1768;  
         $this->load->library('upload', $config);
         if ( ! $this->upload->do_upload('file')) {
            
         }
		 else { 
            //$data = array('data' => $this->upload->data());
			$image_data = $this->upload->data() ; 
             $Array['FeaturedImage'] = $image_data['file_name'];
			 $imfile=$image_data['file_name'];
			 $this->crop($imfile);
			// $this->thumb($imfile);
         } 
		
        
        if (!$this->isEmailExists($writerEmail)){
            if($this->Insert("recepie", $Array))
			{
             if($Array['isActive']==1)
             { 
                  //$this->m_author->notifyFollowerrcp($Array['recepieBy'],$Array['PageTitle'],$Array['Url']);
				  $this->m_author->notifyFollowerCatR($Array['Category'],$Array['PageTitle'],$Array['Url']);
				  
                           }
            return "Recipes ".$Array['PageTitle']." Added Successfully!";
			
			}
        }else{
            return "This Recipes is already exists Please Change url";
        }
    }
	
	
	public function isEmailExists($Email){
        $Query = $this->SelectAllWhere("recepie", array("Url"=>$Email));
        if ($Query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

	 public function getAllRecipes(){
		$this->db->select('recepie.*, author.id, author.FirstName, author.LastName ');
		$this->db->from('recepie');
		$this->db->join('author', 'author.id = recepie.recepieBy');
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	public function searchRecipe($keyword){
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where("isActive =", "1");
		$this->db->like("HashTags",$keyword);
		$Query = $this->db->get();
		
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	
	public function byTag($keyword){
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where("isActive =", "1");
		$this->db->like("HashTags",str_replace('-',' ',$keyword));
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }

   public function byTags($keyword,$id){
	$query_parts = array();
		foreach ($keyword as $val) {
			$query_parts[] = "'%".trim(mysqli_real_escape_string($this->db->conn_id,$val))."%'";
		}

		$string = implode(' OR HashTags LIKE ', $query_parts);
		$sqlQuery=$this->db->query("Select * from recepie where HashTags like {$string} and isActive=1 and idRecepie !=".$id);
	if($sqlQuery->num_rows()>0)
	{
        $result[] = $sqlQuery->result();
		return $result;
		}
   }
	
	public function AllView(){
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where("isActive =", "1");
		$this->db->order_by("postTime", "desc");
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	public function AllViewPop(){
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where("isActive =", "1");
		$this->db->where("Featured =", "1");
		$this->db->order_by("postTime", "desc");
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
    
    public function getRecipesInfo($idAuthor){
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where('Url =', $idAuthor);
		
		$this->db->or_where('idRecepie =', $idAuthor); 
        $Query = $this->db->get();
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result[0];
        }
    }
	
	public function getRecipesView($idAuthor){
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where('Url =', $idAuthor);
		$this->db->where("isActive =", 1);
        $Query = $this->db->get();
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
			$sql="UPDATE recepie SET Views = Views + 1 WHERE Url = '".$idAuthor."'";
		 $Query = $this->db->query($sql);
            return $Result[0];
        }
    }
	
    public function updateRecipes($idAuthor, $Array){
		
		$config['upload_path']   = 'media/upload/recipes/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 3000; 
         $config['max_width']     = 2024; 
         $config['max_height']    = 1768;  
         $this->load->library('upload', $config);
			
         if ( ! $this->upload->do_upload('file')) {
            
         }
		 else { 
            //$data = array('data' => $this->upload->data());
			$image_data = $this->upload->data() ; 
             $Array['FeaturedImage'] = $image_data['file_name'];
			 $imfile=$image_data['file_name'];
			 $this->crop($imfile);
			 //$this->thumb($imfile);
         } 
		unset($Array['file']);
		
		$ingr=$Array['Ingredients'];
		unset($Array['Ingredients']);
		$Array['Ingredients']=json_encode($ingr);
        
		
        date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
        $Array['updatedAt'] = $date;
		$upd = $this->getRecipesInfo($idAuthor);
		
		if($Array['isActive']==1 && $upd->isActive==0)
        {
			  //$this->m_author->notifyFollowerrcp($Array['recepieBy'],$Array['PageTitle'],$Array['Url']);
			  $this->m_author->notifyFollowerCatR($Array['Category'],$Array['PageTitle'],$Array['Url']);
		date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
        $Array['postTime'] = $date;

		}
		
		
		
		
        $this->UpdateAll("recepie", $Array, array("idRecepie"=>$idAuthor));
    }
    
    public function deleteRecipes($idAuthor){
        $this->Delete("recepie", array("idRecepie"=>$idAuthor));
        
    }
	public function crop($imfile){
		
				$configr['image_library'] = 'gd2';
				$configr['source_image'] = 'media/upload/recipes/'.$imfile;
				$configr['new_image'] = 'media/upload/recipes/main/'.$imfile;
				$configr['x_axis'] = 0;
				$configr['y_axis'] = 50;
				
				
         		$configr['quality'] = '100%';
				$configr['maintain_ratio'] = FALSE;
				$configr['width'] = 900;
				$configr['height'] = 500;
				
				//$this->load->library('image_lib', $configr);
				$this->image_lib->initialize($configr);
				$this->image_lib->crop();
        		$this->image_lib->clear();
    }
	
	public function thumb($imfile){
		
				$this->image_lib->clear();
				$config1['image_library'] = 'gd2';
				$config1['source_image'] = 'media/upload/recipes/'.$imfile;
				$config1['new_image'] = 'media/upload/recipes/thumb/'.$imfile;
				$config1['maintain_ratio'] = false;
				$config1['width']         = 400;
				$config1['height']       = 270;
				
				$this->image_lib->initialize($config1);
				
				//$this->load->library('image_lib', $config1);
				$this->image_lib->resize();
				$this->image_lib->clear();
	}
	public function isMysaveRecipe($id)
	{
		$uid=$this->session->userdata('User_id');
		$this->db->select('*');
		$this->db->from('user_saved');
		$this->db->where('idUser' ,$uid);
		$this->db->where('idSave' ,$id);
		$this->db->where('type' ,2);
		$Query = $this->db->get();
		if ($Query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function getArticleCountbyAuthor($author)
	{
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where("recepieBy",$author);
		$this->db->where('isActive',1);
		$Query = $this->db->get();

		return $Query->num_rows;
	}
	
	public function getRecepiebyCategory($idAuthor,$limit, $start,$order='postTime'){
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where('Category =', $idAuthor);
		$this->db->where('isActive =', 1);
		$this->db->order_by($order, "desc");
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result;
        }
    }
	public function getPopRecepiebyCategory($idAuthor,$limit, $start,$order='postTime'){
        
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where('Category =', $idAuthor);
		$this->db->where('isActive =', 1);
		$this->db->where('Featured =', 1);
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result;
        }
    }
	public function getCategoryCount($cat)
	{
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where("Category",$cat);
		$this->db->where('isActive',1);
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->num_rows;
		}
	}
	
	
	


}