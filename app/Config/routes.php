<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/documents/add/series_monograficas', array('controller' => 'documents', 'action' => 'add', 'series_monograficas'));
	Router::connect('/documents/add/monografia_pert_coleccion', array('controller' => 'documents', 'action' => 'add', 'monografia_pert_coleccion'));
	Router::connect('/documents/add/monografia', array('controller' => 'documents', 'action' => 'add', 'monografia'));
	Router::connect('/documents/add/no_convencional', array('controller' => 'documents', 'action' => 'add', 'no_convencional'));
	Router::connect('/documents/add/serie_periodica', array('controller' => 'documents', 'action' => 'add', 'serie_periodica'));
	Router::connect('/documents/add/coleccion_monografias', array('controller' => 'documents', 'action' => 'add', 'coleccion_monografias'));
	Router::connect('/documents/add/tesis_disertacion_pert_serie_monografica', array('controller' => 'documents', 'action' => 'add', 'tesis_disertacion_pert_serie_monografica'));
	Router::connect('/documents/add/tesis_disertacion', array('controller' => 'documents', 'action' => 'add', 'tesis_disertacion'));
	
	Router::connect('/documents/add/series_monograficas/visualization', array('controller' => 'documents', 'action' => 'visualization', 'series_monograficas'));
	Router::connect('/documents/add/monografia_pert_coleccion/visualization', array('controller' => 'documents', 'action' => 'visualization', 'monografia_pert_coleccion'));
	Router::connect('/documents/add/monografia/visualization', array('controller' => 'documents', 'action' => 'visualization', 'monografia'));
	Router::connect('/documents/add/no_convencional/visualization', array('controller' => 'documents', 'action' => 'visualization', 'no_convencional'));
	Router::connect('/documents/add/serie_periodica/visualization', array('controller' => 'documents', 'action' => 'visualization', 'serie_periodica'));
	Router::connect('/documents/add/coleccion_monografias/visualization', array('controller' => 'documents', 'action' => 'visualization', 'coleccion_monografias'));
	Router::connect('/documents/add/tesis_disertacion_pert_serie_monografica/visualization', array('controller' => 'documents', 'action' => 'visualization', 'tesis_disertacion_pert_serie_monografica'));
	Router::connect('/documents/add/tesis_disertacion/visualization', array('controller' => 'documents', 'action' => 'visualization', 'tesis_disertacion'));
	//Router::connect('/', array('controller' => 'posts', 'action' => 'index'));
/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/cake/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes.  See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
