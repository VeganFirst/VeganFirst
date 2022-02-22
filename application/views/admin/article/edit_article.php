<!doctype html>
<html>
<head>
	<meta charset="utf8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<!-- Bootstrap -->
   <!-- Bootstrap responsive -->
	
   
<script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/themes.css">
 	


      
	<!-- Just for demonstration -->
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
    <link href="<?php echo base_url()."assets/"; ?>css/editor.css" type="text/css" rel="stylesheet"/>
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url()."assets/"; ?>img/apple-touch-icon-precomposed.png" />
<style>
.cke_editable h3{font-family: Cervo Regular !important;
    font-size: 18px !important;
    letter-spacing: 1px !important;
    color: #e2725b !important;
    text-transform: uppercase;}

</style>    	

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
                            <h1>Update Article</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Article Details</h3>
                            </div>
                            <div class="box-content">
                            <?php if(isset($Messageupload)): echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$Messageupload."</h4></div>"; endif?>
                                <form method="POST" class="form-horizontal form-bordered formLog" enctype="multipart/form-data" >
                                    
                                    <div class="form-group">
                                                    <label for="Title" class="col-sm-2 control-label">Title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  name="PageTitle" id="Title" value="<?php echo $ArticleInfo->PageTitle; ?>" placeholder="Article Title" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="URL" class="col-sm-2 control-label">URL</label>
                                                    <div class="col-sm-10">
                                                            <input  type="text"  name="Url" id="Url" value="<?php echo $ArticleInfo->Url; ?>" placeholder="Article Url" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="Author" class="col-sm-2 control-label">Author</label>
                                                    <div class="col-sm-10">
                                                            <select name="Author" title="Author"  id="Author" class="form-control" >
                                                          
                                                          
                                                            
                                                              <?php
         if(isset($Authors))
		{
			foreach($Authors as $Author)
			{ ?>
			<option value="<?php echo $Author->id; ?>" <?php if($Author->id==$ArticleInfo->Author){ echo "selected";} ?>><?php echo $Author->FirstName.' '.$Author->LastName; ?></option>
		<?	}
						
		}
		?>
                                                            </select>
                                                    </div>
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                    <label for="Author" class="col-sm-2 control-label">Category</label>
                                                    <div class="col-sm-10">
 <select name="category"  onchange="fetch_select(this.value);" title="Category" id="Category" class="form-control" >
         <option value="">Select Category..</option>                                                    
         <?php
         if(isset($Category))
		{
			foreach($Category as $Cat)
			{ ?>
			<option value="<?php echo $Cat->id; ?>" <?php if($Cat->id==$ArticleInfo->category){echo "selected";}?>><?php echo $Cat->CategoryTitle.' ('.$this->M_Article->getCategoryCount($Cat->id).')'; ?></option>
		<?	}
						
		}
		?>
                                                            </select>
                                                    </div>
                                            </div>
                                        <div class="form-group">
	<label for="Author" class="col-sm-2 control-label">Sub Category</label>
	<div class="col-sm-10">
	<select name="category_sub" title="Category" id="subcat" class="form-control" >
	<option value="0">Select Sub Category..</option>
	
	</select>
	</div>
</div>
                                            <div class="form-group">
                                                    <label for="Featured" class="col-sm-2 control-label">Featured</label>
                                                    <div class="col-sm-10">
                                                            <select name="Featured" title="Featured" id="Featured" class="form-control" >
                                                            
                                                             <option value="0" <?php if ($ArticleInfo->Featured==0){echo "selected";} ?>>No</option>
                                                             <option value="1" <?php if ($ArticleInfo->Featured==1){echo "selected";} ?>>Yes</option>
                                                            </select>
                                                    </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                    <label for="Published" class="col-sm-2 control-label">Published</label>
                                                    <div class="col-sm-10">
                                                            <select name="isPublished" title="Published" id="Published" class="form-control" >
                                                            
                                                             <option value="0" <?php if ($ArticleInfo->isPublished==0){echo "selected";} ?>>No</option>
                                                             <option value="1" <?php if ($ArticleInfo->isPublished==1){echo "selected";} ?>>Yes</option>
                                                            </select>
                                                    </div>
                                            </div>
                                        
                                          
                                          
                                           <div class="form-group">
                                                <label for="message-text" class="col-sm-2 control-label">Featured image:</label>
                                                
                                                <div class="col-sm-10">
                                                 <?php if($ArticleInfo->FeaturedImage):?>
                                                <img src="<?php echo base_url();?>media/upload/article/<?php echo $ArticleInfo->FeaturedImage; ?>" alt="Change Featured image" title="Change Featured image" id="uploadimg" class="img-thumbnail" style="max-width: 300px;">
                                                <?php else:?>
                                                <img src="<?php echo base_url();?>assets/img/demo/2.jpg" alt="Blank image" id="uploadimg" class="img-thumbnail">
                                                <?php endif;?>
                                                <input style="display:none;" id="file" name="file" type="file" class="file" data-show-preview="false">
                                                <input  type="text"  name="imgalt" id="imgalt"  placeholder="Image Alt tag" class="form-control" value="<?php echo $ArticleInfo->imgalt; ?>" style="max-width: 300px;">
                                                <p><strong>Use 950 X 650 px image</strong></p>
                                                </div>
                                              </div>
