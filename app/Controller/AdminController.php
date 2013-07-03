<?php

class AdminController extends AppController {
	//public $helpers = array('Html','Form');
	public $name = 'Admin';	

	function index() {
		
		$currentUser = $this->Auth->user();
		
		//$this->Session->read('Auth.User.name')
		
		if ($this->Session->read('userRol') == 'Administrador')
		    $this->layout = 'admin_layout';
		
		if ($this->Session->read('userRol') == 'Documentalista')
			$this->layout = 'documentalista_layout';
		
		if ($this->Session->read('userRol') == 'Editor')
			$this->layout = 'editor_layout';
		
	}
	
	function documentalista() { //FUNCIONA el buscar
	
		$this->layout = 'documentalista_layout';
		
	}

	

}
?>