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
		echo "<font color=\"#ff0000\">��ϲ����¼�ɹ���</font>";
		echo "<meta http-equiv=\"refresh\" content=\"2; url=..\index1.php\">2����ת��,...";
	}else{
		echo "<font color=\"#ff2200\">������Ĺ���<b>$number</b>�����ڻ����벻��ȷ!!";
		echo "<meta http-equiv=\"refresh\" content=\"3 url=$furl\"> 3����ת��ǰҳ,���Ե�...";
	}
}else{
	echo "<font color=\"#6633cc\">��¼ʧ��!!";
}
?>
