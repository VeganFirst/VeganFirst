<?php $this->load->view('mobile/header'); ?>


<style>
.pagin{ display:none;}
.pagin li{padding: 0;
    background: #dbdbdb;}
.instagram_feed .item{ width:calc(20% - 14px);float: left;margin:7px}
.insta_ttl{
    font-weight: 900;
    font-size: 32px;
    line-height: 36px;
    text-transform: uppercase;
    color: #292B28;
    margin: 0;
}
  .trending-sec {
  border-bottom: none;
  overflow: hidden;
  padding-bottom: 10px;
  margin-bottom: 10px;
  }
  .br_btm{border-bottom: 2px solid #000;
  margin-bottom: 20px;}
  .head_dyn .title1:after{display:none}
  .td-subcat-item a{ color:#000;font-weight:500;font-size: 14px;
  padding: 0 10px;}

.cover {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
 .td-subcat-item{padding:10px 0 0;} 
.ajax_content .sub:hover ul {
    display: block;
}    
.ajax_content .more_links{list-style: none;
    position: absolute;
    right: 30px;
    top: 30px;
    padding: 6px 0 8px;
    background-color: rgba(255,255,255,.95);
    z-index: 999;
    border-width: 0 1px 1px;
    border-color: #ededed;
    border-style: solid;
    display: none;}
#HomeSlider .owl-slide {
  position: relative;
  height: 100%;
  background-color: lightgray;
  }
  #HomeSlider .owl-slide .container{
  height: 100%;
  width: 100%;
  padding: 0;
  }
  #HomeSlider .owl-slide .featurettl {
  padding: 0 15px;
  }
  
  #HomeSlider .owl-slide .container:before{
  height: 100%;
  width: 100%;
  background-image: -webkit-gradient(linear, left bottom, left top, color-stop(9%, rgba(0, 0, 0, 0.69)), to(transparent));
  background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.69) 9%, transparent);
  -webkit-transition: all 325ms ease;
  transition: all 325ms ease;
  }
  #HomeSlider .owl-next{
  right: 25px;
  position: absolute;
  top: 50%;
  }
  #HomeSlider .lable-sty{ margin: 0;}
  #HomeSlider .owl-prev{
  transform: rotate(180deg);
  left: 25px;
  position: absolute;
  top: 50%;
  }
  #HomeSlider .owl-slide .container {
    height: 100%;
    width: 100%;
    padding: 0;
    position: absolute;
    top: 0;
}
#HomeSlider .static {
    position: absolute;
    /* right: 25%; */
    top: auto;
    bottom: 2rem;
}
 #HomeSlider .brand{position: absolute;
    top: 20%;
    left: 0;
    right: 0;
    text-align: center;}
  #HomeSlider .owl-prev i,
  #HomeSlider .owl-next i{color: #6cbd45;height: 36px;
  width: 36px;
  background: #fff;
  border-radius: 100%;padding: 7px;}
  #HomeSlider .owl-next i:after{ vertical-align:baseline}
  .cap1 {
  position: absolute;
  width: 100%;
  height: 100%;
  background: #fff;
  bottom: -100%;
  left: 0px;
  padding: 15px;
  transition: all .7s;
  color: #fff;
  text-align: center;
  border: 1px solid #dbdbdb;
  border-radius: 3px;
  }
  #HomeSlider  .owl-pagination{
  text-align: center;
  -webkit-tap-highlight-color: transparent;
  }
  #HomeSlider  .owl-page {display: inline-block;}
  #HomeSlider  .owl-page span{
  width: 10px;
  height: 10px;
  margin: 10px 5px 0;
  background: #D6D6D6;
  display: block;
  -webkit-backface-visibility: visible;
  transition: opacity .2s ease;
  border-radius: 30px;
  }
  #HomeSlider .owl-carousel .owl-item img {
       min-height: 200px;
}
  #HomeSlider  .owl-page.active span{
  background: #521E74;  
}
.fb_iframe_widget,
.fb_iframe_widget span,
.fb_iframe_widget span iframe[style] {
    width: 100% !important;
    min-width: 200px;
}
.brand h1{font-size: 16px !important;
    letter-spacing: 1px !important;
    color: #fff !important;
    text-transform: uppercase;
    font-weight: 800;}
