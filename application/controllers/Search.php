<?php
class Search extends CI_Controller {

	    public $M_Page;

		public function __construct() {
			parent::__construct();
			$this->load->model("M_Pages");
			$this->M_Pages = new M_Pages();
			$this->load->model("M_Article");
        	$this->M_Article = new m_article();
			$this->load->model("M_Recipes");
        	$this->M_Recipes = new m_recipes();
			
			$this->load->model("M_Restaurant");
			$this->M_Restaurant = new M_Restaurant();
            $this->load->library('user_agent');	
			$this->load->model("M_Category");
			$this->M_Category = new m_category();
			$this->load->model("M_Author");
			$this->M_Author = new M_Author();
			$this->load->model("M_Site");
			$this->M_Site = new m_site();	
		}

		public function index(){
			$data['PageTitle'] = "Search";
			//$data['Content'] = $_GET['keyword'];
			$data['Article'] = $this->M_Article->searchArticle($_GET['keyword']);
			//$data['Products'] = $this->M_Products->searchProduct($_GET['keyword']);
			$data['Recipes'] = $this->M_Recipes->searchRecipe($_GET['keyword']);
			if(isset($_GET['city'])){ $city=$_GET['city']; } else {$city = NULL;}
            if(isset($_GET['keyword'])){ $keyword=$_GET['keyword']; } else {$keyword = NULL;}
            if(isset($_GET['type'])){ $type=$_GET['type']; } else {$type= NULL;}
			$data['Restaurant'] = $this->M_Restaurant->searchRstau($keyword,$city,$type);
			if ($this->agent->is_mobile('ipad')) {
					$this->load->view('pages/searchresult',$data);
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/searchresult", $data);
            }
            else
            {
				$this->load->view('pages/searchresult',$data);
            }

		}
		
		public function restaurant(){
			$data['PageTitle'] = "Search";
                        $data['Cities'] = $this->M_Restaurant->getAllActiveCities();
                        if(isset($_GET['city'])){ $city=$_GET['city']; } else {$city = NULL;}
                        if(isset($_GET['keyword'])){ $keyword=$_GET['keyword']; } else {$keyword = NULL;}
                        if(isset($_GET['type'])){ $type=$_GET['type']; } else {$type= NULL;}
                        $data['Cities'] = $this->M_Restaurant->getAllActiveCities();
                        $data['city']=$city;
			$data['Restaurants'] = $this->M_Restaurant->searchRstau($keyword,$city,$type);
			if($this->M_Site->getAddConfig('Rest/list')->addBlock)
                        {
			$data['AdblockRes']=$this->M_Site->getAddConfig('Rest/list')->addBlock;
                        }
			if ($this->agent->is_mobile('ipad')) {
					$this->load->view('pages/restaurant_search',$data);
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/restaurant_search", $data);
            }
            else
            {
				$this->load->view('pages/restaurant_search',$data);
            }
		}
		public function tags($tag){
    
                        $tag = urldecode($tag);
			$data['Recipes']= $this->M_Recipes->byTag($tag);
			$data['Article']= $this->M_Article->getArticlebyTag($tag);
			
			if(sizeof($data['Article']) > 0 || sizeof($data['Article']) > 0 )
			{
			$data['PageTitle'] = "Tag - ".$tag;
			
			
			if ($this->agent->is_mobile('ipad')) {
					$this->load->view('pages/searchresult',$data);
			}
			elseif ($this->agent->is_mobile())
            {
                  $this->load->view("mobile/searchresult", $data);
            }
            else
            {
				$this->load->view('pages/searchresult',$data);
            }
			}
			else
			{
			 show_404();
			}
			
		}


        
}