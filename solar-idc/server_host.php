<?php include"./tpl/head_b.html";?>
<link href="./tpl/js/homeb.css" rel="stylesheet">
<link href="./tpl/js/server_host.css" rel="stylesheet">
<link href="./tpl/js/jquery-ui-1.10.2.custom/css/ui-lightness/jquery-ui-1.10.2.custom.css" rel="stylesheet">
<script src="./tpl/js/jquery-ui-1.10.2.custom/js/jquery-1.9.1.js"></script>
<script src="./tpl/js/jquery-ui-1.10.2.custom/js/jquery-ui-1.10.2.custom.js"></script>
<script src="./tpl/js/server_host.js" type="text/javascript"></script>
<?php include"./tpl/header.html";?>

<div id="main">
		<div id="main-z-down">
        
			<div id="m-d-up">
				<ul id="pz">
					<span><img src="tpl/image/tuijianpeizhi.jpg" alt="推荐配置：" /></span>
					<li class="clickbox"><a class="clickon" id="JA" href="#">经济A型</a></li>
					<li class="clickbox"><a id="JB" href="#">经济B型</a></li>
					<li class="clickbox"><a id="BA" href="#">标准A型</a></li>
					<li class="clickbox"><a id="BB" href="#">标准B型</a></li>
					<li class="clickbox"><a id="BC" href="#">标准C型</a></li>
					<li class="clickbox"><a id="BD" href="#">标准D型</a></li>
					<li class="clickbox"><a id="BE" href="#">标准E型</a></li>
					
				</ul>
			
				<ul id="hexin">
					<span ><img src="tpl/image/CPU.jpg" alt="CPU" /></span>
					<li class="clickbox"><a id="1he" href="#">1核</a></li>
                    <li class="clickbox"><a id="2he" href="#">2核</a></li>
                    <li class="clickbox"><a id="3he" href="#">3核</a></li>
                    <li class="clickbox"><a id="4he" href="#">4核</a></li>
                    <li class="clickbox"><a id="6he" href="#">6核</a></li>
                    <li class="clickbox"><a id="8he" href="#">8核</a></li>
                    <li class="clickbox"><a id="12he" href="#">12核</a></li>
					
					
				</ul>
			
				<ul id="mem">
					<span><img src="tpl/image/nc.jpg" alt="内存" /></span>
					<li class="clickbox"><a id="5hm" href="#">512MB</a></li>
                    <li class="clickbox"><a id="10hm" href="#">1GB</a></li>
                    <li class="clickbox"><a id="15hm" href="#">1.5GB</a></li>
                    <li class="clickbox"><a id="20hm" href="#">2GB</a></li>
                    <li class="clickbox"><a id="30hm" href="#">3GB</a></li>
                    <li class="clickbox ndnc"><a id="40hm" href="#">4GB</a></li>
                    <li class="clickbox ndnc"><a id="60hm" href="#">6GB</a></li>
                    
					
					
				</ul>
            </div>
			<br />
			<div class="duiqi" ><img src="tpl/image/xtp.jpg" alt="系统盘：免费赠送（linux送20GB，windows送40GB）" /></div>
				
			<div class="m-d-slider">
					
				<span><img src="tpl/image/sjp.jpg" alt="数据盘：" /></span> 
				<ul>
					<li class="youdui">
                        <input type="text" value="0" id="gbtext"/>
					</li>
					<li class="danwei">GB</li>
				</ul>
				<div class="m-d-data" >
				<table >
					<tr>
						<td class="tdf">0G</td>
						<td class="tdf">500G</td>
						<td class="tdf">1000G</td>
						<td class="tde"> 2000G</td>
					</tr>
					
				</table>		
				</div>  <!--m-d-data-->	
				<div class="duiqi1">
                	<img src="tpl/image/dqxz.jpg" alt="当前选择：" />	&nbsp;<strong id="choose-GB" class="gbtextch">0</strong>&nbsp;<img src="tpl/image/dqxzGB.jpg" alt="GB（以10GB为步长增加）" />
                </div>
					
			</div>  <!--m-d-slider-->
				
			<div class="m-d-slider">
					
				<span><img src="tpl/image/kd.jpg" alt="宽带：" /></span> 
				<ul>
						<li class="youdui">
							<input type="text" name="  "  value="0" id="mbtext"/>
                        </li>
						<li class="danwei">Mbps</li>
					</ul>	
				<div class="m-d-data " >
					<table>
						<tr>
							<td class="tdf">0M</td>
							<td class="tdf">50M</td>
							<td class="tdf">100M</td>
							<td class="tde">200M</td>
						</tr>
					
					</table>	
					</div>  <!--   m-d-data  -->
				<div class="duiqi1">
                        <img src="tpl/image/dqxz.jpg" alt="当前选择：" />&nbsp;<strong id="choose-MB" class="mbtextch">0</strong>&nbsp;<img src="tpl/image/dqxzMB.jpg" alt="MBSP（以1为步长增加）" /></div>
			</div>  <!--  m-d-slider  -->
				
			<div class="m-d-slider">
					
				<span><img src="tpl/image/czxt.jpg" alt="操作系统" /></span> 
				<ul>
					<li class="caozuo">
					<select>
						  <option> linux</option>					
					</select>
					
					</li>
					<li class="danwei2"> <a href="#">教我选择</a></li>
						
				</ul>
                <br />
				<div class="duiqi1">
                   	<img src="tpl/image/bz.jpg" alt="为了保证良好的性能体验，512M内存不提供windows操作系统。" />
                </div>
            </div>
            
			<div class="m-d-slider">
				<dl>
					<dd><img src="tpl/image/jsjg.jpg" alt="计算结果" /></dd>
					<dd > &nbsp;&nbsp;<strong id="Month"  style="color:#f6a129; font-size:20px;">0</strong>&nbsp;&nbsp;<img src="tpl/image/yuanpermonth.jpg" alt="元/月" /></dd>
					<dd>&nbsp;&nbsp;<strong id="Year"  style="color:#f6a129; font-size:20px;">0</strong>&nbsp;&nbsp;<img src="tpl/image/yuanperyear.jpg" alt="元/年" /> </dd>
					<dd >&nbsp;&nbsp; <a href="#" style="color:#0777f4"><img src="tpl/image/gmpz.jpg" alt="购买这个配置" /></a></dd>
				</dl>
			</div> <!--m-d-slider-->
			
		</div>
	
	
	</div>
    
<?php include"./tpl/footer.html";?>