<?php
ini_set("display_errors",1);

error_reporting(E_ALL);
class Pages extends CI_Controller {

	    public $M_Page;

		public function __construct() {
			parent::__construct();
			$this->load->library('session');
		$this->load->helper(array('form', 'url'));
			$this->load->model("M_Pages");
			$this->M_Pages = new M_Pages();
			$this->load->model("M_Site");
			$this->load->model("M_Article");
		$this->M_Article = new M_Article();
			
		}

		public function index(){
					if ($this->agent->is_mobile('ipad')) {
					   $this->load->view('pages/home',$data);
					}
					elseif ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/home", $data);
					 }
					 else
					{
					   $this->load->view('pages/home',$data);
					}
		}

        public function view($page = 'home')
        {
				$data= $this->M_Pages->getPage($page);
				
				
				if($data){
					if ($this->agent->is_mobile('ipad')) {
					   $this->load->view('pages/page',$data);
					}
					elseif ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/page", $data);
					 }
					 else
					{
					   $this->load->view('pages/page',$data);
					}

				}
				else
				{
					show_404();	
				}
        }
		
		public function contact()
        {
			if($_POST)
			{
				$data['message']= $this->M_Pages->sendContact($_POST);
				$seo= $this->M_Site->getSeo('contact');
				$data['MetaTitle']=$seo->MetaTitle;
				$data['MetaKeyword']=$seo->MetaKeyword;
				$data['MetaDescription']=$seo->MetaDescription;
					
					if ($this->agent->is_mobile('ipad')) {
					   $this->load->view('pages/contact',$data);
					}elseif ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/contact", $data);
					 }
					 else
					{
					   $this->load->view('pages/contact',$data);
					}
			}
			else
			{
				$sql="UPDATE viewstat SET Views = Views + 1 WHERE name = 'Contact-Us'";
				$Query = $this->db->query($sql);
				
				$seo= $this->M_Site->getSeo('contact');
				$data['MetaTitle']=$seo->MetaTitle;
				$data['MetaKeyword']=$seo->MetaKeyword;
				$data['MetaDescription']=$seo->MetaDescription;
					if ($this->agent->is_mobile('ipad')) {
					   $this->load->view('pages/contact',$data);
					}elseif ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/contact", $data);
					 }
					 else
					{
					   $this->load->view('pages/contact',$data);
					}
			}
        }
		
		public function partner()
        {
			if($_POST)
			{
				$data['message']= $this->M_Pages->sendPartner($_POST);
				$seo= $this->M_Site->getSeo('partner');
				$data['MetaTitle']=$seo->MetaTitle;
				$data['MetaKeyword']=$seo->MetaKeyword;
				$data['MetaDescription']=$seo->MetaDescription;
					if ($this->agent->is_mobile('ipad')) {
					   $this->load->view('pages/partner',$data);
					}elseif ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/partner", $data);
					 }
					 else
					{
					   $this->load->view('pages/partner',$data);
					}
			}
			else
			{
				
				$seo= $this->M_Site->getSeo('partner');
				$data['MetaTitle']=$seo->MetaTitle;
				$data['MetaKeyword']=$seo->MetaKeyword;
				$data['MetaDescription']=$seo->MetaDescription;
					if ($this->agent->is_mobile('ipad')) {
					   $this->load->view('pages/partner',$data);
					}elseif ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/partner", $data);
					 }
					 else
					{
					   $this->load->view('pages/partner',$data);
					}
			}
        }
		public function listed()
        {
			if($_POST)
			{
				$data['message']=$this->M_Pages->sendListed($_POST);
				echo json_encode($data);
			}
			
       }
				   
		public function attendevent()
        {
			if($_POST)
			{
				$data['message']=$this->M_Pages->sendAttend($_POST);
				echo json_encode($data);
			}
			
       }
				   
				   
    public function feedback()
	{
		if ($_POST)
		{
			$data['MetaTitle'] = "Feedback";
			$data['message']= $this->M_Pages->sendFeedback($_POST);
			$this->load->view('pages/feedback',$data);
		}
		else
		{
			$data['MetaTitle'] = "Feedback";
			$this->load->view('pages/feedback',$data);
		}
	}
	
		public function aboutus()
        {
		$sql="UPDATE viewstat SET Views = Views + 1 WHERE name = 'About-Us'";
		$Query = $this->db->query($sql);
		
		$seo= $this->M_Site->getSeo('about');
		$data['MetaTitle']=$seo->MetaTitle;
		$data['MetaKeyword']=$seo->MetaKeyword;
		$data['MetaDescription']=$seo->MetaDescription;
				
		if ($this->agent->is_mobile('ipad')) {
          $this->load->view('pages/about',$data);	
    	}
		elseif ($this->agent->is_mobile())
		{
			$this->load->view("mobile/about", $data);
		}
		else
		{
			$this->load->view('pages/about',$data);	
		}

					
			
        }
	public function advertise()
        {
		
		$sql="UPDATE viewstat SET Views = Views + 1 WHERE name = 'Advertise-with-Us'";
		$Query = $this->db->query($sql);
		$seo= $this->M_Site->getSeo('advt');
		$data['MetaTitle']=$seo->MetaTitle;
		$data['MetaKeyword']=$seo->MetaKeyword;
		$data['MetaDescription']=$seo->MetaDescription;
                if ($_POST)
		{
			
			$data['message']= $this->M_Pages->sendAdvertise($_POST);
			
		}
				
		if ($this->agent->is_mobile('ipad')) {
               $this->load->view('pages/advertise',$data);	
    	        }
		elseif ($this->agent->is_mobile())
		{
			$this->load->view("mobile/advertise", $data);
		}
		else
		{
			$this->load->view('pages/advertise',$data);	
		}
					
			
        }
    public function conference(){
		
		$seo= $this->M_Site->getSeo('conference');
		$data['MetaTitle']=$seo->MetaTitle;
		$data['MetaKeyword']=$seo->MetaKeyword;
		$data['MetaDescription']=$seo->MetaDescription;
		if ($this->agent->is_mobile('ipad')) {
          $this->load->view("pages/conference", $data);
    	}
		elseif ($this->agent->is_mobile())
		{
			$this->load->view("mobile/conference", $data);
		}
		else
		{
			$this->load->view("pages/conference", $data);
		}
	}
		

		
}