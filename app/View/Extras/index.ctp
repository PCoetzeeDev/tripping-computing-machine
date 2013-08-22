<div class="extras index">
	<h2><?php echo __('Extras'); ?></h2>
	<?php echo $this->Form->create('extras'); ?>
	<table>
	    <tr class="categoryHeader">
	        <td colspan="4">General Criteria</td>
	    </tr>
	    <tr class="categoryContent">
	        <td><?php echo $this->Form->input('date_of_birth', array('label'=>'Date of Birth')); ?></td>

	        <td><?php echo $this->Form->input('race_id', array('label'=>'Race','empty'=>true, 'options'=>$filterData['race'])); ?></td>

	        <td><?php echo $this->Form->input('gender_id', array('label'=>'Gender','empty'=>true, 'options'=>$filterData['gender'])); ?></td>
	        
	        <td><?php echo $this->Form->input('nationality_id', array('label'=>'Nationality','empty'=>true, 'options'=>$filterData['nationality'])); ?></td>
	    </tr>
	</table>
	<table>
	    <tr class="categoryHeader">
            <td colspan="3">Shoot Specific Criteria</td>
        </tr>
	    <tr class="categoryContent">
	        <td><?php echo $this->Form->input('is_on_whole_bang_shoot', array('label'=>'Is on whole bang shoot','empty'=>true, 'options'=>array('0'=>'No', '1'=>'Yes'))); ?></td>

	        <td><?php echo $this->Form->input('is_on_gmail_contacts', array('label'=>'Is in gmail contacts','empty'=>true, 'options'=>array('0'=>'No', '1'=>'Yes'))); ?></td>

	        <td><?php echo $this->Form->input('had_previous_experience', array('label'=>'Previous Experience','empty'=>true, 'options'=>array('0'=>'No', '1'=>'Yes'))); ?></td>
	    </tr>
    </table>
    <table>
        <tr class="categoryHeader">
            <td colspan="5">Biometric Criteria</td>
        </tr>
	    <tr class="categoryContent">
	        <td><?php echo $this->Form->input('height', array('label'=>'height')); ?></td>
	    
	        <td><?php echo $this->Form->input('chest_size', array('label'=>'Chest Size')); ?></td>
	    
	        <td><?php echo $this->Form->input('bra_size', array('label'=>'Bra Size')); ?></td>
	    
	        <td><?php echo $this->Form->input('hips_size', array('label'=>'Hips Size')); ?></td>
	    
	        <td><?php echo $this->Form->input('waist_size', array('label'=>'Waist Size')); ?></td>
	        
	    </tr>
    </table>
    <table>
        <tr class="categoryHeader">
            <td colspan="6">Clothing Criteria</td>
        </tr>
	    <tr class="categoryContent">    
	    
	        <td><?php echo $this->Form->input('suit_size', array('label'=>'Suit Size')); ?></td>
	    
	        <td><?php echo $this->Form->input('dress_size', array('label'=>'Dress Size')); ?></td>
	    
	        <td><?php echo $this->Form->input('show_size', array('label'=>'Shoe Size')); ?></td>
	    
	        <td><?php echo $this->Form->input('collar_size', array('label'=>'Collar Size')); ?></td>
	    
	        <td><?php echo $this->Form->input('hair_colour_id', array('label'=>'Hair Colour','empty'=>true, 'options'=>$filterData['hair'])); ?></td>
	    
	        <td><?php echo $this->Form->input('eye_colour_id', array('label'=>'Eye Colour','empty'=>true, 'options'=>$filterData['eye'])); ?></td>
	    </tr>
	</table>
	<?php echo $this->Form->end('Filter'); ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($extras as $extra): ?>
	<tr>
		<td><?php echo h($extra['Extra']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $extra['Extra']['id']), array('class'=>'btnView')); ?>
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
	<div id="ajaxDialog">
	    
	</div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
      $('#menu').menu();
      $( "#ajaxDialog" ).dialog({
      autoOpen: false,
      width: '100%',
      position: { my: "left top", at: "top", of: window },
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "blind",
        duration: 1000
      }
    });
        
        $('.categoryHeader').click(function() {
            $(this).next('tr').toggle();
        });
        
        $('.btnView').click(function() {
            $('#ajaxDialog').load($(this).attr('href'));
            $('#ajaxDialog').dialog('open');
            return false;
        });
    });
</script>