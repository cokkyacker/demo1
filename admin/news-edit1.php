<?php
session_start();	//初始化session变量
include "../php/SqlTool.class.php";	//包含数据库文件
$furl=getenv("HTTP_REFERER");		//获取IP

//if (isset($_POST["submit"])) {
$nid = $_GET['nid'];
$ntitle = $_POST['biaoti'];//标题
$ncontent = $_POST['neirong'];//内容

$s = $_POST['bianhao'];//管理员编号

date_default_timezone_set ( 'Asia/Chongqing' );
$time=date ( "Y-m-d H-i-s" );



$query = "update notice set ntitle='$ntitle',ncontent='$ncontent',ntime='$time',admin_id='$s' where nid='$nid' ";
//echo $query;
// $quer = "select * from equipment where number='$number'";
$result = mysql_query($query);
if (!$result) {
    echo "修改失败";
} else {
    echo "修改成功";
    header("refresh:0;url=news.php");
    // }

}
?>