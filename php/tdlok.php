<?php
session_start();
require_once 'SqlTool.class.php';
$furl=getenv("http_referer");
$number=$_POST['number'];
$pass=$_POST['password'];
$query="select number from teacher where number='".$number."' and password='".$pass."'";
$result=mysql_query($query,$id);

if($result){
	if(mysql_num_rows($result)!=0){
		$_SESSION['Tname']=$number;
		$_SESSION['Tpassword']=$pass;
		echo "<font color=\"#ff0000\">恭喜您登录成功！</font>";
		echo "<meta http-equiv=\"refresh\" content=\"2; url=..\index1.php\">2秒中转入,...";
	}else{
		echo "<font color=\"#ff2200\">你输入的工号<b>$number</b>不存在或密码不正确!!";
		echo "<meta http-equiv=\"refresh\" content=\"3 url=$furl\"> 3秒中转入前页,请稍等...";
	}
}else{
	echo "<font color=\"#6633cc\">登录失败!!";
}
?>
