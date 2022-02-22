<!doctype html>
<html>
<head>
	<meta charset="utf8">
     <title><?php echo $MetaTitle;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<!-- Bootstrap -->
   <!-- Bootstrap responsive -->
	
   
<script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>

<script src="<?php echo base_url()."assets/"; ?>js/plugins/bootbox/jquery.bootbox.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datepicker/bootstrap-datepicker.js"></script>
        
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/jquery.dataTables.min.js"></script>
    
    
    
    	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/TableTools.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/ColReorder.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/ColVis.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
    
    	<script src="<?php echo base_url()."assets/"; ?>js/plugins/chosen/chosen.jquery.min.js"></script>
        



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!--<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/35/bootstrap.min.css">-->


	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- dataTables -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/datatable/TableTools.css">
 
 
 	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/chosen/chosen.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/themes.css">
    	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/datepicker/datepicker.css">


	


      
	<!-- Just for demonstration -->
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
    <link href="<?php echo base_url()."assets/"; ?>css/editor.css" type="text/css" rel="stylesheet"/>
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url()."assets/"; ?>img/apple-touch-icon-precomposed.png" />
    	

</head>

<body>
	<?php
            $this->load->view("admin/navigation");
        ?>
    <div class="container-fluid" id="content">
        <div id="main" style="margin-left: 0px;">
            <div class="container-fluid">
            <div class="page-header">
                    <div class="pull-left">
                            <h1>Add Restaurant (Premium)</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Restaurants Details</h3>
                            </div>
                            
                            <div class="box-content">
                            <?php if(isset($Messageupload)): echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$Messageupload."</h4></div>"; endif?>
                            
<form method="POST" class="form-horizontal form-bordered formLog" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="Title" class="col-sm-2 control-label">Restaurants Name</label>
        <div class="col-sm-10">
        <input type="text"  name="restaurantName" id="Title" placeholder="Restaurants Name" class="form-control">
         </div>
    </div>
                                        
    <div class="form-group">
       <label for="Title" class="col-sm-2 control-label">Area</label>
       <div class="col-sm-10">
       <input type="text"  name="Area" id="Title" placeholder="Restaurants Area" class="form-control">
        </div>
    </div>          
                                            
    <div class="form-group">
       <label for="Title" class="col-sm-2 control-label">City</label>
       <div class="col-sm-10">
       <input type="text"  name="City" id="Title" placeholder="Restaurants City" class="form-control">
        </div>
    </div>          

    <div class="form-group">
       <label for="Title" class="col-sm-2 control-label">Country</label>
       <div class="col-sm-10">
       <select name="Country" title="Status" id="Status" class="form-control" >
       	 <option value="India">India</option>
         <option value="USA">USA</option>
         <option value="Australia">Australia</option>
       </select>
        </div>
    </div>          
                                            
 
     <div class="form-group">
       <label for="Title" class="col-sm-2 control-label">Facebook Page</label>
       <div class="col-sm-10">
       <input type="text"  name="FBPage" id="Title" placeholder="Restaurants Facebook Page Url" class="form-control">
        </div>
    </div>          
                                       
                                            
                                            <div class="form-group">
                                                    <label for="Status" class="col-sm-2 control-label">Published</label>
                                                    <div class="col-sm-10">
                                                            <select name="isActive" title="Status" id="Status" class="form-control" >
                                                            
                                                            <option value="1">Yes</option>
                                                             <option value="0">No</option>
                                                             
                                                            </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="col-sm-2 control-label">Restaurant Logo:</label>
                                                <div class="col-sm-10">
                                                <img src="<?php echo base_url();?>assets/img/demo/rest-logo.png" onclick='$("#filel").click()' class="img-thumbnail">
                                                <input style="display:none;" id="filel" name="logo" type="file" class="file" data-show-preview="false">
                                                </div>
                                              </div>
                                            
                                            
                                            
                                        
                                            <div class="form-group">
                                                <label for="message-text" class="col-sm-2 control-label">Restaurant image:</label>
                                                <div class="col-sm-10">
                                                <img src="<?php echo base_url();?>assets/img/demo/2.jpg" onclick='$("#file").click()' class="img-thumbnail">
                                                <input style="display:none;" id="file" name="filea" type="file" class="file" data-show-preview="false">
                                                </div>
                                              </div>
               
               <div class="form-group">
                    <label class="col-sm-2 control-label">Slider image:</label>
                    <div class="col-sm-2">
                    <img src="<?php echo base_url();?>assets/img/demo/2.jpg" onclick='$("#slide1").click()' class="img-thumbnail">
                    <input style="display:none;" id="slide1" name="slide1" type="file" class="file" data-show-preview="false">
                     </div>
                     
                     
                     <div class="col-sm-2">
                    <img src="<?php echo base_url();?>assets/img/demo/2.jpg" onclick='$("#slide2").click()' class="img-thumbnail">
                    <input style="display:none;" id="slide2" name="slide2" type="file" class="file" data-show-preview="false">
                     </div>
                     
                     
                     <div class="col-sm-2">
                    <img src="<?php echo base_url();?>assets/img/demo/2.jpg" onclick='$("#slide3").click()' class="img-thumbnail">
                    <input style="display:none;" id="slide3" name="slide3" type="file" class="file" data-show-preview="false">
                     </div>
                     <div class="col-sm-2">
                    <img src="<?php echo base_url();?>assets/img/demo/2.jpg" onclick='$("#slide4").click()' class="img-thumbnail">
                    <input style="display:none;" id="slide4" name="slide4" type="file" class="file" data-show-preview="false">
                     </div>
                     
                     
              </div>
              <div class="form-group">
                   <label for="Description" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                         <strong>Use 950 X 650 px image for All Slider and Main Image</strong>
                    </div>
			</div>                   
                                             
                                              
                                              
                                            
                                            
                                            <div class="form-group">
                                                    <label for="Description" class="col-sm-2 control-label">Short Description</label>
                                            
                                                    <div class="col-sm-10">
                                                    <textarea name="ShortDesc" class="form-control" rows="4"  ></textarea> 
                                                    </div>
											</div>
                                            
                                            
                                            <div class="form-group">
                                                    <label for="Description" class="col-sm-2 control-label">Description</label>
                                            
                                                    <div class="col-sm-10">
                                                    <textarea id="editor1" name="RestDetail"  ></textarea> 
                                                    </div>
											</div>
                                          
                                             <div class="form-group">
                                                    <label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
                                                    <div class="col-sm-10">
                                                            <input  type="text"  name="MetaTitle" id="MetaTitle"  placeholder="MetaTitle" class="form-control">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
                                                    <div class="col-sm-10">
                                                            <input  type="text"  name="MetaKeyword" id="MetaKeyword" placeholder="MetaKeyword" class="form-control">
                                                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                    <label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
                                                    <div class="col-sm-10">
                                                    <textarea name="MetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"></textarea>
                                                           
                                                    </div>
                                            </div>
                                            
                                            
                                            
                                                                                                        
                                    <div id="formEror"></div>
                                <?php    if (isset($Message)){
                    echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
                } ?>
                                            <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Add Restaurant</button>
                                                    
                                                    <a href="<?php echo base_url()."admin/manage_restaurant"; ?>"><button type="button" class="btn">Cancel</button></a>
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
 <script type="text/javascript" src="<?php echo base_url()."assets/editor/"; ?>ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/editor/"; ?>ckfinder/ckfinder.js"></script>


<script type="text/javascript">

var editor = CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl :  '<?php echo base_url()."assets/editor/"; ?>ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor, '../' );
</script>



</html>