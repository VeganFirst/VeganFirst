<?php $this->load->view('mobile/header'); ?>
<script type="text/javascript" src="<?php echo base_url();?>assetsNew/css/simple-lightbox.js"></script>


	
	<div class="prof_cat" id="notifications">
		<div class="prof_cat" style="background-image: url(<?php echo base_url()."assetsNew/img/restaurant-profile.jpg"; ?>);background-repeat: no-repeat;    background-size: 100% 100%;min-height: 150px;">
			 <div class="container-fluid">
				<div class="container">
					<div class="row">
                    
                    
						
					</div> 
				</div>
			</div>
		</div>

	</div><!--  end notifications -->
    <div class="col-md-9 col-xs-12 mt-100-m" >
	<h1 class="homeh1msg" style="color: #fff;"><?php echo $Restaurant->restaurantName; ?></h1>
	</div>
    
    <div class="col-sm-4 col-xs-4 mt-40-m">
		<img class="img-responsive br1" style="border: 1px solid #e8e8e8;" src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->Logo;?>">
	</div>
    <div class="col-sm-4 col-xs-4 mt-20 p-0"> 
    <?php if($Restaurant->isVegan):?>
	<span><img src="<?php echo base_url(); ?>assetsNew/img/vegan.png" style="padding-right: 10px;"></span> <span class="expname2">100% Vegan</span> 
     <?php endif;?>
     </div>
     <div class="col-sm-4 col-xs-4 mt-20"> 
<?php if($Restaurant->FBPage):?>

                                    <div class="fb-like" data-href="<?php echo $Restaurant->FBPage;?>" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                                   <?php endif;?>

</div>
    
    <div class="clearfix"></div>
	<div class="main mt-30">
		<div class="container">        		
            
			<div class="row">
				<div class="col-md-4">
					<div class="row">
						<div>
							
							
							<div class="clearfix"></div>
							<div class="col-sm-12 mt-30">
								<ul class="list-inline expline">
									<li  style="width: 88%;"><span class="expname2">Address</span><br><span class="expname"><?php if($Restaurant->Area){ echo $Restaurant->Area.', '; }?><?php  echo $Restaurant->City.', '.$Restaurant->Country; ?></span></li>
									<li class="pull-right pt-20"><a href="https://www.google.co.in/maps/place/<?php echo $Restaurant->restaurantName.', '; if($Restaurant->Area){ echo $Restaurant->Area.', '; }?><?php  echo $Restaurant->City.', '.$Restaurant->Country; ?>" target="_blank"><i class="fa fa-map-marker rest_icon" aria-hidden="true"></i></a></li>
								</ul>
								<ul class="list-inline expline">
									<li><span class="expname2">phone</span><br><a href="tel:<?php echo $Restaurant->Phone; ?>" style="color:#333;"><span class="expname"><?php echo $Restaurant->Phone; ?></span></a></li>
									<li class="pull-right"><a href="tel:<?php echo $Restaurant->Phone; ?>"><i class="fa fa-phone rest_icon" aria-hidden="true"></i></a></li>
								</ul>
								<ul class="list-inline expline">
									<li><span class="expname2">delivery</span><br><span class="expname"><?php echo $Restaurant->Delivery; ?></span></li>
								</ul>
                                <h4 class="title1 mt-30">description</h4>
                                <div class="decshome"><?php echo $Restaurant->RestDetail; ?></div>
                                
							</div>
							<div class="clearfix"></div>
						
                        </div>
                        
                        <div class="col-xs-12">
						<h4 class="title1 mt-30">working hours</h4>
						<table style="width: 100%;">
							<ul class="list-inline expline">
								<li><span class="expname"><?php echo $Restaurant->Time; ?></span></li>
								<!-- <li class="pull-right"><span class="expname">8 AM - 11 PM</span></li> -->
							</ul>
						</table>
						<div class="clearfix"></div>
						<div class="">
							<h4 class="title1 mt-30">share</h4>
							<ul class="list-inline">
								<li><i class="icon-social-facebook artsoc fb"></i></li>
								<li><i class="icon-social-twitter artsoc twt"></i></li>
                                <li><i class="icon-social-pinterest artsoc prnt"></i></li>
							</ul>
						</div>
						<div class="clearfix"></div>
						
						
						
                        </div>
					</div><!--row ends here-->
				</div><!--content part ends here-->
				<div class="col-md-8  p-0-20">
					<div class="row">      	               
						<div class="clearfix"></div>
