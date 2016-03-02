<?php 
	error_reporting(0);
	require_once('php/connect.php');
	$sql = "select * from article";
	//$sql = "select * from article order by dateline desc";
	$query = mysql_query($sql);
	if($query&&mysql_num_rows($query)){
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
body {
  font: 12px Arial, sans-serif;
}
.header{
	height:63px;
	width:100%;
	background-color:#000000;
}
.clear, article.post:after {
  clear: both;
  content: '';
  display: block;
}

article.post {
  border-bottom: 1px dotted #b4b4b4;
  margin-bottom: 10px;
  padding-bottom: 10px;
}
article.post:last-of-type {
  border-bottom: 0;
  padding-bottom: 0;
}
article.post img {
  float: left;
  margin-left: -110px;
  width: 100px;
}
article.post h1 {
  font-size: 16px;
  font-weight: normal;
  margin: 0;
}
article.post a {
  color: #dc4e00;
  text-decoration: none;
}
article.post time {
  display: block;
  font-size: 11px;
  font-weight: bold;
}
</style>
</head>

<body>
<div class="header"></div>
	<?php
		if(empty($data)){	
			echo "当前没有文章，请管理员在后台添加文章";
		}else{
			foreach($data as $value){
	?>
		
    
<article class="post">

  <h1><?php echo $value['title']?></h1>
  <p><?php echo $value['description']?></p>
  
</article><a href="article.php?id=<?php echo $value['id']?>" class="more">aaaaa</a>
<?php
			}
		}
	?>
</body>
</html>
