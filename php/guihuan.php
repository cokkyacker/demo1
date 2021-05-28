<?php
session_start();	//初始化session变量
include "../php/SqlTool.class.php";	//包含数据库文件
$furl=getenv("HTTP_REFERER");		//获取IP
header("Content-type:text/html;charset=utf-8");

//if (isset($_POST["submit"])) {
$id = $_GET['mid'];

date_default_timezone_set ( 'Asia/Chongqing' );
$time=date ( "Y-m-d H-i-s" );

$query="select * from equipmentlease where id=".$id."";
//echo $query;
$result=mysql_query($query);
$myrow=mysql_fetch_array($result);
$equipment_id = $myrow['equipment_id'];
$number = $myrow['number'];
$state = "已还";
//$query3 = "update equipmentlease set state='$state', btime=''$time'' where id=".$id." ";
$query3 = "update equipmentlease set state='$state' where id=".$id." ";

//$query = "update equipmentlease set state='$state' where id='$id' ";

$result3 = mysql_query($query3);
//echo $query3;
//echo $result3;

$query1="select * from equipment where id=".$equipment_id."";
//echo $query1;
$result1=mysql_query($query1);
$myrow1=mysql_fetch_array($result1);
$number1 =  $myrow1['number']+$number;
//echo $myrow1['number'],$number;

$query2 = "update equipment set number='$number1' where id='$equipment_id' ";
//echo $query2;
//echo $query;
// $quer = "select * from equipment where number='$number'";
$result = mysql_query($query2);
//echo $result;

if (!$result) {
    echo "修改失败";
} else {
    echo "修改成功";
    header("refresh:0;url=../woyaohuan.php");
    // }

}
?>