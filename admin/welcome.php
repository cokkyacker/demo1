<!DOCTYPE html>
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
        <title>欢迎页面-X-admin2.2</title>
        <meta name="renderer" content="webkit">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
        <link rel="stylesheet" href="./css/font.css">
        <link rel="stylesheet" href="./css/xadmin.css">
        <script src="./lib/layui/layui.js" charset="utf-8"></script>
        <script type="text/javascript" src="./js/xadmin.js"></script>
        <!-- 让IE8/9支持媒体查询，从而兼容栅格 -->
        <!--[if lt IE 9]>
          <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
          <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            /**
             *获取当前时间
             *format=1精确到天
             *format=2精确到分
             */
            function getCurrentDate(format) {
                var now = new Date();
                var year = now.getFullYear(); //得到年份
                var month = now.getMonth();//得到月份
                var date = now.getDate();//得到日期
                var day = now.getDay();//得到周几
                var hour = now.getHours();//得到小时
                var minu = now.getMinutes();//得到分钟
                var sec = now.getSeconds();//得到秒
                month = month + 1;
                if (month < 10) month = "0" + month;
                if (date < 10) date = "0" + date;
                if (hour < 10) hour = "0" + hour;
                if (minu < 10) minu = "0" + minu;
                if (sec < 10) sec = "0" + sec;
                var time = "";
                //精确到天
                if(format==1){
                    time = year + "-" + month + "-" + date;
                }
                //精确到分
                else if(format==2){
                    time = year + "-" + month + "-" + date+ " " + hour + ":" + minu + ":" + sec;
                }
                return time;
            }
        </script>
    </head>
    <body>
        <div class="layui-fluid">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-body ">
                            <blockquote class="layui-elem-quote">欢迎管理员：
                                <span class="x-red"><?php echo $_SESSION['name'] ?></span>！当前时间:
                                <script>document.write(getCurrentDate(2));</script>
                            </blockquote>

                        </div>
                    </div>
                </div>
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">数据统计</div>
                        <div class="layui-card-body ">
                            <ul class="layui-row layui-col-space10 layui-this x-admin-carousel x-admin-backlog">
                                <li class="layui-col-md2 layui-col-xs6">
                                    <a href="javascript:;" class="x-admin-backlog-body">
                                        <h3>学生人数</h3>
                                        <p>
                                            <cite>666</cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-md2 layui-col-xs6">
                                    <a href="javascript:;" class="x-admin-backlog-body">
                                        <h3>教师人数</h3>
                                        <p>
                                            <cite>12</cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-md2 layui-col-xs6">
                                    <a href="javascript:;" class="x-admin-backlog-body">
                                        <h3>公告数</h3>
                                        <p>
                                            <cite>9</cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-md2 layui-col-xs6">
                                    <a href="javascript:;" class="x-admin-backlog-body">
                                        <h3>留言数</h3>
                                        <p>
                                            <cite>67</cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-md2 layui-col-xs6">
                                    <a href="javascript:;" class="x-admin-backlog-body">
                                        <h3>设备数量</h3>
                                        <p>
                                            <cite>67</cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-md2 layui-col-xs6 ">
                                    <a href="javascript:;" class="x-admin-backlog-body">
                                        <h3>租借数量</h3>
                                        <p>
                                            <cite>6</cite></p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <style id="welcome_style"></style>
                <div class="layui-col-md12">
                    <blockquote class="layui-elem-quote layui-quote-nm">南开大学滨海学院机房设备管理系统</blockquote></div>
            </div>
        </div>
        </div>
    </body>
</html>
<?php
}
?>