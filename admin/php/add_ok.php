<?php
session_start();	//初始化session变量
include "../../php/SqlTool.class.php";	//包含数据库文件
$furl=getenv("HTTP_REFERER");		//获取IP
$time=date("Y")."-".date("m")."-".date("d");
if(isset($_POST['zhuce'])){		//对提交按钮进行判断
    $name=$_POST['name'];
    $number=$_POST['number'];
    $major=$_POST['major'];
    $query="select * from student where number='$number'";		//在数据库中查询提交的用户名
    $result=mysql_query($query);
    if(mysql_num_rows($result)>0){		//对查询的记录数进行判断
        echo $number."该学号已经被注册!</font>";	//用户名注册过给出提示
        echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入注册页,请稍等...";		//跳转回注册页
    }else{
        //$passwords=md5($password);
        $query="insert into student (name,number,major,password,time)values('$name','$number','$major','$number','$time')";
        if(mysql_query($query)){
            echo "<script>alert('添加成功！');window.location.href='../member-list.php'</script>";

        }else{
            echo "<font class='#ff0000'>注册失败!!!</font>";
            echo mysql_error();
        }
    }
}
if(isset($_POST['zhuce1'])){		//对提交按钮进行判断
    $name=$_POST['name'];
    $number=$_POST['number'];
    $pass=$_POST['pass'];
    $query="select * from teacher where number='$number'";		//在数据库中查询提交的用户名
    $result=mysql_query($query);
    if(mysql_num_rows($result)>0){		//对查询的记录数进行判断
        echo $number."该工号已经被注册!</font>";	//用户名注册过给出提示
        echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入注册页,请稍等...";		//跳转回注册页
    }else{
        //$passwords=md5($password);
        $query="insert into teacher (name,number,password,time)values('$name','$pass','$number','$time')";
        if(mysql_query($query)){
            echo "<script>alert('添加成功！');window.location.href='../member-list1.php'</script>";

        }else{
            echo "<font class='#ff0000'>注册失败!!!</font>";
            echo mysql_error();
        }
    }
}
if(isset($_POST['zhuce2'])){		//对提交按钮进行判断
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $query="select * from admin where name='$name'";		//在数据库中查询提交的用户名
    $result=mysql_query($query);
    if(mysql_num_rows($result)>0){		//对查询的记录数进行判断
        echo $name."该管理员已经被注册!</font>";	//用户名注册过给出提示
        echo "<meta http-equiv=\"Refresh\" content=\"1;url=$furl\">1秒钟转入注册页,请稍等...";		//跳转回注册页
    }else{
        //$passwords=md5($password);
        $query="insert into admin (name,phone,email,password,time)values('$name','$phone','$email','$pass','$time')";
        if(mysql_query($query)){
            echo "<script>alert('添加成功！');window.location.href='../admin-list.php'</script>";

        }else{
            echo "<font class='#ff0000'>注册失败!!!</font>";
            echo mysql_error();
        }
    }
}
if(isset($_POST['huifu'])){		//对提交按钮进行判断
    $id=$_GET['id'];
    $name=$_GET['name'];
    $anser=$_POST['anser'];
    $query="select * from admin where name='$name'";
    $result=mysql_query($query);
    if($myrow=mysql_fetch_array($result)) {        //对查询的记录数进行判断
        $admin_id=$myrow['id'];
        $query1="update studentinformation set anser='$anser',state='已回复',admin_id='$admin_id' where id='$id' ";
        if(mysql_query($query1)){
            echo "<script>alert('回复成功！');window.location.href='../leaveword.php'</script>";
        }else{
            echo "<font class='#ff0000'>回复失败!!!</font>";
            echo mysql_error();
        }
    }
}
if(isset($_POST['huifu1'])){		//对提交按钮进行判断
    $id=$_GET['id'];
    $name=$_GET['name'];
    $anser=$_POST['anser'];
    $query="select * from admin where name='$name'";
    $result=mysql_query($query);
    if($myrow=mysql_fetch_array($result)) {        //对查询的记录数进行判断
        $admin_id=$myrow['id'];
        $query1="update teacherinformation set anser='$anser',state='已回复',admin_id='$admin_id' where id='$id' ";
        if(mysql_query($query1)){
            echo "<script>alert('回复成功！');window.location.href='../leaveword1.php'</script>";

        }else{
            echo "<font class='#ff0000'>回复失败!!!</font>";
            echo mysql_error();
        }
    }
}
?>