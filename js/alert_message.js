// JavaScript Document
function alert_message(){
	var alert_message=$('<div id="alert" class="center"><div class="center"><nobr><i class="fa fa-warning fa-1x" ></i>&nbsp;<span>内容空</span></nobr></div></div>');
	$("body:first").after(alert_message.fadeIn(800).fadeOut(800));
}

$("#close").click(function(){
		$(this).parent().fadeToggle();
	});
	
function alert_custom(message){
	var alert_message=$('<div id="alert" class="center"><div class="center"><nobr><i class="fa fa-warning fa-1x" ></i>&nbsp;<span>'+message+'</span></nobr></div></div>');
	$("body:first").after(alert_message.fadeIn(800).fadeOut(800));
}