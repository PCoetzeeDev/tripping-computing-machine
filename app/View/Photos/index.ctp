<div class="photos index">
	<h2><?php echo __('Photos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('extra_id'); ?></th>
			<th><?php echo $this->Paginator->sort('caption'); ?></th>
			<th><?php echo $this->Paginator->sort('file_path'); ?></th>
			<th><?php echo $this->Paginator->sort('date_taken'); ?></th>
			<th><?php echo $this->Paginator->sort('paid_for'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($photos as $photo): ?>
	<tr>
		<td><?php echo h($photo['Photo']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($photo['Extra']['first_name'], array('controller' => 'extras', 'action' => 'view', $photo['Extra']['id'])); ?>
		</td>
		<td><?php echo h($photo['Photo']['caption']); ?>&nbsp;</td>
		<td><?php echo h($photo['Photo']['file_path']); ?>&nbsp;</td>
		<td><?php echo h($photo['Photo']['date_taken']); ?>&nbsp;</td>
		<td><?php echo h($photo['Photo']['paid_for']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $photo['Photo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $photo['Photo']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $photo['Photo']['id']), null, __('Are you sure you want to delete # %s?', $photo['Photo']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Photo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Extras'), array('controller' => 'extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra'), array('controller' => 'extras', 'action' => 'add')); ?> </li>
	</ul>
</div>
