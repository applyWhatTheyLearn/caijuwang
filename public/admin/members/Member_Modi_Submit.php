<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
//$LogTime = Now()
$Meid = trim($_REQUEST["Meid"]);
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
$Views = trim($_POST["Views"]);
$Photo = trim($_POST["Photo"]);

ChackError($NickName, "用户昵称");
ChackError($UserName, "真实姓名");
ChackPass($UserPass, $ReUserPass, "用户密码");
$msql->query("update z_user set NickName='" . $NickName
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
    . "'  where meid=".$Meid);
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