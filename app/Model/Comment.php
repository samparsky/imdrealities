<?php 
App::uses('AppModel','Model');
	class Comment extends AppModel{
		
		var $primaryKey = "id";

		//association
		public $belongsTo = array(
			'Post' => array(
				'className' => 'Post',
				'foreignKey' => 'post_id'
				)
			);

		public $validate = array(
			'email' => array(
				'rule' => 'notEmpty'
			),
			'comment' => array(
				'rule' => 'notEmpty'
			),
			'name' => array(
				'rule' => 'notEmpty'
			)

		);

		
	}

 ?>