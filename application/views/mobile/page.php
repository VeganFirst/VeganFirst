<?php 		$this->load->view('mobile/header'); ?>
     
<div class="clearfix rs_toppadder10"></div>
<div class="container pad0 decshome">		
	<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h3 class="headpron"><?php echo $PageTitle; ?></h3>
        </div>
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="min-height: 37vh;" >
			<div style="border-top:1px solid #dbdbdb">
            <p></p>
			<?php echo $Page_desc; ?>
            </div>
	    </div>
	</div>										
</div>
</div>
<div class="clearfix pt-30"></div>
<?php $this->load->view('mobile/footer_nl');?>
<?php $this->load->view('mobile/footer');?>