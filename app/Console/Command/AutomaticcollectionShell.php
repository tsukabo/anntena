<?php
/**
 * AppShell file
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 2.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('AutomaticcollectionShell', 'Console/Command');

/**
 * Application Shell
 *
 * Add your application-wide methods in the class below, your shells
 * will inherit them.
 *
 * @package       app.Console.Command
 */
/* MagpieRSS用設定*/
include_once(APP.'Vendor/magpierss/rss_fetch.inc');
define('MAGPIE_OUTPUT_ENCODING','UTF-8');//Encode
define('MAGPIE_CACHE_AGE','1800');//Cacheを残す時間

class AutomaticcollectionShell extends AppShell {

	public $uses = array('Website', 'Article');

	public function main() {
		$query = array('contain' => array('Category'),
						'order' => array('Website.id' => 'asc'));
		$sitelist = $this->Website->find('all', $query);
//var_dump($sitelist); exit;

		$rssItemsArray = array();
		$rssArray = array();
		$concatArray = array();
		$date = null;

		if(!empty($sitelist)){
			foreach ($sitelist as $no => $site) {
				//URLからRSSを取得
				$rss = @fetch_rss($site['Website']['website_rss']);
				if (!empty($rss)) {
					for ($i = 0 ; $i < count($rss->items) ; $i++) {
						//サイトのタイトルをitemsに格納
						$rss->items[$i]["site_title"] = $rss->channel["title"];
						$rss->items[$i]["site_link"] = $rss->channel["link"];
						$rss->items[$i]["category_id"] = $site['Website']['category_id'];
						$rss->items[$i]["website_id"] = $site['Website']['id'];
					}
					//itemsだけ別配列に格納
					$rssItemsArray[] = $rss->items;
				}
			}
//print_a($rssItemsArray); exit;

			//配列を統合する
			for($i = 0 ; $i < count($rssItemsArray) ; $i++) {
				$concatArray = array_merge($concatArray, $rssItemsArray[$i]);
			}

			//配列内容の編集
			foreach ($concatArray as $no => $values) {
				//RSSの種類によって日付を取得
				if(!empty($values['published'])) {
					$date = $values['published'];
				} elseif (!empty($values['created'])) {
					$date = $values['created'];
				} elseif (!empty($values['pubdate'])) {
					$date = $values['pubdate'];
				} elseif (!empty($values['dc']['date'])) {
					$date = $values['dc']['date'];
				}
				$date = date("Y-m-d H:i:s", strtotime($date));

				//Filter
				$nowtime = date("Y-m-d H:i:s", strtotime("now")); //現在時刻の取得
				if($date > $nowtime) { //未来記事の排除
				} elseif (preg_match("/AD/", $values["title"])) { //広告記事の排除（titleに「AD」が含まれる）
				} elseif (preg_match("/PR/", $values["title"])) {
				} else {
					//値の定義
					$title = $values["title"];
					$link = $values["link"];
					$site_title = $values["site_title"];
					$site_link = $values["site_link"];
					$website_id = $values["website_id"];
					$category_id = $values["category_id"];
					//画像取得
					//if(!empty($values['content'])) {
					//	$content = $values["content"]["encoded"];
					//} elseif (!empty($values['description'])) {
					//	$content = $values['description'];
					//}
					/*
					preg_match('/<img .*?src ?= ?[\'"]([^>]+)[\'"].*?>/i', $content, $img_all);
					preg_match('/http.*?(\.gif|\.png|\.jpg|\.jpeg$|\.bmp)/i', $img_all[0], $gazo);
					*/
					//記事ごとに必要な項目を抽出
					$rssArray[] = array('article_name' => $title,
										'article_url' => $link,
										'access_count' => 0,
										'website_id' => $website_id,
										'category_id' => $category_id,
										'created' => $date); //配列
				}
			}
//var_dump($rssArray); exit;

			foreach ($rssArray as $key => $value) {
//var_dump($key);
				// 登録済確認
				$query = array('contain' => array(), 'conditions' => array('article_url' => $value['article_url']));
				$tmp = $this->Article->find('list', $query);
				if (!empty($tmp)) {
					continue;
				}
//var_dump($value); exit;
				// 登録
				$this->Article->create();
				$this->Article->save($value);
			}

//var_dump($rssArray);

/*
//配列をユーザー定義関数でソート※date降順
function cmp($a, $b) {
if ($a[0] == $b[0]) return 0;
return ($a[0] > $b[0]) ? -1 : 1;
}
usort($rssArray, 'cmp');

//必要な件数分だけHTML整形
if(count($rssArray) > $num){$count=$num;}
else{$count=count($rssArray);}
for ($i=0; $i<$count; $i++) {
$date=date("m/d H:i",strtotime($rssArray[$i][0]));
$title=$rssArray[$i][1];
$link=$rssArray[$i][2];
$site_title=$rssArray[$i][3];
$site_link=$rssArray[$i][4];
$gazo=$rssArray[$i][5];
    $datelink = "<div class='date'>$date</div>";
    $titlelink = "<div class='title'><a href='$link'>$title</a></div>";
    $site_titlelink = "<div class='site_title'><a href='$site_link'>$date - [$site_title]</a></div>";
    if (empty($gazo[0])) {$gazolink = "";}//画像がないときの処理
    else{$gazolink = "<a target='_blank' href='$link'><div class='trim'><img src='$gazo[0]' alt='' /></div></a>";}
        echo "<article>$gazolink$titlelink$site_titlelink</article>";
}//--▲for--
*/

		}
	}



//$this->out("hello");


}


// /bin/sh ./app/Console/cake Automaticcollection

///bin/sh /var/www/html/anntena/app/Console/cake Automaticcollection
