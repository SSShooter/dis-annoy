<?php
/*
* 配置连接数据库信息
*/
require_once('connect.php');
//打开数据库连接
//$db=mysqli_connect($host,$user,$password,$database);
//判断连接是否成功
if($db){
        $db->query("set names utf8");//设置UTF-8编码(JSON的唯一编码)
}else{
        echo 'DATABASE_CONNECTION_DIE';//数据库连接失败
        exit;
}
//sql查询语句
$sql = "select * from anxiety";
$result=$db->query($sql);
while($row=$result->fetch_assoc()){
        $person_info[]=$row;//将取得的所有数据赋值给person_info数组
}
echo json_encode($person_info);//输出JSON
?>