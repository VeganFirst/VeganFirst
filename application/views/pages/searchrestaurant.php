<?php 		$this->load->view('templates/header'); ?>
<div id="fb-root"></div>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '815966445202009',
      xfbml      : true,
      version    : 'v2.6'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>


<script>
document.getElementById('shareBtn').onclick = function() {
  FB.ui({
    method: 'share',
    mobile_iframe: true,
    href: '<?php echo current_url()?>',
  }, function(response){});
}
</script>


<meta property="og:title" content="title" />
<meta property="og:description" content="description" />
<meta property="og:image" content="thumbnail_image" />
<div class="clearfix rs_toppadder30"></div>     
<div class="container pad0">
    	<img src="<?php echo base_url()."media/"; ?>images/restlisting.png" class="img-responsive" style="width:100%;">
        <div class="clearfix linespace2 mrg"></div>
        
<?php foreach($Restaurants as $Restaurant) : 

if($Restaurant->isPremium == 1) :

?>

        
  <div class=""> 
   	<div class="row">
       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <img src="<?php echo base_url()."media/upload/restaurant/".$Restaurant->FeaturedImage; ?>" class="img-responsive" alt="" style="width:100%;">	
       </div>										
       <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
       <div class="row">
       <div class="col-sm-9">
           <h2 class=""><a href="#"><?php echo $Restaurant->restaurantName; ?> </a></h2>
           <p><?php echo $Restaurant->ShortDesc; ?></p>
                                    
            <div class="clearfix"></div>
       </div>
       <div class="col-sm-3">
         <a href="<?php echo base_url()."restaurant/".$Restaurant->Url; ?>" class="rs_button rs_button_orange viewdts">View Details</a>
       </div>
    </div>                                                                            
  <ul class="social-icons icon-circle list-unstyled list-inline pull-right rs_toppadder50" style="margin-bottom:0">
    <li> <a href="#"><i class="fa fa-facebook"></i></a></li>
    <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
    <li> <a href="#"><i class="fa fa-pinterest"></i></a></li>
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
     <img src="<?php echo base_url()."media/upload/restaurant/".$Restaurant->FeaturedImage; ?>" class="img-responsive" alt="" style="width:100%;">	
     </div>										
     <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 
     <h2 class=""><a href="#"><?php echo $Restaurant->restaurantName; ?></a></h2>
     <p><?php echo $Restaurant->ShortDesc; ?></p>
 </div>										
</div>
</div>
<div class="clearfix linespace2 mrg"></div> 



<?
endif;
 endforeach; ?>        
		<?php
        $this->load->view('templates/footer');
?>