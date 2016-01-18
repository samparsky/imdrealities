<?php 
App::uses('AppModel','Model');

	class GalleryEvent extends AppModel{
		public $validate = array(
			'event_name' =>array(
				'required'=>array(
					'rule' => array('notEmpty')
					)
				),
			'event_date' =>array(
				'required'=>array(
					'rule' => array('notEmpty')
					)
				)
			);
	}
 ?>