.brand .title{color: #fff !important;}
.brand button{padding: 7px 20px;
    color: #fff;
    background: #521e74;
    border: none;}
     #VideoSlider .owl-next{
  right: 0;
  position: absolute;
  top: 33%;
  background:none;
  }
  #VideoSlider .owl-prev{
  transform: rotate(180deg);
  left: 0px;
  position: absolute;
  top: 33%;
  }
  #VideoSlider .owl-prev i,
  #VideoSlider .owl-next i{color: #6cbd45;height: 36px;
  width: 36px;
  background: #fff;
  border-radius: 100%;padding: 7px;}
  #VideoSlider .owl-next i:after{ vertical-align:baseline}
  #VideoSlider .owl-item{ background:#fff; padding:5px;}
  #VideoSlider .featurettl { padding:0 10px;min-height: 75px;
    line-height: 24px; font-size:16px;}

</style>

<div class="main">
		<div class="container">
	<?php if($HomeBanners):?>

<div class="row">
<div class="owl-carousel owl-theme mb-10" id="HomeSlider">
  <?php 
 foreach($HomeBanners as $banner):
    ?>
  <div class="owl-slide d-flex align-items-center cover">
  <img src="<?php echo base_url().'media/banner/'.$banner->imagename ?>" />
    <div class="container">
      <div class="brand">
                <?php echo (isset($banner->title))? '<h1 class="mt-50 mt-xs-10">'.$banner->title.'</h1>' : ''?>
                <?php echo (isset($banner->descr))? '<p class="title">'.$banner->descr.'</p>' : ''?>
                <a class="page-scroll" href="#Trps"><button>EXPLORE</button></a>
                        <div class="line hidden-xs"></div>
		
        </div>
    </div>
  </div>
  <!--/owl-slide-->
  <?php endforeach;?>
</div>
</div>

