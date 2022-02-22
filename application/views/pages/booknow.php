<?php $this->load->view('templates/header'); ?>
 <div class="head_cat" id="notifications">	        
	        <div class="bar_cat">
	             <div class="container-fluid">
	                <div class="container">
                    	<div class="row">
                        	<div class="col-md-9 col-sm-8 mb-30 mt-20">
                            	<h1 class="homeh1msg" style="color: #fff;">Start Your Vegan Journey Today!</h1>
                                <p class="featurettl white">Join 2,333,456 others for the 21 Day challenge</p>
                            </div>
                           <div class="col-md-3 col-sm-4 text-right mt-40 mb-30">
                            <button class="btn catplus" ><i class='material-icons'>add</i> SIGN UP</button>
                            </div>
                        </div> 
                    </div>
	            </div>
	        </div>
	        <div class="clearfix"></div>
	    </div>  
        <?php if(!$this->session->userdata('User_id')):?>
        <script type="text/javascript">
    	$(document).ready(function() {
            $('#login_popup').modal('show');
        });
    	</script>
         <?php else:
		 $User = $this->M_User->getUserInfo($this->session->userdata('User_id'));
		 ?>    
        <div class="container mt-30 mb-30">
        <div class="col-sm-6 mr0auto">
        <p class="featurettl mb-20 text-center">Book Your <?php echo $Plan->title?> Subscription for year</p>
        
        <form class="formLog" method="post" action="<?php echo Current_Url()?>" name="bookform" onSubmit="return validateBookNow()">
        <p>Billing Information</p>
        <div class="row">
        <div class="col-sm-6">
        <div id="formErordbk"><?php if(isset($Error)){ echo  "<div class='alert alert-danger'>".$Error."</div>"; }?></div>
        </div>
        <div class="clearfix"></div>
			  <div class="form-group col-sm-6">
                <label>Full Name</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $User->Name?>">
              </div>
              
              <div class="form-group col-sm-6">
                <label>Email address</label>
                <input type="email" name="email" class="form-control" value="<?php echo $this->session->userdata('User_Name')?>">
              </div>
        </div>
              
              
              <div class="checkbox">
                <label>
                  <input type="checkbox" name="agree" value="1"> I Accept the terms & conditions
                </label>
              </div>
              <button type="submit" class="btn btn-success coolbtn" >Pay Now</button>
        </form>
        
        
        	
           </div>
        </div><!--container ends here-->
       <?php endif;?>
<?php $this->load->view('templates/footer'); ?>