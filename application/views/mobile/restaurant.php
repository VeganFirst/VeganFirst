<?php $this->load->view('mobile/header'); ?>
<style type="text/css">
		td {text-align: left;padding: 8px;border-bottom: 1px solid #eee;font-family: "Source Sans Pro";font-size: 16px;line-height: 28px;font-weight: 600;}
		
		.nav-tabs { border-bottom: 2px solid #DDD; background: #ffffff; }
		.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
		.nav-tabs > li > a { border: none; color: #6cbd45 !important; }
		.nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #292b28 !important; background: transparent; }
		.nav-tabs > li > a::after { content: ""; background: #292b28; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -2px; transition: all 250ms ease 0s; transform: scale(0); }
		.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
		.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #6cbd45; }
		/*.tab-pane { padding: 15px 0; }*/
		/*.tab-content{padding:20px}*/
		.nav-tabs>li>a {position: relative;display: block;padding: 5px 15px 10px 15px;}
		.card {background: #FFF none repeat scroll 0% 0%; box-shadow: none !important; margin-bottom: 30px; }
	</style>
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
                <h1 class="titletext1 mt-50">The Big Restaurant Guide</h1>
                <h3 class="titletext2">Satisfy those hunger pangs with our carefully-curated vegan restaurants and cafes. Find one near you.</h3>
                <div class="rest_search"  style="display:none;">
                <form action="<?php echo base_url();?>search/restaurant" role="search">
                <input type="text" name="keyword"  placeholder="Search for restaurants..." aria-describedby="basic-addon1" value="<?php if(isset($_GET['keyword'])) {echo $_GET['keyword'];}?>"  id="restrnt" onkeyup="autocomplet()" autocomplete="off" >
                <button type="submit" class="btn btn-success coolbtn" ><i class="fa fa-search"></i></button>
                <ul id="country_list_id"  class="keyw" style="list-style:none;padding: 5px 5px;overflow: hidden; display:none;height: auto;position: absolute;top: 220px;left: 15px;text-align:left;padding-left:15px;"></ul>
                </form>
                <div class="text-center mt-10 mb-20">
                <a href="JavaScript:void(0);"  id="srch_cng" class="titletext3">Advanced search</a></div>
                
                </div>
                <div class="rest_search_adv">
                <form action="<?php echo base_url();?>search/restaurant" role="search">
                <input type="text" name="keyword"  placeholder="Search for restaurants" aria-describedby="basic-addon1" value="<?php if(isset($_GET['keyword'])) {echo $_GET['keyword'];}?>"   id="restrnt2" onkeyup="autocomplet2()" autocomplete="off">
                <ul id="country_list_id2"  class="keyw" style="list-style:none;padding: 5px 5px;overflow: hidden; display:none;height: auto;position: absolute;top: 220px;left: 15px;text-align:left;padding-left:15px;"></ul>
                <select name="city" class="select" >
								<option value="">Search City</option>
								<?php if(isset($Cities)): 
									foreach($Cities as $city): ?>
										<option value="<?php echo $city->url?>" <?php if($current==$city->url){ echo 'selected';}?>><?php echo $city->name?></option>
									<?php endforeach;
								endif;?>
				</select>
                <select name="rating"  class="select"  >
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

<div class="card card-nav-tabs card-plain">
                <div class="header">
                    <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs tabb" data-tabs="tabs"> 
                                        <li style="width: 33%;" class="active"><a href="#home" data-toggle="tab">100% Vegan</a></li>
                                        <li style="width: 33%;"><a href="#updates" data-toggle="tab">Catering</a></li>
                                        <li style="width: 33%;"><a href="#message" data-toggle="tab">Restaurant</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                                <div class="row">
									<?php if($Restaurantsv):
									 $i=0; ?>
									<?php foreach ($Restaurantsv as $Restaurant): ?>
										<div class="col-md-4 col-sm-6 col-xs-12 mb-20">
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
                                      	<?php if ($i%2==0): ?>
											<div class="clearfix"></div>
										<?php endif ?>
                                        
                                        
                                        
                                        <?php if($i==4):
                                        if(isset($AdblockRes)):
                                        ?>
                                        <div class="col-md-4 col-sm-6 col-xs-12  mb-20">
										<div class="clearfix"></div>
										<div class="text-center">
											<?php echo $AdblockRes?>
										</div>
									</div>
                                        <?php $i++; ?>
                                        <?php endif;?>
                                        <?php endif;?>
									<?php endforeach; endif; ?>
                                    
                                    
                             <div class="clearfix mb-30"></div>
                             <div id="load-more"></div>
								</div><!--row ends here-->
                                <a class="btn btn-white loadmorebtn" onclick="loadmore()" id="loadbtm"><i class="material-icons" style="font-size: 26px;">loop</i> Load More</a>
<input type="hidden" name="limit" id="limit" value="6"/>
<input type="hidden" name="type" id="type" value="isVegan"/>
<input type="hidden" name="offset" id="offset" value="<?php echo sizeof($Restaurantsv);?>"/>
                                
                              <div class="new_cat mt-20 br1">
                            <div class="col-md-12 mar0auto news_cat br1"  style="text-align: center;background-color:#9e72d7;padding: 1% 2% 10% 2%;">
                           <h1 class="newsltrh1">Do you own a Vegan restaurant?</h1>
                            <p class="newsdecs">Get listed with us, we'd love to feature you.</p>
                           <button class="btn btn-white expbtn" style="margin-bottom:3%;" data-toggle="modal" data-target="#getListed">INCLUDE MY RESTAURANT</button>
                                    </div>
                                </div>
                             
                        </div>
                        <div class="tab-pane" id="updates">
                           <div class="row">
									<?php if($Caterings):
								 $i=0; ?>
									<?php foreach ($Caterings as $Restaurant): ?>
										<div class="col-md-4 col-sm-6 col-xs-12 mb-20">
											<img src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->cover_img; ?>" class="img-responsive br1"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" >
											<div class="col-sm-4 col-xs-4">
											   <img style="border: 1px solid #e8e8e8;" src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->Logo; ?>" class="img-responsive mt-30-m br1"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" > 
											</div>
											<div class="col-sm-8 col-xs-8" style="padding-left: 0px;">
                                            <a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><h3 class="featurettl" ><?php echo $Restaurant->restaurantName; ?></h3></a>
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
												<li class="pull-right"><a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><button class="btn rmgbtnrest mt-0" >DETAILS <i class="icon-arrow-right"></i></button></a></li>
											</ul>
										</div>
                                       	<?php $i++; ?>
                                      	<?php if ($i%2==0): ?>
											<div class="clearfix"></div>
										<?php endif ?>
                                        
                                        
                                        
                                        <?php if($i==4):
if(isset($AdblockRes)):?>
                                        <div class="col-md-4 col-sm-6 col-xs-12  mb-20">
										<div class="clearfix"></div>
										<div class="text-center">
											<?php echo $AdblockRes?>
										</div>
									</div>
                                        <?php $i++; ?>
                                        <?php endif;?>
<?php endif;?>
									<?php endforeach; endif; ?>
                                    
                                    
                             <div class="clearfix mb-30"></div>
                             <div id="load-morec"></div>
								</div>
<a class="btn btn-white loadmorebtn" onclick="loadmorec()" id="loadbtmc"><i class="material-icons" style="font-size: 26px;">loop</i> Load More</a>
<input type="hidden" name="limitc" id="limitc" value="6"/>
<input type="hidden" name="typec" id="typec" value="Catering"/>
<input type="hidden" name="offsetc" id="offsetc" value="<?php echo sizeof($Caterings);?>"/>                                
                             
                             <div class="new_cat mt-20 br1">
                                    <div class="col-md-12 mar0auto news_cat br1"  style="text-align: center;background-color:#9e72d7;padding: 1% 2% 10% 2%;">
                                        <h1 class="newsltrh1">Do you own a Vegan restaurant?</h1>
                                        <p class="newsdecs">Get listed with us, we'd love to feature you.</p>
                                          <button class="btn btn-white expbtn" data-toggle="modal" data-target="#getListed">INCLUDE MY RESTAURANT</button>
                                    </div>
                                </div>
                        </div>
                        
                        
                        <div class="tab-pane" id="message">
                           <div class="row">
									<?php if($Resto):
									 $i=0; ?>
									<?php foreach ($Resto as $Restaurant): ?>
										<div class="col-md-4 col-sm-6 col-xs-12 mb-20">
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
												<li class="pull-right"><a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><button class="btn rmgbtnrest mt-0" >DETAILS <i class="icon-arrow-right"></i></button></a></li>
											</ul>
										</div>
                                       	<?php $i++; ?>
                                      	<?php if ($i%2==0): ?>
											<div class="clearfix"></div>
										<?php endif ?>
                                        
                                        
                                        
                                        <?php if($i==4):
if(isset($AdblockRes)):?>
                                        <div class="col-md-4 col-sm-6 col-xs-12  mb-20">
										<div class="clearfix"></div>
										<div class="text-center">
											<?php echo $AdblockRes?>
										</div>
									</div>
                                        <?php $i++; ?>
                                        <?php endif;?>
<?php endif;?>
									<?php endforeach; endif; ?>
                                    
                                    
                             <div class="clearfix mb-30"></div>
                             <div id="load-morer"></div>
								</div><!--row ends here-->
<a class="btn btn-white loadmorebtn" onclick="loadmorer()" id="loadbtmr"><i class="material-icons" style="font-size: 26px;">loop</i> Load More</a>
<input type="hidden" name="limitr" id="limitr" value="6"/>
<input type="hidden" name="typer" id="typer" value="Restaurant"/>
<input type="hidden" name="offsetr" id="offsetr" value="<?php echo sizeof($Resto);?>"/> 
                             <div class="new_cat mt-20 br1">
                                    <div class="col-md-12 mar0auto news_cat br1"  style="text-align: center;background-color:#9e72d7;padding: 1% 2% 10% 2%;">
                                        <h1 class="newsltrh1">Do you own a Vegan restaurant?</h1>
                                        <p class="newsdecs">Get listed with us, we'd love to feature you.</p>
                                          <button class="btn btn-white expbtn" >INCLUDE MY RESTAURANT</button>
                                    </div>
                                </div>
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

$(document).ready(function(){
    $(".titletext3").click(function(){
        $(".rest_search").slideToggle(500);
		$(".rest_search_adv").slideToggle(500);
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
	function loadmore()
	{
		jQuery.ajax(
		{
			url: '<?php echo base_url()?>restaurant/loadmore',
			data:{
			  offset :$('#offset').val(),
			  limit :$('#limit').val()
			},
			//dataType: "json", 
			success :function(data)
			{
				if(data)
				{
				$('#load-more').append(data).slideDown('slow');
				$('#offset').val(parseInt($('#offset').val())+parseInt($('#limit').val()));
				$('#loadbtm').click(false);
				}
				else{ $('#loadbtm').hide(); }
			}
		})
	}
function loadmorec()
	{
		jQuery.ajax(
		{
			url: '<?php echo base_url()?>restaurant/loadmore',
			data:{
			  offset :$('#offsetc').val(),
			  limit :$('#limitc').val(),
			  typex : $('#typec').val()
			},
			success :function(data)
			{
				if(data)
				{
				$('#load-morec').append(data).slideDown('slow');
				$('#offsetc').val(parseInt($('#offsetc').val())+parseInt($('#limitc').val()));
				$('#loadbtmc').click(false);
				}
				else{ $('#loadbtmc').hide(); }
			}
		})
	}	
	
function loadmorer()
	{
		jQuery.ajax(
		{
			url: '<?php echo base_url()?>restaurant/loadmore',
			data:{
			  offset :$('#offsetr').val(),
			  limit :$('#limitr').val(),
			  typex : $('#typer').val()
			},
			success :function(data)
			{
				if(data)
				{
				$('#load-morer').append(data).slideDown('slow');
				$('#offsetr').val(parseInt($('#offsetr').val())+parseInt($('#limitr').val()));
				$('#loadbtmr').click(false);
				}
				else{ $('#loadbtmr').hide(); }
			}
		})
	}	
	
function autocomplet() {
	var min_length = 1; // min caracters to display the autocomplete
	var keyword = $('#restrnt').val();
	if (keyword.length >= min_length) {
	$.ajax({
	url: '<?php echo base_url()?>restaurant/Searchuser',
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
function set_item(item,ggg) {
	$('#restrnt').val(item);
	$('#msgtov').val(ggg);
	$('#country_list_id').hide();
}


function autocomplet2() {
	var min_length = 1; // min caracters to display the autocomplete
	var keyword = $('#restrnt2').val();
	if (keyword.length >= min_length) {
	$.ajax({
	url: '<?php echo base_url()?>restaurant/Searchuser2',
	type: 'POST',
	data: {keyword:keyword},
	success:function(data){
		$('#country_list_id2').show();
		$('#country_list_id2').html(data);
	}
});
} else {
	$('#country_list_id2').hide();
}
}
function set_item2(item,ggg) {
	$('#restrnt2').val(item);
	$('#msgtov').val(ggg);
	$('#country_list_id2').hide();
}

</script>
 