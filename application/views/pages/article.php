<?php $this->load->view('templates/header'); ?>

<?php $uid=$this->session->userdata('User_id'); 

$cat = $this->M_Category->getCategoryInfo_art($Article->category);?>
<!-- /21721917858/Carmesi-970x90 -->


<style type="text/css">
#st-1 {
    text-align: left;
}
	.soc
	{
		width: 45px;
	}
	.ytp-watermark{ display:none;}
	.artrmsp{ font-size:26px;line-height: 32px;}
	.artrmsp:after{ height: 2px;
    display: block;
    width: 100%;
    background: #000;
    content: '';
    margin: 0 0 10px 0;}
	.blackbg{background: #000;
    color: #fff;padding: 5px 10px 0 10px;}
blockquote{
    padding: 20px 30px;
    font-size: inherit;
    border-left: 0;
    background: #000;
    color: #fff;
}	
	.artrmsp span:nth-child(2){ padding-left:10px;}
	.nb{background-color: #ffffff !important;
    color: #292b28 !important;
    margin-right: 10px !important;
    font-size: 14px !IMPORTANT;
    line-height: 20px;
    text-transform: capitalize;
    border: 1px solid #eff1ec !important;
    padding: 10px 30px !important;
    min-width: 140px;}
</style>






<div class="main">
	<div class="container">
    <div class="mt-10 ad_block text-center" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear" >
              <div class="ttl">Advertisement</div>
<div id='div-gpt-ad-1544174697220-0' style='height:90px; width:970px; display: block; margin-left: auto; margin-right: auto;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1544174697220-0'); });
</script>
</div>
</div>
		<div class="row">
			<div class="col-md-8 mt-30 artcontent" style="padding-right: 30px;">
            <h4 class="title1">WHAT'S NEW</h4>
            
            <div class="row">
                <div class="col-md-12">
             <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
                <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0" allowfullscreen></iframe></div>
 
                
  
				<?php elseif ($Article->FeaturedImage): ?>
					<img src="<?php echo base_url().'media/upload/article/main/'.$Article->FeaturedImage ?>" alt="<?php echo $Article->imgalt; ?>" class="img-responsive br1">
                <?php if($cat):?>    
				<div class="post-title4"> <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php echo $cat->CategoryTitle;?></h5></a></div>
                <?php endif; ?>
				<?php endif; ?>
				
				<h1 class="headproh3"><?php echo $Article->PageTitle; ?></h1>
				
                
                
                
				<div class="p-0 ">
                <ul class="list-inline mt-10 mb-10">
							<li><img src="<?php echo base_url().'media/upload/author/'.$Article->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$Article->id;?>'"  class="img-responsive sml-pro-pic3"></li>
							<li class="pronam" onclick="location.href='<?php echo base_url().'author/'.$Article->id;?>'" > <?php echo substr($Article->FirstName.' '.$Article->LastName,0,15); ?></li>
                            
                            
							
						<?php /*	<li><i class="icon-eye pull-left"></i><span class="num"><?php echo $Article->Views;?></span></li>
<?php $savecl=''; $un=''; 
if($this->M_Article->isMysaveArticle($Article->idArticle)){	$savecl='art_saved'; $un='un';  } ?>
					<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>" id="bookm<?php echo $Article->idArticle;?>"  onclick="<?php echo $un;?>SaveArticle(<?php echo $Article->idArticle;?>)"></i></a></li> */?>
					<li  class="pronam"><?php echo date("F d, Y", strtotime($Article->postTime));?></li>

						</ul>
                    
                    <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons mb-20"></div><!-- ShareThis END -->
					<div class="decshome">
					
					 <?php
                 $content = $Article->Article_post;
                 $count = substr_count( $content, '</p>' ); 
                 $insert_after = 5;
                 
                 	if( substr_count( $content, '</p>' ) > $insert_after ):
						$closing_p_tag = '</p>';
                    	$contents = explode( '</p>', $content );
                    	$p_tag_counter = 1;
                    	foreach( $contents as $content ):
                    		echo $content;
								if( $p_tag_counter == $insert_after ):
								
								?>
							<div id='div-gpt-ad-1586865670864-0' style='width: 728px; height: 90px;'>
								<script>
								 googletag.cmd.push(function() { 
								 	googletag.display('div-gpt-ad-1586865670864-0'); 
								 });
								 </script>
							</div>
								<?php
								endif;
                    		echo $closing_p_tag;
                    		$p_tag_counter++;
                    	endforeach;
                    
					endif;
					
				
				 ?>
                    
					</div>
                    <?php if($Article->Tags):?>
					<div class="">
						<?php $tags = explode(',', $Article->Tags) ?>
						<?php foreach ($tags as $tag): ?>
                        <a href="<?php echo base_url()."tag/".urlencode(str_replace(' ','-',trim ($tag))); ?>"><button class="btn btn-white nb" ><?php echo $tag ?></button></a>
							
						<?php endforeach ?>
					</div>
                    <?php endif;?>
                    
                <div class="row">
               <div class="col-sm-12 mb-30"><div style=" border-bottom:2px solid #000"></div></div>
						
					
					<div class="col-md-2">
						<img src="<?php echo base_url()."media/upload/author/".$Article->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$Article->id;?>'" class="img-responsive br1 lnk">
					</div>
					<div class="col-md-10">
                    
                    <a href="<?php echo base_url().'author/'.$Article->id;?>"><h5 class="ar_author mb-0 lnk" >AUTHOR :<?php echo $Article->FirstName.' '.$Article->LastName; ?></h5></a>
					<p class="ar_authordcs"><?php echo $Article->About; ?></p>
				
						
					</div>
                
                </div>
                
                
                
                    <div class="mt-30 ad_block text-center" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear" >
              <div class="ttl">Advertisement</div>
