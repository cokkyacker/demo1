<?php
session_start();	//初始化session变量
include "../../php/SqlTool.class.php";	//包含数据库文件
$furl=getenv("HTTP_REFERER");		//获取IP
$time=date("Y")."-".date("m")."-".date("d");
if(isset($_POST['xiugai'])){		//对提交按钮进行判断
    $id=$_GET['id'];
    $name=$_POST['name'];
    $number=$_POST['number'];
    $major=$_POST['major'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
        //$passwords=md5($password);
    $query="update student set name='$name',number='$number',major='$major',phone='$phone',email='$email' where id='$id' ";

    $quer="select * from student where number='$number'";		//在数据库中查询提交的用户名
    $result=mysql_query($quer);
    if(mysql_num_rows($result)>0){		//对查询的记录数进行判断
        echo $number."该学号已经被注册!</font>";	//用户名注册过给出提示
        echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入修改页,请稍等...";		//跳转回修改页
    }else
        if(mysql_query($query)){
            echo "<font color=red> </font>ID".$id."学生信息修改成功！";

            echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
        }else{
            echo "<font class='#ff0000'>修改失败!!!</font>";
            echo mysql_error();
        }
    }
if(isset($_POST['xiugaipass'])){		//对提交按钮进行判断
    $id=$_GET['id'];
    $password=$_POST['password'];
    //$passwords=md5($password);
    $query="update student set password='$password' where id='$id' ";

        if(mysql_query($query)){
            echo "<font color=red> </font>ID".$id."学生密码修改成功！";

            echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
        }else{
            echo "<font class='#ff0000'>修改失败!!!</font>";
            echo mysql_error();
        }
}
if(isset($_POST['xiugai1'])){		//对提交按钮进行判断
    $id=$_GET['id'];
    $name=$_POST['name'];
    $number=$_POST['number'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    //$passwords=md5($password);
    $query="update teacher set name='$name',number='$number',phone='$phone',email='$email' where id='$id' ";
    $quer="select * from student where number='$number'";		//在数据库中查询提交的用户名
    $result=mysql_query($quer);
    if(mysql_num_rows($result)>0){		//对查询的记录数进行判断
        echo $number."该工号已经被注册!</font>";	//用户名注册过给出提示
        echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入修改页,请稍等...";		//跳转回修改页
    }else
        if(mysql_query($query)){
            echo "<font color=red> </font>ID".$id."教师信息修改成功！";

            echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
        }else{
            echo "<font class='#ff0000'>修改失败!!!</font>";
            echo mysql_error();
        }
}
if(isset($_POST['xiugaipass1'])){		//对提交按钮进行判断
    $id=$_GET['id'];
    $password=$_POST['password'];
    //$passwords=md5($password);
    $query="update teacher set password='$password' where id='$id' ";

    if(mysql_query($query)){
        echo "<font color=red> </font>ID".$id."教师密码修改成功！";

        echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
    }else{
        echo "<font class='#ff0000'>修改失败!!!</font>";
        echo mysql_error();
    }
}
if(isset($_POST['xiugai2'])){		//对提交按钮进行判断
    $id=$_GET['id'];
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    //$passwords=md5($password);
    $query="update admin set name='$name',phone='$phone',email='$email',password='$pass' where id='$id' ";

        if(mysql_query($query)){
            echo "<font color=red> </font>ID".$id."管理员信息修改成功！";

            echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入前页";
        }else{
            echo "<font class='#ff0000'>修改失败!!!</font>";
            echo mysql_error();
        }
}
?>