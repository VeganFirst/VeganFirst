<?php $this->load->view('templates/header'); ?>
	<style type="text/css">
		td {text-align: left;padding: 8px;border-bottom: 1px solid #eee;font-family: "Source Sans Pro";font-size: 16px;line-height: 28px;font-weight: 600;}
		.fw{font-weight: 400;}
		.btnn {   height: 48px;width: 48px;border-radius: 3px 20px 3px 20px;background-color: #3B5998;}
		.btntwt {   height: 48px;width: 48px;border-radius: 3px 20px 3px 20px;background-color: #55ACEE;}
		.btninsta {   height: 48px;width: 48px;border-radius: 3px 20px 3px 20px;background-color: #E12F67;}
		.pin {   height: 48px;width: 48px;border-radius: 3px 20px 3px 20px;   background-color: #d73532;}  
		.jvc {color: #EC785B;font-family: Cervo-Light;font-size: 30px;line-height: 32px;text-align: center;font-weight: 600;}
		/*for tab*/
		.nav-tabs { border-bottom: 2px solid #DDD; background: #ffffff; }
		.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
		.nav-tabs > li > a { border: none; color: #6cbd45 !important; }
		.nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #292b28 !important; background: transparent; }
		.nav-tabs > li > a::after { content: ""; background: #292b28; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
		.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
		.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #6cbd45; }
		/*.tab-pane { padding: 15px 0; }*/
		/*.tab-content{padding:20px}*/
		.nav-tabs>li>a {position: relative;display: block;padding: 25px 25px 10px 25px;}
		.card {background: #FFF none repeat scroll 0% 0%; box-shadow: none !important;/*box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);*/ margin-bottom: 30px; }
	</style>
	<div class="new_cat">
		<div class="col-md-12 mar0auto news_cat"  style="text-align: center;">
			<h1 class="newsltrh1 pt-30">The Big Restaurant Guide</h1>
			<p class="newsdecs pb-10">Satisfy those hunger pangs with our carefully-curated vegan restaurants and cafes. Find one near you.</p>
			<?php if(isset($city)):
				$current=$city;
			?>
			<?php else:
				$current="";
			?>
			<?php endif;?>
			<form action="<?php echo base_url();?>search/restaurant" role="search" class="rest_search">
				
                <input type="text" name="keyword" placeholder="Search for restaurants" aria-describedby="basic-addon1" class="keyw" value="<?php if(isset($_GET['keyword'])) {echo $_GET['keyword'];}?>" id="restrnt" onkeyup="autocomplet()">
                
                <select name="city" class="cty">
								<option value="" hidden>Search City</option>
								<?php if(isset($Cities)): 
									foreach($Cities as $city): ?>
										<option value="<?php echo $city->url?>" <?php if($current==$city->url){ echo 'selected';}?>><?php echo $city->name?></option>
									<?php endforeach;
								endif;?>
							</select>
                 <select name="typex">
                     <option value="" hidden>All Types</option>
                     <option value="isVegan">100% Vegan</option>
                     <option value="Catering">Catering</option>
                     <option value="Restaurant">Restaurant</option>
                 </select>
                  <button type="submit" class="btn btn-success coolbtn"><i class="icon-magnifier"></i> Find</button>
				<ul id="country_list_id"  class="keyw" style="list-style:none;padding: 5px 5px;overflow: hidden; display:none;height: auto;position: absolute;top: 210px;left: 217px;text-align:left;padding-left:15px;"></ul>
            <div class="clearfix mb-50"></div>				
                </form>
			<div class="clearfix mb-50"></div>
		</div>
	</div> 
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					
					 
					<div class="card mt-30">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="best-rating">
                            <?php if(!isset($Restaurants)):?>
						<h4 class="">No Restaurant found with your search</h4>
                                <?php else: ?>
								<div class="row">
									<?php $i=0; ?>
									<?php foreach ($Restaurants as $Restaurant): ?>
										<div class="col-sm-4 mb-30">
											<img src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->cover_img; ?>" class="img-responsive lnk br1"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" >
											<div class="col-sm-4">
											   <img style="margin-top:-37%;border: 1px solid #e8e8e8;border-radius: 5px;" src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->Logo; ?>" class="img-responsive lnk"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" > 
											</div>
											<div class="col-sm-8" style="padding-left: 0px;">
                                            <a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><h3 class="featurettl mt-10"><?php echo $Restaurant->restaurantName; ?></h3></a>
												<ul class="list-inline mb-0">
													<li><span class="expname2"><?php echo $Restaurant->City.', '.$Restaurant->Country; ?></span></li>
												</ul>
											</div>
											
											<ul class="list-inline  mb-0">
												<?php if($Restaurant->isVegan):?>
                                                <li class="pull-left mt-10"><span><img src="<?php echo base_url();?>assetsNew/img/vegan.png" style="padding-right: 10px;"></span><span class="expname2">100% Vegan</span></li>
                                                <?php endif;?>
												<li class="pull-right"><a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><button class="btn btn-white rwbt mt-0" >DETAILS <i class="icon-arrow-right"></i></button></a></li>
											</ul>
										</div>
                                       	<?php $i++; ?>
										<?php if ($i%3==0): ?>
											<div class="clearfix"></div>
										<?php endif ?>
                                        <?php if($i==4 && isset($AdblockRes)):?>
                                        <div class="col-sm-4  mb-20">
										<div class="clearfix"></div>
										<div class="text-center">
											<?php echo $AdblockRes?>
										</div>
									</div>
                                        <?php $i++; ?>
                                        <?php endif;?>
									<?php endforeach ?>
								</div>
                                
                                <?php endif;?>
								<div class="clearfix"></div>
							</div>
						
						</div>   
					</div>
					<div class="new_cat mt-20 br1">
						<div class="col-md-12 mar0auto news_cat br1"  style="text-align: center;">
							<h1 class="newsltrh1 pt-20">Do you own a Vegan restaurant?</h1>
							<p class="newsdecs">Get listed and gain exposure to 35.693 hungry vegans.</p>
							
                            <button class="btn btn-white button-lg btt bts" data-toggle="modal" data-target="#getListed">INCLUDE MY RESTAURANT</button>
                            <div class=" clearfix mt-40"></div>
						</div>
					</div>
                    <div class=" clearfix mt-60"></div>

				</div>
			</div><!--main row ends here-->            
		</div><!--containers ends here-->
	</div><!--main ends here-->
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

		<input type="text" class="form-control" id="name" placeholder="Name" >
		</div>
		<div class="mt-10 form-group">

		<input type="text" class="form-control" id="city" placeholder="City">
 		</div>
   		<div class="mt-10 form-group">

		<input type="text" class="form-control" id="contact" placeholder="Contact">
 		</div>

        <div class="mt-10 form-group">
            
		        <textarea id="address" class="form-control" placeholder="Address"></textarea>
 		</div>
        <div class="mt-10 form-group">

		        <input type="text" class="form-control" id="price" placeholder="Approx Price for 2">
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
<?php $this->load->view('templates/footer_nl'); ?>
<?php $this->load->view('templates/footer'); ?>
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



function autocomplet() {
	var min_length = 1; // min caracters to display the autocomplete
	var keyword = $('#restrnt').val();
	if (keyword.length >= min_length) {
	$.ajax({
	url: '<?php echo base_url()?>restaurant/Searchuser2',
	type: 'POST',
	data: {keyword:keyword},
	success:function(data){
		$('#country_list_id').show();
		$('#country_list_id').html(data);
	}
});
} else {
	$('#country_list_id').hide();
}
}



// set_item : this function will be executed when we select an item

function set_item(item,ggg) {

	// change input value

	$('#restrnt').val(item);

	$('#msgtov').val(ggg);

	$('#country_list_id').hide();

}

</script>