<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="#">
		<link rel="icon" type="image/png" href="">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<title><?php if(isset($MetaTitle)): echo $MetaTitle; elseif(isset($PageTitle)): echo $PageTitle; elseif(isset($Author)): echo $Author->FirstName." ".$Author->LastName; endif ?></title>
        <meta name="keywords" content="<?php if(isset($MetaKeyword)): echo $MetaKeyword; endif ?>">
        <meta name="description" content="<?php if(isset($MetaDescription)): echo $MetaDescription; endif ?>">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <link rel="canonical" href="<?php echo current_url();?>" />
<link rel="alternate" hreflang="en" href="<?php echo current_url();?>"/>
		<!--     Fonts and icons     -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>favicon.ico">
		<!-- CSS Files -->
		<link href='<?php echo base_url();?>assetsNew/css/bootstrap.min.css' rel="stylesheet" />
		<link href='<?php echo base_url();?>assetsNew/css/style.css' rel="stylesheet"/>
		<link href='<?php echo base_url();?>assetsNew/fonts/fonts.css' rel="stylesheet">
		<?php /*?><link href="<?php echo base_url();?>assetsNew/css/star.css" rel="stylesheet"/><?php */?>
        <link href="<?php echo base_url();?>assetsNew/css/star-rating.css" rel="stylesheet"/>
		<link href='<?php echo base_url();?>assetsNew/css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo base_url();?>assetsNew/css/demo1.css' rel='stylesheet' type='text/css'>

		<script src="<?php echo base_url();?>assetsNew/js/jquery.min.js" type="text/javascript"></script>
        <link href="<?php echo base_url()."assetsNew/mobile/"; ?>css/owl.carousel.css" rel="stylesheet"/>
        <link href="<?php echo base_url()."assetsNew/mobile/"; ?>css/owl.transitions.css" rel="stylesheet"/>
        <script src="<?php echo base_url()."assetsNew/frontend/"; ?>js/veganfirst.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assetsNew/css/simple-lightbox.js"></script>
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
<style>
.dropdown-toggle:hover .dropdown-menu {
display: block;
}

</style>        
 <div id="fb-root"></div> 
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=815966445202009';
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
<script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us7.list-manage.com","uuid":"f1df36ca5feee2c7e61661893","lid":"6332380a2d","uniqueMethods":true}) })</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=967193486681894&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code --> 

<!--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-2232518927738364",
    enable_page_level_ads: true });
</script>-->

<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
  var googletag = googletag || {};
  googletag.cmd = googletag.cmd || [];
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Rawnature-300x250-rightsidebar', [300, 250], 'div-gpt-ad-1544174505848-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Unit1-336x280-RightSidebar', [336, 280], 'div-gpt-ad-1544174293882-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Unit1-336x280-RightSidebar', [336, 280], 'div-gpt-ad-1547277789377-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Carmesi-970x90', [970, 90], 'div-gpt-ad-1544174697220-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>

<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Unit4-728x90-bottombar', [728, 90], 'div-gpt-ad-1544174814618-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
</script>


