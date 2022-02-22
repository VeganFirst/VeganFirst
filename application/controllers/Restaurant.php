<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set("display_errors",1);
error_reporting(E_ALL);
class Restaurant extends CI_Controller
{
	public $M_Restaurant;
	public function __construct() 
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model("M_Restaurant");
		$this->M_Restaurant= new M_Restaurant();
        $this->load->library('user_agent');
		$this->load->model("M_Site");
		$this->M_Site = new M_Site();
		$this->load->model("M_User");
		$this->M_User = new M_User();
		$this->load->model("M_Recipes");
		$this->load->model("M_Article");
		$this->load->model("M_Category");
		$this->load->model("M_Author");
		
		
		

	}
	public function index()
	{
		$sql="UPDATE viewstat SET Views = Views + 1 WHERE name = 'Restaurants'";
		$Query = $this->db->query($sql);
			
		
		$data= $this->M_Site->getHomeRelated();
		$data['Restaurantsv'] = $this->M_Restaurant->getAllRestaurantview($start=0,8);
		
		$data['AdblockResH']=$this->M_Site->getAddConfig('Rest/listH')->addBlock;
		$data['Adblock']=$this->M_Site->getAddConfig('Article/view')->addBlock;
		
		
		$data['Caterings'] = $this->M_Restaurant->getAllRestaurantview($start=0, 8,'Catering');
		$data['Resto'] = $this->M_Restaurant->getAllRestaurantview($start=0, 8,'Restaurant');
		
		$data['Count'] = $this->M_Restaurant->getResroCount();
		$seo= $this->M_Site->getSeo('restaurant');
		$data['MetaTitle']=$seo->MetaTitle;
		$data['MetaKeyword']=$seo->MetaKeyword;
		$data['MetaDescription']=$seo->MetaDescription;
		$data['Fb_title']=$seo->MetaTitle;
		$data['Fb_desc']=$seo->MetaDescription;
		$data['Fb_img']=base_url().'assets/images/the-big-guide-square.png';
		$data['Cities'] = $this->M_Restaurant->getAllActiveCities();
		$data['Articles']= $this->M_Article->getArticlebySubCategory(139,12);
        if ($this->agent->is_mobile('ipad')) {
			$this->load->view('pages/restaurant',$data);
		}
		elseif ($this->agent->is_mobile())
        {
              $this->load->view("mobile/restaurant", $data);
        }
        else
        {
             $this->load->view('pages/restaurant',$data);
        }

	}
	public function loadmore()
	{
		$limit = $this->input->get('limit');
		$offset = $this->input->get('offset'); 
	    $types = $this->input->get('typex');
		$data['More'] = $this->M_Restaurant->getMoreRestaurantview($offset,$limit,$types);
		if($data['More']):
		$count=0;
		foreach($data['More'] as $Restaurant):
		$count++;
			?>
		<div class="col-md-6 col-sm-6 col-xs-12 mb-30">
											<img src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->cover_img; ?>" class="img-responsive br1"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" >
											<div class="col-sm-4 col-xs-4">
											   <img style="border: 1px solid #e8e8e8;" src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->Logo; ?>" class="img-responsive mt-30-m br1"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" > 
											</div>
											<div class="col-sm-8 col-xs-8" style="padding-left: 0px;">
                                            <a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><h3 class="featurettl mt-10"><?php echo $Restaurant->restaurantName; ?></h3></a>
												<ul class="list-inline mb-0">
													<li><span class="expname2"><?php echo $Restaurant->City.', '.$Restaurant->Country; ?></span></li>
												</ul>
											</div>
                                            
										
											<ul class="list-inline mb-0">
												<?php if($Restaurant->isVegan):?>
                                                <li class="pull-left mt-10"><span><img src="<?php echo base_url();?>assetsNew/img/vegan.png" style="padding-right: 10px;"></span><span class="expname2">100% Vegan</span></li>
                                                <?php endif; ?>
                                                
												<li class="pull-right"><a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><button class="btn btn-white rwbt mt-0">DETAILS <i class="icon-arrow-right"></i></button></a></li>
											</ul>
										</div>
    <?
	if($count%2==0){ echo '<div class="clearfix"></div>';}
	endforeach;
	
	endif;
	}
	
	public function view($page = 'home')
	{
		$data['Restaurant']= $this->M_Restaurant->getRestaurantView($page);
		if($data['Restaurant'])
		{
			if($data['Restaurant']->MetaTitle)
			{
				$data['PageTitle']=$data['Restaurant']->MetaTitle;
				$data['MetaDescription']=$data['Restaurant']->MetaDescription;
				$data['MetaKeyword']=$data['Restaurant']->MetaKeyword;
				$data['Fb_title']=$data['Restaurant']->MetaTitle;
				$data['Fb_desc']=$data['Restaurant']->MetaDescription;
				
			}
			else
			{
				$data['PageTitle']=$data['Restaurant']->restaurantName;
				$data['Fb_title']=$data['Restaurant']->restaurantName;
				$data['Fb_desc']=$data['Restaurant']->ShortDesc;
				
			}
                        $data['Fb_img']=base_url().'media/upload/restaurant/'.$data['Restaurant']->cover_img;
			$data['Images'] =$this->M_Restaurant->getAllImagesByRestaurantId($data['Restaurant']->idRestaurant);
			$data['Reviews']=$this->M_Restaurant->getAllReviewbyID($data["Restaurant"]->idRestaurant);
			$data['ReviewCount']=$this->M_Restaurant->getReviewCount($data["Restaurant"]->idRestaurant);
		        $data['More'] =$this->M_Restaurant->getMore($data['Restaurant']->City,$data['Restaurant']->idRestaurant);
					if ($this->agent->is_mobile('ipad')) {
					 $this->load->view('pages/restaurant_single',$data);
					}
					elseif ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/restaurant_single", $data);
					 }
					 else
					{
					   $this->load->view('pages/restaurant_single',$data);
					}

		}
		else
		{
			show_404();	
		}
	}

	public function Searchuser()
	{
		$keyword=$this->input->post('keyword');
		if($keyword):
			$data=$this->M_Restaurant->Search($keyword);        
			$cnt=1;
			if($data) :
				foreach($data as $rs)
				{
					$country_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs->restaurantName);
			echo '<li  onclick="set_item(\''.str_replace("'", "\'", $rs->restaurantName).'\',\''.str_replace("'", "\'", $rs->idRestaurant).'\')">'.$rs->restaurantName.'  - ( '.$rs->City.' )</li>';
				}
			endif;
		endif;
	}
	public function Searchuser2()
	{
		$keyword=$this->input->post('keyword');
		if($keyword):
			$data=$this->M_Restaurant->Search($keyword);        
			$cnt=1;
			if($data) :
				foreach($data as $rs)
				{
					$country_name = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs->restaurantName);
			echo '<li  onclick="set_item2(\''.str_replace("'", "\'", $rs->restaurantName).'\',\''.str_replace("'", "\'", $rs->idRestaurant).'\')">'.$rs->restaurantName.'  - ( '.$rs->City.' )</li>';
				}
			endif;
		endif;
	}
	public function get_listed()
	{
		$data['PageTitle']="Get Listed";
		
				
		if ($this->agent->is_mobile('ipad')) {
		 	$this->load->view('pages/restaurant_listed',$data);
		}
		elseif ($this->agent->is_mobile())
		{
			$this->load->view("mobile/restaurant_listed", $data);
		}
		else
		{
		   $this->load->view('pages/restaurant_listed',$data);
		}
	
	}
	
	public function submit_listed()
	{
			if(empty($_POST['Name']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Restaurant Name") );
		    elseif(empty($_POST['Email']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Email") );
		    elseif(empty($_POST['cuisine']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Enter Your Cuisine") );
			elseif(empty($_POST['full_address']))
		    echo  json_encode( array('id'=>0,'msg'=>"Please Select Your Full Address") );
		    else
		    {
			$message = "<p>Hi,<p/><p>".$_POST['Name']." Interested for Restaurant Listing<p/>"."<p>Restaurant Name : ".$_POST['Name']."</p><p>Email : ".$_POST['Email']."</p><p>Cuisine : ".$_POST['cuisine']."</p><p>Delivery Option : ".$_POST['delivery_option']."</p><p>Website Link : ".$_POST['website']."</p><p>Areas of Delivery : ".$_POST['del_area']."</p><p>Full Address : ".$_POST['full_address']."</p><p>Timing : ".$_POST['social_links']."</p><p>Social Media Links : ".$_POST['timings']."</p>";
			
			
			$this->M_Restaurant->SendMail(SITE_EMAIL,"Interested for Restaurant Listing!",$message);
			echo  json_encode( array('id'=>1,'msg'=>"Thankyou for your interest! Our team will contact you soon!"));
			}
	}	
}