<?php endif;?>
        



        <div class="embed-responsive embed-responsive-16by9 mt-40">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v8hrbZqism4?controls=0&amp;showinfo=0" allowfullscreen=""></iframe></div>



			<div class="row">
            	<div class="col-xs-12">                	      
                    <h4 class="titlem mt-40">TRENDING NEWS</h4>
                    <div class="row">
                    <?php for($i=1; $i<3; $i++):
				if(isset(${'Home' . $i})):
				if(isset( ${'Home' . $i}->idArticle)):
				 $Trend=${'Home' . $i};
				$cat = $this->M_Category->getCategoryInfo_art($Trend->category);
				$author = $this->M_Author->getAuthorInfo($Trend->Author);
				?>
						<div class="col-sm-6 col-xs-12">
							<?php if(isset($Trend->videoURL) && $Trend->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Trend->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
  <?php else:?>
								<img src="<?php echo base_url().'media/upload/article/'.$Trend->FeaturedImage ?>" alt="<?php echo $Trend->imgalt;?>" onclick="location.href='<?php echo base_url().'article/'.$Trend->Url; ?>'" class="img-responsive br1">
                                

     
		 <?php endif;?>
                                <?php if($cat):?>
								<div class="post-title4">
                                <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty lnk" ><?php echo $cat->CategoryTitle; ?></h5></a>
								</div>
                                <?php endif;?>
                                <a href="<?php echo base_url().'article/'.$Trend->Url; ?>"><h3 class="featurettl"><?php echo $Trend->PageTitle ?></h3></a>
							
							<ul class="list-inline mt-10 mb-30">
								<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
								<li>
								<a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,20); ?></a> | <span class="pronam"><?php echo date("F d, Y", strtotime($Trend->postTime));?></span>
								</li>
								
															</ul>
						</div>
                <?php endif;?> 

                <?php if(isset( ${'Home' . $i}->idRecepie)): 
				$Articl =${'Home' . $i};
            $cat = $this->M_Category->getCategoryInfo_rec($Articl->Category);
			$author = $this->M_Author->getAuthorInfo($Articl->recepieBy);
					?>
                    <div class="col-sm-6 col-xs-12">
                    <?php if(isset($Articl->videoURL) && $Articl->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Trend->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
  <?php else:?>
								<img src="<?php echo base_url().'media/upload/recipes/'.$Articl->FeaturedImage ?>" alt="<?php echo $Articl->imgalt;?>"  class="img-responsive br1" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'">

       
            <?php endif;?>
            
								<div class="post-title4">
                                <?php if($cat) : ?>
                                <a href="<?php echo base_url().'recipes/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php  echo $cat->CategoryTitle;?></h5></a>
                                    <?php endif; ?>
								</div>
                                
                                <a href="<?php echo base_url().'recipe/'.$Articl->Url; ?>"><h3 class="featurettl"><?php echo $Articl->PageTitle ?></h3></a>
								<ul class="list-inline mt-10 mb-30">
									<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
									<li><a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,15); ?></a> | <span class="pronam"><?php echo date("F d, Y", strtotime($Articl->postTime));?></span></li>
								</ul>
							</div>                
                
                <?php endif; 
				endif;
				if($i%2==0):
				 ?>
                 <div class="clearfix"></div>
				<?php
				endif;
				 endfor;?> 
                    </div><!--row ends here-->                                 
                </div><!--content part ends here-->
            </div><!--row ends here-->

          <div class="row">
                 <div class="col-xs-12  p-0-20">
                    <div class="row">                                                
                        <h4 class="titlem">Trending Tags</h4>
                        <div>
                        
                        <?php 
							
						$tags = explode(',', $Tags->addBlock); ?>
						<?php foreach ($tags as $Tag): ?>
                        <a href="<?php echo base_url().'tag/'.str_replace(' ','-',trim($Tag)); ?>"><button class="btn btn-warning tagbtn" ><?php echo $Tag; ?></button></a>
						<?php endforeach ?>
                        
                        </div>

                        <div class="text-center  mt-30">
                            <?php echo $HomeMobile->addBlock; ?>
                        </div>
                        
                        <div class="clearfix mt-20"></div>
                        
                        <h4 class="titlem1">Ask our experts</h4>
                        <p class="txt1">And get all your answers.</p>
                        <?php if(isset($Columnist)):
					foreach($Columnist as $colm):
					?>
					<ul class="list-inline expline">
						<li><img src="<?php echo base_url().'media/upload/columnist/'.$colm->Picture;?>" class="img-responsive img-pro-ask"></li>
						<li><span class="expname"><?php echo $colm->Name;?></span><br><span class="expname2"><?php echo $colm->Speciality;?></span></li>
						<li class="pull-right"><a class="btn btn-warning golink" href="<?php echo base_url().'columnist/'.$colm->Url; ?>">ASK</a></li>
					</ul>
                    <?php endforeach;
					endif;?>
                        
                        <div class="clearfix"></div>
                        <div class="cumuntiybg mt-30">
                            <h4 class="text-center cumnityh4">Be A Recipe Contributor</h4>
                            <p class="text-center cumnityp"> Get a chance to get your recipes featured!</p>
                            <div class="text-center">
                                <button class="btn btn-success coolbtn"  onclick="location.href='<?php echo base_url().'contact-us'?>'" >Write to us</button>
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                       
                        
                    </div> 
           		</div><!--sidebar ends here-->
            </div>
            
            
            <div class="row  mt-40 mb-0" data-aos="fade-up"  data-aos-easing="linear">
      <div class="col-xs-12 bl1 ajax_content">
        <div class="head_dyn">
          <h4 class="title1 pull-left mt-0 mb-0">VOICE OF THE PEOPLE</h4>
            <div class="sub pull-right list-inline">
                <li class="td-subcat-item has_sub"><a href="#" data-td_id="bl1">MORE</a></li>
                <ul class="more_links" style="list-style: none;">
                 <li class="td-subcat-item"><a href="#" data-val="43" data-type="article" data-offset="0" data-td_id="bl1">OPINION PIECE</a></li>
              <li class="td-subcat-item"><a href="#" data-val="19" data-type="article" data-offset="0" data-td_id="bl1">CELEBS</a></li>
              <li class="td-subcat-item"><a href="#" data-val="9" data-type="article" data-offset="0" data-td_id="bl1">ETHICAL INVESTMENTS</a></li>
              <li class="td-subcat-item"><a href="#" class="cur-item" data-val="" data-type="article" data-offset="0" data-td_id="bl1">ETHICAL INVESTMENTS</a></li>
             
                </ul> 
                 
                 
                 
                 
            </div>
          
          
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-sm-12"><div class="br_btm"></div></div>
          <div class="col-sm-6 pr-30">
            <?php if(isset($Home1->idArticle)):?>
            <?php

			  $Article = $Home4;
              $cat = $this->M_Category->getCategoryInfo_art($Article->category);
              $author = $this->M_Author->getAuthorInfo($Article->Author);
              ?>
            <div class="row">
              <div class="col-md-12">
                <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit: none;}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $Article->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" allowfullscreen></iframe>
                </div>
                <?php else:?>
                <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" class="img-responsive lnk br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
                <?php endif;?>
                <div class="post-title4">
                  <h5 class="lable-sty lnk"  onclick="location.href='<?php echo base_url().'article/category/'.$cat->Url?>'"><?php echo $cat->CategoryTitle ?></h5>
                </div>
              </div>
              <div class="col-md-12">
                <div class="">
                  <h3 class="homettl mt-10" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'"><?php echo $Article->PageTitle ?></h3>
                  <ul class="list-inline mt-5">
                    <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" class="img-responsive lnk smll-pro-pic" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" ></li>
                    <li> <a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" class="pronm"><?php echo $author->FirstName.' '.$author->LastName ?></a> | <span class="pronam"><?php echo date("F d, Y", strtotime($Article->postTime));?></span></li>
                 </ul>
                  <p class="decshome"><?php echo substr($Article->Article_desc,0,300); ?>...</p>
                </div>
              </div>
            </div>
            <?php endif;?>
            <?php if(isset($Home4->idRecepie)):?>
            <?php 	
			  $Article = $Home4;
              $cat = $this->M_Category->getCategoryInfo_rec($Article->Category);
              $author = $this->M_Author->getAuthorInfo($Article->recepieBy);
              ?>
            <div class="row">
              <div class="col-md-12">
                <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit: none;}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $Article->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" allowfullscreen></iframe>
                </div>
                <?php else:?>
                <img src="<?php echo base_url().'media/upload/recipes/'.$Article->FeaturedImage ?>" class="img-responsive lnk br1" onclick="location.href='<?php echo base_url().'recipe/'.$Article->Url; ?>'">
                <?php endif;?>        
                <div class="post-title4">
                  <h5 class="lable-sty lnk" onclick="location.href='<?php echo base_url().'recipes/'.$cat->Url?>'"><?php echo $cat->CategoryTitle ?></h5>
                </div>
              </div>
              <div class="col-md-12">
                <div class="">
                  <h3 class="homettl mt-10" onclick="location.href='<?php echo base_url().'recipe/'.$Article->Url; ?>'"><?php echo $Article->PageTitle ?></h3>
                  <ul class="list-inline mt-5">
                    <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" class="img-responsive lnk smll-pro-pic" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"></li>
                    <li> <a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" class="pronm"><?php echo $author->FirstName.' '.$author->LastName ?></a> | <span class="pronam"><?php echo date("F d, Y", strtotime($Article->postTime));?></span></li>
                  </ul>
                  <p class="decshome"><?php echo substr($Article->ShortDesc,0,300); ?>...</p>
                </div>
              </div>
            </div>
            <?php endif;?>

            
            
            
            
          </div>
          <div class="col-sm-6 dynamic">
          </div>
          
        </div>
      </div>
      <div class="clearfix mb-30"></div>
      <div class="col-md-3">
        <div>
          <h4 class="title1 mt-0">Whats New!</h4>
          </div>
        <div class="cumuntiybg mt-20">
          <h4 class="text-center tit mt-0">Be a Vegan First Informer</h4>
          <h4 class="text-center tx"> Send us buzzworthy news and updates.</h4>
          <div class="text-center">
            <button class="btn btn-success coolbtn mt-0" onclick="location.href='<?php echo base_url().'contact-us'?>'" >Write to us</button>
          </div>
        </div>
        <div class="ad_block text-center mt-15">
          <div class="ttl">Advertisement</div>
          <img src="<?php echo Base_Url().'media/ads.jpg'?>" class="img-responsive mr0auto"  />
        </div>
        <div class="clearfix"></div>
        <div class="mt-20">
          <div class="fb-like" data-href="https://www.facebook.com/veganfirst/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
        </div>
      </div>
    </div>
            
            
            
            


    </div>
