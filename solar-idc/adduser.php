<?php
//if (!defined('INSIDE')) exit();
require_once './config/db.config.php';
require_once './includes/mysql_class.php';


if(isset($_POST['submit']) && $_POST['pass1']!='' && $_POST['email']!='' && $_POST['telephone']!=''){
	
	if($_POST['pass1']==$_POST['pass2']){
		$pass=md5($_POST['pass1']);
	}else{
		echo "<script>alert('再次输入密码不符合！');history.go(-1);</script>"; 
	}
	$time = time();
	$db = new mysql($dbhost,$dbuser,$dbpwd,$dbname,$set_name);
	
	$return=$db->fn_addusr($pass,$_POST['email'],$_POST['telephone'],$time);

	if($return){
		
/*		echo "<script>alert('ok');</script>";
*/		echo "ok";
	}
	else{
/*		echo "<script>alert('no');</script>";
*/		echo "no";
	}

}
else{
	echo "<script>alert('浏览器错误！');history.go(-1);</script>"; 

}

?>