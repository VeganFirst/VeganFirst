<?php $this->load->view('templates/header'); ?>
	<style type="text/css">
		td {text-align: left;padding: 8px;border-bottom: 1px solid #eee;font-family: "Source Sans Pro";font-size: 16px;line-height: 28px;font-weight: 600;}
		
		.nav-tabs { border-bottom: 2px solid #DDD; background: #ffffff; }
		.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
		.nav-tabs > li > a { border: none; color: #6cbd45 !important; }
		
		.nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #292b28 !important; background: transparent; }
		.nav-tabs > li > a::after { content: ""; background: #292b28; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
		.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
		.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #6cbd45; }
		/*.tab-pane { padding: 15px 0; }*/
		/*.tab-content{padding:20px}*/
		.nav-tabs>li>a {position: relative;display: block;padding: 0px 15px 10px 15px; }
		.card {background: #FFF none repeat scroll 0% 0%; box-shadow: none !important; margin-bottom: 30px; }
	</style>
	<div class="new_cat">
		<div class="col-md-12 mar0auto news_cat"  style="text-align: center;">
			<h1 class="newsltrh1 pt-50">The Big Restaurant Guide</h1>
			<p class="newsdecs pb-10">Satisfy those hunger pangs with our carefully-curated vegan restaurants and cafes. Find one near you.</p>
			<?php if(isset($city)):
				$current=$city;
			?>
			<?php else:
				$current="";
			?>
			<?php endif;?>
			<form action="<?php echo base_url();?>search/restaurant" role="search" class="rest_search">
							
                <input type="text" name="keyword" placeholder="Search for restaurants..." aria-describedby="basic-addon1" class="keyw" id="restrnt" onkeyup="autocomplet()" value="<?php if(isset($_GET['keyword'])) {echo $_GET['keyword'];}?>" autocomplete="off">
                <select name="city" class="cty">
								<option value="" hidden>All cities</option>
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
 <?php if(isset($AdblockResH)):?>  
<div class="clearfix"></div>
	<div class="text-center mt-20">
		<?php echo $AdblockResH?>
    </div> 
<div class="clearfix"></div> 
 
 <?php endif;?> 
    
	<div class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
                <div class="row">
                <div class="col-sm-12">
                <h4 class="title1 mt-30">WHAT'S NEW</h4>
                </div>
					<div class="col-sm-7 hidden">
						<h4 class="title1 mt-10 mb-0" style="float:left;"><?php echo $Count; ?> restaurants and counting...</h4> 
					</div>
					<div class="col-sm-5 pull-right">
						<ul class="nav nav-tabs mt-10" role="tablist" style="float:right;">
							<li role="presentation" class="active"><a href="#best-rating" aria-controls="best-rating" role="tab" data-toggle="tab">100% Vegan</a></li>
							<li role="presentation"><a href="#take-aways" aria-controls="take-aways" role="tab" data-toggle="tab">Catering</a></li>
							<li role="presentation"><a href="#Restro" aria-controls="Restro" role="tab" data-toggle="tab">Restaurant</a></li>
						</ul>
					</div> 
                    
                    </div>
					<div class="card mt-20">
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="best-rating">

								<div class="row">
                               <?php if($Restaurantsv):
									 $i=0; ?>
									<?php foreach ($Restaurantsv as $Restaurant): ?>
										<div class="col-sm-6 mb-30">
											<img src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->cover_img; ?>" class="img-responsive lnk br1"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" >
											<div class="col-sm-4">
											   <img style="border: 1px solid #e8e8e8;" src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->Logo; ?>" class="img-responsive br1 mt-30-m lnk"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" > 
											</div>
											<div class="col-sm-8" style="padding-left: 0px;">
                                            <a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><h3 class="featurettl mt-10"><?php echo $Restaurant->restaurantName; ?></h3></a>
												<ul class="list-inline mb-0">
													<li><span class="expname2"><?php echo $Restaurant->City.', '.$Restaurant->Country; ?></span></li>
												</ul>
											</div>
											
											<ul class="list-inline mb-0">
												<?php if($Restaurant->isVegan):?>
                                                <li class="pull-left mt-10"><span><img src="<?php echo base_url();?>assetsNew/img/vegan.png" style="padding-right: 10px;"></span><span class="expname2">100% Vegan</span></li>
                                                <?php endif;?>
												<li class="pull-right">
                                                <a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><button class="btn btn-white rwbt mt-0" >DETAILS <i class="icon-arrow-right"></i></button></a>
                                                
                                                </li>
											</ul>
										</div>
                                       	<?php $i++; ?>
										<?php if ($i%2==0): ?>
											<div class="clearfix"></div>
										<?php endif ?>
                                        <?php if($i==4 && isset($AdblockRes)):?>
                                        <div class="col-sm-6  mb-20">
										<div class="clearfix"></div>
										<div class="text-center">
											<?php echo $AdblockRes?>
										</div>
									</div>
                                        <?php $i++; ?>
                                        <?php endif;?>
									<?php endforeach;
									endif; ?>
                                    
								<div class="clearfix mb-30"></div>
                             <div id="load-more"></div>
								</div><!--row ends here-->
                                <div class="text-center">
                                <a class="btn btn-white wbt" onclick="loadmore()" id="loadbtm"><i class="material-icons">loop</i> Load More</a>
<input type="hidden" name="limit" id="limit" value="6"/>
<input type="hidden" name="type" id="type" value="isVegan"/>
				<input type="hidden" name="offset" id="offset" value="<?php echo sizeof($Restaurantsv);?>"/>
                </div>
								<div class="clearfix"></div>
							</div>
						<div role="tabpanel" class="tab-pane" id="take-aways">
								<div class="row">
                                 <?php if($Caterings):
								$i=0; ?>
									<?php foreach ($Caterings as $Restaurant): ?>
										<div class="col-sm-6 mb-30">
											<img src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->cover_img; ?>" class="img-responsive lnk br1"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" >
											<div class="col-sm-4">
											   <img style="border: 1px solid #e8e8e8;" src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->Logo; ?>" class="img-responsive br1 mt-30-m lnk"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" > 
											</div>
											<div class="col-sm-8" style="padding-left: 0px;">
                                            <a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><h3 class="featurettl mt-10" ><?php echo $Restaurant->restaurantName; ?></h3></a>
												<ul class="list-inline mb-0">
													<li><span class="expname2"><?php echo $Restaurant->City.', '.$Restaurant->Country; ?></span></li>
												</ul>
											</div>
											
											<ul class="list-inline mb-0">
												<?php if($Restaurant->isVegan):?>
                                                <li class="pull-left mt-10"><span><img src="<?php echo base_url();?>assetsNew/img/vegan.png" style="padding-right: 10px;"></span><span class="expname2">100% Vegan</span></li>
                                                <?php endif;?>
												<li class="pull-right">
                                                <a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><button class="btn btn-white rwbt mt-0">DETAILS <i class="icon-arrow-right"></i></button></a>
                                                
                                                </li>
											</ul>
										</div>
                                       	<?php $i++; ?>
										<?php if ($i%2==0): ?>
											<div class="clearfix"></div>
										<?php endif ?>
                                        <?php if($i==4 && isset($AdblockRes)):?>
                                        <div class="col-sm-6  mb-20">
										<div class="clearfix"></div>
										<div class="text-center">
											<?php echo $AdblockRes?>
										</div>
									</div>
                                        <?php $i++; ?>
                                        <?php endif;?>
									<?php endforeach; endif; ?>
								<div class="clearfix mb-30"></div>
                             <div id="load-morec"></div>
								</div>
                          <div class="text-center">
                                <a class="btn btn-white wbt" onclick="loadmorec()" id="loadbtmc"><i class="material-icons">loop</i> Load More</a>
<input type="hidden" name="limitc" id="limitc" value="6"/>
<input type="hidden" name="typec" id="typec" value="Catering"/>
<input type="hidden" name="offsetc" id="offsetc" value="<?php echo sizeof($Caterings);?>"/>
                </div>      
                                
                                
                                
							</div>
							<div role="tabpanel" class="tab-pane" id="Restro">
								<div class="row">
									<?php if($Resto):
									$i=0; ?>
									<?php foreach ($Resto as $Restaurant): ?>
										<div class="col-sm-6 mb-30">
											<img src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->cover_img; ?>" class="img-responsive lnk br1"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" >
											<div class="col-sm-4">
											   <img style="border: 1px solid #e8e8e8;" src="<?php echo base_url().'media/upload/restaurant/'.$Restaurant->Logo; ?>" class="img-responsive br1 mt-30-m lnk"  onclick="location.href='<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>'" > 
											</div>
											<div class="col-sm-8" style="padding-left: 0px;">
                                            <a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><h3 class="featurettl mt-10" ><?php echo $Restaurant->restaurantName; ?></h3></a>
												<ul class="list-inline mb-0">
													<li><span class="expname2"><?php echo $Restaurant->City.', '.$Restaurant->Country; ?></span></li>
												</ul>
											</div>
										
											<ul class="list-inline mb-0">
												<?php if($Restaurant->isVegan):?>
                                                <li class="pull-left mt-10"><span><img src="<?php echo base_url();?>assetsNew/img/vegan.png" style="padding-right: 10px;"></span><span class="expname2">100% Vegan</span></li>
                                                <?php endif;?>
												<li class="pull-right">
                                                <a href="<?php echo base_url().'restaurants/'.$Restaurant->Url; ?>"><button class="btn btn-white rwbt mt-0" >DETAILS <i class="icon-arrow-right"></i></button></a>
                                                
                                                </li>
											</ul>
										</div>
                                       	<?php $i++; ?>
										<?php if ($i%2==0): ?>
											<div class="clearfix"></div>
										<?php endif ?>
                                        <?php if($i==4 && isset($AdblockRes)):?>
                                        <div class="col-sm-6  mb-20">
										<div class="clearfix"></div>
										<div class="text-center">
											<?php echo $AdblockRes?>
										</div>
									</div>
                                        <?php $i++; ?>
                                        <?php endif;?>
									<?php endforeach; endif; ?>
								<div class="clearfix mb-30"></div>
                             <div id="load-morer"></div>
								</div>
                                <div class="text-center">
                                <a class="btn btn-white wbt" onclick="loadmorer()" id="loadbtmr"><i class="material-icons">loop</i> Load More</a>
<input type="hidden" name="limitr" id="limitr" value="6"/>
<input type="hidden" name="typer" id="typer" value="Restaurant"/>
<input type="hidden" name="offsetr" id="offsetr" value="<?php echo sizeof($Resto);?>"/>
                </div>
							</div>
						</div>   
					</div>
					<div class="new_cat mt-20 br1">
						<div class="col-md-12 mar0auto news_cat br1"  style="text-align: center;">
							<h1 class="newsltrh1 pt-20">Do you own a Vegan restaurant?</h1>
							<p class="newsdecs">Get listed with us, we'd love to feature you.</p>
							
                            <button class="btn btn-white button-lg btt bts" data-toggle="modal" data-target="#getListed">INCLUDE MY RESTAURANT</button>
                            <div class=" clearfix mt-40"></div>
						</div>
					</div>
                    <div class=" clearfix mt-60"></div>
				</div>
			
            
            
            	
				
				<div class="col-md-4">
				<h4 class="title1 mt-30 p-0-5">trending</h4>
				
				<?php
				if($Articles): 
				foreach($Articles as $Article){
				$cat = $this->M_Category->getCategoryInfo_art($Article->category);
				$author = $this->M_Author->getAuthorInfo($Article->Author);
				?>
					 <div class="trending-sec">
                            <div class="col-sm-5 p-0-5">
                                <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" alt="<?php echo $Article->imgalt; ?>" class="img-responsive br1 lnk" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
             
            <?php if($cat):?>
               <div class="post-title4">
                 <a href="<?php echo base_url().'article/category/'.$cat->Url?>"><h5 class="lable-sty lnk"><?php echo $cat->CategoryTitle; ?></h5></a>
                 </div>
           <?php endif;?>
                            </div>
                            <div class="col-sm-7" style="padding-right: 0;">
                                <a href="<?php echo base_url().'article/'.$Article->Url; ?>"><h4 class="sidenm"><?php echo $Article->PageTitle ?></h4></a>
                                <ul class="list-inline mt-5">
                                    <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive lnk sml-pro-pic3">  <span class="pronam"> | <?php echo date("F d, Y", strtotime($Article->postTime));?></span>
                                    </li>
                                                                 </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
	          <?php } endif;?>
                           
				<div class="col-md-12 mt-40" style="background:#6CBD45">
                			<h2 class="newsltrh1 mt-60">Support Our Cause</h2>
                			<p class="newsdecs">Suscribe to our Updates</p>
                			 <form method="post" name="nfform" class="subform"  style="float: none;margin: 0 auto;">
                				<div class="row">
                					<div class="col-sm-12 form-inline mar0auto">
                                    <div class="form-group mt-5 mb-20">
                							<input type="text" name="name" placeholder="Name" class="form-control newsinpt other" required="required"  style="height:46px;" />
                                            </div>
                                            <div class="form-group mt-5 mb-20">
                							<input type="email" name="email" placeholder="Email" class="form-control newsinpt other"  required="required" style="height:46px;" />
                                            </div>
                						<div class="form-group mt-5 mb-20">
                							<input type="text" name="city" placeholder="City" class="form-control newsinpt other"  required="required" style="height:46px;" />
                                            </div>
                                       <div class="form-group mt-5 mb-20" style="margin-left:-5px;">
                                            <button type="submit" class="btn nlbtn" style="border:1px solid #fff">Submit</button>
                						</div>
                                        
                                        <div class="text-center resp white"></div>
                                   </div>     
                                  
                					
                				</div>
                			</form>
                		</div>
		<div class="clearfix"></div>
                 <div class="ad_block text-center mt-40">
                          <div class="ttl">Advertisement</div>
                          <div id="div-gpt-ad-1586865627379-0" style="width: 300px; height: 500px; display: block; margin-left: auto; margin-right: auto;">
                          <script>
                            googletag.cmd.push(function() { googletag.display('div-gpt-ad-1586865627379-0'); });
                          </script>
                        </div>
                        </div>
				<div class="clearfix mt-40"></div>
				<div class="cumuntiybg mt-30">
					<h4 class="text-center titar mb-0">Be a Vegan First Informer</h4>
					<h5 class="text-center txar" >Send us buzzworthy news and updates</h5>
					<div class="text-center">
						<button class="btn btn-success coolbtn" style="letter-spacing: 1px;" data-toggle="modal" data-target="#reg_popup">Write to us</button>
					</div>
				</div>
				<div class="clearfix"></div>  
			</div>
            </div><!--main row ends here-->            
		</div><!--containers ends here-->
	</div><!--main ends here-->
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
        
        <div id="thnklist"></div>
		</form>
                        </div>
                        
                  </div>
                  
                </div>
              </div>
            </div>
    
</div>
<?php $this->load->view('templates/footer_nl'); ?>
<?php $this->load->view('templates/footer'); ?>

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
			  limit :$('#limit').val(),
			  typex : $('#type').val()
			},
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



// set_item : this function will be executed when we select an item

function set_item(item,ggg) {

	// change input value

	$('#restrnt').val(item);

	$('#msgtov').val(ggg);

	$('#country_list_id').hide();

}

</script>
