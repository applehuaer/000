// JavaScript Document

var sum=0,tjN=0,cpuN=0,ncN=0,gbN=0,mbN=0;

$(document).ready(function(){
	
	$("#gbtext").val(0);
	$("#mbtext").val(0);
	slideraa('gbtext',0,2000,0,10,'choose-GB');
	slideraa('mbtext',0,200,0,1,'choose-MB');
	
	changess('1he');
	changess('5hm');
	changenum('gbtext',30);
	changenum('mbtext',2);
	$("#Month").text(84);
	$("#Year").text(840);
	
	
	$("#m-d-up a").click(
		function(){
			aparents=$(this).parents('ul').attr('id');
			aid=$(this).attr('id');
			changess(aid);
			switch(aparents){
/*----------------------test pz start------------------------*/
				case 'pz':
					//alert('pz');
					switch(aid){
						case 'JA':
						//	alert('JA');
							tjN=0;
							cpuN=0;
							//ncN=0;
							changess('1he');
							changess('5hm');
							changenum('gbtext',30);
							changenum('mbtext',2);
						break;
						case 'JB':
							tjN=153;
							cpuN=0;
							//ncN=0;
							changess('2he');
							changess('10hm');
							changenum('gbtext',50);
							changenum('mbtext',5);
						break;
						case 'BA':
							tjN=153;
							cpuN=0;
							//ncN=0;
							changess('2he');
							changess('10hm');
							changenum('gbtext',100);
							changenum('mbtext',5);
						break;
						case 'BB':
							tjN=294;
							cpuN=0;
							//ncN=0;
							changess('4he');
							changess('20hm');
							changenum('gbtext',200);
							changenum('mbtext',5);
						break;
						case 'BC':
						//	alert('JA');
							tjN=294;
							cpuN=0;
							//ncN=0;
							changess('4he');
							changess('20hm');
							changenum('gbtext',350);
							changenum('mbtext',5);
						break;
						case 'BD':
						//	alert('JA');
							tjN=394;
							cpuN=0;
							//ncN=0;
							changess('6he');
							changess('30hm');
							changenum('gbtext',500);
							changenum('mbtext',5);
						break;
						case 'BE':
						//	alert('JA');
							tjN=592;
							cpuN=0;
							//ncN=0;
							changess('12he');
							changess('60hm');
							changenum('gbtext',650);
							changenum('mbtext',5);
						break;					
						default:alert('浏览器错误，请重试！');
					}
				break;	
/*----------------------test pz end------------------------*/
/*----------------------test heixin start------------------------*/
				case 'hexin':
					//alert('pz');
					switch(aid){
						case '1he':
						//	alert('JA');
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=0;
							//ncN=0;
							changess('1he');
							changess('5hm');
						break;
						case '2he':
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=153;
							//ncN=0;
							changess('2he');
							changess('10hm');
						break;
						case '3he':
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=294;
							//ncN=0;
							changess('3he');
							changess('15hm');
						break;
						case '4he':
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=294;
							//ncN=0;
							changess('4he');
							changess('20hm');
						break;	
						case '6he':
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=394;
							//ncN=0;
							changess('6he');
							changess('30hm');
						break;
						case '8he':
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=492;
							//ncN=0;
							changess('8he');
							changess('40hm');
						break;
						case '12he':
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=592;
							//ncN=0;
							changess('12he');
							changess('60hm');
						break;				
						default:alert('浏览器错误，请重试！');
					}
				break;
/*----------------------test heixin end------------------------*/
/*----------------------test mem start------------------------*/
				case 'mem':
					//alert('pz');
					switch(aid){
						case '5hm':
						//	alert('JA');
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=0;
							//ncN=0;
							changess('1he');
							changess('5hm');
						break;
						case '10hm':
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=153;
							//ncN=0;
							changess('2he');
							changess('10hm');
						break;
						case '15hm':
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=294;
							//ncN=0;
							changess('3he');
							changess('15hm');
						break;
						case '20hm':
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=294;
							//ncN=0;
							changess('4he');
							changess('20hm');
						break;	
						case '30hm':
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=394;
							//ncN=0;
							changess('6he');
							changess('30hm');
						break;
						case '40hm':
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=492;
							//ncN=0;
							changess('8he');
							changess('40hm');
						break;
						case '60hm':
							$('#pz a').removeClass("clickon");
							tjN=0;
							cpuN=592;
							//ncN=0;
							changess('12he');
							changess('60hm');
						break;				
						default:alert('浏览器错误，请重试！');
					}
				break;
/*----------------------test mem end------------------------*/
			}
			addvalue();
		}
	);
	
});

function changess(clicka){
	ulid=$('#'+clicka).parents('ul').attr('id');
	$('#'+ulid+' a').removeClass("clickon");
	$('#'+clicka).addClass("clickon");
}

function addvalue(){

	gbN = parseInt($("#gbtext").val());
	mbN = parseInt($("#mbtext").val());	
	//alert("tjN:"+tjN+"-----cpuN:"+cpuN+"-----gbN:"+gbN+"-----mbN:"+mbN);	
	sum= 26 + tjN + cpuN + gbN*0.4 + mbN*23 ;
	$("#Month").text(sum);
	$("#Year").text(sum*10);	
	 	
}


function slideraa(idv,minv,maxv,valuev,stepv,choosev) {
	var tt=$("#"+idv);
	var  s=$("<div id='"+idv+"-slider' class='slider' ><img src='tpl/image/slider.jpg' width='550px' height='25px' /></div> ").insertAfter(tt).slider({
		min:minv,
		max:maxv,
		value:valuev,
		step:stepv,
		slide: function(e, i) {
			tt.val(i.value);
			$("#"+choosev).text(i.value);
			$('#pz a').removeClass("clickon");
			addvalue();
		}
	});	
	$("#"+idv).blur(function(){
		$('#pz a').removeClass("clickon");
		var getval=$("#"+idv).val();
		if(getval==''|| isNaN(getval)){getval=0;}
		if(minv>getval||getval>maxv){
			alert("超出了输入范围，请重新输入！");
		}else{
			getval=parseInt(parseInt(getval)/10)*10;
			s.slider( "value",getval);
			$("#"+choosev).text(getval);
			$("#"+idv).val(getval);
			addvalue();
		}
	});
}

function changenum(idv,num)
{
	$("#"+idv).val(num);
	$("#"+idv+'-slider').slider( "value",num);
	$("."+idv+'ch').text(num);
}

	

/*switch($(this).attr('id')){
				case 'JA':
					sum=+49;
					break;
				case 'JA':
					sum=+202;
					break;
				case 'JA':
					sum=+343;
					break;
				case 'JA':
					sum=+541;
					break;					
				default:
					alert('浏览器错误，请重试！');
			}*/