<?php 
App::uses('AppModel','Model');

	class Resource extends AppModel{
		public $validate = array(
			'title' =>array(
				'required'=>array(
					'rule' => array('notEmpty')
					)
				),
			'description' =>array(
				'required'=>array(
					'rule' => array('notEmpty')
					)
				)
			);
	}
 ?>