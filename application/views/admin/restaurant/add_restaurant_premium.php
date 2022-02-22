<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<title><?php echo $MetaTitle;?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		<script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
		<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
		<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/themes.css">
		<link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.ico" />
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
											<label for="Title" class="col-sm-2 control-label">Info</label>
											<div class="col-sm-2">
												<select name="City" id="Title" class="form-control">
													<option value="">Select City</option>
													<?php foreach ($Cities as $City): ?>
														<option value="<?php echo $City->url; ?>"><?php echo $City->name; ?></option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="col-sm-2">
												<select name="Country" title="Status" id="Status" class="form-control" >
													<option value="India">India</option>
													<option value="USA">USA</option>
													<option value="Australia">Australia</option>
												</select>
											</div>
											<div class="col-sm-2">
												<input type="text"  name="Phone" id="Phone" placeholder="Phone No" class="form-control">
											</div>
											<div class="col-sm-2">
												<input type="text"  name="Time" id="Time" placeholder="Timing" class="form-control">
											</div>
											<div class="col-sm-2">
												<input type="text"  name="Delivery" id="Delivery" placeholder="Delivery Option" class="form-control">
											</div>
										</div>
										<div class="form-group">
											<label for="Title" class="col-sm-2 control-label">Category</label>
											<div class="col-sm-2">
		   										<select name="category" class="form-control">
													<option value="Restaurant">Restaurant</option>
													<option value="Catering">Catering</option>
												</select>
											</div>
											<div class="col-sm-2">
												<label for="Title" class="control-label" style="width: 90px;">Is Vegan <input type="radio" name="isVegan" value="1"></label > 
												<label for="Title" class="control-label" style="width: 90px;">Not Vegan <input type="radio" name="isVegan" value="0"></label >
											</div>
										</div>
										<div class="form-group">
											<label for="Title" class="col-sm-2 control-label">Discount Code</label>
											<div class="col-sm-10">
												<input type="text"  name="discount_code" id="discount_code" placeholder="Restaurants Discount Code" class="form-control">
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
													<option value="0">No</option>
													<option value="1">Yes</option>
											   </select>
											</div>
										</div>
										<div class="form-group">
											<label for="message-text" class="col-sm-2 control-label">Restaurant Logo:</label>
											<div class="col-sm-2">
												<img src="<?php echo base_url();?>assets/img/demo/rest-logo.png" onclick='$("#file2").click()' class="img-thumbnail">
												<input style="display:none;" id="file2" name="logo" type="file" class="file" data-show-preview="false">
                                                <br/>400px X 400px
											</div>
                                            
                                            <div class="col-sm-3">
												<img src="<?php echo base_url();?>assets/img/demo/2.jpg" onclick='$("#filel").click()' class="img-thumbnail">
												<input style="display:none;" id="filel" name="cover_img_n" type="file" class="file" data-show-preview="false">
                                                <br/>950px X 650px
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
											<label for="Description" class="col-sm-2 control-label">Menu</label>
											<div class="col-sm-10">
												<textarea id="editor2" name="Menu"  ></textarea> 
											</div>
										</div>
										<div class="form-group">
											<label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
											<div class="col-sm-10">
												<input  type="text"  name="MetaTitle" id="MetaTitle"  placeholder="MetaTitle" class="form-control">Max 65 Chars
											</div>
										</div>
										<div class="form-group">
											<label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
											<div class="col-sm-10">
												<input  type="text"  name="MetaKeyword" id="MetaKeyword" placeholder="MetaKeyword" class="form-control">3 to 5 keyword
											</div>
										</div>
										<div class="form-group">
											<label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
											<div class="col-sm-10">
												<textarea name="MetaDescription" rows="2" maxlength='160' class="form-control"></textarea>Max 150 Chars
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
											<button type="submit" class="btn btn-primary">Add Restaurant</button>
											<a href="<?php echo base_url()."admin/manage_restaurant"; ?>">
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
	var editor = CKEDITOR.replace( 'editor2', 
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