<?php
require_once './config/db.config.php';
require_once './includes/mysql_class.php';
if(isset($_COOKIE['name'])&&$_COOKIE['pass']!=''){
	$db = new mysql($dbhost,$dbuser,$dbpwd,$dbname,$set_name);
	$return=$db->fn_login($_COOKIE['name'],$_COOKIE['pass']);
	if($return){
		include"./tpl/header_in.html";
	}else{
		include"./tpl/header.html";
	}
}else{
		include"./tpl/header.html";
	}

?>