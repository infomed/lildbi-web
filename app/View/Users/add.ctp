<?php echo $this->Html->breadcrumb(array(
		$this->Html->link('Home', array('controller' => 'admin','action' => 'index')),
		$this->Html->link('Usuarios', array('controller' => 'users','action' => 'index')),
		'New User',
	)); ?>
<div class="container-document">
	<div class="row-fluid">
		<div class="span2">
			<div class="actions">
				<h3>
					<?php echo __('Actions'); ?>
				</h3>
				<ul>

					<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?>
					</li>
					<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?>
					</li>
					<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?>
					</li>
				</ul>
			</div>
		</div>
		<div class="span10">
			<div class="users form">
				<?php echo $this->Form->create('User'); ?>
				<fieldset>
					<legend>
						<?php echo __('Add User'); ?>
					</legend>
					<?php
					echo $this->Form->input('name');
					echo $this->Form->input('username');
					echo $this->Form->input('initials');
					echo $this->Form->input('center_code');
					echo $this->Form->input('email');
					echo $this->Form->input('password');
					echo $this->Form->input('password_confirmation', array('type'=>'password'));
					echo $this->Form->input('Rol');
					?>
				</fieldset>
				<?php echo $this->Form->end(__('Submit')); ?>
			</div>
		</div>
	</div>

</div>
