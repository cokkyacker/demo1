<?php
session_start();
include("../../php/SqlTool.class.php");
$furl=getenv("http_referer");

if(isset($_GET['lmbs']) && $_GET['lmbs']=="yhgl"){
    echo "删除成功!!";
    $id=$_GET['id'];			//获得将被删除的用户ID
    $query="delete from student where id='$id'";	//将要删除的用户从mr_user表中删除
    $result=mysql_query($query);
    if($result){
        echo "<meta http-equiv=\"Refresh\" content=\"2;url=$furl\">";
    }else{
        echo "删除失败!";
    }
}
if(isset($_GET['lmbs']) && $_GET['lmbs']=="lsgl"){
    $id=$_GET['id'];
    $query="delete from teacher where id='$id'";
    $result=mysql_query($query);
    if($result){
        echo "<font color=\"#ff0000\">删除成功!!</font>";
        echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">";
    }
}
if(isset($_GET['lmbs']) && $_GET['lmbs']=="glygl"){
    $id=$_GET['id'];
    $query="delete from admin where id='$id'";
    $result=mysql_query($query);
    if($result){
        echo "成功删除!!";
        echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">";
    }
}
if(isset($_GET['lmbs']) && $_GET['lmbs']=="xxgl"){
    $id=$_GET['id'];
    $query="delete from studentinformation where id='$id'";
    $result=mysql_query($query);
    if($result){
        echo "<font color=\"#ff0000\">删除成功!!</font>";
        echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">";
    }
}
if(isset($_GET['lmbs']) && $_GET['lmbs']=="xxgl1"){
    $id=$_GET['id'];
    $query="delete from teacherinformation where id='$id'";
    $result=mysql_query($query);
    if($result){
        echo "<font color=\"#ff0000\">删除成功!!</font>";
        echo "<meta http-equiv=\"refresh\" content=\"2; url=$furl\">";
    }
}
?>