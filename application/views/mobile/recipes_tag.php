<?php $this->load->view('mobile/header'); ?>
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
	<div class="container mt-30">
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
                    <div class="col-sm-4 col-xs-12 col-md-6">
								<img src="<?php echo base_url().'media/upload/recipes/'.$Articl->FeaturedImage ?>" class="img-responsive br1" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'">
                                
           <?php if(isset($Articl->videoURL) && $Articl->videoURL!=NULL):?>
            <i class="icon-social-youtube videoplay" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'" ></i>
            <?php endif;?>
            
						<div class="post-title4">
                        <?php if($cat) : ?>
						<h5 class="lable-sty"><?php  echo $cat->CategoryTitle;?></h5>
                         <?php endif; ?>
						</div>
                                
								<h3 class="featurettl" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'"><?php echo $Articl->PageTitle ?></h3>
								<ul class="list-inline mt-10 mb-30">
									<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
									<li><a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,15); ?></a></li>
									<li><i class="icon-comment pull-left"></i>  <span class="num">&nbsp;<fb:comments-count href="<?php echo base_url().'recipe/'.$Articl->Url;?>"></fb:comments-count></span></li>
							<li><i class="icon-eye pull-left"></i><span class="num"><?php if($Articl->Views > 1000){ echo round(($Articl->Views/1000),1).' K';}else{echo $Articl->Views;}?></span></li>
<?php $savecl=''; $un=''; 
if($this->M_Recipes->isMysaveRecipe($Articl->idRecepie)){	$savecl='art_saved'; $un='un';  } ?>
                  <li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>" id="bookm<?php echo $Articl->idRecepie;?>"  onclick="<?php echo $un;?>SaveRecipe(<?php echo $Articl->idRecepie;?>)"></i></a></li>								</ul>
							</div>
						<?php 
						$count++;
						if($count%3==0){echo "<div class='clearfix'></div>";}
						endforeach;
						endif;
					?> 
                    <?php if(isset($AdblockCat)):?>
                    <div class="col-sm-4  col-xs-12 col-md-6 pull-right">
						<h4 class="text-center">Advertisement</h4>
						<div class="text-center">
							
                            <?php echo $AdblockCat;?>
                           
						</div>
					</div>
                     <?php endif;?>
				</div>
				 
			</div>
            <div class="clearfix mt-20"></div>
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
			  limit :$('#limit').val()
			},
			dataType: "json", 
			success :function(data)
			{
				// console.log(data);
				var i;
				var datam= data.More;
				console.log(datam);
				var lm=$('#load-more');
				if(datam !== null )
				{
					for(i=0; i< datam.length; i++)
					{
						var v= datam[i].idRecepie;
						// alert(v);
						$.post("<?php echo base_url()?>recipesx/loadCatRecp", {articlx: v}, function(result)
						{
							// console.log(result);
							lm.append(result).slideDown('slow');
						});
						if (i==2||i==5)
						{
							lm.append('<div class="clearfix"></div>')
						}
					}
					$('#offset').val(data.offset)
					$('#limit').val(data.limit)
					$('#loadbtm').click(false);
				}
				else
				{
					$('#loadbtm').hide();	
				}
			}
		})
	}
</script>