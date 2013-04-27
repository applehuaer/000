<?php

class mysql{

     private $host;
     private $name;
     private $pass;
     private $table;
     private $ut;

     function __construct($host,$name,$pass,$table,$ut='UTF8'){
     	$this->host=$host;
     	$this->name=$name;
     	$this->pass=$pass;
     	$this->table=$table;
     	$this->ut=$ut;
     	$this->connect();

     }

     function connect(){
      $link=mysql_connect($this->host,$this->name,$this->pass) or die ("数据库连接失败！");
      mysql_select_db($this->table,$link) or die("没有该数据库：".$this->table);
      mysql_query("SET NAMES '$this->ut'");
     }

	function query($sql, $type = '') {
	    if(!($query = mysql_query($sql))) $this->show('Say:', $sql);
	    return $query;
	}

    function show($message = '', $sql = '') {
		if(!$sql) echo $message;
		else echo $message.'<br>'.$sql;
	}

    function affected_rows() {
		return mysql_affected_rows();
	}

	function result($query, $row) {
		return mysql_result($query, $row);
	}

	function num_rows($query) {
		return @mysql_num_rows($query);
	}

	function num_fields($query) {
		return mysql_num_fields($query);
	}

	function free_result($result) {
		return mysql_free_result($result);
	}

	function insert_id() {
		return mysql_insert_id();
	}

	function fetch_row($query) {
		return mysql_fetch_row($query);
	}
	
	function fetch_array($query) {
		return mysql_fetch_array($query);
	}

	function version() {
		return mysql_get_server_info();
	}

	function close() {
		return mysql_close();
	}


   //==============
	
	function fn_login($name,$passwd){
		$query = "SELECT * FROM `solaridc`.`solar_user` WHERE email='$name' AND password='$passwd'";
		$result = $this->query($query);
		if($this->num_rows($result)>0){
			return true;
		}
		else{
			return false;
		}
		$this->free_result($result);
		$this->close();
	}
	
	

	function fn_addusr($passwd,$email,$telephone,$lasttime){
		$query = "INSERT INTO  `solaridc`.`solar_user` (`id` ,`username` ,`password` ,`email` ,`telephone` ,`lasttime` ,`status` ,`remark1` ,`remark2`)
VALUES (NULL ,  NULL,  '$passwd', '$email',  $telephone,  $lasttime, NULL , NULL , NULL);";
		$result = $this->query($query);
		if($result){
			return true;
		}
		else{
			return false;
		}
		$this->free_result($result);
		$this->close();
	}


	
/*	function fn_addadmin($name,$pwd,$group,$status){
		$query = "INSERT INTO `host_myadmin`.`host_admin` (`id` ,`name` ,`pwd` ,`date` ,`group` ,`status`)VALUES (NULL , '$name', '$pwd', now(), '$group', '$status');";
		$result = $this->query($query);
		if($result){
			return true;
		}
		else{
			return false;
		}
		$this->free_result($result);
		$this->close();
	}
	
	function fn_addusr($name,$domain,$fmn,$fmp){
		$query = "INSERT INTO `host_myadmin`.`host_usr` (`id` ,`name` ,`pwd` , `domain`,`host_num`,`date`,`ftp_mysql_n`,`ftp_mysql_p` ,`www_size` ,`mysql_size`,`flow_size`,`status`)VALUES (NULL , '$name' , '123456' , '$domain' , 0, now() , '$fmn' , '$fmp', 1024 , 1024 , 1024 , 0);";
		$result = $this->query($query);
		if($result){
			return true;
		}
		else{
			return false;
		}
		$this->free_result($result);
		$this->close();
	}
	
	function fn_addhost($type,$ip,$status){
		$query = "INSERT INTO `host_myadmin`.`host_host` (`id` ,`type` ,`ip` ,`server` ,`status`)VALUES (NULL , '$type', '$ip', '$server', '$status');";
		$result = $this->query($query);
		if($result){
			return true;
		}
		else{
			return false;
		}
		$this->free_result($result);
		$this->close();
	}
	
	function fn_showadmin($min,$max){
		$query = "SELECT `name` , `date` , `group` , `status` FROM `host_admin` ORDER BY `date` DESC LIMIT $min , $max;";
		$result = $this->query($query);
		if($this->num_rows($result)>0){
			$a;
			while($row=$this->fetch_array($result)){	
				$a.='<tr><td>'.$row["name"].'</td><td>'.$row["date"].'</td><td>'.($row["group"]==1?'管理组':'查看组').'</td><td>'.($row["status"]==1?'使用中':'未开通').'</td><td>删除/修改</td>';	
			}
			return $a;
		}
		else{
			return false;
		}
		$this->free_result($result);
		$this->close();
	} 
	
	function fn_showusr($min,$max){
		$query = "SELECT `name` , `domain` , `date` , `host_num`,`status` FROM `host_usr` ORDER BY `date` LIMIT $min , $max;";
		$result = $this->query($query);
		if($this->num_rows($result)>0){
			$a;
			while($row=$this->fetch_array($result)){	
				$a.='<tr><td>'.$row["name"].'</td><td>'.$row["domain"].'</td><td>'.$row["date"].'</td><td>'.$row["host_num"].'</td><td>'.($row["status"]==1?'使用中':'未开通').'</td><td>删除/修改</td>';	
			}
			return $a;
		}
		else{
			return false;
		}
		$this->free_result($result);
		$this->close();
	} 
	
	function fn_showhost($min,$max){
		$query = "SELECT `type` , `ip` , `server` ,`status` FROM `host_host` ORDER BY `id` LIMIT $min , $max;";
		$result = $this->query($query);
		if($this->num_rows($result)>0){
			$a;
			while($row=$this->fetch_array($result)){	
				$a.='<tr><td>'.$row["ip"].'</td><td>'.$row["type"].'</td><td>'.$row["server"].'</td><td>'.($row["status"]==1?'使用中':'未使用').'</td><td>删除/修改</td>';	
			}
			return $a;
		}
		else{
			return false;
		}
		$this->free_result($result);
		$this->close();
	}
*/	
	
	
	/*
  	$db = new mysql($dbhost,$dbuser,$dbpwd,$dbname,$set_name);
	$return=$db->fn_showadmin(0,10);	
	if($return){
		echo $return;	
	}
	else{
		echo "<script>alert('没有查询到相关数据');</script>";
	}
  */

}
?>