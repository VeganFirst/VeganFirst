<?php

$this->load->view("writer/templates/header");

?>



<body>

<?php $this->load->view("writer/navigation"); ?>

<div class="container-fluid" id="content">

   <div id="main" style="margin-left: 0px;">

   <div class="container-fluid">

   <div class="page-header">

       <div class="pull-left"><h1>Add Columnist</h1></div>

   </div>



   <div class="row-fluid">

     <div class="span12">

        <div class="box box-bordered box-color">

        <div class="box-title"><h3><i class="icon-th-list"></i> Columnist Details</h3></div>

        <div class="box-content">

        <form method="POST" name="myForm" class="form-horizontal form-bordered formLog" onSubmit="return validateForm()" enctype="multipart/form-data" >

           <?php if(isset($MessageIns)){ echo "<div class='alert alert-info'><strong>".$MessageIns."</strong></div>"; } ?>                         

         <div class="form-group">

         <label class="col-sm-2 control-label">Columnist Name</label>

         <div class="col-sm-10">

         <input  type="text" name="Name" id="Name" placeholder="Columnist Name" class="form-control">

         </div>

         </div>

                                        

         <div class="form-group">

            <label class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">

              <input type="text" name="Email" id="Email" placeholder="Author Email" class="form-control">

            </div>

         </div>

                                        

       <div class="form-group">

           <label class="col-sm-2 control-label">Profile Picture</label>

           <div class="col-sm-2">

           <img src="<?php echo base_url();?>media/upload/author/writer-pic.jpg" id="uploadimg" class="img-responsive img-circle center-block"><p>Use Square Image like 400 X 400</p>

         <input style="display:none;" id="file" name="file" type="file" class="file" data-show-preview="false">

          </div>

      </div>

      <div class="form-group">

        <label class="col-sm-2 control-label">Speciality</label>

        <div class="col-sm-10">

         <input type="text" name="Speciality" placeholder="Nutritionist" class="form-control">

        </div>

     </div>

      <div class="form-group">

       <label class="col-sm-2 control-label">About</label>

       <div class="col-sm-10">

        <textarea name="descrp" id="descrp" rows="2" maxlength='460' class="form-control"></textarea>

        </div>

     </div>

                                            

    <div class="form-group">

        <label class="col-sm-2 control-label">Facebook</label>

        <div class="col-sm-10">

         <input type="text" name="Facebook" placeholder="https://www.facebook.com/ankurpatel91" class="form-control">

        </div>

     </div>

                                            

    <div class="form-group">

        <label class="col-sm-2 control-label">Twitter</label>

        <div class="col-sm-10">

        <input type="text" name="Twitter" placeholder="https://twitter.com/ankur9187" class="form-control">

        </div>

    </div>

                                            

     <div class="form-group">

        <label class="col-sm-2 control-label">Pinterest</label>

        <div class="col-sm-10">

        <input type="text" name="Pinterest" placeholder="https://in.pinterest.com/ankurpatel91" class="form-control">

         </div>

     </div>

                                            

    <div class="form-group">

       <label class="col-sm-2 control-label">Instagram</label>

       <div class="col-sm-10">

       <input type="text" name="Instagram"  placeholder="https://www.instagram.com/ankur9187" class="form-control">

       </div>

    </div>

                                    

                                            

<div id="formEror"></div>

<?php if(isset($Message)){ echo "<div class='alert alert-info'><strong>".$Message."</strong></div>"; } ?>

     

     <div class="form-group">

         <button type="submit" class="btn btn-primary">Add Author</button>

         <a href="<?php echo base_url()."writer/dashboard"; ?>"><button type="button" class="btn">Cancel</button></a>

    </div>

 </form>

      </div>

     </div>

    </div>

   </div>

  </div>

 </div>

</div>

	

</body>



<script type="text/javascript">

$("#uploadimg" ).click(function() {

     $( "#file" ).click();



    });









function validateForm() {

    var x = document.forms["myForm"]["Name"].value;

	var z = document.forms["myForm"]["Email"].value;

	

	

	var atpos = z.indexOf("@");

    var dotpos = z.lastIndexOf(".");

	

	var msg = [];

	

    if (x == null || x == "") {

		 

        

		msg.push("<div class='alert alert-info'>Author First Name Can not Blank</div>");

		

    }

	

	else if (!x.match(/^[a-zA-Z\s-, ]+$/)) 

    {

        msg.push("<div class='alert alert-info'>Author First Name is Alphabet Only</div>");

    }

    

	

	

	 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {

        msg.push("<div class='alert alert-info'>Not a valid e-mail address</div>");

        

    }

	if(msg.length > 0)

	{

		$('div#formEror').html('');

		for(var i=0; i< msg.length; i++)

		{

	        $('div#formEror').append(msg[i]);

		}

		return false;

	}

	

}



</script>



</html>