-- 記事データ
--DROP TABLE articles; --記事データ
CREATE TABLE articles( --記事データ

id SERIAL, --ID　:　
article_name TEXT, --記事名　:　
article_url TEXT, --記事URL　:　
access_count INT, --アクセス数　:　
website_id INT, --WEBサイトID　:　
category_id INT, --カテゴリID　:　
delete_flg BOOL DEFAULT 'FALSE', --削除フラグ　:　論理削除制御
deleted TIMESTAMP, --削除日時　:　
created TIMESTAMP NOT NULL, --登録日時　:　
modified TIMESTAMP NOT NULL, --更新日時　:　
PRIMARY KEY(id));




-- WEBサイトマスタ
--DROP TABLE websites; --WEBサイトマスタ
CREATE TABLE websites( --WEBサイトマスタ

id SERIAL, --ID　:　
category_id INT, --カテゴリID　:　
website_name TEXT, --サイト名　:　
website_url TEXT, --サイトURL　:　
website_rss TEXT, --サイトRSS　:　
delete_flg BOOL DEFAULT 'FALSE', --削除フラグ　:　論理削除制御
deleted TIMESTAMP, --削除日時　:　
created TIMESTAMP NOT NULL, --登録日時　:　
modified TIMESTAMP NOT NULL, --更新日時　:　
PRIMARY KEY(id));




-- カテゴリマスタ
--DROP TABLE categories; --カテゴリマスタ
CREATE TABLE categories( --カテゴリマスタ

id SERIAL, --ID　:　
category_name TEXT, --カテゴリ名　:　
delete_flg BOOL DEFAULT 'FALSE', --削除フラグ　:　論理削除制御
deleted TIMESTAMP, --削除日時　:　
created TIMESTAMP NOT NULL, --登録日時　:　
modified TIMESTAMP NOT NULL, --更新日時　:　
PRIMARY KEY(id));




