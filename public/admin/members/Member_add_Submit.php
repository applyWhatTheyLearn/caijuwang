<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
//$LogTime = Now()
$Cnum = trim($_POST["Cnum"]);
$NickName = trim($_POST["NickName"]);
$UserName = trim($_POST["UserName"]);
$sex = trim($_POST["sex"]);
$UserPass = trim($_POST["UserPass"]);
$ReUserPass = trim($_POST["ReUserPass"]);
$UserLevel = trim($_POST["UserLevel"]);
$address = trim($_POST["address"]);
$postcode = trim($_POST["postcode"]);
$Tel = trim($_POST["Tel"]);
$Email = trim($_POST["Email"]);
$Msn = trim($_POST["Msn"]);
$QQ = trim($_POST["QQ"]);
$Detail = trim($_POST["Detail"]);
$shibie = trim($_POST["shibie"]);
$Views = trim($_POST["Views"]);
$Photo = trim($_POST["Photo"]);

ChackError($NickName, "用户昵称");
ChackError($UserName, "真实姓名");
ChackPass($UserPass, $ReUserPass, "用户密码");
ChackError($shibie, "识别信息");

$msql->query("Select * From z_user where UserName='" . $UserName . "' order by meid desc");
if ($msql->next_record()) {
    ?>
    <script language=javascript>
        history.back()
        alert("用户已存在！请重新输入 ！")
    </script>
    <?php
    exit;
}
$msql->query("insert into z_user set Cnum=" . $Cnum
    . ",shibie='" . $shibie
    . "',NickName='" . $NickName
    . "',UserName='" . $UserName
    . "',sex='" . $sex
    . "',UserPass='" . md5($UserPass)
    . "',UserLevel='" . $UserLevel
    . "',address='" . $address
    . "',postcode='" . $postcode
    . "',Tel='" . $Tel
    . "',Email='" . $Email
    . "',Msn='" . $Msn
    . "',QQ='" . $QQ
    . "',Detail='" . $Detail
    . "',Views='" . $Views
    . "',Photo='" . $Photo
    . "',RegTime='" . date("Y-m-d H:i:s", time())
    . "',LastLoginTime='" . date("Y-m-d H:i:s", time())
    . "',LoginNum=0");
?>

<html>
<head>
    <title>更新添加成功!</title>
    <meta http-equiv=refresh content="0; url=Member_List.php">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../customer.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" text="#000000">
<table width="40%" border="1" cellspacing="10" cellpadding="0" align="center" class="table">
    <tr>
        <td>

            <table width="100%" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF" bordercolorlight="#000000">
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>

                    <td align="center"><b><font color="#990000">更新添加成功!</font></b></td>
                </tr>
                <tr>
                    <td align="center">&nbsp;</td>
                </tr>
                <tr>

                    <td align="center">&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>