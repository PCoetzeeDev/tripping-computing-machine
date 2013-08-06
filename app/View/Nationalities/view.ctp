<div class="nationalities view">
<h2><?php echo __('Nationality'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($nationality['Nationality']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo h($nationality['Nationality']['nationality']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nationality'), array('action' => 'edit', $nationality['Nationality']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nationality'), array('action' => 'delete', $nationality['Nationality']['id']), null, __('Are you sure you want to delete # %s?', $nationality['Nationality']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Nationalities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nationality'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extras'), array('controller' => 'extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra'), array('controller' => 'extras', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Extras'); ?></h3>
	<?php if (!empty($nationality['Extra'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Second Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
		<th><?php echo __('Race Id'); ?></th>
		<th><?php echo __('Gender Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Cell Number'); ?></th>
		<th><?php echo __('Work Number'); ?></th>
		<th><?php echo __('Home Number'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th><?php echo __('Emergency Contact Name'); ?></th>
		<th><?php echo __('Emergency Contact Number'); ?></th>
		<th><?php echo __('Is On Whole Bang Shoot'); ?></th>
		<th><?php echo __('Is On Gmail Contacts'); ?></th>
		<th><?php echo __('Had Previous Experience'); ?></th>
		<th><?php echo __('Banking Details'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Chest Size'); ?></th>
		<th><?php echo __('Bra Size'); ?></th>
		<th><?php echo __('Hips Size'); ?></th>
		<th><?php echo __('Waist Size'); ?></th>
		<th><?php echo __('Suit Size'); ?></th>
		<th><?php echo __('Dress Size'); ?></th>
		<th><?php echo __('Show Size'); ?></th>
		<th><?php echo __('Collar Size'); ?></th>
		<th><?php echo __('Hair Colour Id'); ?></th>
		<th><?php echo __('Eye Colour Id'); ?></th>
		<th><?php echo __('Skills'); ?></th>
		<th><?php echo __('Allergies'); ?></th>
		<th><?php echo __('Phobias'); ?></th>
		<th><?php echo __('Availability'); ?></th>
		<th><?php echo __('Has Tax Directive'); ?></th>
		<th><?php echo __('Id Number'); ?></th>
		<th><?php echo __('Passport Number'); ?></th>
		<th><?php echo __('Pass Port Expiry Date'); ?></th>
		<th><?php echo __('Nationality Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($nationality['Extra'] as $extra): ?>
		<tr>
			<td><?php echo $extra['id']; ?></td>
			<td><?php echo $extra['first_name']; ?></td>
			<td><?php echo $extra['second_name']; ?></td>
			<td><?php echo $extra['last_name']; ?></td>
			<td><?php echo $extra['date_of_birth']; ?></td>
			<td><?php echo $extra['race_id']; ?></td>
			<td><?php echo $extra['gender_id']; ?></td>
			<td><?php echo $extra['email']; ?></td>
			<td><?php echo $extra['cell_number']; ?></td>
			<td><?php echo $extra['work_number']; ?></td>
			<td><?php echo $extra['home_number']; ?></td>
			<td><?php echo $extra['address']; ?></td>
			<td><?php echo $extra['emergency_contact_name']; ?></td>
			<td><?php echo $extra['emergency_contact_number']; ?></td>
			<td><?php echo $extra['is_on_whole_bang_shoot']; ?></td>
			<td><?php echo $extra['is_on_gmail_contacts']; ?></td>
			<td><?php echo $extra['had_previous_experience']; ?></td>
			<td><?php echo $extra['banking_details']; ?></td>
			<td><?php echo $extra['height']; ?></td>
			<td><?php echo $extra['chest_size']; ?></td>
			<td><?php echo $extra['bra_size']; ?></td>
			<td><?php echo $extra['hips_size']; ?></td>
			<td><?php echo $extra['waist_size']; ?></td>
			<td><?php echo $extra['suit_size']; ?></td>
			<td><?php echo $extra['dress_size']; ?></td>
			<td><?php echo $extra['show_size']; ?></td>
			<td><?php echo $extra['collar_size']; ?></td>
			<td><?php echo $extra['hair_colour_id']; ?></td>
			<td><?php echo $extra['eye_colour_id']; ?></td>
			<td><?php echo $extra['skills']; ?></td>
			<td><?php echo $extra['allergies']; ?></td>
			<td><?php echo $extra['phobias']; ?></td>
			<td><?php echo $extra['availability']; ?></td>
			<td><?php echo $extra['has_tax_directive']; ?></td>
			<td><?php echo $extra['id_number']; ?></td>
			<td><?php echo $extra['passport_number']; ?></td>
			<td><?php echo $extra['pass_port_expiry_date']; ?></td>
			<td><?php echo $extra['nationality_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'extras', 'action' => 'view', $extra['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'extras', 'action' => 'edit', $extra['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'extras', 'action' => 'delete', $extra['id']), null, __('Are you sure you want to delete # %s?', $extra['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Extra'), array('controller' => 'extras', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
