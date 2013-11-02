<div class="websites form">
<?php echo $this->Form->create('Website'); ?>
	<fieldset>
		<legend><?php echo __('Edit Website'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('website_name');
		echo $this->Form->input('delete_flg');
		echo $this->Form->input('deleted');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Website.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Website.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Websites'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
	</ul>
</div>
