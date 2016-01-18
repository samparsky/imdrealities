<?php echo $this->set('title', 'IMD'); ?>
<section style="margin-top:-20px;"><!-- carousel -->
<div class="row hidden-xs"><!-- row -->
    <div class="carousel slide" data-ride="carousel" id="slideshow"><!-- carousel -->
        <ol class="carousel-indicators"><!-- carousel indicator -->
          <li data-target="#slideshow" data-slide-to="0" class="active"></li>
          <li data-target="#slideshow" data-slide-to="1" ></li>
          <li data-target="#slideshow" data-slide-to="2" ></li>
        </ol><!-- carousel indicators end -->
      <div class="carousel-inner" role="listbox">
      <!-- carousel -->
      
        <div class="item active">
          <!-- <img src="img/slide1.jpg"  class="img-responsive"  alt="imd" title="imd" /> -->
          <?php echo $this->Html->image('slide1.jpg', array('class'=>'img-responsive', 'alt'=>'imd', 'title'=>'imd')); ?>
          <div class="carousel-caption">
            <h1 class="text-center" style="font-weight:bolder;color:#ffffff; line-height:50px;">WE ORGANIZE STUDENTS CONFERENCE ALL AROUND NIGERIA TO ENLIGHTEN STUDENTS ON THE IMPORTANCE OF ICT.<br /><a href="<?php echo Router::url(array('controller'=>'about')); ?>" class="btn btn-danger">LEARN MORE &raquo;</a></h1>
          </div><!-- carousel caption -->
        </div>
        
        <div class="item">
        <div class="row">
          <?php echo $this->Html->image('slide2.jpg', array('class'=>'img-responsive', 'alt'=>'imd', 'title'=>'imd')); ?>
          <div class="carousel-caption">
            <h1 class="text-center" style="font-weight:bolder;color:#ffffff; line-height:50px;">WE BELIEVE IN HELPING PEOPLE TO ACHIEVE THEIR DREAMS AND ATTAIN THEIR POTENTIALS.<br /><a href="<?php echo Router::url(array('controller'=>'about')); ?>" class="btn btn-danger">LEARN MORE &raquo;</a></h1>
          </div><!-- carousel caption -->
          </div>
        </div>
        
         <div class="item">
         <div class="row">
          <?php echo $this->Html->image('slide3.jpg', array('class'=>'img-responsive', 'alt'=>'imd', 'title'=>'imd')); ?>
          <div class="carousel-caption">
            <h1 class="text-center" style="font-weight:bolder;color:#ffffff; line-height:50px;">WE ORGANIZE ENTREPREURIAL EVENTS IN VARIOUS LOCATIONS SO AS TO HELP PEOPLE ACHIEVE THEIR ENTEREPRENEURIAL DREAMS.<br /><a href="<?php echo Router::url(array('controller'=>'about')); ?>" class="btn btn-danger">LEARN MORE &raquo;</a></h3>
          </div><!-- carousel caption -->
        </div>
        </div>
        
      </div><!-- carousel inner end -->
      
       <a class="left carousel-control" href="#slideshow" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#slideshow" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
      
    </div><!-- carousel -->
</div><!-- row end -->
</section><!-- carousel end -->





<section style="line-height:25px; margin-top:20px;">
<div class="row"><!-- row -->
<div class="container"><!-- container -->
  <div class="col-md-12">
    <div class="text-center">
  <h1>What is iMD ?</h1>
  <p class="text-muted">A brief introduction</p>
  </div>
  <p class="text-center">iMD stands for <b style="color:#D62F27;">IGNITE, MOTIVATE, DEVELOP</b>. IMD as an organization holds the community as its major operational base, our goal as an organization is mainly to give back to the global community, and therefore by merging our operational goals into the framework of the community’s developmental plans, we intend to transform the community by reaching out to individual units and the global community as a whole...
   <br /><a class="btn btn-danger btn-lg text-center anime-btn" style="margin-top:20px; margin-bottom:40px;" href="about.php">Learn more &raquo;</a></p>
  </div><!-- col end -->
  
  
  </div>
