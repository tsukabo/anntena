<table class="table">
    <tr>
        <th><?php echo $this->Form->label(__('category_name')); ?></th>
        <td><?php echo $this->Form->input('category_name', array('div' => false,
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
