<?php 
App::uses('AppModel', 'Model');
	
	class Post extends AppModel{

		public $validate = array(
			'post_title' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Provide a title for the Post'
					)
				),

			'post_summary' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Provide a summary for the Post'
					)
				),

			'post_details' => array(
				'required' => array(
					'rule' => array('notEmpty'),
					'message' => 'Post Details missing'
					)
				)


			);

		
		var $hasMany = array(
			'Comment' => array(
				'className' => 'Comment'
				)
			);
	}

 ?>
