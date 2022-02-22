<?php $this->load->view('mobile/header'); 
$this->load->model("m_author");
$this->m_author= new m_author();
$author = $this->M_Author->getAuthorInfo($Recipe->recepieBy);
					
//print_r($Recipe);
?>
<link href="<?php echo base_url();?>assetsNew/css/jquery.skidder.css" rel="stylesheet"/> 
 
   <style type="text/css">
   .soc {   width: 45px;border-radius: 35% 35% 35% 35%;}
   .jvc {color: #EC785B;font-family: Cervo;font-size: 25px;line-height: 32px;text-align: center;}
   </style>
	
    <div class="main">
		<div class="container">
			<div class="row">
             <?php if(isset($Recipe->videoURL) && $Recipe->videoURL!=NULL):?>
                    <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Recipe->videoURL; ?>?controls=0&amp;showinfo=0"  allowfullscreen></iframe></div>
                    <?php elseif ($Recipe->FeaturedImage): ?>
					<img src="<?php echo base_url().'media/upload/recipes/'.$Recipe->FeaturedImage ?>" class="img-responsive br1">
            <?php endif;?>
            <div class="col-xs-12">
              
                      <h3 class="headproh3"><?php echo $Recipe->PageTitle;?></h3>
                      <ul class="list-inline mt-10 mb-30">
									<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
									<li><a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,15); ?></a></li>
									<li><i class="icon-comment pull-left"></i>  <span class="num">&nbsp;<fb:comments-count href="<?php echo base_url().'recipe/'.$Recipe->Url;?>"></fb:comments-count></span></li>
                                    
									<li><i class="icon-eye pull-left"></i><span class="num"><?php if($Recipe->Views > 1000){echo round(($Recipe->Views/1000),1).' K';}else{echo $Recipe->Views;}?></span></li>

<?php $savecl=''; $un=''; 
if($this->M_Recipes->isMysaveRecipe($Recipe->idRecepie)){	$savecl='art_saved'; $un='un';  } ?>
					<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>" id="bookm<?php echo $Recipe->idRecepie;?>"  onclick="<?php echo $un;?>SaveRecipe(<?php echo $Recipe->idRecepie;?>)"></i></a></li> 
								</ul>
                        <div class="decshome"><?php echo $Recipe->RecepieDetail;?></div>
                       <div>
                       <?php 
					   if($Recipe->HashTags):
					   $Tag=explode(',',$Recipe->HashTags);
								 foreach($Tag as $tag):	 
								 ?>	
                 <a href="<?php echo base_url().'tag/'.str_replace(' ','-',trim($tag)); ?>"><button class="btn btn-warning tagbtn"><?php echo $tag;?></button></a>
                            <?php endforeach; 
							
							endif;?>
                                
                        </div>
                        
                        <h3 class="likitshartit mt-30">Like It? Share It!</h3>
                        <ul class="list-inline">
                        	<li><a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo current_url();?>')" class="whitecolor"><div class="fbsharebtn"><i class="fa fa-facebook-f"></i></div></a></li>
                            <li><a href="javascript:void(0);" onclick="window.open('http://twitter.com/share?url=<?php echo current_url();?>&text=<?php echo $Recipe->PageTitle; ?>')" class="whitecolor"><div class="twtsharebtn"><i class="fa fa-twitter"></i></div></a></li>
                            
                            <li><a href="javascript:void(0);" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php echo current_url();?>&media=<?php echo base_url();?>media/upload/recipe/<?php echo $Recipe->FeaturedImage; ?>&description=<?php echo $Recipe->PageTitle; ?>')" class="whitecolor"><div class="pintsharebtn"><i class="fa fa-pinterest"></i></div></a></li>
                        </ul>
                       <div class="row">
             	<div class="col-xs-12 mt-30">
                	<div class="fb-comments" data-href="<?php echo current_url();?>" data-width="375" data-numposts="2" style="width: 100% !important;">
                </div>
             </div>
             <?php if(isset($Related)):?>
             <div class="col-xs-12">
                	<h4 class="titlem mt-30">Related Recipes</h4>
                </div>
             
             <div class="">

<?php
			$count=0;
			
			 foreach ($Related as $Articler):
			 foreach ($Articler as $Article):
			 $count++;
			 if($count < 7):
			  ?>
				<?php 	
					$cat = $this->M_Category->getCategoryInfo_rec($Article->Category);
					$author = $this->M_Author->getAuthorInfo($Article->recepieBy);
				?>                <div class="col-xs-12 trending-sec">
                    <div class="col-xs-5 p-0">
                        <img src="<?php echo base_url().'media/upload/recipes/'.$Article->FeaturedImage ?>" class="img-responsive br1" onclick="location.href='<?php echo base_url().'recipe/'.$Article->Url; ?>'">
                        
            <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <i class="icon-social-youtube videoplay" onclick="location.href='<?php echo base_url().'recipe/'.$Article->Url; ?>'"></i>
            <?php endif;?>
                        <?php if($cat):?>
                         <div class="listimgsa">
                         <a href="<?php echo base_url().'recipes/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php echo $cat->CategoryTitle ?></h5></a>
                        </div>
                        <?php endif;?>
                    </div>
                    <div class="col-xs-7">
                    <a href="<?php echo base_url().'recipe/'.$Article->Url; ?>"><h4 class="sidenm"><?php echo $Article->PageTitle ?></h4></a>
                        <ul class="list-inline">
                            <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"   class="img-responsive sml-pro-pic"></li>
                            <li><i class="icon-comment pull-left"></i><span class="num"><fb:comments-count href="<?php echo base_url().'article/'.$Article->Url;?>"></fb:comments-count></span></li>
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
if($this->M_Recipes->isMysaveRecipe($Article->idRecepie)){	$savecl='art_saved'; $un='un';  } ?>

	<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>" id="bookm<?php echo $Article->idRecepie;?>"  onclick="<?php echo $un;?>SaveRecipe(<?php echo $Article->idRecepie;?>)"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
			<?php endif; endforeach; endforeach;   ?>
                
            </div>
            <?php endif;?>
             <div class="clearfix mt-40"></div>
                    
					<div class="col-xs-12">
                    
                    <h4 class="title1  p-0-5">Top recipe contributors</h4>
						<div class="slideshow" style="height: 0;">
                        <?php if($TopCon):
						foreach($TopCon as $con):
                       $cont = $this->M_Author->getAuthorInfo($con->recepieBy);?>
                      <div class="slide">                      	
						<img src="<?php echo base_url()?>media/upload/author/<?php echo $cont->Picture;?>" class="br320" title="<?php echo $cont->FirstName.' '.$cont->LastName;?>"  onclick="location.href='<?php echo base_url().'author/'.$cont->id;?>'">
                      </div>
                      <?php endforeach; endif;?>
                      
                    </div>
                        
                        
					</div>
            <div class="clearfix mb-80"></div>
            
            </div>
                </div>
            
            </div>
            </div>
	<?php $this->load->view('mobile/footer_nl');
	$this->load->view('mobile/footer'); ?>
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
          maxWidth : 100,
          maxHeight: 100,
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