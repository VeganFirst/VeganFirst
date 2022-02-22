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
		<?php $this->load->view("writer/navigation"); ?>
		<div class="container-fluid" id="content">
			<div id="main" style="margin-left: 0px;">
				<div class="container-fluid">
					<div class="page-header">
						<div class="pull-left">
							<h1>Add Article</h1>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="box box-bordered box-color">
								<div class="box-title">
									<h3><i class="icon-th-list"></i> Article Details</h3>
								</div>
								<div class="box-content">
									<?php if (isset($Messageupload)): ?>
										<div class='alert alert-info' style='text-align: center;padding: 5px;'>
											<h4><?php echo $Messageupload ?></h4>
										</div>
									<?php endif ?>
<form method="POST" class="form-horizontal form-bordered formLog" enctype="multipart/form-data" onSubmit="return validateAdd()" name="page">
<div class="form-group">
	<label for="Title" class="col-sm-2 control-label">Title</label>
	<div class="col-sm-10">
	<input type="text"  name="PageTitle" id="Title" placeholder="Article Title" class="form-control">
	</div>
</div>

<div class="form-group">
	<label for="URL" class="col-sm-2 control-label">URL</label>
	<div class="col-sm-10">
	<input  type="text"  name="Url" id="Url" placeholder="Article Url" class="form-control">
	</div>
</div>
<div class="form-group">
	<label for="Author" class="col-sm-2 control-label">Author</label>
	<div class="col-sm-10">
	<select name="Author" title="Author" id="Author" class="form-control" >
	<option value="0">Select Author..</option>
	<?php if(isset($Authors))
	{ foreach($Authors as $Author) { ?>
	<option value="<?php echo $Author->id; ?> "><?php echo $Author->FirstName.' '.$Author->LastName; ?></option>
	<?php	} }	?>
	</select>
	</div>
</div>
<div class="form-group">
	<label for="Author" class="col-sm-2 control-label">Category</label>
	<div class="col-sm-10">
	<select name="category" title="Category" id="Category" class="form-control" >
	<option value="0">Select Category..</option>
	<?php if(isset($Category)) { foreach($Category as $Cat) { ?>
	<option value="<?php echo $Cat->id; ?> "><?php echo $Cat->CategoryTitle.' ('.$this->M_Article->getCategoryCount($Cat->id).')'; ?> </option><?php	}	} ?>
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
	<label for="Published" class="col-sm-2 control-label">Published</label>
	<div class="col-sm-10">
	<select name="isPublished" title="Published" id="Published" class="form-control" >
	<option value="0">No</option>
    <option value="1">Yes</option>
	</select>
	</div>
</div>
<div class="form-group">
	<label for="message-text" class="col-sm-2 control-label">Featured image:</label>
	<div class="col-sm-10">
	<img src="<?php echo base_url();?>assets/img/demo/2.jpg" alt="Blank image" id="uploadimg" class="img-thumbnail">
	<input style="display:none;" id="file" name="file" type="file" class="file" data-show-preview="false">
	<p><strong>Use 950 X 650 px image</strong></p>
	</div>
</div>
<div class="form-group">
	<label for="videoURL" class="col-sm-2 control-label">videoURL</label>
	<div class="col-sm-10">
	<input  type="text"  name="videoURL" id="videoURL"  placeholder="videoURL" class="form-control">
    Enter Video id Only : for ex. https://www.youtube.com/watch?v=e9GVrAkPRk8,  Enter
<span style="color: #e80000;">e9GVrAkPRk8</span>  Only    
	</div>
</div>
                                        
<div class="form-group">
<label for="Password" class="col-sm-2 control-label">Short Description</label>
	<div class="col-sm-10">
	<textarea name="Article_desc" class="form-control" rows="3"></textarea> 
	</div>
</div>
<div class="form-group">
	<label for="Password" class="col-sm-2 control-label">Description</label>
	<div class="col-sm-10">
	<textarea id="editor1" name="Article_post" ></textarea> 
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tags</label>
	<div class="col-sm-10">
	<input  type="text"  name="Tags" id="Tags"  placeholder="Tags, Tags2" class="form-control">Enter comma seprated tags without space in tag
	</div>
</div>
<div class="form-group">
	<label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
	<div class="col-sm-10">
	<input  type="text"  name="MetaTitle" id="MetaTitle"  placeholder="MetaTitle" class="form-control"> Max 65 Chars
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
	<textarea name="MetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"></textarea>Max 150 Chars
	</div>
</div>
<div id="formEror"></div>
<?php if (isset($Message)){
	echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
} ?>
<div class="form-actions">
	<button type="submit" class="btn btn-primary">Add Article</button>
	<a href="<?php echo base_url()."writer/dashboard"; ?>"><button type="button" class="btn">Cancel</button></a>
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
		$(document).ready(function()
		{
			$("#Title").change(function() 
			{
				var string = $("#Title").val();
				clean = string.replace(/(^\-+|[^a-zA-Z0-9\/_| -]+|\-+$)/g, '')
					.toLowerCase()
					.replace(/[\/_| -]+/g, '-');
				$('#Url').val(clean);
				console.log(clean);
			})
			$("#uploadimg" ).click(function() 
			{
				$( "#file" ).click();
			});
		});
		function validateAdd() 
		{
			var fn = document.forms["page"]["PageTitle"].value;
			var z = document.forms["page"]["Author"].value;
			var c = document.forms["page"]["category"].value;
			var ln = document.forms["page"]["file"].value;
			var em = document.forms["page"]["Article_desc"].value;
	
			var msg = [];
			if (fn == null || fn == "") 
			{
				msg.push("<div class='alert alert-info'>Enter Article Title</div>");
			}
			if (z == 0) 
			{
				msg.push("<div class='alert alert-info'>Select Author</div>");
			}
			if (c == 0) 
			{
				msg.push("<div class='alert alert-info'>Select Category</div>");
			}
			if (ln == null || ln == "") 
			{
				msg.push("<div class='alert alert-info'>Select Article Image</div>");
			}
			if (em == null || em == "") 
			{
				msg.push("<div class='alert alert-info'>Enter Short Description</div>");
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