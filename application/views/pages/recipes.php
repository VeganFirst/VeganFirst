<?php $this->load->view('templates/header'); 
$this->load->model("m_author");
$this->m_author= new m_author();
 $uid=$this->session->userdata('User_id'); 
 $author = $this->M_Author->getAuthorInfo($Recipe->recepieBy);

//print_r($Recipe);
?>
<link href="<?php echo base_url();?>assetsNew/css/jquery.skidder.css" rel="stylesheet"/> 
   <style type="text/css">
   .soc {   width: 45px;border-radius: 35% 35% 35% 35%;}
   .jvc {color: #EC785B;font-family: Cervo;font-size: 25px;line-height: 32px;text-align: center;}
   .skidder-viewport .skidder-wrapper .skidder-slide{ opacity: 1;}
   #st-1 {
    text-align: left;
}
   </style>
   
    <div class="main">
		<div class="container">
		    <div class="mt-0 ad_block text-center" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear" >
              <div class="ttl">Advertisement</div>
                <div id='div-gpt-ad-1544174697220-0' style='height:90px; width:970px; display: block; margin-left: auto; margin-right: auto;'>
                <script>
                //googletag.cmd.push(function() { googletag.display('div-gpt-ad-1544174697220-0'); });
                </script>
                </div>
            </div>
			<div class="row">
				<div class="col-md-8 mt-30 artcontent" style="padding-right: 30px;">
				     <h4 class="title1">WHAT'S NEW</h4>
					
                     <?php if(isset($Recipe->videoURL) && $Recipe->videoURL!=NULL):?>
                    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Recipe->videoURL; ?>?controls=0&amp;showinfo=0" allowfullscreen></iframe></div>
  
                    
                    <?php elseif ($Recipe->FeaturedImage): ?>
					<img src="<?php echo base_url().'media/upload/recipes/'.$Recipe->FeaturedImage ?>" class="img-responsive br1">
                   <?php $cat = $this->M_Category->getCategoryInfo_rec($Recipe->Category); ?>
            <?php if($cat):?>       
            <div class="post-titlep2 lnk"><a href="<?php echo base_url().'recipes/'.$cat->Url?>"><h5 class="lable-styp2"><?php echo $cat->CategoryTitle;?></h5></a></div>
            <?php endif;?>
            <?php endif;?>
            
            <h1 class="headproh3"><?php echo $Recipe->PageTitle;?></h1>

				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12 mt-10">
                    <ul class="list-inline mt-10 mb-10">
							<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
							<li class="pronam" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" ><?php echo substr($author->FirstName.' '.$author->LastName,0,15); ?></li>
							<li  class="pronam"><?php echo date("F d, Y", strtotime($Recipe->postTime));?></li>
							
 
						</ul>
                    
                     <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons mb-20"></div><!-- ShareThis END -->
						      <div class="decshome">
                              <?php echo $Recipe->ShortDesc;?>
                              </div>
                              
                              <div class="decshome row mt-10 mb-20">
                              <div class="col-sm-12">
                              <h3 style="margin: 10px 0;">Preparation</h3> 
                              </div>
                              <?php if($Recipe->PrepTime):?>
                              <div class="col-sm-4 recp_prep">
                              <img src="<?php echo base_url().'assetsNew/img/clock.png'?>" />
                              <p class="titlercp">Prep Time</p>
                              <p class="tme"><?php echo $Recipe->PrepTime; ?></p>                               
                              </div>
                              <?php endif;?>
                              <?php if($Recipe->CookTime):?>
                              <div class="col-sm-4 recp_prep">
                              <img src="<?php echo base_url().'assetsNew/img/clock.png'?>" />
                              <p class="titlercp">Cook Time</p>
                              <p class="tme"><?php echo $Recipe->CookTime; ?></p>                               
                              </div>
                              <?php endif;?>
                              <?php if($Recipe->ReadyIn):?>
                              <div class="col-sm-4 recp_prep">
                              <img src="<?php echo base_url().'assetsNew/img/clock.png'?>" />
                              <p class="titlercp">Total Time</p>
                              <p class="tme"><?php echo $Recipe->ReadyIn; ?></p>                               
                              </div>
                              <?php endif;?>
                              </div>
                                <div class="clearfix"></div>
                              <div class="decshome row mb-20">
                              <div class="col-sm-12">
                              <h3 style="margin: 10px 0;">Ingredients</h3> 
                              </div>
                              <div class="col-sm-12">
                              <?php $inc=json_decode($Recipe->Ingredients); 
                              if($inc):

							foreach($inc as $incr)

							{ 
							if(trim($incr)):
							?>
                            
                            <p><img src="../assetsNew/img/vegan.png" style="    max-width: 35px;padding-right: 15px;"><?php echo $incr; ?></p>
                            <?php endif; } endif; ?>
                              </div>
                              </div>  
                                
                                
                                
                                <div class="clearfix"></div>
                                
                                <div class="decshome">
								<?php echo $Recipe->RecepieDetail;?>
								</div>
                                
                                <?php if($Recipe->HashTags):?>
								<div class="mb-50">
								 <?php $Tag=explode(',',$Recipe->HashTags);
								 foreach($Tag as $tag):	 
								 ?>	
                                 <a href="<?php echo base_url().'tag/'.str_replace(' ','-',trim($tag)); ?>"><button class="btn btn-white nb nbm"><?php echo $tag;?></button></a>
                                    <?php endforeach;?>
								</div>
                                <?php endif;?>
                                
                    <div class="clearfix mt-20"></div>
                    <ol class="list-inline">
                    <li style="padding: 0 5px;">
					   	<a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo current_url();?>')" ><div class="fbsharebtn"><i class="fa fa-facebook-f"></i></div></a>
					   </li>
					   <li style="padding: 0 5px;">
					   	<a href="javascript:void(0);" onclick="window.open('http://twitter.com/share?url=<?php echo current_url();?>&text=<?php echo $Recipe->PageTitle; ?>')" ><div class="twtsharebtn"><i class="fa fa-twitter"></i></div></a>
					   </li>
					   <li style="padding: 0 5px;">
					   	<a href="javascript:void(0);" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php echo current_url();?>&media=<?php echo base_url();?>media/upload/recipe/<?php echo $Recipe->FeaturedImage; ?>&description=<?php echo $Recipe->PageTitle; ?>')" ><div class="pintsharebtn"><i class="fa fa-pinterest"></i></div></a>
					   </li>
                    </ol>            
					
					
                    
                    <div class=" clearfix mt-20">
						<h4 class="title1">AUTHOR</h4>
					</div>
					<div class="col-md-3 p-0">
						<img src="<?php echo base_url()."media/upload/author/".$author->Picture;?>" class="img-responsive br1 lnk" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'">
					</div>
					<div class="col-md-9">
                    <a href="<?php echo base_url().'author/'.$author->id;?>">
						<h5 class="ar_author mb-0 lnk">
							<?php echo $author->FirstName.' '.$author->LastName; ?>
						</h5></a>
						<p class="ar_authordcs"><?php echo $author->About; ?></p>
						
						
					</div>
                    
                    
                    <div class="clearfix mt-20"></div>
                    <div class="row">
					<div class="col-md-12" id="Review">
						<div class="fb-comments" data-href="<?php echo current_url();?>" data-width="600" data-numposts="2" style="width: 100% !important;"></div>
					</div></div>
                    
                    
                    <div class="clearfix mt-40"></div>
                    <!--<div class="row">
					<div class="col-md-12">
                    
                    <h4 class="title1  p-0-5">Top recipe contributors</h4>
						<div class="slideshow" style="height: 0;">
                        <?php if($TopCon):
						foreach($TopCon as $con):
                       $cont = $this->M_Author->getAuthorInfo($con->recepieBy);?>
                      <div class="slide">                      	
						<img src="<?php echo base_url()?>media/upload/author/<?php echo $cont->Picture;?>" class="br320 lnk" title="<?php echo $cont->FirstName.' '.$cont->LastName;?>"  onclick="location.href='<?php echo base_url().'author/'.$cont->id;?>'">
                        
                      </div>
                      <?php endforeach; endif;?>
                      
                    </div>
                        
                        
					</div></div> -->
                    
						   </div>
				</div>	
				
				<div class="mt-30 ad_block text-center" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear" >
                          <div class="ttl">Advertisement</div>
                                <!-- /21721917858/Unit4-728x90-bottombar -->
                                <div id='div-gpt-ad-1544174814618-0' style='height:90px; width:728px;'>
                                <script>
                                //googletag.cmd.push(function() { googletag.display('div-gpt-ad-1544174814618-0'); });
                                </script>
                        	</div>
                        </div>
					</div>                

						
					<div class="col-md-4 mt-30 sidebar" style="padding-left: 20px;">
					
					<div class="row">
                    <?php if($Related):?>
					<h4 class="title1  p-0-5">Related recipes</h4>
                    
                    <?php
					$count=0;
					foreach($Related as $reciepes):
					
					foreach($reciepes as $reciepe):
					$count++;
					
					if($count < 16):
					$cat = $this->M_Category->getCategoryInfo_rec($reciepe->Category);
					$author = $this->M_Author->getAuthorInfo($reciepe->recepieBy);
					
					?>
						<div class="trending-sec">
							<div class="col-sm-5 p-0-5">
								<img src="<?php echo base_url().'media/upload/recipes/'.$reciepe->FeaturedImage ?>"  onclick="location.href='<?php echo base_url().'recipe/'.$reciepe->Url; ?>'" class="img-responsive br1 lnk">

            <?php if(isset($reciepe->videoURL) && $reciepe->videoURL!=NULL):?>
            <i class="icon-social-youtube videoplay" onclick="location.href='<?php echo base_url().'recipe/'.$reciepe->Url; ?>'" ></i>
            <?php endif;?>
                                <?php if($cat) : ?>
                                <div class="post-title4">
                            <a href="<?php echo base_url().'recipes/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php  echo $cat->CategoryTitle;?></h5></a>
										</div>
                                  <?php endif; ?>
							</div>
							<div class="col-sm-7" style="padding-right:0;">
                            <a href="<?php echo base_url().'recipe/'.$reciepe->Url; ?>"><h4 class="sidenm"><?php echo $reciepe->PageTitle ?></h4></a>
								<ul class="list-inline mt-5">
									<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive .sml-pro-pic3 lnk">  <span class="pronam"> | <?php echo date("F d, Y", strtotime($reciepe->postTime));?></span>
										
									</li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
                        
                        <?php endif; endforeach;?>
					<?php endforeach;?>
                    <?php endif;?>
                    
                    <div class="col-md-12 mt-40" style="background:#6CBD45">
                			<h2 class="newsltrh1 mt-60 white">Support Our Cause</h2>
                			<p class="newsdecs white">Suscribe to our Updates</p>
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
                                            <button type="submit" class="btn nlbtn" style="border:1px solid #fff">Submit</button>
                						</div>
                                        
                                        <div class="text-center resp white"></div>
                                   </div>     
                                  
                					
                				</div>
                			</form>
                		</div>
		<div class="clearfix"></div>
						<div class="ad_block text-center mt-50">
                          <div class="ttl">Advertisement</div>
                          <div id="div-gpt-ad-1586865627379-0" style="width: 300px; height: 500px; display: block; margin-left: auto; margin-right: auto;">
                          <script>
                            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1586865627379-0'); });
                          </script>
                        </div>
                        </div>
						
						<div class="clearfix"></div>
					</div>
				</div>
					<!--end trending-->
				 </div>
		</div>
    <div class="clearfix mb-20"></div>            
	<?php //$this->load->view('templates/footer_nl');
	$this->load->view('templates/footer'); ?>
	
    <script src="<?php echo base_url();?>assetsNew/js/imagesloaded.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assetsNew/js/smartresize.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assetsNew/js/jquery.skidder.js" type="text/javascript"></script>
    <script>
    $('.slideshow').each( function() {
      var $slideshow = $(this);
      $slideshow.imagesLoaded( function() {
        $slideshow.skidder({
          slideClass    : '.slide',
          animationType : 'css',
          scaleSlides   : true,
          maxWidth : 120,
          maxHeight: 120,
          paging        : true,
          autoPaging    : true,
          pagingWrapper : ".skidder-pager",
          pagingElement : ".skidder-pager-dot",
          swiping       : true,
          leftaligned   : false,
          cycle         : true,
          jumpback      : true,
          speed         : 1000,
          autoplay      : true,
          autoplayResume: true,
          interval      : 2000,
          transition    : "slide",
          afterSliding  : function() {},
          afterInit     : function() {}
        });
      });
    });


    $(window).smartresize(function(){
      $('.slideshow').skidder('resize');
    });

  </script>
  
<script type="text/javascript">
$(document).ready(function() {
$sidebar = $(".socialfix");
$window = $(window);

$window.scroll(function () {
	console.log($window.scrollTop());
    if ($window.scrollTop() > 630) {
       $sidebar.addClass('fixed_soc');
	   
    } else if($window.scrollTop()< 625) {
       $sidebar.removeClass('fixed_soc');
    }
});
});
</script>