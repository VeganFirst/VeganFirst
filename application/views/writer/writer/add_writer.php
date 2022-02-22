<?php
$this->load->view("writer/templates/header");
?>

<body>
	<?php
            $this->load->view("writer/navigation");
        ?>
    <div class="container-fluid" id="content">
        <div id="main" style="margin-left: 0px;">
            <div class="container-fluid">
            <div class="page-header">
                    <div class="pull-left">
                            <h1>Add Publisher</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Publisher Details</h3>
                            </div>
                            <div class="box-content">
       <form method="POST" class="form-horizontal form-bordered" action="<?php echo base_url()?>writer/add_writer" onSubmit="return validateAdd()" name="page">
                                    
                                    <div class="form-group">
                                                    <label for="FirstName" class="col-sm-2 control-label">Publisher First Name</label>
                                                    <div class="col-sm-10">
                                                        <input  type="text"  name="FirstName" id="FirstName" placeholder="Publisher First Name" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="LastName" class="col-sm-2 control-label">Publisher Last Name</label>
                                                    <div class="col-sm-10">
                                                            <input  type="text"  name="LastName" id="LastName" placeholder="Publisher Last Name" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="Email" class="col-sm-2 control-label">Email</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" name="Email" id="Email" placeholder="Publisher Email" class="form-control">
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="Phone" class="col-sm-2 control-label">Publisher Phone</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" name="Phone"  id="Phone" placeholder="Publisher Phone" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="Password" class="col-sm-2 control-label">Password</label>
                                                    <div class="col-sm-10">
                                                            <input type="password" name="Password"  id="Password" placeholder="Password" class="form-control">
                                                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                    <label for="Password" class="col-sm-2 control-label">Repeat Password</label>
                                                    <div class="col-sm-10">
                                                            <input type="password" name="rePassword"  id="rePassword" placeholder="Password" class="form-control">
                                                    </div>
                                            </div>
                                    
                                            
                                    <div id="formEror"></div>
                                <?php    if (isset($Message)){
                    echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
                } ?>
                                            <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Add Publisher</button>
                                                    
                                                    <a href="<?php echo base_url()."writer/dashboard"; ?>"><button type="button" class="btn">Cancel</button></a>
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

<script type="text/javascript">
function validateAdd() {
	var fn = document.forms["page"]["FirstName"].value;
	var ln = document.forms["page"]["LastName"].value;
	var em = document.forms["page"]["Email"].value;
	var pw = document.forms["page"]["Password"].value;
	var rpw = document.forms["page"]["rePassword"].value;
	var msg = [];
	var atpos = em.indexOf("@");
    var dotpos = em.lastIndexOf(".");
	
	if (fn == null || fn == "") {
        msg.push("<div class='alert alert-info'>Enter First Name</div>");
    }
	if (ln == null || ln == "") {
        msg.push("<div class='alert alert-info'>Enter Last Name</div>");
    }
	 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=em.length) {
        msg.push("<div class='alert alert-info'>Enter valid e-mail address</div>");
    }
	
	if (pw == null || pw == "") {
        msg.push("<div class='alert alert-info'>Enter Password</div>");
    }
	if (rpw == null || rpw == "") {
        msg.push("<div class='alert alert-info'>Enter Repeat Password</div>");
    }
	
	if (pw != rpw) {
        msg.push("<div class='alert alert-info'>Password Not Match</div>");
    }
	/*if (x == null || x == "") {
        msg.push("<div class='alert alert-info'>Enter Answer</div>");
    }*/
	
	
	

	
	
	
	
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