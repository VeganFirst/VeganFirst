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


        
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/35/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/themes.css">
<link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.ico" />
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
                            <h1>Edit Recipes</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Recipes Details</h3>
                            </div>
                            
                            <div class="box-content">
                            <?php if(isset($Messageupload)): echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$Messageupload."</h4></div>"; endif?>
                            
<form method="POST" class="form-horizontal form-bordered formLog" enctype="multipart/form-data" >
                                    
<div class="form-group">
      <label for="Title" class="col-sm-2 control-label">Recipes Title</label>
      <div class="col-sm-10">
      <input type="text"  name="PageTitle" id="Title" placeholder="Article Title" value="<?php echo $Recipe->PageTitle;?>" class="form-control">
      </div>
</div>
                                        
<div class="form-group">
   <label for="URL" class="col-sm-2 control-label">URL</label>
   <div class="col-sm-10">
   <input  type="text"  name="Url" id="Url" placeholder="Product Url" value="<?php echo $Recipe->Url;?>" class="form-control">
    </div>
</div>
                                            
<div class="form-group">
    <label for="URL" class="col-sm-2 control-label">Recipes By</label>
    <div class="col-sm-10">
                                                           
               <select name="recepieBy" title="Recipes By" class="form-control" >
         <option value="">Select Author..</option>                                                    
         <?php
         if(isset($Authors))
		{
			foreach($Authors as $Author)
			{ ?>
			
            <option value="<?php echo $Author->id; ?> " <?php if($Recipe->recepieBy == $Author->id){ echo "selected"; }?>><?php echo $Author->FirstName.' '.$Author->LastName; ?></option>
		<?	}
						
		}
		?>
            </select>                                             
    </div>
</div>
                                        
<div class="form-group">
    <label for="Author" class="col-sm-2 control-label">Category</label>
    <div class="col-sm-10">
   <select name="Category" title="Category" id="Category" class="form-control" >
   <option value="">Select Category..</option>
   <?php if(isset($Category))
		{ foreach($Category as $cat)
			{ ?>
			<option value="<?php echo $cat->id; ?> " <?php if($Recipe->Category == $cat->id){ echo "selected"; }?>><?php echo $cat->CategoryTitle.' ('.$this->M_Recipes->getCategoryCount($cat->id).')'; ?></option>
		<?php } } ?>
   </select>
    </div>
</div>
<div class="form-group">
    <label for="Status" class="col-sm-2 control-label">Published</label>
    <div class="col-sm-10">
    <select name="isActive" title="Status" id="Status" class="form-control" >
    <option value="1" <?php if(1 == $Recipe->isActive){ echo "selected"; }?> >Yes</option>
   <option value="0" <?php if(0 == $Recipe->isActive){ echo "selected"; }?> >No</option>
    </select>
    </div>
</div>
                                        
<div class="form-group">
    <label for="Featured" class="col-sm-2 control-label">Featured</label>
    <div class="col-sm-10">
    <select name="Featured" title="Featured" id="Featured" class="form-control" >
    <option value="0" <?php if(0 == $Recipe->Featured){ echo "selected"; }?>>No</option>
    <option value="1" <?php if(1 == $Recipe->Featured){ echo "selected"; }?>>Yes</option>
   </select>
    </div>
</div>
                                            
                                            
                                            
<div class="form-group">
<label for="message-text" class="col-sm-2 control-label">Recipes image:</label>
<div class="col-sm-2">
<img src="<?php echo base_url()."media/upload/recipes/".$Recipe->FeaturedImage;?>" alt="Blank image" id="uploadimg" class="img-thumbnail">
<input style="display:none;" id="file" name="file" type="file" class="file" data-show-preview="false">
</div>
  </div>
                                        
<div class="form-group">
	<label for="videoURL" class="col-sm-2 control-label">videoURL</label>
	<div class="col-sm-10">
	<input type="text"  name="videoURL" id="videoURL"  placeholder="videoURL" class="form-control" value="<?php echo $Recipe->videoURL; ?>">
        Enter Video id Only : for ex. https://www.youtube.com/watch?v=e9GVrAkPRk8,  Enter
<span style="color: #e80000;">e9GVrAkPRk8</span>  Only    

	</div>
</div>                                          

<div class="form-group col-sm-4" style="padding:0;">
<label for="PrepTime" class="col-sm-2 control-label">Prep Time</label>
<div class="col-sm-6">
   <input type="text" class="form-control" name="PrepTime" value="<?php echo $Recipe->PrepTime;?>" placeholder="1hr 10min">
</div>
</div>

<div class="form-group col-sm-4" style="padding:0;">
<label for="CookTime" class="col-sm-2 control-label">Cook Time</label>
<div class="col-sm-6">
    <input type="text" class="form-control" name="CookTime" value="<?php echo $Recipe->CookTime;?>" placeholder="1hr 10min">
    </div>
