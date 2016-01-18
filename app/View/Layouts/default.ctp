<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $this->fetch('title'); ?></title>

<?php 
  echo $this->Html->css('bootstrap');
  echo $this->Html->css('styles_2');
  echo $this->Html->css('/font-awesome/css/font-awesome.min');
  
 ?>

 
</head>
<style type="text/css">
.trans {
  transition: all ease-in-out 500ms;
  box-shadow: 0 0 2px #000000;
}
.trans:hover {
  -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg);
}
#logo{
  margin-top: -20px;
}
</style>

<body>
<section class="top-social">
  <div class="row">
    <div class="container-fluid">
     <ul class="list-unstyled list-inline pull-right">
     <li><a href="#" class="hidden-sm hidden-xs">Sign up for our Newsletter &raquo;</a></li>
     <li><a href="https://facebook.com/iMDRealties"><span><i class="icon-social icon-facebook fa fa-facebook"></i></span></a></li>
     <li><a href="https://twitter.com/iMDRealities"><span><i class="icon-social icon-twitter fa fa-twitter"></i></span></a></li>
  <!--   <li><a href="#"><span><i class="icon-social icon-google-plus fa fa-google-plus"></i></span></a></li> -->
  <!--   <li><a href="#"><span><i class="icon-social icon-linkedin fa fa-linkedin"></i></span></a></li> -->
     </ul>
  </div>
  </div>
</section>

<header>
  <nav class="navbar navbar-inverse" role="navigation" style="border-radius:0px; background-color:#101010;">
  <div class="row"  style="padding:10px;">
   <div class="container"><!-- container-fluid -->
     <div class="navbar-header" ><!-- navbar-header -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
        <span class="sr-only">Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand"><!-- <img src="img/imdlogo.png"  class="img-responsive"  height="54px" width="77.4px"  style="margin-top:-20px;"alt="Ignite My Dreams Logo" title="Ignite My Dreams" /> -->
      <?php echo $this->Html->image('imdlogo.png', array('class'=>'img-responsive', 'height'=>'54px', 'width'=>'77.4px','alt'=>'Ignite My Dreams Logo', 'title'=>'Ignite My Dreams', 'id'=>'logo')); ?>
      </a>
     </div><!-- end navbar header -->
      <div class="collapse navbar-collapse" id="menu"><!-- menu start -->
        <ul class="nav nav-pills navbar-right">
          <li><a href="<?php echo Router::url(array('controller'=>'home', 'action'=>'index')); ?>"><span><i class="fa fa-home"></i></span>&nbsp;HOME</a></li>
          <li><a href="<?php echo Router::url(array('controller'=>'events', 'action'=>'index')); ?>"><span><i class="fa fa-calendar"></i></span>&nbsp;EVENTS</a></li>
          <li><a href="<?php echo Router::url(array('controller'=>'gallery','action'=>'index')); ?>"><span><i class="fa fa-picture-o"></i></span>&nbsp;GALLERY</a></li>
          <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">ABOUT US <span class="caret"></span></a>
                  <!-- dropdown About Us -->
               <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo Router::url(array('controller'=>'team', 'action'=>'index')); ?>" style="color:#000000;"><span><i class="fa fa-users"></i></span> OUR TEAM</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo Router::url(array('controller'=>'resource', 'action'=>'index')); ?>" style="color:#000000;"><span><i class="fa fa-file"></i></span> RESOURCE</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo Router::url(array('controller'=>'contact', 'action'=>'index')); ?>" style="color:#000000;"><span><i class="fa fa-user"></i></span> CONTACT US</a></li>
               </ul>
               <!-- dropdown end -->
          </li>
          <li><a href="<?php echo Router::url(array('controller'=>'blog','action'=>'index')); ?>"><span><i class="fa fa-book"></i> OUR BLOG</a></li>
        </ul>
      </div><!-- menu end -->
   </div><!-- container-fluid end -->
   </div><!-- row end -->
  </nav>
</header>
<!---->







<!---->
<?php echo $this->fetch('content'); ?>



<footer> 
 <div class="container-fluid"><!-- container -->
   <div class="row" style="background:#191919; padding:20px; color:#F8F8F8;"><!-- row -->
   
     <div class="col-md-3"><!-- col -->
     <h4>Our Contact</h4>
     <p><span><i class="fa fa-phone-square"></i></span> +2347038026223 +2348173592980</p>
      <p><span><i class="fa fa-envelope-square"></i></span> imdrealities@gmail.com</p> 
     </div><!-- col end -->
     
     <div class="col-md-3"><!-- col -->
     <h4>Navigation</h4>
     <ul class="list-unstyled">
       <li><a href="home.php">Home&nbsp;&raquo;</a></li>
       <li><a href="events.php">Events&nbsp;&raquo;</a></li>
       <li><a href="prenuer.php">The Preneur&nbsp;&nbsp;</a></li>
       <li><a href="about.php">About Us&nbsp;&raquo;</a></li>
       <li><a href="contact.php">Contact Us&nbsp;&raquo;</a></li>
     </ul>
     </div><!-- col end -->
     
     <div class="col-md-3"><!-- col -->
     <h4>Subscribe to our Newsletter</h4>
     <div class="form-group input-group">
                <input type="text" class="form-control _input" placeholder="Your e-mail" data-toggle="tooltip" title="Search for Courses" data-placement="bottom" data-animation="true"  style="box-shadow: 0 0 5px #9D9D9D inset;"/>
              <span class="input-group-btn"><!--for merging the button with input field-->
                <button type="submit" class="btn btn-default _input"><i class="fa fa-send"></i></button>
              </span>
        </div>
     </div><!-- col end -->
     
     <div class="col-md-3"><!-- col -->
     <h4>follow us on:</h4>
     <ul class="list-unstyled list-inline">
     <li><a href="https://facebook.com/iMDRealties"><span><i class="icon-social icon-facebook fa fa-facebook"></i></span></a></li>
     <li><a href="https://twitter.com/iMDRealities"><span><i class="icon-social icon-twitter fa fa-twitter"></i></span></a></li>
    <!-- <li><a href="#"><span><i class="icon-social icon-google-plus fa fa-google-plus"></i></span></a></li> -->
     <!-- <li><a href="#"><span><i class="icon-social icon-linkedin fa fa-linkedin"></i></span></a></li> -->
     </ul>
     </div><!-- col end -->
     
   </div><!-- row end -->
 </div><!-- container fluid -->
 <div class="row" style="color:#fff; background:#0E0E0E; padding:10px;">
   <div class="container">
   <p class="pull-right"><a href="#"><span><i class="fa fa-sitemap"></i>&nbsp;Sitemap</a></p>
   <p class="text-center">iMD Realities&nbsp;<span><i class="fa fa-copyright"></i></span>&nbsp;Copyright 2014</p> 
   </div><!-- conatainer -->
   </div><!-- row -->
</footer>

</body>
<?php 
  echo $this->Html->script('jquery-1.11.1.min');
  echo $this->Html->script('bootstrap.min');
  
 ?>
<script type="text/javascript">
$('.carousel').carousel({
  interval:4000
});

if($(window).width() > 750){
   $('#register').modal();
}

$('#preneur_button').click(function(e){
  e.preventDefault();
  var this_one = $(this);
  if ($('#fullname').val() && $('#email').val()) {
        $.post("scripts/preneurReg.php", {fullname: $('#fullname').val(), email: $('#email').val(), 
            phone_number: $('#number').val(), qualification: $('#qualification').val(), 
            subscription: $('#newsletter').val()}, function(a){
              $('#preneur_button').append(a);
        })
    }
})

</script>
</html>
