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
		<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url();?>favicon.ico">
		<!-- CSS Files -->
		<link href='<?php echo base_url();?>assetsNew/css/bootstrap.min.css' rel="stylesheet" />
		<link href='<?php echo base_url();?>assetsNew/css/style.css?v=1.0.1' rel="stylesheet"/>
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
  
		<div class="wrapper">
			<div class="header">    
				
<div class="container-fluid brdbtm" id="menu">
	<div class="container">
		<div class="row">
        	<div class="col-sm-2 mt-10" id="logo">
					<a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assetsNew/img/logo.png" class="img-responsive center-block"></a>
					<span>All Things Vegan in India</span>
            </div>
			<div class="col-sm-10 p-0">
            <div class="hide-sticky">
             <div class="col-sm-4 mt-10 mb-10">
             <ul class="text-right list-inline topmenu">
             <li><a href="">Free E-Book</a></li>
             <li><a href="">Advertise</a></li>
             <li><a href="">Career</a></li>
             </ul>
            </div>
            <div class="col-sm-5 mt-5">
                    <div class="mt-0 mb-0 pb-0" style="width: 100%;">
						<form class="form-inline"  action="<?php echo base_url(); ?>search" role="search" name="searchform"  onSubmit="return validateSearch()">
			<div class="form-group mt-0 mb-0 pb-0 is-empty">
            	<div class="input-group" style="width: 100%;">
                <input type="text" class="form-control innersearch" placeholder="Search..." id="search" name="keyword" style="width: 100%;">
                </div>
            </div>
       <button type="submit" class="btn btn-success searchpad mt-0 mb-0 z-1"><i class="material-icons">search</i></button>
				</form>
					</div>
              </div>
              <div class="col-md-3  mt-5">
							<?php
								$uid=$this->session->userdata('User_id');
								if($uid)
								{
									$this->load->model("M_User");
									$this->M_User = new M_User();
									$log=$this->M_User->getUserInfo($uid);
									$unread=$this->M_User->get_unread_msg();
									$unreadnot=$this->M_User->get_unread_notification();
									?>
									<ul class="list-inline mt-5 pull-right">
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
                                <button class="btn btn-success pull-right mt-0 mb-0 z-1" data-toggle="modal" data-target="#login_popup" style="padding: 7px 12px;">LOGIN / REGISTER</button>
									
								<?php } ?>
						</div>
                        </div>
						
            </div>
         </div>
		</div>				



				<ul class="exo-menu">
				
				
				<li><a href="<?php echo base_url().'starttoday';?>">STARTER KIT</a></li>
				<li class="mega-drop-down"><a href="#">NEWS</a>
				<div class="animated fadeIn mega-menu container mm1">
					<div class="mega-menu-wrap">
						<div class="row">
						<div class="col-md-2 text-right">
						<ul class="stander pl-15">
							<li class="td-menu-item"><a href="#" class="cur-item" data-val="" data-type="article" data-td_id="mm1" data-offset="0">All</a></li>
							<li class="td-menu-item"><a href="#" data-val="43" data-type="article" data-td_id="mm1" data-offset="0">Food</a></li>
							<li class="td-menu-item"><a href="#" data-val="19" data-type="article" data-td_id="mm1" data-offset="0">Fashion</a></li>
							<li class="td-menu-item"><a href="#" data-val="9" data-type="article" data-td_id="mm1" data-offset="0">Life Style</a></li>
							<li class="td-menu-item"><a href="#" data-val="40" data-type="article" data-td_id="mm1" data-offset="0">Earth & Travel</a></li>
							<li class="td-menu-item"><a href="#" data-val="12" data-type="article" data-td_id="mm1" data-offset="0">Fitness & Nutrition</a></li>
							<li class="td-menu-item"><a href="#" data-val="27" data-type="article" data-td_id="mm1" data-offset="0">Youth</a></li>
						</ul>	
						</div>
						<div class="col-md-10" style="    border-left: 1px solid #dbdbdb;
    padding-left: 0;">
						<div class=" dynamic"></div>
						<div class="clearfix mb-5"></div>
						<ul class="list-inline col-sm-12 pagin">
							<li><a href="#" class="prev pagi" data-td_id="mm1"><span class="material-icons">keyboard_arrow_left</span></a></li>
							<li><a href="#" class="next pagi" data-td_id="mm1"><span class="material-icons">keyboard_arrow_right</span></a></li>
						</ul>		
						</div>
						</div>
					</div>
					
				</div>
				</li>





				
                <li class="dropdown">
					<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">RECIPES</a>
                    <ul class="dropdown-menu pull-left">
                      <li><a href="<?php echo base_url().'recipes/dairy-replacer';?>">Dairy replacers</a></li>
                      <li><a href="<?php echo base_url().'recipes/meat-replacers';?>">Meat replacers</a></li>
                      <li><a href="<?php echo base_url().'recipes/desserts';?>">Desserts</a></li>
                      <li><a href="<?php echo base_url().'recipes/sugar-free';?>">Sugar-free</a></li>
                      <li><a href="<?php echo base_url().'recipes/oil-free';?>">Oil-free</a></li>
                      <li><a href="<?php echo base_url().'recipes/homemade';?>">Home Made</a></li>                                  
                   </ul>
				   </li>
				   

				   <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">DISCOVER <b class="caret"></b></a> 
                      
                        <ul class="dropdown-menu">
                          
                            <li><a href="#">Link 1</a></li>
                            <li><a href="#">Link 2</a></li>
                            <li><a href="#">Link 3</a></li>
                          
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Link 4</a>
        						<ul class="dropdown-menu">
                                   
									<li><a href="#">Submenu Link 4.1</a></li>
									<li><a href="#">Submenu Link 4.2</a></li>
									<li><a href="#">Submenu Link 4.3</a></li>
									<li><a href="#">Submenu Link 4.4</a></li>
                                                                      
								</ul>
							</li>
                          
                            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Link 5</a>
								<ul class="dropdown-menu">
                                    
									<li><a href="#">Submenu Link 5.1</a></li>
									<li><a href="#">Submenu Link 5.2</a></li>
									<li><a href="#">Submenu Link 5.3</a></li>
									
									                          
								</ul>
							</li>                                   
                        </ul>
                    </li>
				   <li><a href="<?php echo base_url();?>">CONFERENCE</a></li>
				   <li><a href="<?php echo base_url().'contact-us';?>">CONTACT US</a></li>
                  <!--  	<li><a href="<?php echo base_url().'videos';?>"><i class="icon-menu-videos"></i>Videos</a></li>
                    <li><a href="<?php echo base_url().'article/category/question-and-answer'?>"><i class="icon-menu-qna"></i>Questions & Answers</a></li>
                    <li><a href="<?php echo base_url()."restaurants"; ?>"><i class="icon-restaurant"></i>The Big Restaurant Guide</a></li> -->
                    
                   
			</ul>
			

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
		var scrollTrigger = 80, // px
		backToTop = function () 
		{
			var scrollTop = $(window).scrollTop();
			if (scrollTop > scrollTrigger) 
			{
				$('#back-to-top').addClass('show');
				$('#menu').addClass('fixex');
				$('.hide-sticky').addClass('hidden');
				$('#logo').addClass('col-sm-1 p-0 mt-0-imp');
				
			}
			else
			{
				$('#back-to-top').removeClass('show');
				$('#menu').removeClass('fixex');
				$('.hide-sticky').removeClass('hidden');
				$('#logo').removeClass('col-sm-1 p-0 mt-0-imp');
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