

<?php

        $this->load->view('templates/header');

?>  



	<div class="clearfix rs_toppadder30"></div>

	<div class="container pad0">

    	<img src="<?php echo base_url(); ?>media/images/cover<?php echo $User->cover?>.jpg" class="img-responsive" style="width:100%;">
      	<div class="profilecls">

        	<div class="row">

                <div class="col-md-3 col-xs-5">

                

                <?php if($User->ProfilePic) : ?>

                    <img src="<?php echo base_url().'media/upload/user/'.$User->ProfilePic; ?>" class="img-thumbnail img-responsive">

                <?php else:?>    

                  <img src="<?php echo base_url(); ?>media/images/writer-pic.jpg" class="img-circle img-thumbnail img-responsive"> 

				  <?php endif;?>  

                </div>

                <div class="col-md-9 col-xs-12">

                	<h1 class="profttl"><?php echo $User->Name; ?></h1>

                    <h3><i class="fa fa-map-marker"></i> <?php echo $User->city?></h3>

                </div>

            </div>

        </div>

        

        <div class="row">

        	<div class="col-md-3 col-xs-12">

            	<div class="rs_bottompadder20">

            		

                  

                </div>

                <div class="topbottombrd3pr">

                	<a href="<?php echo base_url().'user/dashboard'?>"><i class="fa fa-user"></i> Profile</a>

                </div>

                <div class="topbottombrd3pr">

                	<a href="<?php echo base_url().'user/message'?>"><i class="fa fa-envelope-o"></i> My Messages </a>

                </div>

                

                <div class="topbottombrd3pr">

                	<a href="<?php echo base_url().'user/article'?>"><i class="fa fa-file-text-o"></i> Saved Articles</a>

                </div>

                <div class="topbottombrd3pr" style="border-bottom: 1px solid #ddd;">

                	<a href="<?php echo base_url().'user/recipe'?>"><i class="fa fa-spoon"></i> Saved Recipes</a>

                </div>

            </div><!--left side ends here-->

        

        

           <div class="col-md-9 col-xs-12 bdlft">

           

           

           

           

            <?php 

		$i=0;

		if(isset($Article)):

		foreach($Article as $Arti) :

		$this->load->model("m_article");

		$this->M_Article = new M_Article();

		

		if($Articl=$this->M_Article->getArticleInfo($Arti->idSave)):

		

		 ?>

        	<div class="col-md-4 pad10 rs_bottompadder30" id="art<?=$Articl->idArticle;?>">

            	<div class="wrtrbrdr10">

                    <div class="row">

                        <div class="col-sm-12 col-xs-12">

                            

                            <?php if($Articl->FeaturedImage != NULL) : ?>

                            

                	<img src="<?php echo base_url();?>media/upload/article/<?php echo $Articl->FeaturedImage; ?>" class="img-responsive" style="width:100%;">

                    <div class="home_art"><a href="javascript:void(0);" data-toggle="tooltip" data-placement="left" id="bookm<?=$Articl->idArticle;?>" class="saveicon" onclick="unSaveArticle(<?=$Articl->idArticle;?>)" title="Unsave" data-content=""><i class="fa fa-times" aria-hidden="true" ></i></a></div>

                    

                    

                    <?php endif ?>  									

                        </div>										

                        <div class="col-sm-12 col-xs-12" >

                        <div style="padding-top: 5px;"><a href="<?php echo base_url().'article/'.$Articl->Url;?>" class="tstcls" style="font-size: 16px;line-height: 0;"><?php echo $Articl->PageTitle; ?></a></div>

                            

                          <div class="tlecmntshare">

                               <span class="numstyle"><?php

							   if($Articl->Views > 1000)

										{

										echo round(($Articl->Views/1000),2).' K';

										}

										else

										{

											echo $Articl->Views;

										}

										?></span> <a href="#" class="viewcls">VIEWS</a> 

                               

                           </div>

                        </div>										

                    </div>

                </div>

            </div>

            

            <?php 

			

			endif;

			

			$i++;

			

			

			if($i%3==0)

			{ echo "<div class='clearfix'></div>";

			}

			endforeach;

			endif;

			?>

                

           </div><!--center part ends here-->

           

        </div><!--row ends here-->

             

                

                       

                       

	</div>

    

    

    <!-- Large modal -->









    

    <div class="clearfix rs_toppadder30"></div>

  <?php

        $this->load->view('templates/footer');

?>

