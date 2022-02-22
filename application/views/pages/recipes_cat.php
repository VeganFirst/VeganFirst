<?php $this->load->view('templates/header'); ?>
<style type="text/css">
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
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) 
		{
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
			fjs.parentNode.insertBefore(js, fjs);
		}
		(document, 'script', 'facebook-jssdk'));
	</script>
<?php if(isset($category)): ?>
<div class="head_cat_r" id="notifications">	        
	        <div class="bar_cat">
	             <div class="container-fluid">
	                <div class="container">
                    	<div class="row">
                        	<div class="col-md-9 col-sm-8 mb-30 mt-20">
                            	<h1 class="homeh1msg" style="color: #fff;"><?php echo $category->CategoryTitle; ?></h1>
                            </div>
                            <div class="col-md-3 col-sm-4 text-right mt-40 mb-30">
                            	<button class="btn catplus" id="flo<?php echo $category->id;?>" onclick="FollowTopic('<?php echo $category->id;?>')"><i class='material-icons'>add</i> FOLLOW TOPIC</button>
                            </div>
                        </div> 
                    </div>
	            </div>
	        </div>
	        <div class="clearfix"></div>
	    </div><!--  end notifications -->
<?php else:?>
<div class="head_cat" id="notifications">	        
	        <div class="bar_cat">
	             <div class="container-fluid">
	                <div class="container">
                    	<div class="row">
                        	<div class="col-md-9 col-sm-8 mb-30 mt-20">
                            	<h1 class="homeh1msg" style="color: #fff;">Always Hungry</h1>
                            </div>
                            
                        </div> 
                    </div>
	            </div>
	        </div>
	        <div class="clearfix"></div>
	    </div>        
        
<?php endif;?>

     
	<div class="container mt-30">
    <div class="text-center">
				<?php if(isset($AdblockCatH)){ echo $AdblockCatH; }?>
			</div>
		<div class="row">
        
        
         <div role="tabpanel" class="tab-pane active" id="home">
            
            <div class="mt-30"></div>
					<?php 
						$this->load->model("M_Author");
						$this->M_Author= new M_Author();
						$count=0;
						if(isset($Products)):
						foreach($Products as $Articl) : 
						$count++;
					$cat = $this->M_Category->getCategoryInfo_rec($Articl->Category);
					$author = $this->M_Author->getAuthorInfo($Articl->recepieBy);
					?>
                    <div class="col-sm-4 mb-30">
                    <?php if(isset($Articl->videoURL) && $Articl->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Articl->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit: none;}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $Articl->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $Articl->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" ></iframe></div>
  			<?php else:?>
            <img src="<?php echo base_url().'media/upload/recipes/'.$Articl->FeaturedImage ?>" class="img-responsive lnk  br1" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'">
            <?php endif;?>
								<div class="post-title4">
                                <?php if($cat) : ?>
                                <a href="<?php echo base_url().'recipes/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php  echo $cat->CategoryTitle;?></h5></a>
                                    <?php endif; ?>
								</div>
                                <a href="<?php echo base_url().'recipe/'.$Articl->Url; ?>"><h3 class="featurettl"><?php echo $Articl->PageTitle ?></h3></a>
							    <ul class="list-inline mt-0 mb-10">
								<li><a href="<?php echo base_url().'recipe/'.$Articl->Url; ?>" style="color: #000;">Read More <span class="material-icons">east</span></a></li>
							</ul>
							
							
								
							</div>
						<?php 
						$count++;
						if($count%3==0){echo "<div class='clearfix'></div>";}
						endforeach;
						endif;
					?> 
                    <?php if(isset($AdblockCat)):?>
                    <div class="col-sm-4 pull-right">
						<div class="text-center">
                            <?php echo $AdblockCat;?>
						</div>
					</div>
                     <?php endif;?>
                     <div class="clearfix"></div>
					
				
            <div class="clearfix mt-20"></div>
            
          
			<div class="row" style="text-align: center;">
				<input type="hidden" name="limit" id="limit" value="6"/>
				<input type="hidden" name="offset" id="offset" value="<?php echo sizeof($Products)?>"/>
			</div>
            </div>
            
		</div>   
	</div>
<?php $this->load->view('templates/footer_nl'); ?>
<div class="container mt-50">
<div id="load-more" class="load"></div>
</div>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	function loadmore()
	{
		var cat = '<?php echo $cat->id ?>';
		jQuery.ajax(
		{
			url: '<?php echo base_url()?>recipesx/loadmore',
			data:{
			  offset :$('#offset').val(),
			  cat: cat,
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
				$('#loadbtm').click(false);
				}
				else{ $('#loadbtm').hide(); }
			}
		})
	}
	
$(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height() - 251) {
			  loadmore();
        }
    });
</script>
<?php if(isset($category)): ?>
<script type="text/javascript">
  chkFollowTopic('<?php echo $category->id;?>');
</script>
<?php endif;?>