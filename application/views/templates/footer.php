<div class="container-fluid" style="background:#521E74">
		<div class="container mtb4">
			<div class="row">
            <div class="col-md-5" style="padding-right: 60px;">
					<h4 class="footerh4">VEGAN FIRST</h4>
                    <h3 class="white"><strong>Educate - Empower - Evolve</strong></h3>
                    <p class="white">As a plant-forward, impact-driven media company, we are constantly working to raise awareness about pressing ethical, environmental, and health issues. We spotlight change-makers, innovations, and alternatives to assist our readers in making conscious choices.</p>
                    <ul class="list-inline header mt-10">
                            <li><a href="https://www.facebook.com/veganfirst/" target="_blank"><div class="fsocial"><i class="icon-social-facebook"></i></div></a></li>
                            <li><a href="https://twitter.com/veganfirstdaily" target="_blank"><div class="fsocial"><i class="icon-social-twitter"></i></div></a></li>
                            <li><a href="https://www.instagram.com/veganfirst_daily/" target="_blank"><div class="fsocial"><i class="icon-social-instagram"></i></div></a></li>
                            <li><a  href="https://www.linkedin.com/company/vegan-first" target="_blank"><div class="fsocial"><i class="fa fa-linkedin-square" style="color: #a55dd5;
    font-size: 18px;
    margin-top: 5px;"></i></div></a></li>
                             <li><a href="https://www.youtube.com/channel/UCa6Og8sxkmukgXJXtYHsj-Q" target="_blank"><div class="fsocial"><i class="icon-social-youtube"></i></div></a></li>
                        </ul>
                    
					
					
				</div>
            
            
            
            
                <div class="col-md-2">
    					<h4 class="footerh4">ABOUT US</h4>
    					<ul class="list-unstyled menu fut">
    					    
    					    <li><a href="<?php echo base_url();?>about-vegan-first">OUR MISSION</a></li>
    					    <li><a href="<?php echo base_url();?>editorial-policy">EDITORIAL POLICY</a></li>
    					    <li><a href="<?php echo base_url().'press-releases';?>">PRESS</a></li>
    					    <li><a href="<?php echo base_url();?>conference">ANNUAL CONFERENCE</a></li>
                            <li><a href="<?php echo base_url();?>become-a-patron">BECOME A PATRON</a></li>
                            <li><a href="<?php echo base_url();?>contact-us">CONTACT US</a></li>
    					</ul>
                    
				</div>
            
				<div class="col-md-2">
					<h4 class="footerh4">EXPLORE</h4>
					<ul class="list-unstyled menu fut">
					    <li><a href="<?php echo base_url().'advertise-with-us';?>">ADVERTISE</a></li>
                        <li><a href="<?php echo base_url().'thesantulan.com';?>">NUTRITION PLANS</a></li>
                        <li><a href="<?php echo base_url().'';?>">TRY VEGAN</a></li>
                        <li><a href="<?php echo base_url().'article/category/products';?>">PRODUCTS</a></li>
                        <li><a href="<?php echo base_url().'events';?>">EVENTS</a></li>
                        <li><a href="<?php echo base_url().'restaurants';?>">RESTAURANTS</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h4 class="footerh4">JOIN THE TRIBE</h4>
					<ul class="list-unstyled menu fut">
					    <li><a href="<?php echo base_url().'';?>">SUPPORT OUR CAUSE</a></li>
                        <li><a href="<?php echo base_url().'';?>">NEWSLETTER</a></li>
                        <li><a href="https://www.instagram.com/veganfirst_daily/" target="_blank">INSTAGRAM</a></li>
                        <li><a href="https://www.linkedin.com/company/vegan-first" target="_blank">LINKEDIN</a></li>
                        <li><a href="<?php echo base_url().'';?>">TELEGRAM</a></li>
                        <li><a href="https://www.youtube.com/c/VeganFirst"  target="_blank">YOUTUBE</a></li>
					</ul>
				</div>
				
                <div class="clearfix mb-30"></div>
                
                <ul class="list-inline menu fut mt-30">
			
				<li><a href="<?php echo base_url().'terms-of-use';?>" target="_blank">Terms of service</a></li>                        
				<li class="white">|</li>
                <li><a href="<?php echo base_url().'';?>" target="_blank">Affiliate Policy</a></li>
                <li class="white">|</li>
                <li><a href="<?php echo base_url().'privacy-policy';?>" target="_blank">Privacy Policy</a></li>
                <li class="white">|</li>
                <li><a href="<?php echo base_url().'privacy-policy';?>" target="_blank">Cancellation policy</a></li>
                <li class="white">|</li>	
				<li class="coprght">© <?php echo date('Y')?> VeganFirst. All Rights Reserved</li>
                <li class="white">|</li>
                <li class="coprght">Powered By. <a href="http://www.risingwebvibe.com/" target="_blank" style="color:#fff !important;font-size: 14px !important;">Rising Webvibe Solutions</a></li>
                    </ul>
                
				
			</div>
		</div>
	
	
	</div><!--main ends here-->
