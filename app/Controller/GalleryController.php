<?php 
App::uses("AppController", "Controller");

	class GalleryController extends AppController{

		var $uses = array('GalleryEvent');
		public $components = array('Paginator');

		public function beforeFilter() {
			parent::beforeFilter();
        
        	$this->Auth->allow("index", "sendFile");
		}

		public function index(){
			$this->Paginator->settings = array("limit"=> 40, "order"=> 
				array("Post.created"=>"Desc"));
			$images = $this->Paginator->paginate('GalleryEvent');

			$this->set(compact('images'));
		}

		public function sendFile($id){
			/*//echo $id;
			$image = $this->GalleryEvent->findById($id);
			$imagename = $image['GalleryEvent']['event_image'];
			$image = $image['GalleryEvent']['event_name'];
			$imagePath = WWW_ROOT .'img/'.$imagename;
			//echo $imagePath;
			//$file = $this->Attachment->getFile($imagePath);
			$this->response->file($imagePath,array('download' => true, 'name'=>$image));

			$this->autoRender = false;
			///return $this->response;*/

			$file = $this->GalleryEvent->findById($id);
			$fileName = $file['GalleryEvent']['event_image'];
			$imageName = $image['GalleryEvent']['event_name'];
			$name = explode('.', $fileName);
			$this->viewClass = 'Media';


			$params = array(
				'id' => $fileName,
				'name' => $name[0],
				'download' => true,
				'path' =>  'img/'
				);

			$this->set($params);
		}
	}

 ?>