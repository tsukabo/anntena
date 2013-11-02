<div class="websites view">
<h2><?php echo __('Website'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($website['Website']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website Name'); ?></dt>
		<dd>
			<?php echo h($website['Website']['website_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delete Flg'); ?></dt>
		<dd>
			<?php echo h($website['Website']['delete_flg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deleted'); ?></dt>
		<dd>
			<?php echo h($website['Website']['deleted']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($website['Website']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($website['Website']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Website'), array('action' => 'edit', $website['Website']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Website'), array('action' => 'delete', $website['Website']['id']), null, __('Are you sure you want to delete # %s?', $website['Website']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Websites'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Website'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Articles'); ?></h3>
	<?php if (!empty($website['Article'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Article Name'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Access Count'); ?></th>
		<th><?php echo __('Website Id'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Delete Flg'); ?></th>
		<th><?php echo __('Deleted'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($website['Article'] as $article): ?>
		<tr>
			<td><?php echo $article['id']; ?></td>
			<td><?php echo $article['article_name']; ?></td>
			<td><?php echo $article['url']; ?></td>
			<td><?php echo $article['access_count']; ?></td>
			<td><?php echo $article['website_id']; ?></td>
			<td><?php echo $article['category_id']; ?></td>
			<td><?php echo $article['delete_flg']; ?></td>
			<td><?php echo $article['deleted']; ?></td>
			<td><?php echo $article['created']; ?></td>
			<td><?php echo $article['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'articles', 'action' => 'view', $article['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'articles', 'action' => 'edit', $article['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articles', 'action' => 'delete', $article['id']), null, __('Are you sure you want to delete # %s?', $article['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
