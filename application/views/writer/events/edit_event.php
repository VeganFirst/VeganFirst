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

<script src="<?php echo base_url()."assets/"; ?>js/plugins/bootbox/jquery.bootbox.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datepicker/bootstrap-datepicker.js"></script>
        
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
    	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/datepicker/datepicker.css">

<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
		<!-- Just for demonstration -->
	
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
                            <h1>Edit Event</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> <?php echo $PageInfo->event_title; ?></h3>
                            </div>
                            <div class="box-content">
                                <form method="POST" class="form-horizontal form-bordered formLog" >
                                    
                                    <div class="form-group">
                                                    <label for="Title" class="col-sm-2 control-label">Title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  name="event_title" id="Title" value="<?php echo $PageInfo->event_title; ?>" placeholder="Event Title" class="form-control">
                                                    </div>
                                            </div>
                                        <div class="form-group">
                                                    <label for="URL" class="col-sm-2 control-label">Date</label>
                                                    <div class="col-sm-10">
                                                            <!--<input  type="text"  name="event_date" id="Url" placeholder="Page Url" class="form-control">-->
                                                            <input type="text" name="event_date" id="datetimepicker4" value="<?php echo $PageInfo->event_date; ?>" placeholder="Event Date" class="form-control datepicker">
                                                    </div>
                                            </div>
                  <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datepicker({format: 'yyyy/mm/dd',});
            });
        </script>                      
                                            
                          
                                            
                                          
                                          <div class="form-group">
                                                    <label for="URL" class="col-sm-2 control-label">Time</label>
                                                    <div class="col-sm-10">
                                                            <!--<input  type="text"  name="event_date" id="Url" placeholder="Page Url" class="form-control">-->
                                                            <input type="text" name="event_time" id="timepickera" value="<?php echo date('h:i A', strtotime($PageInfo->event_time)); ?>" placeholder="Event Date" class="form-control">
                                                    </div>
                                            </div>
                                            
                                            
                                            <script type="text/javascript">
             $('#timepickera').timepicker({
    timeFormat: 'h:mm p',
    interval: 30,
    minTime: '00',
    maxTime: '12:00pm',
    startTime: '12:00am',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
			
        </script>    
                                            
                                              
                                            
                                        
                                            
                                            
                                          
                                            
                                              <div class="form-group">
                                                    <label for="Description" class="col-sm-2 control-label">Description</label>
                                            
                                                    <div class="col-sm-10">
                                                    <textarea id="editor1" name="event_deac" ><?php echo html_entity_decode($PageInfo->event_deac); ?></textarea> 
                                                    </div>
											</div>
                                            
                                        <div class="form-group">
                                                    <label class="col-sm-2 control-label">Address</label>
                                                    <div class="col-sm-10">
                                                    <textarea name="addr" id="addr" rows="2" maxlength='160' class="form-control"><?php echo $PageInfo->addr; ?></textarea>
                                                           
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-sm-2 control-label">Contact</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" name="contact" id="Contact" placeholder="Contact" value="<?php echo $PageInfo->contact; ?>" class="form-control">
                                                   
                                                           
                                                    </div>
                                            </div>    
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                                                                                        
                                    <div id="formEror"></div>
                                <?php    if (isset($Message)){
                    echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
                } ?>
                                            <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    
                                                    <a href="<?php echo base_url()."writer/events"; ?>"><button type="button" class="btn">Cancel</button></a>
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



</html>