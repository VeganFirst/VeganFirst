<!doctype html>
<html>
<head>
	<meta charset="utf8">
    <title><?php echo $PageTitle;?></title>
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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
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
	<?php
            $this->load->view("admin/navigation");
        ?>
    <div class="container-fluid" id="content">
        <div id="main" style="margin-left: 0px;">
            <div class="container-fluid">
            <div class="page-header">
                    <div class="pull-left">
                            <h1>Add New Page</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Add New Page</h3>
                            </div>
                            <div class="box-content">
                            <?php    if (isset($Message)){
                    echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
                } ?>
                                <form method="POST" action="<?php echo base_url()?>admin/add_page" class="form-horizontal form-bordered" onSubmit="return validateAdd()" name="page" >
                                    
                                    <div class="form-group">
                                                    <label for="Title" class="col-sm-2 control-label">Title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  name="PageTitle" id="Title" placeholder="Page Title" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="URL" class="col-sm-2 control-label">URL</label>
                                                    <div class="col-sm-10">
                                                            <input  type="text"  name="Url" id="Url" placeholder="Page Url" class="form-control">
                                                    </div>
                                            </div>
         <div class="form-group">
            <label for="Description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
            <textarea id="editor1" name="Page_desc" ></textarea> 
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
                                                    <textarea name="MetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"></textarea>Max 150 Chars
                                                           
                                                    </div>
                                            </div>
                                            
                                    <div id="formErornl"></div>
                                
              <div class="form-actions">
                 <button type="submit" class="btn btn-primary">Add New</button>
                  <a href="<?php echo base_url()."admin/manage_article"; ?>"><button type="button" class="btn">Cancel</button></a>
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




	/*$('form.formLog').submit( function(form){
		form.preventDefault();
		$.post('/vegan/index.php/admin/add_page',$('form.formLog').serialize(), function(data){
			console.log(data);
			$('div#formEror').html(data);
			});
		});*/
});



function validateAdd() {
	var z = document.forms["page"]["PageTitle"].value;
	var y = document.forms["page"]["Page_desc"].value;
	
	var msg = [];
	
	if (z == null || z == "") {
        msg.push("<div class='alert alert-info'>Enter Page Title</div>");
    }
	if (y == null || y == "") {
        msg.push("<div class='alert alert-info'>Enter Content</div>");
    }
	
	
	if(msg.length > 0)
	{
		$('div#formErornl').html('');
		for(var i=0; i< msg.length; i++)
		{
	        $('div#formErornl').append(msg[i]);
		}
		return false;
	}
}
</script>

</html>