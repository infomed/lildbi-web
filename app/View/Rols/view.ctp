<?php echo $this->Html->breadcrumb(array(
		$this->Html->link('Home', array('controller' => 'admin','action' => 'index')),
		$this->Html->link('Usuarios', array('controller' => 'users','action' => 'index')),
		$this->Html->link('Rols', array('controller' => 'rols','action' => 'index')),
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
					<li><?php echo $this->Html->link(__('Edit Rol'), array('action' => 'edit', $rol['Rol']['id'])); ?>
					</li>
					<li><?php echo $this->Form->postLink(__('Delete Rol'), array('action' => 'delete', $rol['Rol']['id']), null, __('Are you sure you want to delete # %s?', $rol['Rol']['id'])); ?>
					</li>
					<li><?php echo $this->Html->link(__('List Rols'), array('action' => 'index')); ?>
					</li>
					<li><?php echo $this->Html->link(__('New Rol'), array('action' => 'add')); ?>
					</li>
					<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?>
					</li>
					<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?>
					</li>
				</ul>
			</div>
		</div>
		<div class="span10">
			<div class="rols view">
				<h2>
					<?php  echo __('Rol'); ?>
				</h2>
				<dl  class="dl-horizontal">
					<dt>
						<?php echo __('Id'); ?>
					</dt>
					<dd>
						<?php echo h($rol['Rol']['id']); ?>
						&nbsp;
					</dd>
					<dt>
						<?php echo __('Name'); ?>
					</dt>
					<dd>
						<?php echo h($rol['Rol']['name']); ?>
						&nbsp;
					</dd>
					<dt>
						<?php echo __('Created'); ?>
					</dt>
					<dd>
						<?php echo h($rol['Rol']['created']); ?>
						&nbsp;
					</dd>
					<dt>
						<?php echo __('Modified'); ?>
					</dt>
					<dd>
						<?php echo h($rol['Rol']['modified']); ?>
						&nbsp;
					</dd>
				</dl>
			</div>
		</div>
		<div class="span12">
			<div class="related">
				<h3>
					<?php echo __('Related Users'); ?>
				</h3>
				<?php if (!empty($rol['User'])): ?>
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<tr>
						<th><?php echo __('Id'); ?></th>
						<th><?php echo __('Name'); ?></th>
						<th><?php echo __('Username'); ?></th>
						<th><?php echo __('Email'); ?></th>						
						<th><?php echo __('Created'); ?></th>
						<th><?php echo __('Modified'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
					<?php
					$i = 0;
		foreach ($rol['User'] as $user): ?>
					<tr>
						<td><?php echo $user['id']; ?></td>
						<td><?php echo $user['name']; ?></td>
						<td><?php echo $user['username']; ?></td>
						<td><?php echo $user['email']; ?></td>						
						<td><?php echo $user['created']; ?></td>
						<td><?php echo $user['modified']; ?></td>
						<td class="actions"><?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
				<?php endif; ?>
				<div class="span2">
					<div class="actions">
						<ul>
							<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
