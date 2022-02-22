<?php $this->load->view('mobile/header'); ?>
<?php if(isset($city)):
				$current=$city;
			?>
			<?php else:
				$current="";
			?>
			<?php endif;?>

<div class="bgimgdiamond">
		<div class="titilebgcolorrest">
            <div class="col-xs-12">
                <h1 class="titletext1">The Big Restaurant Guide</h1>
                <h3 class="titletext2">Satisfy those hunger pangs with our carefully-curated vegan restaurants and cafes. Find one near you.</h3>
                <div class="rest_search" style="display:none;">
                <form action="<?php echo base_url();?>search/restaurant" role="search">
                <input type="text" name="keyword"  placeholder="Search for restaurants..." aria-describedby="basic-addon1" value="<?php if(isset($_GET['keyword'])) {echo $_GET['keyword'];}?>">
                <button type="submit" class="btn btn-success coolbtn" ><i class="fa fa-search"></i></button>
                </form>
                <div class="text-center mt-10 mb-20">
                <a href="JavaScript:void(0);"  id="srch_cng" class="titletext3">Advanced search</a></div>
                
                </div>
                <div class="rest_search_adv" >
                <form action="<?php echo base_url();?>search/restaurant" role="search">
                <input type="text" name="keyword"  placeholder="Search for restaurants" aria-describedby="basic-addon1" value="<?php if(isset($_GET['keyword'])) {echo $_GET['keyword'];}?>">
                <select name="city" >
								<option value="">Search City</option>
								<?php if(isset($Cities)): 
									foreach($Cities as $city): ?>
										<option value="<?php echo $city->url?>" <?php if($current==$city->url){ echo 'selected';}?>><?php echo $city->name?></option>
									<?php endforeach;
								endif;?>
				</select>
                <select name="rating" >
								<option value="">All Rating</option>
								
							</select>
                <button type="submit" class="btn btn-success coolbtn" ><i class="fa fa-search"></i> Find</button>
                </form>
                <div class="text-center mt-10 mb-20">
                <a href="JavaScript:void(0);"  id="srch_cng" class="titletext3">Simple search</a>
                </div>
                
                </div>
            </div>
        </div>   
   </div>
<div class="main">
   <div class="container">
<div class="clearfix mt-30"></div>
<div class="row">
									<?php $i=0; ?>
                                    <?php if(isset($Restaurants)):?>
									<?php foreach ($Restaurants as $Restaurant): ?>
										<div class="col-sm-4 col-xs-12 mb-20">
											<img src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->cover_img; ?>" class="img-responsive br1"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" >
											<div class="col-sm-4 col-xs-4">
											   <img style="border: 1px solid #e8e8e8;" src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->Logo; ?>" class="img-responsive mt-30-m br1"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" > 
											</div>
											<div class="col-sm-8 col-xs-8" style="padding-left: 0px;">
                                            <a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><h3 class="featurettl"><?php echo $Restaurant->restaurantName; ?></h3></a>
												<ul class="list-inline">
													<li><span class="expname2"><?php echo $Restaurant->City.', '.$Restaurant->Country; ?></span></li>
												</ul>
											</div>
                                            <div class="clearfix"></div>
											<p class="decshome pt-10" ><?php
													$desc="";
													if (strlen($Restaurant->ShortDesc) > 150)
													{
														$desc = substr($Restaurant->ShortDesc,0,150);
														$desc = $desc.'...';
													}
													else
													{
														$desc= $Restaurant->ShortDesc;
													}
													echo $desc;
												?>
											</p>
											<ul class="list-inline">
												<?php if($Restaurant->isVegan):?>
                                                <li class="pull-left mt-10"><span><img src="<?php echo base_url();?>assetsNew/img/vegan.png" style="padding-right: 10px;"></span><span class="expname2">100% Vegan</span></li>
                                                <?php endif;?>
												<li class="pull-right"><a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><button class="btn rmgbtnrest mt-0">DETAILS <i class="icon-arrow-right"></i></button></a></li>
											</ul>
										</div>
                                       	<?php $i++; ?>
										<?php if ($i%3==0): ?>
											<div class="clearfix"></div>
										<?php endif ?>
                                        <?php if($i==4):?>
                                        <div class="col-sm-4 col-xs-12  mb-20">
										<div class="clearfix"></div>
									<h4 class="text-center">Advertisement</h4>
										<div class="text-center">
											<?php echo $AdblockRes?>
										</div>
									</div>
                                        <?php $i++; ?>
                                        <?php endif;?>
									<?php endforeach ?>
                                    <?php else:?>
                                    <div class="col-xs-12">
                                    <h4>No Result..</h4>
                                    </div>
                                    <?php endif;?>
                                    
								</div>
 
	

   </div>
</div>
<?php $this->load->view('mobile/footer_nl'); ?>  
<?php $this->load->view('mobile/footer'); ?> 

<script type="text/javascript">

$(document).ready(function(){
    $(".titletext3").click(function(){
        $(".rest_search").slideToggle(500);
		$(".rest_search_adv").slideToggle(500);
    });
});

</script>
<script type="text/javascript">
$(document).ready(function() {
// Submit form with id function.
$("#submlit").click(function() {
var name = $("#name").val();
var city = $("#city").val();
var email= $("#email").val();
var contact = $("#contact").val();
if (validation()) // Calling validation function.
{
jQuery.ajax({
        url: '<?php echo base_url();?>listed',
        data:{
          name :jq('#name').val(),
          city :jq('#city').val(),
          email:jq('#email').val(),
	  contact :jq('#contact').val(),
	  address :jq('#address').val(),
	  price :jq('#price').val()
        },
        dataType: "json",
		type: "POST", 
        success :function(data){
			console.log(data.message);
			jq('#thnklist').html(data.message);
			
        }
    })
}
});




function validation() {
var name = $("#name").val();
var city = $("#city").val();
var email= $("#email").val();
var contact = $("#contact").val();



if (name === '') {
alert("Please Enter Name");
return false;
}else if (city === '') {
alert("Please Enter City");
return false;
}
else if (email=== '') {
alert("Please Enter Your Email");
return false;
}


else if (contact === '') {
alert("Please Enter Phone Number");
return false;
}

else {
return true;
}
}
});
</script>
 