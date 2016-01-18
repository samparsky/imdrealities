<?php 
  $comment_name = $comments['name'];
  $comment_date = $comments['created'];
  $comment_text = $comments['comment'];
 ?>


   <li><!-- li -->
         <div class="media">
              <a class="media-left media-middle" href="#">
                <?php echo $this->Html->image('avatar.png', array('class'=>array('img-rounded img-responsive'))); ?>
              </a>
              <div class="media-body">
                <h4 class="media-heading"><?php echo $comment_name; ?></h4>
                <h6 style="font-size:10px; margin-top:-5px"><?php echo $this->Time->format('F jS, Y', $comment_date); ?></h6>
                <p><?php echo $comment_text; ?></p>
              </div><!-- /media body-->
           </div><!-- /media -->
           
       </li><!-- /li -->