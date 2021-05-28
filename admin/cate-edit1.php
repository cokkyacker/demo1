<?php
session_start();	//初始化session变量
include "../php/SqlTool.class.php";	//包含数据库文件
$furl=getenv("HTTP_REFERER");		//获取IP

//if (isset($_POST["submit"])) {
    $id = $_GET['id'];
    $name=$_POST['design'];
    $number = $_POST['number'];
    $state = $_POST['state'];
    $model = $_POST['model'];
    $specs = $_POST['guige'];
    $price = $_POST['price'];
    $factory = $_POST['changjia'];
    $factorynumber = $_POST['chuchanghao'];
    $place = $_POST['local'];
    $remarks = $_POST['beizhu'];


    $query = "update equipment set name='$name',number='$number',state='$state',model='$model',specs='$specs',price='$price',factory='$factory',factorynumber='$factorynumber',place='$place', remarks='$remarks' where id='$id' ";
  //echo $query;
   // $quer = "select * from equipment where number='$number'";
    $result = mysql_query($query);
    if (!$result) {
        echo "修改失败";
    } else {
        echo "修改成功";
        header("refresh:0;url=cate.php");
   // }

}
?>