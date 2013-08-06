<div class="extras form">
<?php echo $this->Form->create('Extra'); ?>
	<fieldset>
		<legend><?php echo __('Edit Extra'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('second_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('race_id');
		echo $this->Form->input('gender_id');
		echo $this->Form->input('email');
		echo $this->Form->input('cell_number');
		echo $this->Form->input('work_number');
		echo $this->Form->input('home_number');
		echo $this->Form->input('address');
		echo $this->Form->input('emergency_contact_name');
		echo $this->Form->input('emergency_contact_number');
		echo $this->Form->input('is_on_whole_bang_shoot');
		echo $this->Form->input('is_on_gmail_contacts');
		echo $this->Form->input('had_previous_experience');
		echo $this->Form->input('banking_details');
		echo $this->Form->input('height');
		echo $this->Form->input('chest_size');
		echo $this->Form->input('bra_size');
		echo $this->Form->input('hips_size');
		echo $this->Form->input('waist_size');
		echo $this->Form->input('suit_size');
		echo $this->Form->input('dress_size');
		echo $this->Form->input('show_size');
		echo $this->Form->input('collar_size');
		echo $this->Form->input('hair_colour_id');
		echo $this->Form->input('eye_colour_id');
		echo $this->Form->input('skills');
		echo $this->Form->input('allergies');
		echo $this->Form->input('phobias');
		echo $this->Form->input('availability');
		echo $this->Form->input('has_tax_directive');
		echo $this->Form->input('id_number');
		echo $this->Form->input('passport_number');
		echo $this->Form->input('pass_port_expiry_date');
		echo $this->Form->input('nationality_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Extra.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Extra.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Extras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Races'), array('controller' => 'races', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Race'), array('controller' => 'races', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Genders'), array('controller' => 'genders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gender'), array('controller' => 'genders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hair Colours'), array('controller' => 'hair_colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hair Colour'), array('controller' => 'hair_colours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eye Colours'), array('controller' => 'eye_colours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eye Colour'), array('controller' => 'eye_colours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nationalities'), array('controller' => 'nationalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nationality'), array('controller' => 'nationalities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
