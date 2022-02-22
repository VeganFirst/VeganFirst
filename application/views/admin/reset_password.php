<?php
$this->load->view("admin/templates/header");
?>
<body class='login'>
    <div class="wrapper">
        <h1><a href="#"><img src="<?php echo base_url()."assets/"; ?>img/logo-big.png" alt="" class='retina-ready' width="59" height="49">Admin Login</a></h1>
        <div class="login-body">
            <h2>Reset Password</h2>
            <form method="post" name="myForm" onSubmit="return validateForm()" >
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email address" class="form-control">
                </div>
               
                <div class="submit">
                    <input type="submit" value="Reset" class="btn btn-primary">
                </div>
            </form>
            <div id="formEror"></div>
            <?php
                if (isset($LoginErrorMessage)){
                    echo "<div class='alert alert-info'><strong>".$LoginErrorMessage."</strong></div>";
                }
					
					
            ?>
            
            <div class="forget">
                <a href="<?php echo base_url(); ?>admin/" id='login'><span>Login</span></a>
            </div>
        </div>
    </div>
	
</body>


</html>
<script type="text/javascript">
function validateForm() {
 
	
	var z = document.forms["myForm"]["email"].value;
//	var y = document.forms["myForm"]["password"].value;
	
	var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
	
	var msg = [];
	
   
	
	 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
        msg.push("<div class='alert alert-info'>Enter valid e-mail address</div>");
        
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
</script>