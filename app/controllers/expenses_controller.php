<?php

class ExpensesController extends AppController {

	var $helper = array('Html', 'Form', 'Paginator');
	var $paginate = array('limit' => 3, 'order' => array('time_stamp' => 'asc'));
	
	
	
	function index() {
		$expenses = $this->paginate();
		$this->set('title_for_layout', 'List of expenses');
		$this->set('expenses', $expenses);
			
		//$this->layout = ''; //assign whatever layout you might need for this partic. view
		
		
	}
	
	
	function view($id = null){
		$this->set('title_for_layout', 'Single expense record');
		$this->Expense->id = $id;
		$this->set('expense', $this->Expense->read());
		
	}
	
	function add(){
		if(!empty($this->data)){
			if($this->Expense->save($this->data)){//writes records to model(database)
				$this->Session->setFlash('Your expense record has been saved');
				$this->redirect(array('action' => 'index'));
			}
		}
	
	}
	
	function delete($id) {
		if ($this->Expense->delete($id)) {
			$this->Session->setFlash('The expense record with id: ' . $id . ' has been deleted.');
			$this->redirect(array('action' => 'index'));
		}
	}
	
	function edit($id = null){
		$this->Expense->id = $id;
		if(empty($this->data)){
			$this->data= $this->Expense->read();
		}
		else{
			if($this->Expense->save($this->data)){//writes records to model(database)
				$this->Session->setFlash('Your record has been updated.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	
}


?>