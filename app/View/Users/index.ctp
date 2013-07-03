<?php echo $this->Html->breadcrumb(array(
		$this->Html->link('Home', array('controller' => 'admin','action' => 'index')),
		'Usuarios',
	)); ?>
<div id="separator" style="margin-top: 40px;"></div>
<?php echo $this->Session->flash(); ?>
<div class="container-document">
	<div class="row-fluid">
		<div class="span2">
			<div class="actions">
				<h3>
					<?php echo __('Actions'); ?>
				</h3>
				<ul>
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
			<div class="users index">
				<h2>
					<?php echo __('Users'); ?>
				</h2>
				<table cellpadding="0" cellspacing="0"
					class="table table-striped table-bordered">
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('username'); ?></th>
						<th><?php echo $this->Paginator->sort('initials'); ?></th>
						<th><?php echo $this->Paginator->sort('center_code'); ?></th>
						<th><?php echo $this->Paginator->sort('email'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
					<?php
	foreach ($users as $user): ?>
					<tr>
						<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['initials']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['center_code']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
						<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
						<td class="actions"><?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
				<p>
					<?php
					echo $this->Paginator->counter(array(
							'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
					?>
				</p>

				<?php echo $this->Paginator->pagination(); ?>
			</div>
		</div>
	</div>
</div>

