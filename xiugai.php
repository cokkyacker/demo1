<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
session_start();
include("php/SqlTool.class.php");
if(!isset($_SESSION['Sname']) && !isset($_SESSION['Spassword'])){
    echo "请先登录,才可以访问页面!!";
    echo "<meta http-equiv=\"Refresh\" content=\"2;url=StudentlLogin.html\">";
}else{
?>
<html>
<head>
    <title>学生端修改密码</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="CSS/style2.css" rel="stylesheet">
    <script language='JavaScript' src='js/menutree.js'></script>
    <style type="text/css">
        <!--
        .STYLE1 {
            color: #FF0000
        }

        .STYLE2 {
            font-size: 12px
        }

        .STYLE4 {
            color: #000000
        }

        .STYLE8 {
            font-size: 14px
        }

        -->
    </style>
</head>
<body>
<table width="833" border="0" cellspacing="0" cellpadding="0"
       align="center">
    <tr>
        <td width="833" class="tableBorder">
            <!--header -->
            <table width="790" height="74" border="0" align="center"
                   cellpadding="0" cellspacing="0">
                <tr>
                    <td valign="top">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        </table>
                        <table width="100%" height="68" border="0" cellpadding="0"
                               cellspacing="0">
                            <tr>
                                <td width="80%"><img src="images/logo.jpg" align="middle" width="850" height="75"/></td>
                                <td width="75%">
                                    <table width="100%" height="65" border="0" cellpadding="0"
                                           cellspacing="0">
                                        <tr>
                                            <td height="52" align="right" valign="top">
                                                <table width="100%" height="31" border="0" cellpadding="0"
                                                       cellspacing="0">

                                                </table>
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table width="100%" height="53" border="0" cellpadding="0"
                   cellspacing="0">

                <tr align="center">
                    <td width="10%" bgcolor="6495ed"><a href="index.php"><font color="white" size="3" >首页<br>
                        Index</a></td>
                    <td width="10%" bgcolor="6495ed"><a href="Equipment.php"><font color="white"  size="3" >设备器材<br>
                        Equipment</a></td>
                    <td width="15%" bgcolor="6495ed"><a href="EquipmentBorrow.html"><font color="white"  size="3" >设备借还<br>
                        EquipmentBorrow</a></td>
                    <td width="10%" bgcolor="#87ceeb"><a href="SPersonalCenter.php"><font color="white"  size="3" >学生个人中心<br>
                        SPersonalCenter</a></td>
                    <td width="10%" bgcolor="6495ed"><a href="AboutUs.html"><font color="white"  size="3" >关于我们<br>
                        AboutUs</a></td>


                </tr>
            </table>
            <table width="100%" height="50" border="1"
                   cellpadding="0" cellspacing="0">
                <tr>
                    <td width="10" height="10" valign="top">
                        <!-- left -->
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td height="30" width="10%" align="left">
                                    <img src="images/3.jpg" width="100%" height="30">
                                </td>
                            </tr>
                            <tr>
                                <td height="100" align="left">
                                    <table width="100%" height="100%" border="0" bgcolor="#d3d3d3"  cellpadding="0"
                                           cellspacing="0">
                                        <tr>
                                            <td width="100%" valign="baseline">
                                                <table width="100%" border="0" cellpadding="0"
                                                       cellspacing="0">
                                                    <tr>
                                                        <td width="94%" height="24" align="center"><a href="Guizhang.html">
                                                            <font color="black" size="3" >机房规章制度</a> <br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="94%" height="24" align="center"><a href="GongGao.html">
                                                            <font color="black" size="3" >学院机房公告</a> <br>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td width="94%" height="24" align="center"><a href="JiaoYu.html">
                                                            <font color="black" size="3" >机房安全教育</a> <br>
                                                        </td>
                                                    </tr>

                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                    </form>
                                </td>
                            </tr>
                        </table>
                        <table width="100%" height="155" border="0" cellpadding="0"
                               cellspacing="0">

                        </table>
                        <table width="100%" height="377" border="0" cellpadding="0"
                               cellspacing="0">
                            <tr>
                                <img src="images/4.jpg" width="100%" height="35">
                            </tr>
                            <tr>
                                <td height="337" align="center" valign="top" class="tableBorder_lb">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td class="tableBorder_B_dashed" bgcolor="#d3d3d3">
                                                <div align="center"><font size="2.5"  color="black" >&nbsp;&nbsp;&nbsp;&nbsp;南开大学滨海学院于2004年经教育部批准设立，学院建院以来十分重&nbsp;&nbsp;&nbsp;&nbsp;<br>视机房建设，
                                                    从建院至今，<br>已投入6千多万元建设机<br>房。在建设中，根据教学科研和学科建设需要，坚持<br>“统筹规划、分步实施、资<br>源共享、急用先建”的原<br>&nbsp;&nbsp;&nbsp;&nbsp;则，
                                                    使得学院各个机房都能充分发挥效益。<br>
                                                    &nbsp;&nbsp;&nbsp;目前学院针对各学科和专业特点建设的机房，<br>总面积为12516.47平方米，在用教学仪器设备<br>6124件...
                                                    为了我院学生有<br>一个更好的学习环境，<br>我们会倾力做到更好！<br>欢迎报考本校！
                                                </font></a>
                                                </div>
                                            </td>
                                        </tr>

                                    </table>
                                    <table height="219" border="0"
                                           cellpadding="0" cellspacing="0">
                                        <tr>
                                            <img src="images/5.jpg" width="100%" height="35">
                                        </tr>
                                        <tr>
                                            <td><img src="images/12.jpg" width="80" height="80"></td>
                                            <td><img src="images/7.jpg" width="80" height="80"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="images/8.jpg" width="80" height="80"></td>
                                            <td><img src="images/9.jpg" width="80" height="80"></td>
                                        </tr>
                                        <tr>
                                            <td><img src="images/10.jpg" width="80" height="80"></td>
                                            <td><img src="images/11.jpg" width="80" height="80"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td valign="top">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">

                            <tr>

                                <td colspan="2" background="images/shop_16.gif">
                                    <!-- search -->
                                    <form name="form2" method="post" action="#">

                                    </form>
                                </td>
                            </tr>
                        </table>

                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td width="100%" height="189" valign="top">

                                        <table width="100%" border="1" cellspacing="0"
                                               cellpadding="0">

                                            <tr><img src="images/20.JPG" width="100%" height="30%"></tr>
                                        </table>
                                        <?php
                                        $number=$_SESSION['Sname'];
                                        ?>
                                        <form action="php/xiugaiok.php?number=<?php echo $number ?>" method="post" name="xiugai">
                                            <table width="100%"  border="0" cellspacing="-2" cellpadding="-2">
                                                <tr>
                                                    <td height="28" align="center"> 原 密 码：</td>
                                                    <td height="28"><input name="oldpwd" type="password" size="20" maxlength="20">
                                                        </td>
                                                </tr>
                                                <tr>
                                                    <td height="28" align="center">新 密&nbsp;码：</td>
                                                    <td height="28"><input name="pwd" type="password" size="20" maxlength="20">
                                                        <span class="word_orange">*</span></td>
                                                </tr>
                                                <tr>
                                                    <td height="28" align="center">确认新密码：</td>
                                                    <td height="28"><input name="pwd1" type="password" size="20" maxlength="20">
                                                        <span class="word_orange">*</span> </td>
                                                </tr>
                                                <tr>
                                                    <td height="34">&nbsp;</td>
                                                    <td class="word_grey">
                                                        <button name="xiugai" type="submit" class="btn_grey" >确定保存</button>
                                                        <input name="Submit2" type="reset" class="btn_grey" value="重新填写">
                                                        <input name="Submit22" type="button" class="btn_grey" value="返回" onClick="window.location.href='SPersonalCenter.php'">
                                                    </td>
                                                </tr>
                                            </table>
                                        </form>
                                    </td>
                                </tr>
                            </table>
                    </td>
                </tr>
            </table>
            <table width="100%" border="0" align="center" cellpadding="0"
                   cellspacing="0">
                <tr>
                    <td>
                        <!-- bottom -->
                        <table width="100%" height="80"border="0" align="center"
                               cellpadding="0" cellspacing="0">

                            <tr>
                                <td colspan="3" align="center" bgcolor="6495ed" width="100%"><font color="white" size="3.5">
                                    All Rights Reserved Copyright ◎ 2010 <br>南开大学滨海学院网络及实验室管理中心 版权所有
                                    <br> 地址：大港区学府路634号 电话：022-63304887 63304888
                                </td></font>
                            </tr>

                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
<?php
}
?>