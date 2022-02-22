<!doctype html>
<html>
<head>
	<meta charset="utf8">
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
                            <h1>Add Product</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Product Details</h3>
                            </div>
                            
                            <div class="box-content">
                            
                               <?php if(isset($Message)){
           echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
    } ?>
                            
                            
                            
                            <?php if(isset($Messageupload)): echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$Messageupload."</h4></div>"; endif?>
                            
   <form method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data" onSubmit="return validateAdd()" name="page" >
                                    
                                    <div class="form-group">
                                                    <label for="Title" class="col-sm-2 control-label">Product Title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  name="PageTitle" id="Title" placeholder="Product Name" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="URL" class="col-sm-2 control-label">URL</label>
                                                    <div class="col-sm-10">
                                                            <input  type="text"  name="Url" id="Url" placeholder="Product Url" class="form-control">
                                                    </div>
                                            </div>
                                        
    <div class="form-group">
         <label class="col-sm-2 control-label">Category</label>
         <div class="col-sm-10">
         <select name="Category" class="form-control" >
         <option value="0">Select Category..</option>
         <?php
         if(isset($Authors))
			{
			foreach($Authors as $Author)
			{ ?>
			<option value="<?php echo $Author->id; ?> "><?php echo $Author->PageTitle; ?></option>
		<?	}
		}
		?>
         </select>
    </div>
   </div>
   
   <div class="form-group">
                                                    <label for="Status" class="col-sm-2 control-label">Published</label>
                                                    <div class="col-sm-10">
                                                            <select name="isPublished" title="Status" id="Status" class="form-control" >
                                                            
                                                            <option value="1">Yes</option>
                                                             <option value="0">No</option>
                                                             
                                                            </select>
                                                    </div>
                                            </div>
   
                                        
    <div class="form-group">
         <label for="Featured" class="col-sm-2 control-label">Featured</label>
         <div class="col-sm-10">
         <select name="Featured" title="Featured" id="Featured" class="form-control" >
             <option value="0">No</option>
             <option value="1">Yes</option>
         </select>
         </div>
    </div>
    <div class="form-group">
     	<label class="col-sm-2 control-label">Product image:</label>
    	<div class="col-sm-10">
        <img src="<?php echo base_url();?>assets/img/demo/2.jpg" alt="Blank image" id="uploadimg" class="img-thumbnail">
        <input style="display:none;" id="file" name="file" type="file" class="file" data-show-preview="false">
        <p><strong>Use 750 X 500 px image</strong></p>
        </div>
    </div>
                                              
    <div class="form-group">
        <label class="col-sm-2 control-label">Short Description</label>
        <div class="col-sm-10">
        <textarea name="ShortDesc" rows="2" maxlength='250' class="form-control"></textarea>
        </div>
    </div>
     <div class="form-group">
          <label class="col-sm-2 control-label">Description</label>
          <div class="col-sm-10">
          <textarea id="editor1" name="Article_post" ></textarea> 
          </div>
	</div>
                                            
    <div class="form-group">
         <label  class="col-sm-2 control-label">Tags</label>
         <div class="col-sm-10">
         <input  type="text"  name="Tags" placeholder="Tags" class="form-control">
         </div>
    </div>
                                            
    <div class="form-group">
         <label class="col-sm-2 control-label">Address</label>
         <div class="col-sm-10">
         <textarea name="Address" id="Address" rows="2"  class="form-control"></textarea>
         </div>
    </div>
                                            
    <div class="form-group">
         <label class="col-sm-2 control-label">MetaTitle</label>
         <div class="col-sm-10">
         <input  type="text"  name="MetaTitle" placeholder="MetaTitle" class="form-control">
         </div>
   </div>
   <div class="form-group">
        <label class="col-sm-2 control-label">MetaKeyword</label>
        <div class="col-sm-10">
        <input  type="text"  name="MetaKeyword" placeholder="MetaKeyword" class="form-control">
        </div>
   </div>
                                            
   <div class="form-group">
         <label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
         <div class="col-sm-10">
         <textarea name="MetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"></textarea>
         </div>
   </div>
   <div id="formEror"></div>

   <div class="form-actions">
       <button type="submit" class="btn btn-primary">Add Product</button>
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

<script type="text/javascript">
$(document).ready(function() {

$("#Title").change(function() {
        var string = $("#Title").val();
clean = string.replace(/(^\-+|[^a-zA-Z0-9\/_| -]+|\-+$)/g, '')
            .toLowerCase()
            .replace(/[\/_| -]+/g, '-')
;
$('#Url').val(clean);
console.log(clean);

    })

$("#uploadimg" ).click(function() {
     $( "#file" ).click();

    });
});


function validateAdd() {
	var z = document.forms["page"]["Category"].value;
	var y = document.forms["page"]["PageTitle"].value;
	var im = document.forms["page"]["file"].value;
	
	var sd = document.forms["page"]["ShortDesc"].value;
	var de = document.forms["page"]["Article_post"].value;
	var msg = [];
	
	
	if (y == null || y == "") {
        msg.push("<div class='alert alert-info'>Enter Product Name</div>");
    }
	if (z == 0) {
        msg.push("<div class='alert alert-info'>Select Category</div>");
    }
	if (im == null || im == "") {
        msg.push("<div class='alert alert-info'>Select Product Image</div>");
    }
	
	if (sd == null || sd == "") {
        msg.push("<div class='alert alert-info'>Enter Short Description</div>");
    }
	
	if (de == null || de == "") {
        msg.push("<div class='alert alert-info'>Enter Product Description</div>");
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