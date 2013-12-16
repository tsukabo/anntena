-- �L���f�[�^
--DROP TABLE articles; --�L���f�[�^
CREATE TABLE articles( --�L���f�[�^

id SERIAL, --ID�@:�@
article_name TEXT, --�L�����@:�@
article_url TEXT, --�L��URL�@:�@
access_count INT, --�A�N�Z�X���@:�@
website_id INT, --WEB�T�C�gID�@:�@
category_id INT, --�J�e�S��ID�@:�@
delete_flg BOOL DEFAULT 'FALSE', --�폜�t���O�@:�@�_���폜����
deleted TIMESTAMP, --�폜�����@:�@
created TIMESTAMP NOT NULL, --�o�^�����@:�@
modified TIMESTAMP NOT NULL, --�X�V�����@:�@
PRIMARY KEY(id));




-- WEB�T�C�g�}�X�^
--DROP TABLE websites; --WEB�T�C�g�}�X�^
CREATE TABLE websites( --WEB�T�C�g�}�X�^

id SERIAL, --ID�@:�@
category_id INT, --�J�e�S��ID�@:�@
website_name TEXT, --�T�C�g���@:�@
website_url TEXT, --�T�C�gURL�@:�@
website_rss TEXT, --�T�C�gRSS�@:�@
delete_flg BOOL DEFAULT 'FALSE', --�폜�t���O�@:�@�_���폜����
deleted TIMESTAMP, --�폜�����@:�@
created TIMESTAMP NOT NULL, --�o�^�����@:�@
modified TIMESTAMP NOT NULL, --�X�V�����@:�@
PRIMARY KEY(id));




-- �J�e�S���}�X�^
--DROP TABLE categories; --�J�e�S���}�X�^
CREATE TABLE categories( --�J�e�S���}�X�^

id SERIAL, --ID�@:�@
category_name TEXT, --�J�e�S�����@:�@
delete_flg BOOL DEFAULT 'FALSE', --�폜�t���O�@:�@�_���폜����
deleted TIMESTAMP, --�폜�����@:�@
created TIMESTAMP NOT NULL, --�o�^�����@:�@
modified TIMESTAMP NOT NULL, --�X�V�����@:�@
PRIMARY KEY(id));




