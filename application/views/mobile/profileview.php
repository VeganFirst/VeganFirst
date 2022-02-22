<?php $this->load->view('mobile/header'); ?>
<style type="text/css">
    .jvc1 {    color: #EC785B;
    /* font-family: Cervo-Light; */
    font-size: 21px;
    line-height: 32px;
    text-align: center;
    font-weight: 600;}
     td {    
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #eee;
        font-family: "Source Sans Pro";
        font-size: 16px;
        line-height: 28px;
        font-weight: 600;
    }
    </style>
    <div style="background-image: url(<?php echo base_url()."assetsNew/img/user-profile.jpg"; ?>);background-repeat: no-repeat; background-size: cover; min-height:175px;"></div>
   <div class="row">
        <div class="col-xs-4 col-xs-offset-1 p-0">
            <?php if ($User->ProfilePic): ?>
			<img src="<?php echo base_url().'media/upload/user/'.$User->ProfilePic; ?>" class="img-responsive mt-60-m uprobr">
			<?php else: ?>
			<img src="<?php echo base_url().'media/upload/user/generic-Pro-pic.jpg'; ?>" class="img-responsive mt-60-m br1">
			<?php endif ?>
        </div>
   </div>
<div class="clearfix"></div>   
	<div class="main">
		<div class="container">
      
        <h1 class="user_pro_name"><?php echo $User->Name;?></h1>
        <div class="user_about"><?php echo $User->about;?></div>
		<div class="clearfix"></div>
		<h4 class="mt-10"> <a href="<?php echo base_url();?>user/message" class="btn btn-success coolbtn">Messages</a></h4>
        <div class="clearfix"></div>
    <?php if ($User->fb || $User->twitter || $User->insta || $User->pintrest): ?>
	<div class="">
		<h4 class="title1 mt-30">connect</h4>
		<ul class="list-inline">
		<?php if ($User->fb): ?>
		<li><a href="<?php echo $User->fb;?>"><div class="fbsharebtn"><i class="fa fa-facebook-f"></i></div></a></li>
        <?php endif ?>
        <?php if ($User->twitter): ?>
        <li><a href="<?php echo $User->twitter; ?>"><div class="twtsharebtn"><i class="fa fa-twitter"></i></div></a></li>
        <?php endif ?>
        <?php if ($User->insta): ?>
        <li><a href="<?php echo $User->insta; ?>"><div class="instasharebtn"><i class="fa fa-instagram"></i></div></a></li>
        <?php endif ?>
		<?php if ($User->pintrest): ?>
		<li class="pin" style="padding: 1% 0% 0% 1%;"><a href="<?php echo $User->pintrest; ?>"><div class="pintsharebtn"><i class="fa fa-pinterest"></i></div></a></li>
        <?php endif ?>
		</ul>   
	</div>
	<?php endif ?>
    
	<div class="clearfix"></div>
    
	<h4 class="title1 mt-10">personal info</h4>
    
							<table style="width: 100%;">
								<tr><td>Age</td><td class="fw"><?php echo $User->Age;  ?></td></tr>
								<tr><td>Location</td><td class="fw"><?php echo $User->city;  ?></td></tr>
								<tr><td>Occupation</td><td class="fw"><?php echo $User->occuption;  ?></td></tr>
								<tr><td>Diet type</td><td class="fw"><?php if($User->isVegan==1) { echo "Vegan"; } elseif($User->isVegan==0) { echo "Non Vegan"; } elseif($User->isVegan==2) { echo "Non Disclosed"; } ?></td></tr>
								<tr><td>Relationship</td><td class="fw"><?php echo $User->relationship;  ?></td></tr>
							</table>
						
    <?php if($Book_A):?>
    <div class="clearfix"></div>
	
	<h4 class="title1 mt-30">Bookmark</h4>
    <div class="row">
    <?php foreach($Book_A as $article):
    $Article=$this->M_Article->getArticleInfo($article->idSave);
  
								$cat = $this->M_Category->getCategoryInfo_art($Article->category);
								$author = $this->M_Author->getAuthorInfo($Article->Author);
							?>
                                    <div class="col-sm-6 col-xs-12">
                                        <img src="<?php echo base_url().'media/upload/article/'.$Article->FeaturedImage ?>" class="img-responsive br1" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'">
            <?php if(isset($Article->videoURL) && $Article->videoURL!=NULL):?>
            <i class="icon-social-youtube videoplay" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'"></i>
            <?php endif;?>
                                        <?php if($cat):?>
                                        <div class="post-title4">
                                            <h5 class="lable-sty"><?php echo $cat->CategoryTitle ?></h5>
                                        </div>
                                        <?php endif;?>
                                       <h3 class="featurettl" onclick="location.href='<?php echo base_url().'article/'.$Article->Url; ?>'"><?php echo $Article->PageTitle ?></h3>
                                       <ul class="list-inline mt-10 mb-30">
                                            <li><img src="<?php echo base_url().'media/upload/author/'.$author->Picture;?>"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'"  class="img-responsive sml-pro-pic3"></li>
                                            <li class="pronam"  onclick="location.href='<?php echo base_url().'author/'.$author->id;?>'" ><?php echo $author->FirstName.' '.$author->LastName ?></li>
                                            <li><i class="icon-comment pull-left"></i><span class="num"><fb:comments-count href="<?php echo base_url().'article/'.$Article->Url;?>"></fb:comments-count></span></li>
								<li><i class="icon-eye pull-left"></i><span class="num"> <?php if($Article->Views > 1000)
					  {
                    	echo round(($Article->Views/1000),1).' K';
                       }
                      else
                      {
                      echo $Article->Views;
                      }
                      ?></span></li>

								<li>
									<a href="javascript:void(0);" onclick="SaveArticle(<?php echo $Article->idArticle;?>)">
										<i class="icon-bookmark" id="bookm<?php echo $Article->idArticle;?>"></i>
									</a>
								</li>
                                        </ul>
                                    </div>
    
    
    <?php endforeach;?>
    </div>
    <?php endif;?>
    
    
    <div class="clearfix"></div>
	

	<h4 class="title1 mt-30">Restaurants reviewd</h4>
	<div class="clearfix"></div>
	<?php if ($Restros): ?>
	<?php foreach ($Restros as $Restro): ?>
		<div class="mt-10" style="background-color: #EEF2EC; border-radius:3px;overflow: hidden;padding: 10px;">
        	<p class="ctm-p-u mb-10"><?php echo $Restro->Comment; ?></p>
			<div class="col-sm-1 col-xs-2" style="padding:0"><img src="<?php echo base_url().'media/upload/restaurant/'.$Restro->Logo; ?>" class="img-responsive br1"></div>
            <div class="col-sm-10 col-xs-9">
			<h5 class="cmt-rest-user mt-0"><?php echo $Restro->restaurantName; ?></h5>
            
            <input id="input-21b" value="<?=$Restro->rate;?>"  readonly="readonly" type="number" class="rating" min=0 max=5 step=0.5 data-size="xs">
			
            </div>
		</div>
		<div class="clearfix"></div>
	<?php endforeach ?>
	<?php endif; ?>

	</div>
    </div>
    

	
<div class="clearfix mt-80"></div>
<?php $this->load->view('mobile/footer'); ?>

<script type="text/javascript">
	function getMsg(id) 
	{
		jQuery.ajax(
		{
			url: "<?php echo base_url()?>user/get_msg",
			data:'id='+id,
			type: "POST",
			success:function(data)
			{
				$('#output').html(data);
			}
		});
	}
	function SendMessage()
	{
		var message = $('#message').val();
		var msgto = $('#msgto').val();
		console.log('Message : '+message);
		if (message.length >0) 
		{
			$.ajax(
			{
				url: '<?php echo base_url()?>user/send',
				type: 'POST',
				data: {message:message,msgto:msgto},
				success:function(data)
				{
					getMsg(msgto);
				} 
			});
		}
		else
		{
			getMsg(msgto);
		}
	}

	function set_item(item,ggg) 
	{
		$('#country_id').val(item);
		$('#msgtov').val(ggg);
		$('#country_list_id').hide();
	}
</script>



