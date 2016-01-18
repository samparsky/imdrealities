<?php 
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
	
	class Admin extends AppModel{

		const POST_BLOG = 1;
		const POST_EVENT = 2;

		public $validate = array(
			'username' => array(
				'required'=> array(
					'rule' => array('notEmpty'),
					'message' => 'Provide your username'
					)
				),
			'password' => array(
				'required'=> array(
					'rule' => array('notEmpty'),
					'message' => 'Provide your password'
					)
				),
			);




		public function beforeSave($options = array()) {
			if (isset($this->data[$this->alias]['password'])) {
				$passwordHasher = new SimplePasswordHasher();
				$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
				);
			}
			return true;
		}
	}

 ?>