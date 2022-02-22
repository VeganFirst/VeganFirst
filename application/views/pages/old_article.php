<?php $this->load->view('templates/header'); ?>

<?php $uid=$this->session->userdata('User_id'); 

$cat = $this->M_Category->getCategoryInfo_art($Article->category);?>
<!-- /21721917858/Carmesi-970x90 -->
<div id='div-gpt-ad-1544174697220-0' style='height:90px; width:970px; display: block; margin-left: auto; margin-right: auto;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1544174697220-0'); });
</script>
</div>
<style type="text/css">
	.soc
	{
		width: 45px;
	}
	.ytp-watermark{ display:none;}
</style>
<?php if(isset($HomeTop)):?>
<div class="text-center"><?php echo $HomeTop->addBlock;?></div>

<?php endif;?>


</div>



<div class="main">
	<div class="container">
		<div class="row">
			<div class="col-md-8 mt-30">
             <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
                <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0" allowfullscreen></iframe></div>
 
                
  
				<?php elseif ($Article->FeaturedImage): ?>
					<img src="<?php echo base_url().'media/upload/article/main/'.$Article->FeaturedImage ?>" alt="<?php echo $Article->imgalt; ?>" class="img-responsive br1">
                <?php if($cat):?>    
				<div class="post-titlep2 lnk"> <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-styp2"><?php echo $cat->CategoryTitle;?></h5></a></div>
                <?php endif; ?>
				<?php endif; ?>
				
				<h1 class="headproh3"><?php echo $Article->PageTitle; ?></h1>
				<div class="col-md-2 hidden-sm socialfix">
					
                    
					<ol class="list-inline mt-30">
					   <li class="mt-30">
					   	<a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo current_url();?>')" ><i class="icon-social-facebook artsoc fb"></i></a>
					   </li>
					   <li class="mt-30">
					   	<a href="javascript:void(0);" onclick="window.open('http://twitter.com/share?url=<?php echo current_url();?>&text=<?php echo $Article->PageTitle; ?>')" ><i class="icon-social-twitter artsoc twt"></i></a>
					   </li>
					   <li class="mt-30">
					   	<a  href="javascript:void(0);" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php echo current_url();?>&media=<?php echo base_url();?>media/upload/article/<?php echo $Article->FeaturedImage; ?>&description=<?php echo $Article->PageTitle; ?>')" ><i class="icon-social-pinterest artsoc prnt"></i></a>
					   </li>
					</ol>
				</div>
                
                <div class="col-md-2 visible-sm socialfix">
					
                    <ol class="list-inline mt-30 title1 col-sm-6">
					   <li>
					   	<a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo current_url();?>')" ><i class="icon-social-facebook artsoc fb"></i></a>
					   </li>
					   <li>
					   	<a href="javascript:void(0);" onclick="window.open('http://twitter.com/share?url=<?php echo current_url();?>&text=<?php echo $Article->PageTitle; ?>')" ><i class="icon-social-twitter artsoc twt"></i></a>
					   </li>
					   <li>
					   	<a  href="javascript:void(0);" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php echo current_url();?>&media=<?php echo base_url();?>media/upload/article/<?php echo $Article->FeaturedImage; ?>&description=<?php echo $Article->PageTitle; ?>')" ><i class="icon-social-pinterest artsoc prnt"></i></a>
					   </li>
					</ol>
                    <div class="clearfix"></div>
				</div>
                
				<div class="col-md-10 p-0 pull-right">
                <ul class="list-inline mt-10 mb-10">
							<li><img src="<?php echo base_url().'media/upload/author/'.$Article->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$Article->id;?>'"  class="img-responsive sml-pro-pic3"></li>
							<li class="pronam" onclick="location.href='<?php echo base_url().'author/'.$Article->id;?>'" ><?php echo substr($Article->FirstName.' '.$Article->LastName,0,15); ?></li>
							<!-- /21721917858/Unit1-336x280-RightSidebar -->

							<li><i class="icon-eye pull-left"></i><span class="num"><?php echo $Article->Views;?></span></li>
