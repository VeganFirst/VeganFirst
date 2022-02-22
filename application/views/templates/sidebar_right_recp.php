<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                	<div class="bordercol">

                	<h2 class="text-uppercase tilt1 text-center" style="margin: 0;">Latest</h2>

                    <?php

                    $this->db->limit(3);

					$this->db->select('*');

					$this->db->from('recepie');

					$this->db->where('recepie.isActive',1);

					$this->db->order_by("postTime", "desc"); 

					$this->db->join('author', 'author.id = recepie.recepieBy');

					$Queryp = $this->db->get();
					$Latest = $Queryp->result();
					foreach($Latest as $Larticl) :
		?>

                   		 <div class="row rs_toppadder10" style="padding: 0px 15px 0px;">

                            <div class="col-sm-12" style="margin: 10px 0;padding: 0;">

                                <a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'recipe/'.$Larticl->Url?>'"><img src="<?php echo base_url()."media/upload/recipes/thumb/".$Larticl->FeaturedImage; ?>" class="img-responsive" alt="" style="width:100%;" ></a>										

                            </div>										

                            <div class="col-sm-12" style="padding:0">

                            <p class="headingclssb">

							<a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'recipe/'.$Larticl->Url?>'"><?php echo $Larticl->PageTitle; ?></a></p>

                                <div class="rs_bottompadder10 editorcls">

                                	by <a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'author/'.$Larticl->id?>'"><?php echo $Larticl->FirstName.' '.$Larticl->LastName; ?></a>

                                </div>                               

                            </div>  

                           <div class="linecstm visible-lg hidden-md hidden-sm hidden-xs"></div>                           

                      </div>

                      

                      

                    <?php endforeach;?>  

                      

                      

                      

                      

                     

                </div>     

                                

                <div class="">

                	<?php

					$this->load->model("m_site");

        			$this->M_Site = new m_site();

                    $AddBlock= $this->M_Site->getAddConfig('addBlock/2');

					echo $AddBlock->addBlock;

					?>

                </div>

                

                <div class="clearfix rs_bottompadder20"></div>

                

                <div class="rs_toppadder10" style="background: #fd9073;">

                  <h2 class="text-center rs_bottompadder10" style="font-family:Perfograma; color:#fff;">Sign Up</h2>

                	  <form class="rs_bottompadder30" method="post" action="<?php echo base_url()?>newsletter">                       	  

                          <div class="col-sm-10 mrgn0auto">                                

                            <input type="text" name="Name" class="form-control" placeholder="NAME" required>

                          </div>

                          <div class="col-sm-10 mrgn0auto rs_toppadder20">                        

                            <input type="email" name="Email" class="form-control twlel" placeholder="EMAIL ADDRESS" required>

                          </div>  

                          <div class="col-sm-10 mrgn0auto rs_toppadder20">                        

                            <input type="submit" class="rs_button rs_button_orange center-block newsbtn" value="Let's Go">

                          </div>                                             

                        </form>

                </div>

                

                <div class="bordercol rs_toppadder20">

                	<h2 class="text-uppercase tilt1 text-center" style="margin: 0;">Trending</h2>

                    

                    <?php

					$this->db->limit(3);

					$this->db->select('*');

					$this->db->from('recepie');

					$this->db->where('recepie.isActive',1);

					$this->db->order_by("Views", "desc"); 

					$this->db->join('author', 'author.id = recepie.recepieBy');

					$Queryt = $this->db->get();
					$Trending = $Queryt->result();
					foreach($Trending as $Tarticl) :
		?>

                   		 <div class="row rs_toppadder10" style="padding: 0px 15px 0px;">

                            <div class="col-sm-12" style="margin: 10px 0;padding: 0;">

                                <a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'recipe/'.$Tarticl->Url?>'"><img src="<?php echo base_url()."media/upload/recipes/thumb/".$Tarticl->FeaturedImage; ?>" class="img-responsive" alt="" style="width:100%;" ></a>										

                            </div>										

                            <div class="col-sm-12" style="padding:0">

                            <p  class="headingclssb"><a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'recipe/'.$Tarticl->Url?>'"><?php echo $Tarticl->PageTitle; ?></a></p>

                                

                                <div class="rs_bottompadder10 editorcls">

                                	by <a href="javascript:void(0);" onclick="location.href='<?php echo base_url().'author/'.$Tarticl->id?>'"><?php echo $Tarticl->FirstName.' '.$Tarticl->LastName; ?></a>

                                    </div>                               

                            </div>  

                           <div class="linecstm visible-lg hidden-md hidden-sm hidden-xs"></div>                           

                      </div>

                      

                      

                  <?php endforeach;?>    

                      

                      

                      

                      

                      

                </div>

                

                <?php /*?><div class="getlistcs">GET LISTED</div>

                <div class="clearfix rs_bottompadder10"></div>

                <?php

                $Config= $this->M_Site->getAllConfig();

		

		$Prod1=0; $Prod2=0; $Prod3=0; $Prod4=0;  $Prod="";

 		foreach($Config as $key => $val)

		{

		 if($val->path == 'home/Article')

		 {

			$Articlsl= $val->value;

		 }

		 if($val->path == 'home/Product/1')

		 {

			$Prod.= "WHERE `idProduct`=".$val->value;

		 }

		 if($val->path == 'home/Product/2')

		 {

			$Prod.= " OR `idProduct`=".$val->value;

		 }

		 if($val->path == 'home/Product/3')

		 {

			$Prod.= " OR `idProduct`=".$val->value;

		 }

		 if($val->path == 'home/Product/4')

		 {

			$Prod.= " OR `idProduct`=".$val->value;

		 }

                

		}

		

		$sql="Select * from products ".$Prod;

		$Query=$this->db->query($sql);	

		$Results = $Query->result();

		$Products=$Results;

                ?>

                    <div class="col-md-12 rs_bottompadder10">

                            <div class="row">

                            <?php foreach($Products as $prod) : ?>

                            

                            <div class="col-md-6 col-sm-4 col-xs-6 padd1">

                                <div class="flip_panel">

                                    <div class="front card">

                                        <img src="<?php echo base_url()."media/upload/products/".$prod->FeaturedImage;?>" class="img-responsive" alt="" style="width:100%;height: 170px;">

                                    </div>   

                                    <div class="back card">

                                         <div class="TextOnTop">

                                             <h3><a href="<?php echo base_url()."product/".$prod->Url;?>"><?php echo $prod->PageTitle;?></a></h3>

                                             <p class="whtclr"><?php echo substr($prod->ShortDesc,0,50);?></p>

                                         </div>

                                    </div>

                                </div>

                            </div>

                            

                            <?php endforeach;?>

                             

                             

                             

                             

                        </div>

                    </div><?php */?>

                    

                                    

                </div>