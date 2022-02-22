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

<div class="bgimgdiamond">
		<div class="titilebgcolor">
            <div class="col-xs-9 mt-10 mb-10">
                <h1 class="titletext">Videos</h1>
            </div>
        </div>   
   </div> 


<div class="main">
		<div class="container">  
        
        	<div class="card card-nav-tabs card-plain">
                <div class="header">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
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
				
                    <?php if ($Articles): ?>
						<?php foreach ($Articles as $Article): ?>
							<?php 	
								$cat = $this->M_Category->getCategoryInfo_art($Article->category);
								$author = $this->M_Author->getAuthorInfo($Article->Author);
							?>
                                    <div class="col-sm-6 col-xs-12">
               <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
         <?php else:?>                               <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" class="img-responsive br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
             
            <?php endif;?>
                                        <?php if($cat):?>
                                        <div class="post-title4">
                                            <h5 class="lable-sty lnk" onclick="window.open('<?php echo base_url().'article/category/'.$cat->Url?>')"><?php echo $cat->CategoryTitle ?></h5>
                                        </div>
                                        <?php endif;?>
                                       <h3 class="featurettl" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'"><?php echo $Article->PageTitle ?></h3>
                                       <ul class="list-inline mt-10 mb-20">
                                            <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
                                            <li class="pronam"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" ><?php echo $author->FirstName.' '.$author->LastName ?></li>
                                            
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
                    <div class="clearfix mb-10"></div>
                                    </div>
                       		 
                             
                             <?php endforeach ?>
 					<?php endif ?>
                     <?php if(isset($AdblockCat)):?>
                     <div class="clearfix"></div>
                    <div class="col-sm-6 col-xs-12">
						<div class="text-center">
                            <?php echo $AdblockCat;?>
						</div>
					</div>
                     <?php endif;?>
				
                      		 <div class="clearfix mb-30"></div>
                             <div id="load-more"></div>
                             </div><!--row ends here-->
                            <?php if(isset($Category)): ?>
                             <a class="btn btn-white loadmorebtn" onclick="loadmore()" id="loadbtm"><i class="material-icons" style="font-size: 26px;">loop</i> Load More</a>
<input type="hidden" name="limit" id="limit" value="6"/>
				<input type="hidden" name="offset" id="offset" value="<?php echo sizeof($Articles);?>"/>
                <?php endif;?>
                        </div>
                        <div class="tab-pane" id="updates">
                           <div class="row">
                           <?php if ($ArticlesPop): ?>
						<?php foreach ($ArticlesPop as $Article): ?>
							<?php 	
								$cat = $this->M_Category->getCategoryInfo_art($Article->category);
								$author = $this->M_Author->getAuthorInfo($Article->Author);
							?>
                                    <div class="col-sm-6 col-xs-12">
                                        <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Article->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
         <?php else:?>                               <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" class="img-responsive br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
             
            <?php endif;?>
                                        <?php if($cat):?>
                                        <div class="post-title4">
                                            <h5 class="lable-sty lnk"  onclick="window.open('<?php echo base_url().'article/category/'.$cat->Url?>')"><?php echo $cat->CategoryTitle ?></h5>
                                        </div>
                                        <?php endif;?>
                                       <h3 class="featurettl" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'"><?php echo $Article->PageTitle ?></h3>
                                       <ul class="list-inline mt-10 mb-20">
                                            <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
                                            <li class="pronam"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" ><?php echo $author->FirstName.' '.$author->LastName ?></li>
                                            
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
                         <div class="clearfix mb-10"></div>               
                                    </div>
                       		 
                             
                             <?php endforeach ?>
 					<?php endif ?>
                     <?php if(isset($AdblockCat)):?>
                     <div class="clearfix"></div>
                    <div class="col-sm-6 col-xs-12">
						<div class="text-center">
                            <?php echo $AdblockCat;?>
						</div>
					</div>
                     <?php endif;?>
				
                      		 <div class="clearfix mb-30"></div>
                          
                             </div><!--row ends here-->
                             
                             
                           
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
