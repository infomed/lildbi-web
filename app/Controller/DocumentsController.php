<?php
App::uses('CakeTime', 'Utility');

//Controladora de la BD de CouchDB
class DocumentsController extends AppController {
	//public $helpers = array('Html','Form');
	public $layout = 'documentalista_layout';
	public $name = 'Documents'; //Hace referencia al nombre de la BD de CouchDB

	public function isAuthorized($user) {
		/**
		 * Solo los documentalistas pueden entrar al controlador de documents
		 */
		if ($this->Session->read('userRol') == 'Documentalista') {
			return true;
		}
		return false;
	}

	function index() { //FUNCIONA el buscar 
		
		//Esto es una prueba

		//All Documents
		$db = $this->Document->curlGet($this->Auth->user('username').'/_all_docs');
	}

	function view($id = null) { //FUNCIONA el leer un documento
		$db = $this->Document->curlGet($this->Auth->user('username').'/72fc1e696025b11d23240372bf00c1b8');
	}

	public function add() { //FUNCIONA el adicionar un documento (Hay que especificar un squema en el modelo)

		if ($this->request->is('post')) {

			if(isset($this->request->data['Document'])) //Boton Atras de la pagina de Visualizacion
			{
				$this->set('typeDocument', substr($this->referer(), strrpos ( $this->referer() , 'add' ) + 4, - 14));
				$this->set('backValues', unserialize($this->request->data['Document']['data']));
			}else{
				
				if(!in_array($this->Auth->user('username'), $this->Document->curlGet('_all_dbs')))  //Si no existe la BD se crea
				{
					$this->Document->curlPut($this->Auth->user('username')); //Crea la BD del usuario
				}
				//$db = $this->Document->curlGet($this->Auth->user('username').'/_all_docs');
				$dataArray = unserialize($this->request->params['pass'][0]);
				$dataFormatArray = array();
				$fieldsRepetitive = array("v3", "v8", "v16", "v17", "v18", "v38", "v40", "v85", "v83");				

				foreach ($dataArray as $key => $value) {
					$arrayKey = array_keys($value);
					if($value[$arrayKey[0]] != "" && $value[$arrayKey[0]] != "null"){
						
						if(in_array($key, $fieldsRepetitive)) //Si es un field repetitivo
						{
							$repeatValue = str_replace("\n", "#PH#", $value[$arrayKey[0]]);
							
							if(is_array($value[$arrayKey[0]])){ //Si es un combobox multiselect
								if(sizeof($value[$arrayKey[0]]) == 1){
								  $dataFormatArray[$key] = $value[$arrayKey[0]][0];
								} 
								else{
								  $dataFormatArray[$key] = $value[$arrayKey[0]];
								}
							}else{ //Si es un textarea repetitivo	
								if(strpos($repeatValue, '#PH#') !== false){
									$dataFormatArray[$key] = explode('#PH#', $repeatValue);
								}
								else{
									$dataFormatArray[$key] = $value[$arrayKey[0]];
								}
							}
						}else{
							if($key == 'v91'){ //Fecha de Creación del Registro
								$interval1 = $this->Session->read('initialTimeCreation');
								$interval2 = CakeTime::format("H:i:s", time());
								$value[$arrayKey[0]] = CakeTime::format("Ymd", time())."^i".$this->Session->read('initialTimeCreation')."^f".CakeTime::format("H:i:s", time())."^t".$this->_subtractHours($interval1, $interval2);
							}
								
							$dataFormatArray[$key] = $value[$arrayKey[0]];
						}
					}
				}

				$this->Document->curlPost($this->Auth->user('username'), $dataFormatArray, false);
			}
		}
		elseif (isset($this->params['pass'][0])){
			if ($this->params['pass'][0] == 'sin_indizacion') {
				$this->Session->write('index', FALSE);
			}
			elseif ($this->params['pass'][0] == 'con_indizacion')
			{
				$this->Session->write('index', TRUE);
			}
			else							
			{
				$this->set('typeDocument', $this->params['pass'][0]);
				$this->Session->write('initialTimeCreation', CakeTime::format('H:i:s', time()));
			}
		}

	} 

	function edit($id = null) {  //FUNCIONA el editar

		$this->Document->curlPut($this->Auth->user('username').'/72fc1e696025b11d23240372bf0092d9', array('_rev' => '5-c7a4d9ba3af06d0378d9ec5f726273df', 'v2' => 'caballo', 'v4' => 'Pendenciero'));
	}

	function delete($id) {  //FUNCIONA el eliminar un documento

		$this->Document->curlDelete($this->Auth->user('username').'/72fc1e696025b11d23240372bf007722?rev=1-8dd70dd717a947f33086e84aa3f88515');

		//Elimina la BD
		//$this->Document->curlDelete($this->Auth->user('username'));
	}


