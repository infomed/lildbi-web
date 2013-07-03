<?php echo $this->Html->breadcrumb(array(
		$this->Html->link('Home', array('controller' => 'admin','action' => 'index')),
		$this->Html->link('Usuarios', array('controller' => 'users','action' => 'index')),
		'View',
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
					<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?>
					</li>
					<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
					</li>
					<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?>
					</li>
					<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?>
					</li>
					<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?>
					</li>
					<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?>
					</li>
				</ul>
			</div>
		</div>
		<div class="span10">
			<div class="users view">
				<h2>
					<?php  echo __('User'); ?>
				</h2>
				<dl class="dl-horizontal">
					<dt>
						<?php echo __('Id'); ?>
					</dt>
					<dd>
						<?php echo h($user['User']['id']); ?>
						&nbsp;
					</dd>
					<dt>
						<?php echo __('Name'); ?>
					</dt>
					<dd>
						<?php echo h($user['User']['name']); ?>
						&nbsp;
					</dd>
					<dt>
						<?php echo __('Username'); ?>
					</dt>
					<dd>
						<?php echo h($user['User']['username']); ?>
						&nbsp;
					</dd>
					<dt>
						<?php echo __('Initials'); ?>
					</dt>
					<dd>
						<?php echo h($user['User']['initials']); ?>
						&nbsp;
					</dd>
					<dt>
						<?php echo __('Center Code'); ?>
					</dt>
					<dd>
						<?php echo h($user['User']['center_code']); ?>
						&nbsp;
					</dd>
					<dt>
						<?php echo __('Email'); ?>
					</dt>
					<dd>
						<?php echo h($user['User']['email']); ?>
						&nbsp;
					</dd>
					<dt>
						<?php echo __('Created'); ?>
					</dt>
					<dd>
						<?php echo h($user['User']['created']); ?>
						&nbsp;
					</dd>
					<dt>
						<?php echo __('Modified'); ?>
					</dt>
					<dd>
						<?php echo h($user['User']['modified']); ?>
						&nbsp;
					</dd>
				</dl>
			</div>
		</div>
		<div class="span12">
			<div class="related">
				<h3>
					<?php echo __('Related Rols'); ?>
				</h3>
				<?php if (!empty($user['Rol'])): ?>
				<table cellpadding="0" cellspacing="0"
					class="table table-striped table-bordered">
					<tr>
						<th><?php echo __('Id'); ?></th>
						<th><?php echo __('Name'); ?></th>
						<th><?php echo __('Created'); ?></th>
						<th><?php echo __('Modified'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
					<?php
					$i = 0;
		foreach ($user['Rol'] as $rol): ?>
					<tr>
						<td><?php echo $rol['id']; ?></td>
						<td><?php echo $rol['name']; ?></td>
						<td><?php echo $rol['created']; ?></td>
						<td><?php echo $rol['modified']; ?></td>
						<td class="actions"><?php echo $this->Html->link(__('View'), array('controller' => 'rols', 'action' => 'view', $rol['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'rols', 'action' => 'edit', $rol['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rols', 'action' => 'delete', $rol['id']), null, __('Are you sure you want to delete # %s?', $rol['id'])); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
				<?php endif; ?>
				<div class="span2">
					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
