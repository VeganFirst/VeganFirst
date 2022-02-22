<?php $this->load->view('mobile/header'); ?>
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
            .nav-tabs > li > a { border: none; color: #6cbd45 !important; }
            .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #292b28 !important; background: transparent; }
            .nav-tabs > li > a::after { content: ""; background: #292b28; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
            .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
            .tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #6cbd45; }
        /*.tab-pane { padding: 15px 0; }*/
        /*.tab-content{padding:20px}*/
            .nav>li>a {position: relative;display: block;padding: 25px 25px 0px 5px;}
            .card {background: #FFF none repeat scroll 0% 0%; box-shadow: none !important;/*box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);*/ margin-bottom: 30px; }
        /*body{ background: #EDECEC; padding:50px}*/
    </style>
        
        <div class="clearfix rs_toppadder30"></div>     
<div class="container-fluid p-0">
<div class="col-md-12 col-xs-12">
                <div class="rs_toppadder20">    
                              <!-- Nav tabs -->
                              <ul class="nav nav-tabs" role="tablist" style="z-index: 1000;">
                                    <li role="presentation" class="active">
                                     <a href="#article" aria-controls="article" role="tab" data-toggle="tab" aria-expanded="true" class="kltb">Articles</a>
                                    </li>
                                    
                                    <li role="presentation" class="">
                                        <a href="#recipes" aria-controls="recipes" role="tab" data-toggle="tab" aria-expanded="false" class="kltb">Recipes</a>
                                    </li>                              
                              </ul>
                            
                              <!-- Tab panes -->
                              <div class="tab-content">
             <div role="tabpanel" class="tab-pane active" id="article">
                <div class="rs_toppadder20">
               <div class="bs-example" data-example-id="simple-table"> 
        <div class="row pt-30">
        <?php
		if(isset($Article)) :
		foreach($Article as $Articl) : 
		if($Articl->isPublished==1):
		$cat = $this->M_Category->getCategoryInfo_art($Articl->category);
		$author = $this->M_Author->getAuthorInfo($Articl->Author); ?>
        
        	<div class="col-sm-4 col-xs-12 col-md-6">
            <?php if(isset($Articl->videoURL) && $Articl->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Articl->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
         <?php else:?> 
            
            
			<img src="<?php echo base_url().'media/upload/article/'.$Articl->FeaturedImage;?>" alt="<?php echo $Articl->imgalt;?>"  class="img-responsive br1" onclick="location.href='<?php echo base_url().'article/'.$Articl->Url; ?>'">
            <?php endif;?>
            
        <?php if($cat) : ?>
        <div class="post-title4">
        <a href="<?php echo base_url().'article/category/'.$cat->Url?>">
        <h5 class="lable-sty lnk"><?php  echo $cat->CategoryTitle;?></h5></a></div>
        <?php endif; ?>
            
        <a href="<?php echo base_url().'article/'.$Articl->Url; ?>"><h3 class="featurettl"><?php echo $Articl->PageTitle ?></h3></a>
    
    <ul class="list-inline mt-10 mb-30">
								<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
								<li>
								<a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,20); ?></a>
								</li>
								
								<li><i class="icon-eye"></i> <span class="num"> <?php if($Articl->Views > 1000)
					  {
                    	echo round(($Articl->Views/1000),1).' K';
                       }
                      else
                      {
                      echo $Articl->Views;
                      }
                      ?></span></li>

<?php $savecl=''; $un=''; 
if($this->M_Article->isMysaveArticle($Articl->idArticle)){	$savecl='art_saved';$un='un';  } ?>
				<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>"  onclick="<?php echo $un; ?>SaveArticle(<?php echo $Articl->idArticle;?>)" id="bookm<?php echo $Articl->idArticle;?>"></i></a></li>
							</ul>
</div>
            
            <?php

endif;
			endforeach;
			else: ?>
            
            <div class="rs_toppadder20"><h2>Article Not Found</h2></div>
			
			
			<?php  endif; ?>
            
    </div>

                                        </div>
                                    </div>
                                </div>
       
         <div role="tabpanel" class="tab-pane" id="recipes">
              <div class="pt-30"></div>
              <div class="row">
                 <?php 
				 if($Recipes):
				
				 foreach($Recipes as $Articl) : 
                $cat = $this->M_Category->getCategoryInfo_rec($Articl->Category);
					$author = $this->M_Author->getAuthorInfo($Articl->recepieBy);
					?>
					<div class="col-sm-4">
                   <?php if(isset($Articl->videoURL) && $Articl->videoURL!=NULL):?>
            <div class="embed-responsive embed-responsive-4by3 br1">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $Articl->videoURL; ?>?controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></div>
         <?php else:?>  
                    
                   <img src="<?php echo base_url().'media/upload/recipes/'.$Articl->FeaturedImage;?>" alt="<?php echo $Articl->imgalt;?>"  class="img-responsive br1" onclick="location.href='<?php echo base_url().'recipe/'.$Articl->Url; ?>'">
                     
            <?php endif;?>   
                        
                        <div class="post-title4">
                      <?php if($cat) : ?>
                 <a href="<?php echo base_url().'recipes/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php  echo $cat->CategoryTitle;?></h5></a>
                  <?php endif;?>
                    </div>
                  <a href="<?php echo base_url().'recipe/'.$Articl->Url; ?>"><h3 class="featurettl"><?php echo $Articl->PageTitle ?></h3></a>
                 
                 <ul class="list-inline mt-10 mb-30">
								<li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>" onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
								<li>
								<a href="<?php echo base_url().'author/'.$author->id;?>" class="pronam"><?php echo substr($author->FirstName.' '.$author->LastName,0,20); ?></a>
								</li>
								
								<li><i class="icon-eye"></i> <span class="num"> <?php if($Articl->Views > 1000) { echo round(($Articl->Views/1000),1).' K'; } else { echo $Articl->Views;}?></span></li>

<?php $savecl=''; $un=''; 
if($this->M_Recipes->isMysaveRecipe($Articl->idRecepie)){	$savecl='art_saved'; $un='un';  } ?>

	<li><a href="javascript:void(0);"><i class="icon-bookmark <?php echo $savecl;?>" id="bookm<?php echo $Articl->idRecepie;?>"  onclick="<?php echo $un;?>SaveRecipe(<?php echo $Articl->idRecepie;?>)"></i></a></li>
							</ul>
                    </div>
                  
                <?php endforeach;
				else:
				?> 
                <div class="rs_toppadder20"><h2>Recipe Not Found</h2></div>
                <?php endif;?>
                                </div>                          
                             </div>
                            
                            </div>
           </div>

</div>








		
        </div>
        
<?php  $this->load->view('mobile/footer'); ?>