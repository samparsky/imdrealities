<?php echo $this->set('title', 'Resource'); ?>
<section>

 <div class="row"><!-- row -->

   <div class="container-fluid"><!-- container -->

   

   <div class="col-md-8"><!-- main col --><!-- do not edit this -->

   

     <h1 class="text-center" style="margin-bottom:40px;">Online Resources</h1>

  

      <?php 
                if(empty($files)){
                  echo "<h3>No Post</h3>";
                }
                else{

                  foreach($files as $file){
                    echo $this->element('resource_widget', array('resource'=> $file));
                  }
                }
               ?>

     
     <div class="pull-right">
                <!-- for paginator -->
                <?php 
                        if(!empty($files)){
                          echo $this->element('paginator');
                        }else{
                          
                        }
                      ?>  
              </div>
    

    

    

    

    

   

    </div><!-- /main col8 -->

    <div class="col-offset-md-1 col-md-3" style="margin-top:40px;"><!-- col4 -->

      <div><!-- archives -->

      <h4>Search Archives</h4>

       <form>

         <div class="form-group input-group"><!-- form -group -->

           <input type="text" class="form-control" placeholder="Search..." />

           <span class="input-group-btn">

             <button type="button"  class="btn btn-danger">Search</button>

           </span>

         </div><!-- /form-group -->

       </form>

      </div><!-- /archives -->

      

      <div style="margin-bottom:40px; margin-top:20px;">

    <h4>Recent Blog Posts</h4>

    

  

    <div><!-- post 1- -->

      <img src="img/avatar.png" class="img-responsive pull-left" />

      <div style="margin-left:80px;">

      <a href="#"><h4>Twitter week</h4></a>

      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum....</p> 

      </div>

    </div>

    

    <div class="clearfix"></div>

    <div><!-- post 2- -->

      <img src="img/avatar.png" class="img-responsive pull-left" />

      <div style="margin-left:80px;">

      <a href="#"><h4>iMD Twitter Conference</h4></a>

      <p class="text-muted">iMD twitter conference is upcoming again...</p> 

      </div>

    </div>

    

    <div class="clearfix"></div>

    <div><!-- post 3- -->

      <img src="img/avatar.png" class="img-responsive pull-left" />

      <div style="margin-left:80px;">

      <a href="#"><h4>iMD Twitter Conference</h4></a>

      <p class="text-muted">iMD twitter conference is upcoming again...</p> 

      </div>

    </div>

    

      

    </div><!-- /col4 -->

 </div><!-- /container -->

 </div><!-- /row --> 

</section>

    







<!-- this is the php script to inlude the footer -->
