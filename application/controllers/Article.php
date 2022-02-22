<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set("display_errors",1);
error_reporting(E_ALL);
class Article extends CI_Controller 
{
	public $M_Article;
	public function __construct() 
	{
		parent::__construct();
		$this->load->model("M_Article");
		$this->M_Article = new M_Article();
		$this->load->model("M_Site");
		$this->M_Site = new M_Site();		
		$this->load->model("M_Category");
		$this->M_Category = new M_Category();
		$this->load->model("M_Author");
		$this->M_Author = new M_Author();
		$this->load->model("M_Recipes");
		$this->M_Recipes = new M_Recipes();
	}
	public function index()
	{
		show_404();
	}
	public function view($page = 'home')
	{
		$data= $this->M_Site->getHomeRelated();
                $data['Article']= $this->M_Article->getArticle($page);
				$data['HomeTop']=$this->M_Site->getAddConfig('Home/top');
		if($data['Article'])
		{
			if($data['Article']->MetaTitle)
			{
				$data['PageTitle']=$data['Article']->MetaTitle;
				$data['Fb_title']=$data['Article']->MetaTitle;
				$data['Fb_desc']=$data['Article']->MetaDescription;
				$data['MetaKeyword']=$data['Article']->MetaKeyword;
				$data['MetaDescription']=$data['Article']->MetaDescription;
				
			}
			else
			{
				$data['PageTitle']=$data['Article']->PageTitle;
				$data['MetaDescription']=$data['Article']->Article_desc;
				$data['Fb_title']=$data['Article']->PageTitle;
				$data['Fb_desc']=$data['Article']->Article_desc;
				
			}

                $data['TUrl']=base_url().'article/amp/'.$data['Article']->Url;
		$data['Fb_img']=base_url().'media/upload/article/main/'.$data['Article']->FeaturedImage;
		$data['Fb_author'] = $this->M_Author->getAuthorInfo($data['Article']->Author);
		$data['Adblock']=$this->M_Site->getAddConfig('Article/view')->addBlock;
                $data['canonical']=base_url().'article/'.$data['Article']->Url;
      		//




			if($data)
			{
				if($data['Article']->Tags):
				$data['Related']=$this->M_Article->byTags($data['Article']->Tags,$data['Article']->idArticle);
				else:
				$data['Related']=NULL;
				endif;
				
        if ($this->agent->is_mobile('ipad')) {
			$this->load->view('pages/article',$data);
		}
		elseif ($this->agent->is_mobile())
         {
             $this->load->view("mobile/article", $data);
         }
         else
        {
       		$this->load->view('pages/article',$data);
        }
				
			}
		}
		else
		{
			show_404();	
		}
	}


public function viewamp($page = 'home')
	{
		$data['Article']= $this->M_Article->getArticle($page);
		if($data['Article'])
		{
			if($data['Article']->MetaTitle)
			{
				$data['PageTitle']=$data['Article']->MetaTitle;
				$data['Fb_title']=$data['Article']->MetaTitle;
				$data['Fb_desc']=$data['Article']->MetaDescription;
				$data['MetaKeyword']=$data['Article']->MetaKeyword;
				$data['MetaDescription']=$data['Article']->MetaDescription;
				
			}
			else
			{
				$data['PageTitle']=$data['Article']->PageTitle;
				$data['MetaDescription']=$data['Article']->Article_desc;
				$data['Fb_title']=$data['Article']->PageTitle;
				$data['Fb_desc']=$data['Article']->Article_desc;
				
			}
		$data['Fb_img']=base_url().'media/upload/article/main/'.$data['Article']->FeaturedImage;
                $data['Fb_Thumb']=base_url().'media/upload/article/thumb/'.$data['Article']->FeaturedImage;
		$data['Fb_author'] = $this->M_Author->getAuthorInfo($data['Article']->Author);
		$data['Adblock']=$this->M_Site->getAddConfig('Article/view')->addBlock;
                $data['Curl']=base_url().'article/'.$data['Article']->Url;
                $data['postTime']=$data['Article']->postTime;

		   if($data)
			{
				if($data['Article']->Tags):
				$data['Related']=$this->M_Article->byTags($data['Article']->Tags,$data['Article']->idArticle);
				else:
				$data['Related']=NULL;
				endif;
				
        if ($this->agent->is_mobile('ipad')) {
			$this->load->view('pages/articleamp',$data);
		}
		elseif ($this->agent->is_mobile())
         {
             $this->load->view("mobile/articleamp", $data);
         }
         else
        {
       $this->load->view("mobile/articleamp", $data);
        }
				
			}
		}
		else
		{
			show_404();	
		}
	}
	public function preview($page = 'home')
	{
		$data['Article']= $this->M_Article->getArticlepre($page);
		if($data['Article'])
		if($data['Article'])
		{
			if($data['Article']->MetaTitle)
			{
				$data['PageTitle']=$data['Article']->MetaTitle;
				$data['Fb_title']=$data['Article']->MetaTitle;
				$data['Fb_desc']=$data['Article']->MetaDescription;
				$data['MetaKeyword']=$data['Article']->MetaKeyword;
				$data['MetaDescription']=$data['Article']->MetaDescription;
				
			}
			else
			{
				$data['PageTitle']=$data['Article']->PageTitle;
				$data['MetaDescription']=$data['Article']->Article_desc;
				$data['Fb_title']=$data['Article']->PageTitle;
				$data['Fb_desc']=$data['Article']->Article_desc;
				
			}
			$data['Fb_img']=base_url().'media/upload/article/'.$data['Article']->FeaturedImage;
		$data['Fb_author'] = $this->M_Author->getAuthorInfo($data['Article']->Author);
		$data['Adblock']=$this->M_Site->getAddConfig('Article/view')->addBlock;

			if($data)
			{
				if($data['Article']->Tags):
				$data['Related']=$this->M_Article->byTags($data['Article']->Tags,$data['Article']->idArticle);
				else:
				$data['Related']=NULL;
				endif;
				
        if ($this->agent->is_mobile('ipad')) {
			$this->load->view('pages/article',$data);
		}
		elseif ($this->agent->is_mobile())
         {
             $this->load->view("mobile/article", $data);
         }
         else
        {
       $this->load->view('pages/article',$data);
        }
				
			}
		}
		else
		{
			show_404();	
		}
	}
	public function author($page = 'home')
	{
		$data= $this->M_Article->getArticlebyAuthor($page);
		if($data)
		{
			if ($this->agent->is_mobile('ipad')) {
			$this->load->view('pages/article',$data);
		}
		elseif ($this->agent->is_mobile())
			 {
				 $this->load->view("mobile/article", $data);
			 }
			 else
			{
	
		   $this->load->view('pages/article',$data);
			}
		}
		else
		{
			show_404();	
		}
	}
	public function loadmore()
	{
		$limit = $this->input->get('limit');
	  	$offset = $this->input->get('offset');
	  	$cat = $this->input->get('cat');
		$order = $this->input->get('order');
		
		if($this->input->get('sub_cat')):
		$data['More'] = $this->M_Article->getArticlebySubCategory($this->input->get('sub_cat'),$limit,$offset,$order);
		
		else:
		
		$data['More'] = $this->M_Article->getMore($offset,$limit,$cat,$order);
		endif;
		if($data['More']):
		$count=0;
		foreach($data['More'] as $Article):
		$count++;
		$cat = $this->M_Category->getCategoryInfo_art($Article->category);
		$author = $this->M_Author->getAuthorInfo($Article->Author);

		echo $this->input->post('sub_cat');
		?>
		<div class="col-md-4 col-sm-6 col-xs-12 mb-30" data-aos="fade-up"  data-aos-easing="linear">
        <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=1&amp;showinfo=0" frameborder="0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit: none;}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $Article->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" allowfullscreen></iframe></div>
  <?php else:?>
				<img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" class="img-responsive  br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
           <?php endif;?>
				<div class="post-title4">
                <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty"><?php echo $cat->CategoryTitle ?></h5></a>
				</div>
                <a href="<?php echo base_url().'article/'.$Article->Url; ?>">
				<h3 class="featurettl"><?php echo $Article->PageTitle; ?></h3></a>
				<ul class="list-inline mt-0 mb-10">
								<li><a href="<?php echo base_url().'article/'.$Article->Url; ?>" style="color: #000;">Read More <span class="material-icons">east</span></a></li>
							</ul>
			</div>
		<?php
		if($count%3==0){ echo "<div class='clearfix'></div>";}
		endforeach;
		
