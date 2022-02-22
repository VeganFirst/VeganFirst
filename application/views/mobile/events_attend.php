<?php $this->load->view('mobile/header'); ?>
<style>
 .control-label{	color: #292B28 !important;	font-family: "Source Sans Pro";	font-size: 16px !important;	line-height: 32px;}
.form-control{font-size: 16px;line-height: 32px;}

</style>

<div class="event_attend_cat" id="notifications">	        
	        <div class="bar1_cat" style="background-color: rgba(99,122,122,0.95);">
	             <div class="container-fluid">
	                <div class="container">
                    	<div class="row">
                        	<div class="col-md-9 mb-30 mt-10">
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
            <div class="col-md-4 col-xs-12 pull-right">
                    <div class="">           
                        <div class="clearfix"></div>
                         <h4 class="footerh4">Event Details</h4>                           <?php if(isset($Event)): ?>  
                     <?php echo $Event->event_deac?>
                     <?php endif;?>
                        

                        
                        <div class="clearfix mt-20"></div>                         
                            <div class="col-xs-2 p-0">
                                <div class="map-responsive">
                                    <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15129.071522625427!2d73.9169263!3d18.5619579!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f7fdcc8e4d6c77e!2sPhoenix+Market+City!5e0!3m2!1sen!2sin!4v1495870009454" width="600" frameborder="0" style="bootstrapcdnorder:0;height:60px;width:60px;" allowfullscreen></iframe>-->
                                    <iframe class="embed-responsive-item"  src="//www.google.com/maps/embed/v1/place?q=<?php echo $Event->addr;?>&zoom=20&key=AIzaSyBmOWlL4LyKLUjzibfd5RlijGBTlHJLtAk" width="600" style="bootstrapcdnorder:0;height:60px;width:60px;"  frameborder="0" allowfullscreen></iframe>                       
                                </div>
                            </div>
                            <div class="col-xs-10">
                                <a href="https://www.google.co.in/maps/place/<?php echo $Event->addr;?>"><p class="mt-20" style="color: #6cbd45;">See location on map</p></a>
                            </div>
                        <div class="clearfix"></div>                      
                    </div>                    
                    
                </div>
            
            	<div class="col-md-8 col-xs-12">
                    <div class="mt-20"></div>
                    <?php if(isset($Event)): ?>

                    <iframe class="airtable-embed" src="https://airtable.com/embed/shr8YRP4Dnj6qBCcp?backgroundColor=purple" frameborder="0" onmousewheel="" width="100%" height="533" style="background: transparent; border: 1px solid #ccc;"></iframe>
                   

<div id="thnklist"></div>
                    <?php endif;?>             
                </div><!--content part ends here-->
                
               <!--sidebar ends here-->
                
            </div><!--main row ends here-->
           
		</div>			     
		
		
 </div>      
        
		




<div class="clearfix pt-30"></div>
<?php $this->load->view('mobile/footer_nl');?>
<?php $this->load->view('mobile/footer');?>
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
  