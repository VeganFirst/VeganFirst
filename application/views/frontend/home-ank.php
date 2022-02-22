<?php $this->load->view('templates/header'); ?>
<?php  $feed=$Notification[0]->updated;?>
<?php if (!isset($_COOKIE[$feed])): 
?>

	<div class="section-notifications mb-30" id="notifications">
		<div class="alert alert-danger  pb-20 pt-20">
			 <div class="container-fluid">
				<button type="button" class="close" onclick="setClosenot()" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true"><i class="material-icons closebtn">clear</i></span>
				</button>
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<h1 class="homeh1msg"><?php echo $Notification[0]->Title;?></h1>
							<p class="decriptxt"><?php echo $Notification[0]->description;?></p>
						</div>
						<div class="col-md-3 mt-40">
                        <a href="<?php echo $Notification[0]->link;?>" target="_blank">
							<button class="btn btn-white expbtn"><?php echo $Notification[0]->button;?></button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<?php //setcookie('feedback',1, time() + (86400 * 30), "/"); ?>
<?php endif ?>

<?php if(isset($HomeTop)):?>
<div class="text-center"><?php echo $HomeTop->addBlock;?></div>

<?php endif;?>
<div class="main">
    <!-- /21721917858/Carmesi-970x90 -->
<div id='div-gpt-ad-1544174697220-0' style='height:90px; width:970px; display: block; margin-left: auto; margin-right: auto;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1544174697220-0'); });
</script>
</div>
	<div class="container pad0">
		<?php if(isset($Article->idArticle)):?>
			<?php 	
				$cat = $this->M_Category->getCategoryInfo_art($Article->category);
				$author = $this->M_Author->getAuthorInfo($Article->Author);
			?>

			<div class="row">
				<div class="col-md-8 mt-20">
                <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
  <?php else:?>
					<img src="<?php echo base_url().'media/upload/article/main/'.$Article->FeaturedImage ?>" alt="<?php echo $Article->imgalt;?>" class="img-responsive lnk br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
                    <?php endif;?>
                    <?php if($cat):?>
					<div class="post-title2">
                    <a href="<?php echo base_url().'article/category/'.$cat->Url?>">
						<h5 class="lable-sty lnk"><?php echo $cat->CategoryTitle ?></h5></a>
					</div>
                    <?php endif;?>
				</div>
				<div class="col-md-4">
					<h4 class="title1">featured</h4>
					<div class="">
                    <a href="<?php echo base_url().'article/'.$Article->Url; ?>">
							<h3 class="homettl"><?php echo $Article->PageTitle ?></h3></a>
						<ul class="list-inline mt-20">
							<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" class="img-responsive lnk smll-pro-pic" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" ></li>
							<li> <a href="<?php echo base_url().'author/'.$author->id;?>" class="pronm"><?php echo $author->FirstName.' '.$author->LastName ?></a></li>
							
                        <?php $savecl=''; $un=''; 
						if($this->M_Article->isMysaveArticle($Article->idArticle)){	$savecl='art_saved'; $un='un';  } ?>
                            
							<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>" id="bookm<?php echo $Article->idArticle;?>"  onclick="<?php echo $un;?>SaveArticle(<?php echo $Article->idArticle;?>)"></i></a></li>

						</ul>
						<p class="decshome"><?php echo substr($Article->Article_desc,0,200); ?>...</p>
						<a href="<?php echo base_url().'article/'.$Article->Url; ?>">
							<button class="btn rmgbtn">READ THE STORY <i class="icon-arrow-right"></i></button>
						</a>
					</div>
				</div>
			</div>
		<?php endif;?>
        <?php if(isset($Article->idRecepie)):?>
			<?php 	
				$cat = $this->M_Category->getCategoryInfo_rec($Article->Category);
				$author = $this->M_Author->getAuthorInfo($Article->recepieBy);
			?>

			<div class="row">
				<div class="col-md-8 mt-20">
                <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
  <?php else:?>
                
					<img src="<?php echo base_url().'media/upload/recipes/main/'.$Article->FeaturedImage ?>" alt="<?php echo $Article->imgalt;?>" class="img-responsive lnk br1" onclick="location.href='<?php echo base_url().'recipe/'.$Article->Url; ?>'">
            <?php endif;?>       
            <?php if($cat):?> 
					<div class="post-title2">
                    <a href="<?php echo base_url().'recipes/'.$cat->Url?>">
						<h5 class="lable-sty lnk"><?php echo $cat->CategoryTitle ?></h5></a>
					</div>
                   <?php endif;?> 
				</div>
				<div class="col-md-4">
					<h4 class="title1">featured</h4>
					<div class="">
							<a href="<?php echo base_url().'recipe/'.$Article->Url; ?>"><h3 class="homettl"><?php echo $Article->PageTitle ?></h3></a>
						<ul class="list-inline mt-20">
							<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" class="img-responsive lnk smll-pro-pic" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"></li>
							<li> <a href="<?php echo base_url().'author/'.$author->id;?>"  class="pronm"><?php echo $author->FirstName.' '.$author->LastName ?></a></li>
							
                        <?php $savecl=''; $un=''; 
						if($this->M_Recipes->isMysaveRecipe($Article->idRecepie)){	$savecl='art_saved'; $un='un';  } ?>
                            
							<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>" id="bookm<?php echo $Article->idRecepie;?>"  onclick="<?php echo $un;?>SaveRecipe(<?php echo $Article->idRecepie;?>)"></i></a></li>

						</ul>
						<p class="decshome"><?php echo substr($Article->ShortDesc,0,200); ?>...</p>
						<a href="<?php echo base_url().'recipe/'.$Article->Url; ?>" >
							<button class="btn rmgbtn">READ THE STORY <i class="icon-arrow-right"></i></button>
						</a>
					</div>
				</div>
			</div>
		<?php endif;?>
        
        
        
		<div class="clearfix"></div>
		<div class="row rs_bottompadder20 rs_toppadder20">
			<div class="col-md-8">
				<h4 class="title1 mt-30">recent</h4>
				<div class="row">

                <?php for($i=1; $i<9; $i++):
				if(isset(${'Home' . $i})):
				if(isset( ${'Home' . $i}->idArticle)):
				 $Trend=${'Home' . $i};
				$cat = $this->M_Category->getCategoryInfo_art($Trend->category);
				$author = $this->M_Author->getAuthorInfo($Trend->Author);
				?>
				<div class="col-sm-6">
                <?php if(isset($Trend->videoURL) && $Trend->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Trend->videoURL; ?>?controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
  <?php else:?>
                
					<img src="<?php echo base_url().'media/upload/article/'.$Trend->FeaturedImage ?>" alt="<?php echo $Trend->imgalt;?>" onclick="location.href='<?php echo base_url().'article/'.$Trend->Url; ?>'" class="img-responsive lnk br1">
                
	            <?php endif;?>
                <?php if($cat):?>
				<div class="post-title4">
                <a href="<?php echo base_url().'article/category/'.$cat->Url?>">
				<h5 class="lable-sty lnk"><?php echo $cat->CategoryTitle; ?></h5></a>
				</div>
                <?php endif;?>
                <a href="<?php echo base_url().'article/'.$Trend->Url; ?>">
				<h3 class="featurettl"><?php echo $Trend->PageTitle ?></h3></a>
							
				<ul class="list-inline mt-10 mb-30">
					<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
					<li><a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,20); ?></a></li>
					
					<li><i class="icon-eye pull-left"></i><span class="num"> <?php if($Trend->Views > 1000)
					  {
                    	echo round(($Trend->Views/1000),1).' K';
                       }
                      else
                      {
                      echo $Trend->Views;
                      }
                      ?></span></li>
