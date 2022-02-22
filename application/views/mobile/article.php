<?php $this->load->view('mobile/header'); 
$cat = $this->M_Category->getCategoryInfo_art($Article->category);
$author = $this->M_Author->getAuthorInfo($Article->Author);
?>
	<div class="main">
		<div class="container">
                      <div class="row">
                 <div class="col-xs-12 p-0">
                  <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
                <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0"  allowfullscreen></iframe>
</div>
				<?php elseif ($Article->FeaturedImage): ?>
					<img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" alt="<?php echo $Article->imgalt;?>"  class="img-responsive">
				<?php endif; ?>
                
               
                </div>
                <!-- /21721917858/Unit5_320x50_leaderboard_mobile -->
<div id='div-gpt-ad-1547278276364-0' style='height:50px; width:320px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1547278276364-0'); });
</script>
</div>

<div class="col-xs-12">
                    <div class="">
                        <h1 class="headproh3"><?php echo $Article->PageTitle; ?></h1>
                         
<!-- /21721917858/Unit6_300x250_insidecontent_mobile -->
<div id='div-gpt-ad-1547278488440-0' style='height:250px; width:300px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1547278488440-0'); });
</script>
</div>
                        <ul class="list-inline">
                            <li><img src="<?php echo base_url()."media/upload/author/".$Article->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$Article->id;?>'"   class="img-responsive sml-pro-pic"></li>
                            <li class="pronm" onclick="location.href='<?php echo base_url().'author/'.$Article->id;?>'"><?php echo substr($Article->FirstName.' '.$Article->LastName,0,15); ?></li>
                            
                            <li><i class="icon-eye pull-left"></i> <span class="num"><?php  if($Article->Views > 1000) { echo round(($Article->Views/1000),2).' K'; } else { echo $Article->Views; } ?></span></li>
<?php $savecl=''; $un=''; 
if($this->M_Article->isMysaveArticle($Article->idArticle)){	$savecl='art_saved';$un='un';  } ?>
				<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>"  onclick="<?php echo $un; ?>SaveArticle(<?php echo $Article->idArticle;?>)" id="bookm<?php echo $Article->idArticle;?>"></i></a></li>                        </ul>
                        <div class="decshome"><?php echo $Article->Article_post; ?></div>
                       


<h3 class="likitshartit">Like It? Share It!</h3>
                        <ul class="list-inline  float_soc">
                        	<li><a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo current_url();?>')" class="whitecolor"><div class="fbsharebtn"><i class="fa fa-facebook-f"></i></div></a></li>
                            <li><a href="javascript:void(0);" onclick="window.open('http://twitter.com/share?url=<?php echo current_url();?>&text=<?php echo $Article->PageTitle; ?>')"  class="whitecolor"><div class="twtsharebtn"><i class="fa fa-twitter"></i></div></a></li>
                            
                            <li><a href="javascript:void(0);" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php echo current_url();?>&media=<?php echo base_url();?>media/upload/article/<?php echo $Article->FeaturedImage; ?>&description=<?php echo $Article->PageTitle; ?>')"  class="whitecolor"><div class="pintsharebtn"><i class="fa fa-pinterest"></i></div></a></li>
<li><a href="whatsapp://send?text=<?php echo current_url();?>"  class="whitecolor"><img src="<?php echo base_url().'assets/img/chat.svg';?>" style="width:48px;"></a></li>

                        </ul>
                    </div>   
                </div>

</div>

<div class="row">
    	<!-- /21721917858/Unit4-728x90-bottombar -->
<div id='div-gpt-ad-1544174814618-0' style='height:90px; width:728px; display: block; margin-left: auto; margin-right: auto;>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1544174814618-0'); });
</script>
</div>
             	<div class="col-xs-12">
                	<div class="fb-comments" data-href="<?php echo current_url();?>" data-width="100%" data-numposts="2" style="width: 100% !important;">
                </div>
             </div>
             
             <?php
if(isset($Related)): ?>
             	<div class="col-xs-12">
                	<h4 class="titlem mt-30">Related</h4>
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
					$cat = $this->M_Category->getCategoryInfo_art($Article->category);
					$author = $this->M_Author->getAuthorInfo($Article->Author);
				?>                <div class="col-xs-12 trending-sec">
                    <div class="col-xs-5 p-0">
                        <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" alt="<?php echo $Article->imgalt;?>"  class="img-responsive br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
                        
            <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <i class="icon-social-youtube videoplay" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'"></i>
            <?php endif;?>
                        <?php if($cat):?>
                         <div class="listimgsa">
                         <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php echo $cat->CategoryTitle ?></h5></a>
                        </div>
                        <?php endif;?>
                    </div>
                 
                    <div class="col-xs-7" style="padding-right:0;">
                    <!-- /21721917858/Unit7_320x100_bottombar_mobile -->
<div id='div-gpt-ad-1547278553968-0' style='height:100px; width:320px;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1547278553968-0'); });
</script>
</div>
                    <a href="<?php echo base_url().'article/'.$Article->Url; ?>"><h4 class="sidenm"><?php echo $Article->PageTitle ?></h4></a>
                        <ul class="list-inline">
                            <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"   class="img-responsive sml-pro-pic"></li>
                           <?php /*?> <li><i class="icon-comment pull-left"></i><span class="num"><fb:comments-count href="<?php echo base_url().'article/'.$Article->Url;?>"></fb:comments-count></span></li><?php */?>
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
if($this->M_Article->isMysaveArticle($Article->idArticle)){	$savecl='art_saved';$un='un';  } ?>
				<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>"  onclick="<?php echo $un; ?>SaveArticle(<?php echo $Article->idArticle;?>)" id="bookm<?php echo $Article->idArticle;?>"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
			<?php endif; endforeach; endforeach;   ?>
                
            </div>
            <?php endif;?>
<div class="clearfix mb-40"></div>

<?php $this->load->view('mobile/footer'); ?>  