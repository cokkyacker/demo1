<?php
session_start();	//初始化session变量
include "SqlTool.class.php";	//包含数据库文件
$furl=getenv("HTTP_REFERER");		//获取IP
$time=date("Y")."-".date("m")."-".date("d");
if(isset($_POST['xiugai'])) {        //对提交按钮进行判断
    $number = $_GET['number'];
    $oldpass = $_POST['oldpwd'];
    $pass = $_POST['pwd'];
    $repass = $_POST['pwd1'];
    //$passwords=md5($password);
    $query = "select number from student where number='".$number."' and password='".$oldpass."'";
    $result = mysql_query($query, $id);
    if ($result) {
        if (mysql_num_rows($result) != 0) {
            if($pass==$repass){
                $query1 = "update student set password='$pass' where number='$number' ";
                if (mysql_query($query1)) {
                    echo "<font color=red> </font>学生密码修改成功！";
                    echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
                } else {
                    echo "<font class='#ff0000'>修改失败!!!</font>";
                    echo mysql_error();
                }
            }else{
                echo "<font color=red> </font>两次密码不相同！";
                echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
            }

        }else{
            echo "<font color=\"#ff2200\">你输入的原密码不正确!!";
            echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
    }
    }
}
if(isset($_POST['wanshan'])) {        //对提交按钮进行判断
    $number = $_GET['number'];
    $qqnumber = $_POST['qqnumber'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    //$passwords=md5($password);
    $query="update student set QQnumber='$qqnumber',phone='$phone',email='$email' where number='$number' ";
    $result = mysql_query($query, $id);
    if(mysql_query($query)){
        echo "<font color=red> </font>学生信息修改成功！";

        echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
    }else{
        echo "<font class='#ff0000'>修改失败!!!</font>";
        echo mysql_error();
    }
}
if(isset($_POST['xiugai1'])) {        //对提交按钮进行判断
    $number = $_GET['number'];
    $oldpass = $_POST['oldpwd'];
    $pass = $_POST['pwd'];
    $repass = $_POST['pwd1'];
    //$passwords=md5($password);
    $query = "select number from teacher where number='".$number."' and password='".$oldpass."'";
    $result = mysql_query($query, $id);
    if ($result) {
        if (mysql_num_rows($result) != 0) {
            if($pass==$repass){
                $query1 = "update teacher set password='$pass' where number='$number' ";
                if (mysql_query($query1)) {
                    echo "<font color=red> </font>教师密码修改成功！";
                    echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
                } else {
                    echo "<font class='#ff0000'>修改失败!!!</font>";
                    echo mysql_error();
                }
            }else{
                echo "<font color=red> </font>两次密码不相同！";
                echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
            }

        }else{
            echo "<font color=\"#ff2200\">你输入的原密码不正确!!";
            echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
        }
    }
}
if(isset($_POST['wanshan1'])) {        //对提交按钮进行判断
    $number = $_GET['number'];
    $qqnumber = $_POST['qqnumber'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    //$passwords=md5($password);
    $query="update teacher set qqnumber='$qqnumber',phone='$phone',email='$email' where number='$number' ";
    $result = mysql_query($query, $id);
    if(mysql_query($query)){
        echo "<font color=red> </font>教师信息修改成功！";
        echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
    }else{
        echo "<font class='#ff0000'>修改失败!!!</font>";
        echo mysql_error();
    }
}
if(isset($_POST['xiaoxi'])) {        //对提交按钮进行判断
    $title = $_POST['title'];
    $content = $_POST['neirong'];
    $student_cno = $_POST['student_cno'];
    $Sname = $_GET['Sname'];
    $query="select * from student where number='$Sname'";

    $result=mysql_query($query);
    if($myrow=mysql_fetch_array($result)) {        //对查询的记录数进行判断
        $student_id=$myrow['id'];
        $query1="insert into studentinformation (title,content,student_cno,state,student_id,time)values('$title','$content','$student_cno','未回复','$student_id','$time') ";
        if(mysql_query($query1)){
            echo "<font color=red> </font>提交成功！";
            echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
        }else{
            echo "<font class='#ff0000'>回复失败!!!</font>";
            echo mysql_error();
        }
    }
}
if(isset($_POST['xiaoxi1'])) {        //对提交按钮进行判断
    $title = $_POST['title'];
    $content = $_POST['neirong'];
    $Tname = $_GET['Tname'];
    $query="select * from teacher where number='$Tname'";
    $result=mysql_query($query);
    if($myrow=mysql_fetch_array($result)) {        //对查询的记录数进行判断
        $teacher_id=$myrow['id'];
        $query1="insert into teacherinformation (title,content,state,teacher_id,time)values('$title','$content','未回复','$teacher_id','$time') ";
        if(mysql_query($query1)){
            echo "<font color=red> </font>提交成功！";
            echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
        }else{
            echo "<font class='#ff0000'>回复失败!!!</font>";
            echo mysql_error();
        }
    }
}
?>