<?php $savecl=''; $un=''; 
if($this->M_Article->isMysaveArticle($Trend->idArticle)){	$savecl='art_saved'; $un='un'; } ?>
					<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl?>"  onclick="<?php echo $un;?>SaveArticle(<?php echo $Trend->idArticle;?>)" id="bookm<?php echo $Trend->idArticle;?>"></i></a></li>
				</ul>
			</div>
        <?php endif;?> 

       <?php if(isset( ${'Home' . $i}->idRecepie)): 
		$Articl =${'Home' . $i};
        $cat = $this->M_Category->getCategoryInfo_rec($Articl->Category);
		$author = $this->M_Author->getAuthorInfo($Articl->recepieBy);
		?>
            <div class="col-sm-6">
            <?php if(isset($Articl->videoURL) && $Articl->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Articl->videoURL; ?>?controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
  <?php else:?>
				<img src="<?php echo base_url().'media/upload/recipes/'.$Articl->FeaturedImage ?>" alt="<?php echo $Articl->imgalt;?>" class="img-responsive  br1" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'">
               
            <?php endif;?>
            <div class="post-title4">
               <?php if($cat) : ?>
               <a href="<?php echo base_url().'recipes/'.$cat->Url?>">
				<h5 class="lable-sty lnk"><?php  echo $cat->CategoryTitle;?></h5></a>
               <?php endif; ?>
			</div>
            <a href="<?php echo base_url().'recipe/'.$Articl->Url; ?>"><h3 class="featurettl"><?php echo $Articl->PageTitle ?></h3></a>
			<ul class="list-inline mt-10 mb-30">
				<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
				<li><a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,15); ?></a></li>
				
                <li><i class="icon-eye pull-left"></i><span class="num"><?php if($Articl->Views > 1000){	echo round(($Articl->Views/1000),1).' K'; }else{echo $Articl->Views;}?></span></li>
