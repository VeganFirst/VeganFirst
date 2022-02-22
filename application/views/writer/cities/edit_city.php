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
<script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>

<script src="<?php echo base_url()."assets/"; ?>js/plugins/bootbox/jquery.bootbox.js"></script>
<script src="<?php echo base_url()."assets/"; ?>js/plugins/chosen/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- dataTables -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/themes.css">
	<link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
    <link href="<?php echo base_url()."assets/"; ?>css/editor.css" type="text/css" rel="stylesheet"/>
    	

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
                            <h1>Add City</h1>
                    </div>
            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> City Details</h3>
                            </div>
                            <div class="box-content">
                            <?php    if (isset($Message)){
          echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
    } ?>
<form  action="#" method="POST" class="form-horizontal form-bordered" onSubmit="return validateAdd()" name="page">
      
  <div class="form-group">
      <label for="PageTitle" class="col-sm-2 control-label">City Name</label>
      <div class="col-sm-10">
         <input type="text" value="<?php echo $City->name; ?>" name="name" id="PageTitle" placeholder="City Title" class="form-control" >
      </div>
  </div>
  <div class="form-group">
      <label for="PageTitle" class="col-sm-2 control-label">City URL</label>
       <div class="col-sm-10">
       <input type="text" value="<?php echo $City->url; ?>" name="url" id="Url" placeholder="City Url" class="form-control">
       </div>
  </div>
                                        
  <div class="form-group">
       <label for="isActive" class="col-sm-2 control-label">Status </label>
       <div class="col-sm-10">
       <select required name="status" id="isActive" class="form-control">
       <option value="1" <?php if($City->status) echo "selected='selected'"; ?>>Active</option>
       <option value="0" <?php if(!$City->status) echo "selected='selected'"; ?>>Inactive</option>
       </select>
       </div>
  </div>
  <div class="form-actions">
         <button type="submit" class="btn btn-primary">Update City</button>
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
<script type="text/javascript">
$(document).ready(function() {

$("#PageTitle").change(function() {
        var string = $("#PageTitle").val();
clean = string.replace(/(^\-+|[^a-zA-Z0-9\/_| -]+|\-+$)/g, '')
            .toLowerCase()
            .replace(/[\/_| -]+/g, '-')
;
$('#Url').val(clean);
console.log(clean);

    })


});


function validateAdd() {
	var z = document.forms["page"]["PageTitle"].value;
	var y = document.forms["page"]["catDesc"].value;
	//var x = document.forms["page"]["answer"].value;
	var msg = [];
	
	if (z == null || z == "") {
        msg.push("<div class='alert alert-info'>Enter City Title</div>");
    }
	if (y == null || y == "") {
        msg.push("<div class='alert alert-info'>Enter City Description</div>");
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