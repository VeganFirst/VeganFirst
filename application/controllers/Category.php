<?php
class Category extends CI_Controller {
	
	    public $M_category;
		
		public function __construct() {
			parent::__construct();
			$this->load->library('session');
		$this->load->helper(array('form', 'url'));
			$this->load->model("m_category");
			$this->M_Category = new M_Category();
		}


		public function index(){
        	$this->load->view('pages/product');
		}
        public function view($page = 'test-page')
        {
			
			    $data['category']=$this->M_Category->getCategoryDetail($page);
				if($data['category']){
				$category =$data['category'];
				
				$this->load->library('pagination');
				$config['base_url'] = base_url()."products/".$page;
				$config['total_rows'] = $this->M_Category->getCatProductInfoCount($category->id);
				$config['per_page'] = 5; 
				$this->pagination->initialize($config); 
				$data['Products']= $this->M_Category->getCatProductInfoView($category->id,$config['per_page'],$this->uri->segment(3));
				$data['PageTitle'] = $category->PageTitle;
					if ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/category", $data);
					 }
					 else
					{
					   $this->load->view('pages/category',$data);
					}
				}
				else
				{
					show_404();	
				}
        }
		
		public function all()
        {
			
				
				$this->load->library('pagination');
				$config['base_url'] = base_url()."products/all";
				$config['total_rows'] = $this->M_Category->getAllProductCount();
				$config['per_page'] = 5; 
				$this->pagination->initialize($config); 
				$data['Products']= $this->M_Category->getCatProductInfoView('all',$config['per_page'],$this->uri->segment(3));
				$data['PageTitle'] = "All Products";
				
					if ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/categoryall", $data);
					 }
					 else
					{
					   $this->load->view('pages/categoryall',$data);
					}
				

        }
}