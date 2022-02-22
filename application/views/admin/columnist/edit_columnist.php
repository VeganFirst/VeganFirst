<?php

$this->load->view("admin/templates/header");

?>

<body>

	<?php

            $this->load->view("admin/navigation");

        ?>

<div class="container-fluid" id="content">

  <div id="main" style="margin-left: 0px;">

     <div class="container-fluid">

       <div class="page-header">

         <div class="pull-left"><h1>Edit Columnist</h1></div>

      </div>



      <div class="row-fluid">

         <div class="span12">

            <div class="box box-bordered box-color">

               <div class="box-title">

               <h3><i class="icon-th-list"></i> Columnist Details</h3>

               </div>

               <div class="box-content">

     <form  action="#" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">

                                    

   <div class="form-group">

         <label class="col-sm-2 control-label">Columnist Name</label>

         <div class="col-sm-10">

         <input required type="text" value="<?php echo $AuthorInfo->Name; ?>" name="Name" id="FirstName" placeholder="Columnist Name" class="form-control">

          </div>

   </div>

                                        

   <div class="form-group">

     <label class="col-sm-2 control-label">Columnist Email</label>

     <div class="col-sm-10">

     <input required type="text" value="<?php echo $AuthorInfo->Email; ?>" name="Email" id="Email" readonly class="form-control">

     </div>

  </div>

                                        

                                    

   <div class="form-group">

      <label class="col-sm-2 control-label">Account status </label>

      <div class="col-sm-10">

      <select required name="isActive" id="isActive" class="form-control">

      <option value="1" <?php if ($AuthorInfo->isActive==1){echo "selected";} ?>>Active</option>

      <option value="0" <?php if ($AuthorInfo->isActive==0){echo "selected";} ?>>Inactive</option>

      </select>

      </div>

    </div>

    <div class="form-group">

           <label class="col-sm-2 control-label">Profile Picture</label>

           <div class="col-sm-2">

    	 <?php if($AuthorInfo->Picture): ?>

         <img src="<?php echo base_url()."media/upload/columnist/".$AuthorInfo->Picture;?>" id="uploadimg" class="img-responsive img-circle center-block"><p>Use Square Image like 400 X 400</p>

         <?php else: ?>

           <img src="<?php echo base_url();?>media/upload/author/writer-pic.jpg" id="uploadimg" class="img-responsive img-circle center-block"><p>Use Square Image like 400 X 400</p>

           <?php endif;?>

         <input style="display:none;" id="file" name="file" type="file" class="file" data-show-preview="false">

          </div>

      </div>

      

      

     <div class="form-group">

        <label class="col-sm-2 control-label">Speciality</label>

        <div class="col-sm-10">

         <input type="text" name="Speciality" value="<?php echo $AuthorInfo->Speciality; ?>" placeholder="Nutritionist" class="form-control">

        </div>

     </div>

      <div class="form-group">

       <label class="col-sm-2 control-label">About</label>

       <div class="col-sm-10">

        <textarea name="descrp" id="descrp" rows="2" maxlength='460' class="form-control"><?php echo $AuthorInfo->descrp; ?></textarea>

        </div>

     </div>

    

    

    <div class="form-group">

        <label class="col-sm-2 control-label">Facebook</label>

        <div class="col-sm-10">

         <input type="text" name="Facebook" placeholder="https://www.facebook.com/ankurpatel91" value="<?php echo $AuthorInfo->Facebook; ?>" class="form-control">

        </div>

     </div>

                                            

    <div class="form-group">

        <label class="col-sm-2 control-label">Twitter</label>

        <div class="col-sm-10">

        <input type="text" name="Twitter" placeholder="https://twitter.com/ankur9187" value="<?php echo $AuthorInfo->Twitter; ?>" class="form-control">

        </div>

    </div>

                                            

     <div class="form-group">

        <label class="col-sm-2 control-label">Pinterest</label>

        <div class="col-sm-10">

        <input type="text" name="Pinterest" placeholder="https://in.pinterest.com/ankurpatel91" value="<?php echo $AuthorInfo->Pinterest; ?>" class="form-control">

         </div>

     </div>

                                            

    <div class="form-group">

       <label class="col-sm-2 control-label">Instagram</label>

       <div class="col-sm-10">

       <input type="text" name="Instagram"  placeholder="https://www.instagram.com/ankur9187" value="<?php echo $AuthorInfo->Instagram; ?>" class="form-control">

       </div>

    </div>

    

    

    

                                    

    <div class="form-actions">

   		<button type="submit" class="btn btn-primary">Update Columnist</button>

     	<a href="<?php echo base_url()."admin/manage_columnist"; ?>"><button type="button" class="btn">Cancel</button></a>

    </div>

 </form>

       </div>

      </div>

     </div>

    </div>

   </div>

  </div>

 </div>

 

 <script type="text/javascript">

$("#uploadimg" ).click(function() {

     $( "#file" ).click();



    });





</script>

</body>

</html>