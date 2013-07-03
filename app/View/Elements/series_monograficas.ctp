<?php
$temp;
if ($this->Session->read('index')) {
	$temp = 'Con Indezacion';
}
else {
	$temp = 'Sin Indezacion';
}

echo $this->Html->breadcrumb(array(
		$this->Html->link('Documentos', array('controller' => 'admin','action' => 'index')),
		$this->Html->link($temp, array('controller' => 'documents','action' => 'add')),
		utf8_encode("Series Monográficas")
));
?>

<?php if(isset($backValues)){ //Si vengo desde la pagina de Visualizacion, recivo los datos en "$backValues"
$escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
$replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
$backEscapedValues = str_replace($escapers, $replacements, json_encode($backValues));
?>
<script> 
	$(document).ready( 
		function() {	
					
			var arrayData = $.parseJSON('<?php echo $backEscapedValues; ?>');
			for (var key2 in arrayData["v9"])
			{
				$.post('/lildbi/Codifiers/getById', {
					value : arrayData["v9"][key2]
				}, showOtherCombos); //Llama a la funcion "showOtherCombos" del "codifiers.js"
			}
			
			$(document).one('ajaxComplete', function() { //La funcion "one" es para que se ejecute solo una vez cuando se carga la pagina								
				$.each(arrayData, function(key1, value) {						
					for (var key2 in value) {
						if(arrayData[key1][key2] != ""){					
							var element = $("[name = 'data[Document][" + key1 + "][" + key2 + "]']");
							if(element.is('input')){
								openAccordion(element);
								if(element.attr('type') == 'hidden'){							
									$.each(arrayData[key1][key2], function(key3, value2) {								
										element.next().children().find("option[value='" + arrayData[key1][key2][key3] + "']").attr('selected', 'selected');				
									});
								}
								else{
									element.attr('value', arrayData[key1][key2]);
								}												
							}
							if(element.is('textarea')){
								openAccordion(element);
								element.attr('value', arrayData[key1][key2]);
							}
							if(element.is('select')){								
								openAccordion(element);
								element.find("option[value='" + arrayData[key1][key2] + "']").attr('selected', 'selected');														
							}
						}					
					}	
				});
			});	
			
			function openAccordion(element){
				if(element.closest('div .accordion').length > 0){	
					element.closest('div .accordion').children().next().collapse('show');
					element.closest('div .accordion').children().children().attr('checked', true);
				}
			}
	});
</script>
<?php } ?>