</div>
                                            
<div class="form-group col-sm-4" style="padding:0;">
<label for="TotalTime" class="col-sm-2 control-label">Ready in Time</label>
<div class="col-sm-6">
    <input type="text" class="form-control" name="ReadyIn" value="<?php echo $Recipe->ReadyIn;?>"  placeholder="1hr 10min" >
</div>
</div>
<?php /*?>
<div class="form-group col-sm-4" style="padding:0;">
<label for="TotalTime" class="col-sm-2 control-label">Total Time</label>
<div class="col-sm-6">
    <input type="text" class="form-control" name="TotalTime" value="<?php echo $Recipe->TotalTime;?>"  placeholder="1hr 10min" >     </div>
</div>
                                            
                                            
<div class="form-group col-sm-4" style="padding:0;">
<label for="TotalTime" class="col-sm-2 control-label">Serving(Plates)</label>
<div class="col-sm-6"><input type="text" class="form-control" name="Serving" value="<?php echo $Recipe->Serving;?>"  placeholder="12" >
      </div>
</div>
                                            
<div class="form-group col-sm-4" style="padding:0;">
<label for="TotalTime" class="col-sm-2 control-label">Cals (Plates)</label>
<div class="col-sm-6">
     <input type="text" class="form-control" name="Cals" value="<?php echo $Recipe->Cals;?>"  placeholder="190" >
     </div>
</div><?php */?>
                                            
<?php $inc=json_decode($Recipe->Ingredients);?>
<div class="form-group" >
<label for="TotalTime" class="col-sm-2 control-label">Ingredients</label>
<div class="col-sm-10" style="padding: 0;">
<?php if($inc):
	$i=1;
	foreach($inc as $incr)
	{ ?>
<div class="col-sm-4" >
    <input type="text" class="form-control" name="Ingredients[]" value="<?php echo $incr;?>"  placeholder="1/2 cup butter" >
  </div>
     <?php
	$i++;
	 } 
	 endif;
	 ?>  
                                            
    </div>   
</div> 
                                          
                                          
<div class="form-group" >
<label for="TotalTime" class="col-sm-2 control-label"></label>
<div class="col-sm-8" id="p_scents">
</div>
                                                    
											
<div class="col-sm-2">
<button type="button" id="addScnt" class="btn">Add More</button>
</div>
 </div>  
<div class="form-group">
    <label for="Description" class="col-sm-2 control-label">Short Description</label>
    <div class="col-sm-10">
    <textarea name="ShortDesc" class="form-control" rows="4"  ><?php echo $Recipe->ShortDesc;?></textarea> 
    </div>
</div>
                                            
<div class="form-group">
    <label for="Description" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
    <textarea id="editor1" name="RecepieDetail"><?php echo $Recipe->RecepieDetail;?></textarea> 
    </div>
</div>
                                            
<div class="form-group">
    <label for="Tips" class="col-sm-2 control-label">Tips</label>
    <div class="col-sm-10">
    <textarea name="Tips" id="Tips" rows="2" maxlength='160' class="form-control"><?php echo $Recipe->Tips;?></textarea>
    </div>
</div>
<div class="form-group">
    <label for="Hash" class="col-sm-2 control-label">Hash Tags</label>
    <div class="col-sm-10">
     <input  type="text"  name="HashTags" id="Hash"  placeholder="Gulten-Free, Sugar, Indian, Vegan, Vegan, Zero-Oil" value="<?php echo $Recipe->HashTags;?>" class="form-control">Enter comma seprated tags without space in tag
    </div>
</div> 

<div class="form-group">
    <label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
    <div class="col-sm-10">
    <input  type="text"  name="MetaTitle" id="MetaTitle" value="<?php echo $Recipe->MetaTitle;?>"  placeholder="MetaTitle" class="form-control">Max 65 Chars
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
  <div id="formEror"></div>
   <?php if(isset($Message)){
    echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
                } ?>
<div class="form-actions">
    <button type="submit" class="btn btn-primary">Update Recipes</button>
                                                    
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script>
$(function() {
        var scntDiv = $('#p_scents');
        var i = $('#p_scents #ingr').size() + 1;
        
        $('#addScnt').live('click', function() {
                $('<p class="col-sm-6" style="padding:0"><input type="text" class="form-control" name="Ingredients[]"  placeholder="Add Ingredients" style="float: left;width: 83.5%;" ><a href="#" id="remScnt" style="float:left"><img src="../../assets/images/delete.png" style="width: 22px;margin: 6px;"></a></p>').appendTo(scntDiv);
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
</script>






</html>