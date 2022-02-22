<?php $this->load->view('mobile/header'); ?>
<style type="text/css">
		td 
		{    
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #eee;
			font-family: "Source Sans Pro";
			font-size: 16px;
			line-height: 28px;
			font-weight: 600;
		}
		.fw
		{
			font-weight: 400;
		}
		.btnn
		{
			height: 48px;
			width: 48px;
			border-radius: 3px 20px 3px 20px;
			background-color: #3B5998;
		}
   		.btntwt
   		{
   			height: 48px;
   			width: 48px;
   			border-radius: 3px 20px 3px 20px;
   			background-color: #55ACEE;
   		}
   		.btninsta {   height: 48px;   width: 48px;    border-radius: 3px 20px 3px 20px;   background-color: #E12F67;}
	   .pin {   height: 48px;   width: 48px;    border-radius: 3px 20px 3px 20px;   background-color: #d73532;}
	   .jvc {color: #EC785B;font-family: Cervo;font-size: 25px;line-height: 32px;text-align: center;}
	</style> 
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
        <div class="main">
		<div class="container">
			
			<div class="row">
				
				<div class="col-md-8 col-xs-12">
                <div class="container-fluid">
					<div class="row"><!--  Start Row Here -->
						<div class="col-md-4 col-xs-12">
							<div class="floatcenter pt-10 pb-10">
								<button class="btn btn-sm btn-block" data-toggle="modal" data-target="#exampleModal" style="background-color: #6cbd45;color: #fff;font-size: 14px;outline: none;border: none;" >
									<i class="fa fa icon-comment-alt"></i> New Message
								</button>
							</div>
			 				<div class="panel panel-primary" style="border-top: none; border-top-left-radius: 0px; border-top-right-radius: 0px;">
								<div class="panel-body scroll1">
									<ul class="media-list">
										<?php 
											$this->load->model("m_user");
											$this->M_User = new M_User();
											$usr=$this->session->userdata('User_id');
											$message= array();
											$sql = "SELECT DISTINCT mfrom,mto FROM `message` WHERE `mfrom`=$usr or `mto`=$usr   ORDER BY `message`.`send` ASC";	
											$Query = $this->db->query($sql);
											$Results = $Query->result();
											foreach ($Results as $rs)
											{
												$from= $rs->mfrom;
												$to= $rs->mto;
												if($usr==$from)
												{
													array_push($message,"$to");
												}
												else
												{
													array_push($message,"$from");
												}
											}
											$ret=array_unique($message);	
											if($ret)
											{
												$cou=0;
												foreach($ret as $msg)
												{
													$uid=$msg;
													$user=$this->M_User->getUserInfo($uid);
													$userUr=$this->M_User->get_unread_msg_user($uid);
													if($cou==0)
													{
										?>
										<script type="text/javascript">
											jQuery.ajax(
											{
												url: "<?php echo base_url()?>user/get_msg",
												data:'id='+<?php echo $uid;?>,
												type: "POST",
												success:function(data)
												{
													$('#output').html(data);
												}	
											});
										</script>
										<?php } ?>
										<li class="media chatcolor">
											<a href="javascript:void(0);" onClick="getMsg(<?php echo $uid; ?>);">
												<div class="media-left">
													<?php if($user->ProfilePic != NULL):?>                    
														<img class="media-object recomment-img img-pro-med"  src="<?=base_url().'media/upload/user/'.$user->ProfilePic;?>" alt="...">
													<?php else: ?>
														<img class="media-object img-pro-med"  src="<?php echo base_url().'media/upload/user/generic-Pro-pic.jpg' ?>" >
													<?php endif; ?>
												</div>
												<div class="media-body" >
													<h4 class="pronam" style="margin:0;"><?=$user->Name;?> <?php if($userUr>0){echo "(".$userUr.")";}?><span class="text-muted" style="font-size:12px"></span></h4>
													<p style="color:#000"></p>
												</div>
											</a>
										</li>
										<?php $cou++;
								  			}
										}
										?>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-8 col-xs-12 pt-20 pb-10">
							<div id="output"></div>
						</div>
					</div>
				</div>
					
					</div>
				</div>
			
       
		
	</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
           <form class="" id="register_form" name="myform2" action="<?php echo base_url()?>user/sendNew" method="post"> 
               <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             <h4 class="modal-title" id="exampleModalLabel">Send Message</h4>
              </div>                                     
                  <div class="modal-body">
                    <div class="form-group mt-10">
                   <input type="text" name="to" class="form-control" id="country_id" onkeyup="autocomplet()" placeholder="Search .." autocomplete="off" required />
               <input type="hidden" name="msgto" id="msgtov">
              <ul id="country_list_id" style="list-style:none;padding: 5px 5px;"></ul>
                   </div>
                      <div class="form-group mt-5">
                    <textarea name="message" placeholder="Your Message Here.." class="form-control" rows="3" required></textarea>
                     </div>
                      </div>

                        <div class="modal-footer">
                      <div class="form-group">
                      <input type="submit" value="Send" name="send" title="Send" class="btn-sm pull-right" style="background-color: #6cbd45;color: #fff;font-size: 14px;outline: none;border: none; padding:3px 30px;" >
                       </div>
                      </div>
                   </form>  
                 </div>
               </div>
            </div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

								  <div class="modal-dialog">
									<div class="modal-content">
									<form class="" id="register_form" name="myform2" action="<?php echo base_url()?>user/sendNew" method="post"> 
									  <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="exampleModalLabel">Search User</h4>
									  </div>                                     
										 <div class="modal-body">
										  <div class="form-group">
										   <input type="text" name="to" class="form-control" id="country_id2" onkeyup="autocompletSearch()" placeholder="Search .." autocomplete="off" required />
											<input type="hidden" name="msgto" id="msgtov">
											<ul id="country_list_id2" style="list-style:none;padding: 5px 5px;overflow: hidden;"></ul>
										  </div>
									  </div>
									   </form>  
									</div>
								  </div>
								</div>
	<div class="clearfix pt-60"></div>

<?php $this->load->view('mobile/footer');?>
<script type="text/javascript">
function getMsg(id) {
	jQuery.ajax({
		url: "<?php echo base_url()?>user/get_msg",
		data:'id='+id,
		type: "POST",
		success:function(data){$('#output').html(data);
		}
	});
}
function SendMessage(){
var message = $('#message').val();
var msgto = $('#msgto').val();
if (message.length >0) {
		$.ajax({
			url: '<?php echo base_url()?>user/send',
			type: 'POST',
			data: {message:message,msgto:msgto},
			success:function(data){
				getMsg(msgto);
			} 
		});
	} else {
		getMsg(msgto);
	}
}

	function autocomplet() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#country_id').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: '<?php echo base_url()?>user/Searchuser',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#country_list_id').show();
				$('#country_list_id').html(data);
			}
		});
	} else {
		$('#country_list_id').hide();
	}
}

	function autocompletSearch() {
	var min_length = 0; // min caracters to display the autocomplete
	var keyword = $('#country_id2').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: '<?php echo base_url()?>user/SearchuserPro',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#country_list_id2').show();
				$('#country_list_id2').html(data);
			}
		});
	} else {
		$('#country_list_id2').hide();
	}
}

function set_item(item,ggg) {
	$('#country_id').val(item);
	$('#msgtov').val(ggg);
	$('#country_list_id').hide();
}

</script>  