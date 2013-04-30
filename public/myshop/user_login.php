<?php
include("../include/common.inc.php");
$st='';
$loginStatu="";
session_start();
if (isset($_SESSION["UserLoginUserID"])) {
    $UserLoginUserID = $_SESSION["UserLoginUserID"];
}
if (isset($_SESSION["UserLoginUserName"])) {
    $UserName = $_SESSION["UserLoginUserName"];
}
if (isset($_SESSION["UserLoginStatu"])) {
    $UserLoginStatu = $_SESSION["UserLoginStatu"];
}
if (isset($_SESSION["UserLoginUserNamePass"])) {
    $UserPass = $_SESSION["UserLoginUserNamePass"];
}
if(isset($UserName) && isset($UserPass)){
    $Search = "select * from z_user where UserName='" . $UserName . "' and UserPass='" . $UserPass . "'";
    $msql->query($Search);
    if ($msql->next_record()) {
        header("Location: ../myshop/user_index.php");
        return;
    }
}
if(isset($_REQUEST["st"])){
    $st = trim($_REQUEST["st"]);
}
$Search = "select * from z_product where l_views='显示ʾ' order by l_shuliang desc";
$msql->query($Search);
if ($st == "0") {
    $loginStatu = "<strong><font color=#FF0000>您还没有登陆！</font></strong>";
} elseif ($st == "1") {
    $loginStatu = "尊敬的 [ <strong><font color=#0000FF>" . UserName . "</font></strong> ]" . "您已成功登陆!";
} elseif (($st == "2")) {
    $loginStatu = "<strong><font color=#FF0000>出错啦！</font></strong>";
}

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>用户登录</title>
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }

        -->
    </style>
    <script language="javascript">
        function CheckForm(frm) {

            if (frm.username.value.length == 0) {
                frm.username.focus();
                frm.username.select();
                alert("用户姓名不能为空！");
                return false;

            }

            if (frm.userpass.value.length == 0) {
                frm.userpass.focus();
                frm.userpass.select();
                alert("用户密码不能为空！");
                return false;

            }


        }
    </script>
</head>

<body>
<div align="center">
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <iframe frameborder=0 name=window_left scrolling="no" src=../include/top.php
                        style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"></iframe>
            </td>
        </tr>
    </table>

    <table width="984" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
        <form name="form1" method="post" action="user_login_check.php" onSubmit="return CheckForm(this);">
            <tr>
                <td height="32" colspan="2">&nbsp;&nbsp;首页：&gt; 用户登录</td>
            </tr>
            <tr>
                <td width="192" height="23">&nbsp;</td>
                <td width="784"><?php echo($loginStatu); ?></td>
            </tr>
            <tr>
                <td height="23">
                    <div align="right">用户姓名：</div>
                </td>
                <td><input name="username" type="text" class="loginText" id="username" size="50" maxlength="20">
                    <font color=#ff0000>*</font></td>
            </tr>
            <tr>
                <td height="23">
                    <div align="right">登陆密码：</div>
                </td>
                <td><input name="userpass" type="password" class="loginText" id="userpass" size="35" maxlength="20">
                    <font color=#ff0000>*</font></td>
            </tr>
            <tr>
                <td height="23">&nbsp;</td>
                <td><input name="button" type="submit" class="loginBottom" id="button" value="登  陆">
                    <input name="button2" type="reset" class="loginBottom" id="button2" value="重  置">
                    <input name="button3" type="button" class="loginBottom" id="button3" value="忘记密码"></td>
            </tr>
            <tr>
                <td height="23">&nbsp;</td>
                <td><input name="button4" type="button" class="regbottom" id="button4" value="我要注册"
                           onClick="location='user_reg.php'"></td>
            </tr>
            <tr>
                <td height="23">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </form>
    </table>

    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td width="984" height="6"></td>
        </tr>
    </table>
    <table width="984" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <iframe frameborder=0 name=window_left scrolling="no" src=../include/copyright.php
                        style="HEIGHT:100px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"></iframe>
            </td>
        </tr>
    </table>
    <br>
    <br>
</div>
</body>
</html>
