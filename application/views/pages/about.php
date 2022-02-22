<?php $this->load->view('templates/header'); ?>
<style>
.titlehead {
    font-size: 25px !important;
    letter-spacing: 1px !important;
    color: #000;
    font-weight: 700;
}
.hed3{font-size: 22px;
    font-weight: 800;}
.pl-50{ padding-left:50px;} 
.pr-50{padding-right:50px;}
.abt p{ font-size:18px; margin-bottom:10px; letter-spacing:0.5px;line-height: 26px;}
.panel > .panel-heading, .panel.panel-default > .panel-heading{
	background: none;
    border-bottom: 2px solid #e5e5e5;}
.panel {
    box-shadow: none;
}
.collapse.in {
    border-bottom: 2px solid #e5e5e5;
}
.panel-group .panel-heading+.panel-collapse>.panel-body, .panel-group .panel-heading+.panel-collapse>.list-group {
    border-top: none;
	padding-left: 47px;
}
.panel-title {
    font-size: 14px;
}
.more-less{ padding-right:15px;color: #6cbd45;}
.filter{    font-size: 16px;
    font-weight: 500;color:#000}
.filter.active{color:#6cbd45; border-bottom:2px solid #6cbd45}
.blok{padding-bottom: 20px;margin:0 10px;
    border-bottom: 10px solid #6CBD45;}
.blok2{padding-bottom: 20px;margin:0 10px;
    border-bottom: 10px solid #521E74;}
.blok3{padding-bottom: 20px;margin:0 10px;
    border-bottom: 10px solid #6CBD45;}
.blok:hover, .blok2:hover, .blok3:hover{box-shadow: 5px 10px 8px #888888;}
.perpblk{ background:#521E74; min-height:80px; margin:0 15px;}
.col-container {
  display: flex;
  width: 100%;
}
.col {
  flex: 1;
  margin: 0 10px;
}

.coln {
  flex: 1;
  margin: 0 10px;
}
.coln img{ border-radius:100%;margin: 0 auto 15px;
    width: 120px;
	-webkit-transition: all 200ms linear;
  -moz-transition: all 200ms linear;
  -o-transition: all 200ms linear;
  -ms-transition: all 200ms linear;
  transition: all 200ms linear;
}

.coln:hover img{ border-radius:100%;margin: 0 auto 15px;
    width: 150px;
	-webkit-transition: all 200ms linear;
  -moz-transition: all 200ms linear;
  -o-transition: all 200ms linear;
  -ms-transition: all 200ms linear;
  transition: all 200ms linear;
  box-shadow: 5px 10px 8px rgb(0 0 0 / 50%);
}
.coln p{ text-align:center; color:#fff;}
.coln .inf{color: #fff;
    font-size: 12px;
    text-align: center; opacity:0; display:none;-webkit-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  transition: all 300ms linear;}
.coln:hover .inf{ opacity:1; display:block;-webkit-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  transition: all 300ms linear;}
  
.coln:hover p{ font-size:16px;}
.coln:hover p:after{height: 2px;
    display: block;
    width: 50%;
    background: #6cbd45;
    content: '';
    margin: 0px auto 10px;}
.hovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
}
.ttlmn{ font-size:13px; padding:10px;}
.hovereffect .overlay {
    position: absolute;
    top: 0;
    left: 15px;
    padding: 10px 10px;
    text-align: left;
    height: calc(100% - 40px);
    width: calc(100% - 30px);
}
.hovereffect:hover .overlay {
      background-color: rgb(108 189 69 / 80%);
}


.hovereffect .ttlmn {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
}

.hovereffect:hover img {
  opacity: 1;
  filter: alpha(opacity=60);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect:hover .overlay:before,
.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.newsletterbg {
    height: 345px;
    background-color: #79c142;
    background: linear-gradient(
110deg
, #79c142 50%, #6cbd45 50%);
}
.newsinpt {
    min-width: 310px !important;
    background: none !important;
    margin-bottom: 0px !important;
    color: #fff !important;
    font-size: 22px !important;
    font-weight: 300 !important;
	border:0 !important;
    border-bottom: 1px solid #fff !important;
    height: 42px !important;
    padding: 0 10px !important;
    margin: 0 15px;
}
.nlbtn {
       border: 1px solid #fff !important;
}
/*   */
.title3hed{
    font-size: 25px !important;
    letter-spacing: 1px !important;
    font-weight: 800;
	}
.pl-0  {padding-left:0px!important}

</style>    
<link href="<?php echo base_url();?>assetsNew/css/jquery.skidder.css" rel="stylesheet"/>


<div class="container mt-60">
	<div class="row">
  		<div class="col-md-7 abt pr-50">
        <h2 class="titlehead mb-30 mt-10">Who Are We?</h2>
        <p>Vegan First is a impact media company and solution space founded by Palak Mehtain 2016. She was inspired by globally renowned humanitarian Mohanji to consider adopting a lifestyle of non violence towards all beings. </p>
<p>“Mohanji would keep sharing videos of abandoned animals, cows being abused for milk, which would explicitly show their suffering,” she says. I was curious if these were common practices in India as well. After conducting extensive research and visiting several slaughterhouses and gaushalas, I discovered that these are common practices in most Indian cities. It was excruciatingly painful to see their tears and hear their cries. These are unignorable truths that no one should go to bed with.”</p>
<p>Although the decision to become a vegan was instant, the transition was a slow and laborious process. “Becoming a vegan in India in 2013 was difficult. I had already become vegetarian long before becoming vegan, but with a hectic job and no vetted list of dairy alternatives, I would mostly avoid all animal products (such as dairy, ghee, butter, mayonnaise, and ice creams) rather than find alternatives.</p>
<p>As cliche as it may sound, necessity is the mother of all inventions, and this is how Vegan First was born—a dedicated platform for all things plant-based in India. Vegan First is now not only the leading plant-based publication, but also a helpful guide, resource repository, vegan restaurant search engine, and promotes a strong community spirit through regular events.</p>
<p>“Our food system is broken. Approximately 40% of the grains produced are given to livestock instead of being consumed by humans. Every 60 seconds, we humans slaughter 2-6 million animals worldwide - every second. The good news is that we can all contribute to socioeconomic change and a new food system by making informed decisions. Vegan First focuses on new ideas and solutions for a post-animal bioeconomy.” Palak Mehta</p>
<p>Palak Mehta is also a member of the task force set up by FSSAI(Food Safety and Standards Authority of India) which is responsible for creating a framework for vegan foods in India.</p>
               
        </div>
        <div class="col-md-5">
               <img src="<?php echo base_url();?>assetsNew/img/about.jpg" class="img-responsive" />
        </div>
    </div>
</div>


<div class="container mt-60 mb-100" style=" background:#6cbd45">
	<div class="row">
    <div class="col-md-6 pl-50 pr-50">
    <img src="<?php echo base_url();?>assetsNew/img/mohanji_our_inspiration.jpg" class="img-responsive mt-50" style="margin-bottom: -70px;" />
    </div>
    <div class="col-md-6 abt mt-50 pr-50">
    	<h2 class="titlehead white mt-100">INSPIRATION</h2>
        <p class="white">Humanitarian and known as the friend of the world, Mohanji has touched millions of lives of humans and animals. He has a special bond with all animals and several find solace in his presence. A practicing vegan, Mohanji has inspired several initiatives and millions of people globally to switch to a vegan lifestyle. To know more about Mohanji visit www.mohanji.org</p>
    </div>
    
    
    </div>
</div>
        
<div class="container mt-90 mb-100">
	
    <h2 class="title3hed mb-30  text-center">What We Do</h2>
    <div class="row col-container">
    <div class="col-md-4 col blok">
        <div class="row pt-40">
			<div class="col-sm-3">
            <img src="<?php echo base_url();?>assetsNew/img/mission.png" class="img-responsive" />
            </div>  
            <div class="col-sm-9 pl-0">
            <h3 class="mt-0 hed3">Mission<br/>
Manifesto</h3>
			</div>
			<div class="col-sm-12 mt-30 abt">
			<p>As a plant-forward, impact driven media company, Vegan First is constantly working at  enabling the plant-based ecosystem in India through effective media, easy solutions, interactive events and learning opportunities.</p>
            <p>There is a media bias today. The mainstream media does not do a good enough job of highlighting the flaws of animal agriculture and the price the planet is paying. Animal-based products with a higher carbon footprint and a negative impact on our health are marketed as healthy foods. We highlight change-makers, environment friendly and ethical innovations, and alternatives to assist our readers in making conscious choices.</p>

           </div>
            </div>      
        </div>
        
        <div class="col-md-4 col blok2">
        <div class="row pt-40">
			<div class="col-sm-3">
            <img src="<?php echo base_url();?>assetsNew/img/vegan_symb.png" class="img-responsive" />
            </div>  
            <div class="col-sm-9 pl-0">
            <h3 class="mt-0 hed3">The 100%<br/>
vegan symbol</h3>
			</div>
			<div class="col-sm-12 mt-30 abt">
			<p>Despite the fact that we encourage vegan-friendly businesses, we are dedicated to highlighting ethically vegan enterprises and businesses that are dedicated to the cause. Our annual trend report highlights the power of these 100 percent vegan businesses, both large and small, that are making a real difference.</p>
            <p>In light of this, only 100% vegan businesses are eligible for our yearly awards, which are presented during the Vegan India conference. Awards are granted in a variety of categories, including the most inventive product, cutting-edge marketing methods, and the finest leadership award, among others. The Plant Based Traders Association is another organization that we actively support.</p>

           </div>
            </div>      
        </div>
        
        <div class="col-md-4 col blok3">
        <div class="row pt-40">
			<div class="col-sm-3">
            <img src="<?php echo base_url();?>assetsNew/img/market.png" class="img-responsive" />
            </div>  
            <div class="col-sm-9 pl-0">
            <h3 class="mt-0 hed3">To All Changermakers</h3>
			</div>
			<div class="col-sm-12 mt-30 abt">
			<p>Do you ditch plastic bag and carry a foldable? Are you careful about your consumption patterns so that they have a carbon neutral impact? Is minimalism important to you? Do you take the pain to ask for plant-based alternatives wherever you go? Do you take proactive steps in preserving biodiversity? Do you believe in equal rights for all? Moreover, do you feel animals have a right to not be commodities?</p>
            <p>The right conversations are important. </p>
            <p>Today's conscious consumers are prepared to make well-informed decisions. In this regard, every consumer has the ability to be an active change maker.</p>
            <p>And your voice is needed.</p>
            <p>We see you. We hear you. We feel you. We are with you.</p>

           </div>
            </div>      
        </div>
        
        
    </div>
    
    
    
    </div>
</div>        
 <div class="container mt-90 abt">
   <h3 class="text-center mb-30 title3hed">Our Initiatives</h3>
 
<p class="text-center">In our mission to overcome some of the toughest challenges faced by our planet today, our initiatives have gradually spread out across multiple sectors over the years.Today Vegan First is India’s default solution space for all things plant-based.</p>

<div class="row mt-50 col-container">
    <div class="col-md-4 col perpblk">
    </div>
    <div class="col-md-4 col perpblk">
    </div>
    <div class="col-md-4 col perpblk">
    </div>
    <div class="col-md-4 col perpblk">
    </div>
</div>
</div> 



<div class="container mt-90">
   <h3 class="text-center mb-30 title3hed">The Team</h3>
 
<div class="col-sm-9 mr0auto  mt-50 ">

<div class=" row mt-50 col-container">
    <div class="col-md-4 col hovereffect ">
    <img src="<?php echo base_url();?>assetsNew/img/palak.jpg" class="img-responsive" />
    <p class="text-center mt-10">Palak Mehta</p>
    <div class="overlay">
		<p class="ttlmn">Palak Mehta is media professional with 10+ years of experience, Palak is passionate about impact media, visual arts and creating social change . She is the founder of Vegan First and also the host of popular youtube show- Secrets of India. Palak represents the India Chapter of World Vegan Organisation as the vice chair.</p>
    </div>
    
    </div>
    <div class="col-md-4 col hovereffect ">
    <img src="<?php echo base_url();?>assetsNew/img/ritika.jpg" class="img-responsive" />
    <p class="text-center mt-10">Rithika Ramesh</p>
    <div class="overlay">
		<p class="ttlmn">Rithika Ramesh has been a passionate vegan since 2009. She has worked on feature films as Executive Producer and Creative Director, written about vegan food and travel, and has been an avid vegan baker. She has a certification in Plant-based nutrition from Cornell University and is a mum to two kids and a dog. As Managing Editor at VeganFirst.com, she joins the team in their vision of making plant-based mainstream.</p>
    </div>
    
    </div>
    
    
    <div class="col-md-4 col hovereffect ">
    <img src="<?php echo base_url();?>assetsNew/img/siya.jpg" class="img-responsive" />
    <p class="text-center mt-10">Siya Mehta</p>
    <div class="overlay">
		<p class="ttlmn">A journalism major, Siya is a contributing writer and consulting media expert at Vegan First. Her interest in gender diversity, veganism, whole food nutrition and her knowledge on socio political subjects gives her a unique voice which is popular across a variety of readers</p>
    </div>
    
    </div>
</div>

<div class="row mt-50 col-container">
    <div class="col-md-4 col hovereffect ">
    <img src="<?php echo base_url();?>assetsNew/img/stuti.jpg" class="img-responsive" />
    <p class="text-center mt-10">Stuti Verma</p>
    <div class="overlay">
		<p class="ttlmn">A vegan since 2019, Stuti has been a writer most of her life, and is responsible for content creation for Vegan First. She has a deep passion for social justice, and aims to create positive change wherever she can. She is an aspiring journalist with a Bachelor's Degree in English. With an appreciation for art, literature, and food, she loves visiting museums, exploring vegan recipes, travelling, visiting animal shelters, reading and writing.</p>
    </div>
    
    </div>
    <div class="col-md-4 col hovereffect ">
    <img src="<?php echo base_url();?>assetsNew/img/revti.jpg" class="img-responsive" />
    <p class="text-center mt-10">Revati Shah</p>
    <div class="overlay">
		<p class="ttlmn">Revati Shah comes with a strong background in content, Film and TV. She's constantly brimming  with fresh ideas and solutions which help vegan friendly businesses reach their right audience. A qualified bharatnatyam dancer and yoga instructor, she's always had a soft corner for animals. Turning vegan was an obvious choice for her. Animal photo journalism has always intrigued her.</p>
    </div>
    
    </div>
    <div class="col-md-4 col "></div>
    <!--<div class="col-md-4 col hovereffect ">
    <img src="<?php echo base_url();?>assetsNew/img/team1.jpg" class="img-responsive" />
    <p class="text-center mt-10">Saumya Singh</p>
    <div class="overlay">
		<p class="ttlmn"></p>
    </div>
    
    </div>-->
</div>
</div>      
</div>  

<div class="row mt-90 pt-50 pb-50 mb-0" style=" background:#521E74; min-height:67vh">
<div class="container">
   <h3 class="text-center title3hed white mt-0 mb-50">Partners & Advisors</h3>
   <div class="col-container">
   
   <div class="coln">
   <img src="<?php echo base_url();?>assetsNew/img/anup.jpg" class="img-responsive" />
   <p>Anup Gogate</p>
   <div class="inf">Sales and Strategic Alliances Advisor</div>
   </div>
   
   <div class="coln">
   <img src="<?php echo base_url();?>assetsNew/img/zac.jpg" class="img-responsive" />
   <p>Zac Lovas</p>
   <div class="inf">Content Strategy Advisor</div>
   </div>
   
   <div class="coln">
   <img src="<?php echo base_url();?>assetsNew/img/vansh.jpg" class="img-responsive" />
   <p>Vansh Joshi</p>
   <div class="inf">Senior Talent Consultant</div>
   </div>
   
   <div class="coln">
   <img src="<?php echo base_url();?>assetsNew/img/Manpreet_Kaur.jpg" class="img-responsive" />
   <p>Dt Manpreet Kaur</p>
   <div class="inf">Nutritionist at The Santulan</div>
   </div>
   
   <div class="coln">
   <img src="<?php echo base_url();?>assetsNew/img/ammu.jpg" class="img-responsive" />
   <p>Ammucare Charitable Trust</p>
   <div class="inf">Charity Partner</div>
   </div>
   <div class="coln">
   <img src="<?php echo base_url();?>assetsNew/img/team2.jpg" class="img-responsive" />
   <p>Loraem Ipsum</p>
   <div class="inf">Advisor</div>
   </div>
   
   </div>
</div>
</div>



<div class="container mt-60">
    <div class="row">
		<div class="col-md-6 abt">
        <h2 class="title3hed mt-40 mb-30">Media: A force for good:</h2>
        <p><strong>The toughest problem can become your biggest opportunity. We don’t shun away bad news. We inspire, we empower you to take change. We ‘use’ impact driven media to create a positive difference.</strong></p>
        <p>Our food system is collapsing, but there is hope. New innovations are taking place every day. Carbon negative products are coming to the forefront. And Vegan First is committed to highlighting these initiatives and bringing them to the forefront. </p>

		<h2 class="title3hed mt-60 mb-30">Social Responsibility</h2>
        <p>We contribute 10% of our earnings to non-profit organizations which provide shelter to animals and work towards ending animal cruelty. </p>
        </div> 
        
        <div class="col-md-6">
        <img src="<?php echo base_url();?>assetsNew/img/abt_side.jpg" class="img-responsive" style="width:80%; margin:0 auto" />
        </div>   
    </div>
</div>


<div class="container mt-50">
   <h3 class="text-center mb-30 title3hed">We’re in the news!</h3>
 
<div class="col-sm-11 mr0auto  mt-50 ">

<div class=" row mt-30 col-container">
    <div class="col-md-4 col ">
    <img src="<?php echo base_url();?>assetsNew/img/bw.jpg" class="img-responsive"/>
	</div>
    <div class="col-md-4 col ">
    <img src="<?php echo base_url();?>assetsNew/img/forb.jpg" class="img-responsive"/>
	</div>
    <div class="col-md-4 col ">
    <img src="<?php echo base_url();?>assetsNew/img/bw.jpg" class="img-responsive"/>
	</div>
    <div class="col-md-4 col ">
    <img src="<?php echo base_url();?>assetsNew/img/forb.jpg" class="img-responsive"/>
	</div>
    <div class="col-md-4 col ">
    <img src="<?php echo base_url();?>assetsNew/img/bw.jpg" class="img-responsive"/>
	</div>
</div>

<div class=" row mt-20 col-container">
    <div class="col-md-4 col ">
    <img src="<?php echo base_url();?>assetsNew/img/bw.jpg" class="img-responsive"/>
	</div>
    <div class="col-md-4 col ">
    <img src="<?php echo base_url();?>assetsNew/img/forb.jpg" class="img-responsive"/>
	</div>
    <div class="col-md-4 col ">
    <img src="<?php echo base_url();?>assetsNew/img/bw.jpg" class="img-responsive"/>
	</div>
    <div class="col-md-4 col ">
    <img src="<?php echo base_url();?>assetsNew/img/forb.jpg" class="img-responsive"/>
	</div>
    <div class="col-md-4 col ">
    <img src="<?php echo base_url();?>assetsNew/img/bw.jpg" class="img-responsive"/>
	</div>
</div>

</div>
</div>


<div class="container-fluid newsletterbg mt-90" data-aos="fade-up" data-aos-delay="50" data-aos-easing="linear">
	<div class="container">
		<div class="col-md-11 mar0auto">
			<h2 class="newsltrh1 mt-60">Support Our Cause</h2>
			<p class="newsdecs">Suscribe to our Updates</p>
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
						</div>
                        
                        <div class="text-center resp white"></div>
                   </div>     
                  
					
				</div>
			</form>
		</div>
	</div>
</div>






<div class="container-fluid mt-90">
   <h3 class="text-center title3hed">FAQs</h3>
   <div style="border-bottom:2px solid #000"></div>
   
   </div>

<div class="container mt-50">
   
   
   
   		<div class="text-center">
        	<ul class="list-inline">
            	<li> <a href="javascript:void(0);" class="filter active" data-id="">All</a></li>
                <li><a href="javascript:void(0);" class="filter" data-id="food">FOOD</a></li>
                <li><a href="javascript:void(0);" class="filter" data-id="fashion">FASHION</a></li>
                <li><a href="javascript:void(0);" class="filter" data-id="lifestyle">LIFESTYLE</a></li>
                <li><a href="javascript:void(0);" class="filter" data-id="products">PRODUCTS</a></li>
                <li><a href="javascript:void(0);" class="filter" data-id="alternative">ALTERNATIVE</a></li>
        	</ul>
        </div>
   
   
        
      <div class="panel-group mt-20" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="panel panel-default fashion products alternative">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="more-less fa fa-plus"></i>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                </div>
            </div>
        </div>

        <div class="panel panel-default lifestyle">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less fa fa-plus"></i>
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam 2
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                </div>
            </div>
        </div>
        
        
        <div class="panel panel-default food">
            <div class="panel-heading" role="tab" id="heading3">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                        <i class="more-less fa fa-plus"></i>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                    </a>
                </h4>
            </div>
            <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                <div class="panel-body">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                </div>
            </div>
        </div>
        
        
        <div class="panel panel-default products">
            <div class="panel-heading" role="tab" id="heading4">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                        <i class="more-less fa fa-plus"></i>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                    </a>
                </h4>
            </div>
            <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                <div class="panel-body">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat
volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
Duis autem vel eum iriure dolor in hendrerit in vulputate velit
                </div>
            </div>
        </div>
    </div><!-- panel-group -->   
 </div>

<?php $this->load->view('templates/footer'); ?>

    <script>

function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('fa-plus fa-minus');
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