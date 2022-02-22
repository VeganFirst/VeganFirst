<!doctype html>
<html>
<head>
	<meta charset="utf8">
    <title><?php echo $MetaTitle;?></title>
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
                var agree = confirm("Are you sure to delete this Restaurant?");
                if (agree){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
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
						<h1>Dashboard</h1>
					</div>
					
				</div>
				
				<div class="row-fluid">
                                    <div class="span12">
                                        <div class="box box-color box-bordered">
                                            <div class="box-title">
                                                    <h3>
                                                            <i class="icon-table"></i>
                                                            Restaurant
                                                    </h3>
                                                    
                                                    
                                            </div>
                                            <div class="box-content nopadding">
                                                <table class="table table-hover table-nomargin dataTable table-bordered">
                                  <thead>
                                  <tr>
                                  <th width="30px;">Id</th>
                                   <th width="30px;">Logo</th>
                                   <th>Restaurant Name</th>
                                   <th width="20px;">100% Vegan</th>
                                   <th width="20px;">Type</th>
                                   <th width="20px;">Aded on</th>
                                   <th width="20px;">updated on</th>
                                   
                                   <th width="20px;">Published</th>
                                    <th width="100px;">Actions</th>
                                    </tr>
                                  </thead>
                                 <tbody>
           <?php
           if (isset($Articles)){
           foreach ($Articles as $Article){
			   $iurl= base_url()."media/upload/restaurant/";
			   
			   if($Article->isActive==1)
									{	$status ="Yes"; }
									else { $status ="No";	}
									
				if($Article->isVegan==1)
									{	$isPremium ="Yes"; }
									else { $isPremium ="No";	}
			   
			   
           echo "<tr>
		   <td>{$Article->idRestaurant}</td>
		   <td> <img src='$iurl$Article->Logo' class='img-responsive' style='max-width: 50px;'> </td>
           <td>{$Article->restaurantName}</td>
		   <td>{$isPremium}</td>
		   <td>{$Article->category}</td>
		   <td>{$Article->postTime}</td>
		   <td>{$Article->updatedAt}</td>
		   
                                                                                            <td>{$status}</td>
		   <td><a href='". base_url()."restaurants/{$Article->Url}' target='_blank'>View</a> | <a href='".  base_url()."writer/edit_restaurant/{$Article->idRestaurant}'>Edit</a><br/><a href='".base_url()."writer/add_images/{$Article->idRestaurant}' class='btn center-block'>Photos</a></td>
           </tr>";
           }
       }
  ?>
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