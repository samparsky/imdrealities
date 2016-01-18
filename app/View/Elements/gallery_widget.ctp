<?php 
	$event_id = $event['GalleryEvent']['id'];
	$event_name = $event['GalleryEvent']['event_name'];
	$event_date = $event['GalleryEvent']['event_date'];
	$event_image = $event['GalleryEvent']['event_image'];

 ?>



				 <div class="col-md-4 col-sm-4"><!-- col -->
		        <div class="thumbnail"><!-- thumbnail -->
		          
		          <?php echo $this->Html->image('/img/'.$event_image, array('alt'=>'design', 'title'=>'event', 'class'=>'img-responsive','id'=>'post_img')); ?>
		          <div class="caption"><!-- caption -->
		            <p><span><i class="fa fa-calendar"></i></span>&nbsp;<?php echo $this->Time->format('F jS, Y', $event_date); ?></p>
		            <p><b>Event</b>: <?php echo $event_name; ?></p>
		            
		            <a href="<?php echo Router::url(array('controller'=>'gallery', 'action'=>'sendFile', $event_id)); ?>" class="btn btn-danger">Download&nbsp;<span><i class="fa fa-download"></i></span></a>
		            
		          </div><!-- /caption -->
		        </div><!-- /thumbnail -->
	      </div><!-- /col -->
