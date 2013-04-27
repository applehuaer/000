<?php
setcookie('name','',time()-3600);
echo "<script>alert('退出登录！');location.href='./index.php';</script>";

?>