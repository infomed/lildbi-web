<?php echo $this->Html->breadcrumb(array(
		$this->Html->link('Home', array('controller' => 'admin','action' => 'index')),
		$this->Html->link('Usuarios', array('controller' => 'users','action' => 'index')),
		'Rols',
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
			<div class="rols index">
				<h2>
					<?php echo __('Rols'); ?>
				</h2>
				<table cellpadding="0" cellspacing="0"
					class="table table-striped table-bordered">
					<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('name'); ?></th>
						<th><?php echo $this->Paginator->sort('created'); ?></th>
						<th><?php echo $this->Paginator->sort('modified'); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
					<?php
	foreach ($rols as $rol): ?>
					<tr>
						<td><?php echo h($rol['Rol']['id']); ?>&nbsp;</td>
						<td><?php echo h($rol['Rol']['name']); ?>&nbsp;</td>
						<td><?php echo h($rol['Rol']['created']); ?>&nbsp;</td>
						<td><?php echo h($rol['Rol']['modified']); ?>&nbsp;</td>
						<td class="actions"><?php echo $this->Html->link(__('View'), array('action' => 'view', $rol['Rol']['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rol['Rol']['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rol['Rol']['id']), null, __('Are you sure you want to delete # %s?', $rol['Rol']['id'])); ?>
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
