<!doctype html>
<html>
<head>
	<meta charset="utf8">
    <title><?php echo $PageTitle;?></title>
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
        <script>
            function confirmDelete(){
                var agree = confirm("Are you sure to delete this Course?");
                if (agree){
                    return true;
                }else{
                    return false;
                }
            }
        </script>


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
                                                    <h3>
                                                            <i class="icon-table"></i>
                                                            Onlice Course
                                                    </h3>
                                                    <h4 class="text-right" style="padding-right: 10px;"><a href="add_course" style="color: #fff;">Add Course</a></h4>
                                            </div>
                                            <div class="box-content nopadding">
                                                <table class="table table-hover table-nomargin dataTable table-bordered">
                                                    <thead>
                                                        <tr>
                                                        <th width="30">Id</th>
                                                        <th width="180">Course Name</th>
                                                        <th width="50">Status</th>
                                                        <th width="80">Updated On</th>
                                                        <th width="80">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
           if (isset($Courses)){
             foreach ($Courses as $course){
				$status="";
					if($course->status==1){
						$status = "Active";
					}
					else{$status = "InActive";}
				   echo "<tr>
					<td>{$course->id_course}</td>
                    <td>{$course->course_name}</td>
					<td>{$status}</td>
					<td>{$course->updated_on}</td>
					<td><a href='".  base_url()."admin/edit_course/{$course->id_course}'>Edit</a> | <a href='".  base_url()."admin/delete_course/{$course->id_course}' onclick='return confirmDelete();'>Delete</a></td>
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