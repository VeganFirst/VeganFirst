<!doctype html>
<html>
	<head>
		<meta charset="utf8">
		<title><?php echo $PageTitle; ?></title>
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
			<script>
				function confirmDelete(){
					var agree = confirm("Are you sure to delete this Writer?");
					if (agree){
						return true;
					}else{
						return false;
					}
				}
			</script>
		<!-- Just for demonstration -->
		<script src="<?php echo base_url()."assets/"; ?>js/demonstration.min.js"></script>
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.ico" />
		<!-- Apple devices Homescreen icon -->
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
							<h1>Dashboard</h1>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="box box-bordered box-color">
								<div class="box-title">
									<h3><i class="icon-th-list"></i> Dashboard</h3>
								</div>
								<div class="box-content">
									<div class="row-fluid"> 
										
                               
                                        <div class="span2 text-center">
											<i class="icon-user" style="font-size:72px;"></i>
											<h4><a href="<?php echo base_url(); ?>admin/subscriber">Subscriber</a></h4>
											<h4><?php echo count($Subs); ?></h4>
										</div>
										<div class="span2 text-center">
											<i class="icon-user" style="font-size:72px;"></i>
											<h4><a href="<?php echo base_url(); ?>admin/users">Users</a></h4>
											<h4><?php echo count($Users); ?></h4>
										</div>
										<div class="span2 text-center">
											<i class="icon-user" style="font-size:72px;"></i>
											<h4><a href="<?php echo base_url(); ?>admin/manage_author">Authors</a></h4>
											<h4><?php echo count($Authors); ?></h4>
										</div>
										<div class="span2 text-center">
											<i class="icon-user" style="font-size:72px;"></i>
											<h4><a href="<?php echo base_url(); ?>admin/manage_columnist">Columnist</a></h4>
											<h4><?php echo count($Columnist); ?></h4>
										</div>
                                        <div class="span2 text-center">
											<img src="<?php echo base_url();?>assets/images/writer.png" style="max-width: 70px;">
											<h4><a href="<?php echo base_url(); ?>admin/manage_writer">Publisher</a></h4>
											<h4><?php echo count($Writers); ?></h4>
										</div>
                                        <div class="span2 text-center">
											<img src="<?php echo base_url();?>assets/images/article.png" style="max-width: 70px;">
											<h4><a href="<?php echo base_url(); ?>admin/events">Events</a></h4>
											<h4><?php echo count($Events); ?></h4>
										</div>
                                        
                                        
                                        
									</div>
									<div class="row-fluid" style="margin-top:20px;">
						   				<div class="span2 text-center">
											<i class="icon-food" style="font-size:72px;"></i>
											<h4><a href="<?php echo base_url(); ?>admin/manage_recipes">Recipes</a></h4>
											<h4><?php echo count($Recipe); ?></h4>
										</div>
										<div class="span2 text-center">
											<img src="<?php echo base_url();?>assets/images/restaurant.png" style="max-width: 70px;">
											<h4><a href="<?php echo base_url(); ?>admin/manage_restaurant">Restaurant</a></h4>
											<h4><?php echo count($Restaurant); ?></h4>
										</div>
										<div class="span2 text-center">
											<img src="<?php echo base_url();?>assets/images/article.png" style="max-width: 70px;">
											<h4><a href="<?php echo base_url(); ?>admin/manage_article">Article</a></h4>
											<h4><?php echo count($Article); ?></h4>
										</div>
										
									</div>
									
								</div>
                                <div class="box-content">
									
                                   <?php
        $sql="Select * from viewstat";
		$Query = $this->db->query($sql);
		$Result = $Query->result();					   
								   ?>
                                   
         <table class="table table-hover table-nomargin table-bordered" style="max-width:500px;">
                                                    <thead>
                                                        <tr>
                                                        <th>Page</th>
                                                        <th>Views</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($Result as $rs):?>
                                                    <tr>
                                                    <td><?php echo $rs->name;?></td>
                                                    <td style="border-right: 1px solid #ddd !important;"><?php echo $rs->Views;?></td>
                                                    </tr>
                                                    <?php endforeach;?>
                                                    </tbody>
                                     </table>
                               
                                   
                                    
                                    </div>
                                
                                
                                
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>