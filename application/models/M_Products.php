<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Products extends MY_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function AddProduct($Array){
        $writerEmail = $Array['Url'];
        
        $Arrayw['PageTitle']=$Array['PageTitle'];
		$Arrayw['Url']=$Array['Url'];
		 $Arrayw['isPublished'] = $Array['isPublished'];
		$Arrayw['Category']=$Array['Category'];
		$Arrayw['Featured']=$Array['Featured'];
		date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
        $Arrayw['postTime'] = $date;
		$config['upload_path']   = 'media/upload/products/'; 
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
             $Arrayw['FeaturedImage'] = $image_data['file_name'];
         } 
		
		$Arrayw['MetaTitle']=$Array['MetaTitle'];
		$Arrayw['MetaKeyword']=$Array['MetaKeyword'];
		$Arrayw['MetaDescription']=$Array['MetaDescription'];
		
		$Arrayw['Article_post']=$Array['Article_post'];
        if (!$this->isEmailExists($writerEmail)){
            if($this->Insert("products", $Arrayw))
			{
            return "Product ".$Arrayw['PageTitle']." Added Successfully!";
			
			}
        }else{
            return "This Products is already exists Please Change url";
        }
    }
	
	
	public function isEmailExists($Email){
        $Query = $this->SelectAllWhere("products", array("Url"=>$Email));
        if ($Query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    
    
   
   
	 public function getAllProducts(){
        //$Query = $this->SelectAll('products');
		$this->db->select('*');
		$this->db->from('products');
		$Query = $this->db->get();
		
		
		
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	public function searchProduct($keyword){
        //$Query = $this->SelectAll('products');
		$this->db->select('*');
		$this->db->from('products');
		$this->db->like("PageTitle",$keyword);
		$Query = $this->db->get();
		
		
		
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
    
	
    public function getProductInfo($idAuthor){
        
		 //$Query = $this->SelectAllWhere("products", array("Url"=>$idAuthor));
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('Url =', $idAuthor);
		$this->db->or_where('idProduct =', $idAuthor); 
        $Query = $this->db->get();
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result[0];
        }
    }
	
	public function getProductInfoView($idAuthor){
        
		 //$Query = $this->SelectAllWhere("products", array("Url"=>$idAuthor));
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('Url =', $idAuthor);
		$this->db->where('isActive =', 1);
		$this->db->where('isPublished =', 1); 
        
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
			$sql="UPDATE products SET Views = Views + 1 WHERE Url = '".$idAuthor."'";
		 	$Query = $this->db->query($sql);
            return $Result[0];
        }
    }
	
	
	
	
    
    
    public function updateProduct($idAuthor, $Array){
		
		$config['upload_path']   = 'media/upload/products/'; 
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
         } 
		unset($Array['file']);
		
		
		
		
		
        $this->UpdateAll("products", $Array, array("idProduct"=>$idAuthor));
    }
    
    public function deleteProduct($idAuthor){
        $this->Delete("products", array("idProduct"=>$idAuthor));
        
    }
}