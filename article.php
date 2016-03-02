<?php 
	error_reporting(0);
	require_once('php/connect.php');
	//require_once('http://time-record.net/connect.php');
	$id = intval($_GET['id']);
	$sql = "select * from article where id=$id";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		$row = mysql_fetch_assoc($query);
	}else{
		echo "这篇文章不存在";
		exit;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="js/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css"/>
<style>
body,html{
	margin:0;
	width:100%;
	height:100%;
	}
#container{
	width:75%;
	overflow:auto;
	margin:auto;
}
pre {
	white-space: pre-wrap;
	word-wrap: break-word;
	font-family: "微软雅黑 Light";
	font-size: medium;
}
#title{
	font-weight: bold;
	font-size: xx-large;
	font-family: "微软雅黑 Light";
}

</style>
</head>

<body>

<div id="container">
<p>类型</p>
<p id="title">biaoti标题title<?php echo $row['title']?></p>
<p id="via">via xxxxxxx</p>
<HR width="80%" color=#987cb9 SIZE=1>
<pre id="content"><?php echo $row['content']?>著作权归作者所有。
商业转载请联系作者获得授权，非商业转载请注明出处。
作者：王诺诺
链接：https://www.zhihu.com/question/22867272/answer/23082874
来源：知乎

update（更新部分可以跳过哦）看到恋爱达人 @刘念 也答这道题目了。我感触良多。我觉得他的观点是蛮实用的——only for poor guys who know nothing about relationship and may have nothing to lose...大家见过河豚嘛？就是非常好吃的那种。当河豚遇到危险会有一系列的应激反应。会涨成一个圆鼓鼓的小球球。因为小家伙本身没攻击力，只能依靠bluff了。
你听说过鲨鱼涨成一个球吗？它不需要。有时候和男孩子聊天，发现他们个个都那么牛，牛得上知天文下知地理，牛得让人睁不开眼睛。大多数姑娘心里也许会噗嗤一笑：哎，真是令人捉急的小河豚那。但姑娘和小伙子最后也许还是在一起了。不是因为小伙子吹的牛，也不是因为小伙子真的牛，而是小伙子有一颗真诚的心。我的答案求走心，是希望在互相尊重的基础上人和人能有心上的沟通，狗哥的答案是走技术。但聊天不止于男女之间。哈哈可能恋爱达人的答案适用于某些男孩子吧。我还是更喜欢我的喵。
背答案再把咀嚼消化后的东西吐出来么……目的性太强了点小low呢……希望喜欢的人还是能把自己的想法和经历告诉我，再蠢的想法，再无聊的故事也请告诉我吧。因为生活本来就没那么牛逼闪闪，你我都只是想要有人用心来分享蠢故事罢了。以下更新前正文</pre>
</div>
</body>
</html>
