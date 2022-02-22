<?php $this->load->view("mobile/header-amp"); 
$search = array('h3', '<p style="text-align: center;"><img', '<p style="text-align:center"><img', '<p style="text-align:center;"><img', '" /></p>','<p dir="ltr" style="text-align:center"><img', '<p style="text-align:center"><strong><img', '" /></strong></p>','<p dir="ltr" style="text-align:center"><span style="background-color:transparent; color:rgb(0, 0, 0)"><img','" /></span></p>', '<p dir="ltr" style="text-align:center"><span style="background-color:transparent; color:#000000"><img', '<p style="text-align: center;"><br /> <img','<p style="text-align: center;"><strong><img', '<p dir="ltr" style="text-align: center;"><span style="background-color:transparent"><img','<img','style="text-align: center;"');
$replace = array('h2', '<amp-img', '<amp-img', '<amp-img', '"></amp-img>', '<amp-img','<amp-img','" />','<amp-img', '"></amp-img>','<amp-img','<amp-img','<amp-img','<amp-img','<amp-img','');

?>
<amp-img alt="<?php echo $Article->imgalt; ?>" src="<?php echo base_url().'media/upload/article/thumb/'.$Article->FeaturedImage ?>" width="400" height="270" layout="responsive"></amp-img> 
 

<div class="content-container">
        <p class="title"><?php echo $Article->PageTitle; ?></p>
        <p><span>by</span><span class="authorInfo">Vegan First</span></p>
</div>
<div class="content-container"><?php echo str_replace($search, $replace, $Article->Article_post);?></div>

<!-- Footer Part  -->
</div>

</body>
</html>