<div class="container-document">
	<div class="page-header">
		<h3>Serie Monogr&aacute;fica</h3>
	</div>

	<form accept-charset="utf-8" method="post" id="DocumentAddForm"
		action="/lildbi/documents/add/series_monograficas/visualization">
		<div style="display: none;">
			<input type="hidden" value="POST" name="_method">
		</div>
		<table class="table table-bordered table-hover">
			<thead>
				<tr style="background-color: #8B979D; font-size: 18px;">
					<th class="insetType">Campo</th>
					<th class="insetType">Descripci&oacute;n Bibliogr&aacute;fica</th>
					<th class="span2 insetType">Tag</th>
				</tr>
			</thead>
			<tbody>
				<tr class="info">
					<td style="align: center" colspan="12">
						<div class="span5" style="margin-left: 0px;"></div> <b>Informaciones
							Generales</b> <a id="next" href="#" class="pull-right"><?php  echo $this->Html->image('next.gif'); ?>
					</a> <a id="bott" href="#" class="pull-right"><?php  echo $this->Html->image('bott.gif'); ?>
					</a>
					</td>
				</tr>
				<tr>
					<td>N&uacute;mero de Identificaci&oacute;n</td>
					<td>
						<div class='alert alert-error lil' style="display: none;">
							<button type='button' class='close'>&times;</button>
							<p>
								<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
							</p>
						</div> <?php echo $this->Form->input('', array(				
								'type' => 'text',
								'class' => 'span6',
								'value'=> '',
								'name'  => 'data[Document][v2]['. utf8_encode('Número de Identificación') .']',
								'required' => 'true'
				)); ?>
					</td>
					<td class="mandatory">[02]</td>
				</tr>
				<tr>
					<td>Localizaci&oacute;n del Documento
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php
								echo $this->element('assistant',array("nameField" => "Localización del Documento", "numberField" => 3));
								?>
								<a id='cleanField' class="btn" style="padding: 6px 5px 7px;"
									href="#"><i class="icon-remove"></i> </a>
							</div>
						</div>
					</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'disabled' => true,
							'value'=> '',
							'name'  => 'data[Document][v3]['. utf8_encode('Localización del Documento') .']'

					)); ?></td>
					<td>[03]</td>
				</tr>
				<tr>
					<td>Base de Datos</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'value'=> 'LILACS',
							'name'  => 'data[Document][v4][Base de Datos]'
					)); ?></td>
					<td>[04]</td>
				</tr>
				<tr>
					<td>N&uacute;mero Registro</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'value'=> '',
							'name'  => 'data[Document][v7]['. utf8_encode('Número Registro') .']'
					)); ?></td>
					<td>[07]</td>
				</tr>
				<tr>
					<td>Direcci&oacute;n Electr&oacute;nica
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php
								echo $this->element('assistant',array("nameField" => "Dirección Electrónica", "numberField" => 8));
								?>
								<a id='cleanField' class="btn" style="padding: 6px 5px 7px;"
									href="#"><i class="icon-remove"></i> </a>
							</div>
						</div>
					</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'disabled' => true,
							'value'=> '',
							'name'  => 'data[Document][v8]['. utf8_encode('Dirección Electrónica') .']'
					)); ?></td>
					<td>[08]</td>
				</tr>
				<tr>
					<td>Tipo de Registro</td>
					<td>
						<div class='alert alert-error lil' style="display: none;">
							<button type='button' class='close'>&times;</button>
							<p>
								<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
							</p>
						</div> <?php 
						$typeRegister = $this->requestAction('/Codifiers/getById/tipo_registro');
						$resultArray = Hash::combine($typeRegister, 'Codifier.tipo_registro.{s}', 'Codifier.tipo_registro.{s}');
						echo $this->Form->input(' ', array('options' => $resultArray, 'class' => 'span6', 'value'=> '',
							'name'  => 'data[Document][v9][Tipo de Registro]', 'id' => 'tipo_registro', 'required' => 'true'));
					?>
					</td>
					<td class="mandatory">[09]</td>
				</tr>
				<tr class="info">
					<td style="align: center" colspan="12"><div class="span"></div>
						<div class="span5"></div> <b>Nivel Serie</b><a id="next" href="#"
						class="pull-right"><?php  echo $this->Html->image('next.gif'); ?>
					</a><a id="prev" href="#" class="pull-right"><?php  echo $this->Html->image('prev.gif'); ?>
					</a><a id="bott" href="#" class="pull-right"><?php  echo $this->Html->image('bott.gif'); ?>
					</a><a id="top" href="#" class="pull-right"><?php  echo $this->Html->image('top.gif'); ?>
					</a></td>
				</tr>
				<tr>
					<td>T&iacute;tulo</td>
					<td><div class='alert alert-error lil' style="display: none;">
							<button type='button' class='close'>&times;</button>
							<p>
								<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
							</p>
						</div> <?php echo $this->Form->textarea('', array(				
								'type' => 'text',
								'class' => 'span6',
								'rows' => 4,
								'value'=> '',
								'name'  => 'data[Document][v30]['. utf8_encode('Título') .']',
								'required' => 'true'
						)); ?>
					</td>
					<td class="mandatory">[30]</td>
				</tr>
				<tr>
					<td>Volumen</td>
					<td><?php echo $this->Form->input('', array(				
							'type' => 'text',
							'class' => 'span6',
							'value'=> '',
							'name'  => 'data[Document][v31][Volumen]'
					)); ?></td>
					<td>[31]</td>
				</tr>
				<tr>
					<td>N&uacute;mero del Fasc&iacute;culo</td>
					<td><?php echo $this->Form->input('', array(				
							'type' => 'text',
							'class' => 'span6',
							'value'=> '',
							'name'  => 'data[Document][v32]['. utf8_encode('Número del Fascículo') .']'
					)); ?></td>
					<td>[32]</td>
				</tr>
				<tr>
					<td>ISSN</td>
					<td><?php echo $this->Form->input('', array(				
							'type' => 'text',
							'class' => 'span6',
							'value'=> '',
							'name'  => 'data[Document][v35][ISSN]'
					)); ?></td>
					<td>[35]</td>
				</tr>
				<tr class="info">
					<td colspan="12" style="border-left-width: 0px; padding-left: 6px;"><div
							class="span5"></div> <b>Nivel Monogr&aacute;fico</b><a id="next"
						href="#" class="pull-right"><?php  echo $this->Html->image('next.gif'); ?>
					</a><a id="prev" href="#" class="pull-right"><?php  echo $this->Html->image('prev.gif'); ?>
					</a><a id="bott" href="#" class="pull-right"><?php  echo $this->Html->image('bott.gif'); ?>
					</a><a id="top" href="#" class="pull-right"><?php  echo $this->Html->image('top.gif'); ?>
					</a>
					</td>
				</tr>
				<tr>
					<td>Autor Personal
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php
								echo $this->element('assistant',array("nameField" => "Autor Personal", "numberField" => 16));
								?>
								<a id='cleanField' class="btn" style="padding: 6px 5px 7px;"
									href="#"><i class="icon-remove"></i> </a>
							</div>
						</div>
					</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'disabled' => true,
							'value'=> '',
							'name'  => 'data[Document][v16][Autor Personal]'
					)); ?></td>
					<td>[16]</td>
				</tr>
				<tr>
					<td>Autor Institucional
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php
								echo $this->element('assistant',array("nameField" => "Autor Institucional", "numberField" => 17));
								?>
								<a id='cleanField' class="btn" style="padding: 6px 5px 7px;"
									href="#"><i class="icon-remove"></i> </a>
							</div>
						</div>
					</td>
					<td>
						<div class='alert alert-error lil' style="display: none;">
							<button type='button' class='close'>&times;</button>
							<p>
								<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
							</p>
						</div> <?php echo $this->Form->textarea('', array(				
								'type' => 'text',
								'class' => 'span6',
								'rows' => 4,
								'disabled' => true,
								'value'=> '',
								'name'  => 'data[Document][v17][Autor Institucional]',
								'required' => 'true'
				)); ?>
					</td>
					<td class="mandatory">[17]</td>
				</tr>
				<tr>
					<td>T&iacute;tulo
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php
								echo $this->element('assistant',array("nameField" => "Título", "numberField" => 18));
								?>
								<a id='cleanField' class="btn" style="padding: 6px 5px 7px;"
									href="#"><i class="icon-remove"></i> </a>
							</div>
						</div>
					</td>
					<td>
						<div class='alert alert-error lil' style="display: none;">
							<button type='button' class='close'>&times;</button>
							<p>
								<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
							</p>
						</div> <?php echo $this->Form->textarea('', array(				
								'type' => 'text',
								'class' => 'span6',
								'rows' => 4,
								'disabled' => true,
								'value'=> '',
								'name'  => 'data[Document][v18]['. utf8_encode('Título') .']',
								'required' => 'true'
				)); ?>
					</td>
					<td class="mandatory">[18]</td>
				</tr>
				<tr>
					<td>T&iacute;tulo Traducido al Ingl&eacute;s</td>
					<td><?php echo $this->Form->input('', array(				
							'type' => 'text',
							'class' => 'span6',
							'value'=> '',
							'name'  => 'data[Document][v19]['. utf8_encode('Título Traducido al Inglés') .']'
					)); ?></td>
					<td>[19]</td>
				</tr>
				<tr>
					<td>P&aacute;ginas</td>
					<td><div class='alert alert-error lil' style="display: none;">
							<button type='button' class='close'>&times;</button>
							<p>
								<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
							</p>
						</div> <?php echo $this->Form->input('', array(				
								'type' => 'text',
								'class' => 'span6',
								'value'=> '',
								'name'  => 'data[Document][v20]['. utf8_encode('Páginas') .']',
								'required' => 'true'
						)); ?>
					</td>
					<td class="mandatory">[20]</td>
				</tr>
				<tr class="info">
					<td style="border-left-width: 0px; padding-left: 30px;"
						colspan="12"><div class="span4"></div> <b>Informaciones
							Complementarias</b><a id="next" href="#" class="pull-right"><?php  echo $this->Html->image('next.gif'); ?>
					</a><a id="prev" href="#" class="pull-right"><?php  echo $this->Html->image('prev.gif'); ?>
					</a><a id="bott" href="#" class="pull-right"><?php  echo $this->Html->image('bott.gif'); ?>
					</a><a id="top" href="#" class="pull-right"><?php  echo $this->Html->image('top.gif'); ?>
					</a></td>
				</tr>
				<tr>
					<td>Informaci&oacute;n Descriptiva
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php
								echo $this->element('assistant',array("nameField" => "Información Descriptiva", "numberField" => 38));
								?>
								<a id='cleanField' class="btn" style="padding: 6px 5px 7px;"
									href="#"><i class="icon-remove"></i> </a>
							</div>
						</div>
					</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'disabled' => true,
							'value'=> '',
							'name'  => 'data[Document][v38]['. utf8_encode('Información Descriptiva') .']'
					)); ?></td>
					<td>[38]</td>
				</tr>
				<tr>
					<td>Idioma del Texto</td>
					<td><div class='alert alert-error lil' style="display: none;">
							<button type='button' class='close'>&times;</button>
							<p>
								<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
							</p>
						</div> <?php
						$lenguaje = $this->requestAction('/Codifiers/getById/lenguaje');
						echo $this->Form->input('', array('options' => $lenguaje['Codifier']['lenguaje'], 'size' => 4, 'multiple' => 'multiple', 'style' =>'width: 385px', 'required' => 'true', 'value'=> '', 'name'  => 'data[Document][v40][Idioma del Texto]' ));
						?>
					</td>
					<td class="mandatory">[40]</td>
				</tr>
				<tr class="info">
					<td style="align: center" colspan="12"><div class="span5"></div> <b>Otras
							Notas</b><a id="next" href="#" class="pull-right"><?php  echo $this->Html->image('next.gif'); ?>
					</a><a id="prev" href="#" class="pull-right"><?php  echo $this->Html->image('prev.gif'); ?>
					</a><a id="bott" href="#" class="pull-right"><?php  echo $this->Html->image('bott.gif'); ?>
					</a><a id="top" href="#" class="pull-right"><?php  echo $this->Html->image('top.gif'); ?>
					</a></td>
				</tr>
				<tr>
					<td>Nota General</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'value'=> '',
							'name'  => 'data[Document][v500][Nota General]'
					)); ?></td>
					<td>[500]</td>
				</tr>
				<tr>
					<td>Nota Formateada de Contenido</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'value'=> '',
							'name'  => 'data[Document][v505][Nota Formateada de Contenido]'
					)); ?></td>
					<td>[505]</td>
				</tr>
				<tr>
					<td>Nota de Disponibilidad de Forma F&iacute;sica Adicional</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'value'=> '',
							'name'  => 'data[Document][v530]['. utf8_encode('Nota de Disponibilidad de Forma Física Adicional') .']'
					)); ?></td>
					<td>[530]</td>
				</tr>
				<tr>
					<td>Nota de Reproducci&oacute;n</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'value'=> '',
							'name'  => 'data[Document][v533]['. utf8_encode('Nota de Reproducción') .']'
					)); ?></td>
					<td>[533]</td>
				</tr>
				<tr>
					<td>Nota de versi&oacute;n original</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'value'=> '',
							'name'  => 'data[Document][v534]['. utf8_encode('Nota de versión original') .']'
					)); ?></td>
					<td>[534]</td>
				</tr>
				<tr>
					<td>Nota Interna</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'value'=> '',
							'name'  => 'data[Document][v61][Nota Interna]'
					)); ?></td>
					<td>[61]</td>
				</tr>
				<tr class="info">
					<td colspan="12" style="padding-left: 20px;"><div class="span5"></div>
						<b>Imprenta</b><a id="next" href="#" class="pull-right"><?php  echo $this->Html->image('next.gif'); ?>
					</a><a id="prev" href="#" class="pull-right"><?php  echo $this->Html->image('prev.gif'); ?>
					</a><a id="bott" href="#" class="pull-right"><?php  echo $this->Html->image('bott.gif'); ?>
					</a><a id="top" href="#" class="pull-right"><?php  echo $this->Html->image('top.gif'); ?>
					</a></td>
				</tr>
				<tr>
					<td>Editora</td>
					<td><div class='alert alert-error lil' style="display: none;">
							<button type='button' class='close'>&times;</button>
							<p>
								<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
							</p>
						</div> <?php echo $this->Form->textarea('', array(				
								'type' => 'text',
								'class' => 'span6',
								'rows' => 4,
								'value'=> '',
								'name'  => 'data[Document][v62][Editora]',
								'required' => 'true'
						)); ?>
					</td>
					<td class="mandatory">[62]</td>
				</tr>
				<tr>
					<td>Edici&oacute;n</td>
					<td><?php echo $this->Form->input('', array(				
							'type' => 'text',
							'class' => 'span6',
							'value'=> '',
							'name'  => 'data[Document][v63]['. utf8_encode('Edición') .']'
					)); ?></td>
					<td>[63]</td>
				</tr>
				<tr>
					<td>Fecha de Publicaci&oacute;n</td>
					<td><div class='alert alert-error lil' style="display: none;">
							<button type='button' class='close'>&times;</button>
							<p>
								<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
							</p>
						</div> <?php echo $this->Form->input('', array(				
								'type' => 'text',
								'class' => 'span6',
								'value'=> '',
								'name'  => 'data[Document][v64]['. utf8_encode('Fecha de Publicación') .']',
								'required' => 'true'
						)); ?>
					</td>
					<td class="mandatory">[64]</td>
				</tr>
				<tr>
					<td>Fecha Normalizada</td>
					<td><div class='alert alert-error lil' style="display: none;">
							<button type='button' class='close'>&times;</button>
							<p>
								<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
							</p>
						</div> <?php echo $this->Form->input('', array(				
								'type' => 'text',
								'class' => 'span6',
								'value'=> '',
								'name'  => 'data[Document][v65][Fecha Normalizada]',
								'required' => 'true'
						)); ?>
					</td>
					<td class="mandatory">[65]</td>
				</tr>
				<tr>
					<td>Ciudad de Publicaci&oacute;n</td>
					<td><div class='alert alert-error lil' style="display: none;">
							<button type='button' class='close'>&times;</button>
							<p>
								<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
							</p>
						</div> <?php echo $this->Form->input('', array(				
								'type' => 'text',
								'class' => 'span6',
								'value'=> '',
								'name'  => 'data[Document][v66]['. utf8_encode('Ciudad de Publicación') .']',
								'required' => 'true'
						)); ?>
					</td>
					<td class="mandatory">[66]</td>
				</tr>
				<tr>
					<td>Pa&iacute;s de Publicaci&oacute;n</td>
					<td><div class='alert alert-error lil' style="display: none;">
							<button type='button' class='close'>&times;</button>
							<p>
								<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
							</p>
						</div> <?php
						$paises = $this->requestAction('/Codifiers/getById/paisesll');
						$firstKey = str_replace('-','',Hash::get($paises, 'Codifier.paisesll.------'));
						$secondKey = str_replace('-','',Hash::get($paises, 'Codifier.paisesll.-----'));
						$resultArray = array();
						$tempKey;
							
						foreach ($paises['Codifier']['paisesll'] as $key => $value) {
						if($key == '------'){
							$tempKey = $firstKey;
						};
						if($key == '-----'){
							$tempKey = $secondKey;
						};
						if($key == ''){
						    $resultArray = Hash::insert($resultArray, $key, $value);
						}elseif($key != '------' && $key != '-----'){
							$resultArray = Hash::insert($resultArray, $tempKey.".".$key, $value);
						}
					}

					echo $this->Form->input('', array('options' => $resultArray, 'size' => 4, 'style' =>'width: 385px','value'=> '', 'required' => 'true',	'name'  => 'data[Document][v67]['. utf8_encode('País de Publicación') .']' ));
					?></td>
					<td class="mandatory">[67]</td>
				</tr>
				<tr>
					<td>S&iacute;mbolo</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'value'=> '',
							'name'  => 'data[Document][v68]['. utf8_encode('Símbolo') .']'
					)); ?></td>
					<td>[68]</td>
				</tr>
				<tr>
					<td>ISBN</td>
					<td><?php echo $this->Form->input('', array(				
							'type' => 'text',
							'class' => 'span6',
							'value'=> '',
							'name'  => 'data[Document][v69][ISBN]'
					)); ?></td>
					<td>[69]</td>
				</tr>
				<tr class="info">
					<td colspan="12" style="padding-left: 5px;"><div class="span5"></div>
						<b>Datos de Contenido</b><a id="next" href="#" class="pull-right"><?php  echo $this->Html->image('next.gif'); ?>
					</a><a id="prev" href="#" class="pull-right"><?php  echo $this->Html->image('prev.gif'); ?>
					</a><a id="bott" href="#" class="pull-right"><?php  echo $this->Html->image('bott.gif'); ?>
					</a><a id="top" href="#" class="pull-right"><?php  echo $this->Html->image('top.gif'); ?>
					</a></td>
				</tr>
				<tr>
					<td>Palabras-llave del Autor
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php
								echo $this->element('assistant',array("nameField" => "Palabras-llave del Autor", "numberField" => 85));
								?>
								<a id='cleanField' class="btn" style="padding: 6px 5px 7px;"
									href="#"><i class="icon-remove"></i> </a>
							</div>
						</div>
					</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 4,
							'disabled' => true,
							'value'=> '',
							'name'  => 'data[Document][v85][Palabras-llave del Autor]'
					)); ?></td>
					<td>[85]</td>
				</tr>
				<tr class="info">
					<td colspan="12" style="padding-left: 25px;"><div class="span5"></div>
						<b>Resumen</b><a id="next" href="#" class="pull-right"><?php  echo $this->Html->image('next.gif'); ?>
					</a><a id="prev" href="#" class="pull-right"><?php  echo $this->Html->image('prev.gif'); ?>
					</a><a id="bott" href="#" class="pull-right"><?php  echo $this->Html->image('bott.gif'); ?>
					</a><a id="top" href="#" class="pull-right"><?php  echo $this->Html->image('top.gif'); ?>
					</a></td>
				</tr>
				<tr>
					<td>Resumen
						<div class="btn-toolbar">
							<div class="btn-group">
								<?php
								echo $this->element('assistant',array("nameField" => "Resumen", "numberField" => 83));
								?>
								<a id='cleanField' class="btn" style="padding: 6px 5px 7px;"
									href="#"><i class="icon-remove"></i> </a>
							</div>
						</div>
					</td>
					<td><?php echo $this->Form->textarea('', array(				
							'type' => 'text',
							'class' => 'span6',
							'rows' => 19,
							'disabled' => 'true',
							'value'=> '',
							'name'  => 'data[Document][v83][Resumen]'
					)); ?>
					</td>
					<td>[83]</td>
				</tr>
				<tr id="complementos" class="info">
					<td colspan="12" style="align: center"><div class="span5"></div> <b>Complementos</b><a
						id="prev" href="#" class="pull-right"><?php  echo $this->Html->image('prev.gif'); ?>
					</a><a id="top" href="#" class="pull-right"><?php  echo $this->Html->image('top.gif'); ?>
					</a>
					</td>
				</tr>
				<tr>
					<td colspan="12">
						<div id="accordion1" class="accordion">
							<label class="checkbox"> <input id="eventNotes" type="checkbox">
								Notas de Evento
							</label>
							<div id="collapseOne" class="accordion-body collapse">
								<div class="accordion-inner">
									<table class="table table-bordered">
										<tr>
											<td>Instituci&oacute;n Patrocinadora</td>
											<td><?php echo $this->Form->textarea('', array(				
													'type' => 'text',
													'class' => 'span6',
													'rows' => 4,
													'value'=> '',
													'name'  => 'data[Document][v52]['. utf8_encode('Institución Patrocinadora') .']'
											)); ?>
											</td>
											<td class='span1'>[52]</td>
										</tr>
										<tr>
											<td>Nombre</td>
											<td><div class='alert alert-error lil' style="display: none;">
													<button type='button' class='close'>&times;</button>
													<p>
														<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
													</p>
												</div> <?php echo $this->Form->textarea('', array(				
														'type' => 'text',
														'class' => 'span6',
														'rows' => 4,
														'value'=> '',
														'name'  => 'data[Document][v53][Nombre]'
												)); ?></td>
											<td class="mandatory">[53]</td>
										</tr>
										<tr>
											<td>Fecha</td>
											<td><div class='alert alert-error lil' style="display: none;">
													<button type='button' class='close'>&times;</button>
													<p>
														<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
													</p>
												</div> <?php echo $this->Form->input('', array(				
														'type' => 'text',
														'class' => 'span6',
														'value'=> '',
														'name'  => 'data[Document][v54][Fecha]'
												)); ?></td>
											<td class="mandatory">[54]</td>
										</tr>
										<tr>
											<td>Fecha Normalizada</td>
											<td><?php echo $this->Form->input('', array(				
													'type' => 'text',
													'class' => 'span6',
													'value'=> '',
													'name'  => 'data[Document][v55][Fecha Normalizada]'
											)); ?></td>
											<td>[55]</td>
										</tr>
										<tr>
											<td>Ciudad</td>
											<td><div class='alert alert-error lil' style="display: none;">
													<button type='button' class='close'>&times;</button>
													<p>
														<?php echo __('Este campo es obligatorio, por favor debe llenarlo'); ?>
													</p>
												</div> <?php echo $this->Form->input('', array(				
														'type' => 'text',
														'class' => 'span6',
														'value'=> '',
														'name'  => 'data[Document][v56][Ciudad]'
												)); ?>
											</td>
											<td class="mandatory">[56]</td>
										</tr>
										<tr>
											<td>Pa&iacute;s</td>
											<td><?php
											$paises = $this->requestAction('/Codifiers/getById/pais');
											echo $this->Form->input('', array('options' => $paises['Codifier']['pais'], 'class' => 'span6', 'value'=> '', 'name'  => 'data[Document][v57]['. utf8_encode('País') .']' ));
											?>
											</td>
											<td>[57]</td>
										</tr>
									</table>
								</div>
							</div>

						</div>
					</td>
				</tr>
				<tr>
					<td colspan="12">
						<div id="accordion2" class="accordion">
							<label class="checkbox"> <input id="proyectNotes" type="checkbox">
								Notas de Proyecto
							</label>
							<div id="collapseTwo" class="accordion-body collapse">
								<div class="accordion-inner">
									<table class="table table-bordered">
										<tr>
											<td>Instituci&oacute;n Patrocinadora</td>
											<td><?php echo $this->Form->textarea('', array(				
													'type' => 'text',
													'class' => 'span6',
													'rows' => 4,
													'value'=> '',
													'name'  => 'data[Document][v58][Notas de Proyecto]'
											)); ?>
											</td>
											<td class='span1'>[58]</td>
										</tr>
										<tr>
											<td>Nombre</td>
											<td><?php echo $this->Form->input('', array(				
													'type' => 'text',
													'class' => 'span6',
													'value'=> '',
													'name'  => 'data[Document][v59][Nombre]'
											)); ?></td>
											<td>[59]</td>
										</tr>
										<tr>
											<td>N&uacute;mero</td>
											<td><?php echo $this->Form->input('', array(				
													'type' => 'text',
													'class' => 'span6',
													'value'=> '',
													'name'  => 'data[Document][v60]['. utf8_encode('Número') .']'
											)); ?></td>
											<td>[60]</td>
										</tr>
									</table>
								</div>
							</div>

						</div>
					</td>
				</tr>

			</tbody>
		</table>
		<hr>
		<div class="form-actions">
			<table>
				<tr>
					<td>
						<div id="documentCancelButton">
							<?php echo $this->Form->button(__('Cancelar'), array('type' => 'button'));?>
						</div>
					</td>
					<td>
						<div id="documentPreviewButton">
							<?php echo $this->Form->postButton(__('Vista Previa'), array('action' => 'add'), array('class' => 'btn btn-primary', "style" => "margin-bottom: 10px;")); ?>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</form>

</div>