</div>
<div class="modal fade bs-example-modal-sm" id="download_ebook" tabindex="-1" role="dialog" aria-labelledby="login_popupLabel" aria-hidden="true" style="background: rgba(114, 135, 135, 0.85);">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="login_popupLabel">Download Free E-Book</h4>
						</div>
						<div class="modal-body">
                            <div id="formEror"><?php if(isset($Error)){ echo  "<div class='alert alert-danger'>".$Error."</div>"; }?></div>
							<form class="formLog" action="<?php echo Base_Url()?>download_ebook" method="post">
								<input type="hidden" name="redirect"  value="<?php echo current_url();?>">
								<div class="mt-10 form-group is-empty">                    
									<input type="email" class="form-control" placeholder="Email..." name="email" required>
								</div>
								<div class="text-center mt-20">
									<button type="submit" class="btn btn-success coolbtn" style="width: 100%;">Download Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>




<div class="modal fade bs-example-modal-sm" id="web" tabindex="-1" role="dialog" aria-labelledby="login_popupLabel" aria-hidden="true" style="background: rgba(114, 135, 135, 0.85);">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="login_popupLabel">SAMPLE POPUP</h4>
						</div>
						<div class="modal-body">
                            <h2>Sample Popup Heading</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							
						</div>
					</div>
				</div>
			</div>

<div id='div-gpt-ad-1586865748380-0'>

  <script>

    //googletag.cmd.push(function() { googletag.display('div-gpt-ad-1586865748380-0'); });

  </script>

</div>

</body>
<script>
  AOS.init();
</script>
<script type="text/javascript">

$('.icon-eye').parent("li").hide();	
	
	
</script>
<script>
function showLoader2(){
  	return '<div class="col-md-12 mt-10 text-center"><img src="<?php echo base_url();?>assetsNew/img/loading.gif"></di>';
  }
  function showMenuContent(id,td)
  	{
		if(parseInt(jQuery("."+td).find('.cur-item').attr('data-offset')) >=0)
      {
        jQuery("."+td).find('.dynamic').html(showLoader2());
  		jQuery.ajax(
  		{
  			url: '<?php echo base_url()?>article/loadmoreHome',
  			data:{
  				offset :parseInt(jQuery("."+td).find('.cur-item').attr('data-offset')),
  				cat: id,
  				limit :3,
  				order : 'postTime',
				temp:'nav'
  			},
  			type: 'post',
  			//dataType: "json", 
  			success :function(data)
  			{
  				if(data)
  				{
  					//jQuery("."+td).find('.offset').val(jQuery("."+td).find('.offset').val()+ jQuery("."+td).find('.limit').val());
  					jQuery("."+td).find('.dynamic').html();
  					jQuery("."+td).find('.dynamic').html( data);
  				}
  				else{ jQuery("."+td).find('.loadbtm').hide(); }
  			}
  		})
	  }
  	}

