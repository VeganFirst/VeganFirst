<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Site extends MY_Model{
	public function __construct() {
		parent::__construct();
		
	}
	public function index(){
			$this->load->view('pages/article');
	}
		
	public function getAllConfig(){
		$Query = $this->SelectAll('core_config');
		if ($Query->num_rows() > 0){
			return $Query->result();
		} 	
	}
	public function getAllAddConfig(){
		$Query = $this->SelectAll('advertisement_block');
		if ($Query->num_rows() > 0){
			return $Query->result();
		} 	
	}
	public function getAllMenuConfig(){
		$Query = $this->SelectAll('block');
		if ($Query->num_rows() > 0){
			return $Query->result();
		} 	
	}
	public function getAddConfig($block){
		//$Query = $this->SelectAll('advertisement_block');
		$Query = $this->SelectAllWhere("advertisement_block", array("path"=>$block));
		if ($Query->num_rows() > 0){
			$Result = $Query->result();
			return $Result[0];
		}
			
	}
	
	
	public function updateConfig($Array){
		foreach($Array as $key => $val)
					{ 
						$Arrayx['value'] =$val;
						$this->UpdateAll("core_config", $Arrayx, array("path"=>$key));
					} 
	}
	public function updateConfigNot($Array){
		$this->UpdateAll("notification", $Array, array("id"=>1));
	}
	public function getAllConfigNot(){
		$Query = $this->SelectAll('notification');
		if ($Query->num_rows() > 0){
			return $Query->result();
		} 	
	}



	
	public function updateAddConfig($Array){
		foreach($Array as $key => $val)
					{ 
						$Arrayx['addBlock'] =$val;												
						$this->UpdateAll("advertisement_block", $Arrayx, array("path"=>$key));
					} 
	}
	public function updateMenuConfig($Array){
		foreach($Array as $key => $val)
					{ 
						$Arrayx['content'] =$val;																								
						$this->UpdateAll("block", $Arrayx, array("identifier"=>$key));
					} 
		
		//
	}
	
	
	
	
	
	
	public function getAllCategory(){
		$Query = $this->SelectAll('prod_category');
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	
	public function getSeo($path)
	{	
		$Query = $this->SelectAllWhere("seo_detail", array("path"=>$path));
		if ($Query->num_rows() > 0){
			$Result = $Query->result();
			return $Result[0];
		}
	}
	
	public function updateSeoConfig($array)
	{
		$Home['MetaTitle']=$array['HomeMetaTitle'];
		$Home['MetaKeyword']=$array['HomeMetaKeyword'];
		$Home['MetaDescription']=$array['HomeMetaDescription'];
		$this->UpdateAll("seo_detail", $Home, array("path"=>'home'));
		
		$Con['MetaTitle']=$array['ConMetaTitle'];
		$Con['MetaKeyword']=$array['ConMetaKeyword'];
		$Con['MetaDescription']=$array['ConMetaDescription'];
		$this->UpdateAll("seo_detail", $Con, array("path"=>'contact'));
		
		$Con['MetaTitle']=$array['AboMetaTitle'];
		$Con['MetaKeyword']=$array['AboMetaKeyword'];
		$Con['MetaDescription']=$array['AboMetaDescription'];
		$this->UpdateAll("seo_detail", $Con, array("path"=>'about'));
		
		$Con['MetaTitle']=$array['AdvtMetaTitle'];
		$Con['MetaKeyword']=$array['AdvtMetaKeyword'];
		$Con['MetaDescription']=$array['AdvtMetaDescription'];
		$this->UpdateAll("seo_detail", $Con, array("path"=>'advt'));
		
		$Con['MetaTitle']=$array['RecpMetaTitle'];
		$Con['MetaKeyword']=$array['RecpMetaKeyword'];
		$Con['MetaDescription']=$array['RecpMetaDescription'];
		$this->UpdateAll("seo_detail", $Con, array("path"=>'alwayshungry'));
		
		
		$Con['MetaTitle']=$array['RestMetaTitle'];
		$Con['MetaKeyword']=$array['RestMetaKeyword'];
		$Con['MetaDescription']=$array['RestMetaDescription'];
		$this->UpdateAll("seo_detail", $Con, array("path"=>'restaurant'));
		
		$Con['MetaTitle']=$array['NewsMetaTitle'];
		$Con['MetaKeyword']=$array['NewsMetaKeyword'];
		$Con['MetaDescription']=$array['NewsMetaDescription'];
		$this->UpdateAll("seo_detail", $Con, array("path"=>'newsletter'));
		
		$Con['MetaTitle']=$array['EveMetaTitle'];
		$Con['MetaKeyword']=$array['EveMetaKeyword'];
		$Con['MetaDescription']=$array['EveMetaDescription'];
		$this->UpdateAll("seo_detail", $Con, array("path"=>'events'));
		
	}
	
	public function getAllTags()
	{
		$Query = $this->SelectAllWhere("advertisement_block", array("path"=>'HomeTag'));
		if ($Query->num_rows() > 0)
		{
			$Result = $Query->result();
			return $Result[0];
		}
	}

	public function addTags($Tags)
	{
		$Con["addBlock"]=$Tags['HomeTag'];
		$this->UpdateAll("advertisement_block", $Con, array("path"=>'HomeTag'));
	}
public function getHomeRelated()
	{
		$Config = $this->getAllConfig();
		$Articlsl=0;
		$Home1=0; $Home2=0; $Home3=0; $Home4=0; $Home5=0; $Home6=0; $Home7=0; $Home8=0;$Home9=0; $Home10=0; $Home11=0; $Home12=0; $Home13=0; $Home14=0; $Home15=0; $Home16=0;$Home17=0; $Home18=0; $Home19=0; $Home20=0; $Home21=0; $Home22=0;
		$pic='';$pic1=0; $pic2=0;$pic3=0; $pic4=0;$pic5=0; $pic6=0;$pic7=0; $pic8=0;$pic9=0;$pic10=0; $pic11=0;$pic12=0; $pic13=0;$pic14=0; $pic15=0;$pic16=0; $pic17=0;$pic18=0;$pic19=0; $pic20=0;$pic21=0; $pic22=0;
		foreach($Config as $key => $val)
		{
			if($val->path == 'home/Article')
			{
				$Articlsl= $val->value;
			}
			if($val->path == 'pic')
			{
				$pic= $val->value;
			}
			if($val->path == 'banner/1')
			{
				$Banner1= $val->value;
			}
			if($val->path == 'banner/2')
			{
				$Banner2= $val->value;
			}
			if($val->path == 'banner/3')
			{
				$Banner3= $val->value;
			}
			if($val->path == 'banner/4')
			{
				$Banner4= $val->value;
			}

			if($val->path == 'banner/5')
			{
				$Banner5= $val->value;
			}
			if($val->path == 'banner/6')
			{
				$Banner6 = $val->value;
			}
			if($val->path == 'banner/7')
			{
				$Banner7= $val->value;
			}
			if($val->path == 'banner/8')
			{
				$Banner8= $val->value;
			}
			if($val->path == 'banner/9')
			{
				$Banner9= $val->value;
			}
			





			if($val->path == 'home/1')
			{
				$Home1= $val->value;
			}
			if($val->path == 'home/2')
			{
				$Home2= $val->value;
			}
			if($val->path == 'home/3')
			{
				$Home3= $val->value;
			}
			if($val->path == 'home/4')
			{
				$Home4= $val->value;
			}
			if($val->path == 'home/5')
			{
				$Home5= $val->value;
			}
			if($val->path == 'home/6')
			{
				$Home6= $val->value;
			}
			if($val->path == 'home/7')
			{
				$Home7= $val->value;
			}
			if($val->path == 'home/8')
			{
				$Home8= $val->value;
			}
			if($val->path == 'home/9')
											{
												$Home9= $val->value;
											}
											if($val->path == 'home/10')
											{
												$Home10= $val->value;
											}
											if($val->path == 'home/11')
											{
												$Home11= $val->value;
											}
											if($val->path == 'home/12')
											{
												$Home12= $val->value;
											}
											if($val->path == 'home/13')
											{
												$Home13= $val->value;
											}
											if($val->path == 'home/14')
											{
												$Home14= $val->value;
											}
											if($val->path == 'home/15')
											{
												$Home15= $val->value;
											}
											if($val->path == 'home/16')
											{
												$Home16= $val->value;
											}
											if($val->path == 'home/17')
											{
												$Home17= $val->value;
											}
											if($val->path == 'home/18')
											{
												$Home18= $val->value;
											}
											if($val->path == 'home/19')
											{
												$Home19= $val->value;
											}
											if($val->path == 'home/20')
											{
												$Home20= $val->value;
											}
											if($val->path == 'home/21')
											{
												$Home21= $val->value;
											}
											if($val->path == 'home/22')
											{
												$Home22= $val->value;
											}
			if($val->path == 'ban1')
			{
				$ban1= $val->value;
			}
			if($val->path == 'ban2')
			{
				$ban2= $val->value;
			}
			if($val->path == 'ban3')
			{
				$ban3= $val->value;
			}
			if($val->path == 'ban4')
			{
				$ban4= $val->value;
			}

			if($val->path == 'ban5')
			{
				$ban5= $val->value;
			}
			if($val->path == 'ban6')
			{
				$ban6= $val->value;
			}
			if($val->path == 'ban7')
			{
				$ban7= $val->value;
			}
			if($val->path == 'ban8')
			{
				$ban8= $val->value;
			}
			if($val->path == 'ban9')
			{
				$ban9= $val->value;
			}
											


			if($val->path == 'pic1')
			{
				$pic1= $val->value;
			}
			if($val->path == 'pic2')
			{
				$pic2= $val->value;
			}
			if($val->path == 'pic3')
			{
				$pic3= $val->value;
			}
			if($val->path == 'pic4')
			{
				$pic4= $val->value;
			}
			if($val->path == 'pic5')
		 	{
				$pic5= $val->value;
			}
			if($val->path == 'pic6')
			{
				$pic6= $val->value;
			}
			if($val->path == 'pic7')
			{
				$pic7= $val->value;
			}
			if($val->path == 'pic8')
			{
				$pic8= $val->value;
			}
			if($val->path == 'pic9')
											 {
												$pic9= $val->value;
											 }
											 if($val->path == 'pic10')
											 {
												$pic10= $val->value;
											 }
											 if($val->path == 'pic11')
											 {
												$pic11= $val->value;
											 }if($val->path == 'pic12')
											 {
												$pic12= $val->value;
											 }
											 if($val->path == 'pic13')
											 {
												$pic13= $val->value;
											 }
											 if($val->path == 'pic14')
											 {
												$pic14= $val->value;
											 }if($val->path == 'pic15')
											 {
												$pic15= $val->value;
											 }if($val->path == 'pic16')
											 {
												$pic16= $val->value;
											 }
											 if($val->path == 'pic17')
											 {
												$pic17= $val->value;
											 }
											 if($val->path == 'pic18')
											 {
												$pic18= $val->value;
											 }
											 if($val->path == 'pic19')
											 {
												$pic19= $val->value;
											 }
											 if($val->path == 'pic20')
											 {
												$pic20= $val->value;
											 }
											 if($val->path == 'pic21')
											 {
												$pic21= $val->value;
											 }
											 if($val->path == 'pic22')
											 {
												$pic22= $val->value;
											 }
		}
		if($pic=='article')
		{
			$data['Article']= $this->M_Article->getArticleInfo(($Articlsl));
		}
		if($pic=='recipe')
		{
			$data['Article']= $this->M_Recipes->getRecipesInfo(($Articlsl));
		}
		
		
		
		if($ban1=='article')
		{
			$data['Banner1']= $this->M_Article->getArticleInfo(($Banner1));
		}
		if($ban1=='recipe')
		{
			$data['Banner1']= $this->M_Recipes->getRecipesInfo(($Banner1));
		}

		if($ban2=='article')
		{
			$data['Banner2']= $this->M_Article->getArticleInfo(($Banner2));
		}
		if($ban2=='recipe')
		{
			$data['Banner2']= $this->M_Recipes->getRecipesInfo(($Banner2));
		}

		if($ban3=='article')
		{
			$data['Banner3']= $this->M_Article->getArticleInfo(($Banner3));
		}
		if($ban3=='recipe')
		{
			$data['Banner3']= $this->M_Recipes->getRecipesInfo(($Banner3));
		}

		if($ban4=='article')
		{
			$data['Banner4']= $this->M_Article->getArticleInfo(($Banner4));
		}
		if($ban4=='recipe')
		{
			$data['Banner4']= $this->M_Recipes->getRecipesInfo(($Banner4));
		}

		if($ban5=='article')
		{
			$data['Banner5']= $this->M_Article->getArticleInfo(($Banner5));
		}
		if($ban5=='recipe')
		{
			$data['Banner5']= $this->M_Recipes->getRecipesInfo(($Banner5));
		}
		if($ban6=='article')
		{
			$data['Banner6']= $this->M_Article->getArticleInfo(($Banner6));
		}
		if($ban6=='recipe')
		{
			$data['Banner6']= $this->M_Recipes->getRecipesInfo(($Banner6));
		}
		if($ban7=='article')
		{
			$data['Banner7']= $this->M_Article->getArticleInfo(($Banner7));
		}
		if($ban7=='recipe')
		{
			$data['Banner7']= $this->M_Recipes->getRecipesInfo(($Banner7));
		}
		if($ban8=='article')
		{
			$data['Banner8']= $this->M_Article->getArticleInfo(($Banner8));
		}
		if($ban8=='recipe')
		{
			$data['Banner8']= $this->M_Recipes->getRecipesInfo(($Banner8));
		}
		if($ban9=='article')
		{
			$data['Banner9']= $this->M_Article->getArticleInfo(($Banner9));
		}
		if($ban9=='recipe')
		{
			$data['Banner9']= $this->M_Recipes->getRecipesInfo(($Banner9));
		}









		if($pic1=='article')
		{
			$data['Home1']= $this->M_Article->getArticleInfo(($Home1));
		}
		if($pic1=='recipe')
		{
			$data['Home1']= $this->M_Recipes->getRecipesInfo(($Home1));
		}

		if($pic2=='article')
		{
			$data['Home2']= $this->M_Article->getArticleInfo(($Home2));
		}
		if($pic2=='recipe')
		{
			$data['Home2']= $this->M_Recipes->getRecipesInfo(($Home2));
		}

		if($pic3=='article')
		{
			$data['Home3']= $this->M_Article->getArticleInfo(($Home3));
		}
		if($pic3=='recipe')
		{
			$data['Home3']= $this->M_Recipes->getRecipesInfo(($Home3));
		}

		if($pic4=='article')
		{
			$data['Home4']= $this->M_Article->getArticleInfo(($Home4));
		}
		if($pic4=='recipe')
		{
			$data['Home4']= $this->M_Recipes->getRecipesInfo(($Home4));
		}

		if($pic5=='article')
		{
			$data['Home5']= $this->M_Article->getArticleInfo(($Home5));
		}
		if($pic5=='recipe')
		{
			$data['Home5']= $this->M_Recipes->getRecipesInfo(($Home5));
		}

		if($pic6=='article')
		{
			$data['Home6']= $this->M_Article->getArticleInfo(($Home6));
		}
		if($pic6=='recipe')
		{
			$data['Home6']= $this->M_Recipes->getRecipesInfo(($Home6));
		}

		if($pic7=='article')
		{
			$data['Home7']= $this->M_Article->getArticleInfo(($Home7));
		}
		if($pic7=='recipe')
		{
			$data['Home7']= $this->M_Recipes->getRecipesInfo(($Home7));
		}

		if($pic8=='article')
		{
			$data['Home8']= $this->M_Article->getArticleInfo(($Home8));
		}
		if($pic8=='recipe')
		{
			$data['Home8']= $this->M_Recipes->getRecipesInfo(($Home8));
		}
		if($pic9=='article')
		{
			$data['Home9']= $this->M_Article->getArticleInfo(($Home9));
		}
		if($pic9=='recipe')
		{
			$data['Home9']= $this->M_Recipes->getRecipesInfo(($Home9));
		}
		if($pic10=='article')
		{
			$data['Home10']= $this->M_Article->getArticleInfo(($Home10));
		}
		if($pic10=='recipe')
		{
			$data['Home10']= $this->M_Recipes->getRecipesInfo(($Home10));
		}
		if($pic11=='article')
		{
			$data['Home11']= $this->M_Article->getArticleInfo(($Home11));
		}
		if($pic11=='recipe')
		{
			$data['Home11']= $this->M_Recipes->getRecipesInfo(($Home11));
		}
		if($pic12=='article')
		{
			$data['Home12']= $this->M_Article->getArticleInfo(($Home12));
		}
		if($pic12=='recipe')
		{
			$data['Home12']= $this->M_Recipes->getRecipesInfo(($Home12));
		}
		if($pic13=='article')
		{
			$data['Home13']= $this->M_Article->getArticleInfo(($Home13));
		}
		if($pic13=='recipe')
		{
			$data['Home13']= $this->M_Recipes->getRecipesInfo(($Home13));
		}
		if($pic14=='article')
		{
			$data['Home14']= $this->M_Article->getArticleInfo(($Home14));
		}
		if($pic14=='recipe')
		{
			$data['Home14']= $this->M_Recipes->getRecipesInfo(($Home14));
		}
		if($pic15=='article')
		{
			$data['Home15']= $this->M_Article->getArticleInfo(($Home15));
		}
		if($pic15=='recipe')
		{
			$data['Home15']= $this->M_Recipes->getRecipesInfo(($Home15));
		}
		if($pic16=='article')
		{
			$data['Home16']= $this->M_Article->getArticleInfo(($Home16));
		}
		if($pic16=='recipe')
		{
			$data['Home16']= $this->M_Recipes->getRecipesInfo(($Home16));
		}
		if($pic17=='article')
		{
			$data['Home17']= $this->M_Article->getArticleInfo(($Home17));
		}
		if($pic17=='recipe')
		{
			$data['Home17']= $this->M_Recipes->getRecipesInfo(($Home17));
		}
		if($pic18=='article')
		{
			$data['Home18']= $this->M_Article->getArticleInfo(($Home18));
		}
		if($pic18=='recipe')
		{
			$data['Home18']= $this->M_Recipes->getRecipesInfo(($Home18));
		}
		if($pic19=='article')
		{
			$data['Home19']= $this->M_Article->getArticleInfo(($Home19));
		}
		if($pic19=='recipe')
		{
			$data['Home19']= $this->M_Recipes->getRecipesInfo(($Home19));
		}
		if($pic20=='article')
		{
			$data['Home20']= $this->M_Article->getArticleInfo(($Home20));
		}
		if($pic20=='recipe')
		{
			$data['Home20']= $this->M_Recipes->getRecipesInfo(($Home20));
		}
		if($pic21=='article')
		{
			$data['Home21']= $this->M_Article->getArticleInfo(($Home21));
		}
		if($pic21=='recipe')
		{
			$data['Home21']= $this->M_Recipes->getRecipesInfo(($Home21));
		}
		if($pic22=='article')
		{
			$data['Home22']= $this->M_Article->getArticleInfo(($Home22));
		}
		if($pic22=='recipe')
		{
			$data['Home22']= $this->M_Recipes->getRecipesInfo(($Home22));
		}
		
		
		
		return $data;
	}
	
	
	public function getAllBanner()
	{	
		$this->db->select('*');
		$this->db->from('home_banner');
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	public function getActiveBanner()
	{	
		$this->db->select('*');
		$this->db->from('home_banner');
		$this->db->where('status',1);
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	public function getBanner($id)
	{	
		$Query = $this->SelectAllWhere("home_banner", array("id"=>$id));
		if ($Query->num_rows() > 0){
			$Result = $Query->result();
			return $Result[0];
		}
	}
	
	public function UpdateBanner($id, $Array)
	{
		$config['upload_path']   = 'media/banner/'; 
			$config['allowed_types'] = 'jpg|png'; 
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file'))
			{
			}
			else 
			{ 
				$image_data = $this->upload->data() ;
				$Array['imagename'] = $image_data['file_name'];
			}
			$date = date('Y-m-d H:i:s');
			$Array['updated']=$date;
			$this->UpdateAll("home_banner", $Array, array("id"=>$id));
	
	}
	public function AddBanner($Array)
	{
		$config['upload_path']   = 'media/banner/'; 
			$config['allowed_types'] = 'jpg|png'; 
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file'))
			{
			}
			else 
			{ 
				$image_data = $this->upload->data() ;
				$Array['imagename'] = $image_data['file_name'];
			}
			$date = date('Y-m-d H:i:s');
			$Array['updated']=$date;
			$this->Insert("home_banner", $Array);
	}
	public function DeleteBanner($id)
	{
		$this->Delete("home_banner", array("id"=>$id));
	}
	
	public function getAllTesti(){
		$this->db->select('*');
		$this->db->from('testimonials');
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	
	public function getAllActiveTesti($limit){
		$this->db->select('*');
		$this->db->from('testimonials');
		$this->db->where("status",1);
		$this->db->limit($limit);
		$this->db->order_by('idTesti','desc');
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	public function AddTesti($Array){
		date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$Array['updated_on'] = $date;
		
		$config['file_name']= time();
		$config['upload_path']   = 'media/upload/testi/'; 
		$config['allowed_types'] = 'jpg|png'; 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('plan_image'))
		{
			echo $this->upload->display_errors();
		}
		else 
		{ 
			$image_data = $this->upload->data() ;
			$Array['image_user'] = $image_data['file_name'];
		}
		$this->db->insert('testimonials', $Array);
		$id = $this->db->insert_id();  
		if($id)
		{
		return "Testimonial Added Successfully!";
		}			
	}
	
	
	public function UpdateTesti($id,$Array){
		
	   	date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$Array['updated_on'] = $date;
		$config['file_name']= time();
		$config['upload_path']   = 'media/upload/testi/'; 
		$config['allowed_types'] = 'jpg|png'; 
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('plan_image'))
		{
			$this->upload->display_errors();
		}
		else 
		{ 
			$image_data = $this->upload->data() ;
			$Array['image_user'] = $image_data['file_name'];
		}
		$this->UpdateAll("testimonials", $Array, array("idTesti"=>$id));
	}
	public function getTestiInfo($id){
		$this->db->select('*');
		 $this->db->from('testimonials');
		 $this->db->where("idTesti",$id);
		 $Query =$this->db->get();
		if ($Query->num_rows() > 0){
		   $rs =  $Query->result();
		   return $rs[0];
		}
	}
	public function deleteTesti($id){
        $this->Delete("testimonials", array("idTesti"=>$id));
        
    }
	
	

}