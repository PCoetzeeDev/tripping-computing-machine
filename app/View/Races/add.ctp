<div class="races form">
<?php echo $this->Form->create('Race'); ?>
	<fieldset>
		<legend><?php echo __('Add Race'); ?></legend>
	<?php
		echo $this->Form->input('race');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Races'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Extras'), array('controller' => 'extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra'), array('controller' => 'extras', 'action' => 'add')); ?> </li>
	</ul>
</div>
