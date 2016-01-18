
<?php 
	 $event_title = $event['Post']['post_title'];
     $event_details = $event['Post']['post_details'];
     $event_image = $event['Post']['post_image'];
     $event_date = $event['Post']['event_date'];
     $event_strtime = $event['Post']['event_strtime'];
     $event_endtime = $event['Post']['event_endtime'];

     $strTime = $this->Time->format('h:i A', $event_strtime);
     $endTime = $this->Time->format('h:i A', $event_endtime);

     echo $this->set('title', $event_title);
 ?>



<div class="row">
	<div class="container">
		<div class="col-md-7">
			<a href="#"><h3><?php echo $event_title; ?></h3></a> 
			<!-- <ul class="list-unstyled">
				<li>
					<?php echo $this->Html->image($event_image, array('class'=>'img-responsive')); ?>  
				</li>
				<li style="margin-top:10">
					<b>Event starting time:</b> <?php echo $strTime; ?>
				</li>
				<li>
					<b>Event closing time:</b> <?php echo $endTime; ?>
				</li>
				<li>
					<b>Event details:</b> <p><?php echo $event_details; ?></p>
				</li>
			</ul> -->

			<div>
				<?php echo $this->Html->image($event_image, array('class'=>'img-responsive')); ?>  
			</div>
			<div  style="padding-top:20px">
				<b>Event starting time:</b> <?php echo $strTime; ?>
			</div>
			<div style="padding-top:10px">
				<b>Event closing time:</b> <?php echo $endTime; ?>
			</div>
			<div style="padding-top:10px">
				<b>Event details:</b> <p><?php echo $event_details; ?></p>
			</div>

		</div>

		<div class="col-md-5">
			    <?php 

     $event_title = $upcoming[0]['Post']['post_title'];
     $id = $upcoming[0]['Post']['id'];
     $event_summary = $upcoming[0]['Post']['post_summary'];
     $event_image = $upcoming[0]['Post']['post_image'];
     $event_date = $upcoming[0]['Post']['event_date'];
     $event_strtime = $upcoming[0]['Post']['event_strtime'];
     $event_endtime = $upcoming[0]['Post']['event_endtime'];

     $strTime = $this->Time->format('h:i A', $event_strtime);
     $endTime = $this->Time->format('h:i A', $event_endtime);
     ?>
    
    <div class="panel panel-danger">
    <div class="panel-heading">
      <h3 class="text-center">Upcoming Event</h3>
    </div>
    <div class="panel-body">
      <ul class="list-unstyled">
      <li>
        <div class="col-sm-6 col-xs-6">
        <!-- this represents the animation section using css -->
          <div class="img-item">
          <div class="overlay" style="width:90%; height:100%;">
            <h5 class="text-center _title"><?php echo $event_title; ?></h5>
          </div>
           <!-- <img src="img/thumb.jpg" alt="The Entrepreneur" width="100%" height="50%" title="The Entrepreneur" class="img-responsive" /> -->
           <?php echo $this->Html->image('/img/'.$event_image, array('alt'=>'design', 'title'=>'event', 'class'=>'img-responsive','id'=>'event_img')); ?>
 		 </div>        
       </div>
       <div class="col-sm-6 col-xs-6">
               <h5><?php echo $event_title; ?></h5>
        
          <time><span><i class="fa fa-calendar"></i></span>&nbsp;<?php echo $strTime . ' - ' . $endTime; ?></time>
          <p class="text-muted"><?php echo $event_summary; ?></p>
          <a href="<?php echo Router::url(array('controller'=>'events', 'action'=>'view',$id)); ?>" class="btn btn-default">Read More &raquo;</a>
         </div>
       </li>
       </ul>
    </div><!-- /body -->
   </div><!-- /panel -->

		</div>
	</div>
</div>