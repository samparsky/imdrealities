<?php echo $this->set('title', 'Blog'); ?>
<!-- social bar -->
<div>
<div class="row fixed-social hidden-sm hidden-xs">
<ul class="list-unstyled"><!-- list -->
 <li><a href="https://wwww.facebook.com/imdrealties/" target="_blank"><span><i class="fa fa-facebook icon-fixed fb"></i></span></a></li>
 <li><span><i class="fa fa-twitter icon-fixed tw"></i></span></li>
 <li><span><i class="fa fa-google-plus icon-fixed gplus"></i></span></li>
</ul><!-- /list -->
</div>
</div>
<!-- /social bar -->

<article>
	<div class="row">
		<div class="container">
			 <div class="col-md-8"><!-- col -->
	    		<h1>Our Blog</h1>
	 		</div>
		</div>

	</div>

	<div class="row">
		<div class="container">
			<div class="col-md-7">
				<div>
					<ul class="list-unstyled">
					<!-- use a paginator -->
						<li>
							<?php 
								if(empty($posts)){
									echo "<h3>No Post</h3>";
								}
								else{

									foreach($posts as $post){
										echo $this->element('blog_widget', array('post'=> $post));
									}
								}
							 ?>
						</li>
						<li>

							<div class="pull-right">
								<!-- for paginator -->
								<?php 
						            if(!empty($posts)){
						              echo $this->element('paginator');
						            }else{
						              
						            }
						          ?>	
							</div>
							
						</li>
					</ul>
				</div>
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
                if(empty($posts)){
                  
                }
                else{

                  foreach($posts as $post){
                    echo $this->element('side_post', array('post'=> $post));
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



	
</article>

