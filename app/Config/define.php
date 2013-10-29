<?php

/**
 * 書類送付先
 *
 */
define('SYORUI_JITAKU', 0);
define('SYORUI_RENRAKU', 1);
Configure::write('SYORUI_KIND', array(
    SYORUI_JITAKU => '自宅',
    SYORUI_RENRAKU => '連絡先',
));

/**
 * 領収書発行区分
 *
 */
define('RYOUSYUSYO_MONTH', 0);
define('RYOSYUSYUO_YEAR', 1);
Configure::write('RYOSYUSYUO_KIND', array(
    RYOUSYUSYO_MONTH => '毎月',
    RYOSYUSYUO_YEAR => '年',
));


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

/**
 * 性別
 *
 */
define('SEX_MALE', 1);
define('SEX_FEMALE', 2);
Configure::write('SEX', array(
    SEX_MALE => '男性',
    SEX_FEMALE => '女性',
));
