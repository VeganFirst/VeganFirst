<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
class Columnist extends CI_Controller {
	
	    public $M_Columnist;
		
		public function __construct() {
			parent::__construct();
			$this->load->library('session');
		    $this->load->helper(array('form', 'url'));
			$this->load->model("M_Columnist");
			$this->M_Columnist = new M_Columnist();
			$this->load->model("M_Pages");
			$this->M_Pages = new M_Pages();

		$this->load->model("M_Site");
		$this->M_Site = new M_Site();
		}

		public function index(){
			$data['PageTitle']= 'Experts';
			$data['Columnist']=$this->M_Columnist->getAllActiveColumnist();
        	$this->load->view('pages/expert',$data);
		}
        public function view($page = 'home')
        {
			
			$data['Columnist']= $this->M_Columnist->getColumnistView($page);
			$data['Adblock']=$this->M_Site->getAddConfig('Columnist')->addBlock;
			if($data){
				$data['PageTitle']= $data['Columnist']->Name;
				$this->load->library('pagination');
				$config['base_url'] = base_url()."columnist/".$page;
				$config['total_rows'] = $this->M_Columnist->countQuestion($data['Columnist']->idColumnist);
				$config['per_page'] = 10; 
				


				$this->pagination->initialize($config); 
				
				$data['Question']= $this->M_Columnist->getQuestionView($data['Columnist']->idColumnist,$config['per_page'],$this->uri->segment(3));
					if ($this->agent->is_mobile('ipad')) {
						 $this->load->view('pages/columnist',$data);
					}

					elseif ($this->agent->is_mobile())
					 {
						 $this->load->view("mobile/columnist", $data);
					 }
					 else
					{
					   $this->load->view('pages/columnist',$data);
					}
					
				}
				else
				{
					show_404();	
				}
        }
        
		public function ask()
        {
			if($_POST)
			{
				$data['message']=$this->M_Pages->sendASK($_POST);
				echo json_encode($data);
			}
			
        }



}