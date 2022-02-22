<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="#">
	<link rel="icon" type="image/png" href="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php if(isset($MetaTitle)): echo $MetaTitle; elseif(isset($PageTitle)): echo $PageTitle; elseif(isset($Author)): echo $Author->FirstName." ".$Author->LastName; endif ?></title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<link rel="canonical" href="<?php echo current_url();?>" />
<link rel="alternate" hreflang="en" href="<?php echo current_url();?>"/>
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet">

	<!-- CSS Files -->    
    <link href="<?php echo base_url()."assetsNew/mobile/"; ?>css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()."assetsNew/mobile/"; ?>css/style.css" rel="stylesheet"/>
    <link href="<?php echo base_url()."assetsNew/mobile/"; ?>fonts/fonts.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url()."assetsNew/mobile/"; ?>css/style.min.css">
<link href="<?php echo base_url();?>assetsNew/css/star-rating.css" rel="stylesheet"/>     
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assetsNew/mobile/"; ?>css/component.css" />
	<script src="<?php echo base_url()."assetsNew/mobile/"; ?>js/modernizr.custom.js"></script>


<link href="<?php echo base_url()."assetsNew/mobile/"; ?>css/owl.carousel.css" rel="stylesheet"/>
<link href="<?php echo base_url()."assetsNew/mobile/"; ?>css/owl.transitions.css" rel="stylesheet"/>
<link href='<?php echo base_url();?>assetsNew/css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url();?>assetsNew/css/demo1.css' rel='stylesheet' type='text/css'>
	<script src="<?php echo base_url()."assetsNew/mobile/"; ?>js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assetsNew/"; ?>js/veganfirst.js" type="text/javascript"></script>
<meta property="fb:pages" content="1604163243181613" />    
<meta property="fb:app_id" content="815966445202009" />    
<meta property="og:locale" content="en_GB"/>
<meta property="og:site_name" content="Vegan First"/>
<?php if(isset($Fb_title)):?>
<meta property="og:title" content="<?php echo $Fb_title; ?>"/>
<meta itemprop="name" content="<?php echo $Fb_title; ?>"/>
<meta name="twitter:title" content="<?php echo $Fb_title; ?>"/>
<?php endif;?>
<meta property="og:url" content="<?php echo current_url();?>"/>
<meta name="twitter:url" content="<?php echo current_url();?>"/>
<meta property="og:type" content="article"/>
<meta property="article:publisher" content="https://www.facebook.com/veganfirst/"/>
<meta name="twitter:site" content="@veganfirst"/>
<?php if(isset($Fb_author)):?>
<meta name="author" content="<?=$Fb_author->FirstName.' '.$Fb_author->LastName?>"/>

<?php else:?>
<meta name="author" content="Vegan First"/>
<?php endif;?>
<meta name="twitter:creator" content="@veganfirst"/>
<?php if(isset($Fb_desc)):?>
<meta property="og:description" content="<?php echo $Fb_desc; ?>"/>

<meta name="twitter:description" content="<?php echo $Fb_desc; ?>"/>
<?php endif;?>
<?php if(isset($Fb_img)):?>
<meta property="og:image" content="<?php echo $Fb_img; ?>"/>
<meta property="og:image:width" content="900" />
<meta property="og:image:height" content="385" />
<meta itemprop="image" content="<?php echo $Fb_img; ?>"/>
<meta name="twitter:image" content="<?php echo $Fb_img; ?>"/>

<?php endif;?>
<meta name="twitter:card" content="summary_large_image"/>







 
 <div id="fb-root"></div> 
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=815966445202009";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '967193486681894');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=967193486681894&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2232518927738364",
    enable_page_level_ads: true });
</script>
</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87356165-1', 'auto');
  ga('send', 'pageview');

</script>

<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>
<script>
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Carmesi-970x90', [970, 90], 'div-gpt-ad-1586865586235-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Rawnature-300x250-rightsidebar', [300, 250], 'div-gpt-ad-1586865627379-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
  window.googletag = window.googletag || {cmd: []};
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Unit4-728x90-bottombar', [728, 90], 'div-gpt-ad-1586865670864-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>
<!--
<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Unit5_320x50_leaderboard_mobile', [320, 50], 'div-gpt-ad-1547278276364-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Unit6_300x250_insidecontent_mobile', [300, 250], 'div-gpt-ad-1547278488440-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Unit7_320x100_bottombar_mobile', [320, 100], 'div-gpt-ad-1547278553968-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script> -->






