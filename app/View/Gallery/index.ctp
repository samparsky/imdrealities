<?php echo $this->set('title', 'Gallery'); ?>
<style type="text/css">
#gallery {
	background: url(img/gallery.jpg) no-repeat center center fixed;
	background-size: 100%;
	webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover; 
	-webkit-background-size: 100%;
    -moz-background-size: 100%;
    -o-background-size: 100%;
}
</style>


<section id="gallery" style="margin-top:-20px;">
<div class="row hidden-xs"><!-- row -->
  <div class="container"><!-- container -->
      <div class="col-lg-12 col-md-12" style="margin-top:20%;" >
     <h1 class="text-center"  style="color:#ffffff; font-weight:bolder; font-size:72px; margin-top:40px;">OUR GALLERY</h1>
    </div>
  </div><!-- /container -->
</div><!-- /row -->
</section>

<section style="margin-top:40px;">
	<div class="container">
		<div class="row">
		 <?php 
                if(empty($images)){
                  echo "<h3>No Image</h3>";
                }
                else{

                  foreach($images as $image){
                    echo $this->element('gallery_widget', array('event'=> $image));
                  }
                }
               ?>
   
          </div>

		
			<!-- navigatrion -->
			 <div class="pull-right">
                <!-- for paginator -->
                <?php 
                        if(!empty($images)){
                          echo $this->element('paginator');
                        }else{
                          
                        }
                      ?>  
              
		</div>
	</div>

</section>