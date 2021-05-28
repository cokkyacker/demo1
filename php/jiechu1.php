<?php
session_start();
header("Content-type:text/html;charset=utf-8");
include("../php/SqlTool.class.php");
$equipment_id = $_GET['id'];
//$equipment_id =6;
$btime = $_POST['time'];
$number = $_POST['number'];
$remarks =  $_POST['remarks'];
if(isset($_SESSION['Tname'])){
    $teacher_id = $_SESSION['Tname'];
}else{
    echo "请先登录,才可以访问页面!!";
    echo "<meta http-equiv=\"Refresh\" content=\"2;url=../TeacherLogin.html\">";
}
date_default_timezone_set ( 'Asia/Chongqing' );
$time=date ( "Y-m-d H-i-s" );
//
$query="select * from equipment where id=".$equipment_id."";
$result=mysql_query($query);
$myrow=mysql_fetch_array($result);
$admin_id = $myrow['admin_id'];
if($myrow['number']>=$number) {
    $query = "insert into equipmentlease(state,time,btime,equipment_id,teacher_id,admin_id,remark,number)
        values('审核中','$time','$btime','$equipment_id','$teacher_id','$admin_id','$remarks','$number')";
    $number = $myrow['number'] - $number;
    $query1 = "update equipment set number='$number' where id='$equipment_id' ";
    $result = mysql_query($query1);
    echo  $query1;
    echo  $query;
    if (mysql_query($query)) {
        echo "<script>alert('添加成功！');window.location.href='../jhqk1.php'</script>";
        // mysqli_close($conn);
        // echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";=
    } else {
        // echo "<font class='#ff0000'>添加失败!!!</font>";
      //  echo "<script>alert('添加失败'); window.history.go(-1); </script>";
        echo mysql_error();
        //  echo "<script>alert('添加成功！');window.location.href='A_toknow.php'</script>";
    }
}else{
    //echo "<script>alert('数量已超'); window.history.go(-1); </script>";
}
?>