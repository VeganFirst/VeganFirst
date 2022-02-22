<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Restaurant extends MY_Model{
	
	public function __construct() {
		parent::__construct();
	}
	 public function AddRestaurantPremium($Array){
		$Url = $this->CreateSlug($Array['restaurantName']);
		
	   date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$Array['postTime'] = $date;
		$Array['isPremium']=1;
		$Array['Views']=0;
		
		 $config['upload_path']   = 'media/upload/restaurant/'; 
		 $config['allowed_types'] = 'gif|jpg|png'; 
		 $config['max_size']      = 2049; 
		 $config['max_width']     = 2024; 
		 $config['max_height']    = 1768;  
		 $this->load->library('upload', $config);
			
		 if ( ! $this->upload->do_upload('cover_img_n')) {
			
		 }
		 else { 
					$image_data = $this->upload->data() ; 
					$Array['cover_img'] = $image_data['file_name'];
		 }
		 
		 /*if ( ! $this->upload->do_upload('cover_img_lm')) {
			
		 }
		 else { 
					$image_data = $this->upload->data() ; 
					$Array['cover_img_l'] = $image_data['file_name'];
		 }*/
		 
		 
		 
		 
		 if ( ! $this->upload->do_upload('logo')) {
		 }
		 else { 
					$image_data = $this->upload->data() ; 
					$Array['Logo'] = $image_data['file_name'];
		 }  
		
		if (!$this->isEmailExists($Url)){
			$Array['Url']=$Url;
			$this->db->insert('restaurant', $Array);
			$id = $this->db->insert_id();  
			if($id)
			{
				
			return "Restaurant ".$Array['restaurantName']." Added Successfully!";
			
			}
		}else{
			return "This Restaurant is already exists Please Change url";
		}
	}

	public function isEmailExists($Email){
		$Query = $this->SelectAllWhere("restaurant", array("Url"=>$Email));
		if ($Query->num_rows() > 0){return true;}else{return false;}
	}

	public function getAllRestaurant(){
		$this->db->select('*');
		$this->db->from('restaurant');
		$this->db->order_by("restaurantName", "asc");
		
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	public function getAllRestaurantview($start, $limit,$types='isVegan'){
		$this->db->select('*');
		$this->db->limit($limit,$start);
		$this->db->from('restaurant');
		$this->db->order_by("restaurantName", "asc");
		$this->db->where('isActive =', 1);
		if($types=='isVegan')
		{
		$this->db->where('isVegan =', 1);
		}
		elseif($types=='Catering')
		{
		$this->db->where('category =', 'Catering');
		}
		elseif($types=='Restaurant')
		{
			$this->db->where('category =', 'Restaurant');
		}
		
		//$this->db->join('rest_rating', 'rest_rating.idRestaurant = restaurant.idRestaurant','left');
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}

	

	public function getResroCount()
	{
		$this->db->select('*');
		$this->db->from('restaurant');
		// $this->db->where('isActive =', 1);
		
		$Query = $this->db->get();

		return $Query->num_rows();
	}
	public function getMoreRestaurantview($start, $limit,$types='isVegan'){
		$this->db->select('*');
		$this->db->limit($limit,$start);
		$this->db->from('restaurant');
		$this->db->order_by("restaurantName", "asc");
		$this->db->where('isActive =', 1);
		if($types=='isVegan')
		{
		$this->db->where('isVegan =', 1);
		}
		elseif($types=='Catering')
		{
		$this->db->where('category =', 'Catering');
		}
		elseif($types=='Restaurant')
		{
			$this->db->where('category =', 'Restaurant');
		}
		
		
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}


	public function searchRstau($keyword,$city,$type){
		$this->db->select('*');
		$this->db->from('restaurant');
		$this->db->like("restaurantName",$keyword);
		if($city){
		$this->db->where('City', $city);
		}
		if($type){
		$this->db->where('category', $type);
		}

		$this->db->order_by("restaurantName", "asc");
        $this->db->where('isActive =', 1);
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	public function getMore($keyword,$id){
		$this->db->select('*');
		$this->db->from('restaurant');
		$this->db->where('idRestaurant !='.$id);
		$this->db->like("city",$keyword);
		$this->db->order_by("restaurantName", "asc");
		$this->db->where('isActive', 1);
		$this->db->limit(3);
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	
	public function getRestaurantInfo($idAuthor){
		$this->db->select('*');
		$this->db->from('restaurant');
		$this->db->where('Url =', $idAuthor);
		$this->db->or_where('idRestaurant =', $idAuthor); 
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			$Result = $Query->result();
			return $Result[0];
		}
	}
	
	public function getRestaurantView($idAuthor){
		 $sql="UPDATE restaurant SET Views = Views + 1 WHERE Url = '".$idAuthor."'";
		 $Query = $this->db->query($sql);
		$this->db->select('*');
		$this->db->from('restaurant');
		$this->db->where('Url =', $idAuthor);
		$this->db->where('isActive =', 1);
		$this->db->where('isPremium =', 1);
		$this->db->or_where('idRestaurant =', $idAuthor); 
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			$Result = $Query->result();
			return $Result[0];
		}
	}
	
	public function updateRestaurant($idAuthor, $Array){
		 $config['upload_path']   = 'media/upload/restaurant/'; 
		 $config['allowed_types'] = 'gif|jpg|png'; 
		 $config['max_size']      = 3000; 
		 $config['max_width']     = 2024; 
		 $config['max_height']    = 1768;  
		 $this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('logo')) {
			
		 }
		 else { 
			
					$image_data = $this->upload->data() ; 
					$Array['Logo'] = $image_data['file_name'];
		 } 
		unset($Array['logo']);
			
		if ( ! $this->upload->do_upload('cover_img_n')) {
		 }
		 else { 
					$image_data = $this->upload->data() ; 
					$Array['cover_img'] = $image_data['file_name'];
		 }
		 unset($Array['cover_img_n']);


		 
		/* if ( ! $this->upload->do_upload('cover_img_lm')) {
			
		 }
		 else { 
					$image_data = $this->upload->data() ; 
					$Array['cover_img_l'] = $image_data['file_name'];
		 }
		 unset($Array['cover_img_lm']);*/
		 
		 
		
		date_default_timezone_set("Asia/Kolkata");
		$date = date('Y-m-d H:i:s');
		$Array['updatedAt'] = $date;
		$this->UpdateAll("restaurant", $Array, array("idRestaurant"=>$idAuthor));
		
	}
	
	public function deleteRestaurant($idAuthor){
		$this->Delete("restaurant", array("idRestaurant"=>$idAuthor));
		
	}
	
	public function crop($imfile){
				//$this->image_lib->clear();
				$configr['image_library'] = 'gd2';
				$configr['source_image'] = 'media/upload/restaurant/'.$imfile;
				$configr['new_image'] = 'media/upload/restaurant/slide/'.$imfile;
				$configr['x_axis'] = 25;
				$configr['y_axis'] = 125;
				$configr['quality'] = '100%';
				$configr['maintain_ratio'] = FALSE;
				$configr['width'] = 900;
				$configr['height'] = 385;
				$this->load->library('image_lib', $configr);
				$this->image_lib->initialize($configr);
				$this->image_lib->crop();
				$this->image_lib->clear();
	}
	
	public function thumb($imfile){
		
				$this->image_lib->clear();
				$config1['image_library'] = 'gd2';
				$config1['source_image'] = 'media/upload/restaurant/'.$imfile;
				$config1['new_image'] = 'media/upload/restaurant/thumb/'.$imfile;
				$config1['maintain_ratio'] = false;
				$config1['width']         = 400;
				$config1['height']       = 270;
				$this->image_lib->initialize($config1);
				$this->image_lib->resize();
				$this->image_lib->clear();
	}

	public function getMenuRest()
	{
		$this->db->select('*');
		$this->db->from('restaurant');
		$this->db->where('isActive =', 1);
		$this->db->limit(6);
		$this->db->order_by('postTime','DESC');
		$Query = $this->db->get();
			if ($Query->num_rows() > 0)
			{
				return $Query->result();
			}
	}
	
	public function getAllCities($value='')
	{
		$this->db->select('*');
		$this->db->from('cities');
				$this->db->order_by("name", "asc");
		$Query = $this->db->get();
		return $Query->result();
	}
	public function getAllActiveCities($value='')
	{
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where('status',1);
				$this->db->order_by("name", "asc");
		$Query = $this->db->get();
		return $Query->result();
	}

	public function Addcity($Array)
	{
		$this->db->insert('cities',$Array);
		redirect(base_url().'admin/manage_cities');
	}

	public function updateCity($id, $Array)
	{
		$this->db->update('cities', $Array, array('id'=>$id));
		redirect(base_url().'admin/manage_cities');
	}

	public function getCityById($id)
	{
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where('id',$id);
		$Query = $this->db->get();
		if ($Query->num_rows() >0)
		{
			$result=$Query->result();
			return $result[0];
		}
		else
		{
			return false;
		}
	}

	public function deleteCity($id)
	{
		$this->db->delete('cities', array('id'=>$id));
		redirect(base_url().'admin/manage_cities');
	}

	public function getAllRestaurantByCity($city)
	{
		$this->db->select('*');
		$this->db->from('restaurant');
		$this->db->where('isActive =', 1);
		$this->db->where('City', $city);
		$this->db->order_by("restaurantName", "asc");
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	public function addImagesToRestaurant($id, $Array)
	{
		$this->load->library('upload');
		$Restaurant_img['restaurant_id'] = $id;
		$files = $_FILES['images'];
		$cpt = count($_FILES['images']['name']);
		for($i=0; $i<$cpt; $i++)
		{
			$_FILES['images']['name']= $files['name'][$i];
			$_FILES['images']['type']= $files['type'][$i];
			$_FILES['images']['tmp_name']= $files['tmp_name'][$i];
			$_FILES['images']['error']= $files['error'][$i];
			$_FILES['images']['size']= $files['size'][$i];    

			$this->upload->initialize($this->set_gallery_options());
			if ($this->upload->do_upload('images'))
			{
				$image_data = $this->upload->data() ; 
				$Restaurant_img['file_name'] = $image_data['file_name'];
				$this->db->insert('restaurant_images', $Restaurant_img);
			}
			else
			{
				print_r( $this->upload->display_errors());
			}
		}
		return true;
	}

	private function set_gallery_options()
	{
		$config = array();
		$config['upload_path'] = 'media/upload/restaurant/photo/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '0';
		$config['overwrite']     = FALSE;
		return $config;
	}

	public function getAllImagesByRestaurantId($id)
	{
		$this->db->select('*');
		$this->db->from('restaurant_images');
		$this->db->where('restaurant_id', $id);
		$Query = $this->db->get();
		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
	}
	public function deleteRestaurantImage($id)
	{
		$this->db->select('*');
		$this->db->from('restaurant_images');
		$this->db->where('id', $id);
		$Query = $this->db->get();
		if ($Query->num_rows() > 0)
		{
			$rs=$Query->result();
						unlink('media/upload/restaurant/photo/'. $rs[0]->file_name);
		}
		$this->db->delete('restaurant_images', array('id'=>$id));
	}

	public function getReviewsByUser($uid)
	{
		$this->db->select('*');
		$this->db->from('rest_rating');
		$this->db->where('user_id', $uid);
		$this->db->join('restaurant', 'rest_rating.idRestaurant = restaurant.idRestaurant');
		$this->db->limit(2);

		$Query = $this->db->get();
		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
		else
		{
			return false;
		}
	}
	public function getAllReviewbyID($restaurant_id)
	{
		$this->db->select('*');
		$this->db->from('rest_rating');
		$this->db->where('idRestaurant', $restaurant_id);
		$this->db->join('user_info', 'rest_rating.user_id = user_info.idUser');
		// $this->db->limit(2);

		$Query = $this->db->get();
		if ($Query->num_rows() > 0)
		{
			return $Query->result();
		}
		else
		{
			return false;
		}
	}

	public function getReviewCount($restaurant_id)
	{
		$this->db->select('*');
		$this->db->from('rest_rating');
		$this->db->where('idRestaurant', $restaurant_id);
		
		$Query = $this->db->get();
		if ($Query->num_rows() > 0)
		{
			return $Query->num_rows();
		}
		else
		{
			return 0;
		}
	}
	public function Search($keyword){
		$this->db->select('*');
		$this->db->from('restaurant');
		$this->db->like("restaurantName",$keyword);
		$this->db->order_by("restaurantName", "asc");
		$this->db->where('isActive =', 1);
		$this->db->limit(3);
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
		
	}
	public function getAllRestaurantRating(){
		$this->db->select('*');

		$this->db->from('rest_rating');
		
		$this->db->join('restaurant', 'restaurant.idRestaurant = rest_rating.idRestaurant','left');
		$this->db->where('restaurant.isActive =', 1);
		$Query = $this->db->get();
		if ($Query->num_rows() > 0){
			return $Query->result();
		}
	}
	public function deleteReview($rate)
	{
	$this->db->delete("rest_rating", array("id"=>$rate));
	}
}