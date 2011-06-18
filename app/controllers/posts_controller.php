<?php

class PostsController extends AppController {

	var $helper = array('Html', 'Form', 'Paginator');
	//var $name = 'Posts';
	var $paginate = array('limit' => 3, 'order' => array('title' => 'asc'));
	
	
	
	function index() {
		$posts = $this->paginate();
		$this->set('title_for_layout', 'This is my cake!');//who cares?
		
		$this->set('posts', $posts);
			//$this->set('posts', $this->Post->find('all'));
		//$this->layout = ''; //assign whatever layout you might need for this partic. view
		
		
	}
	
	
	function view($id = null){
		$this->set('title_for_layout', 'This is my cake - single view!');
		$this->Post->id = $id;
		$this->set('post', $this->Post->read());
		
	}
	
	function add(){
		if(!empty($this->data)){
			if($this->Post->save($this->data)){//writes records to model(database)
				$this->Session->setFlash('Your post has been saved');
				$this->redirect(array('action' => 'index'));
			}
		}
	
	}
	
	function delete($id) {
		if ($this->Post->delete($id)) {
			$this->Session->setFlash('The post with id: ' . $id . ' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}
	
	function edit($id = null){
		$this->Post->id = $id;
		if(empty($this->data)){
			$this->data= $this->Post->read();
		}
		else{
			if($this->Post->save($this->data)){//writes records to model(database)
				$this->Session->setFlash('Your post has been updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	
}


?>