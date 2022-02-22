<div id="navigation">
		<div class="container-fluid">
			<a href="#" id="brand">Writer's Panel</a>
			
			<ul class='main-nav'>
				<li>
                                    <a href="<?php echo base_url()."writer/dashboard"; ?>"> <i class="icon-home"></i>
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
						<a href="<?php echo base_url()."writer/site_config"; ?>"> <i class="icon-home"></i>
						<span>Config</span>
					</a>
						</li>
                        <li>
						<a href="<?php echo base_url()."writer/seo"; ?>"> <i class="icon-home"></i>
						<span>SEO</span>
					</a>
						</li>
                        <li>
						<a href="<?php echo base_url()."writer/add_tags"; ?>"> <i class="icon-home"></i>
						<span>Home Tags</span>
					</a>
						</li>
                        <li><a href="<?php echo base_url()."writer/add_tags"; ?>"> <i class="icon-home"></i> <span>Home Tags</span>
						</a>
					</li>

					<li><a href="<?php echo base_url()."writer/advertisement_config"; ?>"> <i class="icon-home"></i> <span>Advertisement</span>
						</a>
					</li>

					<li><a href="<?php echo base_url()."writer/notification"; ?>"> <i class="icon-home"></i> <span>Notification</span>
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
						<a href="<?php echo base_url()."writer/manage_author"; ?>">Manage Author</a>
						</li>
						<li>
                           <a href="<?php echo base_url()."writer/add_author" ?>">Add Author</a>
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
						<a href="<?php echo base_url()."writer/manage_columnist"; ?>">Manage Columnist</a>
						</li>
						<li>
                           <a href="<?php echo base_url()."writer/add_columnist" ?>">Add Columnist</a>
						</li>
                        
                        
                        <li>
						<a href="<?php echo base_url()."writer/manage_questions"; ?>">Manage Question</a>
						</li>
						<li>
                           <a href="<?php echo base_url()."writer/add_questions" ?>">Add Question</a>
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
						<a href="<?php echo base_url()."writer/manage_article_tag"; ?>">Manage TAG</a>
						</li>
                            <li>
						<a href="<?php echo base_url()."writer/manage_article_cat"; ?>">Manage Category</a>
						</li>
						<li>
                           <a href="<?php echo base_url()."writer/add_article_cat" ?>">Add Category</a>
						</li>
                    
						<li>
						<a href="<?php echo base_url()."writer/manage_article"; ?>">Manage Article</a>
						</li>
						<li>
                           <a href="<?php echo base_url()."writer/add_article" ?>">Add Article</a>
						</li>
					</ul>
				</li>
                
                
                <li>
					<a href="#" data-toggle="dropdown" class='dropdown-toggle'>
						<i class="icon-edit"></i>
						<span>Recipes</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li>
						<a href="<?php echo base_url()."writer/manage_recipe_tag"; ?>">Manage TAG</a>
						</li>
						<li>
                           <a href="<?php echo base_url()."writer/manage_recipes" ?>">Manage Recipes</a>
						</li>
                        <li>
                           <a href="<?php echo base_url()."writer/add_recipes" ?>">Add Recipe</a>
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
						<a href="<?php echo base_url()."writer/manage_restaurant"; ?>">Manage Restaurant</a>
						</li>
                                                <li>
							<a href="<?php echo base_url()."writer/manage_cities"; ?>">Manage Cities</a>
						</li>
                                                 
                                                <li>
						<a href="<?php echo base_url()."writer/add_restaurant_premium"; ?>">Add Restaurant</a>
						</li>
						
					</ul>
				</li>
                
                
                
                
                
			</ul>
			<div class="user">
				<div class="dropdown">
					<a href="#" class='dropdown-toggle' data-toggle="dropdown">
					<?php echo	$_SESSION['Writer_Name'] ?> 
                                            <img src="<?php echo base_url()."assets/images/GenericProfile.png"; ?>" alt="" width="25"></a>
					<ul class="dropdown-menu pull-right">
						<li>
							<a href="<?php echo base_url()."writer/setting"; ?>">Account settings</a>
						</li>
						<li>
                         <a href="<?php echo base_url()."writer/logout"; ?>">Sign out</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>