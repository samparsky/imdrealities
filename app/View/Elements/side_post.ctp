<?php 

	 $post_id = $post['Post']['id'];
     $post_title = $post['Post']['post_title'];
     $post_summary = $post['Post']['post_summary'];
     $post_image = $post['Post']['post_image'];

     $pos = strpos($post_summary, '.');
     if($pos == false){
     	return $post_summary;
     }else{
     	$abb = substr($post_summary, 0, $pos+1);
     }
 ?>


<div><!-- post 1- -->
      <!-- <img src="img/avatar.png" class="img-responsive pull-left" /> -->
      <?php echo $this->Html->image('avatar.png', array('class'=>array('img-responsive pull-left'))); ?>
      <div style="margin-left:80px;">
      <a href="<?php echo Router::url(array('controller'=>'blog', 'action'=>'view', $post_id)); ?>"><h4><?php echo $post_title; ?></h4></a>
      <p class="text-muted"><?php echo $abb; ?>...</p> 
      </div>
</div>
<div class="clearfix"></div>