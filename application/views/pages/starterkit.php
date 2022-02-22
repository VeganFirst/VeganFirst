<?php $this->load->view('templates/header'); ?>

<style>
.inp{
	border: 2px solid #521e74 !important;
    background-image: none !important;
    height: 44px;
    margin-top: 6px;
    min-width: 300px;
	padding: 4px 7px 0;font-size:20px !important;}
input.inp::-webkit-input-placeholder {
color: #606060 !important; font-size:20px !important; font-weight:400 !important
}

.talk{
    background: #fff !important;
    min-width: 250px;
    letter-spacing: 0.5px;
    border-radius: 0;
    font-weight: 500;
    font-size: 16px;
    color: #5d5d5d !important;
    box-shadow: none !important;
    border: 2px solid #000;padding: 10px 20px;}
.splan{background: #fff !important;
    min-width: 250px;
    letter-spacing: 0.5px;
    border-radius: 0;
    font-weight: 500;
    font-size: 16px;
    color: #5d5d5d !important;
    box-shadow: none !important;
    border: 2px solid #000;padding: 10px 20px;}
#VideoSlider .owl-next{
  right: -45px;
  position: absolute;
  top: 33%;
  background:none;
  }
  #VideoSlider .owl-prev{
  transform: rotate(180deg);
  left: -45px;
  position: absolute;
  top: 33%;
  }
  #VideoSlider .owl-prev i,
  #VideoSlider .owl-next i{color: #6cbd45;height: 36px;
  width: 36px;
  background: #fff;
  border-radius: 100%;padding: 7px;}
  #VideoSlider .owl-next i:after{ vertical-align:baseline}
  #VideoSlider .owl-item{ background:#fff; padding:5px;}
  #VideoSlider .featurettl { padding:0 10px;min-height: 70px;
    line-height: 20px; font-size:14px;}
</style>
 
<div class="container text-center mt-0 mb-30 pb-50 pt-50" style="background:#e6e6e6;background: url(assetsNew/img/Starter-Kit-Banner.png);background-size: cover;">
  <div class="col-md-6 col-md-offset-6">
<h2 class="mt-80 title2hed" data-aos="fade-up"  data-aos-easing="linear">Start Your Vegan Journey Today</h2>
<h4 class="mt-10 sidenm" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear">Join thousands of others and take the challenge to start your vegan journey today. It's never been easier!</h4>
<button class="btn btn-success mb-100 mt-15" data-aos="fade-up" data-aos-delay="250" data-aos-easing="linear" style="box-shadow: none;border-radius: 0;font-size: 16px;letter-spacing: 0.8px;" data-toggle="modal" data-target="#download_skit">Download Free Starter Kit</button>
</div>  

</div>      
              
        <div class="container mt-30 mb-30" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear">
        <div class="col-sm-8 mr0auto">
        <div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v8hrbZqism4?controls=0&amp;showinfo=0" allowfullscreen="" ></iframe></div>
        	
        </div>
        </div>
        
        
<div class="container" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear">
<h3 class="text-center title2hed">GET THE STARTER KIT STRAIGHT TO YOUR INBOX</h3>
<div class="mb-10" style="border-bottom: 1px solid #000000;"></div>
<div class="row">
<div class="col-sm-6">
<img src="<?php Base_Url()?>assetsNew/images/VF-Starter-Kit.jpg" class="img-responsive" />
</div>
<div class="col-sm-6">
<h3 class="mt-40 title2hed">What You Get?</h3>

<p>An ultimate introductory guide to veganism curated by experts to make your journey as smooth as possible. This includes:</p>


<div class="clearfix mb-10"></div>
<div class="col-sm-1 p-0" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear">
<img src="<?php Base_Url()?>assetsNew/img/Quick and Easy.png" class="img-responsive" />
</div>

<div class="col-sm-11" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear">
<h4 class="mt-0 mb-0"><strong>Easy introduction to vegan food</strong></h4>
<p>How to get started, what to eat, what to avoid.</p>
</div>

<div class="clearfix mb-10"></div>
<div class="col-sm-1 p-0" data-aos="fade-up" data-aos-delay="150" data-aos-easing="linear">
<img src="<?php Base_Url()?>assetsNew/img/Actionable Insights.png" class="img-responsive" />
</div>

<div class="col-sm-11" data-aos="fade-up" data-aos-delay="150" data-aos-easing="linear">
<h4 class="mt-0 mb-0"><strong>How to read labels like a pro</strong></h4>
<p>Cheat sheet to identify any vegan product.</p>
</div>
<div class="clearfix mb-10"></div>

<div class="col-sm-1 p-0" data-aos="fade-up" data-aos-delay="250" data-aos-easing="linear">
<img src="<?php Base_Url()?>assetsNew/img/Exclusive Insights.png" class="img-responsive" />
</div>

<div class="col-sm-11" data-aos="fade-up" data-aos-delay="250" data-aos-easing="linear">
<h4 class="mt-0 mb-0"><strong>Exclusive insights by nutritionists</strong></h4>
<p>To take charge of your health with helpful tips by nutritionists.</p>
</div>
<div class="clearfix mb-10"></div>

