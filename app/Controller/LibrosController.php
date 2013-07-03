<?php
class LibrosController extends AppController {
	//public $helpers = array('Html','Form');
	public $uses = array('Post');
	
	
	function index() {
		//$this->redirect(array('controller' => 'posts', 'action' => 'index'));
		$this->set('posts', $this->Post->find('all'));		
		
		//$this->redirect(array('controller' => 'posts', 'action' => 'view', 1));
		
			//$this->render('/pages/fidel');
		$this->redirect(array('action' => 'welcome', 'Fidel'));		
	}
	
	function welcome($param) {
		echo "Bienvenido". $param;
		$this->autoRender = false;
	}

	
}
?>