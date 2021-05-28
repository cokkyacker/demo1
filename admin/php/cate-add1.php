<?php
session_start();
header("Content-type:text/html;charset=utf-8");
include("../../php/SqlTool.class.php");
$design = $_POST['design'];
$number = $_POST['number'];
$state = $_POST['state'];
$model = $_POST['model'];
$guige = $_POST['guige'];
$price = $_POST['price'];
$changjia = $_POST['changjia'];
$chuchanghao = $_POST['chuchanghao'];
$local = $_POST['local'];
$beizhu = $_POST['beizhu'];

date_default_timezone_set ( 'Asia/Chongqing' );
$time=date ( "Y-m-d H-i-s" );
$s = 1;
//
if($design==""|| $number=="" || $state=="" || $model == ""
   || $guige == "" || $price == "" || $changjia == "" || $chuchanghao=="" || $local=="" ){
   echo "<script>alert('11');  window.history.go(-1);</script>";
}else {
    $query = "insert into equipment(name,state,remarks,model,specs,place,admin_id,time,price,factory,factorynumber,number)
        values('$design','$state','$beizhu','$model','$guige','$local','$s','$time','$price','$changjia','$chuchanghao','$number')";
    if(mysql_query($query)){
        echo "<script>alert('添加成功！');window.location.href='../cate.php'</script>";
       // mysqli_close($conn);
       // echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";=
    } else {

       // echo "<font class='#ff0000'>添加失败!!!</font>";
        echo "<script>alert('添加失败');  window.history.go(-1);</script>";
        echo mysql_error();
        //  echo "<script>alert('添加成功！');window.location.href='A_toknow.php'</script>";
    }
}




?>

