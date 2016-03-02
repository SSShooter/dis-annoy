<?php
	require_once('connect.php');
	//把传递过来的信息入库,在入库之前对所有的信息进行校验。
	
	/*if(!(isset($_POST['reason1'])&&(!empty($_POST['reason1'])))){
		echo "<script>alert('标题不能为空');window.location.href='article.add.php';</script>";
	}*/
	
	$reason1 = $_POST['reason1'];
	$reason2 = $_POST['reason2'];
	$reason3 = $_POST['reason3'];
	$reason4 = $_POST['reason4'];
	$reason5 = $_POST['reason5'];
	//$reason5 =  time();
	$insertsql = "insert into reason(reason1,reason2,reason3,reason4,reason5) values('$reason1', '$reason2', '$reason3', '$reason4', '$reason5')";
	if(mysql_query($insertsql)){
		echo "<script>alert('发布文章成功');window.location.href='../soluorrea.html';</script>";
	}else{
		echo "<script>alert('发布失败');window.location.href='../soluorrea.html';</script>";
	}
?>