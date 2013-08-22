<ul id="menu">
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