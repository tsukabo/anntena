		<div class="row">
			<div class="col-md-12">

				<?php echo $this->Form->create('Category'); ?>
				<fieldset>
					<legend><?php echo __('Edit %s', __('Category')); ?></legend>
					<?php echo $this->partial('form'); ?>
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-primary'));?>
				</fieldset>
				<?php echo $this->Form->end();?>

			</div>
		</div>
