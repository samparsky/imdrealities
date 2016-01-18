<form method="post" action="<?php echo Router::url(array('controller'=>'admins','action'=>'gallery')); ?>">
<div class="row"><!-- row -->
    <div class="col-md-12 col-sm-12 col-xs-12"><!-- col -->
   
      <h3>Gallery</h3>
      <h5 style="color:lightblue">*Click the checkbox to delete any image</h5>
      
      <ul class="list-unstyled">
        

         <?php 
        if(empty($gallery_images)){
          ?>  
          <article style="display:block; margin: 0 auto;text-align:center">
          <h1>You have no Picture</h1>
        </article>

      <?php 
        }
          foreach ($gallery_images as $gallery_image) {
            echo $this->element('picture_frame', array('gallery_image'=> $gallery_image));
          }
       ?>


      </ul>

      
    </div>
  </div>
  <?php if(empty($gallery_images)){

    } else{
      ?>
      <button type="submit" class="btn btn-danger"><i class="fa fa-close fa-fw"></i>Delete</button>
    <?php
    }

    ?>
  
</form>

  
   <div class="row">
    <div class="pull-right">
         <?php 
            if(!empty($gallery_images)){
              echo $this->element('paginator');
            }else{
              
            }
          ?>
       </div>
  </div>