<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_Article extends MY_Model{
	public function __construct() {

		parent::__construct();

	}
	public function AddArticle($Array)
	{
		$Url = $Array['Url'];
		$Arrayw['PageTitle']=$Array['PageTitle'];
		$Arrayw['Url']=$Array['Url'];
		$Arrayw['Author']=$Array['Author'];
		$Arrayw['Featured']=$Array['Featured'];
		$Arrayw['category']=$Array['category'];
		$Arrayw['Tags']=$Array['Tags'];
		$Arrayw['isPublished'] = $Array['isPublished'];
        $Arrayw['videoURL']=$Array['videoURL'];
		date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$Arrayw['postTime'] = $date;
		
		$config['upload_path']   = 'media/upload/article/'; 
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
			$Arrayw['FeaturedImage'] = $image_data['file_name'];
			$imfile=$image_data['file_name'];
			$this->crop($imfile);
			$this->thumb($imfile);
		} 
		$Arrayw['MetaTitle']=$Array['MetaTitle'];
		$Arrayw['MetaKeyword']=$Array['MetaKeyword'];
		$Arrayw['MetaDescription']=$Array['MetaDescription'];
		$Arrayw['Article_desc']=$Array['Article_desc'];
		$Arrayw['Article_post']=$Array['Article_post'];

		if ($this->isUrlExists($Url))
		{
			$Arrayw['Url']=$Arrayw['Url'].'-1';
		}

		if($this->Insert("article", $Arrayw))
		{
			if($Arrayw['isPublished']==1)
			{
			//$this->m_author->notifyFollower($Array['Author'],$Array['PageTitle'],$Arrayw['Url']);
			$this->m_author->notifyFollowerCatA($Array['category'],$Array['PageTitle'],$Arrayw['Url']);
			}
			return "You have successfully Added This Article.";
		}
	}

	public function isUrlExists($Url)
	{
		$Query = $this->SelectAllWhere("article", array("Url"=>$Url));
		if ($Query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function getAllArticle()
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->order_by("postTime", "desc");
		$this->db->join('author', 'author.id = article.Author');
		$Query = $this->db->get();
		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}

	public function getAllArticleFront()
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->order_by("postTime", "desc");
		$this->db->where('isPublished',1);
		$this->db->join('author', 'author.id = article.Author');
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}
	public function getAllArticleFront_pop()
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->order_by("postTime", "desc");
		$this->db->where('isPublished',1);
		$this->db->where('Featured',1);
		$this->db->join('author', 'author.id = article.Author');
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}

	public function getAllVideo()
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->order_by("postTime", "desc");
		$this->db->where('LENGTH(videoURL)>','4');
		$this->db->where('isPublished',1);
		$this->db->join('author', 'author.id = article.Author');
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}
	public function getAllVideo_pop()
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->order_by("postTime", "desc");
		$this->db->where('LENGTH(videoURL)>','4');
		$this->db->where('isPublished',1);
		$this->db->where('Featured',1);
		$this->db->join('author', 'author.id = article.Author');
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}
	
	
	
	

	public function getHomeArticle()
	{
		$this->db->limit(15);
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where('isPublished',1);
		$this->db->order_by("postTime", "desc"); 
		$this->db->join('author', 'author.id = article.Author');

		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}

	public function getMostViewedArticle($limit)
	{
		$this->db->limit($limit);
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where('isPublished',1);
		$this->db->order_by("Views", "desc"); 
		$this->db->join('author', 'author.id = article.Author');

		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}



	public function getArticlebyAuthor($author)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where("Author",$author);
		$this->db->where('isPublished',1);
		$this->db->join('author', 'author.id = article.Author');
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}

	public function getArticleCountbyAuthor($author)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where("Author",$author);
		$this->db->where('isPublished',1);
		$Query = $this->db->get();

		return $Query->num_rows;
	}

	public function getArticleInfo($idArticle)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where("idArticle",$idArticle);
		$this->db->join('author', 'author.id = article.Author');

		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			$Result = $Query->result();
			return $Result[0];
		}
	}

	public function searchArticle($idArticle)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where('isPublished',1);
		$this->db->like("Tags",$idArticle);
		//$this->db->or_like("Article_desc",$idArticle);
		//$this->db->or_like("Article_post",$idArticle);
		$this->db->join('author', 'author.id = article.Author');

		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			$Result = $Query->result();
			return $Result;
		}
	}

	public function getArticle($idArticle)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where("Url",$idArticle);
		$this->db->where("isPublished",1);
		$this->db->join('author', 'author.id = article.Author');

		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			$Result = $Query->result();
			$sql="UPDATE article SET Views = Views + 1 WHERE Url = '".$idArticle."'";
			$Query = $this->db->query($sql);
			return $Result[0];
		}
	}

	public function getArticlepre($idArticle)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where("Url",$idArticle);
		$this->db->join('author', 'author.id = article.Author');
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			$Result = $Query->result();
			return $Result[0];
		}
	}

	public function getMore($offset,$limit,$cat=NULL,$order)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where('isPublished',1);
		if(strlen($cat)>3)
		$this->db->where('category',$cat);
		
		elseif(strlen($cat)<4 && strlen($cat)>1)
		$this->db->where('category_sub',$cat);
		
		$this->db->limit($limit,$offset);
		$this->db->order_by($order, "desc");
		$Query = $this->db->get();
		if ($Query->num_rows() > 0)
		{
			return $Query->result();
			 //$Result[0];
		}
	}

	public function updateArticle($idArticle, $Array)
	{
		$config['upload_path']   = 'media/upload/article/'; 
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
			$Array['FeaturedImage'] = $image_data['file_name'];
			$imfile=$image_data['file_name'];
			$this->image_lib->clear();
			$this->crop($imfile);
			$this->thumb($imfile);
		}
		
		date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$Array['updatedTime'] = $date;
		if($this->session->userdata('Admin_Name'))
		{
			$Array['updatedBy']= "Admin";
		}
		if(isset($_SESSION['Writer_Name']))
		{
			$Array['updatedBy']=$_SESSION['Writer_Name'];
		}
		unset($Array['file']);
		$upd = $this->getArticleInfo($idArticle);
		if($Array['isPublished']==1 && $upd->isPublished==0)
		{
			//$this->m_author->notifyFollower($Array['Author'],$Array['PageTitle'],$Array['Url']);
			$this->m_author->notifyFollowerCatA($Array['category'],$Array['PageTitle'],$Array['Url']);
			date_default_timezone_set("Asia/Kolkata");
			$date = date('Y-m-d H:i:s');
			$Array['postTime'] = $date;

		}
		$this->UpdateAll("article", $Array, array("idArticle"=>$idArticle));
	}

	public function deleteArticle($idArticle)
	{
		$this->Delete("article", array("idArticle"=>$idArticle));
	}

	public function crop($imfile)
	{
		//$this->image_lib->clear();
		//$configr['image_library'] = 'gd2';
		$configr['source_image'] = 'media/upload/article/'.$imfile;
		$configr['new_image'] = 'media/upload/article/main/'.$imfile;
		$configr['x_axis'] = 0;
		$configr['y_axis'] = 67;
		$configr['quality'] = '100%';
		$configr['maintain_ratio'] = FALSE;
		$configr['width'] = 900;
		$configr['height'] = 480;
		//$this->load->library('image_lib', $configr);
		$this->image_lib->initialize($configr);
		$this->image_lib->crop();
		$this->image_lib->clear();
	}

	public function thumb($imfile)
	{
		//$this->image_lib->clear();
		//$config1['image_library'] = 'gd2';
		$config1['source_image'] = 'media/upload/article/'.$imfile;
		$config1['new_image'] = 'media/upload/article/thumb/'.$imfile;
		$config1['maintain_ratio'] = false;
		$config1['width']         = 400;
		$config1['height']       = 270;
		//$this->load->library('image_lib', $config1);
                $this->image_lib->initialize($config1);
		$this->image_lib->resize();
		$this->image_lib->clear();
	}

	public function date_diff2 ($d1, $d2)
	{
		$dif= round(abs(strtotime($d1)-strtotime($d2)));
		if($dif > 31104000)
		{
			$difr = round(abs($dif/31104000))." year ago";
		}
		elseif($dif > 2592000)
		{
			$difr = round(abs($dif/2592000))." month ago";
		}
		elseif($dif > 86400)
		{
			$difr = round(abs($dif/86400))." days ago";
		}
		elseif($dif > 3600)
		{
			$difr = round(abs($dif/3600))." hours ago";
		}
		elseif($dif > 60)
		{
			$difr = round(abs($dif/60))." minutes ago";
		}
		else
		{
			$difr = $dif." seconds ago";
		}
		return $difr;
	}

	public function getArticlebyCategory($cat,$limit,$order='postTime')
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where("category",$cat);
		$this->db->where('isPublished',1);
		$this->db->join('author', 'author.id = article.Author');
		$this->db->limit($limit);
		$this->db->order_by($order, "desc");
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}

	public function getPopArticlebyCategory($cat)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where("category",$cat);
		$this->db->where('isPublished',1);
		$this->db->where('Featured',1);
		$this->db->join('author', 'author.id = article.Author');

		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}
	
	public function getCategoryCount($cat)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where("category",$cat);
		$this->db->where('isPublished',1);
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->num_rows;
		}
	}
	
	public function getSubCategoryCount($cat)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where("category_sub",$cat);
		$this->db->where('isPublished',1);
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->num_rows;
		}
	}



	public function getArticlebyTag($cat)
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where('isPublished',1);
		$this->db->like("Tags",str_replace('-',' ',$cat.','));
                $this->db->or_like("Tags",', '.str_replace('-',' ',$cat));

		$this->db->join('author', 'author.id = article.Author');
		//$this->db->limit(8);
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}
	
	
	public function byTags($keyword,$id){
    
	$keyword = explode(',',$keyword);
	if($keyword):
	$query_parts = array();
		foreach ($keyword as $val) {
			$query_parts[] = "'%".trim(mysqli_real_escape_string($this->db->conn_id,$val))."%'";
		}

		$string = implode(' OR Tags LIKE ', $query_parts);
		$sqlQuery=$this->db->query("Select * from article where Tags like {$string} and idArticle !=".$id);
	endif;	
		
		
//echo $sqlQuery;
//$tank = "SELECT url FROM `PHP`.`db` WHERE url LIKE {$string}";
if($sqlQuery):
	if($sqlQuery->num_rows()>0)
	{
        $result[] = $sqlQuery->result();
	return $result;
	}
endif;	
	
	
	/*print_r ($keyword);
    $result = array();
    
	
	
	
	for($i = 0; $i < count($keyword); $i++)
    {
		$sqlQuery=$this->db->query("Select * from article where Tags like '%".$keyword[$i]."%' and idArticle !=".$id);
		
		
        if($sqlQuery->num_rows()>0)
        $result[] = $sqlQuery->result();
    } */      
		
		
   }
   	public function isMysaveArticle($id)
	{
		$uid=$this->session->userdata('User_id');
		$this->db->select('*');
		$this->db->from('user_saved');
		$this->db->where('idUser' ,$uid);
		$this->db->where('idSave' ,$id);
		$this->db->where('type' ,1);
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
	
	
	public function getLatestVideos()
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where('length(videoURL)>1');
		//$this->db->where('videoURL', NULL, FALSE);
		
		$this->db->limit(10);
		$this->db->order_by('idArticle','DESC');
		$this->db->where('isPublished',1);
		$this->db->where('Featured',1);
		$this->db->join('author', 'author.id = article.Author');

		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}
	
	
	public function getArticlebySubCategory($cat,$limit,$offset=0,$order='postTime')
	{
		$this->db->select('*');
		$this->db->from('article');
		$this->db->where("category_sub",$cat);
		$this->db->where('isPublished',1);
		$this->db->join('author', 'author.id = article.Author');
		$this->db->limit($limit,$offset);
		$this->db->order_by($order, "desc");
		$Query = $this->db->get();

		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}


}