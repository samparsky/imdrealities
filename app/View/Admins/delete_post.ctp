<div class="row"><!-- row -->
    <div class="col-md-12 col-sm-12 col-xs-12"><!-- col -->
	<div class="table-responsive">

  <form method="post" action="<?php echo Router::url(array('controller'=>'admins','action'=>'deletePost')); ?>">

  <?php 
    if(empty($posts)){
      echo "<h2 style='text-align:center'>You have no Post</h2>";
    }else{
      ?>
      <table class="table">
    <tr style="color:black">
      <th>#</th>
      <th>Date</th>
      <th>Title</th>
      <th>Description</th>
      <th>Comments</th>
      <th>Delete</th>
    </tr>
        
       <?php 
          
          $count = 1;
          foreach ($posts as $post) {
            echo $this->element('table_row', array('post'=> $post, 'post_count'=>$count));
            $count++;
          }
       ?>


    </table>
    <?php
    }
   ?>
    
    </div>

    <?php 
      if(empty($posts)){

      }else{
        ?>
        <button type="submit" class="btn btn-danger"><i class="fa fa-close fa-fw"></i>Delete</button>
      <?php
      }
     ?>

    
    </form>
</div><!-- /col -->
</div><!-- /row -->

 <div class="row">
    <div class="pull-right">
         <?php 
            if(!empty($posts)){
              echo $this->element('paginator');
            }else{
              
            }
          ?>
       </div>
  </div>