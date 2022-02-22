<?php $this->load->view('mobile/header'); ?>
<style>
.form-control {
    font-size: 18px;
    line-height: 32px;
}
</style>
	<div class="main">
		<div class="container">
			<div class="row text-center mt-10">
				<img src="<?php echo base_url(); ?>assetsNew/images/newsletternew.jpg"  alt="Veganfirst Newsletter" class="img-responsive;">
			</div>
			<div class="row text-center">
				<h3 class="headpron">Never Miss A Thing</h3>
			</div>
			<div class="row text-center">
				<p class="decshome mt-10">Get the latest reading recomendations and get to know about everything vegan.</p>
			</div>
			<form method="post" action="<?php echo base_url();?>newsletter" class="text-center" name="nfform"  onSubmit="return validateSubscribe()" style="float: none;margin: 0 auto;">
				<div class="row text-center" style="margin: 2% 0% 2%;">
					<div class="col-sm-9">
						<div class="form-group">
							<input type="email" value="" name="Email" placeholder="Email" class="form-control"  style="box-shadow: inset 0 -2px 0 0 rgba(0,0,0,0.25);" />
						</div>
                         <div class="radio mt-5  pull-left">
                        	<label><input type="radio" name="type_id" value="1"><span class="circle"></span><span class="check"></span>Vegan News & More</label>
                         </div>
                         <div class="radio mt-5  pull-left">   
                            <label><input type="radio" name="type_id" value="2"><span class="circle"></span><span class="check"></span>Vegan Recipes</label>
                          </div>
                         <div class="radio mt-5  pull-left">
                            <label><input type="radio" name="type_id" value="0"><span class="circle"></span><span class="check"></span>Both</label>
						</div>
                       
                      
                        <div id="Email" style="clear: both;"></div>
					</div>
					<div class="col-sm-3">
						<button type="submit" style="float: left;letter-spacing: 1px; width:100%" class="btn btn-success btn-lg">SUBSCRIBE</button>
                        
					</div>
				</div>
			</form>
		</div><!--containers ends here-->
        <div class="clearfix mb-30"></div>
	<?php $this->load->view('mobile/footer'); ?>	


