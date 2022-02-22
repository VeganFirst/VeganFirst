<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Category extends MY_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function AddCategory($Array){
        $writerEmail = $Array['Url'];
        
        $Arrayw['PageTitle']=$Array['PageTitle'];
		$Arrayw['Url']=$Array['Url'];
        $Arrayw['isActive'] = "1";
        $Arrayw['catDesc'] = $Array['catDesc'];
		$Arrayw['MetaTitle'] = $Array['MetaTitle'];
		$Arrayw['MetaKeyword'] = $Array['MetaKeyword'];
		$Arrayw['MetaDescription'] = $Array['MetaDescription'];
		
		
        if (!$this->isEmailExists($writerEmail)){
            if($this->Insert("prod_category", $Arrayw))
			{
            return "Category ".$Arrayw['PageTitle']." Added Successfully!";
			
			}
        }else{
            return "This Category is already exists Please Change url";
        }
    }
	
	public function AddCategory_rec($Array){
        $writerEmail = $Array['Url'];
        
        $Arrayw['CategoryTitle']=$Array['CategoryTitle'];
		$Arrayw['Url']=$Array['Url'];
        $Arrayw['isActive'] = "1";
        $Arrayw['catDesc'] = $Array['catDesc'];
		$config['upload_path']   = 'media/upload/category/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size']      = 3000; 
		$config['max_width']     = 2024; 
		$config['max_height']    = 1768;  
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('file')) 
		{
		
		}
		else
		{ 
			$image_data = $this->upload->data() ; 
			$Arrayw['catImg'] = $image_data['file_name'];
		}
		
	
		$Arrayw['MetaTitle'] = $Array['MetaTitle'];
		$Arrayw['MetaKeyword'] = $Array['MetaKeyword'];
		$Arrayw['MetaDescription'] = $Array['MetaDescription'];
		
		
        if (!$this->isEmailExists($writerEmail)){
            if($this->Insert("recp_category", $Arrayw))
			{
            return "Category ".$Arrayw['CategoryTitle']." Added Successfully!";
			
			}
        }else{
            return "This Category is already exists Please Change url";
        }
    }
	
	
	public function AddCategory_art($Array){
        $writerEmail = $Array['Url'];
        
        $Arrayw['CategoryTitle']=$Array['CategoryTitle'];
		$Arrayw['Url']=$Array['Url'];
        $Arrayw['isActive'] = "1";
        $Arrayw['catDesc'] = $Array['catDesc'];
		
		$config['upload_path']   = 'media/upload/category/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size']      = 3000; 
		$config['max_width']     = 2024; 
		$config['max_height']    = 1768;  
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('file')) 
		{
		
		}
		else
		{ 
			$image_data = $this->upload->data() ; 
			$Arrayw['catImg'] = $image_data['file_name'];
		}
		
		
		
		
		
		$Arrayw['MetaTitle'] = $Array['MetaTitle'];
		$Arrayw['MetaKeyword'] = $Array['MetaKeyword'];
		$Arrayw['MetaDescription'] = $Array['MetaDescription'];
		
		
        if (!$this->isEmailExistscat($writerEmail)){
            if($this->Insert("art_category", $Arrayw))
			{
            return "Category ".$Arrayw['CategoryTitle']." Added Successfully!";
			
			}
        }else{
            return "This Category is already exists Please Change url";
        }
    }
	
	
	public function isEmailExists($Email){
        $Query = $this->SelectAllWhere("prod_category", array("Url"=>$Email));
        if ($Query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
	
	public function isEmailExistscat($Email){
        $Query = $this->SelectAllWhere("art_category", array("Url"=>$Email));
        if ($Query->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    
    
   
   
	public function getAllCategory(){
        $Query = $this->SelectAll('art_category');
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
    public function getAllCategory_home()
    {
        $this->db->select('*');
        $this->db->from('art_category');
        $this->db->where('isActive', 1);
        $Query = $this->db->get();
        if ($Query->num_rows() > 0)
        {
            return $Query->result();
        }
    }
    
    
    public function getAllNavCat()
    {
        $this->db->select('*');
        $this->db->from('art_category');
        $this->db->where('isActive', 1);
        $this->db->where('show_nav', 1);
        $this->db->order_by('show_nav', 'asc');
        $Query = $this->db->get();
        if ($Query->num_rows() > 0)
        {
            return $Query->result();
        }
    }
	 public function getAllCategory_rec(){
        $Query = $this->SelectAll('recp_category');
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	public function getAllCategoryArt(){
        $Query = $this->SelectAll('art_category');
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	public function getAllActiveCategoryArt(){
		$this->db->select('*');
		$this->db->from('art_category');
		$this->db->where('isActive',1);
		$this->db->order_by('CategoryTitle', "asc");
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}

		
        $Query = $this->SelectAll('art_category');
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }

	
    
    public function getCategoryInfo($idAuthor){
        
		 $Query = $this->SelectAllWhere("prod_category", array("id"=>$idAuthor));
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result[0];
        }
    }
	
	public function getCategoryInfo_rec($idAuthor){
        
		 $Query = $this->SelectAllWhere("recp_category", array("id"=>$idAuthor));
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result[0];
        }
    }
	public function getCategoryInfo_art($idAuthor){
        
		 $Query = $this->SelectAllWhere("art_category", array("id"=>$idAuthor));
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result[0];
        }
    }
	public function getCategoryInfo_art_url($idAuthor){
        
		 $Query = $this->SelectAllWhere("art_category", array("Url"=>$idAuthor,"isActive"=>1));
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
			$sql="UPDATE art_category SET Views = Views + 1 WHERE Url = '".$idAuthor."'";
			$Query = $this->db->query($sql);
            return $Result[0];
			
        }
    }
	
	
	
	public function getCategoryDetail($idAuthor){
        
		 $Query = $this->SelectAllWhere("prod_category", array("Url"=>$idAuthor,"isActive"=>1));
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result[0];
        }
    }
	
	public function getCategoryDetail_rec($idAuthor){
        
		 $Query = $this->SelectAllWhere("recp_category", array("Url"=>$idAuthor,"isActive"=>1));
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
			$sql="UPDATE recp_category SET Views = Views + 1 WHERE Url = '".$idAuthor."'";
			$Query = $this->db->query($sql);
            return $Result[0];
			
        }
    }
	
	public function getCatProductInfo($idAuthor){
        
		 //$Query = $this->SelectAllWhere("products", array("Url"=>$idAuthor));
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('Category =', $idAuthor);
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result;
        }
    }
	public function getCatProductInfoCount($idAuthor){
        
		 //$Query = $this->SelectAllWhere("products", array("Url"=>$idAuthor));
		$this->db->select('*');
		$this->db->from('products');
		$this->db->where('Category =', $idAuthor);
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            //$Result = $Query->result();
            return $Query->num_rows;
        }
    }
	
	public function getCatProductInfoView($idAuthor,$limit, $start){
        
		 //$Query = $this->SelectAllWhere("products", array("Url"=>$idAuthor));
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('products');
		if($idAuthor != 'all')
		{
		$this->db->where('Category =', $idAuthor);
		}
		$this->db->where('isPublished =', 1);
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result;
        }
    }
	
	
	
	
	public function getCatProductInfo_rec($idAuthor){
        
		 //$Query = $this->SelectAllWhere("products", array("Url"=>$idAuthor));
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where('Category =', $idAuthor);
		$this->db->where('isActive =', 1);
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result;
        }
    }
	public function getCatProductInfo_recView($idAuthor,$limit, $start,$order='postTime'){
        
		 //$Query = $this->SelectAllWhere("products", array("Url"=>$idAuthor));
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where('Category =', $idAuthor);
		$this->db->where('isActive =', 1);
		$this->db->order_by($order, "desc");
		//$this->db->join('author', 'author.id = recepie.recepieBy');
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            $Result = $Query->result();
            return $Result;
        }
    }
	public function getCatProductInfoCount_rec($idAuthor){
        
		 //$Query = $this->SelectAllWhere("products", array("Url"=>$idAuthor));
		$this->db->select('*');
		$this->db->from('recepie');
		$this->db->where('Category =', $idAuthor);
		$this->db->where('isActive =', 1);
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            //$Result = $Query->result();
            return $Query->num_rows;
        }
    }
	
	public function getAllProductCount(){
        
		$this->db->select('*');
		$this->db->from('products');
		$Query = $this->db->get();
        if ($Query->num_rows() > 0){
            //$Result = $Query->result();
            return $Query->num_rows;
        }
    }
    
    
    
    public function updateCategory($idAuthor, $Array){
        $this->UpdateAll("prod_category", $Array, array("id"=>$idAuthor));
    }
	 public function updateCategory_rec($idAuthor, $Array){
		 $config['upload_path']   = 'media/upload/category/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size']      = 3000; 
		$config['max_width']     = 2024; 
		$config['max_height']    = 1768;  
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('file')) 
		{
		
		}
		else
		{ 
			$image_data = $this->upload->data() ; 
			$Array['catImg'] = $image_data['file_name'];
		}
		unset($Array['file']);

		 
		 
        $this->UpdateAll("recp_category", $Array, array("id"=>$idAuthor));
    }
	
	
	 public function updateCategory_art($idAuthor, $Array){
		 
		$config['upload_path']   = 'media/upload/category/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size']      = 3000; 
		$config['max_width']     = 2024; 
		$config['max_height']    = 1768;  
		
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('file')) 
		{
		
		}
		else
		{ 
			$image_data = $this->upload->data() ; 
			$Array['catImg'] = $image_data['file_name'];
		}
		unset($Array['file']);

		 
		 
        $this->UpdateAll("art_category", $Array, array("id"=>$idAuthor));
    }
	
	
    
    public function deleteCategory($idAuthor){
        $this->Delete("prod_category", array("id"=>$idAuthor));
        
    }
	public function deleteCategory_art($idAuthor){
        $this->Delete("art_category", array("id"=>$idAuthor));
        
    }
	public function deleteCategory_rec($idAuthor){
        $this->Delete("recp_category", array("id"=>$idAuthor));
        
    }
    
    public function getArtCatNameById($id)
    {
        $this->db->select('Url');
        $this->db->from('art_category');
        $this->db->where('id',$id);

        $Query = $this->db->get();
        
        if ($Query->num_rows() > 0){
            return $Query->result[0]->Url;
        }
    }

    public function getRecCatNameById($id)
    {
        $this->db->select('Url');
        $this->db->from('recp_category');
        $this->db->where('id',$id);

        $Query = $this->db->get();
        
        if ($Query->num_rows() > 0){
            return $Query->result[0]->Url;
        }
    }
	
	public function getArtSubcat($id)
    {
        $this->db->select('*');
        $this->db->from('art_sub_category');
        $this->db->where('parent_cat',$id);
		$this->db->where('isActive',1);

        $Query = $this->db->get();
        
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	
	public function getAllSubCategoryArt($id){
         $this->db->select('*');
        $this->db->from('art_sub_category');
        $this->db->where('parent_cat',$id);

        $Query = $this->db->get();
        
        if ($Query->num_rows() > 0){
            return $Query->result();
        }
    }
	
	
	public function AddSubCategory_art($Array){
		$config['upload_path']   = 'media/upload/category/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['file_name']= time(); 
		
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')) 
		{
			$image_data = $this->upload->data() ; 
			$Array['catImg'] = $image_data['file_name'];
		}
		
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('hoverImg')) 
		{
			$image_data = $this->upload->data() ; 
			$Array['hoverImg'] = $image_data['file_name'];
		}
		$this->Insert("art_sub_category", $Array);
    }
	
	public function getArtSubcatInfo($id)
    {
        $this->db->select('*');
        $this->db->from('art_sub_category');
        $this->db->where('id',$id);

        $Query = $this->db->get();
        
        if ($Query->num_rows() > 0){
            $rs = $Query->result();
			return $rs[0];
        }
    }
	 public function updateSubCategory_art($idAuthor, $Array){
		 
		$config['upload_path']   = 'media/upload/category/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['file_name']= time(); 
		
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file')) 
		{
			$image_data = $this->upload->data() ; 
			$Array['catImg'] = $image_data['file_name'];
		}
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('hoverImg')) 
		{
			$image_data = $this->upload->data() ; 
			$Array['hoverImg'] = $image_data['file_name'];
		}
		
        $this->UpdateAll("art_sub_category", $Array, array("id"=>$idAuthor));
    }
	public function deleteSubCategory_art($idAuthor){
        $this->Delete("art_sub_category", array("id"=>$idAuthor));
        
    }
	
	
	public function getArtSubcatInfofromUrl($id)
    {
        $this->db->select('*');
        $this->db->from('art_sub_category');
        $this->db->where('Url',$id);

        $Query = $this->db->get();
        
        if ($Query->num_rows() > 0){
            $rs = $Query->result();
			return $rs[0];
        }
    }
	
	
}