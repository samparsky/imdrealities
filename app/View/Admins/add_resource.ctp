 <div class="row"><!-- row -->
    <div class="col-md-12 col-sm-12 col-xs-12"><!-- col -->
      <h1>Add Resource</h1>
    </div>
    <div class="col-md-6">
	  
    <?php echo $this->Form->create('Resource', array('type'=>'file','inputDefaults'=>array('label'=>false))); ?>
        <div class="form-group">
          <label for="title">Resource Title</label>
          <input type="text" id="title" placeholder="e.g. The Preneur" class="form-control" name="data[Resource][title]" />
        </div>
        <div class="form-group">
          <label for="summary">Description</label>
          <textarea id="summary" placeholder="Not more than 60 words" class="form-control" rows="6" name="data[Resource][description]"></textarea>
        </div>
        <!-- don't forget document type -->
        <div class="form-group">
          <label for="resource">Select File</label>
          
          <?php echo $this->Form->input('upload', array('type'=>'file','placeholder'=>'Upload File Not more than 500kb','class'=>'form-control')); ?>
        </div>

        <div class="form-group">
          <label for="resource">Cover image:</label>
          <i>image width has to be 250 by 200</i>
          <?php echo $this->Form->input('image', array('type'=>'file','placeholder'=>'Upload a cover image','class'=>'form-control')); ?>
        </div>

        <button type="submit" class="btn btn-danger btn-block">Post</button>
      <?php echo $this->Form->end(); ?>
    </div>
  </div>