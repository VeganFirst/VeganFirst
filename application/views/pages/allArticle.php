<?php 		$this->load->view('templates/header'); ?>
<style type="text/css">
.catItems{width:20%;float: left;    margin-bottom: 30px;}
.catItems img{padding:5px;}
.catItems .row{display: flex;
    align-items: center;    margin: 0 0px;}
.hoverimg{display:none;}


.catItems:hover .mainimg, .catItems .active .mainimg{display:none;}
.catItems:hover .hoverimg,  .catItems .active .hoverimg{display:block;}
.catItems:hover, .catItems .active{background-color: #6cbd45;}
.catItems:hover .ttl, .catItems .active .ttl{color: #fff;}
.ttl{font-size: 20px;
	line-height:26px;
    
    font-weight: 400;}

.cat-cont{padding-left:0; padding-right:25px;}



		td {text-align: left;padding: 8px;border-bottom: 1px solid #eee;font-family: "Source Sans Pro";font-size: 16px;line-height: 28px;font-weight: 600;}
		
		.nav-tabs { border-bottom: 2px solid #DDD; background: #ffffff; }
		.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
		.nav-tabs > li > a { border: none; color: #6cbd45 !important; }
		.nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #292b28 !important; background: transparent; }
		.nav-tabs > li > a::after { content: ""; background: #292b28; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
		.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
		.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #6cbd45; }
		/*.tab-pane { padding: 15px 0; }*/
		/*.tab-content{padding:20px}*/
		.nav-tabs>li>a {position: relative;display: block;padding: 25px 25px 10px 25px;}
		.card {background: #FFF none repeat scroll 0% 0%; box-shadow: none !important; margin-bottom: 30px; }
		
	</style>
<?php if($sub_cats): 
$tot = sizeof($sub_cats);
?>
<div class="container">
	<div class="row">
    	<?php $cntC = 0; foreach($sub_cats as $sub): $cntC++;?>
    	
    	<div class="catItems">
    	    <a href="<?php echo Base_Url().'article/category/'.$Category->Url.'/'.$sub->Url?>">
    	<div class="row <?php echo($this->uri->segment(4)==$sub->Url)?'active':''?>">
    	    <div class="col-md-5 col-lg-5">
    	       <img src="<?php echo Base_Url().'media/upload/category/'.$sub->catImg?>" class="img-responsive lnk mainimg" style="width:100%" /> 
    	       <img src="<?php echo Base_Url().'media/upload/category/'.$sub->hoverImg?>" class="img-responsive lnk hoverimg" style="width:100%" />
    	    </div>
    	    <div class="col-md-7 col-lg-7 cat-cont">
    	        <div class="ttl"><?php echo  $sub->CategoryTitle?></div>
    	    </div>
    	</div>
    	</a>
    	</div>
    	
    	<?php if($cntC % 5 == 0 ):?>
    	<div class="clearfix"></div>
    	<?php endif;?>
    	<?php endforeach;?>
    </div>
</div>
<?php endif;?>
	<div class="main">
    
    
    <?php if(isset($Editorials->editorials)):
			$Epic  = explode(',',$Editorials->editorials);
			?>
  <div class="row mt-20 pt-50 pb-50" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear" style="background:#521E74">
    <div class="container">
      <h3 class="text-center title2hed  white mt-0 mb-50">Editors Pick</h3>
      <div class="row">
      
        <?php foreach($Epic as $video):
		$Article = $this->M_Article->getArticleInfo($video);
		 ?>
        <?php 	
		$cat = $this->M_Category->getCategoryInfo_art($Article->category);
		$author = $this->M_Author->getAuthorInfo($Article->Author);
		?>
							<div class="col-sm-3 col-md-3">
								<div style="    background: #fff;
    padding: 10px;">
           <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=1&amp;showinfo=0" frameborder="0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit: none;}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $Article->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" allowfullscreen></iframe>
                </div>
  			<?php else:?>
            <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" alt="<?php echo $Article->imgalt; ?>" class="img-responsive lnk  br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
            <?php endif;?>
            
								<div class="post-title4 mt-10">
                                <?php if($cat) : ?>
                                <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php  echo $cat->CategoryTitle;?></h5></a>
                                    <?php endif; ?>
								</div>
                                <a href="<?php echo base_url().'article/'.$Article->Url; ?>"><h3 class="featurettl"><?php echo substr($Article->PageTitle,0,65); echo ((strlen($Article->PageTitle))>65)?'...':''; ?></h3></a>
								<ul class="list-inline mt-10 mb-0">
								<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
								<li>
								<a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,20); ?></a>
								</li>
							</ul>
							</div>
						</div>	                           
        <?php endforeach; ?>
  
      </div>
    </div>
  </div>          
            
            
            <?php endif;?>
		<div class="container mt-40" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear">
			<div class="clearfix"></div>
			<div class="text-center">
				<?php if(isset($ArticleCatH)){ echo $ArticleCatH; }?>
			</div>
			<div class="row">
            
            
            <?php $i=0; ?>
					<?php if ($Articles): ?>
						<?php foreach ($Articles as $Article): ?>
							<?php 	
								$cat = $this->M_Category->getCategoryInfo_art($Article->category);
								$author = $this->M_Author->getAuthorInfo($Article->Author);
							?>
							<div class="col-sm-4 col-md-4 mb-30">
								
           <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-16by9">
                  
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=1&amp;showinfo=0" frameborder="0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit: none;}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $Article->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" allowfullscreen></iframe>
                </div>
  			<?php else:?>
            <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" alt="<?php echo $Article->imgalt; ?>" class="img-responsive lnk  br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
            <?php endif;?>
            
            
            
            
            
								<div class="post-title4">
                                <?php if($cat) : ?>
                                <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php  echo $cat->CategoryTitle;?></h5></a>
                                    <?php endif; ?>
								</div>
                                <a href="<?php echo base_url().'article/'.$Article->Url; ?>"><h3 class="featurettl"><?php echo $Article->PageTitle ?></h3></a>
								<ul class="list-inline mt-0 mb-10">
								<li><a href="<?php echo base_url().'article/'.$Article->Url; ?>" style="color: #000;">Read More <span class="material-icons">east</span></a></li>
							</ul>
							</div>
							<?php if ($i==2)
							{
								echo '<div class="clearfix"></div>';
								$i=0;
							}
							else
							{
								$i++;
							} ?>
						<?php endforeach ?>
 					<?php endif ?>
					 <?php if(isset($AdblockCat)):?>
                    <div class="col-sm-4 col-md-4">
						<div class="text-center">
                            <?php echo $AdblockCat;?>
						</div>
					</div>
                     <?php endif;?>
					<div class="clearfix"></div>
					
			<div class="clearfix mt-20"></div>
            <?php if(isset($Category)): ?>
			<div class="row" style="text-align: center;">
				
				<input type="hidden" name="limit" id="limit" value="6"/>
				<input type="hidden" name="offset" id="offset" value="<?php echo ($Articles)?sizeof($Articles):'';?>"/>
			</div>
            <?php endif;?>
            
            
			</div>
			
		</div>
<?php $this->load->view('templates/footer_nl'); ?>
<div class="container mt-50">
<div id="load-more" class="load"></div>
</div>
<?
$this->load->view('templates/footer'); ?>
<script type="text/javascript">
	function loadmore()
	{
		
		if($('#load-more').hasClass("load"))
		{
		$('#load-more').removeClass("load");
		var cat = '<?php echo $cat->id ?>';
		var sub_c = '<?php echo($CurentCat)?$CurentCat->id:'' ?>';
		jQuery.ajax(
		{
			url: '<?php echo base_url()?>article/loadmore',
			data:{
			  offset :$('#offset').val(),
			  cat: cat,
			  sub_cat: sub_c,
			  limit :$('#limit').val(),
			  order : 'postTime'
			},
			//dataType: "json", 
			success :function(data)
			{
				if(data)
				{
				$('#load-more').append(data).slideDown('slow');
				$('#offset').val(parseInt($('#offset').val())+parseInt($('#limit').val()));
				$('#load-more').addClass("load");
				
				}
				else{ 
				
				$('#load-more').removeClass("load");
				 }
			}
		})
	}
	}
	
	$(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height() - 251) {
			  loadmore();
        }
    });
</script>
<?php if(isset($Category)): ?>
<script type="text/javascript">
  chkFollowTopic('<?php echo $Category->id;?>');
</script>
<?php endif;?>

