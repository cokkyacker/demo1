<?php
session_start();
header("Content-type:text/html;charset=utf-8");
include("../../php/SqlTool.class.php");
$biaoti = $_POST['biaoti'];//标题
$neirong = $_POST['neirong'];//内容
$s = $_POST['bianhao'];//管理员编号

date_default_timezone_set ( 'Asia/Chongqing' );
$time=date ( "Y-m-d H-i-s" );


//标题、内容、时间、管理员编号
if($biaoti==""|| $neirong==""|| $s==""){
    echo "<script>alert('11');  window.history.go(-1);</script>";
}else {
    $query = "insert into notice(ntitle,ncontent,ntime,admin_id)
        values('$biaoti','$neirong','$time','$s')";
    if(mysql_query($query)){
        echo "<script>alert('添加成功！');window.location.href='../news.php'</script>";
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

