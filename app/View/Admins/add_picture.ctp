<div class="row"><!-- row -->
    <div class="col-md-12 col-sm-12 col-xs-12"><!-- col -->
    <h3>Upload to Gallery</h3>
    <p class="text-muted">Supports only pictures</p>
    <div>
      <?php echo $this->Session->flash(); ?>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12">
      <?php echo $this->Form->create('GalleryEvent', array('inputDefaults'=>array('label'=>false),'type'=>'file')); ?>
        <div class="form-group">
          <label for="event">Event</label>
          <input type="text" id="event" class="form-control" placeholder="Events name" name="data[GalleryEvent][event_name]" />
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="date" id="date" class="form-control" placeholder="Date" name="data[GalleryEvent][event_date]" />
        </div>
        <div class="form-group">
        <?php echo $this->Form->input('upload', array('type'=>'file', 'class'=>'form-control')); ?>
        </div>
        <button type="submit" class="btn btn-danger" class="form-control">Upload</button>
      <?php echo $this->Form->end(); ?>
    </div> 
</div><!-- /col -->
</div><!-- /row -->