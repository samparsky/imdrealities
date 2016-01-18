
<?php 
  $post_id = $post['Post']['id'];
  $post_title = $post['Post']['post_title'];
  $post_image = $post['Post']['post_image'];
  $created = $post['Post']['created'];
  $post_detail = $post['Post']['post_details'];
  $post_source = $post['Post']['post_source'];

  echo $this->set('title', $post_title);
 ?>


<div class="row">
	<div class="container">
		
		<div class="col-md-7">

          <a href="#"><h3><?php echo $post_title; ?></h3></a>       
        
      <ul class="list-unstyled list-inline">
       
        <li>
          <time><span><i class="fa fa-calendar"></i></span>&nbsp;<?php echo $this->Time->format('F jS, Y', $created); ?></time>      
        </li>
        <li>
           <?php echo $this->Html->image($post_image, array('class'=>'img-responsive')); ?>  
        </li>

        <li>
          <div>
        <?php echo $post_detail; ?>
      </div>    
        </li>

        <li>
        <h3>Comments</h3>
          <?php 
            foreach($post['Comment'] as $comments){
                echo $this->element('comment_widget', array('comments'=>$comments));
            }
            ?>
        </li>

        <h4>Drop your Comment</h4>
        <form action="<?php echo Router::url(array('controller'=>'blog', 'action'=>'comment', $post_id)); ?>" method="post">

           <div class="form-group">
            <input type="name" name="data[Comment][name]" placeholder="Name" class="form-control" style="width:50%" />  
          </div>

          <div class="form-group">
            <input type="email" name="data[Comment][email]" placeholder="Email" class="form-control" style="width:50%" />  
          </div>
          
          <div class="form-group">
            <textarea name="data[Comment][comment]" class="form-control" rows="10" style="width:70%"></textarea>
          </div>

          <div class="form-group">
            <input type="submit" value="Comment"  class="btn btn-danger" />
          </div>
        </form>

      </ul>

    

    

		

      
		</div>

			<aside><!--aside starts -->  
  <div class="col-md-4  col-md-offset-1">
  <!-- search section -->
  <div class="well well-sm">
    <h4>Search</h4>
	   <div class="form-group input-group">
                <input type="text" class="form-control _input" placeholder="Subscribe" data-toggle="tooltip" title="Search for Courses" data-placement="bottom" data-animation="true"  style="box-shadow: 0 0 5px #9D9D9D inset;"/>
              <span class="input-group-btn"><!--for merging the button with input field-->
                <button type="submit" class="btn btn-default _input"><i class="fa fa-search"></i></button>
              </span>
        </div>
  </div>
  <!--- end search -->
  <!-- Blog Categories -->
 <!--  <div class="well well-sm">
    <h4  class="text-center">Popular Categories</h4>
     <ul class="list-unstyled">
       <li><a href="#">iMD Conference</a></li>
       <li><a href="#"> twitter conference</a></li>
     </ul>
  </div> -->
  <!-- end blog Categories -->
  <div style="margin-bottom:40px;">
    <h4>Recent Posts</h4>
    
     <?php 
                if(empty($post2)){
                  
                }
                else{

                  foreach($post2 as $posta){
                    echo $this->element('side_post', array('posta'=> $post));
                  }
                }
               ?>
    
  </div><!--recent posts end -->
  <!-- archives -->
 <!--  <div class="well well-sm">
    <h4  class="text-center">Archives</h4>
     <ul class=" list-group">
       <li class="list-group-item"><a href="#">May 2012</a></li>
       <li class="list-group-item"><a href="#">April 2012</a></li>
       <li class="list-group-item"><a href="#">March 2012</a></li>
       <li class="list-group-item"><a href="#">February 2012</a></li>
       <li class="list-group-item"><a href="#">January 2012</a></li>
     </ul>
  </div> -->
  </div>
  
</div><!-- container -->
</div><!--row -->



</aside><!--aside ends -->

	</div>
</div>