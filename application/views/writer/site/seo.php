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
        
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/jquery.dataTables.min.js"></script>
    
    
    
    	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/TableTools.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/ColReorder.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/ColVis.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/datatable/jquery.dataTables.columnFilter.js"></script>
    
    	<script src="<?php echo base_url()."assets/"; ?>js/plugins/chosen/chosen.jquery.min.js"></script>
        



<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
-->
<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/35/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/bootstrap-responsive.min.css">
	<!-- jQuery UI -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/jquery-ui/smoothness/jquery.ui.theme.css">
	<!-- dataTables -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/datatable/TableTools.css">
 
 
 	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/chosen/chosen.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/themes.css">
    	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/plugins/datepicker/datepicker.css">


	


      
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
               <h1>Manage Seo</h1>
            </div>
		</div>
        
       <div class="row-fluid">
           <div class="span12">
             <div class="box box-bordered box-color">
                <div class="box-title">
                    <h3><i class="icon-th-list"></i>Content</h3>
                </div>
                <div class="box-content">
                            <?php if(isset($Messageupload)): echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$Messageupload."</h4></div>"; endif?>
                            
                            
                            
                <form method="POST" class="form-horizontal form-bordered formLog" enctype="multipart/form-data" >
                
            
<h3 class="text-center">Home Page</h3>             
<div class="form-group">
     <label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
     <div class="col-sm-10">
     <input  type="text"  name="HomeMetaTitle" id="MetaTitle" value="<?php echo $Home->MetaTitle; ?>" placeholder="MetaTitle" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
     <div class="col-sm-10">
     <input  type="text"  name="HomeMetaKeyword" id="MetaKeyword" value="<?php echo $Home->MetaKeyword; ?>" placeholder="MetaKeyword" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
     <div class="col-sm-10">
     <textarea name="HomeMetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"><?php echo $Home->MetaDescription; ?></textarea>
     </div>
</div>


<h3 class="text-center">Contact Us Page</h3>             
<div class="form-group">
     <label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
     <div class="col-sm-10">
     <input  type="text"  name="ConMetaTitle" id="MetaTitle" value="<?php echo $Contact->MetaTitle; ?>" placeholder="MetaTitle" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
     <div class="col-sm-10">
     <input  type="text"  name="ConMetaKeyword" id="MetaKeyword" value="<?php echo $Contact->MetaKeyword; ?>" placeholder="MetaKeyword" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
     <div class="col-sm-10">
     <textarea name="ConMetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"><?php echo $Contact->MetaDescription; ?></textarea>
     </div>
</div>



<h3 class="text-center">About Us Page</h3>             
<div class="form-group">
     <label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
     <div class="col-sm-10">
     <input  type="text"  name="AboMetaTitle" id="MetaTitle" value="<?php echo $About->MetaTitle; ?>" placeholder="MetaTitle" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
     <div class="col-sm-10">
     <input  type="text"  name="AboMetaKeyword" id="MetaKeyword" value="<?php echo $About->MetaKeyword; ?>" placeholder="MetaKeyword" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
     <div class="col-sm-10">
     <textarea name="AboMetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"><?php echo $About->MetaDescription; ?></textarea>
     </div>
</div>


<h3 class="text-center">Advertise Page</h3>             
<div class="form-group">
     <label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
     <div class="col-sm-10">
     <input  type="text"  name="AdvtMetaTitle" id="MetaTitle" value="<?php echo $Advt->MetaTitle; ?>" placeholder="MetaTitle" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
     <div class="col-sm-10">
     <input  type="text"  name="AdvtMetaKeyword" id="MetaKeyword" value="<?php echo $Advt->MetaKeyword; ?>" placeholder="MetaKeyword" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
     <div class="col-sm-10">
     <textarea name="AdvtMetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"><?php echo $Advt->MetaDescription; ?></textarea>
     </div>
</div>

<h3 class="text-center">Always Hungry</h3>             
<div class="form-group">
     <label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
     <div class="col-sm-10">
     <input  type="text"  name="RecpMetaTitle" id="MetaTitle" value="<?php echo $Recp->MetaTitle; ?>" placeholder="MetaTitle" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
     <div class="col-sm-10">
     <input  type="text"  name="RecpMetaKeyword" id="MetaKeyword" value="<?php echo $Recp->MetaKeyword; ?>" placeholder="MetaKeyword" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
     <div class="col-sm-10">
     <textarea name="RecpMetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"><?php echo $Recp->MetaDescription; ?></textarea>
     </div>
</div>


<h3 class="text-center">Restaurant</h3>             
<div class="form-group">
     <label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
     <div class="col-sm-10">
     <input  type="text"  name="RestMetaTitle" id="MetaTitle" value="<?php echo $Rest->MetaTitle; ?>" placeholder="MetaTitle" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
     <div class="col-sm-10">
     <input  type="text"  name="RestMetaKeyword" id="MetaKeyword" value="<?php echo $Rest->MetaKeyword; ?>" placeholder="MetaKeyword" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
     <div class="col-sm-10">
     <textarea name="RestMetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"><?php echo $Rest->MetaDescription; ?></textarea>
     </div>
</div>

<h3 class="text-center">Newsletter</h3>             
<div class="form-group">
     <label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
     <div class="col-sm-10">
     <input  type="text"  name="NewsMetaTitle" id="MetaTitle" value="<?php echo $News->MetaTitle; ?>" placeholder="MetaTitle" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
     <div class="col-sm-10">
     <input  type="text"  name="NewsMetaKeyword" id="MetaKeyword" value="<?php echo $News->MetaKeyword; ?>" placeholder="MetaKeyword" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
     <div class="col-sm-10">
     <textarea name="NewsMetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"><?php echo $News->MetaDescription; ?></textarea>
     </div>
</div>

<h3 class="text-center">Events</h3>             
<div class="form-group">
     <label for="MetaTitle" class="col-sm-2 control-label">MetaTitle</label>
     <div class="col-sm-10">
     <input  type="text"  name="EveMetaTitle" id="MetaTitle" value="<?php echo $Eve->MetaTitle; ?>" placeholder="MetaTitle" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaKeyword" class="col-sm-2 control-label">MetaKeyword</label>
     <div class="col-sm-10">
     <input  type="text"  name="EveMetaKeyword" id="MetaKeyword" value="<?php echo $Eve->MetaKeyword; ?>" placeholder="MetaKeyword" class="form-control">
     </div>
</div>
<div class="form-group">
     <label for="MetaDescription" class="col-sm-2 control-label">MetaDescription</label>
     <div class="col-sm-10">
     <textarea name="EveMetaDescription" id="MetaDescription" rows="2" maxlength='160' class="form-control"><?php echo $Eve->MetaDescription; ?></textarea>
     </div>
</div>             
             
             <div id="formEror"></div>
                                <?php    if (isset($Message)){
                    echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
                } ?>
                                            <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    
                                                    <a href="<?php echo base_url()."writer/manage_recipes"; ?>"><button type="button" class="btn">Cancel</button></a>
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