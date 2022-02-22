<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set("display_errors",1);

error_reporting(E_ALL);

class Starttoday extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("M_Site");
		$this->M_Site = new M_Site();
		$this->load->model("M_Plan");
		$this->M_Plan = new M_Plan();
		$this->load->model("M_Article");
		$this->M_Article = new M_Article();
	}
	public function index(){
		
		$seo= $this->M_Site->getSeo('starttoday');
		$data['MetaTitle']=$seo->MetaTitle;
		$data['MetaKeyword']=$seo->MetaKeyword;
		$data['MetaDescription']=$seo->MetaDescription;
		
		$data['Cats'] = $this->M_Plan->getAllActivePlanCats();
		
		$data['Testis'] = $this->M_Site->getAllActiveTesti(3);
		if ($this->agent->is_mobile('ipad')) {
          $this->load->view("pages/starttoday", $data);
    	}
		elseif ($this->agent->is_mobile())
		{
			$this->load->view("mobile/starttoday", $data);
		}
		else
		{
			$this->load->view("pages/starttoday", $data);
		}
	}
	
	public function starterkit(){
		
		$seo= $this->M_Site->getSeo('starterkit');
		$data['MetaTitle']=$seo->MetaTitle;
		$data['MetaKeyword']=$seo->MetaKeyword;
		$data['MetaDescription']=$seo->MetaDescription;
		$data['Videos'] = $this->M_Article->getMore(0,4,1002,'');
		if ($this->agent->is_mobile('ipad')) {
          $this->load->view("pages/starterkit", $data);
    	}
		elseif ($this->agent->is_mobile())
		{
			$this->load->view("mobile/starterkit", $data);
		}
		else
		{
			$this->load->view("pages/starterkit", $data);
		}
	}
	
	public function book($id)
	{
	    if($_POST)
		{
		   
		   
		   
		   
		}
		
		$seo= $this->M_Site->getSeo('booknow');
		$data['MetaTitle']=$seo->MetaTitle;
		$data['MetaKeyword']=$seo->MetaKeyword;
		$data['MetaDescription']=$seo->MetaDescription;
		$data['Plan'] = $this->M_Plan->getPlanInfo($id);
		$data['Testis'] = $this->M_Site->getAllActiveTesti(3);
		if ($this->agent->is_mobile('ipad')) {
          $this->load->view("pages/booknow", $data);
    	}
		elseif ($this->agent->is_mobile())
		{
			$this->load->view("mobile/booknow", $data);
		}
		else
		{
			$this->load->view("pages/booknow", $data);
		}
	}
	
}