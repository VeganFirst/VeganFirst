<?php $this->load->view('templates/header'); ?>
	<div class="main">
		<div class="container">
			<div class="row text-center">
				<img src="<?php echo base_url(); ?>assetsNew/images/newsletternew.jpg" alt="Veganfirst Newsletter" class="img-responsive;">
			</div>
			<div class="row text-center">
				<h3 class="headproh3">Never Miss A Thing</h3>
			</div>
			<div class="row text-center">
				<p class="decshome" style="font-size: 22px;margin-top: 1%;font-family: "Source Sans Pro";">Get the latest reading recomendations and get to know about everything vegan.</p>
			</div>
			<form method="post" action="<?php echo base_url();?>newsletter" class="col-sm-9" name="nfform"  onSubmit="return validateSubscribe()" style="float: none;margin: 0 auto;">
				<div class="row" style="margin: 2% 0% 2%;">
					<div class="col-sm-9">
						<div class="form-group">
							<input type="email" value="" name="Email" placeholder="Email" class="form-control"  style="box-shadow: inset 0 -2px 0 0 rgba(0,0,0,0.25);" />
						</div>
                        
                          <div class="radio col-sm-2 mt-5">
                                <label><input type="radio" name="type_id" value="1"><span class="circle"></span><span class="check"></span>News</label>
                          </div>
                          
                         <div class="radio col-sm-2 mt-5">   
                            <label><input type="radio" name="type_id" value="2"><span class="circle"></span><span class="check"></span>Recipes</label>
                          </div>
                          <div class="radio col-sm-2 mt-5">   
                            <label><input type="radio" name="type_id" value="3"><span class="circle"></span><span class="check"></span>Fsetival</label>
                          </div>
                          <div class="radio col-sm-6 mt-5">   
                            <label><input type="radio" name="type_id" value="4"><span class="circle"></span><span class="check"></span>Business News and Conference</label>
                          </div>
                          
                          <div class="radio col-sm-6 mt-5">   
                            <label><input type="radio" name="type_id" value="5"><span class="circle"></span><span class="check"></span>Govt Policies and Subsidies</label>
                          </div>
                          
                          <div class="radio col-sm-6 mt-5">   
                            <label><input type="radio" name="type_id" value="6"><span class="circle"></span><span class="check"></span>Nutritionists, doctors, experts</label>
                          </div>
                      
                        <div id="Email" style="clear: both;"></div>
					</div>
					<div class="col-sm-3">
						<button type="submit" style="float: left;letter-spacing: 1px;" class="btn btn-success btn-lg">SUBSCRIBE</button>
                        
					</div>
				</div>
			</form>
		</div><!--containers ends here-->
	<?php $this->load->view('templates/footer'); ?>	


