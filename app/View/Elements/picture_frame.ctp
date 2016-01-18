<?php 
	
	$event_image = $gallery_image['GalleryEvent']['event_image'];
	$event_date = $gallery_image['GalleryEvent']['event_date'];
	$event_name = $gallery_image['GalleryEvent']['event_name'];
  $event_image_id = $gallery_image['GalleryEvent']['id'];
 ?>

<li>
          <div class="col-md-4">
          <input type="checkbox" class="checkbox" name="data[checked][]" value="<?php echo $event_image_id; ?>" />
            <div class="well well-sm" style="padding:0px">
              <!-- <img src="../img/logo.png" width="320" height="50" style="border:2px solid #151515" class="img-responsive" /> -->

              <?php echo $this->Html->image("/img/".$event_image, array('class'=>'img-responsive', 'width'=>320, 'height'=>50)); ?>
              <p>Date: <?php echo $this->Time->format('F jS, Y', $event_date); ?></p>
              <p>Event: <?php echo $event_name; ?></p>
              <p>Venue: Eden Hall New Buka</p>
            </div>
          </div>
        </li>

<style type="text/css">
  img{
    border:2px solid #151515;
  }
  .well p{
    color:black;
  }
</style>