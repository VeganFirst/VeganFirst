<?php $this->load->view("admin/templates/header"); ?>
	<script type="text/javascript">
		function init() 
		{
			$('input[type="text"]').val('');
			$('input[type="email"]').val('');
			$('input[type="password"]').val('');
		}
		window.onload = init;
	</script>
	<body class='login'>
		<div class="wrapper">
			<h1>
				<a href="#">
					<img src="<?php echo base_url()."assets/"; ?>img/logo-big.png" alt="" class='retina-ready' width="59" height="49">Admin Login
				</a>
			</h1>
			<div class="login-body">
				<h2>SIGN IN</h2>
				<form method="post" autocomplete="off"  name="myForm" onSubmit="return validateForm()" >
				<input type="hidden" name="redirect" value="<?php echo $this->session->userdata('Redirect'); ?>">
					<div class="form-group">
						<input type="text" id="user" value="" name="email" placeholder="Email address" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="Password" class="form-control">
						
					</div>
					<div class="submit">
						<input type="submit" value="Sign me in" class="btn btn-primary">
					</div>
				</form>
				<div id="formEror"></div>
				<?php
					if (isset($LoginErrorMessage))
					{
						echo "<div class='alert alert-info'><strong>".$LoginErrorMessage."</strong></div>";
					}
				?>
				<div class="forget">
					<a  href="javascript:void(0);" id='reset'><span>Reset Password</span></a>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		document.getElementById("reset").onclick = function ()
		{
			location.href = "<?php echo base_url(); ?>admin/reset_password";
		};
		function validateForm() 
		{
			var z = document.forms["myForm"]["email"].value;
			var y = document.forms["myForm"]["password"].value;
		
			var atpos = z.indexOf("@");
			var dotpos = z.lastIndexOf(".");
			
			var msg = [];
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) 
			{
				msg.push("<div class='alert alert-info'>Enter valid e-mail address</div>");
			}
			if (y == null || y == "") 
			{
				msg.push("<div class='alert alert-info'>Enter Password</div>");
			}
			if(msg.length > 0)
			{
				$('div#formEror').html('');
				for(var i=0; i< msg.length; i++)
				{
					$('div#formEror').append(msg[i]);
				}
				return false;
			}
		}
	</script>
</html>