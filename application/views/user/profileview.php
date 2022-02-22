<?php $this->load->view('templates/header'); ?>
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
   		
	</style> 

	<div class="prof_cat" id="notifications">
		<div class="pro_cat" style="background-image: url(<?php echo base_url()."assetsNew/img/user-profile.jpg"; ?>);background-attachment: fixed;min-height: 176px;background-size: 100%;"></div>
		<div class="clearfix"></div>
	</div>

	<div class="main">
		<div class="container">
			<div class="row">
            <div class="col-sm-10 mt-60-m p-0">
							<div class="col-sm-2" >
								<?php if ($User->ProfilePic): ?>
									<img style="border-radius: 10px;" src="<?php echo base_url().'media/upload/user/'.$User->ProfilePic; ?>" class="img-responsive">
								<?php else: ?>
									<img style="border-radius: 10px;" src="<?php echo base_url().'media/upload/user/generic-Pro-pic.jpg'; ?>" class="img-responsive">
								<?php endif ?>
							</div>
                            <div class="col-sm-6">
                            <h1 class="homeh1msg mt-0" style="color: #fff;"><?php echo $User->Name; ?></h1>
                            </div>
							
						</div>
            
            </div>
            
            
			<div class="row">
				<div class="col-md-4">
					<div class="row">
						
                        <div class="col-sm-10">
                        <p class="decsprof mt-10 mb-10"><?php echo $User->about; ?></p>
                       <h4 class="title1 mt-10">personal info</h4></div>
                        
                        
						<div class="col-sm-10">
							<table style="width: 100%;">
								<tr><td>Age</td><td class="fw"><?php echo $User->Age;  ?></td></tr>
								<tr><td>Location</td><td class="fw"><?php echo $User->city;  ?></td></tr>
								<tr><td>Occupation</td><td class="fw"><?php echo $User->occuption;  ?></td></tr>
								<tr><td>Diet type</td><td class="fw"><?php if($User->isVegan==1) { echo "Vegan"; } elseif($User->isVegan==0) { echo "Non Vegan"; } elseif($User->isVegan==2) { echo "Non Disclosed"; } ?></td></tr>
								<tr><td>Relationship</td><td class="fw"><?php echo $User->relationship;  ?></td></tr>
							</table>
						</div>
						<div class="clearfix"></div>
						<?php if ($User->fb || $User->twitter || $User->insta || $User->pintrest): ?>
							<div class="col-xs-12">
								<h4 class="title1 mt-30">connect</h4>
								<ul class="list-inline">
									<?php if ($User->fb): ?>
										<li>
											<a href="<?php echo $User->fb;?>"><div class="fbsharebtn"><i class="fa fa-facebook-f"></i></div></a>
										</li>
									<?php endif ?>
									<?php if ($User->twitter): ?>
										<li>
											<a href="<?php echo $User->twitter; ?>"><div class="twtsharebtn"><i class="fa fa-twitter"></i></div></a>
										</li>
									<?php endif ?>
									<?php if ($User->insta): ?>
										<li>
											<a href="<?php echo $User->insta; ?>"><div class="instasharebtn"><i class="fa fa-instagram"></i></div></a>
										</li>
									<?php endif ?>
									<?php if ($User->pintrest): ?>
										<li style="padding: 1% 0% 0% 1%;">
											<a href="<?php echo $User->pintrest; ?>"><div class="pintsharebtn"><i class="fa fa-pinterest"></i></div></a>
										</li>
									<?php endif ?>
								</ul>   
							</div>
						<?php endif ?>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-8  p-0-20">
					<div class="row">
						<div class="clearfix"></div>
							
							<?php if ($Restros): ?>
                            <h4 class="title1 mt-30"><?php echo sizeof($Restros);?> Restaurant<?php if(sizeof($Restros)>1)echo 's';?>  reviewed</h4>
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
							<?php else:?>
                            <h4 class="title1 mt-30">No Restaurant reviewed</h4>
							<div class="clearfix"></div>
							<?php endif ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
<div class="clearfix pt-60"></div>
<?php $this->load->view('templates/footer'); ?>

<script type="text/javascript">
	function getMsg(id) 
	{
		jQuery.ajax(
		{
			url: "<?php echo base_url()?>user/get_msg",
			data:'id='+id,
			type: "POST",
			success:function(data)
			{
				$('#output').html(data);
			}
		});
	}
	function SendMessage()
	{
		var message = $('#message').val();
		var msgto = $('#msgto').val();
		console.log('Message : '+message);
		if (message.length >0) 
		{
			$.ajax(
			{
				url: '<?php echo base_url()?>user/send',
				type: 'POST',
				data: {message:message,msgto:msgto},
				success:function(data)
				{
					getMsg(msgto);
				} 
			});
		}
		else
		{
			getMsg(msgto);
		}
	}

	function set_item(item,ggg) 
	{
		$('#country_id').val(item);
		$('#msgtov').val(ggg);
		$('#country_list_id').hide();
	}
</script>



