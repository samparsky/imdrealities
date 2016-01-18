<div class="row"><!-- row -->
    <div class="col-md-12 col-sm-12 col-xs-12"><!-- col -->
  <div class="table-responsive">

  <?php 
    if(empty($posts)){
      echo "<h2 style='text-align:center'>You have no Resource</h2>";
    }else{
      ?>
      <form method="post" action="<?php echo Router::url(array('controller'=>'admins','action'=>'deleteResource')); ?>">
    <table class="table">
    <tr style="color:black">
      <th>#</th>
      
      <th>Title</th>
      <th>Description</th>
      
      <th>Delete</th>
    </tr>
        
       <?php 
          
          $count = 1;
          foreach ($posts as $post) {
            echo $this->element('row_resource', array('post'=> $post, 'post_count'=>$count));
            $count++;
          }
       ?>


    </table>
    </div>
    <button type="submit" class="btn btn-danger"><i class="fa fa-close fa-fw"></i>Delete</button>
    </form>
    <?php
    }
   ?>

  
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