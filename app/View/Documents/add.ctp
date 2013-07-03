<?php 

if (isset($typeDocument)){


	if ($typeDocument == 'series_monograficas') {
		echo $this->element('series_monograficas');
	}

	if ($typeDocument == 'monografia_pert_coleccion') {
		echo $this->element('monografia_pert_coleccion');
	}

}
?>



<?php if (!isset($typeDocument)) {	

	$temp;
	if ($this->Session->read('index')) {
		$temp = 'Con Indezacion';
	}
	else {
		$temp = 'Sin Indezacion';
	}

	echo $this->Html->breadcrumb(array(
			$this->Html->link('Documentos', array('controller' => 'admin','action' => 'index')),
			$temp
	));

	echo $this->Session->flash();
	?>
<div class="container-document">
	<h3>Seleccione el Tipo de Documento</h3>
	<hr>
	<div class="users form">
		<fieldset>
			<?php
			$typeDocuments = array('series_monograficas' => 'Series Monograficas', 'monografia_pert_coleccion' => 'Monografia Perteneciente a una Coleccion', 'monografia' => 'Monografia', 'no_convencional' => 'No Convencional', 'serie_periodica' => 'Serie Periodica', 'coleccion_monografias' => 'Coleccion de Monografias', 'tesis_disertacion_pert_serie_monografica' => 'Tesis, Disertacion Perteneciente a una Serie
					Monografica', 'tesis_disertacion' => 'Tesis, Disertacion');
			echo $this->Form->input('', array('options' => $typeDocuments, 'size' => 8, 'style' =>'width: 385px' ));
			?>
		</fieldset>
		<hr>
		<div class="form-actions">
			<table>
				<tr>
					<td><a id="confirm-type-document" class="btn btn-primary"><?php echo __('Confirmar'); ?>
					</a>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<?php } ?>
</div>






