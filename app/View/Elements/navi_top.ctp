	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<span class="navbar-brand"><?php echo $this->Html->link(__('My antena'), array('controller' => 'Articles', 'action' => 'index')); ?></span>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
				<?php if ($this->name == 'Articles') :?>
					<li><?php echo $this->Html->link(__('hatena'), array('action' => 'index', 1)); ?></li>
					<li><?php echo $this->Html->link(__('2ch'), array('action' => 'index', 2)); ?></li>
					<li><?php echo $this->Html->link(__('Computer'), array('action' => 'index', 3)); ?></li>
					<li><?php echo $this->Html->link(__('life'), array('action' => 'index', 4)); ?></li>
					<li><?php echo $this->Html->link(__('news'), array('action' => 'index', 5)); ?></li>
					<li><?php echo $this->Html->link(__('sports'), array('action' => 'index', 6)); ?></li>
				<?php else :?>
					<li><?php echo $this->Html->link(__('webstie'), array('controller' => 'websites' ,'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('category'), array('controller' => 'categories' ,'action' => 'index')); ?></li>
				<?php endif ?>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div>