<?php $savecl=''; $un=''; 
if($this->M_Article->isMysaveArticle($Article->idArticle)){	$savecl='art_saved'; $un='un';  } ?>
					<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>" id="bookm<?php echo $Article->idArticle;?>"  onclick="<?php echo $un;?>SaveArticle(<?php echo $Article->idArticle;?>)"></i></a></li> 


						</ul>
                
					<div class="decshome">
					
					 <?php
                 $content = $Article->Article_post;
                 $count = substr_count( $content, '</p>' ); ?>
                 
                 <?php if($Article->idArticle<="100000001"):
                 
                 $insert_after = 5;
                 
                 if( substr_count( $content, '</p>' ) > $insert_after ):
                    
                    	$closing_p_tag = '</p>';
                    	$contents = explode( '</p>', $content );
                    	
                    	$p_tag_counter = 1;
                    	foreach( $contents as $content )
                    	{
                    		echo $content;
                     
                    		if( $p_tag_counter == $insert_after )
                    		{
                    		?>
                                           <div id='div-gpt-ad-1586865670864-0' style='width: 728px; height: 90px;'>

                                              <script>
                                            
                                                googletag.cmd.push(function() { googletag.display('div-gpt-ad-1586865670864-0'); });
                                            
                                              </script>
                                            
                                            </div>
                    		<?
                    		}
                    		echo $closing_p_tag;
                    		$p_tag_counter++;
                    	}
                    endif;
                else:
                                  
                echo $Article->Article_post; 
                     
                 endif;?>
                    
					</div>
                    <?php if($Article->Tags):?>
					<div class="">
						<?php $tags = explode(',', $Article->Tags) ?>
						<?php foreach ($tags as $tag): ?>
                        <a href="<?php echo base_url()."tag/".urlencode(str_replace(' ','-',trim ($tag))); ?>"><button class="btn btn-white nb" ><?php echo $tag ?></button></a>
							
						<?php endforeach ?>
					</div>
                    <?php endif;?>
                    
                
                    
                    <ol class="list-inline mt-30">
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
                    
                    
					<div class=" clearfix mt-20">
						<h4 class="title1">AUTHOR</h4>
					</div>
					<div class="col-md-3 p-0">
						<img src="<?php echo base_url()."media/upload/author/".$Article->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$Article->id;?>'" class="img-responsive br1 lnk">
					</div>
					<div class="col-md-9">
                    <a href="<?php echo base_url().'author/'.$Article->id;?>"><h5 class="ar_author mb-0 lnk" ><?php echo $Article->FirstName.' '.$Article->LastName; ?></h5></a>
						<p class="ar_authordcs"><?php echo $Article->About; ?></p>
				
						
					</div>
                    
                    
                    
                    <div class="clearfix mt-50"></div>
                    <div class="row">
					<div class="col-md-12" id="Review">
						<div class="fb-comments" data-href="<?php echo current_url();?>" data-width="600" data-numposts="2" style="width: 100% !important;"></div></div>
					</div>
						<!-- /21721917858/Unit4-728x90-bottombar -->
<div id='div-gpt-ad-1544174814618-0' style='height:90px; width:728px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1544174814618-0'); });
</script>
				</div>
</div>
			</div>
			   
			<div class="col-md-4 mt-10">
				<h4 class="title1  p-0-5">trending</h4>
				
				<?php for($i=1; $i<9; $i++):
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
               <div class="post-title3x">
                 <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty-sidebar lnk br9"><?php echo $cat->CategoryTitle; ?></h5></a>
                 </div>
           <?php endif;?>
                            </div>
                            <div class="col-sm-7" style="padding-right: 0;">
                                <a href="<?php echo base_url().'article/'.$Article->Url; ?>"><h4 class="sidenm"><?php echo $Article->PageTitle ?></h4></a>
                                <ul class="list-inline mt-5">
                                    <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive lnk sml-pro-pic3">
                                    </li>
                                  <?php /*?> <li><i class="icon-comment pull-left"></i><span class="num"> <fb:comments-count href="<?php echo base_url().'article/'.$Article->Url;?>"></fb:comments-count></span></li><?php */?>
                                    <li><i class="icon-eye pull-left"></i><span class="num"><?php if($Article->Views > 1000)
					  {
                    	echo round(($Article->Views/1000),1).' K';
                       }
                      else
                      {
                      echo $Article->Views;
                      }
                      ?></span></li>
