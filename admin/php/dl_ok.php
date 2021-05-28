<?php
session_start();
require_once '../../php/SqlTool.class.php';
$furl=getenv("http_referer");
$user=$_POST['username'];
$pass=$_POST['password'];
$query="select name from admin where name='".$user."' and password='".$pass."'";
$result=mysql_query($query,$id);

if($result){
	if(mysql_num_rows($result)!=0){
		$_SESSION['name']=$user;
		$_SESSION['password']=$pass;
		echo "<font color=\"#ff0000\">恭喜您登录成功！</font>";
		echo "<meta http-equiv=\"refresh\" content=\"2; url=..\index.php\">2秒中转入后台,...";
	}else{
		echo "<font color=\"#ff2200\">你输入的用户名ID<b>$user</b>不存在或密码不正确!!";
		echo "<meta http-equiv=\"refresh\" content=\"3 url=$furl\"> 3秒中转入前页,请稍等...";
	}
}else{
	echo "<font color=\"#6633cc\">登录失败!!";
}
?>
