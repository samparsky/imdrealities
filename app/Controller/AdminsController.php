<?php 
App::uses('AppController', 'Controller');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
App::uses('Admin', 'Model');
	


	class AdminsController extends AppController{
		var $layout = "admin_layout";
		public $components = array('Paginator');
		var $uses = array('Post', 'Admin', 'GalleryEvent', 'Resource');


		

		
		public function index(){
			$this->redirect(array(
				'controller' => 'admins',
				'action' => 'dashboard'
				));
		}

		public function login(){
			$this->layout = 'login_layout';
			

			if($this->request->is('post')){
				if($this->Auth->login()){
					return $this->redirect($this->Auth->redirectUrl());
				}
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}
		public function logout(){
			return $this->redirect($this->Auth->logout());
		}

		public function changePassword(){

			$passwordHasher = new SimplePasswordHasher();

			if($this->request->is(array('post','put'))){
				$password = $this->request->data['Admin']['old_password'];
				$newPassword = $this->request->data['Admin']['password'];
				$confirmPassword = $this->request->data['Admin']['confirm_password'];

				
				$admin = $this->Admin->findByPassword($passwordHasher->hash($password));
				if(!empty($admin)){
					if($newPassword == $confirmPassword){
						//$admin['Admin']['password'] = $newPassword;
						//$this->request->data['Admin']['password'] = $passwordHasher->hash($confirmPassword);
						$this->Admin->id = $admin['Admin']['id'];
						if($this->Admin->save($this->request->data)){
							
							$this->logout();
							$this->Session->setFlash('Password changed');	
						}else{
							$this->redirect(array('action'=>'index'));
						}
					}
					//mismatch in password confimation
					else{
						$this->Session->setFlash('Error, Passwords does not match');
					}
				}
				//admin does not exist
				else{
					$this->Session->setFlash('Error, Admin password does not exist');
				}

			}
		}



		public function dashboard(){

		}


		public function addPost(){
			$this->set('title', 'Add new Post');
			
			if($this->editPost()){
				$this->redirect(array('controller'=> 'admins', 'action'=>'posts'));	
			}
			
		}



		public function editPost($id=null){
			$this->set("title", "Edit Post");
			$this->loadModel("Post");
			//$this->render('add_post');

			//it performs the ass function
			if(is_null($id)){
				if($this->request->is(array('post', 'put'))){

					//checking if the image has been sent
					if(!empty($this->request->data['Post']['upload']['name'])){
					$file = $this->request->data['Post']['upload'];

					//checking the extension
					$ext = substr(strtolower(strchr($file['name'], '.')), 1);
					$arr_ext = array('jpg', 'jpeg', 'gif');
					//only process if the extension is valid
					if(in_array($ext, $arr_ext)){

						move_uploaded_file($file['tmp_name'], WWW_ROOT.'img/'.$file['name']);

						//prepare file name to be stored in the database
						$this->request->data['Post']['post_image'] = $this->request->data['Post']['upload']['name'];
						
					}
					
				}

					//now do the saving
					if($this->Post->save($this->request->data)){
						
					}
					else{
						$this->Session->setFlash('Error occured while saving post');
					}
				}
			}

			//editing code goes here
			if(!is_null($id)){

			}

		}

		public function posts(){
			$this->Paginator->settings = array("limit"=> 3, "order"=> 
				array("Post.created"=>"Desc"), 'conditions'=>array('type'=>Admin::POST_BLOG));
			$data = $this->Paginator->paginate('Post');

			$this->set('posts', $data);
		}

		public function deletePost(){
			$this->posts();

			if($this->request->is('post')){
				$ids = $this->request->data;
				if(is_array($ids) && !empty($ids)){
					foreach($ids as $b){
						$this->Post->delete($b);
					
					}
					$this->redirect(array('action'=>'deletePost'));	
				}
			}
		}

		public function deleteEvent(){
			$this->Paginator->settings = array("limit"=> 3, "order"=> 
				array("Post.created"=>"Desc"), 'conditions'=>array('type'=>Admin::POST_EVENT));
			$data = $this->Paginator->paginate('Post');

			$this->set('posts', $data);
			if($this->request->is('post')){
				$ids = $this->request->data;
				if(is_array($ids) && !empty($ids)){
					foreach($ids as $b){
						$this->Post->delete($b);
					
					}
					$this->redirect(array('action'=>'deleteEvent'));	
				}
			}
		}

		public function addEvent(){
			if($this->editPost()){
				$this->redirect(array('action'=>'addEvent'));
			}
			
		}

		public function calendar(){

		}
		public function addPicture(){

			if($this->request->is(array('post', 'put'))){
				if(!empty($this->request->data['GalleryEvent']['upload']['name'])){
					$file = $this->request->data['GalleryEvent']['upload'];

					//checking the extension
					$ext = substr(strtolower(strchr($file['name'], '.')), 1);
					$arr_ext = array('jpg', 'jpeg', 'gif');
					//only process if the extension is valid
					if(in_array($ext, $arr_ext)){

						move_uploaded_file($file['tmp_name'], WWW_ROOT.'img/'.$file['name']);

						//prepare file name to be stored in the database
						$this->request->data['GalleryEvent']['event_image'] = $this->request->data['GalleryEvent']['upload']['name'];
						
					}
					
				}
				if($this->GalleryEvent->save($this->request->data)){

				}else{
					
					$this->Session->setFlash('Error occured while saving post');
				}

			}
		}

		public function gallery(){
			$this->Paginator->settings = array("limit"=> 3, "order"=> 
				array("GalleryEvent.created"=>"Desc"));
			$data = $this->Paginator->paginate('GalleryEvent');

			$this->set('gallery_images', $data);

			if($this->request->is('post')){
				$ids = $this->request->data;
				if(is_array($ids) && !empty($ids)){
					foreach($ids as $b){
						$this->GalleryEvent->delete($b);
					
					}
					$this->redirect(array('action'=>'gallery'));	
				}
			}
		}

		public function addResource(){

			if($this->request->is(array('post', 'put'))){
				if(!empty($this->request->data['Resource']['upload']['name'])){
					$file = $this->request->data['Resource']['upload'];
					$file2 = $this->request->data['Resource']['image'];

					//not sure of the extension
					//checking the extension
					//$ext = substr(strtolower(strchr($file['name'], '.')), 1);
					//$arr_ext = array('jpg', 'jpeg', 'gif');
					//only process if the extension is valid
					//if(in_array($ext, $arr_ext)){

						move_uploaded_file($file['tmp_name'], WWW_ROOT.'files/'.$file['name']);
						move_uploaded_file($file2['tmp_name'], WWW_ROOT.'img/'.$file2['name']);

						//prepare file name to be stored in the database
						$this->request->data['Resource']['file'] = $this->request->data['Resource']['upload']['name'];
						$this->request->data['Resource']['image'] = $this->request->data['Resource']['image']['name'];
						
					//}
						if($this->Resource->save($this->request->data)){
							
						}
					
				}
			}

		}
		public function deleteResource(){
			$this->Paginator->settings = array("limit"=> 3, "order"=> 
				array("Resource.created"=>"Desc"));
			$data = $this->Paginator->paginate('Resource');

			$this->set('posts', $data);

			if($this->request->is('post')){
				$ids = $this->request->data;
				if(is_array($ids) && !empty($ids)){
					foreach($ids as $b){
						$this->Resource->delete($b);
					
					}
					$this->redirect(array('action'=>'deleteResource'));	
				}
			}
		}

	}

 ?>