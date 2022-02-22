<?php $this->load->view('templates/header'); ?>
<div class="event_attend_cat" id="notifications">	        
	        <div class="bar1_cat" style="background-color: rgba(99,122,122,0.95);">
	             <div class="container-fluid">
	                <div class="container">
                    	<div class="row">
                        	<div class="col-md-9 mb-30 mt-10">
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
            	<div class="col-md-12">
                	      
                	      
                	      
                	      
                	 <?php if(isset($UpEvents)):
					$cnt = 0;
					?>
					<div class="mt-40"></div>
					<div class="col-md-12"><h4 class="title1">UPCOMMING EVENTS</h4></div>
					<?php
					foreach($UpEvents as $event): $cnt++; ?>
                    <div class="col-sm-4">
                    <div class="row">
                    	<div class="col-sm-12">
                       
                        <iframe class="embed-responsive-item"  src="https://www.google.com/maps/embed/v1/place?q=<?php echo $event->addr;?>&zoom=20&key=AIzaSyCjgBBUhskjZ6pS_5CC6_jgD7e_NItKe-c"  style="min-height:130px; width:100%"  frameborder="0" allowfullscreen>
  </iframe>                     
                        </div>
                        <div class="col-sm-12">                        	
                   <h3 class="featurettl mt-0" onclick="location.href='<?php echo base_url().'events/info/'.$event->event_url; ?>'"><?php echo $event->event_title;?></h3>
                   <h5 class="dtitle mb-0 mt-0"><?php echo date( "M. j, Y", strtotime( $event->event_date ) );?></h5>
                  
                        </div>
                        <div class="col-sm-12 mt-0">                          
                           <button class="btn btn-success ebtn" onclick="location.href='<?php echo base_url().'events/info/'.$event->event_url; ?>'">ATTEND</button>
                        </div>
                    </div><!--row ends here-->
                    </div>
                    <?php if($cnt==3): $cnt=0;?>
                   <div class="clearfix mb-20"></div>
                   <?php endif;?>
                  <?php  endforeach; endif;?>     
                	      
                	      
                	      
                	      
                	      
                	      
                    <div class="mt-40"></div>
                    <div class="col-md-12"><h4 class="title1">PAST EVENTS</h4></div>
                    
                    <?php if(isset($Events)):
					$cnt = 0;
					foreach($Events as $event): $cnt++; ?>
                    <div class="col-sm-4">
                    <div class="row">
                    	<div class="col-sm-12">
                       
                        <iframe class="embed-responsive-item"  src="https://www.google.com/maps/embed/v1/place?q=<?php echo $event->addr;?>&zoom=20&key=AIzaSyCjgBBUhskjZ6pS_5CC6_jgD7e_NItKe-c"  style="min-height:130px; width:100%"  frameborder="0" allowfullscreen>
  </iframe>                     
                        </div>
                        <div class="col-sm-12">                        	
                   <h3 class="featurettl mt-0" onclick="location.href='<?php echo base_url().'events/info/'.$event->event_url; ?>'"><?php echo $event->event_title;?></h3>
                   <h5 class="dtitle mb-0 mt-0"><?php echo date( "M. j, Y", strtotime( $event->event_date ) );?></h5>
                  
                        </div>
                        <div class="col-sm-12 mt-0">                          
                           <button class="btn btn-success ebtn" onclick="location.href='<?php echo base_url().'events/info/'.$event->event_url; ?>'">ATTEND</button>
                        </div>
                    </div><!--row ends here-->
                    </div>
                    <?php if($cnt==3): $cnt=0;?>
                   <div class="clearfix mb-20"></div>
                   <?php endif;?>
                  <?php  endforeach; endif;?>
				             
                </div><!--content part ends here-->
            </div><!--main row ends here-->
           
		</div>			     
		
		
 </div>      
        
		




<div class="clearfix pt-60"></div>
<?php $this->load->view('templates/footer_nl');?>
<?php $this->load->view('templates/footer');?>
  