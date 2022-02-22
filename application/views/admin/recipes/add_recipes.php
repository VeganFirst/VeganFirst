<!doctype html>
<html>
<head>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>



     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/themes.css">
	<link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.ico" />
    <link href="<?php echo base_url()."assets/"; ?>css/editor.css" type="text/css" rel="stylesheet"/>
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url()."assets/"; ?>img/apple-touch-icon-precomposed.png" />
</head>
<body>
<?php  $this->load->view("admin/navigation");        ?>
    <div class="container-fluid" id="content">
        <div id="main" style="margin-left: 0px;">
            <div class="container-fluid">
            <div class="page-header">
                    <div class="pull-left">
                            <h1>Add Recipes</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Recipe Details</h3>
                            </div>
                            
                            <div class="box-content">
                            <?php if(isset($Messageupload)): echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$Messageupload."</h4></div>"; endif?>
                            
<form method="POST" class="form-horizontal form-bordered formLog" name="page" enctype="multipart/form-data" onSubmit="return validateAdd()" >
                                    
<div class="form-group">
     <label for="Title" class="col-sm-2 control-label">Recipe Title</label>
     <div class="col-sm-10">
     <input type="text"  name="PageTitle" id="Title" placeholder="Recipe Title" class="form-control">
     </div>
</div>
                                        
<div class="form-group">
     <label for="URL" class="col-sm-2 control-label">URL</label>
     <div class="col-sm-10">
     <input  type="text"  name="Url" id="Url" placeholder="Recipe Url" class="form-control">
      </div>
</div>
                                            
<div class="form-group">
      <label for="URL" class="col-sm-2 control-label">Recipes By</label>
      <div class="col-sm-10">
      <select name="recepieBy" title="Recipes By" class="form-control" >
      <option value="">Select Author..</option> 
       <?php if(isset($Authors)) {
			foreach($Authors as $Author)
			{ ?>
			<option value="<?php echo $Author->id; ?> "><?php echo $Author->FirstName.' '.$Author->LastName; ?></option>
		<?	} } ?>
        </select>
        </div>
 </div>
                                        
<div class="form-group">
     <label for="Author" class="col-sm-2 control-label">Category</label>
     <div class="col-sm-10">
     <select name="Category" title="Category" id="Category" class="form-control" >
     <option value="">Select Category..</option>
     <?php
      if(isset($Category))
		{
			foreach($Category as $cat)
			{ ?>
			<option value="<?php echo $cat->id; ?> "><?php echo $cat->CategoryTitle.' ('.$this->M_Recipes->getCategoryCount($cat->id).')'; ?></option>
		<?	} }	?>
       </select>
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
     <label for="Featured" class="col-sm-2 control-label">Featured</label>
     <div class="col-sm-10">
    <select name="Featured" title="Featured" id="Featured" class="form-control" >
     <option value="0">No</option>
     <option value="1">Yes</option>
      </select>
    </div>
</div>
                                            
<div class="form-group">
     <label for="message-text" class="col-sm-2 control-label">Recipes image:</label>
      <div class="col-sm-10">
       <img src="<?php echo base_url();?>assets/img/demo/2.jpg" alt="Blank image" id="uploadimg" class="img-thumbnail">
      <input style="display:none;" id="file" name="file" type="file" class="file" data-show-preview="false">
      <p><strong>Use 950 X 650 px image</strong></p>
      </div>
</div>
<div class="form-group">
	<label for="videoURL" class="col-sm-2 control-label">Video URL</label>
	<div class="col-sm-10">
	<input type="text"  name="videoURL" id="videoURL"  placeholder="videoURL" class="form-control">
        Enter Video id Only : for ex. https://www.youtube.com/watch?v=e9GVrAkPRk8,  Enter
<span style="color: #e80000;">e9GVrAkPRk8</span>  Only    

	</div>
</div>
                                        
<div class="form-group col-sm-4" style="padding:0;">
         <label for="PrepTime" class="col-sm-2 control-label">Prep Time</label>
         <div class="col-sm-6">
         <input type="text" class="form-control" name="PrepTime" placeholder="1hr 10min">
         </div>
</div>
 <div class="form-group col-sm-4" style="padding:0;">
      <label for="CookTime" class="col-sm-2 control-label">Cook Time</label>
      <div class="col-sm-6">
      <input type="text" class="form-control" name="CookTime" placeholder="1hr 10min">
       </div>
