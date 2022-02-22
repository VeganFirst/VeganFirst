<html>
	<head>
		<meta charset="utf8">
		<title><?php echo $MetaTitle;?></title>
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
							<h1>Edit Restaurant</h1>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="box box-bordered box-color">
								<div class="box-title">
									<h3><i class="icon-th-list"></i> Restaurant Details</h3>
								</div>
								<div class="box-content">
									<?php if(isset($Messageupload)): echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$Messageupload."</h4></div>"; endif?>
									<form method="POST" class="form-horizontal form-bordered formLog" enctype="multipart/form-data" >
										<div class="form-group">
											<label for="Title" class="col-sm-2 control-label">Rstaurants Name</label>
											<div class="col-sm-10">
												<input type="text"  name="restaurantName" id="Title" value="<?php echo $Recipe->restaurantName;?>" placeholder="Rstaurants Name" class="form-control">
											</div>
										</div>
										<?php if($Recipe->isPremium==1):?>                                    
										<div class="form-group">
											<label for="Title" class="col-sm-2 control-label">Area</label>
											<div class="col-sm-10">
												<input type="text"  name="Area" id="Title" placeholder="Restaurants Area" class="form-control" value="<?php echo $Recipe->Area ?>">
											</div>
										</div>
										<div class="form-group">
											<label for="Title" class="col-sm-2 control-label">Info</label>
											<div class="col-sm-2">
												<select name="City" id="Title" class="form-control">
													<option value="">Select City</option>
													<?php foreach ($Cities as $City): ?>
														<option value="<?php echo $City->url; ?>" <?php if ($Recipe->City==$City->url){ echo 'selected'; } ?>><?php echo $City->name; ?></option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="col-sm-2">
												<select name="Country" title="Status" id="Status" class="form-control" >
													<option value="India" <?php if ($Recipe->Country=="India"){ echo 'selected'; } ?> >India</option>
													<option value="USA" <?php if ($Recipe->Country=="USA"){ echo 'selected'; } ?>>USA</option>
													<option value="Australia" <?php if ($Recipe->Country=="Australia"){ echo 'selected'; } ?>>Australia</option>
											   	</select>
											</div>
											<div class="col-sm-2">
												<input type="text"  name="Phone" id="Phone" placeholder="Phone No" value="<?php echo $Recipe->Phone ?>" class="form-control">
											</div>
											<div class="col-sm-2">
												<input type="text"  name="Time" id="Time" placeholder="Timing" value="<?php echo $Recipe->Time ?>" class="form-control">
											</div>
											<div class="col-sm-2">
												<input type="text"  name="Delivery" id="Delivery" placeholder="Delivery Option" value="<?php echo $Recipe->Delivery ?>" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label for="Title" class="col-sm-2 control-label">Category</label>
											<div class="col-sm-2">
												<select name="category" class="form-control">
												<option value="Restaurant" <?php if($Recipe->category=="Restaurant"){echo 'selected'; } ?>>Restaurant</option>
												<option value="Catering" <?php if($Recipe->category=="Catering"){echo 'selected'; } ?>>Catering</option>
												</select>
											</div>
											<div class="col-sm-2">
												<label for="Title" class="control-label" style="width: 90px;">Is Vegan <input type="radio" name="isVegan" value="1" <?php if($Recipe->isVegan=="1"){echo 'checked'; } ?>></label > 
												<label for="Title" class="control-label" style="width: 90px;">Not Vegan <input type="radio" name="isVegan" value="0" <?php if($Recipe->isVegan=="0"){echo 'checked'; } ?>></label >
											</div>
										</div>
										<?php endif;?>
										<div class="form-group">
											<label for="Title" class="col-sm-2 control-label">Discount Code</label>
											<div class="col-sm-10">
												<input type="text"  name="discount_code" id="discount_code" placeholder="Restaurants Discount Code" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label for="Status" class="col-sm-2 control-label">Published</label>
											<div class="col-sm-10">
												<select name="isActive" title="Status" id="Status" class="form-control" >
													<option value="1" <?php if($Recipe->isActive==1) echo "selected"; ?>>Yes</option>
													<option value="0" <?php if($Recipe->isActive==0) echo "selected"; ?>>No</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="Featured" class="col-sm-2 control-label">Premium</label>
											<div class="col-sm-10">
												<select name="isPremium" title="Premium" id="Premium" class="form-control" >
													<option value="0" <?php if($Recipe->isPremium==0) echo "selected"; ?>>No</option>
													<option value="1" <?php if($Recipe->isPremium==1) echo "selected"; ?>>Yes</option>
												</select>
											</div>
										</div>
										<?php if($Recipe->isPremium==1):?>  
											<div class="form-group">
												<label class="col-sm-2 control-label">Restaurant Logo:</label>
												<div class="col-sm-2">
													<?php if($Recipe->Logo):?>
														<img src="<?php echo base_url();?>media/upload/restaurant/<?php echo $Recipe->Logo; ?>" onclick='$("#filel").click()' class="img-thumbnail">
													<?php else:?>
														<img src="<?php echo base_url();?>assets/img/demo/rest-logo.png" onclick='$("#filel").click()' class="img-thumbnail">
													<?php endif;?>
													<input style="display:none;" id="filel" name="logo" type="file" class="file" data-show-preview="false">
                                                    400px X 400px
												</div>
                                                
                                                
                                                
                                                <div class="col-sm-3">
                                                <?php if($Recipe->cover_img):?>
                                                <img src="<?php echo base_url();?>media/upload/restaurant/<?php echo $Recipe->cover_img; ?>" onclick='$("#file2").click()' class="img-thumbnail">
                                                <?php else:?>
												<img src="<?php echo base_url();?>assets/img/demo/2.jpg" onclick='$("#file2").click()' class="img-thumbnail">
                                                <?php endif;?>
												<input style="display:none;" id="file2" name="cover_img_n" type="file" class="file" data-show-preview="false"><br>
                                                950px X 650px
											</div>
                                            
                                            
                                            
                                            <?php /*?><div class="col-sm-3">
                                                <?php if($Recipe->cover_img_l):?>
                                                <img src="<?php echo base_url();?>media/upload/restaurant/<?php echo $Recipe->cover_img_l; ?>" onclick='$("#file3").click()' class="img-thumbnail">
                                                <?php else:?>
												<img src="<?php echo base_url();?>assets/img/demo/2.jpg" onclick='$("#file3").click()' class="img-thumbnail">
                                                <?php endif;?>
												<input style="display:none;" id="file3" name="cover_img_lm" type="file" class="file" data-show-preview="false"><br>
                                                1350px X 540px
											</div><?php */?>
                                                
                                                
                                                
											</div>
										<?php endif; ?>
										<div class="form-group">
											<label for="Description" class="col-sm-2 control-label">Short Description</label>
											<div class="col-sm-10">
												<textarea name="ShortDesc" class="form-control" rows="4"  ><?php echo $Recipe->ShortDesc;?></textarea>
										  	</div>
										</div>
										<?php if($Recipe->isPremium==1) : ?>
											<div class="form-group">
												<label for="Description" class="col-sm-2 control-label">Description</label>
												<div class="col-sm-10">
													<textarea id="editor1" name="RestDetail"  ><?php echo $Recipe->RestDetail;?></textarea> 
												</div>
											</div>
											<div class="form-group">
												<label for="Description" class="col-sm-2 control-label">Menu</label>
												<div class="col-sm-10">
													<textarea id="editor2" name="Menu"  ><?php echo $Recipe->Menu;?></textarea> 
												</div>
											</div> 
											<div class="form-group">
												<label for="MetaTitle" class="col-sm-2 control-label">Fecebook Page</label>
												<div class="col-sm-10">
											 		<input  type="text"  name="FBPage" id="FBPage" value="<?php echo $Recipe->FBPage;?>"  placeholder="Facebook page URL" class="form-control">
												</div>
											</div>
											<div class="form-group">
												<label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
												<div class="col-sm-10">
													<input  type="text"  name="MetaTitle" id="MetaTitle" value="<?php echo $Recipe->MetaTitle;?>"   placeholder="MetaTitle" class="form-control">Max 65 Chars
												</div>
											</div>
											<div class="form-group">
												<label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
												<div class="col-sm-10">
												<input  type="text"  name="MetaKeyword" id="MetaKeyword" value="<?php echo $Recipe->MetaKeyword;?>" placeholder="MetaKeyword" class="form-control">3 to 5 keyword
												</div>
											</div>
											<div class="form-group">
												<label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
												<div class="col-sm-10">
													<textarea name="MetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"><?php echo $Recipe->MetaDescription;?></textarea>Max 150 Chars
												</div>
											</div>
										<?php endif;?>                      
										<div id="formEror"></div>
										<?php
											if (isset($Message))
											{
												echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
											}
										?>
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Update</button>
											<a href="<?php echo base_url()."admin/manage_recipes"; ?>"><button type="button" class="btn">Cancel</button></a>
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
	<script type="text/javascript">
		var editor2 = CKEDITOR.replace( 'editor2', 
		{
			filebrowserBrowseUrl :  '<?php echo base_url()."assets/editor/"; ?>ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/ckfinder.html?type=Images',
			filebrowserFlashBrowseUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/ckfinder.html?type=Flash',
			filebrowserUploadUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
			filebrowserFlashUploadUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
		});
		CKFinder.setupCKEditor( editor2, '../' );
	</script>
	<script type="text/javascript">
		$(document).ready(function() 
		{
			$("#Title").change(function()
			{
				var string = $("#Title").val();
				clean = string.replace(/(^\-+|[^a-zA-Z0-9\/_| -]+|\-+$)/g, '')
							.toLowerCase()
							.replace(/[\/_| -]+/g, '-')
				;
				$('#Url').val(clean);
				console.log(clean);
			})
			$("#uploadimg" ).click(function() 
			{
				$( "#file" ).click();
			});
		});
	</script>
</html>