<div class="clearfix"></div>
 <?php $this->load->view('mobile/footer_nl'); ?>
 
 <div class="container pad0">
    <div class="row mt-20" data-aos="fade-up"  data-aos-easing="linear">
      <div class="col-md-9 pr-50">
        <h4 class="title1">HOMEGROWN</h4>
        <?php if(isset($Home5->idArticle)):?>
        <?php 	
		  $Article = $Home5;
          $cat = $this->M_Category->getCategoryInfo_art($Article->category);
          $author = $this->M_Author->getAuthorInfo($Article->Author);
          ?>
        <div class="row">
          <div class="col-md-6">
            <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit: none;}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $Article->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" allowfullscreen></iframe>
            </div>
            <?php else:?>
            <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" class="img-responsive lnk br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
            <?php endif;?>
            <div class="post-title4">
              <h5 class="lable-sty lnk"  onclick="location.href='<?php echo base_url().'article/category/'.$cat->Url?>'"><?php echo $cat->CategoryTitle ?></h5>
            </div>
          </div>
          <div class="col-md-6">
            
              <h3 class="homettl mt-0" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'"><?php echo $Article->PageTitle ?></h3>
              <ul class="list-inline mt-20">
                <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" class="img-responsive lnk smll-pro-pic" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" ></li>
                <li> <a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" class="pronm"><?php echo $author->FirstName.' '.$author->LastName ?></a> | <span class="pronam"><?php echo date("F d, Y", strtotime($Article->postTime));?></span></li>
              </ul>
              <p class="decshome"><?php echo substr($Article->Article_desc,0,300); ?>...</p>
            </div>
          
        </div>
        <?php endif;?>
        <?php if(isset($Home5->idRecepie)):?>
        <?php 
		  $Article = $Home5;	
          $cat = $this->M_Category->getCategoryInfo_rec($Article->Category);
          $author = $this->M_Author->getAuthorInfo($Article->recepieBy);
          ?>
        <div class="row">
          <div class="col-md-6">
            <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit: none;}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $Article->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" allowfullscreen></iframe>
            </div>
            <?php else:?>
            <img src="<?php echo base_url().'media/upload/recipes/'.$Article->FeaturedImage ?>" class="img-responsive lnk br1" onclick="location.href='<?php echo base_url().'recipe/'.$Article->Url; ?>'">
            <?php endif;?>        
            <div class="post-title4">
              <h5 class="lable-sty lnk" onclick="location.href='<?php echo base_url().'recipes/'.$cat->Url?>'"><?php echo $cat->CategoryTitle ?></h5>
            </div>
          </div>
          <div class="col-md-6">
            <div class="">
              <h3 class="homettl mt-0" onclick="location.href='<?php echo base_url().'recipe/'.$Article->Url; ?>'"><?php echo $Article->PageTitle ?></h3>
              <ul class="list-inline mt-20">
                <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" class="img-responsive lnk smll-pro-pic" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"></li>
                <li> <a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" class="pronm"><?php echo $author->FirstName.' '.$author->LastName ?></a> | <span class="pronam"><?php echo date("F d, Y", strtotime($Article->postTime));?></span></li>
              </ul>
              <p class="decshome"><?php echo substr($Article->ShortDesc,0,300); ?>...</p>
            </div>
          </div>
        </div>
        <?php endif;?>
      </div>
      <div class="col-md-3">
        <div class="ad_block text-center mt-40">
          <div class="ttl">Advertisement</div>
          <img src="<?php echo Base_Url().'media/ads.jpg'?>" class="img-responsive mr0auto"  />
        </div>
      </div>
    </div>
  </div>
 
 
 <?php if($Videos):?>
  <div class="mt-90 pt-50 pb-50 mb-0" data-aos="fade-up"  data-aos-easing="linear" style="background:#521E74">
    <div class="container">
      <h3 class="text-center title2hed white mt-0 mb-50">WATCH</h3>
      
      <div class="owl-carousel owl-theme" id="VideoSlider">
        <?php foreach($Videos as $video): ?>
        <div>
        <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video->videoURL; ?>?controls=1&amp;showinfo=0" frameborder="0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit:none}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $video->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $video->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" allowfullscreen></iframe>
          
        </div>
        <h2 class="featurettl"><?php echo $video->PageTitle; ?></h2>
        </div>
        <?php endforeach; ?>
      </div>
      
    </div>
  </div>
  <?php endif;?>
  
