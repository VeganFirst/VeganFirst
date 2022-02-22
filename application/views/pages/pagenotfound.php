<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 		$this->load->view('templates/header'); ?>
     
<div class="clearfix rs_toppadder10"></div>
<div class="container pad0">		
	<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="min-height: 50.7vh;">
		<h2><?php if(isset($heading))echo $heading; ?></h2>
		<?php if(isset($message))echo $message; ?>
        
        <div class="text-center">
		<div class="desc"><h2>Oops! Sorry, that page could'nt be found.</h2></div>
		            <a href="<?php echo base_url(); ?>" class="rs_button rs_button_orange viewdts"> Home </a>
		
	</div>
	</div>
	</div>										
</div>
</div>
		<?php
        $this->load->view('templates/footer');
?>
<script>
 window.setTimeout(function(){
        window.location.href = "https://www.veganfirst.com/";
    }, 5000);
</script>