<?php
include("../php/SqlTool.class.php");
header("Content-type:text/html;charset=utf-8");
$mid = $_GET["mid"];//获得该条留言的id
$sql = "delete from equipment where id=$mid";//通过id删除这条留言
$result = mysql_query($sql);
if($result) {
    echo "<script>alert('删除成功！')</script>";
    echo "<script>window.location.href='cate.php'</script>";

}