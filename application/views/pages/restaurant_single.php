<?php $this->load->view('templates/header'); ?>

<?php $log=$this->M_User->getUserInfo($this->session->userdata('User_id')); ?>
	<style type="text/css">
		td 
		{    
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #eee;
			font-family: "Source Sans Pro";
			font-size: 16px;
			line-height: 28px;
			font-weight: 600;
		}
		.fw
		{
			font-weight: 400;
		}
		.btnn {   height: 48px;   width: 48px;    border-radius: 3px 20px 3px 20px;   background-color: #3B5998;}
		.btntwt {   height: 48px;   width: 48px;    border-radius: 3px 20px 3px 20px;   background-color: #55ACEE;}
		.btninsta {   height: 48px;   width: 48px;    border-radius: 3px 20px 3px 20px;   background-color: #E12F67;}
		.pin {   height: 48px;   width: 48px;    border-radius: 3px 20px 3px 20px;   background-color: #d73532;}
.input-hidden {
 position: absolute;
 left: -9999px;
}
input[type=radio]:checked + label>img {
}
input[type=radio] + label>img {
 transition: 500ms all;
 cursor: pointer;
}
input[type=radio]:checked + label>img {
 transform: 
background: rgba(85, 186, 71, 0.12);
   border-radius: 50%;
box-shadow: 0px 0px 9px 2px #4CAF50;
}
</style>
	<div class="prof_cat" id="notifications">
		<div class="prof_cat" style="background-image: url(<?php echo base_url()."assetsNew/img/restaurant-profile.jpg"; ?>);background-repeat: no-repeat;background-size: 100%;    min-height: 177px;    background-attachment: fixed;">
			 <div class="container-fluid">
				<div class="container">
					<div class="row">
						<div class="col-md-9 mt-90" style="margin-left: 15%;">
							<h1 class="homeh1msg" style="color: #fff;"><?php echo $Restaurant->restaurantName; ?></h1>
						</div>
					</div> 
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div><!--  end notifications -->
	<div class="main">
		<div class="container">        		
			<div class="clearfix mt-30"></div>            
			<div class="row">
				<div class="col-md-4">
					<div class="row">
						<div class="" style="margin-top: -26%;">
							<div class="col-sm-4 col-md-6">
								<img class="img-responsive br1" style="border: 1px solid rgba(0,0,0,0.1);" src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->Logo;?>">
							</div>
							<div class="col-sm-6 p-0">
								<div class="mt-90"> 
                                
                                <?php if($Restaurant->isVegan):?>
									<span><img src="<?php echo base_url(); ?>assetsNew/img/vegan.png" style="padding-right: 5px;"></span> <span class="rvegan">100% Vegan</span>
                                    
                                    <?php endif;?>
                                    <?php if($Restaurant->FBPage):?>
                                    <div class="clearfix mt-10"></div>
                                    <div class="fb-like" data-href="<?php echo $Restaurant->FBPage;?>" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                   <?php endif;?> 
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-sm-12 mt-30">
								<ul class="list-inline expline">
									<li style="width: 86%;"><span class="expname2">Address</span><br><span class="expname"><?php if($Restaurant->Area){ echo $Restaurant->Area.', '; }?><?php  echo $Restaurant->City.', '.$Restaurant->Country; ?></span></li>
									<li class="pull-right pt-20"><a href="https://www.google.co.in/maps/place/<?php echo $Restaurant->restaurantName.', '; if($Restaurant->Area){ echo $Restaurant->Area.', '; }?><?php  echo $Restaurant->City.', '.$Restaurant->Country; ?>" target="_blank"><i class="fa fa-map-marker rest_icon" aria-hidden="true"></i></a></li>
								</ul>
								<ul class="list-inline expline">
									<li><span class="expname2">phone</span><br><span class="expname"><?php echo $Restaurant->Phone; ?></span></li>
									<li class="pull-right"><i class="fa fa-phone rest_icon" aria-hidden="true"></i></li>
								</ul>
                                <?php if($Restaurant->Delivery):?>
								<ul class="list-inline expline">
									<li><span class="expname2">delivery</span><br><span class="expname"><?php echo $Restaurant->Delivery; ?></span></li>
								</ul>
                                <?php endif;?>
                                <?php if($Restaurant->Price):?>
								<ul class="list-inline expline">
									<li><span class="expname2">Price</span><br><span class="expname"><?php echo $Restaurant->Price; ?></span></li>
								</ul>
								<?php endif;?>
                    
                    
                    		</div>
							<div class="clearfix"></div>
						</div>
                        <div class="col-xs-12">
						<h4 class="title1 mt-30">working hours</h4>
						<table style="width: 100%;">
							<ul class="list-inline expline">
								<li><span class="expname"><?php echo $Restaurant->Time; ?></span></li>
								<!--<li class="pull-right"><span class="expname"></span></li>-->
							</ul>
						</table>
						<div class="clearfix"></div>
						<div class="">
							<h4 class="title1 mt-30 mb-30">share</h4>
							<ul class="list-inline">
								<li><i class="icon-social-facebook artsoc fb"></i></li>
								<li><i class="icon-social-twitter artsoc twt"></i></li>
                                <li><i class="icon-social-pinterest artsoc prnt"></i></li>
							</ul>
						</div>
						<div class="clearfix"></div>
						<?php if ($Restaurant->discount_code!=NULL): ?>
							<div class="mt-20 discodetx br1">
								<div class="col-sm-6">
								   <h3 class="featurettl mt-0">Your discount code</h3><span class="expname2">You earned it</span>
								</div>
								<div class="col-sm-6">
									<h3 class="featurettl mt-0 discode">
										<?php echo $Restaurant->discount_code;?>
									</h3>
								</div>
							</div>
						<?php endif ?>
						<div class="clearfix"></div>
						<div class="mt-30">
							<div class="br1" style="background-color: #f2f6f4;padding: 5% 5% 5% 5%;">
								<h4 class="jvc ">Want to start a vegan menu at your restaurant?</h4>
								<h5 class="text-center mt-0 mb-0" style=" font-size:16px; line-height:24px;">Our experts can help you.</h5>
								<div class="text-center">
									<button class="btn btn-success coolbtn" style="letter-spacing: 1px;" onclick="location.href='<?php echo base_url().'contact-us/'; ?>'" >GET IN TOUCH</button>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div><!--row ends here-->
                    </div>
				</div><!--content part ends here-->
				<div class="col-md-8  p-0-20">
					<div class="row">      	               
						<div class="clearfix"></div>
						<h4 class="title1 mt-30" style="padding-left: 2%;">description</h4>
						<div class="col-sm-12">
							<div class="decshome"><?php echo $Restaurant->RestDetail; ?></div>
						
						<div class="">
							<div class="clearfix"></div>
							<!--slider-->
							<?php if ($Images): ?>
								<h4 class="title1 mt-30">Gallery</h4>
								<div class="gallery">
									<?php $cnt=0;?>
        							<?php foreach ($Images as $Image): ?>
										<?php $cnt++; if($cnt<7):?>
                                        <a href="<?php echo base_url().'media/upload/restaurant/photo/'.$Image->file_name; ?>" class="big">
											<img style="border-radius: 5px;" src="<?php echo base_url().'media/upload/restaurant/photo/'.$Image->file_name; ?>" alt="" title="" />
										</a>
                                        <?php else:?>
	<a href="<?php echo base_url().'media/upload/restaurant/photo/'.$Image->file_name; ?>" class="big" style="display:none;">
											<img style="border-radius: 5px;" src="<?php echo base_url().'media/upload/restaurant/photo/'.$Image->file_name; ?>" alt="" title="" />
										</a>    
                                        <?php endif;?>
    								<?php endforeach ?>
									<div class="clear"></div>
								</div>
							<?php endif ?>
						</div>
                        
                        
                        <div class="clearfix"></div>
						<h4 class="title1 mt-30"><?php echo $ReviewCount; ?> review<?php if($ReviewCount>1) { echo 's';}?></h4>
						<?php if ($Reviews): ?>
							<?php foreach ($Reviews as $Review): ?>
								<div class="mt-10" >
                                <?php if($Review->ProfilePic):?>
							<div class="col-sm-1" style="padding:0"><img src="<?php echo base_url().'media/upload/user/'.$Review->ProfilePic; ?>" onclick="location.href='<?php echo base_url().'user/profile/'.$Review->idUser; ?>'" class="img-pro-med img-responsive lnk"></div>
                            <?php else:?>
                            <div class="col-sm-1" style="padding:0"><img src="<?php echo base_url()."media/upload/user/generic-Pro-pic.jpg"?>" onclick="location.href='<?php echo base_url().'user/profile/'.$Review->idUser; ?>'"  class="img-pro-med img-responsive lnk"></div>
                            
                            <?php endif;?>
                            
							<div class="col-sm-10 cmt-box">
                            <h5 class="cmt-user lnk" onclick="location.href='<?php echo base_url().'user/profile/'.$Review->idUser; ?>'"><?php echo $Review->Name; ?></h5>
                     		<?php if(isset($log->idUser) && $log->idUser==$Review->idUser):?>
                            <div class="cmt_rmv">
                            <a href="javascript:void(0);" onclick="removecmt(<?php echo $Review->id;?>);"><i class="fa fa-trash-o" aria-hidden="true"></i></a></div>
                     		<?php endif;?>
                            <p class="ctm-p mb-0"><?php echo $Review->Comment; ?></p>
                                        <input id="input-21b" value="<?=$Review->rate;?>"  readonly="readonly" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                        
									</div>
									<!-- <div class="col-sm-6"></div> -->
									
								</div>
								<div class="clearfix"></div>
							<?php endforeach ?>
						
						<?php endif ?>
<div class="clearfix"></div>
							<div class="col-sm-1 mt-40" style="padding:0">
							<?php if ($log): ?>
									<?php if ($log->ProfilePic): ?>
										<img src="<?php echo base_url()."media/upload/user/".$log->ProfilePic;?>" class="img-responsive img-pro-med">
									<?php else: ?>
										<img src="<?php echo base_url()."media/upload/user/generic-Pro-pic.jpg"?>" class="img-responsive img-pro-med">
									<?php endif ?>
								<?php else: ?>
									<img src="<?php echo base_url()."media/upload/user/generic-Pro-pic.jpg"?>" class="img-responsive img-pro-med">
								<?php endif ?>
							</div>
							<div class="col-sm-10">
								<form id="ratingForm" class="ratingForm">
									<div class="form-group">
										<input type="text" value="" id="comment" placeholder="Write your review..." class="form-control" />
									</div>
									<input id="input-rate-new" name="rate" type="number" class="rating" min=0 max=5 step=0.5 data-size="sm"><span id="rateer"></span>			
                                    <input type="hidden" id="resrt" value="<?php echo $Restaurant->idRestaurant;?>" />
									<div class="clearfix"></div>
									<?php if ($log): ?>
                                    
                                    <button type="submit" class="btn btn-success" style="float: right;">SUBMIT REVIEW</button>
                                    <?php else:?>
                                     <button type="button" class="btn btn-success" style="float: right;" data-toggle="modal" data-target="#reg_popup">LOGIN</button>
                                    <?php endif;?>
								</form>
							</div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div> 
                <?php if(isset($More)):?>  
				<div class="col-sm-12">
					<h4 class="title1 mt-30">related restaurants</h4>    
					<h4 class="mt-30"></h4>
					<div class="row">
						<?php foreach ($More as $Restaurant): ?>
							
								<div class="col-sm-4">
										<img src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->cover_img; ?>" class="img-responsive  br1"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" >

										<div class="col-sm-4">
										   <img style="margin-top:-37%;border: 1px solid #e8e8e8;border-radius: 5px;" src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->Logo;?>" onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" class="img-responsive"> 
										</div>
									<div class="col-sm-8" style="padding-left: 0px;">
								   <a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><h3 class="featurettl"><?php echo $Restaurant->restaurantName; ?></h3></a>
									<ul class="list-inline">
											<li><span class="expname2"><?php echo $Restaurant->City.', '.$Restaurant->Country; ?></span></li>
                                            <?php if($Restaurant->isVegan==1):?>
											<li class="pull-right"><span><img src="<?php echo base_url(); ?>assetsNew/img/vegan.png" style="padding-right: 10px;"></span> <span class="expname2">100% Vegan</span></li>
                                            <?php endif;?>
										</ul>
									   
									</div>
								</div>
							
						<?php endforeach ?>
					</div>
					

				</div>
                <?php endif;?>
                <div class="clearfix"></div>
                <div class="col-md-12 col-sm-12">
					<div class="new_cat mt-40 br1">
						<div class="col-md-12 mar0auto news_cat br1"  style="text-align: center;">
							<h1 class="newsltrh1 pt-20">Do you own a Vegan restaurant?</h1>
							<p class="newsdecs">Get listed and gain exposure to 35.693 hungry vegans.</p>
							
                            <button class="btn btn-white button-lg btt bts" data-toggle="modal" data-target="#getListed">INCLUDE MY RESTAURANT</button>
                            <div class=" clearfix mt-40"></div>
						</div>
					</div>
                    </div>
                    <div class=" clearfix mt-60"></div>
			</div>
		</div>
	</div>
    
    <div class="modal fade bs-example-modal-md" id="getListed" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
              <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">GET LISTED!</h4>
                  </div>
                  
                  <div class="modal-body" id="thnklist" style="overflow:hidden">
                  		
            <div class="rs_popup_form" style="width: 100%;padding: 0;" >
   <form class="formLog"  method="post">

		<div class="mt-10 form-group">
		<input type="text" class="form-control" name="name" id="name" placeholder="Name *" >
		</div>
        <div class="mt-10 form-group">
	<input type="text" class="form-control" id="company" name="company" placeholder="Company Name" >
		</div>
        <div class="mt-10 form-group">
		<input type="text" class="form-control" id="phone" name="contact" placeholder="Phone *" >
		</div>
        <div class="mt-10 form-group">
		<input type="text" class="form-control" id="email" name="email" placeholder="Email *" >
		</div>
        
		<div class="mt-10 form-group">
		<input type="text" class="form-control" id="city" name="city" placeholder="City *">
 		</div>
        <div class="mt-10 form-group">
        <textarea id="address" class="form-control" name="address" placeholder="Address *"></textarea>
 		</div>
        
    	<div class="mt-10 form-group">
	<button type="button" id="submlit"  class="btn btn-success coolbtn">Submit</button>
		</div>
		</form>
                        </div>
                        
                  </div>
                  
                </div>
              </div>
            </div>
    
    
	<script type="text/javascript">
	$(document).ready(function () 
	{
		$('form.ratingForm').submit( function(form)
		{
			form.preventDefault();
			var rate = $('#input-rate-new').val();
			var rest = $("#resrt").val();
			var	comment = $("#comment").val();
			
		if(comment=='')
		{
			$('#comment').attr('placeholder','Please Enter Your Review');
		}
		else if(rate==0)
		{
		  $('#rateer').html('Please Select Rating');
		}
		else{
			
			
			$.post('<?php echo base_url().'user/rateRestaurant'?>',
			{
				rest : rest,
				rate : rate,
				comment : comment
			},
			function(d)
			{
				if(d==1)
				{
				   alert('You already rated');
				}
				else if(d==2)
				{
				   location.reload();
				}
				else
				{
					$('#login_popup').modal('show');
					//alert('Please Login First');
				}
			});
		}
		});
	});
	
	
$(document).ready(function() {
$("#submlit").click(function() {
if (validation())
{
jQuery.ajax({
        url: '<?php echo base_url();?>listed',
        data:{
          name :$('#name').val(),
          city :$('#city').val(),
          email:$('#email').val(),
		  company:$('#company').val(),
	  	  contact :$('#phone').val(),
	  	  address :$('#address').val(),
        },
        dataType: "json",
		type: "POST", 
        success :function(data){
			console.log(data);
			$('#thnklist').html(data.message);
        }
    })
}
});
function validation() {
var name = $("#name").val();
var city = $("#city").val();
var email= $("#email").val();
var phone = $("#phone").val();
var address = $("#address").val();
if (name === '') {
alert("Please Enter Name");
return false;
}
else if (phone === '') {
alert("Please Enter Phone Number");
return false;
}

else if (email=== '') {
alert("Please Enter Your Email");
return false;
}

else if (city === '') {
alert("Please Enter City");
return false;
}
else if (address === '') {
alert("Please Enter Address");
return false;
}



else {
return true;
}
}
});
	</script>
    
<script>
$(function(){
	var $gallery = $('.gallery a').simpleLightbox();

			$gallery.on('show.simplelightbox', function(){
				console.log('Requested for showing');
			})
			.on('shown.simplelightbox', function(){
				console.log('Shown');
			})
			.on('close.simplelightbox', function(){
				console.log('Requested for closing');
			})
			.on('closed.simplelightbox', function(){
				console.log('Closed');
			})
			.on('change.simplelightbox', function(){
				console.log('Requested for change');
			})
			.on('next.simplelightbox', function(){
				console.log('Requested for next');
			})
			.on('prev.simplelightbox', function(){
				console.log('Requested for prev');
			})
			.on('nextImageLoaded.simplelightbox', function(){
				console.log('Next image loaded');
			})
			.on('prevImageLoaded.simplelightbox', function(){
				console.log('Prev image loaded');
			})
			.on('changed.simplelightbox', function(){
				console.log('Image changed');
			})
			.on('nextDone.simplelightbox', function(){
				console.log('Image changed to next');
			})
			.on('prevDone.simplelightbox', function(){
				console.log('Image changed to prev');
			})
			.on('error.simplelightbox', function(e){
				console.log('No image found, go to the next/prev');
				console.log(e);
			});
		});
	</script>
<?php $this->load->view('templates/footer_nl'); ?>
<?php $this->load->view('templates/footer'); ?>