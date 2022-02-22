<?php $this->load->view('templates/header'); ?>
	
<div class="container mt-50">

<form method="post" class="Listed" >
      		
         <div class="row">           
         <div class="form-group col-md-4 mt-5 ">
              <input type="text"  name="Name"  placeholder="Restaurant Name" class="form-control" >
          </div>
          
          <div class="form-group col-md-4  mt-5">
             <input type="email"  name="Email"  placeholder="Email" class="form-control" >
             </div>
             
           
          <div class="form-group  col-md-4  mt-5">
            <input type="text"  name="cuisine"  placeholder="Cuisine" class="form-control" >
             </div>
             <div class="form-group col-md-4 mt-5">
            <input type="text"  name="delivery_option" class="form-control" placeholder="Delivery Option">
             </div>
             
             <div class="form-group col-md-4 mt-5">
            <input type="text" name="website" class="form-control" placeholder="Website Link">
             </div>
            <div class="form-group col-md-4 mt-5">
            <input type="text" name="del_area" class="form-control" placeholder="Areas of Delivery">
             </div>
             
             
             <div class="form-group col-md-12 mt-5">
            <textarea name="full_address" class="form-control" placeholder="Full Address"></textarea>
             </div>
             <div class="form-group col-md-12 mt-5">
            <textarea name="timings" class="form-control" placeholder="Timing"></textarea>
             </div>
             
             <div class="form-group col-md-12 mt-5">
            <textarea name="social_links" class="form-control" placeholder="Social Media Links"></textarea>
             </div>
             
             
               
             
          
          </div>
          <div class="form-group  mt-5">
             <button type="submit" class="btn btn-success coolbtn">Send</button>
            <div class="text-center resp"></div>
          </div>

            </form>
</div>	

   
    

<?php $this->load->view('templates/footer_nl'); ?>
<?php $this->load->view('templates/footer'); ?>

<script type="text/javascript">
	

$(".Listed").on('submit', function (e) {
	e.preventDefault(); 
    $.ajax({  
        url: '<?php echo Base_Url()."restaurant/submit_listed"?>',  
      	method:"POST", 
	   	dataType : 'json',
        data:$('.Listed').serialize(),  
        beforeSend:function(){  
            $('.Listed').find('.resp').html('<span class="text-info">Loading response...</span>');  
        },  
        success:function(data){
		if(data.id==1)
        {
        $('.Listed')[0].reset();
        }
         
		$('.Listed').find('.resp').fadeIn().html(data.msg);  
            setTimeout(function(){  
            $('.Listed').find('.resp').fadeOut("slow");  
            }, 7000);  
        }  
    });  

});

</script>

