  <div>
  <?php echo $this->Session->flash(); ?>
</div>

<div class="row"><!-- row -->
    <div class="col-md-12 col-sm-12 col-xs-12"><!-- col -->
      <h1>Add Event</h1>
    </div><!-- /col -->
    <div class="col-md-6 col-sm-12 col-xs-12">
   <?php
     echo $this->Form->create("Post", array("url"=>array("controller"=>"admins", "action"=>"addPost"), "id"=>"postForm", 'type'=> 'file', 'inputDefaults'=>array('input'=>false)));
     ?>

        <div class="form-group">
          <label for="title">Event Title</label>
          <input type="text" name="data[Post][post_title]" id="title" placeholder="e.g. The Preneur" class="form-control" />
        </div>

        <div class="form-group">
          <label for="summary">Event Summary</label>
          <textarea name="data[Post][post_summary]" id="summary" placeholder="Not more than 60 words" class="form-control" rows="6"></textarea>
        </div>

        <div class="form-group">
          <label for="image">Event Image</label>
          <?php 
            echo $this->Form->input('upload', array('type'=>'file','class'=>'form-control'));
       ?>
        </div>

        <div class="form-group">
          <label for="summary">Event Details</label>
          <textarea id="summary" name="data[Post][post_details]" placeholder="Details" class="form-control" rows="6"></textarea>
        </div>

        <div class="form-group">
          <label>Event Date</label>
          <input type="date" name="data[Post][event_date]" class="form-control" placeholder="Date" />
        </div>

         <div class="form-group">
          <label>Starting Time</label>
          <input type="time" name="data[Post][event_strtime]" class="form-control" placeholder="Time" />
        </div>
        <div class="form-group">
          <label>Ending Time</label>
          <input type="time" name="data[Post][event_endtime]" class="form-control" placeholder="Time" />
        </div>
       
        <input type="hidden" value="2" name="data[Post][type]" />
        
        <!-- <input type="submit" class="btn btn-danger btn-block" value="Post" /> -->
      <?php 
      echo $this->Form->submit('Post', array('class'=> array('btn btn-danger btn-block')));
      echo $this->Form->end(); ?>     
    </div>  
</div><!-- /row -->

