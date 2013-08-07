<div class="eyeColours form">
<?php echo $this->Form->create('EyeColour'); ?>
	<fieldset>
		<legend><?php echo __('Edit Eye Colour'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('colour');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EyeColour.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EyeColour.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eye Colours'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Extras'), array('controller' => 'extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra'), array('controller' => 'extras', 'action' => 'add')); ?> </li>
	</ul>
</div>
