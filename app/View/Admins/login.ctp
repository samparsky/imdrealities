

<div class="row" style="margin-top:10%;">
  <div class="container">
  
  <?php echo $this->Html->image('imdlogo.png', array('class'=> 'img-responsive', 'alt'=>'Logo', 'title'=>'Imd realities')); ?>
  <p class="text-muted text-center">Please enter your login details below</p>
  <div class="label">
  <?php echo $this->Session->flash(); ?>
  </div>
  <br/>
    <div class="col-md-offset-4 col-md-4">
    <?php echo $this->Form->create('Admin', array('inputDefaults'=>array('label'=>false))); ?>
      <div class="form-group">
        
        <?php echo $this->Form->input('username', array('class'=>'form-control', 'placeholder'=>'username')); ?>
      </div>
      <div class="form-group">
       
       <?php echo $this->Form->input('password', array('class'=>'form-control', 'placeholder'=>'password')); ?>
      </div>
      <input type="submit" class="btn btn-danger" value="Login" />
    <?php echo $this->Form->end(); ?>
    </div>
  </div>
</div>

<style type="text/css">
  img{
    margin-left: 45%;
  }
</style>