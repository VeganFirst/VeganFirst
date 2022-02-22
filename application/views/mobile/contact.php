<?php 		$this->load->view('mobile/header'); ?>

    

<div class="clearfix pt-10"></div>

<div class="container pad0 decshome">		

	<div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <h3>Contact Us</h3>

        </div>

        

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="min-height: 37vh;" >

			<div style="border-top:1px solid #dbdbdb">

            <div class="pt-20">

            <p>Have some feedback or just want to say hello? We'd love to hear from you! </p>

            </div>

           <?php

                    if(isset($message)):

					echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$message."</h4></div>";

					endif;

					?>

           <div class="clearfix rs_toppadder30"></div>

            <form method="post" onsubmit="return ValidateCon()" name="Cont">


<div class="col-sm-6 col-xs-12">

            <div class="form-group ">
             <input type="text"  name="Name"  placeholder="Name" class="form-control" >

             </div>


          <div class="clearfix"></div>

          <div class="form-group ">
             <input type="text"  name="Email"  placeholder="Email" class="form-control" >

             </div>

          

          <div class="clearfix"></div>

          <div class="form-group ">
            <input type="text"  name="Subject"  placeholder="Subject" class="form-control" >

             </div>


          

          <div class="clearfix"></div>


</div>


<div class="col-sm-6 col-xs-12">

          <div class="form-group ">
             <textarea name="message" rows="6" class="form-control" placeholder="Message"  ></textarea>

            

             </div>


          <div class="clearfix"></div>


          <div class="form-group ">
             <button type="submit" class="btn btn-primary pull-right" style="width:100%;">Submit</button>

            <div id="formEror" style="clear:both;"></div>
          </div>

          
</div>
          

            

            </form>

            </div>

	    </div>

	</div>										

</div>

</div>
<div class="clearfix pt-30"></div>
<?php $this->load->view('mobile/footer_nl');?>
<?php $this->load->view('mobile/footer');?>