<?php $savecl=''; $un='';
if($this->M_Recipes->isMysaveRecipe($Articl->idRecepie)){	$savecl='art_saved'; $un='un'; } ?>
                
				<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>"  onclick="<?php echo $un;?>SaveRecipe(<?php echo $Articl->idRecepie;?>)" id="bookm<?php echo $Articl->idRecepie;?>"></i></a></li>
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
					
					
				</div>
			</div>
			<div class="col-md-4  p-0-20">
				<div class="row">
					<div class="clearfix"></div>
					<h4 class="title1">Trending Tags</h4>
					<div class="">
						
						<?php 
							
						$tags = explode(',', $Tags->addBlock); ?>
						<?php foreach ($tags as $Tag): ?>
                        <a href="<?php echo base_url().'tag/'.str_replace(' ','-',trim($Tag)); ?>">
							<button class="btn btn-warning tagbtn"><?php echo $Tag; ?></button></a>
						<?php endforeach ?>
					</div>
					<div class="clearfix"></div>
					<div class="text-center mt-60">
						<?php echo $HomeSide->addBlock; ?>
					</div>
					<div class="clearfix mt-20"></div>
					<h4 class="titlef30">ask our experts</h4>
                    <p class="txt1">And get all your answers.</p>
                    <?php if(isset($Columnist)):
					foreach($Columnist as $colm):
					?>
					<ul class="list-inline expline">
						<li><img src="<?php echo base_url().'media/upload/columnist/'.$colm->Picture;?>" class="img-responsive sml-pro-pic" onclick="location.href='<?php echo base_url().'columnist/'.$colm->Url; ?>'"></li>
						<li><a href="<?php echo base_url().'columnist/'.$colm->Url; ?>"><span class="expname"><?php echo $colm->Name;?></span><br><span class="expname2"><?php echo $colm->Speciality;?></span></a></li>
						<li class="pull-right"><a class="btn btn-warning golink" onclick="location.href='<?php echo base_url().'columnist/'.$colm->Url; ?>'">ASK</a></li>
					</ul>
                    <?php endforeach;
					endif;?>
					<div class="cumuntiybg mt-30" style=" display: block; margin-left: auto; margin-right: auto;">                              
 <!-- /21721917858/Rawnature-300x250-rightsidebar -->