</div><!-- container end -->
</div>
</section>




<section style="line-height:25px; font-size:px; padding:10px; margin-bottom:50px;">
<div class="row">
 <div class="container"><!-- container -->
 
  
  <div class="col-md-4">
     <img src="img/vision.jpg" style="alignment-adjust:middle;" class="img-circle img-responsive" alt="vision" title="vision" />
    <p class="text-muted"></p>
    <p>To be the world’s greatest instrument in transforming great dreams into reality...<br /><a href="<?php echo Router::url(array('controller'=>'about')); ?>" class="btn btn-default">Read More &raquo;</a></p>
  </div><!-- col end -->
  
  <div class="col-md-4">
    <img src="img/mission.jpg"class="img-circle img-responsive" alt="mission" title="mission" />
    <p class="text-muted"></p>
    <p>We IGNITE young people’s PASSION through the inspired testimonies of great achievers, thus birthing in the process the courage needed to turn those dreams...<br /><a href="<?php echo Router::url(array('controller'=>'about')); ?>" class="btn btn-default">Read More &raquo;</a></p>
  </div><!-- col end -->

  
   <div class="col-md-4">
    <img src="img/values.jpg" class="img-circle img-responsive" alt="values" title="values" />
    <p class="text-muted"></p>
    <p><b>Community</b> - IMD as an organization holds the community as its major operational base, our goal as an organization is mainly to give back to the global community...<br /><a href="<?php echo Router::url(array('controller'=>'about')); ?>" class="btn btn-default">Read More &raquo;</a></p>
  </div><!-- col end -->


</div><!-- container end -->
</div>
</section>



<section id="actions">
<div class="row">
<div class="container">
<h1 class="text-center" style="color:#ffffff; margin-bottom:40px;">Our Programmes</h1>
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="well well-sm trans" style="padding:0px;border-radius:10px; background:#ffffff;">
      <a href="about.php"><img src="img/imd.png" alt="imd conference" title="imd conference" class="img-responsive" /></a>
      <div style="padding:5px;">
        <p class="text-center">This is an annual talk from speakers who are possessed by their dreams and passions. </p>
      </div>
    </div>
  </div>
  
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="well well-sm trans" style="padding:0px; border-radius:10px; background:#ffffff;">
      <a href="about.php"><img src="img/biz.png" alt="imd biz conference" title="imd biz conference" class="img-responsive" /></a>
      <div style="padding:5px;">
        <p class="text-center">To be the world’s greatest instrument in transforming great dreams into reality.</p>
      </div><!-- padding -->
    </div>
  </div>
  
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="well well-sm trans" style="padding:0px; border-radius:10px; background:#ffffff;">
      <a href="about.php"><img src="img/tweet.png" alt="imd twitter conference" title="imd twitter conference" class="img-responsive"  /></a>
      <div style="padding:5px;">
        <p class="text-center">Using the social media to impart and train people anywhere in the world even at their convenience.</p>
      </div>
    </div>
  </div>
  
  
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="well well-sm trans" style="padding:0px; border-radius:10px; background:#ffffff;">
      <a href="about.php"><img src="img/voc.png" alt="imd vocational training" title="action" class="img-responsive"  /></a>
      <p class="text-center">This has the sole aim of training young Nigerians and bringing out the entrepreneurial spirit / ingenuity imbedded in them.</p>
    </div>
  </div>
  
  
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="well well-sm trans" style="padding:0px; border-radius:10px; background:#ffffff;">
      <a href="about.php"><img src="img/pthumb.png" alt="The prenuer" title="The Preneur" class="img-responsive"  /></a>
      <p class="text-center">To be the world’s greatest instrument in transforming great dreams into reality.</p>
    </div>
  </div>
  
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="well well-sm trans" style="padding:0px; border-radius:10px; background:#ffffff;">
      <a href="about.php"><img src="img/stu.png" alt="img students conference" title="imd students conference" class="img-responsive"  /></a>
      <p class="text-center">The aim of this project is to enhance the leadership effectiveness of the students who have assumed leadership roles in one way or the other.</p>
    </div>
  </div>
   
