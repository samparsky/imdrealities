
<div class="row">

	<div class="col-md-3 col-sm-6 col-xs-6" >
<h3 style="border-bottom:1px solid #585858; padding-bottom:20px;">Change Password</h3>
		<div class="label" style="text-color:Red">
  			<?php echo $this->Session->flash(); ?>
  		</div>
		<!-- <form method="post" action="<?php echo Router::url(array('controller'=>'admins', 'action'=>'changePassword')); ?>"> -->

		<?php echo $this->Form->create('Admin', array('inputDefaults'=>array('label'=>false))); ?>
			<div class="form-group">
			<label for="fPass">Password</label>
			<!-- <input id="fPass" type="password" class="form-control" name="data[Admin][old_password]" /> -->
					<?php echo $this->Form->input('old_password', array('class'=>'form-control', 'id'=>'fPass', "format" => array("error", "between", "input"), 'type'=>'password')); ?>
			</div>

			<div class="form-group">
			<label for="newPass">New Password</label>
<!-- 			<input id="newPass" type="password" class="form-control" name="data[Admin][password]" /> -->
			<?php echo $this->Form->input('password', array('class'=>'form-control', 'id'=>'newPass', "format" => array("error", "between", "input"))); ?>
			</div>

			<div class="form-group">
			<label for="conPass">Confirm New Password</label>
			<!-- <input id="conPass" type="password" class="form-control" name="data[Admin][confirm_password]" /> -->
					<?php echo $this->Form->input('confirm_password', array('class'=>'form-control', 'id'=>'conPass',"format" => array("error", "between", "input"), 'type'=>'password')); ?>
			</div>

			<input type="submit" class="btn btn-danger" />
		<!-- </form> -->
		<?php echo $this->Form->end(); ?>
	</div>
</div>