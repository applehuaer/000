<?php
require_once './config/db.config.php';

$sqldatabase='CREATE DATABASE  `'.$dbname.'` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;';
$sqltable='CREATE TABLE IF NOT EXISTS  `solaridc`.`solar_user` (
`id` SMALLINT( 5 ) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`username` VARCHAR( 50 ) NULL ,
`password` CHAR( 32 ) NOT NULL ,
`email` VARCHAR( 50 ) NOT NULL ,
`telephone` INT( 11 ) NOT NULL ,
`lasttime` INT( 11 ) NOT NULL ,
`status` BOOL NULL ,
`remark1` INT( 11 ) NULL ,
`remark2` INT( 11 ) NULL
) ENGINE = INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;';

$link=mysql_connect($dbhost,$dbuser,$dbpwd) or die ("数据库连接失败！");
mysql_query($sqldatabase) or die(mysql_error()."不能创建数据库");
$select=mysql_select_db($dbname,$link);
mysql_query($sqltable) or die(mysql_error().'不能创建表格');

echo '表格创建成功';

?>