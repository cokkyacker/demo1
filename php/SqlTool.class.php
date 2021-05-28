<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$id=mysql_connect("localhost","root","root");		//连接数据库服务器
mysql_select_db("shixun",$id);				//选择数据库
mysql_query("set names utf8");						//设置编码格式
?>