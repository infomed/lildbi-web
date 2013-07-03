<?php echo $this->Html->breadcrumb(array(
		$this->Html->link('Home', array('controller' => 'admin','action' => 'index')),
		$this->Html->link('Usuarios', array('controller' => 'users','action' => 'index')),
		$this->Html->link('Rols', array('controller' => 'rols','action' => 'index')),
		'Editar',
	)); ?>
<div id="separator" style="margin-top: 40px;"></div>
<div class="container-document">
	<div class="row-fluid">
		<div class="span2">
			<div class="actions">
				<h3>
					<?php echo __('Actions'); ?>
				</h3>
				<ul>

					<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Rol.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Rol.id'))); ?>
					</li>
					<li><?php echo $this->Html->link(__('List Rols'), array('action' => 'index')); ?>
					</li>
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?>
					</li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?>
					</li>
				</ul>
			</div>
		</div>
		<div class="span10">
			<div class="rols form">
				<?php echo $this->Form->create('Rol'); ?>
				<fieldset>
					<legend>
						<?php echo __('Edit Rol'); ?>
					</legend>
					<?php
					echo $this->Form->input('id');
					echo $this->Form->input('name');
					echo $this->Form->input('User');
	?>
				</fieldset>
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>
