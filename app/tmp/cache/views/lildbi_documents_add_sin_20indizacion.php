<!--cachetime:1362382341--><?php
			App::uses('DocumentsController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjY6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6OToiZG9jdW1lbnRzIjtzOjY6ImFjdGlvbiI7czozOiJhZGQiO3M6NToibmFtZWQiO2E6MDp7fXM6NDoicGFzcyI7YToxOntpOjA7czoxNDoiU2luIEluZGl6YWNpb24iO31zOjY6Im1vZGVscyI7YToxOntzOjg6IkRvY3VtZW50IjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjg6IkRvY3VtZW50Ijt9fX1zOjQ6ImRhdGEiO2E6MDp7fXM6NToicXVlcnkiO2E6MDp7fXM6MzoidXJsIjtzOjMwOiJkb2N1bWVudHMvYWRkL1NpbiUyMEluZGl6YWNpb24iO3M6NDoiYmFzZSI7czo3OiIvbGlsZGJpIjtzOjc6IndlYnJvb3QiO3M6ODoiL2xpbGRiaS8iO3M6NDoiaGVyZSI7czozODoiL2xpbGRiaS9kb2N1bWVudHMvYWRkL1NpbiUyMEluZGl6YWNpb24iO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response = new CakeResponse(array("charset" => Configure::read("App.encoding")));
				$controller = new DocumentsController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo0OntzOjQ6Ikh0bWwiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MzA6IlR3aXR0ZXJCb290c3RyYXAuQm9vdHN0cmFwSHRtbCI7fXM6NDoiRm9ybSI7YToxOntzOjk6ImNsYXNzTmFtZSI7czozMDoiVHdpdHRlckJvb3RzdHJhcC5Cb290c3RyYXBGb3JtIjt9czo5OiJQYWdpbmF0b3IiO2E6MTp7czo5OiJjbGFzc05hbWUiO3M6MzU6IlR3aXR0ZXJCb290c3RyYXAuQm9vdHN0cmFwUGFnaW5hdG9yIjt9czo1OiJDYWNoZSI7Tjt9'));
				$controller->layout = $this->layout = 'documentalista_layout';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo1OntzOjEyOiJjdXJyZW50X3VzZXIiO2E6ODp7czoyOiJpZCI7czoxOiI2IjtzOjQ6Im5hbWUiO3M6NToiRmlkZWwiO3M6ODoidXNlcm5hbWUiO3M6ODoiZnNhbnRhbmEiO3M6ODoiaW5pdGlhbHMiO3M6MzoiRlNNIjtzOjExOiJjZW50ZXJfY29kZSI7czo0OiJDVS4xIjtzOjU6ImVtYWlsIjtzOjIzOiJmc2FudGFuYUBpbmZvbWVkLnNsZC5jdSI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTAyLTA5IDIwOjE3OjAzIjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTAzLTAyIDIzOjExOjMzIjt9czo5OiJsb2dnZWRfaW4iO2I6MTtzOjE4OiJjb250ZW50X2Zvcl9sYXlvdXQiO3M6MTM1MzoiDQoNCg0KPHVsIGNsYXNzPSJicmVhZGNydW1iIj48bGk+PGEgaHJlZj0iL2xpbGRiaS9hZG1pbiI+RG9jdW1lbnRvczwvYT4mbmJzcDs8c3BhbiBjbGFzcz0iZGl2aWRlciI+Lzwvc3Bhbj48L2xpPgo8bGkgY2xhc3M9ImFjdGl2ZSI+U2luIEluZGV6YWNpb248L2xpPjwvdWw+PGRpdiBjbGFzcz0iY29udGFpbmVyLWRvY3VtZW50Ij4NCgk8aDM+U2VsZWNjaW9uZSBlbCBUaXBvIGRlIERvY3VtZW50bzwvaDM+DQoJPGhyPg0KCTxkaXYgY2xhc3M9InVzZXJzIGZvcm0iPg0KCQk8Zm9ybSBhY3Rpb249Ii9saWxkYmkvZG9jdW1lbnRzL2FkZCIgY29udHJvbGxlcj0iZG9jdW1lbnRzIiBpZD0iRG9jdW1lbnRBZGRGb3JtIiBtZXRob2Q9InBvc3QiIGFjY2VwdC1jaGFyc2V0PSJ1dGYtOCI+PGRpdiBzdHlsZT0iZGlzcGxheTpub25lOyI+PGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iX21ldGhvZCIgdmFsdWU9IlBPU1QiPjwvZGl2PgkJPGZpZWxkc2V0Pg0KCQkJPGRpdiBjbGFzcz0iY29udHJvbC1ncm91cCI+PGxhYmVsIGZvcj0iRG9jdW1lbnQiIGNsYXNzPSJjb250cm9sLWxhYmVsIj48L2xhYmVsPjxkaXYgY2xhc3M9ImNvbnRyb2xzIj48aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkYXRhW0RvY3VtZW50XSIgdmFsdWU9IiIgaWQ9IkRvY3VtZW50XyI+CjxzZWxlY3QgbmFtZT0iZGF0YVtEb2N1bWVudF1bXSIgc2l6ZT0iOCIgc3R5bGU9IndpZHRoOiAzODVweCIgbXVsdGlwbGU9Im11bHRpcGxlIiBpZD0iRG9jdW1lbnQiPgo8b3B0aW9uIHZhbHVlPSIwIj5TZXJpZXMgTW9ub2dyYWZpY2FzPC9vcHRpb24+CjxvcHRpb24gdmFsdWU9IjEiPk1vbm9ncmFmaWEgUGVydGVuZWNpZW50ZSBhIHVuYSBDb2xlY2Npb248L29wdGlvbj4KPG9wdGlvbiB2YWx1ZT0iMiI+TW9ub2dyYWZpYTwvb3B0aW9uPgo8b3B0aW9uIHZhbHVlPSIzIj5ObyBDb252ZW5jaW9uYWw8L29wdGlvbj4KPG9wdGlvbiB2YWx1ZT0iNCI+U2VyaWUgUGVyaW9kaWNhPC9vcHRpb24+CjxvcHRpb24gdmFsdWU9IjUiPkNvbGVjY2lvbiBkZSBNb25vZ3JhZmlhczwvb3B0aW9uPgo8b3B0aW9uIHZhbHVlPSI2Ij5UZXNpcywgRGlzZXJ0YWNpb24gUGVydGVuZWNpZW50ZSBhIHVuYSBTZXJpZQ0KCQkJCU1vbm9ncmFmaWNhPC9vcHRpb24+CjxvcHRpb24gdmFsdWU9IjciPlRlc2lzLCBEaXNlcnRhY2lvbjwvb3B0aW9uPgo8L3NlbGVjdD48L2Rpdj48L2Rpdj4JCTwvZmllbGRzZXQ+DQoJCTxkaXYgY2xhc3M9ImNvbnRyb2wtZ3JvdXAiPjxidXR0b24gdHlwZT0ic3VibWl0IiBjbGFzcz0iYnRuIGJ0bi1zbWFsbCBidG4tcHJpbWFyeSI+Q29uZmlybTwvYnV0dG9uPjwvZGl2Pgk8L2Rpdj4NCg0KCTwvZGl2Pg0KDQoNCg0KDQoNCg0KIjtzOjE4OiJzY3JpcHRzX2Zvcl9sYXlvdXQiO3M6MDoiIjtzOjE2OiJ0aXRsZV9mb3JfbGF5b3V0IjtzOjk6IkRvY3VtZW50cyI7fQ=='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"><title>LILDBI WEB</title>
<script src="/lildbi/js/jquery.js"></script><script src="/lildbi/js/bootstrap.js"></script><script src="/lildbi/js/codifiers.js"></script><link href="/lildbi/favicon.ico" type="image/x-icon" rel="icon" ><link href="/lildbi/favicon.ico" type="image/x-icon" rel="shortcut icon" ><link rel="stylesheet" href="/lildbi/css/bootstrap.css"><link rel="stylesheet" href="/lildbi/css/custom-styles.css">
</head>

<body>
	<div id="container" class="container" style="margin-top: 60px;">
		<div id="header">		
			<div class="row-fluid">
				<div class="span12">
					<div class="navbar navbar-inverse navbar-fixed-top">
						<div class="navbar-inner">
							<div class="container">
								<a href="/lildbi/" class="brand">LiLDBI Web</a>								<div class="nav-collapse collapse navbar-responsive-collapse">
									<ul class="nav">
										<li class="dropdown"><a data-toggle="dropdown"
											class="dropdown-toggle" href="#">Documentos <b class="caret"></b>
										</a>
											<ul class="dropdown-menu">
												<li class="dropdown-submenu"><a tabindex="-1" href="#">Nuevo</a>
													<ul class="dropdown-menu">
														<li><a href="/lildbi/documents/add/Sin%20Indizacion">Sin Indizacion</a>														</li>
														<li><a href="/lildbi/documents/add/Con%20Indizacion">Con Indizacion</a>														</li>
													</ul>
												</li>
												<li><a href="#">Editar</a></li>
												<li><a href="#">Indexar</a></li>
												<li><a href="#">Certificar</a></li>
											</ul>
										</li>
										<li class="dropdown"><a data-toggle="dropdown"
											class="dropdown-toggle" href="#">Utilitarios <b class="caret"></b>
										</a>
											<ul class="dropdown-menu">
												<li><a href="#">Importar</a></li>
												<li><a href="#">Exportar</a></li>
												<li><a href="#">Reorganizar</a></li>
												<li><a href="#">Reinvertir</a></li>
												<li><a href="#">Desbloquear</a></li>
												<li><a href="#">Reiniciar Base</a></li>
											</ul>
										</li>
										<li><a href="#">Configuraci&oacute;n</a></li>
										<li><a href="#">Cambiar Perfil</a></li>
										<li><a href="/lildbi/users/logout">Salir</a>										</li>
										<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
										<li class="divider-vertical"></li>
									</ul>
									<div class="navbar-form pull-right" style="margin-top: 10px;">
										<div class="span20">
											<p style="color: #ffffff;">
												Documentalista:
												fsantana											</p>
										</div>

									</div>
									</ul>
								</div>
								<!-- /.nav-collapse -->
							</div>
						</div>
						<!-- /navbar-inner -->
					</div>
				</div>
			</div>

		</div>
		<div id="content">


						

			


<ul class="breadcrumb"><li><a href="/lildbi/admin">Documentos</a>&nbsp;<span class="divider">/</span></li>
<li class="active">Sin Indezacion</li></ul><div class="container-document">
	<h3>Seleccione el Tipo de Documento</h3>
	<hr>
	<div class="users form">
		<form action="/lildbi/documents/add" controller="documents" id="DocumentAddForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>		<fieldset>
			<div class="control-group"><label for="Document" class="control-label"></label><div class="controls"><input type="hidden" name="data[Document]" value="" id="Document_">
<select name="data[Document][]" size="8" style="width: 385px" multiple="multiple" id="Document">
<option value="0">Series Monograficas</option>
<option value="1">Monografia Perteneciente a una Coleccion</option>
<option value="2">Monografia</option>
<option value="3">No Convencional</option>
<option value="4">Serie Periodica</option>
<option value="5">Coleccion de Monografias</option>
<option value="6">Tesis, Disertacion Perteneciente a una Serie
				Monografica</option>
<option value="7">Tesis, Disertacion</option>
</select></div></div>		</fieldset>
		<div class="control-group"><button type="submit" class="btn btn-small btn-primary">Confirm</button></div>	</div>

	</div>








		</div>
		<div id="footer">
			<footer>
			<hr>
				<p height="5" align="center">
					<font face="Verdana" size="1">BIREME/OPS/OMS - Centro
						Latinoamericano y del Caribe de Informaci&oacute;n en Ciencias de
						la Salud</font><br> <font face="Verdana" size="1">LILDBI-Web
							Versi&oacute;n 1.8 - 2013 </font>
				
				</p>
			
			</footer>
		</div>
	</div>
</body>
</html>
