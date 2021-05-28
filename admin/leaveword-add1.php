<!DOCTYPE html>
<html class="x-admin-sm">
<?php
session_start();
include("../php/SqlTool.class.php");
$id=$_GET['id'];
$name=$_SESSION['name'];
?>
<head>
    <meta charset="UTF-8">
    <title>欢迎页面-X-admin2.2</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <link rel="stylesheet" href="./css/font.css">
    <link rel="stylesheet" href="./css/xadmin.css">
    <script type="text/javascript" src="./lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="./js/xadmin.js"></script>
    <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="layui-fluid">
    <div class="layui-row">
        <form action="php/add_ok.php?id=<?php echo $id ?>&name=<?php echo $name ?>" method="post" name="add" class="layui-form">
            <div class="layui-form-item">
                <label for="content" class="layui-form-label">
                    <span class="x-red">*</span>内容</label>
                <div class="layui-input-inline">
                    <textarea id="content" name="anser" class="layui-input"></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <label for="" class="layui-form-label"></label>
            <button class="layui-btn" name="huifu1" type="submit" lay-filter="add" lay-submit="">回复</button></div>

        </form>
    </div>
</div>
</body>

</html>