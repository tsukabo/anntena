<div class="pagination pagination-sm">
<?php
	echo $this->Paginator->first('<< ', array(), null, array('class' => 'first hide'));
	echo $this->Paginator->prev('< ', array('disabled' => 'hide'), null, array('class' => 'prev hide'));
	echo $this->Paginator->numbers(array('separator' => ''));
	echo $this->Paginator->next(' >', array('disabled' => 'hide'), null, array('class' => 'next hide'));
	echo $this->Paginator->last(' >>', array('disabled' => 'hide'), null, array('class' => 'last hide'));
?>
</div>
