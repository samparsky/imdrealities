<?php 
     $event_id = $post['Post']['id'];
     $event_title = $post['Post']['post_title'];
     $event_summary = $post['Post']['post_summary'];
     $event_image = $post['Post']['post_image'];
     $event_date = $post['Post']['event_date'];
     $event_strtime = $post['Post']['event_strtime'];
     $event_endtime = $post['Post']['event_endtime'];

     $strTime = $this->Time->format('h:i A', $event_strtime);
     $endTime = $this->Time->format('h:i A', $event_endtime);
 ?>




<div class="row"  style="margin-bottom:50px; border-bottom: 1px solid #C1C1C1; padding-bottom:20px;">
     <div class="container-fluid">
      <h3 class="_h1-down"><?php echo $this->Time->format('F jS, Y', $event_date); ?></h3>
      <div class="col-md-5 col-sm-5">
      <!-- <img src="img/event.jpg" alt="event" title="event" class="img-responsive" /> -->
      <?php echo $this->Html->image('/img/'.$event_image, array('alt'=>'design', 'title'=>'event', 'class'=>'img-responsive','id'=>'post_img')); ?>
      </div>
      <div class="col-md-7 col-sm-7 _fix-top">
        <h3 class="_fix-top res"><span><i class="fa fa-twitter"></i></span>&nbsp;<?php echo $event_title; ?></h3>
        <!-- <p class="text-muted"><span><i class="fa fa-clock-o"></i></span> 11:00am - 05:00pm</p> -->
        <p class="text-muted"><span><i class="fa fa-clock-o"></i></span> <?php echo $strTime . ' - ' . $endTime; ?></p>
        <p><?php echo $event_summary; ?></p>
        <a href="<?php echo Router::url(array('controller'=>'events', 'action'=>'view', $event_id)); ?>" class="btn btn-danger">Read More</a>
      </div>
    </div>
    </div>