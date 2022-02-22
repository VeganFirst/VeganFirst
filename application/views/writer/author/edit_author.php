<?php $this->load->view("writer/templates/header"); ?>
<body>
<?php $this->load->view("writer/navigation"); ?>

<div class="container-fluid" id="content">
  <div id="main" style="margin-left: 0px;">
  <div class="container-fluid">
  <div class="page-header">
       <div class="pull-left">
            <h1>Edit Author</h1>
       </div>
  </div>
  <div class="row-fluid">
       <div class="span12">
         <div class="box box-bordered box-color">
         <div class="box-title">
         <h3><i class="icon-th-list"></i> Author Details</h3>
         </div>
       <div class="box-content">
      <form  action="#" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    
          <div class="form-group">
              <label class="col-sm-2 control-label">Author First Name</label>
              <div class="col-sm-10">
                  <input required type="text" value="<?php echo $AuthorInfo->FirstName; ?>" name="FirstName" id="FirstName" placeholder="Author First Name" class="form-control">
              </div>
         </div>
                                        
         <div class="form-group">
              <label class="col-sm-2 control-label">Author Last Name</label>
              <div class="col-sm-10">
               <input required type="text" value="<?php echo $AuthorInfo->LastName; ?>" name="LastName" id="LastName" placeholder="Author Last Name" class="form-control"> 
                </div>
         </div>
                                        
        <div class="form-group">
            <label class="col-sm-2 control-label">Author Email</label>
            <div class="col-sm-10">
              <input required type="text" value="<?php echo $AuthorInfo->Email; ?>" name="Email" id="Email" placeholder="Author Email" class="form-control">
               </div>
        </div>
                                        
        <div class="form-group">
            <label class="col-sm-2 control-label">Author Phone</label>
                   <div class="col-sm-10">
                    <input type="text" name="Phone" value="<?php echo $AuthorInfo->Phone; ?>" id="Phone" placeholder="Author Phone Number" class="form-control">
                    </div>
       </div>
                                        
                                            
       <div class="form-group">
            <label class="col-sm-2 control-label">Author Account status </label>
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
            <?php if ($AuthorInfo->Picture){ ?>                                        
            <img src="<?php echo base_url().'media/upload/author/'.$AuthorInfo->Picture;?>" alt="Blank image" id="uploadimg" onclick='$("#file").click()' class="img-responsive img-circle center-block">
            
            <?php } else
			{ ?>
            <img src="<?php echo base_url();?>media/upload/author/writer-pic.jpg" alt="Blank image" id="uploadimg" onclick='$("#file").click()' class="img-responsive img-circle center-block">
            <? } ?>
            <p>Upload Square Image like 400 X 400</p>
            <input style="display:none;" id="file" name="file" type="file">
            </div>
       </div>
                                            
 	   <div class="form-group">
       		<label class="col-sm-2 control-label">About Author</label>
        	<div class="col-sm-10">
             <textarea name="About" id="About" rows="3" maxlength='260' class="form-control"><?php echo $AuthorInfo->About; ?></textarea>
              </div>
     </div>
     
     
     
     <div class="form-group">
          <label class="col-sm-2 control-label">Facebook</label>
          <div class="col-sm-10">
              <input type="text" name="Facebook"  id="Facebook" placeholder="https://www.facebook.com/ankurpatel91" value="<?php echo $AuthorInfo->Facebook; ?>" class="form-control">
          </div>
     </div>
                                            
     <div class="form-group">
         <label class="col-sm-2 control-label">Twitter</label>
         <div class="col-sm-10">
              <input type="text" name="Twitter"  id="Twitter" placeholder="https://twitter.com/ankur9187" value="<?php echo $AuthorInfo->Twitter; ?>" class="form-control">
         </div>
    </div>
                                            
    <div class="form-group">
    	<label class="col-sm-2 control-label">Pinterest</label>
             <div class="col-sm-10">
                  <input type="text" name="Pinterest"  id="Pinterest" placeholder="https://in.pinterest.com/ankurpatel91" value="<?php echo $AuthorInfo->Pinterest; ?>" class="form-control">
              </div>
    </div>
                                            
    <div class="form-group">
         <label class="col-sm-2 control-label">Instagram</label>
         <div class="col-sm-10">
              <input type="text" name="Instagram"  id="Instagram" placeholder="https://www.instagram.com/ankur9187" value="<?php echo $AuthorInfo->Instagram; ?>" class="form-control">
         </div>
    </div>
                                    
     <div class="form-actions">
     <button type="submit" class="btn btn-primary">Update Author</button>
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

</html>