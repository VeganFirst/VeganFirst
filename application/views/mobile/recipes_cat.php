<?php $this->load->view('mobile/header'); ?>
<style type="text/css">
		td {text-align: left;padding: 8px;border-bottom: 1px solid #eee;font-family: "Source Sans Pro";font-size: 16px;line-height: 28px;font-weight: 600;}
		
		.nav-tabs { border-bottom: 2px solid #DDD; background: #ffffff; }
		.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
		.nav-tabs > li > a { border: none; color: #6cbd45 !important; }
		.nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #292b28 !important; background: transparent; }
		.nav-tabs > li > a::after { content: ""; background: #292b28; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -2px; transition: all 250ms ease 0s; transform: scale(0); }
		.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
		.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #6cbd45; }
		/*.tab-pane { padding: 15px 0; }*/
		/*.tab-content{padding:20px}*/
		.nav-tabs>li>a {position: relative;display: block;padding: 5px 15px 10px 15px;}
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
                        	<div class="col-md-9 col-xs-9 mt-10 mb-20">
                            	<h1 class="homeh1msg" style="color: #fff;"><?php echo $category->CategoryTitle; ?></h1>
                            </div>
                            <div class="col-md-3 col-xs-3 mt-20">
                            <h5 class="btn plusdcat"><i class="material-icons" id="flo<?php echo $category->id;?>" onclick="FollowTopich('<?php echo $category->id;?>')">add</i></h5>
                            </div>
                        </div> 
                    </div>
	            </div>
	        </div>
	        <div class="clearfix"></div>
	    </div><!--  end notifications -->
        <script>
            chkFollowTopich('<?php echo $category->id;?>');
			</script>
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
    <div class="card card-nav-tabs card-plain">
    <div class="header">
      <div class="nav-tabs-navigation">
      <div class="nav-tabs-wrapper">
           <ul class="nav nav-tabs" data-tabs="tabs">
               <li class="active"><a href="#home" data-toggle="tab">Latest</a></li>
               <li><a href="#updates" data-toggle="tab">Popular</a></li>
           </ul>
      </div>
      </div>
    </div>
	<div class="content">
    	<div class="tab-content">
            <div class="tab-pane active" id="home">
    
		<div class="row">
		   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="row">
					<div class="clearfix"></div> 
					<?php 
						
						
						$this->load->model("m_author");
						$this->m_author= new m_author();
						$count=0;
						if(isset($Products)):
						foreach($Products as $Articl) : 
						$count++;
						$cat = $this->M_Category->getCategoryInfo_rec($Articl->Category);
					$author = $this->M_Author->getAuthorInfo($Articl->recepieBy);
								
						
					?>
                    <div class="col-sm-6 col-xs-12 col-md-4">
								<img src="<?php echo base_url().'media/upload/recipes/'.$Articl->FeaturedImage ?>" class="img-responsive br1" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'">
                                
                 <?php if(isset($Articl->videoURL) && $Articl->videoURL!=NULL):?>
            <i class="icon-social-youtube videoplay" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'" ></i>
            <?php endif;?>
            
								<div class="post-title4">
                                <?php if($cat) : ?>
                                <a href="<?php echo base_url().'recipes/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php  echo $cat->CategoryTitle;?></h5></a>
                                    <?php endif; ?>
								</div>
                                <a href="<?php echo base_url().'recipe/'.$Articl->Url; ?>"><h3 class="featurettl"><?php echo $Articl->PageTitle ?></h3></a>
								<ul class="list-inline mt-10 mb-30">
									<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
									<li><a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,15); ?></a></li>
									
									<li><i class="icon-eye pull-left"></i><span class="num"><?php if($Articl->Views > 1000){ echo round(($Articl->Views/1000),1).' K';} else{echo $Articl->Views;}?></span></li>
<?php $savecl=''; $un=''; 
if($this->M_Recipes->isMysaveRecipe($Articl->idRecepie)){	$savecl='art_saved'; $un='un';  } ?>
                  <li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>" id="bookm<?php echo $Articl->idRecepie;?>"  onclick="<?php echo $un;?>SaveRecipe(<?php echo $Articl->idRecepie;?>)"></i></a></li>
								</ul>
							</div>
						<?php 
						
						if($count%2==0){echo "<div class='clearfix'></div>";}
						endforeach;
						endif;
					?> 
                    <?php if(isset($AdblockCat)):?>
                    <div class="col-sm-6  col-xs-12 col-md-4 pull-right">
						<div class="text-center">
                            <?php echo $AdblockCat;?>
						</div>
					</div>
                     <?php endif;?>
                     
                     <div class="clearfix mb-30"></div>
					<div id="load-more"></div>
                    <div class="col-xs-12">
                    <a class="btn btn-white loadmorebtn" onclick="loadmore()" id="loadbtm"><i class="material-icons" style="font-size: 26px;">loop</i> Load More</a>
<input type="hidden" name="limit" id="limit" value="6"/>
				<input type="hidden" name="offset" id="offset" value="<?php echo sizeof($Products)?>"/>
                </div>
				</div>
				 
			</div>
            <div class="clearfix mt-20"></div>
			
            
               
		</div>
        </div>
        <div class="tab-pane" id="updates">
        <div class="row">
        <?php
 $count=0;
						if(isset($ProductsPop)):
						foreach($ProductsPop as $Articl) : 
						$count++;
						$cat = $this->M_Category->getCategoryInfo_rec($Articl->Category);
					$author = $this->M_Author->getAuthorInfo($Articl->recepieBy);
								
						
					?>
                    <div class="col-sm-6 col-xs-12 col-md-4">
								<img src="<?php echo base_url().'media/upload/recipes/'.$Articl->FeaturedImage ?>" class="img-responsive br1" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'">
                                
                 <?php if(isset($Articl->videoURL) && $Articl->videoURL!=NULL):?>
            <i class="icon-social-youtube videoplay" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'" ></i>
            <?php endif;?>
            
								<div class="post-title4">
                                <?php if($cat) : ?>
                                <a href="<?php echo base_url().'recipes/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php  echo $cat->CategoryTitle;?></h5></a>
                                    <?php endif; ?>
								</div>
                                <a href="<?php echo base_url().'recipe/'.$Articl->Url; ?>"><h3 class="featurettl"><?php echo $Articl->PageTitle ?></h3></a>
								<ul class="list-inline mt-10 mb-30">
									<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
									<li><a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,15); ?></a></li>
									
									<li><i class="icon-eye pull-left"></i><span class="num"><?php if($Articl->Views > 1000){ echo round(($Articl->Views/1000),1).' K';} else{echo $Articl->Views;}?></span></li>
<?php $savecl=''; $un=''; 
if($this->M_Recipes->isMysaveRecipe($Articl->idRecepie)){	$savecl='art_saved'; $un='un';  } ?>
                  <li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>" id="bookm<?php echo $Articl->idRecepie;?>"  onclick="<?php echo $un;?>SaveRecipe(<?php echo $Articl->idRecepie;?>)"></i></a></li>
								</ul>
							</div>
						<?php 
						
						if($count%2==0){echo "<div class='clearfix'></div>";}
						endforeach;
						endif;
					?> 
                    <?php if(isset($AdblockCat)):?>
                    <div class="col-sm-6  col-xs-12 col-md-4 pull-right">
						<div class="text-center">
                            <?php echo $AdblockCat;?>
						</div>
					</div>
                     <?php endif;?>
                     
                      <div class="clearfix"></div>
					<div id="load-morep"></div>
				
            <div class="clearfix mt-20"></div>
			<div class="row" style="text-align: center;">
                <a class="btn btn-white loadmorebtn" onclick="loadmorep()" id="loadbtmp"><i class="material-icons" style="font-size: 26px;">loop</i> Load More</a>
<input type="hidden" name="limit" id="limitp" value="6"/>
				<input type="hidden" name="offset" id="offsetp" value="<?php echo sizeof($ProductsPop)?>"/>
			</div>       
        
        
        </div>
        </div>
        </div>   
	</div>
    </div>
    </div>
<?php $this->load->view('mobile/footer_nl'); ?>
<?php $this->load->view('mobile/footer'); ?>
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
	
		function loadmorep()
	{
		var cat = '<?php echo $cat->id ?>';
		jQuery.ajax(
		{
			url: '<?php echo base_url()?>recipesx/loadmore',
			data:{
			  offset :$('#offsetp').val(),
			  cat: cat,
			  limit :$('#limitp').val(),
			  order : 'Views'
			},
			//dataType: "json", 
			success :function(data)
			{
				if(data)
				{
				$('#load-morep').append(data).slideDown('slow');
				$('#offsetp').val(parseInt($('#offsetp').val())+parseInt($('#limitp').val()));
				$('#loadbtmp').click(false);
				}
				else{ $('#loadbtmp').hide(); }
			}
		})
	}

</script>
<?php if(isset($category)): ?>
<script type="text/javascript">
  chkFollowTopic('<?php echo $category->id;?>');
</script>
<?php endif;?>