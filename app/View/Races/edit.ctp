<div class="races form">
<?php echo $this->Form->create('Race'); ?>
	<fieldset>
		<legend><?php echo __('Edit Race'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('race');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Race.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Race.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Races'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Extras'), array('controller' => 'extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra'), array('controller' => 'extras', 'action' => 'add')); ?> </li>
	</ul>
</div>
