<?php $this->load->view('templates/header'); ?>
<style>
 .control-label{	color: #292B28 !important;	font-family: "Source Sans Pro";	font-size: 16px !important;	line-height: 32px;}
.form-control{font-size: 16px;line-height: 32px;}

</style>

<div class="event_attend_cat" id="notifications">	        
	        <div class="bar1_cat" style="background-color: rgba(99,122,122,0.95);">
	             <div class="container-fluid">
	                <div class="container">
                    	<div class="row">
                        	<div class="col-md-11 mb-30 mt-10">
                            <?php if(isset($Event)): ?>
                            	<h1 class="homeh1msg mb-0" style="color: #fff;"><?php echo $Event->event_title?></h1>
                                <h5 class="dtitle mt-0" style="color: #fff !important;"><?php echo date( "M. j, Y", strtotime( $Event->event_date ) );?></h5>
                                  <?php endif;?> 
                            </div>
                        </div> 
                    </div>
	            </div>
	        </div>
	        <div class="clearfix"></div>
	    </div>
	<div class="main"> 
<div class="container pt-20">
        		
			<div class="row">
            <div class="col-md-8">
                    <div class="mt-20"></div>
                    <?php if(isset($Event)): ?>

<div class="row">                    	
                       <div class="col-md-4">
                            <div class="row">
                                 <div class="col-sm-12">
                                    <h4 class="footerh4 mt-0">Event Form</h4>                                                              
                                </div>
                            </div>
                            </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-10">                            
                            <div class="form-group mt-5 label-floating">
                                <label class="control-label">Your name</label>
                                <input id="name" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                       <div class="col-sm-10">
                            <div class="form-group mt-5 label-floating">
                                <label class="control-label">Your email</label>
                                <input id="email" type="email" class="form-control">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-10">
                            <div class="form-group mt-5 label-floating">
                                <label class="control-label">Phone number</label>
                                <input id="phone" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                       <div class="col-sm-10">
                            <div class="form-group mt-5 label-floating">
                                <label class="control-label">Age</label>
                                <input id="age" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-10">
                            <div class="form-group mt-5 label-floating">
                                <label class="control-label">Occupation</label>
                                <input id="occupation" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-10">
                            <div class="form-group mt-5 label-floating">
                                <label class="control-label">City</label>
                                <input id="city" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                         <div class="col-sm-10">
                            <div class="form-group mt-5 label-floating">
                                <label class="control-label">Website</label>
                                <input id="website" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-10">
                            <div class="form-group mt-5 label-floating">
                                <label class="control-label">Vegan</label>
                                <select id="isVegan" class="form-control">
                                <option hidden></option>
                                <option value="Vegan">Vegan</option>
                                <option value="NonVegan">Non Vegan</option>
                                <option value="Vegetarian">Vegetarian</option>
                                </select>                                
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        <div class="col-sm-10">
                            <div class="form-group mt-5 label-floating">
                                <label class="control-label">Areas of Interest</label>
                                <select id="Interest"  class="form-control">
                                <option hidden></option>
                                <option value="Vegan Recipes">Vegan Recipes</option>
                                <option value="News">News</option>
                                <option value="Nutritionist">Nutritionist</option>
                                
                                <option value="Fitness">Fitness</option>
                                <option value="Luncheons and meet ups">Luncheons and meet ups</option>
                                <option value="Fests">Fests</option>
                                <option value="Cooking Classes">Cooking Classes</option>
                                
                                </select>                                
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-10">
                            <div class="form-group mt-5 label-floating">
                                <label class="control-label">Health</label>
                                <select id="Health" class="form-control">
                                <option hidden></option>
                                <option value="NA">Not Applicable</option>
                                <option value="Iactose Intolerance">Lactose Intolerance</option>
                                <option value="Diabetes">Diabetes</option>
                                <option value="Gluten Allergy">Gluten Allergy</option>
                                <option value="Dairy Allergy">Dairy Allergy</option>
                                <option value="Soy Allergy">Soy Allergy</option>
                                <option value="Nut Allergy">Nut Allergy</option>
                                <option value="Soy Allergy">Soy Allergy</option>
                                </select>                                
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>                                           
                    </div>
					<?php /*?><div class="checkbox mt-10" >
                        <label><input id="participate" value="Yes" type="checkbox" name="optionsCheckboxes"></label><span style="font-family: Source Sans Pro;font-size: 16px;font-weight: 400;">Participate in our contests and win free vegan goodies every month?</span>
                    </div><?php */?>
                    <div class="mt-20">
                        <span style="font-family: Source Sans Pro;font-size: 13px;font-weight: normal;color: lightslategray;"><button class="btn btn-success btn-lg" style="letter-spacing: 2px;" id="attend">REGISTER</button></span>
                    </div>
					<div id="thnklist"></div>

                    <?php endif;?>             
                </div>
            	<?php /*?><div class="col-md-8">
                    <div class="mt-20"></div>
                    <?php if(isset($Event)): ?>

<iframe class="airtable-embed" src="https://airtable.com/embed/shr8YRP4Dnj6qBCcp?backgroundColor=purple" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>

                    <?php endif;?>             
                </div><?php */?><!--content part ends here-->
                
               <div class="col-md-4">
                    <div class="row">           
                        <div class="clearfix"></div>
                         <h4 class="footerh4">Event Details</h4>                           <?php if(isset($Event)): ?>  
                     <?php echo $Event->event_deac?>
                     <?php endif;?>
                        

                        
                        <div class="clearfix mt-20"></div>                         
                            <div class="col-sm-3 p-0">
                                <div class="map-responsive">
                                    
                                    <iframe class="embed-responsive-item"  src="//www.google.com/maps/embed/v1/place?q=<?php echo $Event->addr;?>&zoom=20&key=AIzaSyDphtvCoFP0ZoWMPyCVf6RWlzHPQiJX4t4"  style="height:90px; width:90px"  frameborder="0" allowfullscreen>
  </iframe>                                   
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <a href="https://www.google.co.in/maps/place/<?php echo $Event->addr;?>"><h4 style="margin-top: 6%;font-family: Source Sans Pro;color: #6cbd45;font-weight: 500;">See location on map</h4></a>
                            </div>
                        <div class="clearfix"></div>                      
                    </div>                    
                    
                </div><!--sidebar ends here-->
                
            </div><!--main row ends here-->
           
		</div>			     
		
		
 </div>      
        
		




<div class="clearfix pt-60"></div>
<?php $this->load->view('templates/footer_nl');?>
<?php $this->load->view('templates/footer');?>

<script type="text/javascript">
	
$(document).ready(function() {
$("#attend").click(function() {
if (validation())
{
jQuery.ajax({
        url: '<?php echo base_url();?>attendevent',
        data:{
          name :$('#name').val(),
		  email:$('#email').val(),
		  contact :$('#phone').val(),
		  age :$('#age').val(),
          city :$('#city').val(),
		  website:$('#website').val(),
		  isvegan:$('#isVegan').val(),
		  occupation:$('#occupation').val(),
		  participate:$('#participate').val(),
		  interest:$("#Interest").val(),
		  health:$('#Health').val(),
		  eventsx:"<?php echo $Event->event_title?>"
        },
        dataType: "json",
		type: "POST", 
        success :function(data){
			$('#thnklist').html(data.message);
			$('#name').val('');
			$('#email').val('');
			$('#phone').val('');
			$('#age').val('');
			$('#city').val('');
			$('#website').val('');
			$('#isVegan').val('');
			$('#occupation').val('');
        }
    })
}
});
function validation() {
var name = $("#name").val();
var city = $("#city").val();
var email= $("#email").val();
var phone = $("#phone").val();
var address = $("#age").val();
if (name === '') {
alert("Please Enter Name");
return false;
}

else if (email=== '') {
alert("Please Enter Your Email");
return false;
}
else if (phone === '') {
alert("Please Enter Phone Number");
return false;
}
else if (address === '') {
alert("Please Enter your Age");
return false;
}

else if (city === '') {
alert("Please Enter City");
return false;
}



else {
return true;
}
}
});
</script>
  