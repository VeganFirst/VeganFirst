<?php 		$this->load->view('templates/header'); ?>
<style type="text/css">
.panel-group .panel+.panel { margin-top: 15px; }
            td {text-align: left;padding: 8px;border-bottom: 1px solid #eee;font-family: "Source Sans Pro";font-size: 16px;line-height: 28px;font-weight: 600;}
            .fw{font-weight: 400;}
            .btnn {   height: 48px;width: 48px;border-radius: 3px 20px 3px 20px;background-color: #3B5998;}
            .btntwt {   height: 48px;width: 48px;border-radius: 3px 20px 3px 20px;background-color: #55ACEE;}
            .btninsta {   height: 48px;width: 48px;border-radius: 3px 20px 3px 20px;background-color: #E12F67;}
            .pin {   height: 48px;width: 48px;border-radius: 3px 20px 3px 20px;   background-color: #d73532;}  
            .jvc {color: #EC785B;font-family: Cervo-Light;font-size: 30px;line-height: 32px;text-align: center;font-weight: 600;}
        /*for tab*/
            .nav-tabs { border-bottom: 2px solid #DDD; background: #ffffff; }
            .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
            .nav-tabs > li > a { border: none; color: #6cbd45 !important; }
            .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #292b28 !important; background: transparent; }
            .nav-tabs > li > a::after { content: ""; background: #292b28; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
            .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
            .tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #6cbd45; }
            .nav-tabs>li>a {position: relative;display: block;padding: 25px 25px 10px 25px;}
            .card {background: #FFF none repeat scroll 0% 0%; box-shadow: none !important; margin-bottom: 30px; }
        
    </style>

<div class="prof_cat" id="notifications" style="background:url(<?php echo base_url();?>assetsNew/img/exper-columnist.png) no-repeat;background-size: 100% 100%;background-attachment: fixed;min-height: 176px;">
		
        
		
	</div>


	<div class="container pad0">
<div class="col-md-2 col-sm-2 col-xs-2 mt-60-m">
			<img src="<?php echo base_url();?>media/upload/columnist/<?php echo $Columnist->Picture; ?>"  class="img-responsive br1" />
		</div>
        
        
        <h1 class="homeh1msg mt-60-m" style="color: #fff;"><?php echo $Columnist->Name; ?></h1> 
        <div class="col-sm-2"><button type="submit" class="btn btn-success" style="letter-spacing:1px;" data-toggle="modal" data-target="#ask">ASK QUESTION</button>
        
        
        </div>
        <div class="col-sm-8 decsprof p-0 mt-10 mb-10"><?php echo $Columnist->descrp; ?></div>
                        
        
        <div class="clearfix"></div>
        <div class="col-xs-12 mt-20">
        <ol class="list-inline">
					   <li>
					   	<a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo current_url();?>')" ><i class="icon-social-facebook artsoc fb"></i></a>
					   </li>
					   <li>
					   	<a href="javascript:void(0);" onclick="window.open('http://twitter.com/share?url=<?php echo current_url();?>&text=<?php echo $PageTitle; ?>')" ><i class="icon-social-twitter artsoc twt"></i></a>
					   </li>
					   <li>
					   	<a  href="javascript:void(0);" onclick="window.open('http://pinterest.com/pin/create/button/?url=<?php echo current_url();?>&media=''&description=<?php echo $PageTitle; ?>')" ><i class="icon-social-pinterest artsoc prnt"></i></a>
					   </li>
					</ol>
                    </div>
        <div class="col-xs-12 mt-30">

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        
        <?php foreach($Question as $que): ?>
  <div class="panel panel-default">
    
    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $que->idQuestion?>" aria-expanded="true" aria-controls="collapseOne">
      <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        
          <?php echo $que->question?>
        
      </h4></div></a>
    
    <div id="collapse<?php echo $que->idQuestion?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <?php echo $que->answer?>
      </div>
    </div>
  </div>
  <?php endforeach;?>
  
</div>


<?php if($Adblock):?>
<div class="text-center mt-60 mb-10">
<?php echo $Adblock;?>
</div>
<?php endif;?>

	</div>	
	</div>
	<div class="clearfix mb-40"></div>
	 <div class="modal fade" id="ask" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">		<span aria-hidden="true">×</span></button>
				</div>
                
				<div class="modal-body pt-0"  id="thnklist" style=" overflow:hidden;">
                <div class="col-xs-12">
					<div class="col-md-3 col-sm-3 col-xs-3 p-0" >
                            <img src="<?php echo base_url();?>media/upload/columnist/<?php echo $Columnist->Picture; ?>"  class="img-responsive br1" />
                        </div>
                        <div class="col-md-9 col-sm-9  col-xs-9">
                        <h4 class="titlef30 mt-0" style="font-size: 30px !important;">ask <?php echo $Columnist->Name; ?> a Question</h4>
                        </div>
                        <div class="clearfix"></div>
                        <input type="hidden" value="<?php echo $Columnist->Name; ?>" id="columnist" />
                        <div class="mt-10 form-group is-empty">
                            <input type="email" class="form-control" id="email"  placeholder="Your Email" required >
		                 
						</div>
                        <div class="mt-0 form-group is-empty">
		                 <textarea class="form-control" id="question"  placeholder="Write your question..." ></textarea>
						</div>
                        
                        <div class="clearfix"></div>
              <button type="button" id="askque" class="btn btn-success pull-right">SUBMIT QUESTION</button>
                
                
                </div>
				</div>
                						  
			</div>
		</div>
	</div>       
	<?php $this->load->view('templates/footer'); ?>
	<?php if(isset($Message)):?>
		<script type="text/javascript">
			$(window).load(function()
			{
				$('#follow').modal('show');
			});
		</script>
	<?php endif; ?> 
<script type="text/javascript">
	
$(document).ready(function() {
$("#askque").click(function() {
if (validation())
{
jQuery.ajax({
        url: '<?php echo base_url();?>columnist/ask',
        data:{
          email :$('#email').val(),
          name :$('#columnist').val(),
          question :$('#question').val(),
         },
        dataType: "json",
		type: "POST", 
        success :function(data){
			console.log(data);
			$('#thnklist').html(data.message);
        }
    })
}
});
function validation() {
var email = $("#email").val();
var question = $("#question").val();


if (email === '') {
alert("Please Enter Email");
return false;
}

if (question === '') {
alert("Please Enter Question");
return false;
}
if(email === '' || question === '')
{
alert("Please Enter Required Fields");
return false;
}


}
});
</script>    
