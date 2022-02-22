<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- Apple devices fullscreen -->
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<!-- Apple devices fullscreen -->
		<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	  
		<script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
		<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>
		<script src="<?php echo base_url()."assets/"; ?>js/plugins/chosen/chosen.jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
		<!-- jQuery UI -->

		<!-- dataTables -->
		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
		<!-- Color CSS -->
		<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/themes.css">
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.ico" />
		<!-- Apple devices Homescreen icon -->
		<link href="<?php echo base_url()."assets/"; ?>css/editor.css" type="text/css" rel="stylesheet"/>
		<link rel="apple-touch-icon-precomposed" href="<?php echo base_url()."assets/"; ?>img/apple-touch-icon-precomposed.png" />
	</head>
	<body>
		<?php $this->load->view("admin/navigation"); ?>
		<div class="container-fluid" id="content">
			<div id="main" style="margin-left: 0px;">
				<div class="container-fluid">
					<div class="page-header">
						<div class="pull-left">
							<h1>Add Banner</h1>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="box box-bordered box-color">
								<div class="box-title">
									<h3><i class="icon-th-list"></i> Slider Details</h3>
								</div>
								<div class="box-content">
									<?php if (isset($Messageupload)): ?>
										<div class='alert alert-info' style='text-align: center;padding: 5px;'>
											<h4><?php echo $Messageupload ?></h4>
										</div>
									<?php endif ?>
<form method="POST" class="form-horizontal form-bordered formLog" enctype="multipart/form-data" onSubmit="return validateAdd()" name="page">
<div class="form-group">
	<label for="Title" class="col-sm-2 control-label">Banner Title</label>
	<div class="col-sm-10">
	<input type="text"  name="title" id="Title" placeholder="Banner Title" class="form-control">
	</div>
</div>
<div class="form-group">
<label for="Password" class="col-sm-2 control-label">Short Description</label>
	<div class="col-sm-10">
	<textarea name="descr" class="form-control" rows="3"></textarea> 
	</div>
</div>
<div class="form-group">
	<label for="URL" class="col-sm-2 control-label">Button Title</label>
	<div class="col-sm-10">
	<input  type="text"  name="button_title" id="Bttl" placeholder="Button Title" class="form-control">
	</div>
</div>
<div class="form-group">
	<label for="URL" class="col-sm-2 control-label">URL</label>
	<div class="col-sm-10">
	<input  type="text"  name="url" id="Url" placeholder="Link Url" class="form-control">
	</div>
</div>


<div class="form-group">
	<label for="Featured" class="col-sm-2 control-label">Status</label>
	<div class="col-sm-10">
	<select name="status" title="Featured" id="Featured" class="form-control" >
	<option value="0">InActive</option>
	<option value="1">Active</option>
	</select>
	</div>
</div>

<div class="form-group">
	<label for="message-text" class="col-sm-2 control-label">Featured image:</label>
	<div class="col-sm-10">
	<img src="<?php echo base_url();?>assets/img/demo/2.jpg" alt="Blank image" id="uploadimg" class="img-thumbnail">
	<input style="display:none;" id="file" name="file" type="file" class="file" data-show-preview="false">
        <input  type="text"  name="alt_tag" id="imgalt"  placeholder="Image Alt tag" class="form-control">

	<p><strong>Use 1920 X 700 px image</strong></p>
	</div>
</div>

                                        






<div id="formEror"></div>
<?php if (isset($Message)){
	echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
} ?>
<div class="form-actions">
	<button type="submit" class="btn btn-primary">Add Banner</button>
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
 	
	
	<script type="text/javascript">
		$(document).ready(function()
		{
			$("#uploadimg" ).click(function() 
			{
				$( "#file" ).click();
			});
		});
	</script>
</html>