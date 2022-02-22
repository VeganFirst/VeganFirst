<?php 		$this->load->view('templates/header'); ?>







<div class="clearfix rs_toppadder30"></div>     

<div class="container pad0">

    	

        <?php foreach($Products as $_product) : 

				if($_product->isPublished==1) :

		

		?>

        

               <div class=""> 

                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                            <img src="<?php echo base_url();?>media/upload/products/<?php echo $_product->FeaturedImage; ?>" class="img-responsive" alt="" style="width:100%;">

                      <div><a href="javascript:void(0);" data-toggle="tooltip" data-placement="left" id="bookm<?=$_product->idProduct;?>" class="saveicon" onclick="SaveProduct(<?=$_product->idProduct;?>)" title="" data-content=""><i class="fa fa-plus-circle" aria-hidden="true" ></i></a></div>	

                           								

                        </div>										

                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">                        

                           <div class="row">

                            	<div class="col-sm-9">

                                	<h2 class=""><?php echo $_product->PageTitle; ?> </h2>

                                    <p class="rs_toppadder20"><?php echo $_product->ShortDesc;?></p>

                                    <!--<div class="rs_bottompadder10 lnespace">by <a href="#">Pooja Sharma</a>   |   <a href="#">26 March, 2016</a></div>-->

                                    <div class="clearfix"></div>

                                </div>

                                <div class="col-sm-3">

                                	<a href="<?php echo base_url();?>product/<?php echo $_product->Url; ?> " class="rs_button rs_button_orange viewdts">View Details</a>

                                </div>

                           </div>                                                                            

                           <ul class="social-icons icon-circle list-unstyled list-inline pull-right rs_toppadder20" style="margin-bottom:0">

                                <!--<li style="vertical-align:sub">                                	

                                	<div class="tlecmntshare rs_toppadder10"><span class="numstyle">28K</span> <a href="#" class="viewcls">SHARES</a></div>

                                </li>-->

                                <li> <a href="http://www.facebook.com/sharer.php?u=<?php echo base_url().'product/'.$_product->Url;?>" target="_blank"><i class="fa fa-facebook"></i></a></li>

                                <li> <a href="http://twitter.com/share?url=<?php echo base_url().'product/'.$_product->Url;?>&text=<?php echo $_product->PageTitle; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>

                                <li> <a href="http://pinterest.com/pin/create/button/?url=<?php echo base_url().'product/'.$_product->Url;?>&media=<?php echo base_url();?>media/upload/products/<?php echo $_product->FeaturedImage; ?>&description=<?php echo $_product->PageTitle; ?>" class="pin-it-button" count-layout="horizontal" target="_blank"><i class="fa fa-pinterest"></i></a></li>

                                <!--<li> <a href="#"><i class="fa fa-instagram"></i></a></li>-->

                           </ul> 

                        </div>										

                    </div>

                </div>

                

                <div class="clearfix linespace2 mrg"></div> 

              <?php 

			  else :

			  ?>  

                <div class=""> 

                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                            <img src="<?php echo base_url();?>media/upload/products/<?php echo $_product->FeaturedImage; ?>" class="img-responsive" alt="" style="width:100%;">	

                           <!-- <div class="rs_featureddiv" style="left: 35px;">

                        		<a href="#"><img src="images/pin.png" class="img-responsive" style="width: 60px;"></a>

                       		</div>	-->								

                        </div>										

                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">                        

                           <div class="row">

                            	

                                	<h2 class=""><?php echo $_product->PageTitle; ?></h2>

                                    <p class="rs_toppadder20"><?php echo $_product->ShortDesc;?></p>

                                    <div class="clearfix"></div>

                                

                                

                           </div>                                                                            

                           

                        </div>										

                    </div>

                </div>

               

                

               <div class="clearfix linespace2 mrg"></div>

             <?php endif;

			  endforeach; ?> 

              

              

               <div class="container pad0  text-center">

			<?php echo $this->pagination->create_links();?> 

	</div>         

	</div>



		<?php

        $this->load->view('templates/footer');

?>