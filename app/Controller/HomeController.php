<?php 
App::uses("AppController", "Controller");
App::uses('Admin','Model');
	class HomeController extends AppController{

		var $uses = array('Post', 'Comment','Admin');

		public function beforeFilter() {
			parent::beforeFilter();
        
        	$this->Auth->allow("index");
		}


		public function index(){
			//fetch blog posts
			//fetch events

			$posts = $this->Post->find('all', array('conditions'=>array('type'=>Admin::POST_BLOG)));
			$this->set(compact('posts'));
			/*print_r($posts);
			$this->autoRender=false;*/
		}
	}

 ?>