<div class="container">
<div class="ad_block text-center mt-90 mb-0" data-aos="fade-up"  data-aos-easing="linear">
   <div class="ttl">Advertisement</div>
  <img src="<?php echo Base_Url().'media/add_full.png'?>" class="img-responsive mr0auto"  />
</div>
</div>
<div class="container-fluid newsletterbg2 mt-90" data-aos="fade-up"  data-aos-easing="linear">
	<div class="container">
		<div class="col-md-11 mar0auto">
			<h2 class="newsltrh1 mt-60">Support Our Cause</h2>
			<p class="newsdecs">Suscribe to our Updates</p>
			 <form method="post" name="nfform" class="subform"  style="float: none;margin: 0 auto;">
				<div class="row">
					<div class="col-sm-12 form-inline mar0auto">
                    <div class="form-group mt-5 mb-20">
							<input type="text" name="name" placeholder="Name" class="form-control newsinpt other" required="required"  style="height:46px;" />
                            </div>
                            <div class="form-group mt-5 mb-20">
							<input type="email" name="email" placeholder="Email" class="form-control newsinpt other"  required="required" style="height:46px;" />
                            </div>
						<div class="form-group mt-5 mb-20">
							<input type="text" name="city" placeholder="City" class="form-control newsinpt other"  required="required" style="height:46px;" />
                            </div>
                       <div class="form-group mt-5 mb-20" style="margin-left:-5px;">
                            <button type="submit" class="btn nlbtn">Submit</button>
						</div>
                        
                        <div class="text-center resp white"></div>
                   </div>     
                  
					
				</div>
			</form>
		</div>
	</div>
