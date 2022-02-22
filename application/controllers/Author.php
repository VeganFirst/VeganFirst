<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
class Author extends CI_Controller {
	    public $M_Author;
		public function __construct() {

		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model("m_category");
		$this->M_Category = new m_category();
		$this->load->model("m_author");
		$this->M_Author = new M_Author();
		$this->load->model("m_user");
		$this->M_User = new m_user();
		$this->load->model("m_recipes");
		$this->M_Recipes = new M_Recipes();
		$this->load->model("m_article");
		$this->M_Article = new M_Article();
		}

		public function index(){
			show_404();
		}

        public function view($page = 'home')
        {
			$data['Author']= $this->M_Author->getAuthorInfo($page);
				if($data){
				$data['Article']= $this->M_Author->getArticle($page);
				$data['Recipe']= $this->M_Author->getRecipe($page);
					if ($this->agent->is_mobile('ipad')) {
						$this->load->view('pages/author',$data);
					}

					elseif ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/author", $data);
					 }
					 else
					{
					   $this->load->view('pages/author',$data);
					}
				}
				else
				{
					show_404();	
				}
        }

		public function follow($page)
        {
				$data['Author']= $this->M_Author->getAuthorInfo($page);
				if($data){
				if($this->M_Author->Follow($page))
				{
					$data['Message']="You have successfully followed";	
				}	

				$data['Article']= $this->M_Author->getArticle($page);
				$data['Recipe']= $this->M_Author->getRecipe($page);
					if ($this->agent->is_mobile('ipad')) {
						$this->load->view('pages/author',$data);
					}
					elseif ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/author", $data);
					 }
					 else
					{
					   $this->load->view('pages/author',$data);
					}



				}
				else
				{
				  show_404();	
				}
        }

		public function unfollow($page)
        {
				$data['Author']= $this->M_Author->getAuthorInfo($page);
				if($data){
				if($this->M_Author->unFollow($page))
				{
					$data['Message']="You have successfully unfollowed";	
				}	

				$data['Article']= $this->M_Author->getArticle($page);
				$data['Recipe']= $this->M_Author->getRecipe($page);
					if ($this->agent->is_mobile('ipad')) {
						$this->load->view('pages/author',$data);
					}

					elseif ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/author", $data);
					 }
					 else
					{
					   $this->load->view('pages/author',$data);
					}
				}
				else
				{
					show_404();	
				}
        }
}