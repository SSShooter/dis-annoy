// JavaScript Document
if(localStorage.task_counter){
	$("#task_box").empty();
	for(var i=0;i<=localStorage.task_counter;i++){
		 $("#task_box").append('<div id="setp"><i class="fa fa-check-square-o fa-2x" ></i><span>'+ localStorage["task"+i] +'</span></div>');
	}
	$("#revise,#sub,#add").toggle();//不要整天把toggle写在循环里啊shabi
}
	$("#add").click(function(){//添加
		var addcontent = "<div id='set'><input id='task' type='text'/><i class='fa fa-trash fa-2x' id='del'></i></div>";
		$("#task_box").append(addcontent);	
	});
	$("#sub").click(function(){//提交
		$("input").each(function(){
			if(!$(this).val()){
				localStorage.cempty = 1;
				return false;}
			});
		if(localStorage.cempty == 1){//检查是否有空的输入框
			alert_message();
			localStorage.cempty = 0;}
		else{
		if(!$("input").length){localStorage.setItem("task_counter",-1);}
		 $("input").each(function(i){
			 localStorage.setItem("task"+i,$(this).val());
			 $("#task_box").append('<div id="setp"><i class="fa fa-check-square-o fa-2x" ></i><span>'+ localStorage["task"+i] +'</span></div>');
			 $(this).parent().remove();
			 localStorage.setItem("task_counter",i);
		 });
		 $("#revise,#sub,#add").toggle();
		}
	});
	
	$("#revise").click(function(){//修改
		 $("#setp>span").each(function(i){
			$("#task_box").append('<div id="set"><input name="task" id="task" type="text" value="'+ $(this).text() +'"/><i class="fa fa-trash fa-2x" id="del"></i></div>');
			$(this).parent().remove();
		});
		$("#revise,#sub,#add").toggle();
	});
	$(document).on("click", "#del", function(){ //解决append的按钮无法触发事件的问题
		$(this).parent().remove();
	});
	
	$("#close").click(function(){
		$("#task_manage").fadeToggle();
		window.location.reload();
	});
	
	$("#list").click(function(){
		$("#task_manage").fadeToggle();
	});
	