<div class="wrapper">
	
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
            <div class="row">
                <div class="col-xs-4">
                    <div class="navbar-header pull-left">
                        <a type="button" class="navbar-toggle c-hamburger c-hamburger--htx" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                           <span>toggle menu</span>
                        </a>                    
                    </div>
                 </div>
               
                <div class="col-xs-4 mt-5">
                    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url()."assetsNew/mobile/"; ?>img/logo.png" class="img-responsive center-block" style="width:80px;"></a>
                </div>
                <div class="col-xs-12">
                    <div class="">
                        <div class="row">                            	
                            <div class="">
                                <div id="sb-search" class="sb-search">
                                    <form action="<?php echo base_url().'search';?>">
                                        <input class="sb-search-input" placeholder="Search anything..." type="text" value="" name="keyword" id="search">
                                        <input class="sb-search-submit" type="submit" value="">
                                        <span class="sb-icon-search"></span>
                                    </form>
                                </div>                                   
                            </div>
                        </div>
                    </div>                
                </div>            
            </div>
        
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li class="active">
                       <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu-features"></i>Features</a>
                       <ul class="dropdown-menu">
                                                <li><a href="<?php echo base_url().'article/category/food'?>">Food</a></li>
                                                <li><a href="<?php echo base_url().'article/category/fashion-beauty'?>">Fashion & Beauty</a></li>
 						<li><a href="<?php echo base_url().'article/category/lifestyle'?>">Lifestyle</a></li>
                                                <li><a href="<?php echo base_url().'article/category/earth-travel'?>">Earth & Travel</a></li>
                                                <li><a href="<?php echo base_url().'article/category/fitness-nutrition'?>">Fitness & Nutrition</a></li>
                                                <li><a href="<?php echo base_url().'article/category/youth'?>">Youth</a></li>                                  
                       </ul>
                    </li>
                    
                    
                    <li>
                        <a href="<?php echo base_url().'article/category/news';?>"><i class="icon-menu-trends"></i>Trending</a>
                    </li>
                    <?php /*?><li>
                        <a href="<?php echo base_url().'alwayshungry';?>" ><i class="icon-menu-recipes"></i>Recipes</a></li><?php */?>
                    
                    
                    <li>
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu-recipes"></i>Recipes</a>
                        <ul class="dropdown-menu">
                           <li><a href="<?php echo base_url().'recipes/dairy-replacer';?>">Dairy replacers</a></li>
                          <li><a href="<?php echo base_url().'recipes/meat-replacers';?>">Meat replacers</a></li>
                          <li><a href="<?php echo base_url().'recipes/desserts';?>">Desserts</a></li>
                          <li><a href="<?php echo base_url().'recipes/sugar-free';?>">Sugar-free</a></li>
                          <li><a href="<?php echo base_url().'recipes/oil-free';?>">Oil-free</a></li>
                          <li><a href="<?php echo base_url().'recipes/homemade';?>">Home Made</a></li>                                  
                         </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'videos';?>"><i class="icon-menu-videos"></i>Videos</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url().'article/category/question-and-answer';?>"><i class="icon-menu-qna"></i>Questions & Answers</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>restaurants"><i class="icon-restaurant"></i>The Big Restaurant Guide
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>contact-us"><i class="icon-menu-qna"></i>Contact Us
                        </a>
                    </li>
                </ul>
                
                <?php
								$uid=$this->session->userdata('User_id');
								if($uid)
								{
									$this->load->model("m_user");
									$this->M_User = new M_User();
									$log=$this->M_User->getUserInfo($uid);
									$unread=$this->M_User->get_unread_msg();
									$unreadnot=$this->M_User->get_unread_notification();
									?>
                
                <div class="row mt-10">
                	<div class="col-xs-3">
                    <?php if($log->ProfilePic): ?>
                    	<img src="<?php echo base_url()."media/upload/user/".$log->ProfilePic; ?>" class="img-responsive menunaimg">
                    <?php else:?>
                    <img src="<?php echo base_url()."media/upload/user/generic-Pro-pic.jpg"; ?>" class="img-responsive menunaimg">
                    <?php endif;?>    
                    </div>
                    <div class="col-xs-9 p-0 pt-5">
                    	<span class="menuna"><?php echo $log->Name;?></span><br>
                        <ul class="list-inline userlink">
                            <li><a href="javascript:void(0);" onClick="location.href='<?php echo base_url().'user/dashboard';?>'">Profile</a></li>
                            <li><a href="javascript:void(0);">Setting</a></li>
                            <li><a href="javascript:void(0);" onClick="location.href='<?php echo base_url().'user/logout';?>'">Log out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix pb-10"></div>
                <?php } else{?>
                <div class="row mt-10">
                <div class="col-xs-6">
                <p class="userp">Already a member?</p>
                <a href="#" class="btn btn-success coolbtn" data-toggle="modal" data-target="#login_popup" style="letter-spacing: 2px !important;">Log in</a>
                </div>
                <div class="col-xs-6">
                <p class="userp">New around here?</p>
                <a href="#" class="btn btn-success coolbtn" data-toggle="modal" data-target="#reg_popup" style="letter-spacing: 2px !important;">Register</a>
                </div>
                </div>
                <div class="clearfix pb-10"></div>
                <?php } ?>
                
    		</div>
    </div>
