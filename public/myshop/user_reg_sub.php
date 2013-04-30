<?php
include("../include/common.inc.php");

$LogTime = time();
$Cnum = trim($_POST["Cnum"]);
$NickName = trim($_POST["NickName"]);
$UserName = trim($_POST["UserName"]);
$sex = trim($_POST["sex"]);
$UserPass = md5(trim($_POST["UserPass"]));
$ReUserPass = trim($_POST["ReUserPass"]);
$address = trim($_POST["address"]);
$postcode = trim($_POST["postcode"]);
$Tel = trim($_POST["Tel"]);
$Email = trim($_POST["Email"]);
$Msn = trim($_POST["Msn"]);
$QQ = trim($_POST["QQ"]);
$Detail = trim($_POST["Detail"]);
$shibie = trim($_POST["shibie"]);
$Photo = trim($_POST["Photo"]);
$RegTime = date("Y-m-d H:i:s", time());
$msql->query("Select * From z_user where UserName='" . $UserName . "' order by meid desc");
if ($msql->next_record()) {
    ?>
    <script language=javascript>
        history.back();
        alert("用户已存在！请重新输入 ！")
    </script>
    <?php
    return;
}
$msql->query("insert into z_user set
	   	  `NickName`='" . $NickName . "',
      `UserName`='" . $UserName . "',
      `Cnum`='" . $Cnum . "',
	  `sex`='" . $sex . "',
	  `UserPass`='" . $UserPass . "',
	  `UserLevel`='" . $UserLevel . "',
	  `address`='" . $address . "',
      `postcode`='" . $postcode . "',
	  `Tel`='" . $Tel . "',
	  `Email`='" . $Email . "',
	  `Msn`='" . $Msn . "',
	  `QQ`='" . $QQ . "',
	  `Detail`='" . $Detail . "',
	  `RegTime`='" . $RegTime . "',
	  `Views`='已开通',
	  `Photo`='" . $Photo . "',
	  `LoginNum`='0' ");
session_start();
$msql->query("select * from z_user where Cnum='" . $Cnum . "'");
if ($msql->next_record()) {
    $UserLoginUserID = trim($msql->f("Meid"));
    $_SESSION["UserLoginUserID"] = $UserLoginUserID;
}
$_SESSION["UserLoginUserName"] = $UserName;
$_SESSION["UserLoginUserNamePass"] = $UserPass;
$_SESSION["UserLoginStatu"] = "login";
?>

    <html>
    <head>
        <title>更新添加成功!</title>
        <meta http-equiv=refresh content="0; url=user_login.php?st=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="../customer.css" type="text/css">
    </head>
    <body bgcolor="#FFFFFF" text="#000000">
    <table width="40%" border="1" cellspacing="10" cellpadding="0" align="center" class="table">
        <tr>
            <td>

                <table width="100%" cellspacing="0" cellpadding="0" bordercolordark="#FFFFFF"
                       bordercolorlight="#000000">
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
<?php
Function ChackError($ce, $detailin)
{

    if (strlen(trim($ce)) == 0) {
        ?>
        <script language=javascript>
            history.back();
            alert("[ <?php echo($detailin); ?>   ] 不能为空！请重新输入数据 ！");
        </script>
        <?php
        return;
    }
    if (strpos($ce, "'") <> -1 || strpos($ce, "%") <> -1 || strpos($ce, "<") <> -1
        || strpos($ce, ">") <> -1 || strpos($ce, "&") <> -1
        || strpos($ce, "`") <> -1 || strpos($ce, "\\") <> -1 || strpos($ce, "/") <> -1
    ) {

        ?>
        <script language=vbscript>
            history.back();
            alert("[ <%=detailin%>  ] 中不能含有[ ' % < > & \ / ` ]等非法字符请重新输入 ！");
        </script>
    <?php
    }
}

Function ChackNum($num, $info)
{
    if (is_numeric($num)) {
        ?>
        <script language=vbscript>
            history.back()
            alert("[ <?php echo($info); ?>  ] 只能是数字 ！")
        </script>
    <?php
    }
}

Function ChackPass($P, $RP, $info)
{

    if (strlen(trim($P)) == 0 || strlen(trim($RP)) == 0) {
        ?>
        <script language=javascript>
            history.back();
            alert("[ <?php echo($info);?>  ] 不能为空！")
        </script>
    <?php
    }

    if (strcmp($P, $RP) <> 0) {
        ?>

        <script language=vbscript>
            history.back()
            alert("<?php echo($info);?>有误请检查密码！")
        </script>
    <?php
    }
}

?>