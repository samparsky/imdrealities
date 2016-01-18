<?php 
    $id =  $resource['Resource']['id'];
    $var1 = $resource['Resource']['title'];
    $var2 = $resource['Resource']['description'];
    $var3 = $resource['Resource']['image'];
    $var4 = $resource['Resource']['created'];


 ?>



  <div class="col-md-12 col-sm-12 col-xs-12" style="border-bottom:1px solid #EBEBEB; padding-bottom:20px; margin-bottom:20px;"><!-- thumbnail -->

           <!--the image width has to be 250 by 200 so as to enable proper mobile responsiveness -->

           <a href="#" class="pull-left"><?php echo $this->Html->image('/img/'.$var3, array('class'=>'img-resposive')); ?></a>

           <div class="caption">

             <h3 class="text-left"><a href="#">The<font color="#000000"><?php echo $var1; ?></font></a></h3>

             <p class="text-muted"><span><i class="fa fa-calendar"></i></span>&nbsp;&nbsp;<?php echo $this->Time->format('F,Y', $var4); ?></p>

             <p><?php echo $var2; ?></p>

             <a href="<?php echo Router::url(array('controller'=>'resource', 'action'=>'sendFile', $id)); ?>" class="btn btn-default pull-right">Download&nbsp;<span><i class="fa fa-download"></i></span></a>

             

           </div>

         </div><!-- /thumbnail -->
