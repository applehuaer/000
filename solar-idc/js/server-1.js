// JavaScript Document
$(document).ready(function(){
	$(".a1 dl:even,.a2 dl:even,.b1 dl:even,.b2 dl:even,.m1 dl:even,.h1 dl:even").css("background","#FFFFCC");
	$(".product-box").hover(function(){
		$(".product-box h3").css({"background":"","color":""});
		$(".product-box").css({"border-color":""});
		$(this).children(".product-box h3").css({"background":"#8AC77A","color":"#fff"});
		$(this).css({"border-color":"#066"});
	});

});
