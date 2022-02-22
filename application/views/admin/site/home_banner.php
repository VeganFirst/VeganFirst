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
		<script src="<?php echo base_url()."assets/"; ?>js/plugins/bootbox/jquery.bootbox.js"></script>
		<script src="<?php echo base_url()."assets/"; ?>js/plugins/datepicker/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/TableTools.min.js"></script>
		<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/ColReorder.min.js"></script>
		<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/ColVis.min.js"></script>
		<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
		<script src="<?php echo base_url()."assets/"; ?>js/plugins/chosen/chosen.jquery.min.js"></script>
		<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/35/bootstrap.min.css">
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
						   <h1>Manage Home Page Benners</h1>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="box box-bordered box-color">
								<div class="box-title">
									<h3><i class="icon-th-list"></i> Home Banners</h3>
								</div>
								<div class="box-content">
									<?php if(isset($Messageupload)): echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$Messageupload."</h4></div>"; endif?>
									<?php 
										
										$Home1=$Home2=$Home3=$Home4=$Home5=$Home6=$Home7=$Home8=$Home9=0; 
										
										$ban1=$ban2=$ban3=$ban4=$ban5=$ban6=$ban7=$ban8=$ban9=0;
										foreach($Config as $key => $val)
										{
											
											
											if($val->path == 'banner/1')
											{
												$Home1= $val->value;
											}
											if($val->path == 'banner/2')
											{
												$Home2= $val->value;
											}
											if($val->path == 'banner/3')
											{
												$Home3= $val->value;
											}
											if($val->path == 'banner/4')
											{
												$Home4= $val->value;
											}
											if($val->path == 'banner/5')
											{
												$Home5= $val->value;
											}
											if($val->path == 'banner/6')
											{
												$Home6= $val->value;
											}
											if($val->path == 'banner/7')
											{
												$Home7= $val->value;
											}
											if($val->path == 'banner/8')
											{
												$Home8= $val->value;
											}
											if($val->path == 'banner/9')
											{
												$Home9= $val->value;
											}













											if($val->path == 'ban1')
											 {
												$ban1= $val->value;
											 }
											 if($val->path == 'ban2')
											 {
												$ban2= $val->value;
											 }
											if($val->path == 'ban3')
											 {
												$ban3= $val->value;
											 }
											 if($val->path == 'ban4')
											 {
												$ban4= $val->value;
											 }
											 if($val->path == 'ban5')
											 {
												$ban5= $val->value;
											 }
											 if($val->path == 'ban6')
											 {
												$ban6= $val->value;
											 }
											 if($val->path == 'ban7')
											 {
												$ban7= $val->value;
											 }
											 if($val->path == 'ban8')
											 {
												$ban8= $val->value;
											 }
											 if($val->path == 'ban9')
											 {
												$ban9= $val->value;
											 }

											

										}
									?>
									<form method="POST" class="form-horizontal form-bordered formLog" enctype="multipart/form-data" >
                                    
      
     
     
	 <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 1</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="banner/1" value="<?php echo $Home1; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="ban1" value="article" <?php if($ban1=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="ban1" value="recipe" <?php if($ban1=='recipe'){ echo 'checked';}?> > Recipe
             </div>
     </div>
     
     <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 2</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="banner/2" value="<?php echo $Home2; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="ban2" value="article" <?php if($ban2=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="ban2" value="recipe" <?php if($ban2=='recipe'){ echo 'checked';}?> > Recipe
             </div>
     </div>
     
     <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 3</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="banner/3" value="<?php echo $Home3; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="ban3" value="article" <?php if($ban3=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="ban3" value="recipe" <?php if($ban3=='recipe'){ echo 'checked';}?> > Recipe
             </div>
     </div>
     
     
     <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 4</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="banner/4" value="<?php echo $Home4; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="ban4" value="article" <?php if($ban4=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="ban4" value="recipe" <?php if($ban4=='recipe'){ echo 'checked';}?> > Recipe
             </div>
	 </div>
	 
	 <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 5</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="banner/5" value="<?php echo $Home5; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="ban5" value="article" <?php if($ban5=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="ban5" value="recipe" <?php if($ban5=='recipe'){ echo 'checked';}?> > Recipe
             </div>
	 </div>
	 <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 6</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="banner/6" value="<?php echo $Home6; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="ban6" value="article" <?php if($ban6=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="ban6" value="recipe" <?php if($ban6=='recipe'){ echo 'checked';}?> > Recipe
             </div>
	 </div>
	 <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 7</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="banner/7" value="<?php echo $Home7; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="ban7" value="article" <?php if($ban7=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="ban7" value="recipe" <?php if($ban7=='recipe'){ echo 'checked';}?> > Recipe
             </div>
	 </div>
	 <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 8</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="banner/8" value="<?php echo $Home8; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="ban8" value="article" <?php if($ban8=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="ban8" value="recipe" <?php if($ban8=='recipe'){ echo 'checked';}?> > Recipe
             </div>
	 </div>
	 <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 9</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="banner/9" value="<?php echo $Home9; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="ban9" value="article" <?php if($ban9=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="ban9" value="recipe" <?php if($ban9=='recipe'){ echo 'checked';}?> > Recipe
             </div>
     </div>
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
                                    
										<div id="formEror"></div>
										<?php
											if (isset($Message))
											{
												echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
											}
										?>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Update</button>
											<a href="<?php echo base_url()."admin/manage_recipes"; ?>">
												<button type="button" class="btn">Cancel</button>
											</a>
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
		var editor = CKEDITOR.replace( 'editor1', 
		{
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