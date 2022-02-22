<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Special Offers</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no" />
			<script>
                var base_url = "<?php echo base_url(); ?>";
            </script>
	<link rel="icon" href="<?php echo base_url()."assets/frontend/"; ?>images/favicon.ico">
		<link rel="shortcut icon" href="<?php echo base_url()."assets/frontend/"; ?>images/favicon.ico" />
		<link rel="stylesheet" href="<?php echo base_url()."assets/frontend/"; ?>css/style.css">
		<script src="<?php echo base_url()."assets/frontend/"; ?>js/jquery.js"></script>
		<script src="<?php echo base_url()."assets/frontend/"; ?>js/jquery-migrate-1.2.1.js"></script>
		<script src="<?php echo base_url()."assets/frontend/"; ?>js/script.js"></script>
		<script src="<?php echo base_url()."assets/frontend/"; ?>js/superfish.js"></script>
		<script src="<?php echo base_url()."assets/frontend/"; ?>js/jquery.ui.totop.js"></script>
		<script src="<?php echo base_url()."assets/frontend/"; ?>js/jquery.equalheights.js"></script>
		<script src="<?php echo base_url()."assets/frontend/"; ?>js/jquery.mobilemenu.js"></script>
		<script src="<?php echo base_url()."assets/frontend/"; ?>js/jquery.easing.1.3.js"></script>
		<script>
		$(document).ready(function(){
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
    
    <script type="text/javascript">
    	$(document).ready(function() {
            $(document.body).on("click", ".toggle-btn", function(){
				$('.login-form').css("display","none");
				$('.signup-form').css("display","block");
				$(this).children().text("Login Account");
				$(this).addClass("login-toggle-btn");
				$(this).removeClass('toggle-btn');
			});
			$(document.body).on("click", ".login-toggle-btn", function(){
				 $('.signup-form').css("display","none");
				$('.login-form').css("display","block");
				$(this).children().text("Create a New Account");
				$(this).removeClass('login-toggle-btn');
				$(this).addClass("toggle-btn");
			});
        });
    </script>
	</head>
	<body>
<!--==============================header=================================-->
		<header>
			<div class="container_12">
				<div class="grid_12">
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<?php $this->load->view("frontend/navigation"); ?>
						</nav>
						<div class="clear"></div>
					</div>
				</div>
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="<?php echo base_url()."assets/frontend/"; ?>images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
				</div>
			</div>
		</header>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="grid_8">
					<div class="login-body">
                        <h5>SIGN IN WITH</h5>
                        <form action="#" method='get'>
                            <div class="pull-left social-img">
                                <a href='<?php echo $FacebookLoginURL; ?>'><img width="200" src='<?php echo base_url(); ?>assets/images/facebook-login-button.png'></a>
                                <a href='#'><img width="200" src='<?php echo base_url(); ?>assets/images/sign-in-button.png'></a>
                                <p>We will post anything without permission</p>
                            </div>
                            <div class="pull-left loginline-container">
                                <p class="login-line"></p>
                                <p class="login-or">OR</p>
                                <p class="login-line"></p>
                            </div>
                            <div class="pull-right login-container">
                                <div class="login-form">
                                    <div class="email controls">
                                    <input type="text" name='uemail' placeholder="Email address" class='input-block-level' data-rule-required="true" data-rule-email="true">
                                    </div>
                                    
                                    <div class="pw controls">
                                        <input type="password" name="upw" placeholder="Password" class='input-block-level' data-rule-required="true">
                                    </div>
                                    <div class="submit">
                                        <input type="submit" value="Sign in" class='btn'>
                                    </div>
                                    
                                </div>
                                
                                
                                <div class="signup-form">
                                    <div class="fname controls">
                                    <input type="text" name='fname' placeholder="Full Name" class='input-block-level' data-rule-required="true" data-rule-email="true">
                                    </div>
                                    <div class="email controls">
                                    <input type="text" name='uemail' placeholder="Email address" class='input-block-level' data-rule-required="true" data-rule-email="true">
                                    </div>
                                    
                                    <div class="pw controls">
                                        <input type="password" name="upw" placeholder="Password" class='input-block-level' data-rule-required="true">
                                    </div>
                                    <div class="submit">
                                        <input type="submit" value="Sign up" class='btn'>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                        <div class="forget">
                            <a href="#"><span>Travel and Tours</span></a>
                            <a class="toggle-btn"><span>Create a New Account</span></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
				</div>
                
				<div class="grid_3 prefix_1">
					<h5>Other Departures</h5>
					<ul class="list">
					</ul>
					<a href="#" class="link1">VIEW A<span class="low">ll</span></a>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<?php
                    $this->load->view("frontend/footer");
                ?>
	</body>
</html>