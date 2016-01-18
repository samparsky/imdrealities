 <?php 

    $post_title = $post['Post']['post_title'];
    $post_summary = $post['Post']['post_summary'];
    $created = $post['Post']['created'];

  ?>


 <li>
          <div class="col-md-4 col-sm-6 col-xs-12 blog">
           <div class="post">
            <h4><?php echo $post_title; ?></h4>
            <ul class="list-unstyled list-inline carbon">
              <li class="pull-right"><i class="fa fa-comment fa-fw"></i>25</li>
              <li><i class="fa fa-calendar fa-fw"></i><?php echo $this->Time->format('F jS, Y', $created); ?></li>
            </ul>
            <p><?php echo $post_summary; ?></p> 
          </div>
         </div>
 </li>
       