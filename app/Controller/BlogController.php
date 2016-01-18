<?php 
App::uses("Appcontroller", "Controller");
App::uses('Admin','Model');

	class BlogController extends Appcontroller{

		var $uses = array('Post','Comment');
		public $components = array('Paginator');

		public function beforeFilter() {
			parent::beforeFilter();
        
        	$this->Auth->allow("index", "view", "comment");
		}

		public function index(){
			$this->Paginator->settings = array("limit"=> 3, "order"=> 
				array("Post.created"=>"Desc"), 'conditions'=>array('type'=>Admin::POST_BLOG));
			$data = $this->Paginator->paginate('Post');

			$this->set('posts', $data);
			/*print_r($data);
			$this->autoRender = false;*/
		}

		public function view($id){
			$post = $this->Post->findById($id);
			$post2 = $this->Post->find('all', array("limit"=>3,"order"=> 
				array("Post.created"=>"Desc"), 'conditions'=>array('type'=>Admin::POST_BLOG)));

			$this->set(compact('post','post2'));

		}

		public function comment($id){
			if($this->request->is(array('post','put'))){
				$this->request->data['Comment']['post_id'] = $id;
				if($this->Comment->save($this->request->data)){
					$this->redirect('/blog/view/'.$id);
				}else{
					echo "Post not sent";
				}
			}

			

		}
			
	}


 ?>

 