<div id='div-gpt-ad-1544174505848-0' style='height:250px; width:300px; display: block; margin-left: auto; margin-right: auto;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1544174505848-0'); });
</script>
</div>
</div>
					<div class="clearfix"></div>
					<div class="cumuntiybg mt-30">
						<h4 class="text-center tit mt-0">Be A Recipe Contributor</h4>
                        <h4 class="text-center tx"> Get a chance to get your recipes featured!</h4>
						<div class="text-center">
							<button class="btn btn-success coolbtn mt-0" onclick="location.href='<?php echo base_url().'contact-us'?>'" >Write to us</button>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="mt-30">
						<div class="fb-like" data-href="https://www.facebook.com/veganfirst/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
		    <!-- /21721917858/Unit4-728x90-bottombar -->
<div id='div-gpt-ad-1544174814618-0' style='height:90px; width:728px; display: block; margin-left: auto; margin-right: auto;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1544174814618-0'); });
</script>
				</div>
			<div class="col-xs-6">
				<h4 class="titlef30 mt-10">Stay curious</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<p class="staydecs">There's always something new to discover</p>
			</div> 
		</div>
		<div class="col-xs-12">
          <div class="row"> 
                <ul class="related" style="padding:0" >
                 <?php foreach($Categories as $cat):?>
                 <li class="item">
                 <?php if($cat->catImg):?>
                 <img src="<?php echo base_url().'media/upload/category/'.$cat->catImg?>" onclick="location.href='<?php echo base_url().'article/category/'.$cat->Url; ?>'" class="img-responsive  br1">
                 <?php else:?>
                 <img src="<?php echo base_url().'media/upload/category/Wheatgrass.jpg';?>" onclick="location.href='<?php echo base_url().'article/category/'.$cat->Url; ?>'" class="img-responsive  br1" >
                <?php endif;?>
                <div class="plusbtn">
				<h5 class="plusd"><i class="material-icons"  id="flo<?php echo $cat->id;?>" onclick="FollowTopich('<?php echo $cat->id;?>')">add</i></h5>
				</div>
                <div class="staytxt">
                <a href="<?php echo base_url().'article/category/'.$cat->Url; ?>">
                <h5 class="stayh5"><?php echo $cat->CategoryTitle ?></h5></a>
            </div></li>
            
            <?php endforeach?>   
             </ul>
                
            </div>
</div>
		<div class="clearfix mt-30"></div>
		<div class="text-center mt-30">
			<?php echo $HomeFoot->addBlock; ?>
		</div> 
	</div>
<?php $this->load->view('templates/footer_nl'); ?>
<?php $this->load->view('templates/footer'); ?>
<script src="<?php echo base_url();?>assetsNew/mobile/js/owl.carousel.min.js" type="text/javascript"></script>
   <script type="text/javascript">
jQuery(document).ready(function(){
			jQuery('.related').owlCarousel({
				singleItem : true,
				slideSpeed : 500,
				pagination: true,
				navigation: true,
				loop:true,
				autoPlay:true,
				responsiveRefreshRate : 200,
				transitionStyle : "fade",
			});
		});
		
       jQuery('.related').owlCarousel({
            items: 6,
            itemsDesktop: [1199, 5],
            itemsDesktopSmall: [991, 5],
            itemsTablet: [768, 4],
            itemsMobile: [479, 2],
            lazyLoad: true,
            pagination: false,
				slideSpeed : 200,
				autoPlay:true,
				responsiveRefreshRate : 200,
				transitionStyle : "fade",
loop:true,
            navigation: false
        });
		
	

</script>

<script type="text/javascript">
   	function setClosenot(){
		var date = new Date();
        date.setTime(date.getTime()+(30*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
		document.cookie = escape('<?php echo $feed?>')+"="+escape(1)+expires+"; path=/";
	}
</script>