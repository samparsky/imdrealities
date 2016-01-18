<?php 
App::uses("AppController", "COntroller");

	class ResourceController extends AppController{

		var $uses = array('Resource');
		public $components = array('Paginator');
		public function beforeFilter() {
			parent::beforeFilter();
        
        	$this->Auth->allow("index", 'sendFile');
		}

		
		public function index(){
			$this->Paginator->settings = array("limit"=> 6, "order"=> 
				array("Resource.created"=>"Desc"));
			$files = $this->Paginator->paginate('Resource');

			$this->set(compact('files'));
		}

		public function sendFile($id){
			/*$file = $this->Resource->findById($id);
			$fileName = $file['Resource']['file'];
			$name = $file['Resource']['title'];
			
			$filePath = WWW_ROOT .'files/'.$fileName;
			//echo $imagePath;
			//$file = $this->Attachment->getFile($imagePath);
			$this->response->file($filePath,array('download' => true, 'name'=>$name));

			$this->autoRender = false;*/
			$file = $this->Resource->findById($id);
			$fileName = $file['Resource']['file'];
			$name = explode('.', $fileName);
			$this->viewClass = 'Media';


			$params = array(
				'id' => $fileName,
				'name' => $name[0],
				'download' => true,
				'path' =>  'files/'
				);

			$this->set($params);

		}
	}

 ?>