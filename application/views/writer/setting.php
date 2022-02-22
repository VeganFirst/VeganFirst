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
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap.min.css">
	<!-- Bootstrap responsive -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- dataTables -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/datatable/TableTools.css">
	<!-- chosen -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/chosen/chosen.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/themes.css">
        
        <!-- Datepicker -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/datepicker/datepicker.css">

	<!-- jQuery -->
	<script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
	<!-- Nice Scroll -->
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- imagesLoaded -->
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/imagesLoaded/jquery.imagesloaded.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/jquery-ui/jquery.ui.core.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/jquery-ui/jquery.ui.widget.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/jquery-ui/jquery.ui.mouse.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/jquery-ui/jquery.ui.resizable.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/jquery-ui/jquery.ui.sortable.min.js"></script>
	<!-- slimScroll -->
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>
	<!-- Bootbox -->
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/bootbox/jquery.bootbox.js"></script>
	<!-- dataTables -->
        
        <!-- Datepicker -->
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datepicker/bootstrap-datepicker.js"></script>
        
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/TableTools.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/ColReorder.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/ColVis.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
	<!-- Chosen -->
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/chosen/chosen.jquery.min.js"></script>

	<!-- Theme framework -->
	<script src="<?php echo base_url()."assets/"; ?>js/eakroko.min.js"></script>
	<!-- Theme scripts -->
	<script src="<?php echo base_url()."assets/"; ?>js/application.min.js"></script>
        
	<!-- Just for demonstration -->
	<script src="<?php echo base_url()."assets/"; ?>js/demonstration.min.js"></script>
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
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
                            <h1>Account Settings</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Update Account Information</h3>
                            </div>
                            
                            
                            <div class="box-content nopadding">
                            <form action="#" method="POST" class="form-horizontal form-bordered">
                                            
                           <div class="control-group">
                                <label class="control-label">First Name</label>
                                <div class="controls">
                                <input value="<?php echo $Admin->FirstName; ?>" type="text" name="FirstName" placeholder="First name" class="input-large">
                                </div>
                            </div>
                                        
                           <div class="control-group">
                               <label class="control-label">Last Name</label>
                               <div class="controls">
                               <input value="<?php echo $Admin->LastName; ?>" type="text" name="LastName" class="input-large">
                               </div>
                           </div>
                           
                           
                           <div class="control-group">
                               <label class="control-label">Phone</label>
                               <div class="controls">
                               <input value="<?php echo $Admin->Phone; ?>" type="text" name="Phone" class="input-large">
                               </div>
                           </div>
                                        
                           <div class="control-group">
                           		<label class="control-label">Email</label>
                                <div class="controls">
                                <input value="<?php echo $Admin->Email; ?>" type="email" name="Email" class="input-large">
                                 </div>
                          </div>
                                      
                          <div class="control-group">
                               <label class="control-label">Password</label>
                               <div class="controls">
                               <input value="<?php echo $Admin->Password; ?>" type="password" name="Password" class="input-large">
                                </div>
                         </div>
                          <div class="form-actions">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="<?php echo base_url().'writer/dashboard'?>"><button type="button" class="btn">Cancel</button></a>
                                            </div>
                                    </form>
                                     <?php if(isset($Message)): echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$Message."</h4></div>"; endif?>
                            </div>
                           
                            </div>
                            
                            
                    </div>
            </div>
            </div>
            </div>
    </div>
	
</body>

</html>