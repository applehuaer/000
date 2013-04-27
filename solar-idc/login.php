<?php
require_once './config/db.config.php';
require_once './includes/mysql_class.php';
if(isset($_POST['email'])&&$_POST['passwd']!=''){
	$db = new mysql($dbhost,$dbuser,$dbpwd,$dbname,$set_name);
	$return=$db->fn_login($_POST['email'],md5($_POST['passwd']));
	if($return){
		setcookie('name',$_POST['email']);
		setcookie('pass',md5($_POST['passwd']));
		echo "<script>location.href='./index.php'</script>";
	}else{
		echo "<script>alert('邮箱或密码输入错误，请重新输入！');</script>";
	}

}

?>
<?php include"./tpl/head_w.html";?>
<link href="./tpl/js/login.css" rel="stylesheet">
<?php include"./checklogin.php";?>

<div id="main">   <!--   main开始   -->  <!--  main   -->
    <form action="#" method="post" id="login">
        <input id="input1" name="email" type="text" />
        <br />
        <input id="input2" name="passwd" type="password"/>
        <a class="bluea in1" href="tencent://message/?uin=1798086145&amp;Site=www.solar-idc.com&amp;Menu=yes">忘记密码？</a>
        <br />
        <input class="bluea in2" type="submit" value="登陆" />
        <a class="bluea in3" href="./register.php">免费注册</a>
    </form>

</div>
    
<?php include"./tpl/footer.html";?>