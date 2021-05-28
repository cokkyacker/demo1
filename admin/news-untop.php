<?php
session_start();	//初始化session变量
include "../php/SqlTool.class.php";	//包含数据库文件
$furl=getenv("HTTP_REFERER");		//获取IP
$mid = $_GET["mid"];//获得该条留言的id


//取消置顶
$query = "update notice set toppingstate='未置顶',IsOpen='0' where nid='$mid'and IsOpen!='0' ";

$result = mysql_query($query);
if (!$result) {
    echo "取消置顶失败";
} else {
    echo "取消置顶成功";
    header("refresh:0;url=news.php");
}



?>