	function visualization(){
		if ($this->request->is('post')) {

			$posCharacter = strrpos ( $this->referer() , '/' );
			$urlParam = substr($this->referer(), $posCharacter + 1);

			if($urlParam == 'series_monograficas'){
				$documentTypeBreadcrumb = utf8_encode("Series Monográficas");
				$documentType = utf8_encode("Serie Monográfica");
			}

			/*
			 *  (ESTOS NO SE GUARDAN EN COUCHDB) Tambien guardarlos en CouchDB luego veo si me sirve o no
			 *  
			    [899] 		Versión del Software				LILDBI-WEB 1.7  
			    [91] 		Fecha de Creación del Registro		20130401^i14:57:21^f15:06:16^t0:8:55				
				[93] 		Fecha de ultima modificación		20130401 
				
				
				(ESTOS SI)
				
				[01] 		Código del Centro					CU1.1 
				[92] 		Documentalista						BHA
			 * 
			 * 
			 * */
			
			
			
			
			
			/*	EJEMPLOS PARA TRABAJAR CON TIME en CAKEPHP 
			 * 
			 * 	called via TimeHelper
					echo $this->Time->format('Y-m-d H:i:s');
					// The Unix Epoch as 1970-01-01 00:00:00
					
					echo $this->Time->format('F jS, Y h:i A', '2011-08-22 11:53:00');
					// August 22nd, 2011 11:53 AM
					
					echo $this->Time->format('r', '+2 days', true);
					// 2 days from now formatted as Sun, 13 Nov 2011 03:36:10 +0800
					
					// called as CakeTime
					App::uses('CakeTime', 'Utility');
					echo CakeTime::format('Y-m-d H:i:s');
					echo CakeTime::format('F jS, Y h:i A', '2011-08-22 11:53:00');
					echo CakeTime::format('r', '+2 days', true);
			 */
			
			
			
			
			//Hash::check($this->params['data']['Document'], 'v1.Código del Centro');
			//Hash::insert($this->params['data']['Document'], 'v1', array(utf8_encode('Código del Centro') => 'CU1.1'));			
			
			$user = $this->Auth->user();
			$arrayData = array();
			$arrayData = array_merge(array('v92' => array('Documentalista' => $user['initials'])), $this->params['data']['Document']);
			$arrayData = array_merge(array('v93' => array(utf8_encode('Fecha de ultima modificación') => CakeTime::format('Ymd', time()))), $arrayData);
			$arrayData = array_merge(array('v91' => array(utf8_encode('Fecha de Creación del Registro') => CakeTime::format('Ymd', time()))), $arrayData);
			$arrayData = array_merge(array('v899' => array(utf8_encode('Versión del Software') => 'LILDBI-WEB 1.8')), $arrayData);
			$arrayData = array_merge(array('v1' => array(utf8_encode('Código del Centro') => 'CU1.1')), $arrayData);
			$this->set('data', $arrayData);
			$this->set('urlParam', $urlParam);
			$this->set('documentTypeBreadcrumb', $documentTypeBreadcrumb);
			$this->set('documentType', $documentType);
		}
	}




	//Metodos del Editor

	function indexCertificates() { //FUNCIONA el buscar

		//$conditions = array('Document.id' =>'6b4a9cc97cc6521f7edf2a55b3005496'); //Analogia en Solr: Filter Query (fq)
		//$result = $this->Document->find('first', compact('conditions'));
		$result = $this->Document->find('all');
		$vedfsdfsr = 'fdfsd';
	}

	function viewCertificate($id = null) { //FUNCIONA el leer un documento
		$this->Document->id = '6b4a9cc97cc6521f7edf2a55b30024e4';
		$result =$this->Document->read();
		//$this->set('Document', $this->Document->read());
	}

	public function addCertificate(){
		$data = array(

				'title' => 'Esto esuna prueba',
				'description' => 'jajajaja'
		);

		$saveResult = $this->Document->save($data);

		// Id
		$this->Document->id;

		// Revision
		$this->Document->rev;
	}

	public function addAllCertificates() { //FUNCIONA el adicionar varios documentos

		$data[0]['Document'] = array(
				'title' => 'ccccccccccccccccuu',
				'description' => 'cucucucuu'
		);

		$data[1]['Document'] = array(
				'title' => 'hhhhhhhhhhhhhhhhhhhhhh',
				'description' => 'holaaaaaaaaaaaaaaaaaaa'
		);

		$saveResult = $this->Document->saveAll($data);

		$stopAqui = 'fdfsd';
	}

	function editCertificate($id = null) {  //FUNCIONA el editar

		/*** Tienen que ponerse todos los campos del documento, aunque solo se quiera actualizar un campo ***/
		$data = array(
				'id' => '64580c1a3ba5eb7b8271287e4c005db2', //Se tiene que pasar el id (debe existir)
				'title' => 'My sixt Document',
				'description' => 'dfgdsfdsfdsft'
		);

		$saveResult = $this->Document->save($data);

		$stopAqui = 'fdfsd';
	}

	function deleteCertificate($id) {  //FUNCIONA el eliminar un documento
		$this->Document->id = '64580c1a3ba5eb7b8271287e4c001039';
		$this->Document->rev = '1-27876c1306c1b43ac974182e8725bb32'; //opcional (es para cuando hay varias revisiones)
		$this->Document->delete();

		$stopAqui = 'fdfsd';

	}
	
	
	function _subtractHours($interval1, $interval2){
		$horai=substr($interval1,0,2);
		$mini=substr($interval1,3,2);
		$segi=substr($interval1,6,2);
		
		$horaf=substr($interval2,0,2);
		$minf=substr($interval2,3,2);
		$segf=substr($interval2,6,2);
		
		$ini=((($horai*60)*60)+($mini*60)+$segi);
		$fin=((($horaf*60)*60)+($minf*60)+$segf);
		
		$dif=$fin-$ini;
		
		$difh=floor($dif/3600);
		$difm=floor(($dif-($difh*3600))/60);
		$difs=$dif-($difm*60)-($difh*3600);
		return CakeTime::format("H:i:s", mktime($difh,$difm,$difs));
	}

}
?>