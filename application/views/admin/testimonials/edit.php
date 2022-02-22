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
                            <h1>Testimonials</h1>
                    </div>

            </div>

            <div class="row-fluid">
               <div class="span12">
                 <div class="box box-bordered box-color">
                    <div class="box-title">
                       <h3><i class="icon-th-list"></i> Edit Testimonial</h3>
                    </div>
                   <div class="box-content">
              <?php if (isset($Message)){
                    echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
                } ?>
                <form method="POST" class="form-horizontal form-bordered" name="page" enctype="multipart/form-data" >
                <div class="form-group">
                  <label for="Title" class="col-sm-2 control-label">Name of User</label>
                  <div class="col-sm-10">
                  <input type="text"  name="name_user" id="Title" placeholder="Full Name" class="form-control" value="<?php echo $Testi->name_user?>">
                   </div>
                </div>
                <div class="form-group">
					<label for="Title" class="col-sm-2 control-label">Info</label>
					<div class="col-sm-4">
					<select name="status" id="Title" class="form-control">
						<option value="">Select Status</option>
                        <option value="0" <?php echo ($Testi->status==0)? 'selected' : ''?>>InActive</option>
                        <option value="1" <?php echo ($Testi->status==1)? 'selected' : ''?>>Active</option>
					</select>
					</div>
				</div>
                <div class="form-group">
					<label class="col-sm-2 control-label">User image:</label>
					<div class="col-sm-10">
                    <?php if($Testi->image_user):?>
                    <img src="<?php echo base_url()."media/upload/testi/".$Testi->image_user?>" class="img-responsive" style="max-width:400px"  />
                    <br/>
                    <?php endif;?>
					<input  id="file" name="plan_image" type="file">
					<p>400 X 400 Image</p>
                    </div>
                    
				</div>                        
                <div class="form-group">
                   <label for="Description" class="col-sm-2 control-label">Testimonials</label>
                    <div class="col-sm-10">
                    	<textarea id="editor1" name="content" ><?php echo $Testi->content?></textarea> 
                    </div>
				</div>
                  <div id="formErornl"></div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Update</button>
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