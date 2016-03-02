<?php
/*
* 配置连接数据库信息
*/
header('content-type:application:json;charset=utf8');  
header('Access-Control-Allow-Origin:*');  
header('Access-Control-Allow-Methods:POST');  
header('Access-Control-Allow-Headers:x-requested-with,content-type');  

$host='qdm162984309.my3w.com';//主机
$user='qdm162984309';//数据库账号
$password='1365249622skhm';//数据库密码
$database='qdm162984309_db';//数据库名
//打开数据库连接
$db=mysqli_connect($host,$user,$password,$database);
//判断连接是否成功
if($db){
        $db->query("set names utf8");//设置UTF-8编码(JSON的唯一编码)
}else{
        echo 'DATABASE_CONNECTION_DIE';//数据库连接失败
        exit;
}
//sql查询语句
$id = intval($_REQUEST['id']);
$form = strval($_REQUEST['form']);
//$sql = "select * from article where id='1'";
$sql = "select * from $form where id=$id";
$result=$db->query($sql);
while($row=$result->fetch_assoc()){
        $person_info[]=$row;//将取得的所有数据赋值给person_info数组
}
echo json_encode($person_info);//输出JSON
?>