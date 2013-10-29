<?php
/**
 * delete_flg
 *
 */
define('DELETE_OFF', 0);
define('DELETE_ON', 1);
Configure::write('delete_flg', array(
	DELETE_OFF => '未削除',
	DELETE_ON => '削除済',
));