<script type="text/javascript">
    window.heap=window.heap||[],heap.load=function(e,t){window.heap.appid=e,window.heap.config=t=t||{};var r=t.forceSSL||"https:"===document.location.protocol,a=document.createElement("script");a.type="text/javascript",a.async=!0,a.src=(r?"https:":"http:")+"//cdn.heapanalytics.com/js/heap-"+e+".js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n);for(var o=function(e){return function(){heap.push([e].concat(Array.prototype.slice.call(arguments,0)))}},p=["addEventProperties","addUserProperties","clearEventProperties","identify","resetIdentity","removeEventProperty","setEventProperties","track","unsetEventProperty"],c=0;c<p.length;c++)heap[p[c]]=o(p[c])};
      heap.load("399431976");
</script>

<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:1033160,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>


<script>
  googletag.cmd.push(function() {
    googletag.defineSlot('/21721917858/Vezlay-sidebar-300x250', [300, 250], 'div-gpt-ad-1539169360340-0').addService(googletag.pubads());
    googletag.pubads().enableSingleRequest();
    googletag.enableServices();
  });
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
		<div class="wrapper">
			<div class="header">    
				<div class="container">
					<div class="row">
                    
                    <!--<div class="col-md-3 col-sm-4 text-center">
							<ul class="list-inline mt-20 mb-0">
							<li><a href="https://www.facebook.com/veganfirst/" target="_blank"><i class="icon-social-facebook"></i></a></li>
                            <li  style="padding:0 5px;"><a href="https://twitter.com/veganfirstdaily" target="_blank"><i class="icon-social-twitter"></i></a></li>
                            <li  style="padding:0 12px;"><a href="https://www.instagram.com/veganfirst_daily/" target="_blank"><i class="icon-social-instagram"></i></a></li>
                            
                            <li style="padding:0 5px;"><a href="https://www.youtube.com/channel/UCa6Og8sxkmukgXJXtYHsj-Q" target="_blank"><i class="icon-social-youtube"></i></a></li>
							</ul>
						</div>-->
						<div class="col-md-4 col-sm-4">
							<ul class="list-inline pt-35">
							<li><a href="https://www.facebook.com/veganfirst/" target="_blank"><i class="icon-social-facebook"></i></a></li>
                            <li  style="padding:0 12px;"><a href="https://twitter.com/veganfirstdaily" target="_blank"><i class="icon-social-twitter"></i></a></li>
                            <li  style="padding:0 12px;"><a href="https://www.instagram.com/veganfirst_daily/" target="_blank"><i class="icon-social-instagram"></i></a></li>
                            <li style="padding:0 12px;"><a href="https://www.pinterest.com/veganfirst0141/" target="_blank"><i class="icon-social-pinterest"></i></a></li>
                            <li style="padding:0 12px;"><a href="https://www.youtube.com/channel/UCa6Og8sxkmukgXJXtYHsj-Q" target="_blank"><i class="icon-social-youtube"></i></a></li>
							</ul>
						</div>
						<div class="col-md-4 col-sm-4 mt-10 mb-10">  
							<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assetsNew/img/logo.png" class="img-responsive center-block"></a>
						</div>
						<div class="col-md-4">
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
									<ul class="list-inline pt-35 pull-right">
										<li><a href="<?php echo base_url()."user/dashboard"; ?>"><?php if ($log->ProfilePic): ?><img src="<?php echo base_url()."media/upload/user/".$log->ProfilePic;?>" class="img-responsive head-pro-pic"><?php else: ?><img src="<?php echo base_url()."media/upload/user/generic-Pro-pic.jpg"?>" class="img-responsive head-pro-pic"><?php endif ?></a></li>
										<?php if($unreadnot > 0): ?>
										<li id="dLabel" role="button" data-toggle="dropdown" data-target="#"><img src="<?php echo base_url();?>assetsNew/icon/bell.png"><?php if($unreadnot >0 )
												{
												echo "<sup  style='left: -1.5em !important; top:-1.5em !important;'><span style='background: #ff0000;font-size: 12px;border-radius: 50%;padding: 0px 4px;color: #fff;'>".$unreadnot."</span></sup>"; 												} ?>
											</li>
											<ul class="dropdown-menu notifications" role="menu" aria-labelledby="dLabel"  style="padding: 10px">
												<?php $notf =$this->M_User->get_unread_notifications();
													if($notf):
														foreach ($notf as $not):
												?>
												<div class="notification-item">
													<?php if($not->type ==1):?>
														<p class="item-info"><a href="<?php echo base_url().'article/'.$not->not_link?>" onClick="readNotf('<?php echo $not->id_not;?>');"><?php echo $not->Notification; ?></a></p>
													<?php endif;?>
												   <?php if($not->type ==2):?>
														<p class="item-info"><a href="<?php echo base_url().'recipe/'.$not->not_link?>" onClick="readNotf('<?php echo $not->id_not;?>');"><?php echo $not->Notification; ?></a></p>
													<?php endif;?>
												</div>
												<?php
														endforeach;
													endif;
												?>
											</ul>
										<?php endif; ?>
										<li class="dropdown">
											<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog" style="color: #637A7A;font-size: 20px;" aria-hidden="true"></i></a>
						<ul class="dropdown-menu pull-right">
								<li><a href="<?php echo base_url().'user/dashboard'; ?>">Profile</a></li>
								<li><a href="<?php echo base_url().'user/logout';?>">Logout</a></li>
							</ul>
							</li>
							</ul>
								<?php } 
								else
								{	?>
                                <button class="btn btn-success pull-right mt-30" data-toggle="modal" data-target="#login_popup" style="padding: 10px 15px;">LOGIN / REGISTER</button>
									
								<?php } ?>
						</div>
					</div>
				</div>
