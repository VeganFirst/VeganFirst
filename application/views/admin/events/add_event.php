<!doctype html>
<html>
<head>
	<meta charset="utf8">
    <title><?php echo $PageTitle;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>

<script src="<?php echo base_url()."assets/"; ?>js/plugins/bootbox/jquery.bootbox.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url()."assets/"; ?>js/plugins/timepicker/bootstrap-timepicker.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- dataTables -->
 
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/themes.css">
    	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/datepicker/datepicker.css">
        
        
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
	
	<link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
    <link href="<?php echo base_url()."assets/"; ?>css/editor.css" type="text/css" rel="stylesheet"/>
	
    	

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
                            <h1>Edit Page</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Add Page</h3>
                            </div>
                            <div class="box-content">
                            <?php    if (isset($Message)){
                    echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
                } ?>
                <form method="POST" class="form-horizontal form-bordered" onSubmit="return validateAdd()" name="page"  >
                                    
                                    <div class="form-group">
                                                    <label for="Title" class="col-sm-2 control-label">Title</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  name="event_title" id="Title" placeholder="Event Title" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="URL" class="col-sm-2 control-label">Date</label>
                                                    <div class="col-sm-10">
                                                            <!--<input  type="text"  name="event_date" id="Url" placeholder="Page Url" class="form-control">-->
                                                            <input type="text" name="event_date" id="datetimepicker4" placeholder="Event Date" class="form-control datepicker">
                                                    </div>
                                            </div>
                  <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datepicker({format: 'yyyy/mm/dd',});
            });
        </script>                      
                                            
                                            
                                          
                                          <div class="form-group">
                                                    <label for="URL" class="col-sm-2 control-label">Time</label>
                                                    <div class="col-sm-2">
                                                            <!--<input  type="text"  name="event_date" id="Url" placeholder="Page Url" class="form-control">-->
                                                            <input type="text" name="event_time" id="timepickera" placeholder="Event Time" class="form-control">
                                                    </div>
                                            </div>
                                            
                                            
                                            <script type="text/javascript">
           $('#timepickera').timepicker({
    timeFormat: 'h:mm p',
    interval: 30,
    minTime: '00',
    maxTime: '12:00pm',
    defaultTime: '11',
    startTime: '12:00am',
    dynamic: false,
    dropdown: true,
    scrollbar: true
});
        </script>    
                                            
                                              <div class="form-group">
                                                    <label for="Description" class="col-sm-2 control-label">Description</label>
                                            
                                                    <div class="col-sm-10">
                                                    <textarea id="editor1" name="event_deac" ></textarea> 
                                                    </div>
											</div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                    <label class="col-sm-2 control-label">Address</label>
                                                    <div class="col-sm-10">
                                                    <textarea name="Address" id="addr" rows="2" maxlength='160' class="form-control"></textarea>
                                                           
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label class="col-sm-2 control-label">Contact</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" name="Contact" id="Contact" placeholder="Contact" class="form-control">
                                                   
                                                           
                                                    </div>
                                            </div>
                                    <div id="formErornl"></div>
                                
                                            <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Add</button>
                                                    
                                                    <a href="<?php echo base_url()."admin/events"; ?>"><button type="button" class="btn">Cancel</button></a>
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
function validateAdd() {
	var p = document.forms["page"]["event_title"].value;
	var q = document.forms["page"]["event_date"].value;
	var s = document.forms["page"]["Address"].value;
	var t = document.forms["page"]["Contact"].value;
	
	var msg = [];
	
	if (p == null || p == "") {
        msg.push("<div class='alert alert-info'>Enter Event Title</div>");
    }
	if (q == null || q == "") {
        msg.push("<div class='alert alert-info'>Enter Event Date</div>");
    }
	
	
	if (s == null || s == "") {
        msg.push("<div class='alert alert-info'>Enter Address</div>");
    }
	if (t == null || t == "") {
        msg.push("<div class='alert alert-info'>Enter Contact No</div>");
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