</nav>
<a href="javascript:void(0);" id="back-to-top" title="Back to top"><i class="icon-arrow-up"></i></a>
<script type="text/javascript">
if ($('#back-to-top').length) 
	{
		var scrollTrigger = 100, // px
		backToTop = function () 
		{
			var scrollTop = $(window).scrollTop();
			if (scrollTop > scrollTrigger) 
			{
				$('#back-to-top').addClass('show');
			}
			else
			{
				$('#back-to-top').removeClass('show');
			}
		};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('#back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
</script>
<div class="modal fade bs-example-modal-sm" id="login_popup" tabindex="-1" role="dialog" aria-labelledby="login_popupLabel" aria-hidden="true" style="background: rgba(114, 135, 135, 0.85);">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title login-txt" id="login_popupLabel">Welcome back</h4>
						</div>
						<div class="modal-body">
							<?php if(isset($Error)){ echo  '<h5>'.$Error.'</h5>'; }?>
                            <div id="formEror"></div>
							<form class="formLog" method="post" action="<?php echo base_url(); ?>user/login" name="loginform"  onSubmit="return validateLogin()">
								<input type="hidden" name="redirect"  value="<?php echo current_url();?>">
								<div class="mt-10 form-group is-empty">                    
									<input type="text" class="form-control" placeholder="Email..." name="email" value="<?php if(isset($_COOKIE['User_em'])) { echo $_COOKIE['User_em'];}?>">
								</div>
								<div class="mt-10 form-group is-empty">
									<input type="password" placeholder="Password..." class="form-control" name="password"  value="<?php if(isset($_COOKIE['User_pw'])) { echo $_COOKIE['User_pw'];}?>"/>
								</div>
								<div class="mt-15 mb-20">Forgot your password? <a href="javascript:void(0);">Recover it </a>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="Remember" <?php if(isset($_COOKIE['User_remember'])) { echo 'checked';}?>>
										Remeber me the next time I log in.
									</label>
								</div>
					
								<div class="text-center mt-20">
									<button type="submit" class="btn btn-success coolbtn" style="width: 100%;">Let me In</button>
								</div>
								
								<div class="mt-10 mb-10 text-center">
									Or login in via
								</div>
								
							</form>
                            <div class="row">
									<div class="col-sm-12"><button class="btn btn-default ptbrl" onClick="location.href='<?php echo base_url().'user/login_process?url='.current_url();?>'" style="width:100%"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp; Facebook</button></div>
																	</div>
								<div class="mt-15 mb-20">
									I'm new around here.<a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#reg_popup"> Become a member.</a>
								</div>
						</div>
					</div>
				</div>
			</div>
            
            
            <div class="modal fade bs-example-modal-sm" id="reg_popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background: rgba(114, 135, 135, 0.85);">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title login-txt" id="reg_popupLabel">Become a member</h4>
						</div>
						<div class="modal-body">
							<?php if(isset($Error)){ echo  '<h4>'.$Error.'</h4>'; }?>
                            <div id="formEror"></div>
							<form method="post" action="<?php echo base_url(); ?>user/register" name="regform"   onSubmit="return validateReg()">
								<div class="mt-10 form-group is-empty">                    
									<input type="text" class="form-control" placeholder="Name" name='Name'>
								</div>
								<div class="mt-10 form-group is-empty">                    
									<input type="email" class="form-control" placeholder="Email" name='Email'>
								</div>
								<div class="mt-10 form-group is-empty">                    
									<input type="password" placeholder="Password" class="form-control" name="Password" />
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="subscribe" checked>
										Subscribe me to the newsletter as well.
									</label>
								</div>
								<div class="text-center mt-20">
									<button type="submit" class="btn btn-success coolbtn" style="width: 100%;">Register me</button>
								</div>
								<div class="mt-10 mb-10 text-center">
									Or login in via
								</div>
								<div class="row">
									<div class="col-sm-12"><button class="btn btn-default ptbrl" onClick="location.href='<?php echo base_url().'user/login_process?url='.current_url();?>'" style="width:100%"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp; Facebook</button></div>
									<!--<div class="col-sm-6"><button class="btn btn-info ptbrl2"><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp; Twitter</button></div>-->
								</div>
								<div class="mt-15 mb-20" style="text-align: center;">
									Oh wait.<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#login_popup"> I'm already a member.</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
	<!-- header ends here -->