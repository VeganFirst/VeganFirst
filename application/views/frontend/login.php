<?php $this->load->view('templates/header');?>             
<div></div>
<?php $this->load->view('templates/footer_nl');?>
<?php $this->load->view('templates/footer');?>             
<script type="text/javascript">
    $(window).load(function(){
        $('#login_popup').modal('show');
		$('.nav-tabs a[href="#tab1"]').tab('show');
   	});
</script>