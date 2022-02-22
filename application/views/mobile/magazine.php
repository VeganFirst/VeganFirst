<?php $this->load->view('mobile/header'); ?>
<style type="text/css">
		td {text-align: left;padding: 8px;border-bottom: 1px solid #eee;font-family: "Source Sans Pro";font-size: 16px;line-height: 28px;font-weight: 600;}
		
		.nav-tabs { border-bottom: 2px solid #DDD; background: #ffffff; }
		.nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
		.nav-tabs > li > a { border: none; color: #6cbd45 !important; }
		.nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #292b28 !important; background: transparent; }
		.nav-tabs > li > a::after { content: ""; background: #292b28; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -2px; transition: all 250ms ease 0s; transform: scale(0); }
		.nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
		.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #6cbd45; }
		/*.tab-pane { padding: 15px 0; }*/
		/*.tab-content{padding:20px}*/
		.nav-tabs>li>a {position: relative;display: block;padding: 5px 15px 10px 15px;}
		.card {background: #FFF none repeat scroll 0% 0%; box-shadow: none !important; margin-bottom: 30px; }
	</style>

<link href="<?php echo base_url(); ?>assetsNew/css/jquery.skidder.css" rel="stylesheet"/>
<!-- Fontawesome -->
<link href="<?php echo base_url(); ?>assetsNew/magazine/vendors/font-awesome/css/font-awesome.min.css"
      rel="stylesheet"/>
<!-- Animate -->
<link href="<?php echo base_url(); ?>assetsNew/magazine/vendors/animate.css" rel="stylesheet"/>
<!-- Swiper -->
<link href="<?php echo base_url(); ?>assetsNew/magazine/vendors/swiper/css/swiper.min.css" rel="stylesheet"/>
<!-- Magnific-popup -->
<link href="<?php echo base_url(); ?>assetsNew/magazine/vendors/vendors/magnific-popup/magnific-popup.css"
      rel="stylesheet"/>
<!-- Base MasterSlider style sheet -->
<link href="<?php echo base_url(); ?>assetsNew/magazine/vendors/masterslider/style/masterslider.css" rel="stylesheet"/>
<!-- Master Slider Skin -->
<link href="<?php echo base_url(); ?>assetsNew/magazine/vendors/masterslider/skins/default/style.css" rel="stylesheet"/>
<!-- Stylesheet -->
<link href="<?php echo base_url(); ?>assetsNew/magazine/style.css" rel="stylesheet"/>


<div class="wrapper">

    <div class="content-area pvt0">

        <div class="section-full fs-slide">

            <div class="swiper-container">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="fs-item" data-bg-color="#f1f1f1">
                            <div class="fs-entry-bg" data-bg-image='<?php echo base_url(); ?>assetsNew/magazine/images/magcover.jpg'></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="fs-entry-item">
                                        <h4 class="fs-title fs-animate-text" data-label="">Latest</h4>
                                        <h3 class="fs-animate-text">India's First <span>Vegan</span><br>Magazine!</h3>
                                        <p class="fs-animate-text">Find exclusive news on vegan lifestyle, weddings, health, cruelty-free products and recipes in India with every issue!</p>
                                        <!-- <a href="#" class="read-more fs-animate-text">Subscribe Now!</a> -->
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="fs-item" data-bg-color="#ffffff">
                            <div class="fs-entry-bg" data-bg-image='<?php echo base_url(); ?>assetsNew/magazine/images/magcover2.jpg'></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="fs-entry-item">
                                        <h4 class="fs-title fs-animate-text" data-label="">Latest</h4>
                                        <h3 class="fs-animate-text">Join the <span>Community</span><br>Today!</h3>
                                        <p class="fs-animate-text">A Veg Planet Media & Vegan First Collaboration</p>
                                        <!-- <a href="#" class="read-more fs-animate-text">read the article</a> -->
                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="fs-arrows">
                <a href="single.html" class="fs-arrow-prev"><i class="fa fa-angle-left"></i> Prev</a>
                <a href="single.html" class="fs-arrow-next">Next <i class="fa fa-angle-right"></i></a>
            </div>
            <div class="fs-arrows arrows-bottom">
                <a href="single.html" class="fs-arrow-prev"><i class="fa fa-angle-left"></i></a>
                <a href="single.html" class="fs-arrow-next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>


        <div class="section-full pv9 pvb0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-14">

                        <div class="fs-blog-carousel" data-col="2" data-row="1" data-responsive="2,1">
                        <h3 class="fs-title text-center">Subscription Plans!</h3>

                        <div class='carousel-travel' data-columns='2' data-space='0'>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                                               
                                                                <div class="swiper-slide">
                                    <div class="fs-blog-item boxed-title">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assetsNew/magazine/images/mag/singlemag.jpg" alt="portfolio image">
                                        </a>
                                            <span class='fs-label'>Trending</span>
											<div class="entry-title">
                                            <h2><strong><a href="#">Single Issue</a></strong></h2>
                                            <h5><a href="#">Available as Print Edition & E-Edition</a></h5>
                                            <p class="read-more">
                                                <form action="<?php echo base_url(); ?>subscription" method="post" id="target">
											    <input type="hidden" name="product" value="single" /> 
											    <button type="submit" class="subscribedButton sub" name="submit" value="Subscribed">Subscribe Now</button>
                                                </form>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                                               
                                                                
                                                               
                                                                
                                                                <div class="swiper-slide">
                                    <div class="fs-blog-item boxed-title">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>assetsNew/magazine/images/mag/mag+openmag.jpg" alt="portfolio image">
                                        </a>
                                        <span class='fs-label'>Environment Friendly!</span>                                     <div class="entry-title">
                                            <h2><strong><a href="#">Annual Subscription</a></strong></h2>
                                            <h5><a href="#">4 Issues in a Year. Available as Print Edition & E-Edition.</a></h5>
                                            <p class="read-more">
                                                <form action="<?php echo base_url(); ?>subscription" method="post" id="target1">
											    <input type="hidden" name="product" value="annual" /> 
												<button type="submit" class="subscribedButton sub1" name="submit" value="Subscribed">Subscribe Now</button>
                                                </form>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                                                
                                                              
                                                            </div>
                        </div>


                        

                    </div>
                        
                         
                    </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="section-full pv9">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <h2 class="block-title mv5 " data-title="In this issue">
                            Sneak Peak
                            <!-- <a href="single.html" class="category-more text-right">Continue to the category <img src="images/arrow-right.png" alt="Arrow"></a> -->
                        </h2>

                        <div class="border-line mv0"></div>

                        <div class="fs-post-table  fn-post-table">

                            <div class="fs-table-item">
                                <div class="row">
                                    <div class="col-sm-6 fs-table-bg" data-bg-image="<?php echo base_url(); ?>assetsNew/magazine/images/blog/preview1.jpg">
                                        <img src="<?php echo base_url(); ?>assetsNew/magazine/images/4x3.png"
                                             alt="spacer">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="fs-table-content">
                                            <div class="fs-media-play mv3 mvt0">
                                                <a><i class="fa fa-play"></i></a>
                                            </div>
                                            <h4><a href="single.html">In this summer issue we bring to you scrumptious
                                                    vegan recipes with sauces, BBQ, and cupcakes. Vegan Singer Monica
                                                    Dogra who performed at the Wilderfest - Bangalore Vegan Festival in
                                                    May, is our cover story this time</a></h4>
                                            <p class="read-more">
                                                <!-- <a href="single.html">read the article</a> -->
                                            </p>
                                        </div>
                                        <div class="fs-table-meta">
                                            <span class="pull-left"><a href="single.html">Naveen Akshar</a></span>
                                            <span class="pull-right"><a href="single.html">Cover Story</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="fs-table-item fs-media-right">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="fs-table-content">
                                            <h4><a href="single.html">Lincoln Durham - Gothic Blues goes Vegan</a></h4>
                                            <p class="read-more">
                                                <!-- <a href="single.html">read the article</a> -->
                                            </p>
                                        </div>
                                        <div class="fs-table-meta">
                                            <span class="pull-left"><a href="single.html">The Ghost Wolves</a></span>
                                            <span class="pull-right"><a href="single.html">page 37</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 fs-table-bg" data-bg-image="<?php echo base_url(); ?>assetsNew/magazine/images/blog/preview2.jpg">
                                        <img src="<?php echo base_url(); ?>assetsNew/magazine/images/4x3.png"
                                             alt="spacer">
                                    </div>
                                </div>
                            </div>


                            <div class="fs-table-item">
                                <div class="row">
                                    <div class="col-sm-6 fs-table-bg" data-bg-image="<?php echo base_url(); ?>assetsNew/magazine/images/blog/preview3.jpg">
                                        <img src="<?php echo base_url(); ?>assetsNew/magazine/images/4x3.png"
                                             alt="spacer">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="fs-table-content">
                                            <h4><a href="single.html">Hail Seitan - History of Mock Meat</a></h4>
                                            <p class="read-more">
                                                <!-- <a href="single.html">read the article</a> -->
                                            </p>
                                        </div>
                                        <div class="fs-table-meta">
                                            <span class="pull-left"><a href="single.html">John Harvey</a></span>
                                            <span class="pull-right"><a href="single.html">page 51</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="fs-table-item fs-media-right">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="fs-table-content">
                                            <div class="fs-media-play mv3 mvt0">
                                                <a><i class="fa fa-play"></i></a>
                                            </div>
                                            <h4><a href="single.html">Ask Anu - Are candles vegan or are they made up of
                                                    beeswax?</a></h4>
                                            <p class="read-more">
                                                <!-- 	<a href="single.html">read the article</a> -->
                                            </p>
                                        </div>
                                        <div class="fs-table-meta">
                                            <span class="pull-left"><a href="single.html">QnA</a></span>
                                            <span class="pull-right"><a href="single.html">page 61</a></span>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 fs-table-bg" data-bg-image="<?php echo base_url(); ?>assetsNew/magazine/images/blog/preview4.jpg">
                                        <img src="<?php echo base_url(); ?>assetsNew/magazine/images/4x3.png"
                                             alt="spacer">
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="section-full pv9 pvb0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="fs-blog-carousel" data-col="3" data-row="1" data-responsive="3,2,1">
                            <h3 class="fs-title text-center">Our Archives</h3>
                            <div class="fs-pager">
							<span>
								<a href="single.html" class="fs-arrow-prev swiper-prev"><img
                                            src="<?php echo base_url(); ?>assetsNew/magazine/images/arrow-prev.png"
                                            alt="preview"></a>
								<i class="fs-current-index">1</i> of <i class="fs-current-total">1</i>
								<a href="single.html" class="fs-arrow-next swiper-next"><img
                                            src="<?php echo base_url(); ?>assetsNew/magazine/images/arrow-next.png"
                                            alt="preview"></a>
							</span>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="fs-blog-item boxed-title">
                                            <a >
                                                <img src="<?php echo base_url(); ?>assetsNew/magazine/images/blog/issue 1.jpg"
                                                     alt="portfolio image">
                                            </a>
                                            <span class='fs-label'>Trending</span>

                                           <!-- <div class="entry-title">
                                                <h4><a href="single.html">Vegan First is increasing brand recall by
                                                        enagaging customers</a></h4>
                                                <p class="read-more">
                                                    <a href="single.html">read the article</a>
                                                </p>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="fs-blog-item boxed-title">
                                            <a >
                                                <img src="<?php echo base_url(); ?>assetsNew/magazine/images/blog/issue 2.jpg"
                                                     alt="portfolio image">
                                            </a>
                                            <!-- <div class="entry-title">
                                                <h4><a href="single.html">Vegan First is increasing brand recall by
                                                        enagaging customers</a></h4>
                                                <p class="read-more">
                                                    <a href="single.html">read the article</a>
                                                </p>
                                            </div> -->
                                        </div>
                                    </div>


                                    <div class="swiper-slide">
                                        <div class="fs-blog-item boxed-title">
                                            <a href="single.html">
                                                <img src="<?php echo base_url(); ?>assetsNew/magazine/images/blog/issue 3.jpg"
                                                     alt="portfolio image">
                                            </a>
                                           <!-- <div class="entry-title">
                                                <h4><a href="single.html">Vegan First is increasing brand recall by
                                                        enagaging customers</a></h4>
                                                <p class="read-more">
                                                    <a href="single.html">read the article</a>
                                                </p>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="fs-blog-item boxed-title">
                                            <a href="single.html">
                                                <img src="<?php echo base_url(); ?>assetsNew/magazine/images/blog/issue 4.jpg"
                                                     alt="portfolio image">
                                            </a>
                                            <span class='fs-label'>Reader's Choice!</span>
                                           <!-- <div class="entry-title">
                                                <h4><a href="single.html">Vegan First is increasing brand recall by
                                                        enagaging customers</a></h4>
                                                <p class="read-more">
                                                    <a href="single.html">read the article</a>
                                                </p>
                                            </div> -->
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="fs-blog-item boxed-title">
                                            <a href="single.html">
                                                <img src="<?php echo base_url(); ?>assetsNew/magazine/images/blog/issue 5.jpg"
                                                     alt="portfolio image">
                                            </a>
                                           <!--  <div class="entry-title">
                                                <h4><a href="single.html">Vegan First is increasing brand recall by
                                                        enagaging customers</a></h4>
                                                <p class="read-more">
                                                    <a href="single.html">read the article</a>
                                                </p>
                                            </div> -->
                                        </div>
                                    </div>

                                     <div class="swiper-slide">
                                    <div class="fs-blog-item boxed-title">
                                        <a>
                                            <img ssrc="<?php echo base_url(); ?>assetsNew/magazine/images/blog/issue 6.jpg"
                                        </a>
                                        <span class='fs-label'>Hottest</span>                                       <!-- <div class="entry-title">
                                            <h4><a href="single.html">Vegan First is increasing brand recall by enagaging customers</a></h4>
                                            <p class="read-more"> 
                                                <a href="single.html">read the article</a> 
                                            </p>
                                        </div> -->
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="container">

            <!-- Section 5 -->
            <div class="row">

                <div class="col-md-12">

                    <h2 class="block-title mt8" data-title="">
                        Magazine Reviews
                        <!-- <a href="single.html" class="category-more text-right">Continue to the category <img src="images/arrow-right.png" alt="Arrow"></a> -->
                    </h2>


                    <div class="boxed wide-space en-block">

                        <div class="row">
                            <div class="col-sm-4">

                                <div class="post quote color-1">

                                    <div class="meta bullet-style">
                                        <span class="author">Dr. Manilal Valliyate</span><br>
                                        <span class="date">CEO, PETA India</span>
                                    </div>
                                    <blockquote>...We’re thrilled about India’s first ever vegan only magazine – Vegan
                                        First, which has great recipes and news about the animal rights movement – great
                                        stories that change hearts and minds while saving animals’ lives.
                                    </blockquote>
                                    <div class="author clearfix">
                                        <a href="single.html">
                                            <img class="image image-thumb border-radius"
                                                 src="<?php echo base_url(); ?>assetsNew/magazine/images/ev1.jpg"
                                                 alt="Image">
                                        </a>
                                        <a href="blog.html" class="label">PETA</a>
                                    </div>
                                    <!-- /.meta -->

                                    <!-- <a href="single.html" class="category-more">Continue to the reviews <img
                                                src="<?php echo base_url(); ?>assetsNew/magazine/images/arrow-right.png"
                                                alt="Arrow"></a> -->

                                </div>

                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">

                                <div class="post quote color-2">

                                    <div class="meta bullet-style">
                                        <span class="author">Dr Nandita Shah</span><br>
                                        <span class="date">Founder, SHARAN</span>
                                    </div>
                                    <blockquote>A well written and beautifully formatted magazine that helps me keep
                                        pace with all that's happening in the plant-based world.
                                    </blockquote>
                                    <div class="author clearfix">
                                        <a href="single.html">
                                            <img class="image image-thumb border-radius"
                                                 src="<?php echo base_url(); ?>assetsNew/magazine/images/ev2.jpg"
                                                 alt="Image">
                                        </a>
                                        <a href="blog.html" class="label">SHARAN</a>
                                    </div>
                                    <!-- /.meta -->

                                  <!--  <a href="single.html" class="category-more">Continue to the reviews <img
                                                src="<?php echo base_url(); ?>assetsNew/magazine/images/arrow-right.png"
                                                alt="Arrow"></a> -->

                                </div>

                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4">

                                <div class="post quote color-3">

                                    <div class="meta bullet-style">
                                        <span class="author">Varda Mehrotra</span><br>
                                        <span class="date">Director, FIAPO</span>
                                    </div>
                                    <blockquote>Vegan First is an excellent magazine for anyone interested in a
                                        lifestyle aligned with animal rights and welfare. From lifestyle trends to
                                        advocacy news, Vegan First is a one-stop shop to keep you updated on all things
                                        vegan in India.
                                    </blockquote>
                                    <div class="author clearfix">
                                        <a href="single.html">
                                            <img class="image image-thumb border-radius"
                                                 src="<?php echo base_url(); ?>assetsNew/magazine/images/ev3.jpg"
                                                 alt="Image">
                                        </a>
                                        <a href="blog.html" class="label">FIAPO</a>
                                    </div>
                                    <!-- /.meta -->

                                  <!--  <a href="single.html" class="category-more">Continue to the reviews <img
                                                src="<?php echo base_url(); ?>assetsNew/magazine/images/arrow-right.png"
                                                alt="Arrow"></a> -->

                                </div>

                            </div>
                            <!-- /.col -->

                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.boxed -->


                    <!-- /.section-carousel -->


                </div>
                <!-- end .col-md-12 -->
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('mobile/footer'); ?>

<!-- Include jQuery and Scripts -->

<!--  <script type="text/javascript">
 var userFeed = new Instafeed({
     get: 'user',
     userId: '2319433451',
     accessToken: '08ac609ffb634da984f485edad6d24fa'
 });
 userFeed.run();
</script> -->

<script type="text/javascript" src="<?php echo base_url(); ?>assetsNew/magazine/js/instafeed.min.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>assetsNew/magazine/vendors/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assetsNew/magazine/vendors/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assetsNew/magazine/vendors/typed.min.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>assetsNew/magazine/vendors/theia-sticky-sidebar.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assetsNew/magazine/vendors/circles.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assetsNew/magazine/vendors/jquery.stellar.min.js"></script>
<script type="text/javascript"
        src="<?php echo base_url(); ?>assetsNew/magazine/vendors/jquery.parallax.columns.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assetsNew/magazine/vendors/svg-morpheus.js"></script>
<!---->
<!-- Swiper -->
<script type="text/javascript"
        src="<?php echo base_url(); ?>assetsNew/magazine/vendors/swiper/js/swiper.min.js"></script>
<!---->
<!-- Magnific-popup -->
<script type="text/javascript"
        src="<?php echo base_url(); ?>assetsNew/magazine/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
<!---->
<!-- Master Slider -->
<script src="<?php echo base_url(); ?>assetsNew/magazine/vendors/masterslider/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>assetsNew/magazine/vendors/masterslider/masterslider.min.js"></script>


<script type="text/javascript" src="<?php echo base_url(); ?>assetsNew/magazine/js/scripts.js"></script>
