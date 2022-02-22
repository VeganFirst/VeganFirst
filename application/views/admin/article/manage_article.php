<!doctype html>
<html>
<head>
	<meta charset="utf8">
    <title><?php if(isset($PageTitle)) { echo $PageTitle; } else { echo "Vegan"; } ?></title>
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
                var agree = confirm("Are you sure to delete this Article?");
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
                                        <div class="box box-color box-bordered">
                                            <div class="box-title">
                                                    <h3 class="pull-left">
                                                            <i class="icon-table"></i>
                                                            Articles
                                                    </h3>
                                                    <h3 class="pull-right" style="margin-right:20px;">
                                                         <a href="<?php echo base_url().'admin/ExportArticle'?>">  <i class="icon-download-alt"></i>Export Csv</a>
                                                    </h3>
                                            </div>
                                            <div class="box-content nopadding table-responsive ">
                                                <table class="table table-hover table-nomargin dataTable table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Article Id</th>
                                                            <th>Article Name</th>
                                                            <th>Article Author</th>
                                                            <th style="width:60px;">Category</th>
                                                            <th style="width:60px;">Tags</th>
                                                          
                                                            <th  style="width:50px;">Posted On</th>
                                                            <th  style="width:50px;">Updated On</th>
                                                            
                                                            <th   style="width:20px;">Published</th>
                                                            <th   style="width:20px;">Featured</th>
                                                            <th>Views</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    if (isset($Articles)){
                                                        foreach ($Articles as $Article){
															
									if($Article->isPublished==1)
									{	$status ="Yes"; }
									else { $status ="No";	}
									
									if($Article->Featured==1)
									{	$Featured ="Yes"; }
									else { $Featured ="No";	}
								//date_format($date,"Y/m/d H:i:s")
								$updated='-';
								if($Article->updatedTime)
								{
									$date=date_create($Article->updatedTime);
								$updated=date_format($date,'Y-m-d h:i A ');						
								}
								
								if($Article->postTime)
								{
									$date=date_create($Article->postTime);
								$Posted=date_format($date,'Y-m-d h:i A ');						
								}
								$catTitle='';
								$cat = $this->M_Category->getCategoryInfo_art($Article->category);
								if($cat){$catTitle=$cat->CategoryTitle;}
								
                              echo "<tr>
                              <td>{$Article->idArticle}</td>
							  <td>{$Article->PageTitle}</td>
                              <td>{$Article->FirstName} {$Article->LastName}</td>
							  <td>{$catTitle}</td>

							  <td>{$Article->Tags}</td>
							  <td>{$Posted}</td>
							  <td>{$updated}</td>
							  
                              <td>{$status}</td>
							  <td>{$Featured}</td>
							  <td>{$Article->Views}</td>
                              <td><a href='".  base_url()."article/preview/{$Article->Url}' target='_blank'>Preview</a> | <a href='".  base_url()."admin/edit_article/{$Article->idArticle}'>Edit</a> | <a href='".  base_url()."admin/delete_article/{$Article->idArticle}' onclick='return confirmDelete();'>Delete</a></td>
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