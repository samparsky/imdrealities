<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $this->fetch('title'); ?></title>
<?php 
  echo $this->Html->css('bootstrap');
  
  echo $this->Html->css('/font-awesome/css/font-awesome.min');
  echo $this->Html->css('styles');
  echo $this->Html->css('/lib/css/prettify');
  echo $this->Html->css('/src/bootstrap-wysihtml5');
 ?>


</head>

<body>
<header><!-- header -->  
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="border-radius:0px; background-color:#191919;">
     <div class="navbar-header" ><!-- navbar-header -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
        <span class="sr-only">Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a href="<?php echo Router::url(array("controller"=> "admins", "action"=>"index")); ?>" class="navbar-brand"><!-- <img src="../img/imdlogo.png"  class="img-responsive"  height="50px" width="60.4px"  style="margin-top:-10px;"alt="Ignite My Dreams Logo" title="Ignite My Dreams" /> -->
      <?php echo $this->Html->image('imdlogo.png', array('class'=> 'img-responsive', 'height'=> '50px', 'width'=>'60.4px',
        'style'=>array('margin-top'=> '-10px'), 'alt'=> 'Ignite My Dreams Logo', 'title'=> 'Ignite My Dreams','id'=>'logo')); ?>
      </a>

     </div><!-- end navbar header -->
      <div class=""><!-- menu start -->
        <ul class="nav nav-pills navbar-right">
         
          <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span><i class="fa fa-user"></i></span>&nbsp;<span class="caret"></span></a>
                  <!-- dropdown user -->
               <ul class="dropdown-menu" role="menu">
               
                <!-- <li><a href="resource.php" style="color:#000000;"><span><i class="fa fa-sign-out"></i></span> LOG OUT</a></li> -->
                <li>
                  <?php echo $this->Html->link('<span><i class="fa fa-sign-out"></i></span>LOG OUT',array('controller'=>'admins', 'action'=>'logout'),array('escape'=>false)); ?>
                </li>

               
               </ul>
               <!-- dropdown user -->
          </li>
         
        </ul>
      </div><!-- menu end -->


<aside>
 <nav><!-- nav  -->
   <div class="navbar-inverse sidebar" role="navigation" style="background-color:#191919;"><!-- navbar -->
     <div class="navbar-collapse"  id="menu"><!-- navbar collapse -->
       <ul class="nav" id="side-menu"><!-- side-menu -->
        
         <li>
            <a href="<?php echo Router::url(array("controller"=>"admins", "action"=> "index")); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
         </li>
          <li>
            <a href="#"><i class="fa fa-user fa-fw"></i> Events<span><i class="fa arrow"></i></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="<?php echo Router::url(array("controller"=>"admins", "action"=> "addEvent")); ?>"><span><i class="fa fa-plus fa-fw"></i></span>&nbsp;Add Event</a>
                </li>
                <li>
                  <a href="<?php echo Router::url(array("controller"=>"admins", "action"=> "calendar")); ?>"><span><i class="fa fa-calendar fa-fw"></i></span>&nbsp;Calendar</a>
                </li>
                <li>
                  <a href="<?php echo Router::url(array('controller'=>'admins','action'=>'deleteEvent')); ?>"><span><i class="fa fa-close fa-fw"></i></span>&nbsp;Delete Event</a>
                </li>
              </ul>
              <!-- /.nav-second-level -->
         </li>
          <li>
            <a href="#"><i class="fa fa-user fa-fw"></i> Blog Post<span><i class="fa arrow"></i></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="<?php echo Router::url(array("controller"=>"admins", "action"=> "addPost")); ?>"><span><i class="fa fa-plus fa-fw"></i></span>&nbsp;Add Posts</a>
                </li>
                <li>
                  <a href="<?php echo Router::url(array("controller"=>"admins", "action"=> "posts")); ?>"><span><i class="fa fa-paste fa-fw"></i></span>&nbsp;Blog </a>
                </li>
                <li>
                  <a href="<?php echo Router::url(array("controller"=>"admins", "action"=> "deletePost")); ?>"><span><i class="fa fa-close fa-fw"></i></span>&nbsp;Delete Posts</a>
                </li>
              </ul>
              <!-- /.nav-second-level -->
         </li>         
          <li>
            <a href="#"><i class="fa fa-user fa-fw"></i> Gallery<span><i class="fa arrow"></i></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="<?php echo Router::url(array("controller"=>"admins", "action"=> "addPicture")); ?>"><span><i class="fa fa-plus fa-fw"></i></span>&nbsp;Add Pictures</a>
                </li>
                <li>
                  <a href="<?php echo Router::url(array("controller"=>"admins", "action"=> "gallery")); ?>"><span><i class="fa fa-picture-o fa-fw"></i></span>&nbsp;Gallery</a>
                </li>
                <li>
                  <a href="#"><span><i class="fa fa-close fa-fw"></i></span>&nbsp;Delete Pictures</a>
                </li>
              </ul>
              <!-- /.nav-second-level -->
         </li>   
          <li>
            <a href="#"><i class="fa fa-user fa-fw"></i> Resource<span><i class="fa arrow"></i></span></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="<?php echo Router::url(array("controller"=>"admins", "action"=> "addResource")); ?>"><span><i class="fa fa-plus fa-fw"></i></span>&nbsp;Add Resources</a>
                </li>
                <li>
                  <a href="resource/resource-center.html"><span><i class="fa fa-home fa-fw"></i></span>&nbsp;Resource Center</a>
                </li>
                <li>
                  <a href="<?php echo Router::url(array("controller"=>"admins", "action"=> "deleteResource")); ?>"><span><i class="fa fa-close fa-fw"></i></span>&nbsp;Delete Resources</a>
                </li>
              </ul>
              <!-- /.nav-second-level -->
         </li>
         <li>
           <a href="<?php echo Router::url(array('controller'=>'admins', 'action'=>'changePassword')); ?>"><i class="fa fa-user fa-fw"></i>Change Password</a>
         </li>         
       </ul><!-- /side-menu -->
     </div><!-- /navbar collapse -->
   </div><!-- /navbar -->
 </nav><!-- /nav -->
</aside>
</nav>
</header><!-- /header -->


<section id='page-wrapper'>



<?php echo $this->fetch('content'); ?>




<footer class="row" style="margin-top:20px; background:#191919; text-align:center; padding:20px; margin-bottom:20px; color:#F2F2F2;">

<p>Copyright &copy; 2015 IMd Realities</p>
</footer>
</section><!-- /section -->





















</body>
<?php 
  echo $this->Html->script('/lib/js/wysihtml5-0.3.0');
  echo $this->Html->script('jquery-1.11.1.min');

  echo $this->Html->script('/lib/js/prettify');
  echo $this->Html->script('bootstrap.min');

  echo $this->Html->script('plugins/metisMenu/metisMenu.min');
  echo $this->Html->script('/src/bootstrap-wysihtml5');
  
  


 ?>
<!-- <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugins/metisMenu/metisMenu.min.js"></script> -->
<script type="text/javascript">
$(function() {

    $('#side-menu').metisMenu();

});
$(function() {
    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse')
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse')
        }
  });
});

  $('#textarea').wysihtml5();

</script>
</html>
