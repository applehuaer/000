<?php include"./tpl/head_w.html";?>
<link href="./tpl/js/register.css" rel="stylesheet">
<?php include"./tpl/header.html";?>

<div id="main">   <!--   main开始   -->  <!--  main   -->
	<div>
        <img src="./tpl/image/greenbar.png" />
    </div>
    <div class="okbar">
        <img class="stepok" src="./tpl/image/jindutiao1.png" /><img class="stepno" src="./tpl/image/jindutiao2.png" /><img src="./tpl/image/jindutiao3.png" />
    </div>
    <div class="registerbox">   
   	  <div class="rinfo">  
            <dl>
                <dt><img class="img1" src="./tpl/image/youjian.png" /><span class="star">*</span>电子邮箱：</dt>
                <dd><input type="text" /></dd>
            </dl>
            <dl>
                <dt><span class="star">*</span>登录密码：</dt>
                <dd><input type="text" /></dd>
            </dl>
            <dl>
                <dt><span class="star">*</span>确认登录密码：</dt>
                <dd><input type="text" /></dd>
            </dl>
            <dl>
            	<dt><img class="img2" src="./tpl/image/shouji.png" /><span class="star">*</span>手机号码：</dt>
                <dd><input type="text" /></dd>
            </dl>
            <button class="okbutton">注册</button>
        </div>
        <div class="rmessage">
        	<p>
            	注册成功，即享特权：<br /><br />
                1、提前得到最优惠的促销信息，<br />
                &nbsp;&nbsp;&nbsp;我们将会以手机短信的形式。<br /><br />
                2、免费使用主机，等服务。
            </p>
        </div>
    </div>
    
</div>
    
<?php include"./tpl/footer.html";?>