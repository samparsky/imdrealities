<!DOCTYPE html>
<html>
<head>
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


<?php echo $this->fetch('content'); ?>


<?php 
  echo $this->Html->script('/lib/js/wysihtml5-0.3.0');
  echo $this->Html->script('jquery-1.11.1.min');

  echo $this->Html->script('/lib/js/prettify');
  echo $this->Html->script('bootstrap.min');

  echo $this->Html->script('plugins/metisMenu/metisMenu.min');
  echo $this->Html->script('/src/bootstrap-wysihtml5');
  
  


 ?>
</body>
</html>