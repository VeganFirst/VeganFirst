<?php 		$this->load->view('templates/header'); ?>
<style>
.title3hed {
    font-size: 25px !important;
    letter-spacing: 1px !important;
    font-weight: 800;
}
.panel > .panel-heading, .panel.panel-default > .panel-heading {
    padding: 12px 8px 12px;
	 -webkit-transition: all 150ms linear;
  -moz-transition: all 150ms linear;
  -o-transition: all 150ms linear;
  -ms-transition: all 150ms linear;
  transition: all 150ms linear;
}
.panel {
    box-shadow: none;
}
.panel-title>a {
    color: inherit;
    font-size: 20px;
    font-weight: 800;
}
.collapse.in {
    box-shadow: 0px 12px 22px 5px rgba(151,151,151,0.6);
-webkit-box-shadow: 0px 12px 22px 5px rgba(151,151,151,0.6);
-moz-box-shadow: 0px 12px 22px 5px rgba(151,151,151,0.6);
}
.panel-group .panel-heading+.panel-collapse>.panel-body, .panel-group .panel-heading+.panel-collapse>.list-group {
    border-top: none;
}
.panel-heading.active{    background-color: #6cbd45 !important;
    color: #fff;
   -webkit-transition: all 150ms linear;
  -moz-transition: all 150ms linear;
  -o-transition: all 150ms linear;
  -ms-transition: all 150ms linear;
  transition: all 150ms linear;}
