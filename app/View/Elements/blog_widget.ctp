<style type="text/css">
  #post_img{
    width: 100%;
  }
</style>
<?php 
     
     $post_id = $post['Post']['id'];
     $post_title = $post['Post']['post_title'];
     $post_summary = $post['Post']['post_summary'];
     $post_image = $post['Post']['post_image'];
     $created = $post['Post']['created'];

 ?>


<article>
								<a href="#"><h3><?php echo $post_title; ?></h3></a>
        
        <div>
        <p class="pull-right"><span><i class="fa fa-comments"></i></span>&nbsp; <?php 
                  //counting the number of comments
                  //echo count($posts[0]['Comment']) . ();
                  $count = count($post['Comment']);
                  echo $count . ($count > 0 ? ' comments' : ' comment');
         ?></p>

        <ul class="list-unstyled list-inline"><!-- innner list -->
          <li>
          <time><span><i class="fa fa-calendar"></i></span>&nbsp;<?php echo $this->Time->format('F jS, Y', $created); ?></time>
          </li>
          
          
          <li>
          </li>
         </ul><!-- end inner list -->
         </div><!-- div end -->
         
          <a href="#"><!-- <img src="" alt="design" title="design" class="img-responsive" width="100%"/> -->
          <?php echo $this->Html->image('/img/'.$post_image, array('alt'=>'design', 'title'=>'design', 'class'=>'img-responsive','id'=>'post_img')); ?>
          </a>
          <p><?php echo $post_summary; ?></p>
          <a href="<?php echo Router::url(array('controller'=>'blog', 'action'=>'view', $post_id)); ?>" class="btn btn-danger">Read More > </a>
							</article>