<div class="form-group">
	<label for="videoURL" class="col-sm-2 control-label">videoURL</label>
	<div class="col-sm-10">
	<input  type="text"  name="videoURL" id="videoURL"  placeholder="videoURL" class="form-control" value="<?php echo $ArticleInfo->videoURL; ?>">
        Enter Video id Only : for ex. https://www.youtube.com/watch?v=e9GVrAkPRk8,  Enter
<span style="color: #e80000;">e9GVrAkPRk8</span>  Only    

	</div>
</div>
                                              
                                              <div class="form-group">
                                                    <label for="Password" class="col-sm-2 control-label">Short Description</label>
                                            
                                                    <div class="col-sm-10">
                                                    <textarea name="Article_desc" class="form-control" rows="3"><?php echo html_entity_decode($ArticleInfo->Article_desc); ?></textarea> 
                                                    </div>
											</div>
                                        
                                          
                                          
                                          
                                            
                                              <div class="form-group">
                                                    <label for="Password" class="col-sm-2 control-label">Description</label>
                                            
                                                    <div class="col-sm-10">
                                                    <textarea class="desc" id="editor1" name="Article_post" ><?php echo html_entity_decode($ArticleInfo->Article_post); ?></textarea> 
                                                    </div>
											</div>
                                            
                                            <div class="form-group">
                                                    <label class="col-sm-2 control-label">Tags</label>
                                                    <div class="col-sm-10">
                                                            <input  type="text"  name="Tags" id="Tags" value="<?php echo $ArticleInfo->Tags; ?>"  placeholder="Tags, Tags2" class="form-control">Enter comma seprated tags without space in tag
                                                    </div>
                                            </div>
                                            
                                             <div class="form-group">
                                                    <label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
                                                    <div class="col-sm-10">
                                                            <input  type="text"  name="MetaTitle" id="MetaTitle" value="<?php echo $ArticleInfo->MetaTitle; ?>"   placeholder="MetaTitle" class="form-control"> Max 65 Chars
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
                                                    <div class="col-sm-10">
                                                            <input  type="text"  name="MetaKeyword" id="MetaKeyword" value="<?php echo $ArticleInfo->MetaKeyword; ?>"  placeholder="MetaKeyword" class="form-control">3 to 5 keyword
                                                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                    <label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
                                                    <div class="col-sm-10">
                                                    <textarea name="MetaDescription" id="MetaDescription" rows="2" maxlength='250' class="form-control"><?php echo $ArticleInfo->MetaDescription; ?></textarea>Max 250 Chars
                                                           
                                                    </div>
                                            </div>
                                            
                                                                                                        
                                    <div id="formEror"></div>
                                <?php    if (isset($Message)){
                    echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
                } ?>
                                            <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    
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
 <script type="text/javascript" src="<?php echo base_url()."assets/editor/"; ?>ckeditor/ckeditor.js?v=1.1"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/editor/"; ?>ckfinder/ckfinder.js"></script>


<script type="text/javascript">

var editor = CKEDITOR.replace( 'editor1', {
    allowedContent: true,
    filebrowserBrowseUrl :  '<?php echo base_url()."assets/editor/"; ?>ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/ckfinder.html?type=Images',
    
    filebrowserUploadUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '<?php echo base_url()."assets/editor/"; ?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    
});
CKFinder.setupCKEditor( editor, '../' );
</script>
    <script type="text/javascript">
function fetch_select(val)
{
 $('#subcat')
    .find('option')
    .remove()
    .end()
    .append('<option value="">Select Sub Category</option>')
    .val('')
;
 $.ajax({
 type: 'post',
 dataType: 'json',
 url: '<?php echo Base_Url()?>admin/getAllSubCategoryArt/'+val,
 
 success: function (response) {
  $.each(response, function(i, value) {
         
		if("<?php echo $ArticleInfo->category_sub;?>" == value.id){
		$('#subcat').append($('<option>').text(value.CategoryTitle).attr('value', value.id).attr('selected','selected'));	
		}
		else{
		 
		 $('#subcat').append($('<option>').text(value.CategoryTitle).attr('value', value.id));
		}
        });
 
 }
 });
}

</script>
<script type="text/javascript">
$(document).ready(function() {
fetch_select(<?php echo $ArticleInfo->category;?>);
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

</html>