<!-- /21721917858/Unit4-728x90-bottombar -->
<div id='div-gpt-ad-1544174814618-0' style='height:90px; width:728px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1544174814618-0'); });
</script>
				</div>
</div>


                    
                    <ol class="list-inline mt-30 hidden">
					   <li>
					   	<a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo current_url();?>')" ><div class="fbsharebtn"><i class="fa fa-facebook-f"></i></div></a>
					   </li>
					   <li>
					   	<a href="javascript:void(0);" onclick="window.open('http://twitter.com/share?url=<?php echo current_url();?>&text=<?php echo $Article->PageTitle; ?>')" ><div class="twtsharebtn"><i class="fa fa-twitter"></i></div></a>
					   </li>
					   <li>
					   	<a  href="javascript:void(0);" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php echo current_url();?>&media=<?php echo base_url();?>media/upload/article/<?php echo $Article->FeaturedImage; ?>&description=<?php echo $Article->PageTitle; ?>')" ><div class="pintsharebtn"><i class="fa fa-pinterest"></i></div></a>
					   </li>
					</ol>
                    
                    
					
                    
                    
                    
                    
                    <div class="row">
					<div class="col-md-12" id="Review">
						<div class="fb-comments" data-href="<?php echo current_url();?>" data-width="600" data-numposts="2" style="width: 100% !important;"></div></div>
					</div>
						
