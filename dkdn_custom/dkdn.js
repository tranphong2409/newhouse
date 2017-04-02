$(function() {
	$(".capcha_img").click(function() {$('.img_capcha').attr("src","dkdn_custom/captcha.php");});
	$("#accountInfo label.error").click(function(event) {$(this).fadeOut();});
	
});