<!--slider-->
							<?php if ($Images): ?>
								<h4 class="title1 mt-30">Gallery</h4>
								<div class="gallery">
									<?php
									$cnt=0;
									 foreach ($Images as $Image): ?>
                                    <?php $cnt++; if($cnt<7):?>
                                        <a href="<?php echo base_url().'media/upload/restaurant/photo/'.$Image->file_name; ?>" class="big">
											<img class="img-responsive br1 mb-10" src="<?php echo base_url().'media/upload/restaurant/photo/'.$Image->file_name; ?>" alt="" title="" />
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
							
						<div class="clearfix"></div>
						<h4 class="title1 mt-30"><?php echo $ReviewCount; ?> reviews</h4>
						<?php if ($Reviews): ?>
							<?php foreach ($Reviews as $Review): ?>
								<div class="mt-10" >
                                
							<div class="col-xs-2" style="padding:0">
                            <?php if($Review->ProfilePic):?>
                            <img src="<?php echo base_url().'media/upload/user/'.$Review->ProfilePic; ?>" class="img-pro-med img-responsive">
                            <?php else:?>
                            <img src="<?php echo base_url().'media/upload/user/generic-Pro-pic.jpg'; ?>" class="img-pro-med img-responsive">
                            <?php endif?>
                            </div>
                            
							<div class="col-xs-9 cmt-box">
                            <h5 class="cmt-user"><?php echo $Review->Name; ?></h5>
                            <p class="ctm-p"><?php echo $Review->Comment; ?></p>
                                        <input id="input-21b" value="<?=$Review->rate;?>"  readonly="readonly" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
                                        
									</div>
									<!-- <div class="col-sm-6"></div> -->
									
								</div>
								<div class="clearfix"></div>
							<?php endforeach ?>
						
						<?php endif ?>
						
						<div class="">
							<div class="clearfix"></div>
							<div class="col-sm-1 col-xs-2 mt-40" style="padding:0">
							<?php if ($this->session->userdata('User_id')): ?>
							<?php $log=$this->M_User->getUserInfo($this->session->userdata('User_id')); ?>
									<?php if ($log->ProfilePic): ?>
										<img src="<?php echo base_url()."media/upload/user/".$log->ProfilePic;?>" class="img-responsive img-pro-med">
									<?php else: ?>
										<img src="<?php echo base_url()."media/upload/user/generic-Pro-pic.jpg"?>" class="img-responsive img-pro-med">
									<?php endif ?>
								<?php else: ?>
									<img src="<?php echo base_url()."media/upload/user/generic-Pro-pic.jpg"?>" class="img-responsive img-pro-med">
								<?php endif ?>
							</div>
							<div class="col-sm-10 col-xs-10">
								<form id="ratingForm" class="ratingForm">
									<div class="form-group mt-10">
										<input type="text" value="" id="comment" placeholder="Write your review..." class="form-control" />
									</div>
									<input id="input-rate-new" name="rate" type="number" class="rating" min=0 max=5 step=0.5 data-size="sm"><span id="rateer"></span>			
                                    <input type="hidden" id="resrt" value="<?php echo $Restaurant->idRestaurant;?>" />
									<div class="clearfix"></div>
									<button type="submit" class="btn btn-success coolbtn" style="width: 100%;">I WANT To REVIEW IT</button>
								</form>
							</div>
							<div class="clearfix"></div>
							
                            
                            <div class="mt-30">
							<div class="cumuntiybg">
								<h4 class="text-center cumnityh4">Want to start Vegan Restaurant?</h4>
								<h5 class="text-center cumnityp">Our experts can help you.</h5>
								<div class="text-center">
									<button class="btn btn-success coolbtn" data-toggle="modal" data-target="#getListed">GET IN TOUCH</button>
								</div>
							</div>
						</div>
                            
						</div>
				
				</div>
				</div>
				<div class="clearfix"></div>
                <?php if(isset($More)): ?>   
				<div class="col-sm-12">
					<h4 class="title1 mt-30">related restaurants</h4>    
					<h4 class="mt-30"></h4>
					<div class="row">
						<?php
						 
						 foreach ($More as $Restaurant): ?>
							<div class="col-xs-12 row mb-20">
								<div class="col-sm-4 col-xs-6">
										<img src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->cover_img; ?>" class="img-responsive br1"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" >

										<div class="col-sm-4 col-xs-6 p-0-5">
										   <img style="border: 1px solid #e8e8e8;" src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->Logo;?>" onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" class="img-responsive br1 mt-60-m"> 
										</div>
                                        </div>
									<div class="col-sm-8 col-xs-6" style="padding-left: 0px;">
								   
								   <h3 class="restrelttl mt-0" onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'"><?php echo $Restaurant->restaurantName; ?></h3>
									<ul class="list-inline">
											<li><span class="expname2"><?php echo $Restaurant->City.', '.$Restaurant->Country; ?></span></li>
                                            <?php if($Restaurant->isVegan==1):?>
											<li><span><img src="<?php echo base_url(); ?>assetsNew/img/vegan.png" style="padding-right: 10px;"></span> <span class="expname2">100% Vegan</span></li>
                                            <?php endif;?>
										</ul>
									   
									</div>
								
							</div>
						<?php endforeach; ?>
					</div>
					<div class="clearfix"></div>
					
				</div>
                <?php endif;?>
                
                <div class="col-sm-12">
                <div class="new_cat mt-20 br1">
						<div class="col-md-12 pt-30 pb-30 mar0auto news_cat br1"  style="text-align: center;">
							<h1 class="newsltrh1">Do you own a Vegan restaurant?</h1>
							<p class="newsdecs">Get listed with us, we'd love to feature you.</p>
							  <button class="btn inclbtn" style="margin-bottom:3%;"  data-toggle="modal" data-target="#getListed">INCLUDE MY RESTAURANT</button>
						</div>
                        
					</div>
                    </div>
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
<?php $this->load->view('mobile/footer_nl'); ?>
<?php $this->load->view('mobile/footer'); ?>
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
				   alert('Thanks For Rating');
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
	</script>

<script type="text/javascript">
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



    <script type="text/javascript">
		$(document).ready(function(){
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