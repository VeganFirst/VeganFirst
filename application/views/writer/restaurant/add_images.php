<html>
	<head>
		<meta charset="utf8">
		 <title>Add Restaurant Images</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- Apple devices fullscreen -->
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<!-- Apple devices fullscreen -->
		<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		<script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
		<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/35/bootstrap.min.css">-->
		<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
		<!-- jQuery UI -->
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
		<?php $this->load->view("writer/navigation"); ?>
		<div class="container-fluid" id="content">
			<div id="main" style="margin-left: 0px;">
				<div class="container-fluid">
					<div class="page-header">
						<div class="pull-left">
							<h1>Add Restaurant Images</h1>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="box box-bordered box-color">
								<div class="box-title">
									<h3><i class="icon-th-list"></i>Select Images</h3>
								</div>
								<div class="box-content">
									<?php if(isset($Messageupload)): echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$Messageupload."</h4></div>"; endif?>
									<form method="POST" class="form-horizontal form-bordered formLog" enctype="multipart/form-data">
										<div class="form-group">
											<label for="Title" class="col-sm-2 control-label">Rstaurants Name</label>
											<div class="col-sm-10">
												<input class="form-control" type="file" name="images[]" multiple>
											</div>
										</div>
										<div class="form-group">
											<!-- <label for="Title" class="col-sm-2 control-label">Rstaurants Name</label> -->
											<!-- <div class="col-sm-10"> -->
												<input class="form-control" type="text" name="test" hidden>
											<!-- </div> -->
										</div>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Submit</button>
											<a href="<?php echo base_url()."writer/manage_restaurant"; ?>"><button type="button" class="btn">Cancel</button></a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="box box-bordered box-color">
								<div class="box-title">
									<h3><i class="icon-th-list"></i>Old Images</h3>
								</div>
								<div class="box-content">
								<div class="row-fluid">
								<?php if (isset($Images)): ?>
									<?php foreach ($Images as $Image): ?>
<div class=" col-sm-3">
<a href="<?php echo base_url().'writer/delete_restaurant_image/'.$Image->id.'/'.$Image->restaurant_id?>" onclick='return confirmDelete();' style="position: absolute;top: 7px;left: 22px;"><i class="icon-remove-sign icon-2x" style="color:#55ba47;"></i></a>
										<img class="img-thumbnail" src="<?php echo base_url().'media/upload/restaurant/photo/'.$Image->file_name; ?>">
</div>
									<?php endforeach ?>
								<?php endif ?>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>