<?php $savecl=''; $un=''; 
						if($this->M_Article->isMysaveArticle($Article->idArticle)){	$savecl='art_saved'; $un='un';  } ?>					
                    				
                     <li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>" id="bookm<?php echo $Article->idArticle;?>"  onclick="<?php echo $un;?>SaveArticle(<?php echo $Article->idArticle;?>)"></i></a></li>
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
               <div class="post-title3x">
                 <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty-sidebar lnk br9"><?php echo $cat->CategoryTitle; ?></h5></a>
                 </div>
           <?php endif;?>
                            </div>
                            <div class="col-sm-7" style="padding-right: 0;">
                                <a href="<?php echo base_url().'recipe/'.$Articl->Url; ?>"><h4 class="sidenm"><?php echo $Articl->PageTitle ?></h4></a>
                                <ul class="list-inline mt-5">
                                    <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive lnk sml-pro-pic3"></li>
                                   <?php /*?><li><i class="icon-comment pull-left"></i><span class="num"> <fb:comments-count href="<?php echo base_url().'recipe/'.$Articl->Url;?>"></fb:comments-count></span></li><?php */?>
                                    <li><i class="icon-eye pull-left"></i><span class="num"><?php if($Articl->Views > 1000){	echo round(($Articl->Views/1000),1).' K'; }else{echo $Articl->Views;}?></span></li>
<?php $savecl=''; $un='';
if($this->M_Recipes->isMysaveRecipe($Articl->idRecepie)){	$savecl='art_saved'; $un='un'; } ?>
                     <li>
                     <a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>"  onclick="<?php echo $un;?>SaveRecipe(<?php echo $Articl->idRecepie;?>)" id="bookm<?php echo $Articl->idRecepie;?>"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        
                        
                        <?php endif;endif;endfor;?>
                           
				<?php if($Adblock):?>          
				<div class="clearfix mt-20"></div>
				<div class="text-center">
					<?php echo $Adblock;?>
				</div>
                               <?php endif;?>
 <div class="cumuntiybg mt-30" style=" display: block; margin-left: auto; margin-right: auto;"> 
 <!-- /21721917858/Rawnature-300x250-rightsidebar -->
<div id='div-gpt-ad-1586865627379-0' style='width: 300px; height: 250px; display: block; margin-left: auto; margin-right: auto;'>
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
			 if($count < 7):
			  ?>
				<?php 	
					$cat = $this->M_Category->getCategoryInfo_art($Article->category);
					$author = $this->M_Author->getAuthorInfo($Article->Author);
				?>
				<div class="col-sm-4">
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
								<a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,20); ?></a>
								</li>
								<?php /*?><li><i class="icon-comment pull-left"></i><span class="num"><fb:comments-count href="<?php echo base_url().'article/'.$Article->Url;?>"></fb:comments-count></span></li><?php */?>
								<li><i class="icon-eye pull-left"></i><span class="num"> <?php if($Article->Views > 1000)
					  {
                    	echo round(($Article->Views/1000),1).' K';
                       }
                      else
                      {
                      echo $Article->Views;
                      }
                      ?></span></li>
<?php $savecl=''; $un=''; 
						if($this->M_Article->isMysaveArticle($Article->idArticle)){	$savecl='art_saved'; $un='un'; } ?>					
                    				

<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl?>" id="bookm<?php echo $Article->idArticle;?>"  onclick="<?php echo $un;?>SaveArticle(<?php echo $Article->idArticle;?>)"></i></a></li>
							</ul>
                    
				</div>
                <?php if($count==3):?>
                <div class="clearfix"></div>
                <?php endif;?>
			<?php endif; endforeach; endforeach; ?>
            
		</div>
        <?php  endif; ?>
	</div>
    <div class="clearfix mt-30"></div>
<?php $this->load->view('templates/footer_nl');
 $this->load->view('templates/footer'); ?>
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

