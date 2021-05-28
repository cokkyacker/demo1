<?php
header("Content-type:text/html;charset=utf-8");
session_start();	//初始化session变量
include "../php/SqlTool.class.php";	//包含数据库文件
$furl=getenv("HTTP_REFERER");		//获取IP

$id = $_GET['mid'];
$state = "审核未通过";
// 更新数据
$query = "update equipmentlease set state='$state' where id='$id' ";

//向数据库插入表单传来的值的sql
$result = mysql_query($query);

if (!$result) {
    //die('Error: ' . mysql_error($furl));//如果sql执行失败输出错误
    echo "失败";
} else {
    echo "审核结束";
    header("refresh:0;url=order-list.php");
}

?>
