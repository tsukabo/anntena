		<div class="row">
<!--
 			<div class="col-md-3 left_space">
				<div style="background-color: #99cc00; padding: 10px">このスペースに何か載せたい</div>
			</div>
-->
			<div class="col-md-12 right_space">
				<table class="table table-hover">
					<thead>
					<tr>
						<td class="col-time"><?php echo __('time');?></td>
						<td class="col-title"><?php echo __('title');?></td>
						<td class="col-site"><?php echo __('site');?></td>
						<td class="col-hatena"><?php echo __('favor');?></td>
					</tr>
					</thead>
					<tbody>
					<?php foreach($articles as $no => $value):?>
					<tr>
						<td class="col-time"><?php echo date('H:i', strtotime($value['Article']['created'])) ?></td>
						<td class="col-title"><?php echo $this->Html->link($value['Article']['article_name'], $value['Article']['article_url'], array('target' => '_blank')); ?></td>
						<td class="col-site"><?php echo $this->Html->link($value['Website']['website_name'], $value['Website']['website_url'], array('target' => '_blank')); ?></td>
						<td class="col-hatena"><img src="http://b.hatena.ne.jp/entry/image/normal/<?php echo $value['Article']['article_url'] ?>" /></td>
					</tr>
					<?php endforeach ?>
					</tbody>
				</table>
				<?php echo $this->element('counter'); ?>
				<?php echo $this->element('pagination'); ?>
			</div>
		</div>