</div>
<div class="row text-center mt-90 mb-50">
<div class="container">
	<!--<p class="text-center" style="font-weight: 500;">FOLLOW US ON INSTAGRAM</p>
	<h4 class="insta_ttl">#VeganFirst</h4>-->
<div id="instagram-feed" data-aos="fade-up"  data-aos-easing="linear" class="instagram_feed"></div>
</div>
</div>
 
 
 
 
 
 
 
 
 
   <?php $this->load->view('mobile/footer'); ?>
<script src="<?php echo base_url();?>assetsNew/js/owl.carousel.min.js" type="text/javascript"></script>
   <script type="text/javascript">
jQuery(document).ready(function(){
			jQuery('.related').owlCarousel({
				singleItem : true,
				slideSpeed : 500,
				pagination: true,
				navigation: true,
				
				
			});
			jQuery('#HomeSlider').owlCarousel({
				singleItem : true,
				slideSpeed : 500,
				pagination: true,
				
				
				
			});
		});

		jQuery("#HomeSlider").owlCarousel({
  		  	items: 1,
  		  	loop: true,
  		  	slideSpeed : 1000,
  		  	pagination: true,
  			navigation: false,
  			loop:true,
  			autoPlay:true,
  			responsiveRefreshRate : 1000,
  			transitionStyle : "fade",
  			autoplayTimeout:2000,
  			autoplayHoverPause:true,
  		  	navigationText:["<i class='icon-arrow-left'></i>","<i class='icon-arrow-right'></i>"]
  		});


        jQuery("#VideoSlider").owlCarousel({
  		  	items:1,
			merge:false,
			loop:true,
			margin:30,
			nav: true,
			lazyLoad:true,
			dots: false,
  			navText:["<i class='icon-arrow-left'></i>","<i class='icon-arrow-right'></i>"]
  		});
		
        jQuery('.related').owlCarousel({
            items: 2,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [991, 2],
            itemsTablet: [768, 4],
            itemsMobile: [479, 2],
			margin: 20,
            lazyLoad: true,
            pagination: false,
            navigation: true,
			autoPlay:true,
				responsiveRefreshRate : 200,
				transitionStyle : "fade",
				
				
        });
