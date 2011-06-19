<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class IncomesController extends AppController {

    var $helper = array('Html', 'Form', 'Paginator');
    var $paginate = array('limit' => 3, 'order' => array('time_stamp' => 'asc'));

    function index() {
		$incomes = $this->paginate();
		$this->set('title_for_layout', 'List of incomes');
		$this->set('incomes', $incomes);

		//$this->layout = ''; //assign whatever layout you might need for this partic. view


	}


	function view($id = null){
		$this->set('title_for_layout', 'Single income record');
		$this->Income->id = $id;
		$this->set('income', $this->Income->read());

	}

	function add(){
		if(!empty($this->data)){
			if($this->Income->save($this->data)){//writes records to model(database)
				$this->Session->setFlash('Your income record has been saved');
				$this->redirect(array('action' => 'index'));
			}
		}

	}

	function delete($id) {
		if ($this->Income->delete($id)) {
			$this->Session->setFlash('The income record with id: ' . $id . ' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}

	function edit($id = null){
		$this->Income->id = $id;
		if(empty($this->data)){
			$this->data= $this->Income->read();
		}
		else{
			if($this->Income->save($this->data)){//writes records to model(database)
				$this->Session->setFlash('Your record has been updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}



}
?>
