<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
class Recipes extends CI_Controller {
	
	    public $M_Recipes;
		public function __construct() {
			parent::__construct();
			$this->load->model("M_Recipes");
			$this->M_Recipes = new M_Recipes();
			$this->load->model("M_Category");
			$this->M_Category= new M_Category();
			$this->load->model("M_Author");
			$this->M_Author = new M_Author();
			$this->load->model("M_Site");
			$this->M_Site = new M_Site();
		}
		public function index(){
        	show_404();
		}
        public function view($page = 'home')
        {
				$data['Recipe']= $this->M_Recipes->getRecipesView($page);
				if($data['Recipe']){
				$category =$data['Recipe'];
				if($category->MetaTitle)
				{
				$datax['MetaTitle']=$category->MetaTitle;
				$datax['MetaDescription']=$category->MetaDescription;
				$datax['MetaKeyword']=$category->MetaKeyword;
				$datax['Fb_title']=$category->MetaTitle;
				$datax['Fb_desc']=$category->MetaDescription;
				$datax['Fb_img']=base_url().'media/upload/recipes/'.$category->FeaturedImage;
				}
				else
				{
				$datax['PageTitle']=$category->PageTitle;
				$datax['Fb_title']=$category->PageTitle;
				$datax['Fb_desc']=$category->ShortDesc;
				$datax['Fb_img']=base_url().'media/upload/recipes/'.$category->FeaturedImage;
				}
				$datax['Fb_author'] = $this->M_Author->getAuthorInfo($category->recepieBy);
				$datax['Recipe']=$data['Recipe'];
				$datax['Related']= $this->M_Recipes->byTags($Tag=explode(',',$data['Recipe']->HashTags),$data['Recipe']->idRecepie);
				$queryt = $this->db->query("SELECT `recepieBy`, COUNT(*) FROM recepie GROUP BY `recepieBy` ORDER BY COUNT(*) DESC");
				
				$datax['TopCon']=$queryt->result();
				$datax['AdblockRec']=$this->M_Site->getAddConfig('Recipe/view')->addBlock;
				$datax['HomeTop']=$this->M_Site->getAddConfig('Home/top');
				if ($this->agent->is_mobile('ipad')) {
					  $this->load->view('pages/recipes',$datax);
				}
				elseif ($this->agent->is_mobile())
			 	{
					 $this->load->view("mobile/recipes", $datax);
				}
				else
				{
				   $this->load->view('pages/recipes',$datax);
				}
				}
				else
				{
					show_404();	
				}
        }
		
		public function category($page = 'home')
        {
		$data['category']=$this->M_Category->getCategoryDetail_rec($page);
		if($data['category']){
		$category =$data['category'];
		if($this->M_Site->getAddConfig('Recipe/Cat')->addBlock)
		{ $limit = 8;} else {$limit = 9;}
	
		$data['Products']= $this->M_Recipes->getRecepiebyCategory($category->id,$limit,0);
		$data['ProductsPop']= $this->M_Recipes->getPopRecepiebyCategory($category->id,$limit,0,'Views');
		

		
				
		if($category->MetaTitle)
		{
			$data['PageTitle'] = $category->MetaTitle;
			$data['MetaKeyword'] = $category->MetaKeyword;
			$data['MetaDescription'] = $category->MetaDescription;
		}
		else
		{
			$data['PageTitle'] = $category->CategoryTitle;
		}
		$data['AdblockCatH']=$this->M_Site->getAddConfig('Recipe/CatH')->addBlock;
	   	$data['AdblockCat']=$this->M_Site->getAddConfig('Recipe/Cat')->addBlock;
		
		if ($this->agent->is_mobile('ipad')) {
		  $this->load->view('pages/recipes_cat',$data);
		}
		elseif ($this->agent->is_mobile())
		{
		   $this->load->view("mobile/recipes_cat", $data);
		}
		else
		{
		   $this->load->view('pages/recipes_cat',$data);
		}
		}
		else
		{
			show_404();	
		}
        }

		public function allReceipe($page)
        {
			$data['Products']= $this->M_Recipes->AllView();
			$data['ProductsPop']= $this->M_Recipes->AllViewPop();
			$sql="UPDATE viewstat SET Views = Views + 1 WHERE name = 'Alwayshungry'";
		    $Query = $this->db->query($sql);
			
			
			$data['PageTitle'] = "All Recipes";
			$data['AdblockCatH']=$this->M_Site->getAddConfig('Recipe/CatH')->addBlock;
		   	$data['AdblockCat']=$this->M_Site->getAddConfig('Recipe/Cat')->addBlock;
			
			$seo= $this->m_site->getSeo('alwayshungry');
			$data['MetaTitle']=$seo->MetaTitle;
			$data['MetaKeyword']=$seo->MetaKeyword;
			$data['MetaDescription']=$seo->MetaDescription;
			

			if ($this->agent->is_mobile('ipad')) {
			  $this->load->view('pages/recipes_cat',$data);
			}
			elseif ($this->agent->is_mobile())
			{
			  $this->load->view("mobile/recipes_cat", $data);
			}
			else
			{
			   $this->load->view('pages/recipes_cat',$data);
			}
        }
		public function loadmore()
		{
			$limit = $this->input->get('limit');
			$offset = $this->input->get('offset');
			$cat = $this->input->get('cat');
			$order = $this->input->get('order');
			$data['More'] = $this->M_Category->getCatProductInfo_recView($cat,$limit,$offset,$order);
			$count=0;
			if($data['More']):
			foreach($data['More'] as $Articl):
			$count++;
			$cat = $this->M_Category->getCategoryInfo_rec($Articl->Category);
			$author = $this->M_Author->getAuthorInfo($Articl->recepieBy);
		?>
			<div class="col-sm-6 col-xs-12 col-md-4 mb-30">
            <?php if(isset($Articl->videoURL) && $Articl->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Articl->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit: none;}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $Articl->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $Articl->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" ></iframe></div>
  <?php else:?>
				<img src="<?php echo base_url().'media/upload/recipes/'.$Articl->FeaturedImage ?>" class="img-responsive  br1" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'">
                                
              
            <?php endif;?>
            
			<div class="post-title4">
            <?php if($cat) : ?>
            <a href="<?php echo base_url().'recipes/'.$cat->Url?>">
			<h5 class="lable-sty lnk"><?php  echo $cat->CategoryTitle;?></h5></a>
            <?php endif; ?>
			</div>
            <a href="<?php echo base_url().'recipe/'.$Articl->Url; ?>"><h3 class="featurettl"><?php echo $Articl->PageTitle ?></h3></a>
			<ul class="list-inline mt-0 mb-10">
				<li><a href="<?php echo base_url().'recipe/'.$Articl->Url; ?>" style="color: #000;">Read More <span class="material-icons">east</span></a></li>
			</ul>
		</div>
			
			<?php
			if($count%3==0){ echo "<div class='clearfix'></div>";}
			endforeach;
			endif;
		}
}