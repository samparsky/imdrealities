<?php 
App::uses("AppController", "Controller");
App::uses('Admin','Model');
	class EventsController extends AppController{

		var $uses = array('Post','Comment');
		public $components = array('Paginator');

		public function beforeFilter() {
			parent::beforeFilter();
        
        	$this->Auth->allow("index", "view");
		}

		
		public function index(){
			$this->Paginator->settings = array("limit"=> 2, "order"=> 
				array("Post.created"=>"Desc"), 'conditions'=>array('type'=>Admin::POST_EVENT));
			$events = $this->Paginator->paginate('Post');

			$upcoming = $this->Post->find('all', array('order'=>
				array('Post.created'=>'Desc', "Post.event_strtime"=>"Asc"),'conditions'=>array('type'=>Admin::POST_EVENT)));

			//$this->set('events', $data);
			$this->set(compact('events', 'upcoming'));
			/*print_r($data);
			$this->autoRender = false;*/
		
		}

		public function view($id){
			$event = $this->Post->findById($id);
			$upcoming = $this->Post->find('all', array('order'=>
				array('Post.created'=>'Desc', "Post.event_strtime"=>"Asc"),'conditions'=>array('type'=>Admin::POST_EVENT)));
			$this->set(compact('event','upcoming'));
		}
	}

 ?>