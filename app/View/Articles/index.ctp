	<?php echo $this->element('navi_top'); ?>

	<div class="container">

		<div class="row">
			<div class="col-md-3 left_space">
				<div style="background-color: #99cc00; padding: 10px">このスペースに何か載せたい</div>
			</div>
			<div class="col-md-9 right_space">
				<table class="table table-hover">
					<thead>
					<tr class="table-title1">
					</tr>
					<tr class="table-title2"  style="background-color: #ddcc00">
						<td class="col-time">time</td>
						<td class="col-title">title</td>
						<td class="col-site">site</td>
						<td class="col-hatena">hatena</td>
					</tr>
					</thead>
					<?php foreach($articles as $no => $value):?>
					<tr>
						<td class="col-time"><?php echo date('H:i', strtotime($value['Article']['created'])) ?></td>
						<td class="col-title"><?php echo $this->Html->link($value['Article']['article_name'], $value['Article']['article_url'], array('target' => '_blank')); ?></td>
						<td class="col-site"><?php echo $this->Html->link($value['Website']['website_name'], $value['Website']['website_url'], array('target' => '_blank')); ?></td>
						<td class="col-hatena"><img src="http://b.hatena.ne.jp/entry/image/normal/<?php echo $value['Article']['article_url'] ?>" /></td>
					</tr>
					<?php endforeach ?>
				</table>
			</div>
		</div>

	</div><!-- /.container -->

	<?php echo $this->element('navi_btm'); ?>

<!--
<div class="articles index">
	<h2><?php echo __('Articles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('article_name'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('access_count'); ?></th>
			<th><?php echo $this->Paginator->sort('website_id'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('delete_flg'); ?></th>
			<th><?php echo $this->Paginator->sort('deleted'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($articles as $article): ?>
	<tr>
		<td><?php echo h($article['Article']['id']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['article_name']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['url']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['access_count']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($article['Website']['id'], array('controller' => 'websites', 'action' => 'view', $article['Website']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($article['Category']['id'], array('controller' => 'categories', 'action' => 'view', $article['Category']['id'])); ?>
		</td>
		<td><?php echo h($article['Article']['delete_flg']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['deleted']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['created']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $article['Article']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $article['Article']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Websites'), array('controller' => 'websites', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Website'), array('controller' => 'websites', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->