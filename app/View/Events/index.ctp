<?php echo $this->set('title', 'Events'); ?>
<!-- social bar -->
<div class="">
<div class="row fixed-social hidden-xs hidden-sm">
<ul class="list-unstyled"><!-- list -->
 <li><a href="https://wwww.facebook.com/imdrealties/" target="_blank"><span><i class="fa fa-facebook icon-fixed fb"></i></span></a></li>
 <li><span><i class="fa fa-twitter icon-fixed tw"></i></span></li>
 <li><span><i class="fa fa-google-plus icon-fixed gplus"></i></span></li>
</ul><!-- /list -->
</div>
</div>
<!-- /social bar -->


<section>
  <div class="row"><!-- row -->
    <div class="container"><!-- container -->
    <h1><span><i class="fa fa-calendar-o"></i></span>&nbsp;Our Events</h1>
    
    <div class="col-md-8"><!-- col -->
     
   
     <?php 
                if(empty($events)){
                  echo "<h3>No Event</h3>";
                }
                else{

                  foreach($events as $event){
                    echo $this->element('event_widget', array('post'=> $event));
                  }
                }
               ?>
   

     
    
     
    <!-- this is for the pagination bar -->
    <nav>
      <div class="pull-right">
                <!-- for paginator -->
                <?php 
                        if(!empty($events)){
                          echo $this->element('paginator');
                        }else{
                          
                        }
                      ?>  
              </div>
   </nav>
    <!-- /pagination -->
    
    </div><!--- col end-->
    
    <!-- the aside part -->
    <aside class="col-md-4">
    
      <div class="well well-sm"><!-- well -->
     <h4>Subscribe to our Newsletter</h4>
	   <div class="form-group input-group">
                <input type="text" class="form-control _input" placeholder="Subscribe" data-toggle="tooltip" title="Search for Courses" data-placement="bottom" data-animation="true"  style="box-shadow: 0 0 5px #9D9D9D inset;"/>
              <span class="input-group-btn"><!--for merging the button with input field-->
                <button type="submit" class="btn btn-default _input"><i class="fa fa-send"></i></button>
              </span>
        </div>
     </div><!-- well end -->
    
    <?php 

     $event_title = $upcoming[0]['Post']['post_title'];
     $event_summary = $upcoming[0]['Post']['post_summary'];
     $event_image = $upcoming[0]['Post']['post_image'];
     $event_date = $upcoming[0]['Post']['event_date'];
     $event_strtime = $upcoming[0]['Post']['event_strtime'];
     $event_endtime = $upcoming[0]['Post']['event_endtime'];

     $strTime = $this->Time->format('h:i A', $event_strtime);
     $endTime = $this->Time->format('h:i A', $event_endtime);
     $id = $upcoming[0]['Post']['id'];
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
   
   
   <!-- archives -->
 <!--  <div class="well well-sm">
    <h4  class="text-center">Archives</h4>
     <ul class=" list-group">
       <li class="list-group-item"><a href="#">May 2012</a></li>
       <li class="list-group-item"><a href="#">April 2012</a></li>
       <li class="list-group-item"><a href="#">March 2012</a></li>
       <li class="list-group-item"><a href="#">February 2012</a></li>
       <li class="list-group-item"><a href="#">January 2012</a></li>
     </ul>
  </div> -->
  </div><!-- archives -->
       
    <div>
    </div>
    
    </aside>
    </div><!-- container end -->
  </div><!-- row end -->
</section>
<style type="text/css">
  #event_img{
    width:100%;
    height: 50%;
  }
</style>
