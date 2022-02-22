<?php $this->load->view('templates/header'); ?>
	<script>
		function readURL(input,id)
		{
			if (input.files && input.files[0]) 
			{
				var reader = new FileReader();
				reader.onload = function (e) 
				{
					$('#'+id).attr('src', e.target.result);
				};
				reader.readAsDataURL(input.files[0]);
			}
		}

	</script>

	<style type="text/css">
		td 
		{    
			text-align: left;
			padding: 8px 0;
			border-bottom: 1px solid #eee;
			font-family: "Source Sans Pro";
			font-size: 16px;
			line-height: 24px;
			font-weight: 600;
		}
		.fw
		{
			font-weight: 400;
		}
		.btnn
 .form-group.label-floating:not(.is-empty) label.control-label {
    color: #A2AB9C;
}
	   .control-label{color: #A2AB9C !important;font-family: "Source Sans Pro";font-size: 13px !important;line-height: 15px !important; }
	   .form-control{font-size: 16px;line-height: 32px;}
	</style> 
<?php /*?>background-image: url(<?php echo base_url()."media/images/cover".$User->cover.".jpg"; ?>);<?php */?>
	<div class="prof_cat" id="notifications">
		<div class="pro_cat" style="background-image: url(<?php echo base_url()."assetsNew/img/user-profile.jpg"; ?>);background-attachment: fixed;min-height: 176px;background-size: 100%;"></div>
		<div class="clearfix"></div>
	</div>

	<div class="main">
		<div class="container">
			<div class="clearfix mt-30"></div>
			<div class="row">
				<div class="col-md-4">
					<div class="row">
						<form method="post" action="<?php echo base_url()?>user/Update" enctype="multipart/form-data">
							<div class="mt-90-m">
								<div class="col-sm-5" >
									<div class="form-group mt-0 pt-0">
										<?php if($User->ProfilePic) : ?>
											<img src="<?php echo base_url().'media/upload/user/'.$User->ProfilePic;?>" style="border-radius: 10px;"  class="img-responsive" onclick='$("#file").click()' id="imgprev">
										<?php else :?>
											<img src="<?php echo base_url();?>media/images/writer-pic.jpg" id="imgprev" style="border-radius: 10px;"  class="img-responsive" onclick='$("#file").click()'>
										<?php endif;?>
										
										<input style="display:none;" id="file" name="file" type="file" class="file" data-show-preview="false" onchange="readURL(this,'imgprev');">
									</div>
								</div>
                                <div class="col-sm-7 p-0">
                            
                            <p class="mt-80" style="color: #9c9c9c;">Click on Image to Change<br />Use a square image of 400x400</p>
                            </div>
								<div class="clearfix"></div>
                                
							</div>
							<div class="col-sm-10"> 
								<div class="form-group label-floating">
									<label class="control-label">FULL NAME</label>
									<input type="text" class="form-control" name="Name" value="<?php echo $User->Name; ?>">
								</div>
								<div class="form-group label-floating">
									<label class="control-label">ABOUT YOU</label>
									<textarea class="form-control" rows="3" name="about"><?php echo $User->about; ?></textarea>
								</div>
								<h4 class="title1 mt-30">PERSONAL INFO</h4>
								<div class="form-group label-floating">
									<label class="control-label">AGE</label>
									<input type="text" class="form-control" name="Age" value="<?php echo $User->Age; ?>">
								</div>

								<div class="form-group label-floating">
									<label class="control-label">GENDER</label>
									<select name="gender">
										<option value="Male" <?php if($User->gender=='Male') { echo 'selected';}?>>Male</option>
										<option value="Female" <?php if($User->gender=='Female') { echo 'selected';}?>>Female</option>
								 		<option value="Other" <?php if($User->gender=='Other') { echo 'selected';}?>>Other</option>
									</select>
								</div>

								<div class="form-group label-floating">
									<label class="control-label">LOCATION</label>
									<input type="text" class="form-control" name="city" value="<?php echo $User->city; ?>">
								</div>
								<div class="form-group label-floating">
									<label class="control-label">OCCUPATION</label>
									<input type="text" class="form-control" name="occuption" value="<?php echo $User->occuption; ?>">
								</div>
								<div class="form-group label-floating">
									<label class="control-label">DIET TYPE</label>
									<select name="isVegan">
										<option value="0" <?php if($User->isVegan==0) { echo 'selected';}?>>Not Vegan</option>
										<option value="1" <?php if($User->isVegan==1) { echo 'selected';}?>>Vegan</option>
										<option value="2" <?php if($User->isVegan==2) { echo 'selected';}?>>Non Disclosed</option>
									</select>
								</div>
								<div class="form-group label-floating">
									<label class="control-label">RELATIONSHIP</label>
									<select name="relationship">
										<option value="Single" <?php if($User->relationship=='Single') { echo 'selected';}?>>Single</option>
										<option value="Married" <?php if($User->relationship=='Married') { echo 'selected';}?>>Married</option>
										<option value="In a relationship" <?php if($User->relationship=='In a relationship') { echo 'selected';}?>>In a relationship</option>
										<option value="Not Disclosed" <?php if($User->relationship=='Not Disclosed') { echo 'selected';}?>>Not Disclosed</option>
									</select>
								</div>
								<h4 class="title1 mt-30">CONNECT</h4>
								<div class="form-group label-floating">
									<label class="control-label">FACEBOOK</label>
									<input type="text" class="form-control" name="fb" value="<?php echo $User->fb; ?>">
								</div>
								<div class="form-group label-floating">
									<label class="control-label">TWITTER</label>
									<input type="text" class="form-control" name="twitter" value="<?php echo $User->twitter; ?>">
								</div>
								<div class="form-group label-floating">
									<label class="control-label">INSTAGRAM</label>
									<input type="text" class="form-control" name="insta" value="<?php echo $User->insta; ?>">
								</div>
								<div class="form-group label-floating">
									<label class="control-label">PINTEREST</label>
									<input type="text" class="form-control" name="pintrest" value="<?php echo $User->pintrest; ?>">
								</div>
								<button type="submit" class="btn btn-success" style="letter-spacing:1px;">SAVE PROFILE</button>
                                <button type="button" class="btn btn-success" style="letter-spacing:1px;" onclick="location.href='<?php echo base_url().'user/dashboard';?>'" >BACK TO PROFILE</button>
							</div>
						</form>
                        
					<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-8  p-0-20">
					<div class="row">
						<div class="clearfix"></div>
							<?php if ($Restros): ?>
				
                			<h4 class="title1 mt-30">Restaurant<?php if(sizeof($Restros)>1)echo 's';?>  reviewd</h4>
							<div class="clearfix"></div>
								<?php foreach ($Restros as $Restro): ?>
									<div class="mt-10">
										<div class="col-sm-1" style="padding:0"><img src="<?php echo base_url().'media/upload/restaurant/'.$Restro->Logo; ?>" class="img-responsive"></div>
                                        <div class="col-sm-10 cmt-box">
										
											<h5 class="featurettl mt-0">
												<?php echo $Restro->restaurantName; ?>
											</h5>
                                            
										
										<p class="ctm-p mb-0"><?php echo $Restro->Comment; ?></p>
                                        <input id="input-21b" value="<?=$Restro->rate;?>"  readonly="readonly" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
										
                                        </div>
									</div>
									<div class="clearfix"></div>
								<?php endforeach ?>
							<?php else: ?>
							<div class="" style="background-color: #f2f6f4;padding: 3% 2% 3% 2%;">                         
								<p class="decshome text-center">You didn't reviewed any Restaurant</p>
							</div>
							<?php endif ?>
							<div class="mt-30 text-center">
								<a href="<?php echo base_url()."restaurants"; ?>" class="btn btn-success" style="letter-spacing:1px;">SEE OUR LIST OF RESTAURANTS</a>
							</div>
						</div>
					</div>
                
				</div>
			</div>
		</div>
<div class="clearfix pt-60"></div>
<?php $this->load->view('templates/footer'); ?>




