<?php 
App::uses("AppController", "COntroller");

	class ContactController extends AppController{

		public function beforeFilter() {
			parent::beforeFilter();
        
        	$this->Auth->allow("index");
		}

		
		public function index(){

		}
	}

 ?>