</div>
<div class="form-group col-sm-4" style="padding:0;">
      <label for="TotalTime" class="col-sm-2 control-label">Ready in Time</label>
       <div class="col-sm-6">
       <input type="text" class="form-control" name="ReadyIn"  placeholder="1hr 10min" ></div>
</div>
                                            
<?php /*?><div class="form-group col-sm-4" style="padding:0;">
     <label for="TotalTime" class="col-sm-2 control-label">Total Time</label>
     <div class="col-sm-6">
     <input type="text" class="form-control" name="TotalTime"  placeholder="1hr 10min" >
     </div>
</div><?php */?>
                                            
<?php /*?><div class="form-group col-sm-4" style="padding:0;">
    <label for="TotalTime" class="col-sm-2 control-label">Serving(Plates)</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="Serving"  placeholder="12" >
    </div>
</div>
<div class="form-group col-sm-4" style="padding:0;">
    <label for="TotalTime" class="col-sm-2 control-label">Cals (Plates)</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" name="Cals"  placeholder="190" >
    </div>
</div><?php */?>
                                            
<div class="form-group" >
     <label for="TotalTime" class="col-sm-2 control-label">Ingredients</label>
     <div class="col-sm-8" id="p_scents">
     <div class="col-sm-10" style="padding:0">
     <input type="text" class="form-control" name="Ingredients[]"  placeholder="1/2 cup butter" >
     </div>
     <div class="col-sm-2">&nbsp;</div>     
     </div>
     <div class="col-sm-2">
     <button type="button" id="addScnt" class="btn">Add More</button>
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
     <textarea id="editor1" name="RecepieDetail"></textarea> 
     </div>
</div>
                                            
<div class="form-group">
     <label for="Tips" class="col-sm-2 control-label">Tips</label>
     <div class="col-sm-10">
     <textarea name="Tips" id="Tips" rows="2" maxlength='160' class="form-control"></textarea>
     </div>
</div>
<div class="form-group">
     <label for="Hash" class="col-sm-2 control-label">Hash Tags</label>
     <div class="col-sm-10">
     <input  type="text"  name="HashTags" id="Hash"  placeholder="Gulten-Free,  Sugar, Indian, Vegan, Vegan, Zero-Oil" class="form-control">Enter comma seprated tags without space in tag
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
         <div id="formEror"></div>
<?php    if (isset($Message)){
  echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
} ?>
  <div class="form-actions">
       <button type="submit" class="btn btn-primary">Add Recipes</button>
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

$("#uploadimg" ).click(function() {
     $( "#file" ).click();

    });
});

</script>


<script src="<?php echo base_url()."assets/"; ?>js/143/jquery.min.js"></script>
<script>
$(function() {
        var scntDiv = $('#p_scents');
        var i = $('#p_scents #ingr').size() + 1;
        
        $('#addScnt').live('click', function() {
                $('<p style="clear: both;"><input type="text" class="form-control" name="Ingredients[]"  placeholder="1/2 cup butter" style="float: left;width: 83.5%;" ><a href="#" id="remScnt" style="float:left"><img src="../assets/images/delete.png" style="width: 22px;margin: 6px;"></a></p>').appendTo(scntDiv);
                i++;
                return false;
        });
        
        $('#remScnt').live('click', function() { 
                if( i > 1 ) {
                        $(this).parents('p').remove();
                        i--;
                }
                return false;
        });
});




function validateAdd() {
	var fn = document.forms["page"]["PageTitle"].value;
	var z = document.forms["page"]["recepieBy"].value;
	
	var c = document.forms["page"]["Category"].value;
	var sd = document.forms["page"]["ShortDesc"].value;
	
	
	//var rpw = document.forms["page"]["rePassword"].value;
	var msg = [];
	
	if (fn == null || fn == "") {
        msg.push("<div class='alert alert-info'>Enter Recipe Title</div>");
    }
	
	if (z == null || z == "") {
        msg.push("<div class='alert alert-info'>Select Author</div>");
    }
	
	if (c == null || c == "") {
        msg.push("<div class='alert alert-info'>Select category</div>");
    }
	if (sd == null || sd == "") {
        msg.push("<div class='alert alert-info'>Enter Short Descriptions</div>");
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