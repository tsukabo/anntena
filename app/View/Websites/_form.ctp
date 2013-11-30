<table class="table">
    <tr>
        <th><?php echo $this->Form->label(__('category_id')); ?></th>
        <td><?php echo $this->Form->input('category_id', array('div' => false,
                                                                 'label' => false,
                                                                 'type' => 'select',
                                                                 'options' => d($categorylist),
                                                                 'class' => 'form-control input-sm')); ?></td>
    </tr>
    <tr>
        <th><?php echo $this->Form->label(__('website_name')); ?></th>
        <td><?php echo $this->Form->input('website_name', array('div' => false,
                                                                 'label' => false,
                                                                 'type' => 'text',
                                                                 'maxlength' => '100',
                                                                 'class' => 'form-control input-sm',
                                                                 'autocomplete' => 'off')); ?></td>
    </tr>
    <tr>
        <th><?php echo $this->Form->label(__('website_url')); ?></th>
        <td><?php echo $this->Form->input('website_url', array('div' => false,
                                                                 'label' => false,
                                                                 'type' => 'text',
                                                                 'maxlength' => '100',
                                                                 'class' => 'form-control input-sm',
                                                                 'autocomplete' => 'off')); ?></td>
    </tr>
    <tr>
        <th><?php echo $this->Form->label(__('website_rss')); ?></th>
        <td><?php echo $this->Form->input('website_rss', array('div' => false,
                                                                 'label' => false,
                                                                 'type' => 'text',
                                                                 'maxlength' => '100',
                                                                 'class' => 'form-control input-sm',
                                                                 'autocomplete' => 'off')); ?></td>
    </tr>
</table>

<?php
    if ( $this->Form->request->params['action'] == 'edit' ) {
        echo $this->Form->hidden('id');
    }
?>
