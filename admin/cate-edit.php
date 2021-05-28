<!DOCTYPE html>
<?php
session_start();
include("../php/SqlTool.class.php");

$id = $_GET['mid'];
$sql = "SELECT * FROM equipment WHERE id= $id ";
$result = mysql_query($sql);//执行sql
$myrow = mysql_fetch_assoc($result);

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
      <?php echo "<form class='layui-form' method='post' action='cate-edit1.php?id=$id'>"?>
            <div class="layui-form-item">
                <label for="username" class="layui-form-label">
                    <span  class="x-red">*</span>名称
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="username" name = 'design' required="" lay-verify="required"
                           autocomplete="off" class="layui-input" value="<?php echo $myrow["name"];?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="phone" class="layui-form-label">
                    <span  class="x-red">*</span>数量
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="phone" name = 'number' required="" lay-verify="phone"
                           autocomplete="off" class="layui-input" value="<?php echo $myrow["number"];?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="ZT" class="layui-form-label">
                    <span  class="x-red">*</span>状态
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="ZT" name = 'state' required="" lay-verify="email"
                           autocomplete="off" class="layui-input" value="<?php echo $myrow["state"];?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="XH" class="layui-form-label">
                    <span class="x-red">*</span>型号
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="XH"  name = 'model' required="" lay-verify="email"
                           autocomplete="off" class="layui-input" value="<?php echo $myrow["model"];?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="GG" class="layui-form-label">
                    <span  class="x-red">*</span>规格
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="GG" name = 'guige' required="" lay-verify="email"
                           autocomplete="off" class="layui-input" value="<?php echo $myrow["specs"];?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="DJ" class="layui-form-label">
                    <span  class="x-red">*</span>单价
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="DJ" name = 'price' required="" lay-verify="email"
                           autocomplete="off" class="layui-input" value="<?php echo $myrow["price"];?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="CJ" class="layui-form-label">
                    <span  class="x-red">*</span>厂家
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="CJ" name = 'changjia' required="" lay-verify="email"
                           autocomplete="off" class="layui-input" value="<?php echo $myrow["factory"];?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="CCH" class="layui-form-label">
                    <span  class="x-red">*</span>出厂号
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="CCH" name = 'chuchanghao' required="" lay-verify="email"
                           autocomplete="off" class="layui-input" value="<?php echo $myrow["factorynumber"];?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="CFDD" class="layui-form-label">
                    <span  class="x-red">*</span>存放地点
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="CFDD" name = 'local' required="" lay-verify="email"
                           autocomplete="off" class="layui-input" value="<?php echo $myrow["place"];?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label  for="BZ" class="layui-form-label">备注
                </label>
                <div class="layui-input-inline">
                    <input type="text" id="BZ" name = 'beizhu' required="" lay-verify="email"
                           autocomplete="off" class="layui-input" value="<?php echo $myrow["remarks"];?>">
                </div>
            </div>
            <div class="layui-form-item">
                <label for="respent" class="layui-form-label">
                </label>
                <input  class="layui-btn" lay-filter="add" lay-submit="" id="respent" type="submit" name="submit" value="修改" class="btnw">

            </div>
        </form>
    </div>
</div>
<script>layui.use(['form', 'layer'],
    function() {
        $ = layui.jquery;
        var form = layui.form,
            layer = layui.layer;

        //自定义验证规则
        form.verify({
            nikename: function(value) {
            if (value.length < 5) {
                return '昵称至少得5个字符啊';
            }
        },
            pass: [/(.+){6,12}$/, '密码必须6到12位'],
            repass: function(value) {
            if ($('#L_pass').val() != $('#L_repass').val()) {
                return '两次密码不一致';
            }
        }
        });

        //监听提交
        form.on('submit(add)',
            function(data) {
                console.log(data);
                //发异步，把数据提交给php
                layer.alert("增加成功", {
                        icon: 6
                    },
                    function() {
                        //关闭当前frame
                        xadmin.close();

                        // 可以对父窗口进行刷新
                        xadmin.father_reload();
                    });
                return false;
            });

    });</script>
<script>var _hmt = _hmt || []; (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
})();</script>
</body>

</html>
