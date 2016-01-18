<div class="row"><!-- row -->
    <div class="col-md-12 col-sm-12 col-xs-12"><!-- col -->
    <form>
      <div class="form-group">
        <div class="input-group">
          <input type="text" placeholder="Search Blog Posts..." class="form-control" />
          <a class="btn btn-danger input-group-addon"><span><i class="fa fa-search"></i></span></a>
        </div>
      </div>
    </form>
    </div>
      <ul class="list-unstyled ">
        

      <?php 
        if(empty($posts)){
          ?>  
          <article style="display:block; margin: 0 auto;text-align:center">
          <h1>You have no Post</h1>
        </article>

      <?php 
        }
          foreach ($posts as $post) {
            echo $this->element('blog', array('post'=> $post));
          }
       ?>

       </ul>


  </div>

  <div class="row">
    <div class="pull-right">
         <?php 
            if(!empty($posts)){
              echo $this->element('paginator');
            }else{
              
            }
          ?>
       </div>
  </div>