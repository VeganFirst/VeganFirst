<!doctype html>
<html amp lang="en">
<head>
	<meta charset="utf-8" />
<script async src="https://cdn.ampproject.org/v0.js"></script>
	<link rel="apple-touch-icon" sizes="76x76" href="#">
	<link rel="icon" type="image/png" href="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php if(isset($MetaTitle)): echo $MetaTitle; elseif(isset($PageTitle)): echo $PageTitle; else: echo $Author->FirstName." ".$Author->LastName; endif ?></title>

	
   <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<link rel="canonical" href="<?php echo current_url();?>">

</head>

<body>

<div class="wrapper">
	
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
            <div class="row">
                
               
                <div class="col-xs-4 mt-5">
                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url()."assetsNew/mobile/"; ?>img/logo.png" class="img-responsive center-block" style="width:80px;"></a>
                </div>
                            
            </div>
    </div>
</nav>
	<!-- header ends here -->