<div class="col-sm-1 p-0" data-aos="fade-up" data-aos-delay="350" data-aos-easing="linear">
<img src="<?php Base_Url()?>assetsNew/img/Discussion.png" class="img-responsive" />
</div>

<div class="col-sm-11" data-aos="fade-up" data-aos-delay="350" data-aos-easing="linear">
<h4 class="mt-0 mb-0"><strong>FAQs, other resources and support group</strong></h4>
<p>Join a support group of new and transitioning vegans to share your journey.</p>
</div>
<div class="clearfix mb-30"></div>
<form method="post">
<div class="form-inline mt-30" data-aos="fade-up" data-aos-delay="450" data-aos-easing="linear">
						<div class="form-group mt-5 mb-20 is-empty">
							<input type="email" name="Email" placeholder="Email" class="form-control inp other" required="required">
                            <span class="material-input"></span></div>
                            <div class="form-group mt-5 mb-20" style="margin-left:-5px;margin-top:3px !important;">
                            <button type="submit" class="btn nlbtn" style=" background:#521e74 !important">Subscribe</button>
						</div>
                   </div>
</form>

</div>
</div>

</div>        
  
  
  
        
 <?php 
 $Arr = [100000076,100000236,100000359,100000595,100001134,100000177];
 
 ?>
  <div class="row mt-50 pt-30 pb-30" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear" style="background:#6cbd45">
    <div class="container mb-30">
      <h4 class="text-center title2hed white mb-30">SUCCESS STORIES</h4>
      <div class="row">
      <div class="owl-carousel owl-theme" id="VideoSlider">
        <?php 
        foreach ($Arr  as $Articlsl) :

 $video = $this->M_Article->getArticleInfo(($Articlsl));?>
        <div>
        <?php if($video->videoURL):?>
        <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $video->videoURL; ?>?controls=1&amp;showinfo=0" frameborder="0" srcdoc="<style>*{padding:0;margin:0;overflow:hidden}html,body{height:100%}img,span{position:absolute;width:100%;top:0;bottom:0;margin:auto;object-fit:none}span{height:1.5em;text-align:center;font:48px/1.5 sans-serif;color:white;text-shadow:0 0 0.5em black}</style><a href=https://www.youtube.com/embed/<?php echo $video->videoURL; ?>?autoplay=1><img src=https://img.youtube.com/vi/<?php echo $video->videoURL; ?>/hqdefault.jpg><span>▶</span></a>" allowfullscreen></iframe>
          
        </div>
        <?php else:?>
        <img src="<?php echo base_url().'media/upload/article/'.$video->FeaturedImage ?>" alt="<?php echo $video->imgalt; ?>" class="img-responsive lnk  br1" onclick="location.href='<?php echo base_url().'article/'.$video->Url; ?>'">
        
        <?php endif;?>
        <h2 class="featurettl pb-10"><?php echo $video->PageTitle; ?></h2>
        </div>
        <?php endforeach; ?>
      </div>
      </div>
    </div>
  </div>
  <?php ?>       
        
        
  <div class="container-fluid"  data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear">
   <div class="container mt-30 mb-0">
  <div class="col-sm-6 mr0auto text-center">
  <h3 class="mt-40 mb-0 title2hed" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear">NEED A CUSTOMISED SOLUTION?</h3>
  
  <h3 class="mt-0" data-aos="fade-up" data-aos-delay="150" data-aos-easing="linear"><strong>Get Expert Guidance</strong></h3>
  <div class="clearfix mb-10"></div>
  <ul class="list-inline ">
  
  <li>
  <button class="btn talk" data-aos="fade-up" data-aos-delay="250" data-aos-easing="linear">Talk To Our Nurtritionists</button>
  </li>
  <li>
  
  
  <button class="btn splan" data-aos="fade-up" data-aos-delay="250" data-aos-easing="linear">See Nutrition Plans</button>
  </li>
  </ul>
  </div>
  </div>
  </div>      
        
        <!--container ends here-->
	<div class="modal fade bs-example-modal-sm" id="download_skit" tabindex="-1" role="dialog" aria-labelledby="login_popupLabel" aria-hidden="true" style="background: rgba(114, 135, 135, 0.85);">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="login_popupLabel">Download Free Starter Kit</h4>
						</div>
						<div class="modal-body">
                            <div id="formEror"><?php if(isset($Error)){ echo  "<div class='alert alert-danger'>".$Error."</div>"; }?></div>
                            <p>Congratulations, you've made the right deicion. You may download your free starter kit please fill in your email ID</p>
							<form class="formLog" method="post">
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
			
<?php $this->load->view('templates/footer'); ?>
<script src="<?php echo base_url();?>assetsNew/js/owl.carousel.min.js" type="text/javascript"></script>
<script>
jQuery("#VideoSlider").owlCarousel({
  		  	items:4,
			merge:false,
			loop:false,
			margin:30,
			nav: false,
			lazyLoad:true,
			dots: false,
  			navText:["<i class='icon-arrow-left'></i>","<i class='icon-arrow-right'></i>"]
  		});
</script>