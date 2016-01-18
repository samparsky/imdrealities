
<style type="text/css">
  #textarea{
    /*background-color: ffff;*/
  }
</style>



<div>
  <?php echo $this->Session->flash(); ?>
</div>

<div class="row"><!-- row -->
    <div class="col-md-12 col-sm-12 col-xs-12"><!-- col -->
      <h3 style="border-bottom:1px solid #585858; padding-bottom:20px;">Create Blog Post</h3>
    </div><!-- /col -->
    <div class="col-md-6 col-sm-12 col-xs-12">
	 <?php
     echo $this->Form->create("Post", array("url"=>array("controller"=>"admins", "action"=>"addPost"), "id"=>"postForm", 'type'=> 'file'));
     ?>

        <div class="form-group">
          <label for="title">Post Title</label>
          <input type="text" name="data[Post][post_title]" id="title" placeholder="e.g. IMd Realities Storms Osun" class="form-control" />
        </div>

        <div class="form-group">
          <label for="summary">Post Summary</label>
          <textarea name="data[Post][post_summary]" id="summary" placeholder="Not more than 60 words" class="form-control" rows="6"></textarea>
        </div>

        <div class="form-group">
          <label for="image">Display Image</label>
          <?php 
            echo $this->Form->input('upload', array('type'=>'file', 'class'=>'form-control'));
       ?>
        </div>

         <div class="form-group">
          <label for="summary">Event Details</label>
          <textarea id="textarea" name="data[Post][post_details]" placeholder="Details" class="form-control" rows="6"></textarea>
        </div>
        

        <div class="form-group">
          <label for="summary">Source</label>
          <textarea id="summary" name="data[Post][post_source]" placeholder="*optional" class="form-control" rows="4"></textarea>
        </div>

        <input type="hidden" value="1" name="data[Post][type]" />
        
        <!-- <input type="submit" class="btn btn-danger btn-block" value="Post" /> -->
      <?php 
      echo $this->Form->submit('Post', array('class'=> array('btn btn-danger btn-block')));
      echo $this->Form->end(); ?>     
    </div>  
</div><!-- /row -->


