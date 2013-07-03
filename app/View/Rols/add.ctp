<?php echo $this->Html->breadcrumb(array(
		$this->Html->link('Home', array('controller' => 'admin','action' => 'index')),
		$this->Html->link('Usuarios', array('controller' => 'users','action' => 'index')),
		$this->Html->link('Rols', array('controller' => 'rols','action' => 'index')),
		'New Rol',
	)); ?>
<div class="container-document">
	<div class="row-fluid">
		<div class="span2">
			<div class="actions">
				<h3>
					<?php echo __('Actions'); ?>
				</h3>
				<ul>

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
						<?php echo __('Add Rol'); ?>
					</legend>
					<?php
					echo $this->Form->input('name');
					echo $this->Form->input('User');
					?>
				</fieldset>
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>
</div>