<div class="container-fluid brdtp brdbtm" id="menu">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<nav class="navbar navbar-primary">
				<div class="navbar-collapse p-0" id="example-navbar-primary">
				<ul class="nav navbar-nav navbar-left">
				<li>
				<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu-features"></i>Features</a>
                <ul class="dropdown-menu pull-left">
                   <li><a href="<?php echo base_url().'article/category/food'?>">Food</a></li>
                   <li><a href="<?php echo base_url().'article/category/fashion-beauty'?>">Fashion & Beauty</a></li>
                   <li><a href="<?php echo base_url().'article/category/lifestyle'?>">Lifestyle</a></li>
                   <li><a href="<?php echo base_url().'article/category/earth-travel'?>">Earth & Travel</a></li>
                   <li><a href="<?php echo base_url().'article/category/fitness-nutrition'?>">Fitness & Nutrition</a></li>
                   <li><a href="<?php echo base_url().'article/category/youth'?>">Youth</a></li>
                </ul>
    			</li>
				<li><a href="<?php echo base_url().'article/category/news'?>"><i class="icon-menu-trends"></i>Trending</a></li>
                <li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu-recipes"></i>Recipes</a>
                    <ul class="dropdown-menu pull-left">
                      <li><a href="<?php echo base_url().'recipes/dairy-replacer';?>">Dairy replacers</a></li>
                      <li><a href="<?php echo base_url().'recipes/meat-replacers';?>">Meat replacers</a></li>
                      <li><a href="<?php echo base_url().'recipes/desserts';?>">Desserts</a></li>
                      <li><a href="<?php echo base_url().'recipes/sugar-free';?>">Sugar-free</a></li>
                      <li><a href="<?php echo base_url().'recipes/oil-free';?>">Oil-free</a></li>
                      <li><a href="<?php echo base_url().'recipes/homemade';?>">Home Made</a></li>                                  
                   </ul>
                   </li>
                   	<li><a href="<?php echo base_url().'videos';?>"><i class="icon-menu-videos"></i>Videos</a></li>
                    <li><a href="<?php echo base_url().'article/category/question-and-answer'?>"><i class="icon-menu-qna"></i>Questions & Answers</a></li>
                    <li><a href="<?php echo base_url()."restaurants"; ?>"><i class="icon-restaurant"></i>The Big Restaurant Guide</a></li>
                   
			</ul>
			<div class="pull-right">
				<div class="row">
					<div class="col-md-2 mt-10">
					<div class="text-right">
					<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-magnifier"></i></a>
					<ul class="dropdown-menu homesearch">
						<li>
						<div class="col-sm-12">
						<div class="form-group mt-0 mb-0 pb-0">
						<form class="form-inline"  action="<?php echo base_url(); ?>search" role="search" name="searchform"  onSubmit="return validateSearch()">
			<div class="form-group mt-10 mb-0 pb-0 is-empty">
            	<div class="input-group">
                <input type="text" class="form-control innersearch" placeholder="Search..." id="search" name="keyword">
                </div>
            </div>
       <button type="submit" class="btn btn-success searchpad"><i class="material-icons">search</i></button>
																		</form>
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header ends here -->
<a href="#" id="back-to-top" title="Back to top" class=""><i class="icon-arrow-up"></i></a>
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
				$('#menu').addClass('fixex');
				
			}
			else
			{
				$('#back-to-top').removeClass('show');
				$('#menu').removeClass('fixex');
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
			<!-- Modal start here -->
			<div class="modal fade bs-example-modal-sm" id="login_popup" tabindex="-1" role="dialog" aria-labelledby="login_popupLabel" aria-hidden="true" style="background: rgba(114, 135, 135, 0.85);">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title login-txt" id="login_popupLabel">Welcome back</h4>
						</div>
						<div class="modal-body">
							
                            <div id="formEror"><?php if(isset($Error)){ echo  "<div class='alert alert-danger'>".$Error."</div>"; }?></div>
							<form class="formLog" method="post" action="<?php echo base_url(); ?>user/login" name="loginform"  onSubmit="return validateLogin()">
								<input type="hidden" name="redirect"  value="<?php echo current_url();?>">
								<div class="mt-10 form-group is-empty">                    
									<input type="text" class="form-control" placeholder="Email..." name="email" value="<?php if(isset($_COOKIE['User_em'])) { echo $_COOKIE['User_em'];}?>">
								</div>
								<div class="mt-10 form-group is-empty">
									<input type="password" placeholder="Password..." class="form-control" name="password"  value="<?php if(isset($_COOKIE['User_pw'])) { echo $_COOKIE['User_pw'];}?>"/>
								</div>
								<div class="mt-15 mb-20">Forgot your password? <a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#reset_popup">Recover it </a>
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
									<div class="col-sm-12"><button class="btn btn-default ptbrl" onClick="location.href='<?php echo base_url().'user/login_process?url='.current_url();?>'"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp; Facebook</button></div>
									<!--<div class="col-sm-6"><button class="btn btn-info ptbrl2"><i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp; Twitter</button></div>-->
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
							<div id="formEror"><?php if(isset($Error)){ echo  "<div class='alert alert-danger'>".$Error."</div>"; }?></div>
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
									<div class="col-sm-12"><button class="btn btn-default ptbrl" onClick="location.href='<?php echo base_url().'user/login_process?url='.current_url();?>'; ?>'"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp; Facebook</button></div>
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
			<div class="modal fade bs-example-modal-sm" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="background: rgba(114, 135, 135, 0.85);">
				<div class="modal-dialog modal-sm" style="width: 21%;">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title login-txt" id="myModal1Label">No worries</h4>
						</div>
					  	<div class="modal-body">
							<form>
								<p class="decshome">Just fill the email you used upon registering,
									and we'll send you a link to your inbox to reset your password.</p>
								<div class="mt-10 form-group is-empty">                    
									<input type="email" class="form-control" placeholder="Email">
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-success coolbtn" style="width: 100%;">Retreive my password</button>
								</div>
								<div class="mt-15 mb-20" style="text-align: center;">
									Never mind.<a href="#" data-dismiss="modal" data-toggle="modal" data-target="#myModal">I remembered it.</a>
								</div>
							</form>
					  </div>
					</div>
				</div>
			</div>
            
            <div class="modal fade bs-example-modal-sm" id="reset_popup" tabindex="-1" role="dialog" aria-labelledby="login_popupLabel" aria-hidden="true" style="background: rgba(114, 135, 135, 0.85);">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title login-txt" id="login_popupLabel">No worries</h4>
                            
						</div>
						<div class="modal-body">
                        <p style="font-size: 16px;	line-height: 24px;">Just fill the email you used upon registering, and we'll send you a link to your inbox to reset your password.</p>
							<div id="formEror"><?php if(isset($Error)){ echo  "<div class='alert alert-danger'>".$Error."</div>"; }?></div>
							<form class="formLog" method="post" action="<?php echo base_url(); ?>user/resetPassword" name="resetform"  onSubmit="return validateReset()">
								<input type="hidden" name="redirect"  value="<?php echo current_url();?>">
								<div class="mt-10 form-group is-empty">                    
									<input type="text" class="form-control" placeholder="Email..." name="email">
								</div>
								
								
								
					
								<div class="text-center mt-20">
									<button type="submit" class="btn btn-success coolbtn" style="width: 100%;">Retreive my password</button>
								</div>
								
								
								
							</form>
                            
								<div class="mt-15 mb-20 text-center">
									Never mind. <a href="javascript:void(0);" data-dismiss="modal" data-toggle="modal" data-target="#reg_popup"> I remembered it.</a>
								</div>
						</div>
					</div>
				</div>
			</div>