

<?php

        $this->load->view('templates/header');

?>  



	<div class="clearfix rs_toppadder30"></div>

	<div class="container pad0">

    	<img src="<?php echo base_url(); ?>media/images/cover<?php echo $User->cover?>.jpg" class="img-responsive" style="width:100%;"><div class="profilecls">

        	<div class="row">

                <div class="col-md-3 col-sm-5 col-xs-5">

                

                <?php if($User->ProfilePic) : ?>

                    <img src="<?php echo base_url().'media/upload/user/'.$User->ProfilePic; ?>" class="img-thumbnail img-responsive">

                <?php else:?>    

                  <img src="<?php echo base_url(); ?>media/images/writer-pic.jpg" class="img-circle img-thumbnail img-responsive"> 

				  <?php endif;?>  

                </div>

                <div class="col-md-9 col-sm-7 col-xs-12">

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

                	<a href="<?php echo base_url().'user/message'?>"><i class="fa fa-envelope-o"></i> My Messages</a>

                </div>

                

                <div class="topbottombrd3pr">

                	<a href="<?php echo base_url().'user/article'?>"><i class="fa fa-file-text-o"></i> Saved Articles</a>

                </div>

                <div class="topbottombrd3pr" style="border-bottom: 1px solid #ddd;">

                	<a href="<?php echo base_url().'user/recipe'?>"><i class="fa fa-spoon"></i> Saved Recipes</a>

                </div>

            </div><!--left side ends here-->

        

        

           <div class="col-md-9 col-xs-12 bdlft">

           

           <div class="row">

                

                <div class="clearfix"></div> 

           

           

            <?php 

		$i=0;

		

		$this->load->model("m_author");

		$this->m_author= new m_author();

		$this->load->model("m_recipes");

		$this->M_Recipes = new M_recipes();

		if(isset($Article)):

		foreach($Article as $Arti) :

		

		

		

		if($_product=$this->M_Recipes->getRecipesInfo($Arti->idSave)):

		

		 ?>

        	

                

                <div class="col-md-4 pad0"> 

                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <img src="<?php echo base_url();?>media/upload/recipes/thumb/<?php echo $_product->FeaturedImage; ?>" class="img-responsive" alt="" style="width:100%;">	

                           	<div class="home_art"><a href="javascript:void(0);" data-toggle="tooltip" data-placement="left" id="bookm<?=$_product->idRecepie;?>" class="saveicon" onclick="unSaveRecipe(<?=$_product->idRecepie;?>)" title="Unsave" data-content=""><i class="fa fa-times" aria-hidden="true" ></i></a></div>		

                        </div>										

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 

                                	<div style="padding-top:5px;"><a href="<?php echo base_url();?>recipe/<?php echo $_product->Url; ?> " class="tstcls" style="font-size: 16px;line-height: 0;"><?php echo $_product->PageTitle; ?> </a></div>

                                    <div class="rs_bottompadder10 lnespace">by 

                                    

                                    <?php  $auth = $this->m_author->getAuthorInfo($_product->recepieBy);

									?>

                                    <a href="<?=base_url().'author/'.$auth->id?>"><?php echo $auth->FirstName.' '.$auth->LastName; ?></a></div>

                                    <div class="clearfix"></div>                                      

                           

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

			else:

			?>

            <div class="text-center">

			<h3>No Recipe Saved</h3>

            </div>

			<?

			endif;

			?>

                </div>

           </div><!--center part ends here-->

           

        </div><!--row ends here-->

             

                

                       

                       

	</div>

    

    

    <!-- Large modal -->









    

    <div class="clearfix rs_toppadder30"></div>

  <?php

        $this->load->view('templates/footer');

?>

