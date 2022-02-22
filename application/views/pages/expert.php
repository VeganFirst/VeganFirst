<?php $this->load->view('templates/header'); ?>
<style>
.ex_bg{background: #f9f9f9;}
.ex_bg img{padding:15px 10px;}
.colmn{padding-left: 10px;
    padding-right: 10px;}
</style>

<!-- /21721917858/Carmesi-970x90 -->
<!--<div id='div-gpt-ad-1544174697220-0' style='height:90px; width:970px; display: block; margin-left: auto; margin-right: auto;'>
<script>
googletag.cmd.push(function() { googletag.display('div-gpt-ad-1544174697220-0'); });
</script>
</div>-->





<div class="main">
	<div class="container">
		<div class="row">
			<div class="row mt-0 ad_block text-center" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear" >
              <div class="ttl">Advertisement</div>
              <img src="<?php echo Base_Url().'media/add_full.png'?>" class="img-responsive mr0auto"  />
            </div>
		</div>
	</div>
 <div class="row mt-0 pt-30 pb-30" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear" style="background:#3a1057">
     <div class="container mt-50 mb-50">
     <h2 class="text-center white mt-50"><strong>PRO TIPS</strong></h2>
     <h3 class="text-center white mt-10 mb-50"><strong>Get recommendations and advice by leading experts</strong></h3>
     </div>
</div>
<div class="container">
		<div class="row">
      	<?php $i=0; if($Columnist): foreach($Columnist as $colmn): $i= $i+50;?>
        <div class="col-sm-6 mb-10 mt-10 colmn" data-aos="fade-up" data-aos-delay="<?php echo $i?>" data-aos-easing="linear">
        <a href="<?php echo Base_Url().'experts/'.$colmn->Url?>" style="color:inherit">
        <div class="ex_bg ">
            <div class="row">
				<div class="col-sm-4">
                <img src="<?php echo Base_Url().'media/upload/columnist/'.$colmn->Picture?>" class="img-responsive img-circle" />
                </div>      
                <div class="col-sm-8">
                <h3 class="mt-10 mb-0"><strong><?php echo $colmn->Name?></strong></h3>
                <h5 class="mt-5 mb-5"><strong><?php echo $colmn->Speciality?></strong></h5>
                <p><?php echo substr($colmn->descrp,0,200)?></p>
                </div>            
       </div>     
            </div>
            
       </a>     
        </div>
          
        <?php endforeach; endif;?>
        </div>
</div>

<?php $this->load->view('templates/footer_nl');?>

<div class="container">
		<div class="row">
			<div class="row mt-0 ad_block text-center" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear" >
              <div class="ttl">Advertisement</div>
              <img src="<?php echo Base_Url().'media/add_full.png'?>" class="img-responsive mr0auto"  />
            </div>
		</div>
	</div>

</div>
    
<?php 
 $this->load->view('templates/footer'); ?>