</div><!-- container  -->
</div><!-- row -->
</section>








<section>
<div class="row" ><!-- row -->
 <div class="container"><!-- container -->

   <?php 

        
        if(empty($posts)){
          
        }else{
            $post_title = $posts[0]['Post']['post_title'];
            $post_summary = $posts[0]['Post']['post_summary'];
            $post_image = $posts[0]['Post']['post_image'];
            $post_created = $posts[0]['Post']['created'];
    ?>
     <div class="col-md-7 col-sm-7"><!-- col -->
   <h1 style="margin-top:40px;">Our Blog</h1>
   <!-- blog content  -->

      <div class="well well-lg" style="padding:20px; margin:0px;">
      <a href="#" class="pull-left"><!-- <img src="img/blog.jpg" alt="blog" title="blog" class="img-responsive" /> -->
      <?php echo $this->Html->image("/img/" . $post_image, array('alt'=>'blog', 'title'=>'blog', 'class'=>'img-responsive')); ?>
      </a>
      <div class="media-body">
       <div class="col-xs-12"> <!-- col -->
        <h4><?php echo $post_title; ?></h4><!-- heading -->
        <p class="pull-right"><span><i class="fa fa-comments"></i></span>&nbsp;<?php 
                  //counting the number of comments
                  //echo count($posts[0]['Comment']) . ();
                  $count = count($posts[0]['Comment']);
                  echo $count . ($count > 0 ? ' comments' : ' comment');
         ?></p>
        <ul class="list-unstyled list-inline"><!-- innner list -->
          <li>
          <time><span><i class="fa fa-calendar"></i></span>&nbsp;<?php echo $this->Time->format('F jS, Y', $post_created); ?></time>
          </li>
          <li>
          <p>|</p>
          </li>
          <li>
          <p><span><i class="fa fa-user"></i></span>&nbsp;Admin</p>
          </li>
          <li>
          </li>
         </ul><!-- /inner list -->
       
        <p><?php echo $post_summary; ?></p>
        <!-- make the read page -->
        <a href="" class="btn btn-danger">Read More &raquo;</a>
         </div><!-- /col -->
            <a href="<?php echo Router::url(array('controller'=>'blog', 'action'=>'index')) ?>" class="btn btn-danger pull-right" style="margin-top:20px;">More &raquo;</a>

      </div><!-- /media-body -->
     </div><!-- /media -->
     <!-- /blog content -->
    
   <!-- more button -->
   <!-- /more button -->
   </div><!-- /col -->
    <?php 
        }



    ?>



   
   
   <div class="col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1" style="margin-top:100px;">
   
   <!-- search -->
   <div class="well well-sm">
    <h4>Search</h4>
     <div class="form-group input-group">
                <input type="text" class="form-control _input" placeholder="Search" data-toggle="tooltip" title="Search for Courses" data-placement="bottom" data-animation="true"  style="box-shadow: 0 0 5px #9D9D9D inset;"/>
              <span class="input-group-btn"><!--for merging the button with input field-->
                <button type="submit" class="btn btn-default _input"><i class="fa fa-search"></i></button>
              </span>
        </div>
  </div>
  <!-- /search -->


  
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
            <h5 class="text-center _title">Week</h5>
          </div>
           <img src="img/thumb.jpg" alt="The Entrepreneur" width="100%" height="50%" title="The Entrepreneur" class="img-responsive" />
     </div>        
       </div>
         <div class="col-sm-6 col-xs-6">
               <h5>Week</h5>
        
          <span><i class="fa fa-calendar"></i></span>&nbsp;12/14/2012
          <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a href="<?php echo Router::url(array('controller'=>'events')); ?>" class="btn btn-default">Read More &raquo;</a>
         </div>
       </li>
       
       </ul>
    </div><!-- /body -->
   </div><!-- /panel -->
 </div><!-- container end -->
</div><!-- row end -->
</section>

