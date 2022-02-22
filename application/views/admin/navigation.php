<div id="navigation">
	<div class="container-fluid">
		<a href="#" id="brand">Admin's Panel</a>
		<ul class='main-nav'>
			<li>
				<a href="<?php echo base_url()."admin/dashboard"; ?>"> <i class="icon-home"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<span><i class="icon-home"></i>Site</span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo base_url()."admin/users"; ?>"> <i class="icon-user"></i>
							<span>Users</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url()."admin/subscriber"; ?>"> <i class="icon-user"></i>
							<span>Subscriber</span>
						</a>
					</li>
                    <li>
						<a href="<?php echo base_url()."admin/home_banners"; ?>"> <i class="icon-home"></i>
							<span>Home Banners</span>
						</a>
					</li>
					<li>
						<a href="<?php echo base_url()."admin/site_config"; ?>"> <i class="icon-home"></i>
							<span>Config</span>
						</a>
					</li>
                    <li>
						<a href="<?php echo base_url()."admin/seo"; ?>"> <i class="icon-home"></i>
							<span>SEO</span>
						</a>
					</li>
                    <li><a href="<?php echo base_url()."admin/add_tags"; ?>"> <i class="icon-home"></i> <span>Home Tags</span>
						</a>
					</li>

					<li><a href="<?php echo base_url()."admin/advertisement_config"; ?>"> <i class="icon-home"></i> <span>Advertisement</span>
						</a>
					</li>

					<li><a href="<?php echo base_url()."admin/notification"; ?>"> <i class="icon-home"></i> <span>Notification</span>
						</a>
					</li>


					<li>
						<a href="<?php echo base_url()."admin/pages"; ?>"> <i class="icon-home"></i>
							<span>Pages</span>
						</a>
					</li>
					
					
				</ul>
			</li>
			
			<li>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<i class="icon-edit"></i>
					<span>Author</span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo base_url()."admin/manage_author"; ?>">Manage Author</a>
					</li>
					<li>
					   <a href="<?php echo base_url()."admin/add_author" ?>">Add Author</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<i class="icon-edit"></i>
					<span>Columnist</span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo base_url()."admin/manage_columnist"; ?>">Manage Columnist</a>
					</li>
					<li>
					   <a href="<?php echo base_url()."admin/add_columnist" ?>">Add Columnist</a>
					</li>
					<li>
						<a href="<?php echo base_url()."admin/manage_questions"; ?>">Manage Question</a>
					</li>
					<li>
					   <a href="<?php echo base_url()."admin/add_questions" ?>">Add Question</a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<i class="icon-edit"></i>
					<span>Article</span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">

                <li>
						<a href="<?php echo base_url()."admin/manage_article_tag"; ?>">Manage TAG</a>
					</li>
					<li>
						<a href="<?php echo base_url()."admin/manage_article_cat"; ?>">Manage Category</a>
					</li>
					<li>
					   <a href="<?php echo base_url()."admin/add_article_cat" ?>">Add Category</a>
					</li>
					<li>
						<a href="<?php echo base_url()."admin/manage_article"; ?>">Manage Article</a>
					</li>
					<li>
					   <a href="<?php echo base_url()."admin/add_article" ?>">Add Article</a>
					</li>
				</ul>
			</li>
			<?php /*?><li>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<i class="icon-edit"></i>
					<span>Video</span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo base_url()."admin/manage_video"; ?>">Manage Video</a>
					</li>
					<li>
					   <a href="<?php echo base_url()."admin/add_video" ?>">Add Video</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<i class="icon-edit"></i>
					<span>Products</span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo base_url()."admin/manage_category"; ?>">Manage Category</a>
					</li>
					<li>
					   <a href="<?php echo base_url()."admin/manage_products" ?>">Manage Products</a>
					</li>
				</ul>
			</li><?php */?>
			<li>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<i class="icon-edit"></i>
					<span>Recipes</span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
                
                <li>
						<a href="<?php echo base_url()."admin/manage_recipe_tag"; ?>">Manage TAG</a>
					</li>
					<li>
						<a href="<?php echo base_url()."admin/manage_recipes_cat"; ?>">Manage Category</a>
					</li>
					<li>
					   <a href="<?php echo base_url()."admin/manage_recipes" ?>">Manage Recipes</a>
					</li>
                    <li>
					   <a href="<?php echo base_url()."admin/add_recipes" ?>">Add Recipe</a>
					</li>
                    
                    
				</ul>
			</li>
			<li>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<i class="icon-edit"></i>
					<span>Restaurant</span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="<?php echo base_url()."admin/manage_restaurant"; ?>">Manage Restaurant</a>
					</li>
					<li>
						<a href="<?php echo base_url()."admin/manage_cities"; ?>">Manage Cities</a>
					</li>
					<li>
						<a href="<?php echo base_url()."admin/manage_rating"; ?>">Restaurant Rating</a>
					</li>
					<li>
						<a href="<?php echo base_url()."admin/add_restaurant_premium"; ?>">Add Restaurant (Premium)</a>
					</li>
				</ul>
                <li>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<i class="icon-edit"></i>
					<span>Events</span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
                
                <li>
						<a href="<?php echo base_url()."admin/events"; ?>">Manage Events</a>
					</li>
					<li>
						<a href="<?php echo base_url()."admin/add_event"; ?>">Add Event</a>
					</li>
					
                    
                    
				</ul>
			</li>
                
			<li>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<i class="icon-edit"></i>
					<span>Shop</span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
                	<li><a href="<?php echo base_url()."admin/subscription"; ?>">Manage Plans</a></li>
					<li><a href="<?php echo base_url()."admin/add_plan"; ?>">Add Plan</a></li>
                	<li><a href="<?php echo base_url()."admin/online_course";?>">Manage Course</a></li>
					<li><a href="<?php echo base_url()."admin/add_course"; ?>">Add Course</a></li>
                	<li><a href="<?php echo base_url()."admin/online_webinar";?>">Manage Webinar</a></li>
					<li><a href="<?php echo base_url()."admin/add_webinar"; ?>">Add Webinar</a></li>
					
                    
                    
				</ul>
			</li>
            <li>
				<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
					<i class="icon-edit"></i>
					<span>Testimonials</span>
					<span class="caret"></span>
				</a>
				<ul class="dropdown-menu">
                
                <li>
						<a href="<?php echo base_url()."admin/testimonials"; ?>">Manage Plans</a>
					</li>
					<li>
						<a href="<?php echo base_url()."admin/add_testim"; ?>">Add Plan</a>
					</li>
					
                    
                    
				</ul>
			</li>
		</ul>
		<div class="user">
			<div class="dropdown">
				<a href="#" class='dropdown-toggle' data-toggle="dropdown">
				<?php echo	$this->session->userdata('Admin_Name'); ?> 
				<img src="<?php echo base_url()."assets/images/GenericProfile.png"; ?>" alt="" width="25"></a>
				<ul class="dropdown-menu pull-right">
					<li>
						<a href="<?php echo base_url()."admin/setting"; ?>">Account settings</a>
					</li>
					<li>
					 <a href="<?php echo base_url()."admin/logout"; ?>">Sign out</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>