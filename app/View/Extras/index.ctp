<div class="extras index">
	<h2><?php echo __('Extras'); ?></h2>
	<?php echo $this->Form->create('extras'); ?>
	<table>
	    <tr>
	        <td>Date of Birth</td><td><?php echo $this->Form->input('date_of_birth', array('label'=>false)); ?></td>
	        </tr>
	    <tr>
	        <td>Race</td><td><?php echo $this->Form->input('race_id', array('label'=>false,'empty'=>true, 'options'=>$filterData['race'])); ?></td>
	        </tr>
	    <tr>
	        <td>Gender</td><td><?php echo $this->Form->input('gender_id', array('label'=>false,'empty'=>true, 'options'=>$filterData['gender'])); ?></td>
	    </tr><tr>
	        <td>Is on Whole Bang Shoot</td><td><?php echo $this->Form->input('is_on_whole_bang_shoot', array('label'=>false,'empty'=>true, 'options'=>array('0'=>'No', '1'=>'Yes'))); ?></td>
	    </tr><tr>
	        <td>Is in Gmail Contacts</td><td><?php echo $this->Form->input('is_on_gmail_contacts', array('label'=>false,'empty'=>true, 'options'=>array('0'=>'No', '1'=>'Yes'))); ?></td>
	    </tr><tr>
	        <td>Had Previous Experience</td><td><?php echo $this->Form->input('had_previous_experience', array('label'=>false,'empty'=>true, 'options'=>array('0'=>'No', '1'=>'Yes'))); ?></td>
	    </tr><tr>
	        <td>Height</td><td><?php echo $this->Form->input('height', array('label'=>false)); ?></td>
	    </tr><tr>
	        <td>Chest Size</td><td><?php echo $this->Form->input('chest_size', array('label'=>false)); ?></td>
	    </tr><tr>
	        <td>Bra Size</td><td><?php echo $this->Form->input('bra_size', array('label'=>false)); ?></td>
	    </tr><tr>
	        <td>Hip Size</td><td><?php echo $this->Form->input('hips_size', array('label'=>false)); ?></td>
	    </tr><tr>
	        <td>Waist Size</td><td><?php echo $this->Form->input('waist_size', array('label'=>false)); ?></td>
	    </tr><tr>
	        <td>Suit Size</td><td><?php echo $this->Form->input('suit_size', array('label'=>false)); ?></td>
	    </tr><tr>
	        <td>Dress Size</td><td><?php echo $this->Form->input('dress_size', array('label'=>false)); ?></td>
	    </tr><tr>
	        <td>Shoe Size</td><td><?php echo $this->Form->input('show_size', array('label'=>false)); ?></td>
	    </tr><tr>
	        <td>Collar Size</td><td><?php echo $this->Form->input('collar_size', array('label'=>false)); ?></td>
	    </tr><tr>
	        <td>Hair Colour</td><td><?php echo $this->Form->input('hair_colour_id', array('label'=>false,'empty'=>true, 'options'=>$filterData['hair'])); ?></td>
	    </tr><tr>
	        <td>Eye Colour</td><td><?php echo $this->Form->input('eye_colour_id', array('label'=>false,'empty'=>true, 'options'=>$filterData['eye'])); ?></td>
	    </tr>
	    <tr>
	        <td>Nationality</td><td><?php echo $this->Form->input('nationality_id', array('label'=>false,'empty'=>true, 'options'=>$filterData['nationality'])); ?></td>
	    </tr>
	</table>
	<?php echo $this->Form->end('Filter'); ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('second_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('race_id'); ?></th>
			<th><?php echo $this->Paginator->sort('gender_id'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('cell_number'); ?></th>
			<th><?php echo $this->Paginator->sort('work_number'); ?></th>
			<th><?php echo $this->Paginator->sort('home_number'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('emergency_contact_name'); ?></th>
			<th><?php echo $this->Paginator->sort('emergency_contact_number'); ?></th>
			<th><?php echo $this->Paginator->sort('is_on_whole_bang_shoot'); ?></th>
			<th><?php echo $this->Paginator->sort('is_on_gmail_contacts'); ?></th>
			<th><?php echo $this->Paginator->sort('had_previous_experience'); ?></th>
			<th><?php echo $this->Paginator->sort('banking_details'); ?></th>
			<th><?php echo $this->Paginator->sort('height'); ?></th>
			<th><?php echo $this->Paginator->sort('chest_size'); ?></th>
			<th><?php echo $this->Paginator->sort('bra_size'); ?></th>
			<th><?php echo $this->Paginator->sort('hips_size'); ?></th>
			<th><?php echo $this->Paginator->sort('waist_size'); ?></th>
			<th><?php echo $this->Paginator->sort('suit_size'); ?></th>
			<th><?php echo $this->Paginator->sort('dress_size'); ?></th>
			<th><?php echo $this->Paginator->sort('show_size'); ?></th>
			<th><?php echo $this->Paginator->sort('collar_size'); ?></th>
			<th><?php echo $this->Paginator->sort('hair_colour_id'); ?></th>
			<th><?php echo $this->Paginator->sort('eye_colour_id'); ?></th>
			<th><?php echo $this->Paginator->sort('skills'); ?></th>
			<th><?php echo $this->Paginator->sort('allergies'); ?></th>
			<th><?php echo $this->Paginator->sort('phobias'); ?></th>
			<th><?php echo $this->Paginator->sort('availability'); ?></th>
			<th><?php echo $this->Paginator->sort('has_tax_directive'); ?></th>
			<th><?php echo $this->Paginator->sort('id_number'); ?></th>
			<th><?php echo $this->Paginator->sort('passport_number'); ?></th>
			<th><?php echo $this->Paginator->sort('pass_port_expiry_date'); ?></th>
			<th><?php echo $this->Paginator->sort('nationality_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($extras as $extra): ?>
	<tr>
		<td><?php echo h($extra['Extra']['id']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['second_name']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['date_of_birth']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($extra['Race']['race'], array('controller' => 'races', 'action' => 'view', $extra['Race']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($extra['Gender']['gender'], array('controller' => 'genders', 'action' => 'view', $extra['Gender']['id'])); ?>
		</td>
		<td><?php echo h($extra['Extra']['email']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['cell_number']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['work_number']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['home_number']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['address']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['emergency_contact_name']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['emergency_contact_number']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['is_on_whole_bang_shoot']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['is_on_gmail_contacts']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['had_previous_experience']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['banking_details']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['height']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['chest_size']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['bra_size']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['hips_size']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['waist_size']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['suit_size']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['dress_size']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['show_size']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['collar_size']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($extra['HairColour']['colour'], array('controller' => 'hair_colours', 'action' => 'view', $extra['HairColour']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($extra['EyeColour']['colour'], array('controller' => 'eye_colours', 'action' => 'view', $extra['EyeColour']['id'])); ?>
		</td>
		<td><?php echo h($extra['Extra']['skills']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['allergies']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['phobias']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['availability']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['has_tax_directive']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['id_number']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['passport_number']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['pass_port_expiry_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($extra['Nationality']['nationality'], array('controller' => 'nationalities', 'action' => 'view', $extra['Nationality']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $extra['Extra']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $extra['Extra']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $extra['Extra']['id']), null, __('Are you sure you want to delete # %s?', $extra['Extra']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Extra'), array('action' => 'add')); ?></li>
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
