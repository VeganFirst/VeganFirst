<?php 		$this->load->view('templates/header'); ?>
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

<div class="head_cat" id="notifications">	        
	        <div class="bar_cat">
	             <div class="container-fluid">
	                <div class="container">
                    	<div class="row">
                        	<div class="col-md-9 col-sm-8 mb-30 mt-20">
                            	<h1 class="homeh1msg" style="color: #fff;">Videos</h1>
                            </div>
                            
                        </div> 
                    </div>
	            </div>
	        </div>
	        <div class="clearfix"></div>
	    </div>

	<div class="main">
		<div class="container">
			<div class="clearfix mt-30"></div>
			<div class="text-center">
				<?php if(isset($ArticleCatH)){ echo $ArticleCatH; }?>
			</div>
			<div class="row">
            <div class="col-xs-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Latest</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Popular</a></li>                      
                    </ul>
                </div>
            
            <div class="card">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
            
            <div class="mt-30"></div>
					<?php $i=0; ?>
					<?php if ($Articles): ?>
						<?php foreach ($Articles as $Article): ?>
							<?php 	
								$cat = $this->M_Category->getCategoryInfo_art($Article->category);
								$author = $this->M_Author->getAuthorInfo($Article->Author);
							?>
							<div class="col-sm-4 col-md-4">
								
           <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-16by9 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
  			<?php else:?>
            <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" class="img-responsive lnk  br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
            <?php endif;?>
            
            
            
            
            
								<div class="post-title4">
                                <?php if($cat) : ?>
                                <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php  echo $cat->CategoryTitle;?></h5></a>
                                    <?php endif; ?>
								</div>
                                <a href="<?php echo base_url().'article/'.$Article->Url; ?>"><h3 class="featurettl" ><?php echo $Article->PageTitle ?></h3></a>
								<ul class="list-inline mt-10 mb-20">
								<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
								<li>
								<a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,20); ?></a>
								</li>
								
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
                            
                            
                            <ol class="list-inline">
					   <li>
					   	<a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo base_url().'article/'.$Article->Url; ?>')" ><i class="icon-social-facebook vidsoc fb"></i></a>
					   </li>
					   <li>
					   	<a href="javascript:void(0);" onclick="window.open('http://twitter.com/share?url=<?php echo base_url().'article/'.$Article->Url; ?>&text=<?php echo $Article->PageTitle ?>')" ><i class="icon-social-twitter vidsoc twt"></i></a>
					   </li>
					   <li>
					   	<a  href="javascript:void(0);" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php echo base_url().'article/'.$Article->Url; ?>&media=''&description=<?php echo $Article->PageTitle ?>')" ><i class="icon-social-pinterest vidsoc prnt"></i></a>
					   </li>
					</ol>
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
					<div id="load-more"></div>
			<div class="clearfix mt-20"></div>
            <?php if(isset($Category)): ?>
			<div class="row" style="text-align: center;">
				<button class="btn btn-white wbt" id="loadbtm" onclick="loadmore()"><i class="fa fa-refresh" aria-hidden="true"></i> LOAD MORE</button>
				<input type="hidden" name="limit" id="limit" value="6"/>
				<input type="hidden" name="offset" id="offset" value="<?php echo sizeof($Articles);?>"/>
			</div>
            <?php endif;?>
            	</div>
                
                <div role="tabpanel" class="tab-pane" id="profile">
                
                
                      <div class="mt-30"></div>
            
            
            
            
            
            
            
				
					<?php $i=0; ?>
					<?php if ($ArticlesPop): ?>
						<?php foreach ($ArticlesPop as $Article): ?>
							<?php 	
								$cat = $this->M_Category->getCategoryInfo_art($Article->category);
								$author = $this->M_Author->getAuthorInfo($Article->Author);
							?>
							<div class="col-sm-4 col-md-4">
								<?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-16by9 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
  			<?php else:?>
            <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" class="img-responsive lnk  br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
            <?php endif;?>
								<div class="post-title4">
                                <?php if($cat) : ?>
                                <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty"><?php  echo $cat->CategoryTitle;?></h5></a>
                                    <?php endif; ?>
								</div>
                                <a href="<?php echo base_url().'article/'.$Article->Url; ?>"><h3 class="featurettl"><?php echo $Article->PageTitle ?></h3></a>
								<ul class="list-inline mt-10 mb-20">
								<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
								<li>
								<a href="<?php echo base_url().'author/'.$author->id;?>"  class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,20); ?></a>
								</li>
								
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
                            
                            <ol class="list-inline">
					   <li>
					   	<a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo base_url().'article/'.$Article->Url; ?>')" ><i class="icon-social-facebook vidsoc fb"></i></a>
					   </li>
					   <li>
					   	<a href="javascript:void(0);" onclick="window.open('http://twitter.com/share?url=<?php echo base_url().'article/'.$Article->Url; ?>&text=<?php echo $Article->PageTitle ?>')" ><i class="icon-social-twitter vidsoc twt"></i></a>
					   </li>
					   <li>
					   	<a  href="javascript:void(0);" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php echo base_url().'article/'.$Article->Url; ?>&media=''&description=<?php echo $Article->PageTitle ?>')" ><i class="icon-social-pinterest vidsoc prnt"></i></a>
					   </li>
					</ol>
                            
                            
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
                
                </div>
                
                </div>
                </div>
			</div>
			
		</div>
<?php $this->load->view('templates/footer_nl');
$this->load->view('templates/footer'); ?>
<script type="text/javascript">
	function loadmore()
	{
		var cat = '<?php echo $cat->id ?>';
		jQuery.ajax(
		{
			url: '<?php echo base_url()?>article/loadmore',
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
</script>
<?php if(isset($Category)): ?>
<script type="text/javascript">
  chkFollowTopic('<?php echo $Category->id;?>');
</script>
<?php endif;?>

