<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'	=> 'mysql',	//数据库类型
	'DB_HOST'	=> 'localhost',	//服务器地址
	'DB_NAME'	=> 'py1700017',	//数据库名
	'DB_USER'	=> 'py1700017',	//用户名
	'DB_PWD'	=> 'pass123456',	//密码
	'DB_PROT'	=> 3306,	//端口
	'DB_PREFIX'	=> 'tyweb_',	//表前缀
	'MODULE_ALLOW_LIST'	=> array('Home','Admin'),
	'TMPL_PARSE_STRING'	=>array(
		"__UPLOAD__"	=>"Uploads/",
		),
	'URL_ROUTE_RULES'       =>  array(
		'news/:id\d'=>'News/read',
		),
);