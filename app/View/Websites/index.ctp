		<div class="row">
			<div class="col-md-12">

				<div class="boxright">
					<?php echo $this->Html->link(__('New'), array('action' => 'add'), array('class'=>'btn btn-success')); ?>
				</div>

				<table class="table table-hover">
					<thead>
					<tr>
						<th><?php echo $this->Paginator->sort('id', __('id')); ?></th>
						<th><?php echo $this->Paginator->sort('category_id', __('category_id')); ?></th>
						<th><?php echo $this->Paginator->sort('website_name', __('website_name')); ?></th>
						<th><?php echo $this->Paginator->sort('delete_flg', __('delete_flg')); ?></th>
						<th><?php echo $this->Paginator->sort('created', __('created')); ?></th>
						<th><?php echo $this->Paginator->sort('modified', __('modified')); ?></th>
						<th class="actions"><?php echo __('Actions'); ?></th>
					</tr>
					</thead>
					<tbody>
					<?php foreach ($websites as $website): ?>
					<tr>
						<td><?php echo $website['Website']['id']; ?></td>
						<td><?php echo $website['Category']['category_name']; ?></td>
						<td><?php echo $website['Website']['website_name']; ?></td>
						<td><?php echo $this->Html->deleteFlg($website['Website']['delete_flg']); ?></td>
						<td><?php echo $website['Website']['created']; ?></td>
						<td><?php echo $website['Website']['modified']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $website['Website']['id']), array('class'=>'btn btn-primary')); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $website['Website']['id']), array('class'=>'btn btn-danger'), __('Are you sure you want to delete # %s?', $website['Website']['id'])); ?>
						</td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

				<?php echo $this->element('counter'); ?>
				<?php echo $this->element('pagination'); ?>

			</div>
		</div>
