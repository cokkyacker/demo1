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
		echo "<font color=\"#ff0000\">��ϲ����¼�ɹ���</font>";
		echo "<meta http-equiv=\"refresh\" content=\"2; url=..\index.php\">2����ת���̨,...";
	}else{
		echo "<font color=\"#ff2200\">��������û���ID<b>$user</b>�����ڻ����벻��ȷ!!";
		echo "<meta http-equiv=\"refresh\" content=\"3 url=$furl\"> 3����ת��ǰҳ,���Ե�...";
	}
}else{
	echo "<font color=\"#6633cc\">��¼ʧ��!!";
}
?>
