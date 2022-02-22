<?php $this->load->view('mobile/header'); ?>
<div class="event_attend_cat" id="notifications">	        
	        <div class="bar1_cat" style="background-color: rgba(99,122,122,0.95);">
	             <div class="container-fluid">
	                <div class="container">
                    	<div class="row">
                        	<div class="col-md-9 mb-30 mt-30">
                            	<h1 class="homeh1msg" style="color: #fff;">Events</h1>
                            </div>
                        </div> 
                    </div>
	            </div>
	        </div>
	        <div class="clearfix"></div>
	    </div>
	<div class="main"> 
<div class="container">
        		<div class="row">
                 </div>
			<div class="row">
            	<div class="col-md-8">
                	      
                    <div class="mt-20"></div>
                    <?php if(isset($Events)):
					foreach($Events as $event): ?>
                    <div class="row">
                    	<div class="col-sm-3 col-xs-4" style="padding-right: 0;">
                        <!--<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15129.071522625427!2d73.9169263!3d18.5619579!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6f7fdcc8e4d6c77e!2sPhoenix+Market+City!5e0!3m2!1sen!2sin!4v1495870009454" style="min-height:50px; width:100%"  frameborder="0" allowfullscreen></iframe> -->
                        <iframe class="embed-responsive-item"  src="https://www.google.com/maps/embed/v1/place?q=<?php echo $event->addr;?>&zoom=20&key=AIzaSyBmOWlL4LyKLUjzibfd5RlijGBTlHJLtAk"  style="min-height:50px; width:100%"  frameborder="0" allowfullscreen></iframe>            
                                              
                        </div>
                        <div class="col-sm-7 col-xs-8">                        	
                   <h3 class="etitle mt-0 mb-0" onclick="location.href='<?php echo base_url().'events/info/'.$event->idevent; ?>'"><?php echo $event->event_title;?></h3>
                   <h5 class="dtitle mt-0 mb-0"><?php echo date( "M. j, Y", strtotime( $event->event_date ) );?></h5>
                  <div class="mt-10 mb-0 ptitle"><?php echo $event->event_deac;?></div>
                        </div>
                        <div class="col-sm-2 col-xs-8 pull-right">                          
                           <button class="btn btn-success ebtn mt-0" onclick="location.href='<?php echo base_url().'events/info/'.$event->idevent; ?>'">ATTEND</button>
                        </div>
                    </div><!--row ends here-->
                    <div class="clearfix"></div>
                    <hr/>
                  <?php endforeach;
				  else: ?>  
                  
                  
                  <?php endif;?>             
                </div><!--content part ends here-->
                
                <!--sidebar ends here-->
                
            </div><!--main row ends here-->
           
		</div>			     
		
		
 </div>      
        

<?php $this->load->view('mobile/footer_nl');?>
<?php $this->load->view('mobile/footer');?>
  