jQuery(".td-menu-item a").hover(function(a){
  	a.preventDefault();
	jQuery(this).attr('data-offset',0);
  	jQuery("."+jQuery(this).data("td_id")).find(".cur-item").removeClass("cur-item");
  	jQuery(this).addClass("cur-item");
  	jQuery("."+jQuery(this).data("td_id")).find('.dynamic').html(showLoader2());
  	jQuery("."+jQuery(this).data("td_id")).find('.dynamic').html(showMenuContent(jQuery("."+jQuery(this).data("td_id")).find(".cur-item").data('val'),jQuery(this).data("td_id")));
});

jQuery(".mega-menu .pagin a.next").on("click",function(a){
  	a.preventDefault();
  	jQuery("."+jQuery(this).data("td_id")).find('.cur-item').attr('data-offset',parseInt(jQuery("."+jQuery(this).data("td_id")).find('.cur-item').attr('data-offset')) + 4);
	jQuery("."+jQuery(this).data("td_id")).find('.dynamic').html(showLoader2());
  	jQuery("."+jQuery(this).data("td_id")).find('.dynamic').html(showMenuContent(jQuery("."+jQuery(this).data("td_id")).find(".cur-item").data('val'),jQuery(this).data("td_id"),'next'));
  });

  jQuery(".mega-menu .pagin a.prev").on("click",function(a){
  	a.preventDefault();
    if(parseInt(jQuery("."+jQuery(this).data("td_id")).find('.cur-item').attr('data-offset')) >0)
    {
    jQuery("."+jQuery(this).data("td_id")).find('.cur-item').attr('data-offset',parseInt(jQuery("."+jQuery(this).data("td_id")).find('.cur-item').attr('data-offset')) - 4);
	jQuery("."+jQuery(this).data("td_id")).find('.dynamic').html(showLoader2());
  	jQuery("."+jQuery(this).data("td_id")).find('.dynamic').html(showMenuContent(jQuery("."+jQuery(this).data("td_id")).find(".cur-item").data('val'),jQuery(this).data("td_id"),'prev'));
    }
  });


$(document).ready(function(){
    
    //$('#login_popup').modal('show');
    
	jQuery(".mm1").find('.dynamic').html(showMenuContent(jQuery(".mm1").find(".cur-item").data('val'),'mm1'));
    $(".dropdown").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
}); 

$('.subform').on('submit', function (e) {
    e.preventDefault(); 
    $.ajax({  
        url: '<?php echo Base_Url()."/subscribe_submit"?>',  
        method:"POST", 
        dataType : 'json',
        data:$('.subform').serialize(),  
        beforeSend:function(){  
            $('.resp').html('<span class="text-info">Loading response...</span>');  
        },  
        success:function(data){
        if(data.id==1)
        {
        $('.subform')[0].reset(); 
        }
		$('.resp').fadeIn().html(data.msg);  
            setTimeout(function(){  
            $('.resp').fadeOut("slow");  
            }, 10000);  
        }  
    });  
}); 
$('.newsl').on('submit', function (e) {
    e.preventDefault(); 
    $.ajax({  
        url: '<?php echo Base_Url()."/newsletter"?>',  
        method:"POST", 
        dataType : 'json',
        data:$('.newsl').serialize(),  
        beforeSend:function(){  
            $('.nlresp').html('<span class="text-info">Loading response...</span>');  
        },  
        success:function(data){
        if(data.id==1)
        {
        $('.newsl')[0].reset(); 
        }
		$('.nlresp').fadeIn().html(data.msg);  
            setTimeout(function(){  
            $('.nlresp').fadeOut("slow");  
            }, 10000);  
        }  
    });  
}); 

//jQuery.noConflict(); 

</script>
	<!--   Core JS Files   -->
	
	<script src="<?php echo base_url();?>assetsNew/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assetsNew/js/custom.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?php echo base_url();?>assetsNew/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="<?php echo base_url();?>assetsNew/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="<?php echo base_url();?>assetsNew/js/custom.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assetsNew/js/star-rating.js" type="text/javascript"></script>

<script>
        
          var poppy = localStorage.getItem('myPopup'); 
   
        
        $(window).scroll(function () {
         
         if(!poppy){
             localStorage.setItem('myPopup','true');
          if ($(document).scrollTop() >= $(document).height() / 25)
          {
          $('#web').modal('show'); 
          }
         }
        });
   
   
</script>

	
    
</html>