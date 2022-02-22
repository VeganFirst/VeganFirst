<!doctype html>
<html>
<head>
	<meta charset="utf8">
    <title><?php echo $PageTitle;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>

<script src="<?php echo base_url()."assets/"; ?>js/plugins/bootbox/jquery.bootbox.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- dataTables -->
 
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/themes.css">
    	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/datepicker/datepicker.css">
        
        
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	
	<link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
    <link href="<?php echo base_url()."assets/"; ?>css/editor.css" type="text/css" rel="stylesheet"/>
	
    	

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
                            <h1>Online Course</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Add Course</h3>
                            </div>
                            <div class="box-content">
                <?php  if(isset($Message)){
                    echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
                } ?>
                <form method="POST" class="form-horizontal form-bordered" name="page" enctype="multipart/form-data" >
                <div class="form-group">
                  <label for="Title" class="col-sm-2 control-label">Course Title</label>
                  <div class="col-sm-10">
                  <input type="text"  name="course_name" id="Title" placeholder="Course Title" class="form-control">
                   </div>
                </div>
                <div class="form-group">
					<label for="Title" class="col-sm-2 control-label">Status</label>
					
                    <div class="col-sm-3">
					<select name="status" id="Title" class="form-control">
						<option value="">Select Status</option>
                        <option value="0">InActive</option>
                        <option value="1">Active</option>
													
					</select>
					</div>
    			</div>

                <div class="form-group">
					<label class="col-sm-2 control-label">Course image:</label>
					<div class="col-sm-10">
					<input  id="file" name="file" type="file">
					<p>400 X 400 Image</p>
                    </div>
                    
				</div>                        
                <div class="form-group">
                   <label for="Description" class="col-sm-2 control-label">Email Template</label>
                    <div class="col-sm-10">
                    	<textarea id="editor1" name="emil_info" ></textarea> 
                    </div>
				</div>
                
                 <div id="formErornl"></div>
                 <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a href="<?php echo base_url()."admin/events"; ?>"><button type="button" class="btn">Cancel</button></a>
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
	toolbar: [
		{ name: 'document', items: [ 'Source'] },
		[ 'Cut', 'Copy', 'Paste',],
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },

		{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
	]    
});


</script>
</html>