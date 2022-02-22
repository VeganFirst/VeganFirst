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


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	
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
            $this->load->view("writer/navigation");
        ?>
    <div class="container-fluid" id="content">
        <div id="main" style="margin-left: 0px;">
            <div class="container-fluid">
            <div class="page-header">
                    <div class="pull-left">
                            <h1>Edit Category</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Category Details</h3>
                            </div>
                            <div class="box-content">
                                <form  action="#" method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                                    <label for="PageTitle" class="col-sm-2 control-label">Category Title</label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" value="<?php echo $AuthorInfo->CategoryTitle; ?>" name="CategoryTitle" id="CategoryTitle" placeholder="Category Title" class="form-control">
                                                    </div>
                                            </div>
                                        
                                           <div class="form-group">
                                                <label for="isActive" class="col-sm-2 control-label">Status </label>
                                                    <div class="col-sm-10">
                                                            <select required name="isActive" id="isActive" class="form-control">
                                            
                                                            
                                                                <option value="1" <?php if ($AuthorInfo->isActive==1){echo "selected";} ?>>Active</option>
                                                                <option value="0" <?php if ($AuthorInfo->isActive==0){echo "selected";} ?>>Inactive</option>
                                                            </select>
                                                    </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                    <label for="PageTitle" class="col-sm-2 control-label">Category Desc</label>
                                                    <div class="col-sm-10">
                                                        
                                                        <textarea name="catDesc" class="form-control"><?php echo $AuthorInfo->catDesc ?></textarea>
                                                    </div>
                                            </div>
                                            
                                            <div class="form-group">
											<label for="message-text" class="col-sm-2 control-label">Featured image:</label>
											<div class="col-sm-10">
                                            <?php if($AuthorInfo->catImg):?>
                                            <img src="<?php echo base_url().'media/upload/category/'.$AuthorInfo->catImg;?>" alt="Blank image" id="uploadimg" class="img-thumbnail" onClick="$('#file').click()">
                                            <?php else:?>
												<img src="<?php echo base_url();?>assetsNew/images/Wheatgrass.jpg" alt="Blank image" id="uploadimg" class="img-thumbnail" onClick="$('#file').click()">
                                                <?php endif;?>
												<input style="display:none;" id="file" name="file" type="file" class="file" data-show-preview="false">
												<p><strong>Use 153 X 195 px image</strong></p>
											</div>
										</div>
                                            
                                            
                                            <div class="form-group">
                                                    <label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
                                                    <div class="col-sm-10">
                                                            <input  type="text"  name="MetaTitle" id="MetaTitle" value="<?php echo $AuthorInfo->MetaTitle; ?>"  placeholder="MetaTitle" class="form-control"> Max 65 Chars
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
                                                    <div class="col-sm-10">
                                                            <input  type="text"  name="MetaKeyword" id="MetaKeyword" value="<?php echo $AuthorInfo->MetaKeyword; ?>" placeholder="MetaKeyword" class="form-control">3 to 5 keyword
                                                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                    <label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
                                                    <div class="col-sm-10">
                                                    <textarea name="MetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"><?php echo $AuthorInfo->MetaDescription; ?></textarea>Max 150 Chars
                                                           
                                                    </div>
                                            </div>
                                    
                                            <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                                    
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

</html>