		endif;
		
		
		//$data['offset'] =$offset +$limit;
		//$data['limit'] =$limit;
		//echo json_encode($data);
	}
	public function all()
	{
		$data['Articles']= $this->M_Article->getAllArticleFront();
$data['ArticlesPop']= $this->M_Article->getAllArticleFront_pop();
		if($data['Articles'])
		{
			$data['PageTitle']="All Article";
			$data['Fb_title']=SITE_NAME." All Article";
			$data['Fb_desc']=SITE_NAME." All Article";
			$data['Fb_img']="";
			$data['ArticleCatH']=$this->M_Site->getAddConfig('Article/catH')->addBlock;
			$data['AdblockCat']=$this->M_Site->getAddConfig('Article/cat')->addBlock;
			
				if ($this->agent->is_mobile('ipad')) {
					$this->load->view('pages/allArticle',$data);
				}
				elseif ($this->agent->is_mobile())
				 {
					 $this->load->view("mobile/allArticle", $data);
				 }
				 else
				{
				   $this->load->view('pages/allArticle',$data);
				}
		}
		else
		{
			show_404();	
		}
	}
	public function video()
	{
		$data['Articles']= $this->M_Article->getAllVideo();
		$data['ArticlesPop']= $this->M_Article->getAllVideo_pop();
		if($data['Articles'])
		{
			$seo= $this->m_site->getSeo('video');
				$data['MetaTitle']=$seo->MetaTitle;
				$data['MetaKeyword']=$seo->MetaKeyword;
				$data['MetaDescription']=$seo->MetaDescription;
					
			$data['Fb_img']="";
			$data['ArticleCatH']=$this->M_Site->getAddConfig('Article/catH')->addBlock;
			$data['AdblockCat']=$this->M_Site->getAddConfig('Article/cat')->addBlock;
			
				if ($this->agent->is_mobile('ipad')) {
					$this->load->view('pages/Video',$data);
				}
				elseif ($this->agent->is_mobile())
				 {
					 $this->load->view("mobile/Video", $data);
				 }
				 else
				{
				   $this->load->view('pages/Video',$data);
				}
		}
		else
		{
			show_404();	
		}
	}
	
	
	public function category($cat,$sub=NULL)
	{
		$cate=$data['cat']=$this->M_Category->getCategoryInfo_art_url($cat);
		if($cate)
		{
			$data['sub_cats'] = $this->M_Category->getArtSubcat($cate->id);
			if($sub):
			$data['CurentCat'] = $this->M_Category->getArtSubcatInfofromUrl($sub);
			$data['Articles']= $this->M_Article->getArticlebySubCategory($data['CurentCat']->id,9);
			$data['Editorials'] =$this->M_Category->getArtSubcatInfofromUrl($sub);
						
			else:
			$data['CurentCat'] = NULL;
			$data['Editorials'] = $this->M_Category->getCategoryInfo_art_url($cat);
			$data['Articles']= $this->M_Article->getArticlebyCategory($cate->id,9);
			$data['ArticlesPop']= $this->M_Article->getPopArticlebyCategory($cate->id);
			endif;
			if($cate)
			{
				if($cate->MetaTitle)
				{
					$data['PageTitle']=$cate->MetaTitle;
					$data['MetaKeyword']=$cate->MetaKeyword;
					$data['MetaDescription']=$cate->MetaDescription;
					$data['Fb_title']=$cate->MetaTitle;
					$data['Fb_desc']=$cate->MetaDescription;
					$data['Fb_img']="";
				}
				else
				{
					$data['PageTitle']=$cate->CategoryTitle;
					$data['Fb_title']=$cate->CategoryTitle;
					$data['Fb_desc']=$cate->catDesc;
					$data['Fb_img']="";
				}
				$data['Category']=$cate;
				

             $data['ArticleCatH']=$this->M_Site->getAddConfig('Article/catH')->addBlock;
			 $data['AdblockCat']=$this->M_Site->getAddConfig('Article/cat')->addBlock;

                   if ($this->agent->is_mobile('ipad')) {
					$this->load->view('pages/allArticle',$data);
					}
					elseif ($this->agent->is_mobile())
                   {
                         $this->load->view("mobile/allArticle", $data);
                   }
                   else
                   {
                        $this->load->view('pages/allArticle',$data);
                   }

			}
			else
			{
				show_404();	
			}
		}
	}


	public function loadmoreHome()
	{
		$limit = $this->input->post('limit');
	  	$offset = $this->input->post('offset');
	  	$cat = $this->input->post('cat');
		$order = $this->input->post('order');
		$temp = $this->input->post('temp');
		$data['More'] = $this->M_Article->getMore($offset,$limit,$cat,$order);
		if($data['More']):
		$count=0;
		foreach($data['More'] as $Article):
		$count++;
		
		
		$cat = $this->M_Category->getCategoryInfo_art($Article->category);
		
		$author = $this->M_Author->getAuthorInfo($Article->Author);

		if(isset($temp) && $temp=='nav'):
		?>
		<div class="col-md-4 col-sm-6 col-xs-12">
        <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit: none;}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $Article->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" frameborder="0" allowfullscreen></iframe></div>
  <?php else:?>
				<img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" class="img-responsive  br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
           <?php endif;?>
                <?php if($cat):?>
				<div class="post-title4">
                <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty"><?php echo $cat->CategoryTitle ?></h5></a>
				</div>
				<?php endif;?>
                <a href="<?php echo base_url().'article/'.$Article->Url; ?>">
				<h3 class="featurettl"><?php echo $Article->PageTitle; ?></h3></a>
				<p class="mb-0 mt-5"><?php echo date("F d, Y", strtotime($Article->postTime));?></p>
				
			</div>





		<?php else:?>	
		<div class="trending-sec">
                            <div class="col-sm-4 p-0-5">
							<?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit: none;}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $Article->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" frameborder="0" allowfullscreen></iframe></div>
  <?php else:?>
				
                                <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" alt="<?php echo $Article->imgalt; ?>" class="img-responsive br1 lnk" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
								<?php endif;?>
            	<?php if($cat):?>
               		<div class="post-title3x">
                 		<a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty-sidebar lnk br9"><?php echo $cat->CategoryTitle; ?></h5></a>
                 	</div>
           		<?php endif;?>
                            </div>
                            <div class="col-sm-7" >
                                <a href="<?php echo base_url().'article/'.$Article->Url; ?>"><h4 class="sidenm"><?php echo substr($Article->PageTitle,0,60) ?></h4></a>
                                <ul class="list-inline text-left mt-5">
                                    <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive lnk sml-pro-pic3">
                                    </li>
                                    <li><span class="pronam"><?php echo date("F d, Y", strtotime($Article->postTime));?></span></li>
              
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
		<?php
		endif;
		endforeach;
		
		endif;

	}
	

	
}