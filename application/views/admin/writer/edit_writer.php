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
                    <div class="pull-left">
                            <h1>Edit Publisher</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Publisher Details</h3>
                            </div>
                            <div class="box-content">
                                <form  action="#" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                                    <label for="FirstName" class="col-sm-2 control-label">Publisher First Name</label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" value="<?php echo $WriterInfo->FirstName; ?>" name="FirstName" id="FirstName" placeholder="Publisher First Name" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="LastName" class="col-sm-2 control-label">Publisher Last Name</label>
                                                    <div class="col-sm-10">
                                                            <input required type="text" value="<?php echo $WriterInfo->LastName; ?>" name="LastName" id="LastName" placeholder="Publisher Last Name" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="Email" class="col-sm-2 control-label">Publisher Email</label>
                                                    <div class="col-sm-10">
                                                            <input required type="text" value="<?php echo $WriterInfo->Email; ?>" name="Email" id="Email" placeholder="Publisher Email" readonly class="form-control">
                                                    </div>
                                            </div>
                                        
                                        
                                            
                                        
                                        
                                        
                                            
                                        
                                            
                                        
                                            <div class="form-group">
                                                    <label for="Phone" class="col-sm-2 control-label">Publisher Phone</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" name="Phone" value="<?php echo $WriterInfo->Phone; ?>" id="Phone" placeholder="Publisher Phone Number" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="Password" class="col-sm-2 control-label">Password</label>
                                                    <div class="col-sm-10">
                                                            <input type="password" name="Password" value="<?php echo $WriterInfo->Password; ?>"  id="Password" placeholder="Password" class="form-control">
                                                    </div>
                                            </div>
                                    
                                            <div class="form-group">
                                                <label for="isActive" class="col-sm-2 control-label">Publisher Account status</label>
                                                    <div class="col-sm-10">
                                                            <select required name="isActive" id="isActive" class="form-control">
                                                                <option value="1" <?php if ($WriterInfo->isActive=="1"){echo "selected";} ?>>Active</option>
                                                                <option value="0" <?php if ($WriterInfo->isActive!="1"){echo "selected";} ?>>Inactive</option>
                                                            </select>
                                                    </div>
                                            </div>
                                    
                                            <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Update Publisher</button>
                                                    
                                                    <a href="<?php echo base_url()."admin/dashboard"; ?>"><button type="button" class="btn">Cancel</button></a>
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