.panel-heading.active .fa{color:#fff !important}
.panel-title {
    font-size: 14px;
}
.more-less{ padding-right:15px;color: #6cbd45;    float: right;font-size: 20px;
    top: 4px;
    position: relative;}
.micon{ padding-right:15px;color: #6cbd45;font-size: 30px;
    vertical-align: sub; }
.panel-body .newsinpt {
    min-width: 310px !important;
    background: none !important;
    margin-bottom: 0px !important;
    color: #000 !important;
    font-size: 22px !important;
    font-weight: 300 !important;
	border:0 !important;
    border-bottom: 1px solid #000 !important;
    height: 42px !important;
    padding: 0 10px !important;
    margin: 0 15px;
}
.panel-body input.newsinpt::-webkit-input-placeholder { color: #000 !important; font-size:18px !important; font-weight:400 !important  }

.nlbtn {
       border: 1px solid #fff !important;
}
.mar0auto{ padding:0;}
.btn.btn-success{background-color: #521e74;
    color: #FFFFFF;box-shadow: none;
    border-radius: 0;}
.btn.btn-success:hover{background-color: #A55DD5;
    color: #FFFFFF;}
</style>
    

<div class="clearfix pt-10"></div>

<div class="container pad0">		

	<div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <h3 class="title3hed mb-30">CONNECT WIITH US FOR ALL THE RIGHT REASONS</h3>
		<p>We love hearing from our readers, whether they have a specific request or just want to say hello.</p>
        </div>
<div class="clearfix pt-10"></div>
        <div class="panel-group mt-20" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default fashion products alternative">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="micon fa fa-check-circle-o "></i>
                        Join the community
                        <i class="more-less fa fa-chevron-down"></i>
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <div class="col-md-12">
			
			 <form method="post" name="nfform" class="subform"  style="float: none;margin: 0 auto;">
				<div class="row">
					<div class="col-sm-12 form-inline mar0auto">
                    <div class="form-group mt-5 mb-20">
							<input type="text" name="name" placeholder="Name" class="form-control newsinpt other" required="required"  style="height:46px;" />
                            </div>
                            <div class="form-group mt-5 mb-20">
							<input type="email" name="email" placeholder="Email" class="form-control newsinpt other"  required="required" style="height:46px;" />
                            </div>
						<div class="form-group mt-5 mb-20">
							<input type="text" name="city" placeholder="City" class="form-control newsinpt other"  required="required" style="height:46px;" />
                            </div>
                       <div class="form-group mt-5 mb-20" style="margin-left:-5px;">
                            <button type="submit" class="btn nlbtn">Submit</button>
                            <div class="text-center resp"></div>
						</div>
                        
                        
                   </div>     
                  
					
				</div>
			</form>
		</div>
                </div>
            </div>
        </div>

        <div class="panel panel-default lifestyle">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   	<i class="micon fa fa-check-circle-o "></i>
                       Contribute a Story
                    <i class="more-less fa fa-chevron-down"></i>
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    <div class="col-md-12">
      <form method="post" class="Contribute" >
      		<input type="hidden" name="form_type" value="Contribute" />
         <div class="row">           
         <div class="form-group col-md-4 mt-5 ">
              <input type="text"  name="Name"  placeholder="Name" class="form-control" >
          </div>
          
          <div class="form-group col-md-4  mt-5">
             <input type="email"  name="Email"  placeholder="Email" class="form-control" >
             </div>
             
           
          <div class="form-group  col-md-4  mt-5">
            <input type="text"  name="desg"  placeholder="Designation" class="form-control" >
             </div>
             
             <div class="form-group col-md-4 mt-5">
            <input type="text"  name="exp"  placeholder="Experties" class="form-control" >
             </div>
             <div class="form-group col-md-4 mt-5">
            <input type="text"  name="wexp"  placeholder="Writing Experience" class="form-control" >
             </div> 
             
             <div class="form-group col-md-12 mt-5">
            <input type="text"  name="wsample"  placeholder="Writing Sample Drive Link" class="form-control" >
             </div>   
             
          
          </div>
          <div class="form-group  mt-5">
             <button type="submit" class="btn btn-success coolbtn">Send</button>
            <div class="text-center resp"></div>
          </div>

            </form>
            </div>
                </div>
            </div>
        </div>
        
        
        <div class="panel panel-default food">
            <div class="panel-heading" role="tab" id="heading3">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                        <i class="micon fa fa-check-circle-o "></i>
                       Advertise on Vegan First
                    <i class="more-less fa fa-chevron-down"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="panel-body">
                <div class="col-md-12">
			
      <form method="post" class="Advrt" name="Advt">
					
           <input type="hidden" name="form_type" value="Advrt" />         
         <div class="row">           
         <div class="form-group col-md-6 mt-5 ">
              <input type="text"  name="Name"  placeholder="Name" class="form-control" >
          </div>
          
          <div class="form-group col-md-6  mt-5">
             <input type="email"  name="Email"  placeholder="Email" class="form-control" >
             </div>
             
           
          <div class="form-group  col-md-6  mt-5">
            <input type="text"  name="cname"  placeholder="Company Name" class="form-control" >
             </div>
             
             <div class="form-group col-md-6 mt-5">
            <input type="text"  name="web"  placeholder="Company Website" class="form-control" >
             </div>
             <div class="form-group col-md-6 mt-5">
            <input type="number"  name="phone"  placeholder="Phone" class="form-control" >
             </div> 
             
             <div class="form-group col-md-6 mt-5">
            <input type="text"  name="budget"  placeholder="Budget" class="form-control" >
             </div>   
             
          <div class="form-group  col-md-12  mt-5">
             <textarea name="message" rows="3" class="form-control" placeholder="Please help us understand the goal of your promotion better by sharing more information."></textarea>
             <p>Read our advertisement policy <a href="">here</a></p>
             </div>
          </div>
          <div class="form-group  mt-5">
             <button type="submit" class="btn btn-success coolbtn">Send</button>
            <div id="formEror"></div>
            <div class="text-center resp"></div>
          </div>

            </form>
            </div>
                </div>
            </div>
        </div>
        
        
        <div class="panel panel-default products">
            <div class="panel-heading" role="tab" id="heading4">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                        <i class="micon fa fa-check-circle-o "></i>
                      Be a part of the Vegan India Conference 
                      <i class="more-less fa fa-chevron-down"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                <div class="panel-body">
                <div class="col-md-12">
			
        <form method="post" name="conference" class="conference">
					
             <input type="hidden" name="form_type" value="conference" />       
         <div class="row">           
         <div class="form-group col-md-4 mt-5 ">
              <input type="text"  name="Name"  placeholder="Name" class="form-control" >
          </div>
          
          <div class="form-group col-md-4  mt-5">
             <input type="text"  name="Email"  placeholder="Email" class="form-control" >
             </div>
             
           <div class="form-group col-md-4 mt-5">
            <input type="text"  name="phone"  placeholder="Phone" class="form-control" >
             </div> 
             
              <div class="form-group col-md-4 mt-5">
            <input type="text"  name="city"  placeholder="City" class="form-control" >
             </div> 
               <div class="form-group col-md-4 mt-5">
            <input type="text"  name="country"  placeholder="Country" class="form-control" >
             </div>
             <div class="form-group col-md-4 mt-20">
             <select name="interest">
             <option>Attend the conference</option>
             <option>Be a sponsor</option>
             <option>Donate</option>
             <option>Help us spread the word!</option>
            </select>
             </div>   
          </div>
          <div class="form-group  mt-5">
             <button type="submit" class="btn btn-success coolbtn">Send</button>
            <div class="text-center resp"></div>
          </div>

            </form>
            </div>
                </div>
            </div>
        </div>
        
        
        <div class="panel panel-default products">
            <div class="panel-heading" role="tab" id="heading5">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                        <i class="micon fa fa-check-circle-o "></i>
                      Provide feedback on Vegan First content
                    <i class="more-less fa fa-chevron-down"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                <div class="panel-body">
                      For any suggestions, copyright issues, or partnerships please email hello@veganfirst.com
                </div>
            </div>
        </div>
        
        
        <div class="panel panel-default products">
            <div class="panel-heading" role="tab" id="heading6">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                        <i class="micon fa fa-check-circle-o "></i>
                      Have a B2B enquiry?
                    <i class="more-less fa fa-chevron-down"></i>
                    </a>
                </h4>
            </div>
            <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                <div class="panel-body">
                     <div class="col-md-12">
      <form method="post" name="B2B" class="B2B">
       <input type="hidden" name="form_type" value="B2B" />     
         <div class="row">           
         <div class="form-group col-md-4 mt-5 ">
              <input type="text"  name="Name"  placeholder="Name" class="form-control" >
          </div>
          
          <div class="form-group col-md-4  mt-5">
             <input type="email"  name="Email"  placeholder="Email" class="form-control" >
             </div>
           <div class="form-group col-md-4 mt-5">
            <input type="number"  name="phone"  placeholder="Phone" class="form-control" >
             </div>  
           
          <div class="form-group  col-md-4  mt-5">
            <input type="text"  name="cname"  placeholder="Company Name" class="form-control" >
             </div>
             
             <div class="form-group col-md-4 mt-20">
             <select name="iam">
             <option value="" hidden>I Am a</option>
             <option>Manufacturer</option>
             <option>Food scientist</option>
             <option>Ingredients supplier</option>
             <option>Trader</option>
             <option>Wholesaler</option>
             <option>Retailer</option>
             <option>Chef</option>
             <option>Other</option>
            </select>
             </div>
              
             
             <div class="form-group col-md-4 mt-5">
            <input type="text"  name="speciality"  placeholder="Our speciality is" class="form-control" >
             </div>
              
             
             <div class="form-group col-md-12 mt-5">
            <input type="text"  name="connectwith"  placeholder="I am looking to connect with" class="form-control" >
             </div>   
             
        
          </div>
          <div class="form-group  mt-5">
             <button type="submit" class="btn btn-success coolbtn">Send</button>
            <div class="text-center resp"></div>
          </div>

            </form>
            </div>
                </div>
            </div>
        </div>
        
        
        <div class="panel panel-default products">
            <div class="panel-heading" role="tab" id="heading7">
                <h4 class="panel-title">
                    <a role="button" href="<?php echo Base_Url().'restaurant/get_listed';?>" target="_blank">
                        <i class="micon fa fa-check-circle-o "></i>
                      Get listed on our restaurants directory
                    <i class="more-less fa fa-chevron-down"></i>
                    </a>
                </h4>
            </div>
            
        </div>
        
        <div class="panel panel-default products">
            <div class="panel-heading" role="tab">
                <h4 class="panel-title">
                    <a role="button" href="<?php echo Base_Url().'careers';?>" target="_blank">
                        <i class="micon fa fa-check-circle-o "></i>
                      Careers at Vegan First
                    <i class="more-less fa fa-chevron-down"></i>
                    </a>
                </h4>
            </div>
            
        </div>
    </div>
        

	</div>										

</div>

</div>
<div class="clearfix pt-30"></div>
<?php $this->load->view('templates/footer_nl');?>
<?php $this->load->view('templates/footer');?>
   <script>
$('.Contribute').on('submit', function (e) {
    e.preventDefault(); 
    $.ajax({  
        url: '<?php echo Base_Url()."/subscribe_submit"?>',  
      	method:"POST", 
	   	dataType : 'json',
        data:$('.Contribute').serialize(),  
        beforeSend:function(){  
            $('.Contribute').find('.resp').html('<span class="text-info">Loading response...</span>');  
        },  
        success:function(data){
		if(data.id==1)
        {
        $('.Contribute')[0].reset();
        }
         
		$('.Contribute').find('.resp').fadeIn().html(data.msg);  
            setTimeout(function(){  
            $('.Contribute').find('.resp').fadeOut("slow");  
            }, 7000);  
        }  
    });  
}); 


$('.Advrt').on('submit', function (e) {
    e.preventDefault(); 
    $.ajax({  
        url: '<?php echo Base_Url()."/subscribe_submit"?>',  
      	method:"POST", 
	   	dataType : 'json',
        data:$('.Advrt').serialize(),  
        beforeSend:function(){  
        $('.Advrt').find('.resp').html('<span class="text-info">Loading response...</span>');
		},  
        success:function(data){
		if(data.id==1)
        {
        $('.Advrt')[0].reset();
        }
         
		$('.Advrt').find('.resp').fadeIn().html(data.msg);  
            setTimeout(function(){  
            $('.Advrt').find('.resp').fadeOut("slow");  
            }, 7000);  
        }  
    });  
}); 

$('.conference').on('submit', function (e) {
    e.preventDefault(); 
    $.ajax({  
        url: '<?php echo Base_Url()."/subscribe_submit"?>',  
      	method:"POST", 
	   	dataType : 'json',
        data:$('.conference').serialize(),  
        beforeSend:function(){  
        $('.conference').find('.resp').html('<span class="text-info">Loading response...</span>');
		},  
        success:function(data){
		if(data.id==1)
        {
        $('.conference')[0].reset();
        }
         
		$('.conference').find('.resp').fadeIn().html(data.msg);  
            setTimeout(function(){  
            $('.conference').find('.resp').fadeOut("slow");  
            }, 7000);  
        }  
    });  
}); 


$('.B2B').on('submit', function (e) {
    e.preventDefault(); 
    $.ajax({  
        url: '<?php echo Base_Url()."/subscribe_submit"?>',  
      	method:"POST", 
	   	dataType : 'json',
        data:$('.B2B').serialize(),  
        beforeSend:function(){  
        $('.B2B').find('.resp').html('<span class="text-info">Loading response...</span>');
		},  
        success:function(data){
		if(data.id==1)
        {
        $('.B2B')[0].reset();
        }
         
		$('.B2B').find('.resp').fadeIn().html(data.msg);  
            setTimeout(function(){  
            $('.B2B').find('.resp').fadeOut("slow");  
            }, 7000);  
        }  
    });  
});


function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('fa-chevron-down fa-chevron-up');
	$(e.target)
        .prev('.panel-heading')
        .find(".micon")
        .toggleClass('fa-check-circle fa-check-circle-o');
	$(e.target)
        .prev('.panel-heading').toggleClass('active');
		
		
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);
$(".filter").click(function(evt) {
	    $(".filter").removeClass('active');
        evt.preventDefault();
        $(".panel ").fadeOut(500);
		
		$(this).addClass('active');
        var id = $(this).data('id');
		if(id)
        $("." + id).fadeIn(500);
		else
		$(".panel ").fadeIn(500);
});
  </script>
