<div class="extras view">
<h2><?php echo __('Extra'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Second Name'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['second_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Race'); ?></dt>
		<dd>
			<?php echo $this->Html->link($extra['Race']['race'], array('controller' => 'races', 'action' => 'view', $extra['Race']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo $this->Html->link($extra['Gender']['gender'], array('controller' => 'genders', 'action' => 'view', $extra['Gender']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell Number'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['cell_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Number'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['work_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Number'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['home_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emergency Contact Name'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['emergency_contact_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emergency Contact Number'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['emergency_contact_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is On Whole Bang Shoot'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['is_on_whole_bang_shoot']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is On Gmail Contacts'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['is_on_gmail_contacts']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Had Previous Experience'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['had_previous_experience']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Banking Details'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['banking_details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Height'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['height']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Chest Size'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['chest_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bra Size'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['bra_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hips Size'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['hips_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Waist Size'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['waist_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Suit Size'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['suit_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dress Size'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['dress_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Show Size'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['show_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Collar Size'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['collar_size']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hair Colour'); ?></dt>
		<dd>
			<?php echo $this->Html->link($extra['HairColour']['colour'], array('controller' => 'hair_colours', 'action' => 'view', $extra['HairColour']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eye Colour'); ?></dt>
		<dd>
			<?php echo $this->Html->link($extra['EyeColour']['colour'], array('controller' => 'eye_colours', 'action' => 'view', $extra['EyeColour']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Skills'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['skills']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Allergies'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['allergies']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phobias'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['phobias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Availability'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['availability']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Has Tax Directive'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['has_tax_directive']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Number'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['id_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Passport Number'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['passport_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pass Port Expiry Date'); ?></dt>
		<dd>
			<?php echo h($extra['Extra']['pass_port_expiry_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nationality'); ?></dt>
		<dd>
			<?php echo $this->Html->link($extra['Nationality']['nationality'], array('controller' => 'nationalities', 'action' => 'view', $extra['Nationality']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Photos'); ?></h3>
	<?php if (!empty($extra['Photo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Extra Id'); ?></th>
		<th><?php echo __('Caption'); ?></th>
		<th><?php echo __('File Path'); ?></th>
		<th><?php echo __('Date Taken'); ?></th>
		<th><?php echo __('Paid For'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($extra['Photo'] as $photo): ?>
		<tr>
			<td><?php echo $photo['id']; ?></td>
			<td><?php echo $photo['extra_id']; ?></td>
			<td><?php echo $photo['caption']; ?></td>
			<td><?php echo $photo['file_path']; ?></td>
			<td><?php echo $photo['date_taken']; ?></td>
			<td><?php echo $photo['paid_for']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'photos', 'action' => 'view', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'photos', 'action' => 'edit', $photo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'photos', 'action' => 'delete', $photo['id']), null, __('Are you sure you want to delete # %s?', $photo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
