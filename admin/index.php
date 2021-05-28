<!doctype html>
<?php
session_start();
include("../php/SqlTool.class.php");
if(!isset($_SESSION['name']) && !isset($_SESSION['password'])){
	echo "请先登录,才可以访问页面!!";
	echo "<meta http-equiv=\"Refresh\" content=\"2;url=..\login.html\">";
}else{
?>
<html class="x-admin-sm">
    <head>
        <meta charset="UTF-8">
        <title>后台管理</title>
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="stylesheet" href="./css/font.css">
        <link rel="stylesheet" href="./css/xadmin.css">
        <!-- <link rel="stylesheet" href="./css/theme5.css"> -->
        <script src="./lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="./js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
          <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
          <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script>
            // 是否开启刷新记忆tab功能
            // var is_remember = false;
        </script>
    </head>
    <body class="index">
        <!-- 顶部开始 -->
        <div class="container">
            <div class="logo">
                <a href="./index.php">机房设备后台管理</a></div>
            <div class="left_open">
                <a><i title="展开左侧栏" class="iconfont">&#xe699;</i></a>
            </div>

            <ul class="layui-nav right" lay-filter="">
                <li class="layui-nav-item">
                    <a href="javascript:;">admin</a>
                    <dl class="layui-nav-child">
                        <!-- 二级菜单 -->
                        <dd>
                            <a onclick="xadmin.open('个人信息','http://www.baidu.com')">个人信息</a></dd>
                        <dd>
                            <a href="../login.html">切换帐号</a></dd>
                        <dd>
                            <a href="../login.html"><a href="zx_ok.php">退出</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item to-index">
                    <a href="zx_ok.php">退出</a></li>
            </ul>
        </div>
        <!-- 顶部结束 -->
        <!-- 中部开始 -->
        <!-- 左侧菜单开始 -->
        <div class="left-nav">
            <div id="side-nav">
                <ul id="nav">
                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li">&#xe6b8;&nbsp;&nbsp;人员管理</i>

                            <a href="member-list.php">
                                <i class="iconfont">&#xe6a7;</i>
                                <cite>学生管理</cite></a>

                            <a href="member-list1.php">
                                <i class="iconfont">&#xe6a7;</i>
                                <cite>教师管理</cite></a>
                    </li>

                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li">&#xe723;&nbsp;&nbsp;设备管理</i>

                            <a href="cate.php">
                                <i class="iconfont">&#xe6a7;</i>
                                <cite>设备管理</cite></a>

                    </li>

                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li">&#xe723;&nbsp;&nbsp;租借管理</i>

                            <a href="order-list.php">
                                <i class="iconfont">&#xe6a7;</i>
                                <cite>租借管理</cite></a>
                    </li>

                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li">&#xe723;&nbsp;&nbsp;消息管理</i>

                            <a href="news.php">
                                <i class="iconfont">&#xe6a7;</i>
                                <cite>公告管理</cite></a>

                            <a href="leaveword.php">
                                <i class="iconfont">&#xe6a7;</i>
                                <cite>学生留言</cite></a>

                            <a href="leaveword1.php">
                                <i class="iconfont">&#xe6a7;</i>
                                <cite>教师留言</cite></a>
                    </li>

                    <li>
                        <a href="javascript:;">
                            <i class="iconfont left-nav-li">&#xe726;&nbsp;&nbsp;管理员管理</i>
                            <a href="admin-list.php">
                                <i class="iconfont">&#xe6a7;</i>
                                <cite>管理员管理</cite></a>

                    </li>

                </ul>
            </div>
        </div>
        <!-- <div class="x-slide_left"></div> -->
        <!-- 左侧菜单结束 -->
        <!-- 右侧主体开始 -->
        <div class="page-content">
            <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
                <ul class="layui-tab-title">
                    <li class="home">
                        <i class="layui-icon">&#xe68e;</i>我的桌面</li></ul>
                <div class="layui-unselect layui-form-select layui-form-selected" id="tab_right">
                    <dl>
                        <dd data-type="this">关闭当前</dd>
                        <dd data-type="other">关闭其它</dd>
                        <dd data-type="all">关闭全部</dd></dl>
                </div>
                <div class="layui-tab-content">
                    <div class="layui-tab-item layui-show">
                        <iframe src='./welcome.php' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
                    </div>
                </div>
                <div id="tab_show"></div>
            </div>
        </div>
        <div class="page-content-bg"></div>
        <style id="theme_style"></style>
    </body>
</html>
<?php
}
?>