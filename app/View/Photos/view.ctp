<div class="photos view">
<h2><?php echo __('Photo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Extra'); ?></dt>
		<dd>
			<?php echo $this->Html->link($photo['Extra']['first_name'], array('controller' => 'extras', 'action' => 'view', $photo['Extra']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caption'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['caption']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('File Path'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['file_path']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Taken'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['date_taken']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Paid For'); ?></dt>
		<dd>
			<?php echo h($photo['Photo']['paid_for']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Photo'), array('action' => 'edit', $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Photo'), array('action' => 'delete', $photo['Photo']['id']), null, __('Are you sure you want to delete # %s?', $photo['Photo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extras'), array('controller' => 'extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra'), array('controller' => 'extras', 'action' => 'add')); ?> </li>
	</ul>
</div>
