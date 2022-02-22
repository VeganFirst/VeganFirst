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
	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css">
	<!-- Color CSS -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/themes.css">


	<!-- jQuery -->
	<script src="<?php echo base_url()."assets/"; ?>js/jquery.min.js"></script>
	<!-- Nice Scroll -->
	<script src="<?php echo base_url()."assets/"; ?>js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url()."assets/"; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/eakroko.js"></script>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo base_url()."assets/"; ?>img/favicon.ico" />
	<!-- Apple devices Homescreen icon -->
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url()."assets/"; ?>img/apple-touch-icon-precomposed.png" />

</head>

<body class='login'>
    <div class="wrapper">
        <h1><a href="#"><img src="<?php echo base_url()."assets/"; ?>img/logo-big.png" alt="" class='retina-ready' width="59" height="49">Writer Login</a></h1>
        <div class="login-body">
            <h2>SIGN IN</h2>
            <form method="post" class="formLog" action="<?php echo base_url().'writer/login';?>">
                <div class="email">
                 <input type="text" name="writerEmail" placeholder="Email address" class="input-block-level">
                 
                </div>
                <div class="pw">
                    <input type="password" name="writerPassword" placeholder="Password" class="input-block-level">
                    
                </div>
                <div class="submit">
                    <input type="submit" value="Sign me in" class="btn btn-primary">
                </div>
                
            </form>
            
            <?php
                if (isset($LoginErrorMessage)){
                    echo "<div class='alert alert-info'><strong>".$LoginErrorMessage."</strong></div>";
                }
            ?>
            <div id="formEror"></div>
            <div class="forget">&nbsp;
            
            </div>
        </div>
    </div>
	
</body>

</html>