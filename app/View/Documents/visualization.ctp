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
		$this->Html->link($documentTypeBreadcrumb, "#", array('id' => 'backBreadcrumb')),
		utf8_encode("Visualización")
));
?>



<div class="container-document">
	<div class="page-header">
		<h3>
			<?php echo $documentType; ?>
		</h3>
	</div>
	<table class="table table-bordered table-hover">
		<thead>
			<tr style="background-color: #8B979D; font-size: 18px;">
				<th class="insetType">Tag</th>
				<th class="insetType">Campo</th>
				<th class="span4 insetType">Valor</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			foreach($data as $key => $value):
			$arrayKey = array_keys($value);
			$field = $arrayKey[0];
			$val = $value[$arrayKey[0]];
			if($val != "" && $val != "null"){
					  $tag = substr($key, 1);
					  strlen($tag) == 1 ? $tag = "0".$tag : null;
					  ?>
			<tr>
				<td><?php echo "[". $tag ."]";?></td>
				<td><?php echo $field;?></td>
				<?php if(!is_array($val)){?>
				<td><strong><?php echo str_replace("\n", "</br>", $val);?> </strong>
				</td>
				<?php }else{?>
				<td><strong> <?php foreach($val as $item):
				echo $item;?> </br> <?php endforeach; ?>
				</strong></td>
				<?php }?>
			</tr>
			<?php } ?>
			<?php endforeach; ?>
		</tbody>
	</table>
	<hr>
	<div class="form-actions">
		<table>
			<tr>
				<td>
					<form accept-charset="utf-8" method="post"
						id="DocumentVisualizationForm"
						action="/lildbi/documents/add/series_monograficas">
						<div style="display: none;">
							<input type="hidden" value="POST" name="_method">
						</div>					
						<input type="hidden" id="DocumentData" value="<?php echo str_replace("\"", "&quot;", serialize($data));?>" name="data[Document][data]">						
						<div class="control-group">
							<button id="backAction" class="btn" type="submit">Atras</button>
						</div>
					</form>
				</td>
				<td><?php 
				echo $this->Form->postButton(__('Confirmar'), array('action' => 'add', serialize($data)), array('class' => 'btn btn-primary'));
				?>
				</td>
			</tr>
		</table>
	</div>
</div>


