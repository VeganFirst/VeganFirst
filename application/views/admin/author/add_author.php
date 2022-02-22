<?php
$this->load->view("admin/templates/header");
?>

<body>
	<?php
            $this->load->view("admin/navigation");
        ?>
    <div class="container-fluid" id="content">
        <div id="main" style="margin-left: 0px;">
            <div class="container-fluid">
            <div class="page-header">
                    <div class="pull-left">
                            <h1>Add Author</h1>
                    </div>

            </div>

            <div class="row-fluid">
                    <div class="span12">
                            <div class="box box-bordered box-color">
                            <div class="box-title">
                                    <h3><i class="icon-th-list"></i> Author Details</h3>
                            </div>
                            <div class="box-content">
                            <?php    if (isset($Message)){
                    echo "<div class='alert alert-info'><strong>".$Message."</strong></div>";
                } ?>
                                <form method="POST" name="myForm" class="form-horizontal form-bordered formLog" onSubmit="return validateForm()" enctype="multipart/form-data" >
                                    
                                    <div class="form-group">
                                                    <label for="FirstName" class="col-sm-2 control-label">Author First Name</label>
                                                    <div class="col-sm-10">
                                                        <input  type="text"  name="FirstName" id="FirstName" placeholder="Author First Name" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="LastName" class="col-sm-2 control-label">Author Last Name</label>
                                                    <div class="col-sm-10">
                                                            <input  type="text"  name="LastName" id="LastName" placeholder="Author Last Name" class="form-control">
                                                    </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                    <label for="Email" class="col-sm-2 control-label">Email</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" name="Email" id="Email" placeholder="Author Email" class="form-control">
                                                    </div>
                                            </div>
                                        
                                        
                                            
                                        
                                        
                                        
                                            
                                        
                                            
                                        
                                            <div class="form-group">
                                                    <label for="Phone" class="col-sm-2 control-label">Author Phone</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" name="Phone"  id="Phone" placeholder="Author Phone" class="form-control">
                                                    </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                    <label class="col-sm-2 control-label">Profile Picture</label>
                                                    <div class="col-sm-2">
                                                <img src="<?php echo base_url();?>media/upload/author/writer-pic.jpg" alt="Blank image" id="uploadimg" class="img-responsive img-circle center-block"><p>Use Square Image like 400 X 400</p>
                                                <input style="display:none;" id="file" name="file" type="file" class="file" data-show-preview="false">
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <div class="form-group">
                                                    <label for="About" class="col-sm-2 control-label">About Author</label>
                                                    <div class="col-sm-10">
                                                    <textarea name="About" id="About" rows="3" maxlength='260' class="form-control"></textarea>
                                                           
                                                    </div>
                                            </div>
                                            
                                            
                                            
                                             <div class="form-group">
                                                    <label for="Facebook" class="col-sm-2 control-label">Facebook</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" name="Facebook"  id="Facebook" placeholder="https://www.facebook.com/ankurpatel91" class="form-control">
                                                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                    <label for="Twitter" class="col-sm-2 control-label">Twitter</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" name="Twitter"  id="Twitter" placeholder="https://twitter.com/ankur9187" class="form-control">
                                                    </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                                                    <label for="Pinterest" class="col-sm-2 control-label">Pinterest</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" name="Pinterest"  id="Pinterest" placeholder="https://in.pinterest.com/ankurpatel91" class="form-control">
                                                    </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                    <label for="Instagram" class="col-sm-2 control-label">Instagram</label>
                                                    <div class="col-sm-10">
                                                            <input type="text" name="Instagram"  id="Instagram" placeholder="https://www.instagram.com/ankur9187" class="form-control">
                                                    </div>
                                            </div>
                                    
                                            
                                    <div id="formEror"></div>
                                
                                            <div class="form-group">
                                                    <button type="submit" class="btn btn-primary">Add Author</button>
                                                    
                                                    <a href="<?php echo base_url()."admin/dashboard"; ?>"><button type="button" class="btn">Cancel</button></a>
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
$("#uploadimg" ).click(function() {
     $( "#file" ).click();

    });




function validateForm() {
    var x = document.forms["myForm"]["FirstName"].value;
	var y = document.forms["myForm"]["LastName"].value;
	var z = document.forms["myForm"]["Email"].value;
	
	
	var atpos = z.indexOf("@");
    var dotpos = z.lastIndexOf(".");
	
	var msg = [];
	
    if (x == null || x == "") {
		 
        
		msg.push("<div class='alert alert-info'>Author First Name Can not Blank</div>");
		
    }
	
	else if (!x.match(/^[a-zA-Z]+$/)) 
    {
        msg.push("<div class='alert alert-info'>Author First Name is Alphabet Only</div>");
    }
    
	
	if (y == null || y == "") {
        
        msg.push("<div class='alert alert-info'>Author Last Name Can not Blank</div>");
       
    }
	else if (!y.match(/^[a-zA-Z]+$/)) 
    {
        msg.push("<div class='alert alert-info'>Author Last Name is Alphabet Only</div>");
    }
	
	
	 if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
        msg.push("<div class='alert alert-info'>Not a valid e-mail address</div>");
        
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
<!--<script type="text/javascript">
$(document).ready(function() {

	$('form.formLog').submit( function(form){
		form.preventDefault();
		$.post('/vegan/index.php/admin/add_author',$('form.formLog').serialize(), function(data){
			//console.log(data);
			$('div#formEror').html(data);
			});
		});
});
</script>-->

</html>