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
			$this->load->view("writer/navigation");
		?>
		<div class="container-fluid" id="content">
			<div id="main" style="margin-left: 0px;">
				<div class="container-fluid">		
					<div class="page-header">
						<div class="pull-left">
						   <h1>Manage Home Page</h1>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="box box-bordered box-color">
								<div class="box-title">
									<h3><i class="icon-th-list"></i> Home Content</h3>
								</div>
								<div class="box-content">
									<?php if(isset($Messageupload)): echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$Messageupload."</h4></div>"; endif?>
									<?php 
										$Articlsl=0;
										$Home1=0; $Home2=0; $Home3=0; $Home4=0; $Home5=0; $Home6=0; $Home7=0; $Home8=0;$pic=0;$pic1=0; $pic2=0;$pic3=0; $pic4=0;$pic5=0; $pic6=0;$pic7=0; $pic8=0;
										foreach($Config as $key => $val)
										{
											if($val->path == 'home/Article')
											{
												$Articlsl= $val->value;
											}
											if($val->path == 'pic')
											{
												$pic= $val->value;
											}
											
											
											if($val->path == 'home/1')
											{
												$Home1= $val->value;
											}
											if($val->path == 'home/2')
											{
												$Home2= $val->value;
											}
											if($val->path == 'home/3')
											{
												$Home3= $val->value;
											}
											if($val->path == 'home/4')
											{
												$Home4= $val->value;
											}
											if($val->path == 'home/5')
											{
												$Home5= $val->value;
											}
											if($val->path == 'home/6')
											{
												$Home6= $val->value;
											}
											if($val->path == 'home/7')
											{
												$Home7= $val->value;
											}
											if($val->path == 'home/8')
											{
												$Home8= $val->value;
											}
											
											if($val->path == 'pic1')
											 {
												$pic1= $val->value;
											 }
											 if($val->path == 'pic2')
											 {
												$pic2= $val->value;
											 }
											if($val->path == 'pic3')
											 {
												$pic3= $val->value;
											 }
											 if($val->path == 'pic4')
											 {
												$pic4= $val->value;
											 }

											if($val->path == 'pic5')
											 {
												$pic5= $val->value;
											 }
											 if($val->path == 'pic6')
											 {
												$pic6= $val->value;
											 }

											if($val->path == 'pic7')
											 {
												$pic7= $val->value;
											 }
											 if($val->path == 'pic8')
											 {
												$pic8= $val->value;
											 }

										}
									?>
									<form method="POST" class="form-horizontal form-bordered formLog" enctype="multipart/form-data" >
                                    
      <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home Article</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="home/Article" value="<?php echo $Articlsl; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="pic" value="article" <?php if($pic=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="pic" value="recipe" <?php if($pic=='recipe'){ echo 'checked';}?> > Recipe
             </div>
     </div>
     
     
     
	 <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 1</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="home/1" value="<?php echo $Home1; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="pic1" value="article" <?php if($pic1=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="pic1" value="recipe" <?php if($pic1=='recipe'){ echo 'checked';}?> > Recipe
             </div>
     </div>
     
     <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 2</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="home/2" value="<?php echo $Home2; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="pic2" value="article" <?php if($pic2=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="pic2" value="recipe" <?php if($pic2=='recipe'){ echo 'checked';}?> > Recipe
             </div>
     </div>
     
     <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 3</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="home/3" value="<?php echo $Home3; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="pic3" value="article" <?php if($pic3=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="pic3" value="recipe" <?php if($pic3=='recipe'){ echo 'checked';}?> > Recipe
             </div>
     </div>
     
     
     <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 4</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="home/4" value="<?php echo $Home4; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="pic4" value="article" <?php if($pic4=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="pic4" value="recipe" <?php if($pic4=='recipe'){ echo 'checked';}?> > Recipe
             </div>
     </div>
     
     <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 5</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="home/5" value="<?php echo $Home5; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="pic5" value="article" <?php if($pic5=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="pic5" value="recipe" <?php if($pic5=='recipe'){ echo 'checked';}?> > Recipe
             </div>
     </div>
     
     <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 6</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="home/6" value="<?php echo $Home6; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="pic6" value="article" <?php if($pic6=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="pic6" value="recipe" <?php if($pic6=='recipe'){ echo 'checked';}?> > Recipe
             </div>
     </div>
     
     <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 7</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="home/7" value="<?php echo $Home7; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="pic7" value="article" <?php if($pic7=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="pic7" value="recipe" <?php if($pic7=='recipe'){ echo 'checked';}?> > Recipe
             </div>
     </div>
     <div class="form-group">
            <label for="Article" class="col-sm-2 control-label">Home 8</label>
            <div class="col-sm-3">
            <input type="text" class="form-control" name="home/8" value="<?php echo $Home8; ?>">
            </div>
             <div class="col-sm-1">
             <input type="radio" name="pic8" value="article" <?php if($pic8=='article'){ echo 'checked';}?> > Article
             </div>
             <div class="col-sm-1">
             <input type="radio" name="pic8" value="recipe" <?php if($pic8=='recipe'){ echo 'checked';}?> > Recipe
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
											<a href="<?php echo base_url()."writer/manage_recipes"; ?>">
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