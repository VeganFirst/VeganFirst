<?php $this->load->view('templates/header'); ?>
<div class="clearfix rs_toppadder10"></div>
	<div class="container pad0">	 
		<div class="modal-header">
			<h3>Feedback</h3>
		</div>
		<div>
			<?php if (isset($message)): ?>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Thank you!</strong> <?php echo $message; ?>.
				</div>
			<?php endif ?>
		</div>
		<form method="POST">
			<div style="padding:20px">
				<div class="row">
					Dear Vegan First Patrons,<br>
					We're constantly innovating and upgrading our services to give you a better experience.
					Your feedback means the world to us!<br>
					Please help us by filling this quick survey:<br>

					Rate the following questions
				</div>
				<div class="row" style="margin-top: 10px">
					1. What do you like about the website?
				</div>
				<div class="row" style="margin-left: 20px;">
					<div class="col-md-6">
						<div>
							- content (articles, interviews, news etc)
						</div>
						<div>
							<input name="content" id="input-21b" value="0" type="number" class="rating" min=0 max=5 step=1 data-size="sm">
						</div>
					</div>
					<div class="col-md-6">
						<div>
							- design (the overall look and feel of the website)
						</div>
						<div>
							<input name="design" id="input-21b" value="0" type="number" class="rating" min=0 max=5 step=1 data-size="sm">
						</div>
					</div>
					<div class="col-md-6">
						<div>
							- creatives (images, posters, banners)
						</div>
						<div>
							<input name="creatives" id="input-21b" value="0" type="number" class="rating" min=0 max=5 step=1 data-size="sm">
						</div>
					</div>
					<div class="col-md-6">
						<div>
							- Recipes (videos and article)
						</div>
						<div>
							<input name="recipes" id="input-21b" value="0" type="number" class="rating" min=0 max=5 step=1 data-size="sm">
						</div>
					</div>
					<div class="col-md-6">
						<div>
							- Restaurant guide 
						</div>
						<div>
							<input name="restaurant" id="input-21b" value="0" type="number" class="rating" min=0 max=5 step=1 data-size="sm">
						</div>
					</div>
				</div>
				<div class="row" style="margin-top: 10px">
					2 What would you like to see more (Please Tick the Boxes)
				</div>
				<div class="row" style="margin-left: 40px">
					<div class="col-md-6">
						<input name="more[]" value="Interviews with leading people/brands in the community" type="checkbox" name=""> Interviews with leading people/brands in the community <br>
						<input name="more[]" value="myStory the journey of real vegans in India" type="checkbox" name=""> #myStory the journey of real vegans in India <br>
						<input name="more[]" value="Restaurant listings (vegan or vegan options)" type="checkbox" name=""> Restaurant listings (vegan or vegan options)	<br>
						<input name="more[]" value="Restaurant reviews" type="checkbox" name=""> Restaurant reviews <br>
						<input name="more[]" value="Recipes Videos" type="checkbox" name=""> Recipes Videos <br>
						<input name="more[]" value="Recipe articles" type="checkbox" name=""> Recipe articles <br>
						<input name="more[]" value="Funny listicles (countdown/ lists of unique, amusing content related to veganism)" type="checkbox" name=""> Funny listicles (countdown/ lists of unique, amusing content related to veganism) <br>
					</div>
					<div class="col-md-6">
						<input name="more[]" value="Expert Advice on Health and Nutrition" type="checkbox" name=""> Expert Advice on Health and Nutrition <br>
						<input name="more[]" value="Expert Advice on Fashion and Beauty" type="checkbox" name=""> Expert Advice on Fashion and Beauty <br>
						<input name="more[]" value="Expert Advice on Food" type="checkbox" name=""> Expert Advice on Food <br>
						<input name="more[]" value="Expert Advice on Relationships and Sex" type="checkbox" name=""> Expert Advice on Relationships and Sex <br>
						<input name="more[]" value="Expert Advice on Animal Behaviour and Law" type="checkbox" name=""> Expert Advice on Animal Behaviour and Law <br>
						<input name="more[]" value="Videos ( interviews, food, listicles, etc)" type="checkbox" name=""> Videos ( interviews, food, listicles, etc) <br>
					</div>
				</div>
				<div class="row" style="margin-top: 10px">
					3. How helpful is Vegan First in providing solutions (information) to vegan topics/problems?
				</div>
				<div style="margin-left: 40px">
					<input name="how_helpful" id="input-21b" value="0" type="number" class="rating" min=0 max=5 step=1 data-size="sm"><br>
					Please specify for the above question <br>
					<textarea name="how_helpful_text"></textarea>
				</div>
				<div class="row" style="margin-top: 10px">
					4. Where do you read our articles the most?
				</div>
				<div style="margin-left: 40px">
					<input type="checkbox" name="where_you_know" value="I log on to Vegan first directly"> I log on to Vegan first directly <br>
					<input type="checkbox" name="where_you_know" value="I see feeds on my Facebook and click on the articles"> I see feeds on my Facebook and click on the articles <br>
					<input type="checkbox" name="where_you_know" value="I see it first on my Instagram"> I see it first on my Instagram <br>
					<input type="checkbox" name="where_you_know" value="I see it on WhatsApp"> I see it on WhatsApp <br>
					<input type="checkbox" id="other" name="where_you_know" onclick="otherSource(this)" value="other"> I find it on other sources, please specify 
					<input type="text" name="other" id="sources" hidden="true">
				</div>
				<div class="row" style="margin-top: 10px">
					<div class="col-md-2">
						<label for="name">Name</label><br>
						<input type="text" name="name">
					</div>
					<div class="col-md-2">
						<label for="email">Email</label><br>
						<input type="email" name="email">
					</div>
				</div>
				<div class="row" style="margin-top: 20px !important; margin-left: 20px !important">
					<button class="btn btn-primary" type="submit">Submit</button>
				</div>
			</div>
		</form>
	</div>
<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	function otherSource(ele)
	{
		if (document.getElementById('other').checked)
		{
			$('#sources').show();
		}
		else
		{
			$('#sources').hide();
		}
	}
</script>
