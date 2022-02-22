<?php $this->load->view('templates/header'); ?>
<div class="clearfix pt-10"></div>

<div class="container pad0">		

	<div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <h3>Partner with us</h3>

        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="min-height: 37vh;" >

			<div style="border-top:1px solid #dbdbdb">

            <div class="pt-20">

            <p>If you're looking to showcase your brand on our website, we've got great custom made options so that you get the right presence.</p> 
<p>Get in touch with us for some spectacular advertising opportunities for your brand.</p>
<p>Please fill in these details for us to know you better!</p>
            </div>
<?php
                    if(isset($message)):
					echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$message."</h4></div>";
					endif;
					?>
           <div class="clearfix pt-30"></div>
            <form method="post" onsubmit="return ValidatePartner()" name="Part">
<div class="col-sm-6 col-xs-12">
            <div class="form-group mt-10">
             <input type="text"  name="Name"  placeholder="Name" class="form-control" >

            </div>
         <div class="clearfix"></div>

          <div class="form-group mt-10">
             <input type="text"  name="Email"  placeholder="Email" class="form-control" >

          </div>
          <div class="clearfix"></div>

          <div class="form-group mt-10">
             <input type="text"  name="Company"  placeholder="Company Name" class="form-control" >
          </div>
           <div class="clearfix"></div>
</div>
<div class="col-sm-6 col-xs-12">
          <div class="form-group mt-10">
           <input type="text"  name="Phone"  placeholder="Phone Number" class="form-control" >
          </div>
          <div class="clearfix"></div>
          <div class="form-group mt-10">
             <textarea name="message" rows="5" class="form-control" placeholder="Message" ></textarea>
          </div>
          <div class="clearfix"></div>
          <div class="form-group mt-10">
             <button type="submit" class="btn btn-primary pull-right">Submit</button>
            <div id="formEror"></div>
          </div>
</div>
            </form>

            </div>

	    </div>

	</div>										

</div>

</div>
<div class="clearfix pt-30"></div>
<?php $this->load->view('templates/footer_nl');?>
<?php $this->load->view('templates/footer');?>