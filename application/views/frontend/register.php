<?php $this->load->view('templates/header');?>
<div style="min-height:5vh">
<div class="modal fade " tabindex="-1" id="register_suc" role="dialog" aria-labelledby="gridSystemModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    
      </div>
      <div class="modal-body">
       <img src="../media/images/vegan_icon.png" class="img-responcive center-block" style="max-width: 50px;" />
<h3 class="text-center">Welcome to Vegan First!</h3>
<p class="text-center">Check your email and click on confirmation link.<br/>If you don't see it. check your spam folder!</p>
          <div class="rs_toppadder20"></div>
        <img src="../media/images/fb_like.png" onclick="window.open('https://www.facebook.com/veganfirst/')" class="img-responcive center-block" style="cursor: pointer;"/>
<div class="rs_toppadder10"></div>
       <img src="../media/images/insta_follow.png" onclick="window.open('https://www.instagram.com/veganfirst_daily/')" class="img-responcive center-block" style="cursor: pointer;"/>
<div class="rs_toppadder20"></div>
      </div>
     </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
<?php $this->load->view('templates/footer_nl');?>
<?php $this->load->view('templates/footer');?>
<?php
if($this->input->get('sucess', TRUE))
{ ?>
<script type="text/javascript">
    $(window).load(function(){
        $('#register_suc').modal('show');
		
   	});
</script>
<?
}
else
{
?>  
<script type="text/javascript">
    $(window).load(function(){
        $('#reg_popup').modal('show');
 	});
</script>
<?php } ?>