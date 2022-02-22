<?php $this->load->view('templates/header'); ?>
<div class="clearfix rs_toppadder10"></div>
	<div class="container pad0">		
		<div class="row">
        	<div class="col-md-8 col-sm-12 col-xs-12" style="margin:0 auto; float:none;">
            
            
<?php if(isset($city)):
  $current=$city;

 ?>
  
<?php else:

$current="";
?>

<?php endif;?>
                        
                
                <form action="<?php echo base_url();?>search/restaurant" role="search">
                <div class="row rs_toppadder20">
                    	<div class="col-md-4" style="padding:0 3px">
                			<div class="input-group inptbrdr" style="border:1px solid #ddd">
                      <span class="input-group-addon inptadon" id="basic-addon1" style="padding: 9.5px 12px;"><i class="fa fa-map-marker fa-3x" style="color:#ffa58a;font-size: 1.7em;"></i></span>
                      <select name="city"  class="form-control citysel" >
                      <option value="">Search City</option>
                       <?php if(isset($Cities)): 
						  foreach($Cities as $city): ?>

                        <option value="<?php echo $city->url?>" <?php if($current==$city->url){ echo 'selected';}?>><?php echo $city->name?></option>
                        <?php endforeach; endif;?>
                      </select>
                    </div>
                   		</div>
                 		<div class="col-md-7" style="padding:0 3px">
                    		<div class="input-group inptbrdr" style="border:1px solid #ddd">
                      <span class="input-group-addon inptadon" id="basic-addon1"><i class="fa fa-search fa-3x" style="color: #ffa58a;font-size: 1.3em;padding: 6px 0;"></i></span>
                      <input type="text" name="keyword" class="form-control inptstyle" placeholder="Search for restaurants" aria-describedby="basic-addon1" value="<?php if(isset($_GET['keyword'])) {echo $_GET['keyword'];}?>">
                    </div>  
                   		</div>
                        <div class="col-md-1" style="padding:0 3px">
                        	<button type="submit" class="rs_button rs_button_orange searchbtn">Search</button>
                        </div>
                    </div>
                </form>
               <div class="text-center rs_toppadder30 rs_bottompadder10">
                	 <a class="rs_button rs_button_orange btnbaba" data-toggle="modal" data-target="#getListed">GET LISTED!</a>
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

		<div class="form-group">
        <label>Name</label>
		<input type="text" class="form-control" id="name" >
		</div>
		<div class="form-group">
        <label>City</label>
		<input type="text" class="form-control" id="city">
 		</div>
<div class="form-group">
        <label>Email</label>
		<input type="text" class="form-control" id="email">
 		</div>

   		<div class="form-group">
        <label>Phone Number</label>
		<input type="text" class="form-control" id="contact">
 		</div>

        <div class="form-group">
                <label>Address</label>
		        <textarea id="address" class="form-control"></textarea>
 		</div>
        <div class="form-group">
                <label>Approx Price for 2</label>
		        <input type="text" class="form-control" id="price">
 		</div>
        
        
		<div class="form-group">
<button type="button" id="submlit"  class="rs_button rs_button_orange">Submit</button>
		
		</div>
		</form>
                        </div>
                        
                  </div>
                  
                </div>
              </div>
            </div>
            
<?php 
if(isset($Restaurants)):
foreach($Restaurants as $Restaurant) : 
if($Restaurant->isPremium == 1) :
?>
<div class="clearfix rs_toppadder20"></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="bordnw">
                	<div class="pull-right">
                    	<div class=""><a class="rs_button rs_button_orange btnbaba001" href="<?php echo base_url();?>search/restaurant?type=<?php echo $Restaurant->category;?>"><?php echo $Restaurant->category;?></a></div>
                    </div>                	
                        <div class="col-md-2 col-sm-4 col-xs-12 pad7">
                            <div class="rs_toppadder20 rs_bottompadder20 pb-0">
                                <a href="<?php echo base_url()."restaurants/".$Restaurant->Url; ?>"><img src="<?php echo base_url()."media/upload/restaurant/".$Restaurant->Logo; ?>" class="img-responsive center-block" alt="" style="width:90%;border-radius: 100%;"></a>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-8 col-xs-12 pad7">
                            <h1 class="borwdt h1font"><a href="<?php echo base_url()."restaurants/".$Restaurant->Url; ?>" style="color: #fda58d;"><?php echo $Restaurant->restaurantName; ?></a></h1>                            
                            <h3 class="h3font" style="text-transform:capitalize;"><?php echo $Restaurant->City.', '.$Restaurant->Country; ?></h3>
                            <p><?php echo $Restaurant->ShortDesc; ?></p>
                        </div>                   
                </div>
                <div class="text-center">
                	<a class="rs_button rs_button_orange btnbaba234" href="<?php echo base_url()."restaurants/".$Restaurant->Url; ?>">VIEW DETAILS</a>
                </div>                
            </div><!--restaurant ends here-->
<div class="rs_toppadder20" style="clear:both"></div>
<?php else : ?>            
<div class="clearfix rs_toppadder20"></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
            	<div class="bordnw notprem">
                	<div class="pull-right">
                    	<div class=""><a class="rs_button rs_button_orange btnbaba001"><?php echo $Restaurant->category;?></a></div>
                    </div>                	
                        <div class="col-md-2 col-sm-4 col-xs-12 pad7">
                            <div class="rs_toppadder20 rs_bottompadder20 pb-0">
                                <a href="#"><img src="<?php echo base_url()."media/upload/restaurant/".$Restaurant->Logo; ?>" class="img-responsive center-block" alt="" style="width:90%;border-radius: 100%;"></a>
                            </div>
                        </div>
                        <div class="col-md-10 col-sm-8 col-xs-12 pad7">
                            <h1 class="borwdt h1font"><a href="#" style="color: #fda58d;"><?php echo $Restaurant->restaurantName; ?></a></h1>                            
                            <h3 class="h3font" style="text-transform:capitalize;"><?php echo $Restaurant->City.', '.$Restaurant->Country; ?></h3>
                            <p><?php echo $Restaurant->ShortDesc; ?></p>
                        </div>                   
                </div>
                                
            </div><!--restaurant ends here-->
<div class="rs_toppadder20" style="clear:both"></div>

<?php endif;
 endforeach;
endif;
 ?>  
 


        
               
        </div>         
	</div>            
    
    <?php
        $this->load->view('templates/footer');
?>

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
alert("Please fill City");
return false;
}
else if (email=== '') {
alert("Please Enter Your Email");
return false;
}
else if (contact === '') {
alert("Please fill Phone Number");
return false;
}

else {
return true;
}
}
});
</script>


 