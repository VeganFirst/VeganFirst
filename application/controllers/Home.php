<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set("display_errors",1);

error_reporting(E_ALL);

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->model("M_Site");
		$this->M_Site = new M_Site();
		$this->load->model("M_Article");
		$this->M_Article = new M_Article();
		$this->load->model("M_Recipes");
		$this->M_Recipes = new M_Recipes();
		$this->load->model("M_Columnist");
		$this->M_Columnist = new M_Columnist();
		$this->load->model("M_Category");
		$this->M_Category = new M_Category();
		$this->load->model("M_Author");
		$this->M_Author = new M_Author();
		$this->load->model("M_Shop");
		$this->M_Shop = new M_Shop();
		$this->load->library('user_agent');
		
	}
	public function index(){

		$sql="UPDATE viewstat SET Views = Views + 1 WHERE name = 'Home'";
		$Query = $this->db->query($sql);
		$data= $this->M_Site->getHomeRelated();
		$data['Categories'] = $this->M_Category->getAllCategory_home();
		$data['HomeTop']=$this->M_Site->getAddConfig('Home/top');
		$data['HomeBanners']=$this->M_Site->getActiveBanner();
		$data['Courses']=$this->M_Shop->getAllActiveCourses();
		$data['Videos'] = $this->M_Article->getLatestVideos();


		$data['HomeFoot']=$this->M_Site->getAddConfig('Home/footer');
		$data['HomeSide']=$this->M_Site->getAddConfig('Home/side');
		
		$data['MobileTop']=$this->M_Site->getAddConfig('Mobile/top');
		$data['HomeMobile']=$this->M_Site->getAddConfig('Home/mobile');
		$data['Tags']=$this->M_Site->getAddConfig('HomeTag');
		$data['Columnist']=$this->M_Columnist->getAllActiveColumnist();
		$seo= $this->M_Site->getSeo('home');
		$data['MetaTitle']=$seo->MetaTitle;
		$data['MetaKeyword']=$seo->MetaKeyword;
		$data['MetaDescription']=$seo->MetaDescription;
		$data['Fb_title']=$seo->MetaTitle;
		$data['Fb_desc']=$seo->MetaDescription;
		$data['Fb_img']="http://veganfirst.com/media/slider/vegan-first.jpg";
		
		$data['Notification'] = $this->M_Site->getAllConfigNot();
		
		
		if ($this->agent->is_mobile('ipad')) {
          $this->load->view("frontend/home", $data);
    	}
		elseif ($this->agent->is_mobile())
		{
			$this->load->view("mobile/home", $data);
		}
		else
		{
			$this->load->view("frontend/home", $data);
		}
	}
	
	
	public function ebook()
	{
	    if($_POST['email']):
	    $data[]="";
	    if ($this->agent->is_mobile('ipad')) {
          $this->load->view("frontend/ebook", $data);
    	}
		elseif ($this->agent->is_mobile())
		{
			$this->load->view("mobile/ebook", $data);
		}
		else
		{
			$this->load->view("frontend/ebook", $data);
		}
		endif;
	}
	
    public function rss()
    {
	$data['articles']=$this->M_Article->getAllArticleFront();
        $this->load->view('rss', $data);
    }
   public function rssfb()
    {
	$data['articles']=$this->M_Article->getAllArticleFront();
        $this->load->view('rssfb', $data);
    }

}