</script>
<script type="text/javascript">
  function showLoader(){
  	return '<div class="col-md-12 mt-10 text-center"><img src="<?php echo base_url();?>assetsNew/img/loading.gif"></di>';
  }
  function showContent(id,td,call='next')
  	{
  		if(parseInt(jQuery("."+td).find('.cur-item').attr('data-offset')) >=0)
      {
        jQuery("."+td).find('.dynamic').html(showLoader());
  		jQuery.ajax(
  		{
  			url: '<?php echo base_url()?>article/loadmoreHome',
  			data:{
  				offset : parseInt(jQuery("."+td).find('.cur-item').attr('data-offset')),
  				cat: id,
  				limit : 4,
  				order : 'postTime'
  			},
  			type: 'post',
  			//dataType: "json", 
  			success :function(data)
  			{
  				if(data)
  				{
            
  					jQuery("."+td).find('.dynamic').html();
  					jQuery("."+td).find('.dynamic').html( data);

           
  				}
  				else{ jQuery("."+td).find('.loadbtm').hide();
                jQuery("."+td).find('.prev ').hide();
          
           }
  			}
  		})
    }
  	}
  
  	
  jQuery(".td-subcat-item a").on("click",function(a){
  	a.preventDefault();
  	jQuery("."+jQuery(this).data("td_id")).find(".cur-item").removeClass("cur-item");
  	jQuery(this).addClass("cur-item");
    jQuery(this).attr('data-offset',0);
  	
  	jQuery("."+jQuery(this).data("td_id")).find('.dynamic').html(showContent(jQuery("."+jQuery(this).data("td_id")).find(".cur-item").data('val'),jQuery(this).data("td_id")));
  
  	//jQuery(".bl1").find('.dynamic').html(showContent(jQuery(".bl1").find(".cur-item").data('val')));
  	
  });

  jQuery(".ajax_content .pagin a.next").on("click",function(a){
  	a.preventDefault();
  	jQuery("."+jQuery(this).data("td_id")).find('.cur-item').attr('data-offset',parseInt(jQuery("."+jQuery(this).data("td_id")).find('.cur-item').attr('data-offset')) + 4);
    
  	jQuery("."+jQuery(this).data("td_id")).find('.dynamic').html(showContent(jQuery("."+jQuery(this).data("td_id")).find(".cur-item").data('val'),jQuery(this).data("td_id"),'next'));
  });

  jQuery(".ajax_content .pagin a.prev").on("click",function(a){
  	a.preventDefault();
    if(parseInt(jQuery("."+jQuery(this).data("td_id")).find('.cur-item').attr('data-offset')) >0)
    {
    jQuery("."+jQuery(this).data("td_id")).find('.cur-item').attr('data-offset',parseInt(jQuery("."+jQuery(this).data("td_id")).find('.cur-item').attr('data-offset')) - 4);
  	
  	jQuery("."+jQuery(this).data("td_id")).find('.dynamic').html(showContent(jQuery("."+jQuery(this).data("td_id")).find(".cur-item").data('val'),jQuery(this).data("td_id"),'prev'));
    }
  });

  




  
  jQuery(document).ready(function(){
  	jQuery(".bl1").find('.dynamic').html(showContent(jQuery(".bl1").find(".cur-item").data('val'),'bl1'));
  	jQuery(".bl2").find('.dynamic').html(showContent(jQuery(".bl2").find(".cur-item").data('val'),'bl2'));	
  	jQuery(".bl3").find('.dynamic').html(showContent(jQuery(".bl3").find(".cur-item").data('val'),'bl3'));	
  	jQuery(document).ready(function(){
			jQuery('#HomeSlider').owlCarousel({
				
				slideSpeed : 500,
				pagination: true,
				navigation: true,
				loop:true,
				autoPlay:true,
				responsiveRefreshRate : 1000,
				transitionStyle : "fade",
			});
		});		
  			
  		});

 </script>  
 <?php 

$query = $this->db->query("SELECT * FROM insta_access;");

foreach ($query->result() as $user)
{
        $in_user =  $user->id_user; // access attributes
		$token = $user->access_token; // or methods defined on the 'User' class
		$updated = $user->updated_on;
		$dt = date('Y-m-d');
		if($updated <= $dt)
		{
		
		
		}
}

?>
<script >
var rrrr="<?php echo $updated?>";
    (function($){
        $(window).on('load', function(){
			$.ajax({
				type: "GET",
				dataType: "jsonp",
				cache: false,
				url: "https://graph.instagram.com/<?php echo $in_user?>/media?fields=media_url,permalink,caption&limit=10&page=3&access_token=<?php echo $token?>",
				success: function(data) {
					for (var i = 0; i < data.data.length; i++) {
							$("#instagram-feed").append("<div class='item'><a target='_blank' href='" + data.data[i].permalink + "'><img src='" + data.data[i].media_url + "' class='img-responsive'></img></a></div>");
						}
					}
				
			});
			
			
        });
    })(jQuery);
</script>