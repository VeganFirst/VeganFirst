<?php 		$this->load->view('mobile/header'); ?>
<style type="text/css">
            td {text-align: left;padding: 8px;border-bottom: 1px solid #eee;font-family: "Source Sans Pro";font-size: 16px;line-height: 28px;font-weight: 600;}
            .fw{font-weight: 400;}
            .btnn {   height: 48px;width: 48px;border-radius: 3px 20px 3px 20px;background-color: #3B5998;}
            .btntwt {   height: 48px;width: 48px;border-radius: 3px 20px 3px 20px;background-color: #55ACEE;}
            .btninsta {   height: 48px;width: 48px;border-radius: 3px 20px 3px 20px;background-color: #E12F67;}
            .pin {   height: 48px;width: 48px;border-radius: 3px 20px 3px 20px;   background-color: #d73532;}  
            .jvc {color: #EC785B;font-family: Cervo-Light;font-size: 30px;line-height: 32px;text-align: center;font-weight: 600;}
        /*for tab*/
            .nav-tabs { border-bottom: 2px solid #DDD; background: #ffffff; }
            .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
            .nav-tabs > li > a { border: none; color: #6cbd45 !important;position: relative;display: block;padding: 25px 25px 0px 5px; }
            .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #292b28 !important; background: transparent; }
            .nav-tabs > li > a::after { content: ""; background: #292b28; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
            .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
            .tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #6cbd45; }
        /*.tab-pane { padding: 15px 0; }*/
        /*.tab-content{padding:20px}*/
            
            .card {background: #FFF none repeat scroll 0% 0%; box-shadow: none !important;/*box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);*/ margin-bottom: 30px; }
        /*body{ background: #EDECEC; padding:50px}*/
    </style>
<div class="prof_cat" id="notifications">
		<div class="pro_cat" style="background: url(<?php echo base_url();?>assetsNew/img/author-profile.jpg) no-repeat;    background-size: cover;min-height:130px;"></div>
        
		
	</div>
    

	<div class="container pad0">
    <div class="col-md-2 col-sm-2 col-xs-4 mt-40-m">
			<img src="<?php echo base_url();?>media/upload/author/<?php echo $Author->Picture; ?>" style="border-radius: 10px;" class="img-responsive" />
		</div>
    <h1 class="homeh1msg col-xs-8 mt-40-m" style="color: #fff;"><?php echo $Author->FirstName." ".$Author->LastName; ?></h1> 
    
                        <div class="col-sm-8 col-xs-12 decshome mt-10 mb-10"><?php echo $Author->About; ?></div>
    
		
<div class="clearfix"></div>
        

                <div class="">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Article</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Recipes</a></li>                      
                    </ul>
                </div>
                 <div class="row">
                <div class="card">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
						<div class="mt-20">
						<?php if(isset($Article)) : 
							$count=0;
							foreach($Article as $Articl) : 
							$cat = $this->M_Category->getCategoryInfo_art($Articl->category);
							$author = $this->M_Author->getAuthorInfo($Articl->Author);                    ?>
                    <div class="col-sm-4 col-xs-12">
                    <?php if(isset($Articl->videoURL) && $Articl->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Articl->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
         <?php else:?> 
		<img src="<?php echo base_url().'media/upload/article/'.$Articl->FeaturedImage;?>" alt="<?php echo $Articl->imgalt;?>" class="img-responsive br1" onclick="location.href='<?php echo base_url().'article/'.$Articl->Url; ?>'">

        
            <?php endif;?>
        <div class="post-title4">
        <?php if($cat) : ?>
        <h5 class="lable-sty lnk"  onclick="window.open('<?php echo base_url().'article/category/'.$cat->Url?>')"><?php  echo $cat->CategoryTitle;?></h5>
        <?php endif; ?>
		</div>
	<h3 class="featurettl" onclick="location.href='<?php echo base_url().'article/'.$Articl->Url; ?>'"><?php echo $Articl->PageTitle ?></h3>
    <ul class="list-inline mt-10 mb-30">
		<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" class="img-responsive sml-pro-pic3"></li>
                     <li><a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,15); ?></a></li>
        <li><i class="icon-comment pull-left"></i><span class="num"> <fb:comments-count href="<?php echo base_url().'article/'.$Articl->Url;?>"></fb:comments-count></span></li>
        <li><i class="icon-eye pull-left"></i><span class="num"> <?php if($Articl->Views > 1000)
					  {
                    	echo round(($Articl->Views/1000),1).' K';
                       }
                      else
                      {
                      echo $Articl->Views;
                      }
                      ?></span></li>
<?php $savecl='';
if($this->M_Article->isMysaveArticle($Articl->idArticle)){	$savecl='art_saved'; } ?>					
        <li><a href="javascript:void(0);" ><i class="icon-bookmark <?php echo $savecl?>" id="bookm<?php echo $Articl->idArticle;?>" onclick="SaveArticle(<?php echo $Articl->idArticle;?>)"></i></a></li>
        </ul>
</div>
<?php 
$count++;
if($count%3==0){echo "<div class='clearfix'></div>";}
endforeach;
endif;
?>

</div>
                        <div class="clearfix"></div>
                        </div>
               
                        <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="mt-20">
			<?php 
				if(isset($Recipe)) :
					$count=0;
					foreach($Recipe as $Articl) :
					$cat = $this->M_Category->getCategoryInfo_rec($Articl->Category);
					$author = $this->M_Author->getAuthorInfo($Articl->recepieBy);
					?>
					<div class="col-sm-4 col-xs-12">
					<?php if(isset($Articl->videoURL) && $Articl->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Articl->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
         <?php else:?>		

                        <img src="<?php echo base_url().'media/upload/recipes/'.$Articl->FeaturedImage;?>" alt="<?php echo $Articl->imgalt;?>"  class="img-responsive br1" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'">
           
            <?php endif;?>
                        <div class="post-title4">
                      <?php if($cat) : ?>
                 <h5 class="lable-sty lnk" onclick="window.open('<?php echo base_url().'recipes/'.$cat->Url?>')"><?php  echo $cat->CategoryTitle;?></h5>
                  <?php endif;?>
                    </div>
                  <h3 class="featurettl" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'"><?php echo $Articl->PageTitle ?></h3>
                 <ul class="list-inline mt-10 mb-30">
								<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
								<li>
								<a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,20); ?></a>
								</li>
								<li><a href="javascript:void(0);" title="Comments" class="pull-left"><i class="icon-comment"></i> </a> <span class="num"><fb:comments-count href="<?php echo base_url().'article/'.$Articl->Url;?>"></fb:comments-count></span></li>
								<li><li><a href="javascript:void(0);" title="views" class="pull-left"><i class="icon-eye"></i></a> <span class="num"> <?php if($Articl->Views > 1000)
					  {
                    	echo round(($Articl->Views/1000),1).' K';
                       }
                      else
                      {
                      echo $Articl->Views;
                      }
                      ?></span></li>

<?php $savecl=''; $un=''; 
if($this->M_Recipes->isMysaveRecipe($Articl->idRecepie)){	$savecl='art_saved'; $un='un';  } ?>
					<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>" id="bookm<?php echo $Articl->idRecepie;?>"  onclick="<?php echo $un;?>SaveRecipe(<?php echo $Articl->idRecepie;?>)"></i></a></li>
							</ul>
                 
                    </div>
                  <?php if ($count==2)
                    {
                        echo '<div class="clearfix"></div>';
                        $count=0;
                    }
                    else
                    {
                        $count++;
                    } ?>  
                    <?php 
                    endforeach;
                     endif; ?>
                     </div>
                        <div class="clearfix"></div>
                        </div>
                        
                    </div>   
                 </div>
            </div>       
		
	</div>
	<div class="modal fade rs_mypopup" id="author_follow" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">		<span aria-hidden="true">×</span></button>
				</div>
				<div class="modal-body">
					<div class="col-sm-6" style="background: #fff;float: none;margin: 0 auto;padding: 20px; 0">
						<div class="text-center" style="border: 1px solid #ddd;	margin: 0 15px;">
							<h4>Followers</h4>
						</div>
						<?php
							$follower =$this->M_Author->getmyFollower($Author->id);
							if($follower): 
								foreach ($follower as $user):
									$userx= $this->M_User->getUserInfo($user->idUser);
						?>
						<div style="margin: 10px 0;">
							<div class="col-sm-3">
								<?php if($userx->ProfilePic): ?>
										<img src="<?php echo base_url()."media/upload/user/".$userx->ProfilePic ?>" class="img-responsive">
								<?php else: ?>
									<img src="http://veganfirst.com/media/upload/user/writer-pic.jpg" class="img-responsive" style="widows:200px;">
								<?php endif; ?>       
							</div>
							<div class="col-sm-9">
								<h4><a href="javascript:void(0);"  onclick="location.href='<?php echo base_url()?>user/profile/<?php echo $userx->idUser;?>'"><?php echo $userx->Name;?></a></h4>
								<?php echo $userx->city;?>
							</div>
						</div>
						<div class="clearfix"></div>
						<?php
								endforeach;
							endif;
						?>
					</div>
				</div>								  
			</div>
		</div>
	</div>
	<div class="modal fade" id="follow" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<?php if(isset($Message)):?>
						<h3><?php echo $Message;?></h3>
					<?php endif; ?>
			  	</div>								  
			</div>
		</div>
	</div>        
	<?php $this->load->view('mobile/footer'); ?>
	<?php if(isset($Message)):?>
		<script type="text/javascript">
			$(window).load(function()
			{
				$('#follow').modal('show');
			});
		</script>
	<?php endif; ?> 