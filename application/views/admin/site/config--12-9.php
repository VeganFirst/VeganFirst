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
            $this->load->view("admin/navigation");
        ?>
<div class="container-fluid" id="content">
  <div id="main" style="margin-left: 0px;">
      <div class="container-fluid">		
        <div class="page-header">
            <div class="pull-left">
               <h1>Manage Home Page</h1>
            </div>
		</div>
        
       <div class="row-fluid">
           <div class="span12">
             <div class="box box-bordered box-color">
                <div class="box-title">
                    <h3><i class="icon-th-list"></i> Home Content</h3>
                </div>
                <div class="box-content">
                            <?php if(isset($Messageupload)): echo "<div class='alert alert-info' style='text-align: center;padding: 5px;'><h4>".$Messageupload."</h4></div>"; endif?>
                            <?php 
							$Articlsl=0; $Columnist1=0; $Editor=0;
							$Prod1=0; $Prod2=0; $Prod3=0; $Prod4=0; $Prod5=0; $Prod6=0; $Prod7=0; $Prod8=0; $Prod9=0;
 							foreach($Config as $key => $val)
							{
							 if($val->path == 'home/Article')
							 {
								$Articlsl= $val->value;
							 }
							 if($val->path == 'home/Columnist')
							 {
								$Columnist1= $val->value;
							 }
							 if($val->path == 'home/Editor')
							 {
								$Editor= $val->value;
							 }
							 if($val->path == 'home/Product/1')
							 {
								$Prod1= $val->value;
							 }
							 if($val->path == 'home/Product/2')
							 {
								$Prod2= $val->value;
							 }
							 if($val->path == 'home/Product/3')
							 {
								$Prod3= $val->value;
							 }
							 if($val->path == 'home/Product/4')
							 {
								$Prod4= $val->value;
							 }
							 if($val->path == 'home/Product/5')
							 {
								$Prod5= $val->value;
							 }
							 if($val->path == 'home/Product/6')
							 {
								$Prod6= $val->value;
							 }
							 if($val->path == 'home/Product/7')
							 {
								$Prod7= $val->value;
							 }
							 if($val->path == 'home/Product/8')
							 {
								$Prod8= $val->value;
							 }
							 if($val->path == 'home/Product/9')
							 {
								$Prod9= $val->value;
							 }




							}
							?>
                            
                            
                <form method="POST" class="form-horizontal form-bordered formLog" enctype="multipart/form-data" >
                
            <div class="form-group">
                <label for="Article" class="col-sm-2 control-label">Home Article</label>
                
                <div class="col-sm-10">
                   <select name="home/Article" title="Article" id="Article" class="form-control" >
         			<option value="">Select Article..</option>                                                  
         <?php
         if(isset($Articles))
		{
			foreach($Articles as $Articl)
			{ ?>
			<option value="<?php echo $Articl->idArticle; ?>" <?php if($Articlsl==$Articl->idArticle){ echo 'selected';}?>><?php echo $Articl->PageTitle; ?></option>
		<?	}	
		}
		?>
                     </select>
                </div>
             </div>
             
             <div class="form-group">
                <label for="Article" class="col-sm-2 control-label">Home Editorial</label>
                
                <div class="col-sm-10">
                   <select name="home/Editor" title="Article" id="Article" class="form-control" >
         			<option value="">Select Article..</option>                                                  
         <?php
         if(isset($Articles))
		{
			foreach($Articles as $Articl)
			{ ?>
			<option value="<?php echo $Articl->idArticle; ?>" <?php if($Editor==$Articl->idArticle){ echo 'selected';}?>><?php echo $Articl->PageTitle; ?></option>
		<?	}	
		}
		?>
                     </select>
                </div>
             </div>
             
             
             <div class="form-group">
                <label for="Article" class="col-sm-2 control-label">Home Columnist</label>
                
                <div class="col-sm-10">
                   <select name="home/Columnist" title="Article" id="Article" class="form-control" >
         			<option value="">Select Columnist..</option>                                                  
         <?php
         if(isset($Columnist))
		{
			foreach($Columnist as $Colum)
			{ ?>
			<option value="<?php echo $Colum->idColumnist; ?>" <?php if($Columnist1==$Colum->idColumnist){ echo 'selected';}?>><?php echo $Colum->Name; ?></option>
		<?	}	
		}
		?>
                     </select>
                </div>
             </div>
             
             
             
             
             <div class="form-group">
                <label for="Article" class="col-sm-2 control-label">Home Product 1</label>
                
                <div class="col-sm-10">
                   <select name="home/Product/1" title="Article" id="Article" class="form-control" >
         			<option value="">Select Product..</option>                                                  
         <?php
         if(isset($Products))
		{
			foreach($Products as $Product)
			{ ?>
			<option value="<?php echo $Product->idProduct; ?>" <?php if($Prod1==$Product->idProduct){ echo 'selected';}?>><?php echo $Product->PageTitle; ?></option>
		<?	}	
		}
		?>
                     </select>
                </div>
             </div>
             
             <div class="form-group">
                <label for="Article" class="col-sm-2 control-label">Home Product 2</label>
                
                <div class="col-sm-10">
                   <select name="home/Product/2" title="Article" id="Article" class="form-control" >
         			<option value="">Select Product..</option>                                                  
         <?php
         if(isset($Products))
		{
			foreach($Products as $Product)
			{ ?>
			<option value="<?php echo $Product->idProduct; ?>" <?php if($Prod2==$Product->idProduct){ echo 'selected';}?>><?php echo $Product->PageTitle; ?></option>
		<?	}	
		}
		?>
                     </select>
                </div>
             </div>
             
             <div class="form-group">
                <label for="Article" class="col-sm-2 control-label">Home Product 3</label>
                
                <div class="col-sm-10">
                   <select name="home/Product/3" title="Article" id="Article" class="form-control" >
         			<option value="">Select Product..</option>                                                  
         <?php
         if(isset($Products))
		{
			foreach($Products as $Product)
			{ ?>
			<option value="<?php echo $Product->idProduct; ?>" <?php if($Prod3==$Product->idProduct){ echo 'selected';}?>><?php echo $Product->PageTitle; ?></option>
		<?	}	
		}
		?>
                     </select>
                </div>
             </div>
             
             <div class="form-group">
                <label for="Article" class="col-sm-2 control-label">Home Product 4</label>
                
                <div class="col-sm-10">
                   <select name="home/Product/4" title="Article" id="Article" class="form-control" >
         			<option value="">Select Product..</option>                                                  
         <?php
         if(isset($Products))
		{
			foreach($Products as $Product)
			{ ?>
			<option value="<?php echo $Product->idProduct; ?>" <?php if($Prod4==$Product->idProduct){ echo 'selected';}?>><?php echo $Product->PageTitle; ?></option>
		<?	}	
		}
		?>
                     </select>
                </div>
             </div>
             
             <div class="form-group">
                <label for="Article" class="col-sm-2 control-label">Home Product 5</label>
                
                <div class="col-sm-10">
                   <select name="home/Product/5" title="Article" id="Article" class="form-control" >
         			<option value="">Select Product..</option>                                                  
         <?php
         if(isset($Products))
		{
			foreach($Products as $Product)
			{ ?>
			<option value="<?php echo $Product->idProduct; ?>" <?php if($Prod5==$Product->idProduct){ echo 'selected';}?>><?php echo $Product->PageTitle; ?></option>
		<?	}	
		}
		?>
                     </select>
                </div>
             </div>
             
             <div class="form-group">
                <label for="Article" class="col-sm-2 control-label">Home Product 6</label>
                
                <div class="col-sm-10">
                   <select name="home/Product/6" title="Article" id="Article" class="form-control" >
         			<option value="">Select Product..</option>                                                  
         <?php
         if(isset($Products))
		{
			foreach($Products as $Product)
			{ ?>
			<option value="<?php echo $Product->idProduct; ?>" <?php if($Prod6==$Product->idProduct){ echo 'selected';}?>><?php echo $Product->PageTitle; ?></option>
		<?	}	
		}
		?>
                     </select>
                </div>
             </div>
             
             <div class="form-group">
                <label for="Article" class="col-sm-2 control-label">Home Product 7</label>
                
                <div class="col-sm-10">
                   <select name="home/Product/7" title="Article" id="Article" class="form-control" >
         			<option value="">Select Product..</option>                                                  
         <?php
         if(isset($Products))
		{
			foreach($Products as $Product)
			{ ?>
			<option value="<?php echo $Product->idProduct; ?>" <?php if($Prod7==$Product->idProduct){ echo 'selected';}?>><?php echo $Product->PageTitle; ?></option>
		<?	}	
		}
		?>
                     </select>
                </div>
             </div>
             
             <div class="form-group">
                <label for="Article" class="col-sm-2 control-label">Home Product 8</label>
                
                <div class="col-sm-10">
                   <select name="home/Product/8" title="Article" id="Article" class="form-control" >
         			<option value="">Select Product..</option>                                                  
         <?php
         if(isset($Products))
		{
			foreach($Products as $Product)
			{ ?>
			<option value="<?php echo $Product->idProduct; ?>" <?php if($Prod8==$Product->idProduct){ echo 'selected';}?>><?php echo $Product->PageTitle; ?></option>
		<?	}	
		}
		?>
                     </select>
                </div>
             </div>
             
             <div class="form-group">
                <label for="Article" class="col-sm-2 control-label">Home Product 9</label>
                
                <div class="col-sm-10">
                   <select name="home/Product/9" title="Article" id="Article" class="form-control" >
         			<option value="">Select Product..</option>                                                  
         <?php
         if(isset($Products))
		{
			foreach($Products as $Product)
			{ ?>
			<option value="<?php echo $Product->idProduct; ?>" <?php if($Prod9==$Product->idProduct){ echo 'selected';}?>><?php echo $Product->PageTitle; ?></option>
		<?	}	
		}
		?>
                     </select>
                </div>
             </div>
             
             
             
             
             
             
             <div id="formEror"></div>
                                <?php    if (isset($Message)){
                    echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
                } ?>
                                            <div class="form-actions">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    
                                                    <a href="<?php echo base_url()."admin/manage_recipes"; ?>"><button type="button" class="btn">Cancel</button></a>
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