</div>
</div>
</div>
			</div>
			   
			<div class="col-md-4 mt-30 sidebar" style="padding-left: 20px;">
				<h4 class="title1  p-0-5">trending</h4>
				
				<?php for($i=1; $i<13; $i++):
				if(isset(${'Home' . $i})):
				
				
				if(isset( ${'Home' . $i}->idArticle)):
				 $Article=${'Home' . $i};
				$cat = $this->M_Category->getCategoryInfo_art($Article->category);
				$author = $this->M_Author->getAuthorInfo($Article->Author);
				?>
					 <div class="trending-sec">
                            <div class="col-sm-5 p-0-5">
                                <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" alt="<?php echo $Article->imgalt; ?>" class="img-responsive br1 lnk" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
             
            <?php if($cat):?>
               <div class="post-title4">
                 <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php echo $cat->CategoryTitle; ?></h5></a>
                 </div>
           <?php endif;?>
                            </div>
                            <div class="col-sm-7" style="padding-right: 0;">
                                <a href="<?php echo base_url().'article/'.$Article->Url; ?>"><h4 class="sidenm"><?php echo $Article->PageTitle ?></h4></a>
                                <ul class="list-inline mt-5">
                                    <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive lnk sml-pro-pic3"> <span class="pronam">  <?php echo date("F d, Y", strtotime($Article->postTime));?></span></li>
                                     
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
	            <?php endif;?>
                
                
                
                
        <?php if(isset( ${'Home' . $i}->idRecepie)): 
		$Articl =${'Home' . $i};
        $cat = $this->M_Category->getCategoryInfo_rec($Articl->Category);
		$author = $this->M_Author->getAuthorInfo($Articl->recepieBy);
		?>
        <div class="trending-sec">
                            <div class="col-sm-5 p-0-5">
                                <img src="<?php echo base_url().'media/upload/recipes/'.$Articl->FeaturedImage ?>" alt="<?php echo $Articl->imgalt; ?>" class="img-responsive br1 lnk" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'">
             
            <?php if($cat):?>
               <div class="post-title4">
                 <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php echo $cat->CategoryTitle; ?></h5></a>
                 </div>
           <?php endif;?>
                            </div>
                            <div class="col-sm-7" style="padding-right: 0;">
                                <a href="<?php echo base_url().'recipe/'.$Articl->Url; ?>"><h4 class="sidenm"><?php echo $Articl->PageTitle ?></h4></a>
                                <ul class="list-inline mt-5">
                                    <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive lnk sml-pro-pic3">  <span class="pronam">  <?php echo date("F d, Y", strtotime($Articl->postTime));?></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        
                        
                        <?php endif;endif;endfor;?>
                           
				
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
          <div id='div-gpt-ad-1586865627379-0' style='width: 300px; height: 500px; display: block; margin-left: auto; margin-right: auto;'>
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1586865627379-0'); });
  </script>
</div>
        </div>
                               
                               
                               
 
				<div class="clearfix mt-40"></div>
				<div class="cumuntiybg mt-30">
					<h4 class="text-center titar mb-0">Be a Vegan First Informer</h4>
					<h5 class="text-center txar" >Send us buzzworthy news and updates</h5>
					<div class="text-center">
						<button class="btn btn-success coolbtn" style="letter-spacing: 1px;" data-toggle="modal" data-target="#reg_popup">Write to us</button>
					</div>
				</div>
				<div class="clearfix"></div>  
			</div>
		</div>
        <?php if($Related):?>
        
		<div class="row" >
        <div class="col-xs-12"><h4 class="title1 mt-30">related</h4></div>
            
			<?php
			$count=0;
			
			 foreach ($Related as $Articler):
			 foreach ($Articler as $Article):
			 $count++;
			 if($count < 9):
			  ?>
				<?php 	
					$cat = $this->M_Category->getCategoryInfo_art($Article->category);
					$author = $this->M_Author->getAuthorInfo($Article->Author);
				?>
				<div class="col-sm-3">
						<img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" alt="<?php echo $Article->imgalt; ?>" class="img-responsive br1 lnk" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
            <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <i class="icon-social-youtube videoplay" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'"></i>
            <?php endif;?>
                        <?php if($cat):?>
						<div class="post-title4">
                        <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php echo $cat->CategoryTitle ?></h5></a>
						</div>
                        <?php endif;?>
                        <a href="<?php echo base_url().'article/'.$Article->Url; ?>"><h3 class="featurettl"><?php echo $Article->PageTitle ?></h3></a>
					
                    <ul class="list-inline mt-10 mb-30">
								<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive lnk sml-pro-pic3"></li>
								<li>
								<a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,20); ?></a> | <span class="pronam"><?php echo date("F d, Y", strtotime($Article->postTime));?></span>
								</li>
							
							</ul>
                    
				</div>
                <?php if($count==4):?>
                <div class="clearfix"></div>
                <?php endif;?>
			<?php endif; endforeach; endforeach; ?>
            
		</div>
        <?php  endif; ?>
	</div>
    <div class="clearfix mt-30"></div>
<?php $this->load->view('templates/footer'); ?>
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

