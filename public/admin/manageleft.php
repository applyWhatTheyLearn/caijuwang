<?php
include("../include/common.inc.php");
session_start();
$loginid = $_SESSION["loginid"];
if (!$loginid) {
    $_SESSION["err_mes"] = "您还没有正确登录或是未操作的时间过长!";
    header("Location:login.php");
    exit;
}
$AdminID = trim($_SESSION["UserID"]);
$msql->query("select * ,(select count(*) from Accredit where FotherID = T.AccID) as children from Accredit T where FotherID=0 and AdminID=" . $AdminID . " order by compositor");
?>
<html>
<head>
    <title>后台管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css.css" rel="stylesheet" type="text/css">
    <script src="subMenu.js"></script>
    <style type="text/css">
        <!--
        body {
            background-color: #00CCFF;
        }

        .STYLE1 {
            color: #FF0000
        }

        -->
    </style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="207" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr bgcolor="#FF0000">
        <td height="1" colspan="3"></td>
    </tr>
    <tr bgcolor="#FF9900">
        <td height="18" colspan="3"> &nbsp;&nbsp;<font
                color="#ffffff">欢迎你：<strong><?php echo  $_SESSION["UserName"] ?></strong></font></td>
    </tr>
    <tr>
        <td colspan="3">
            <div align="center"><img src="images/b_pic_1.gif" width="206" height="56"></div>
        </td>
    </tr>
    <tr>
        <td colspan="3"><img src="images/ht_pic1_r2_c1.gif" width="207" height="10"></td>
    </tr>
    <tr>
        <td width="4" background="images/ht_pic1_r3_c1.gif">&nbsp;</td>
        <td width="196" valign="top" bgcolor="#cccccc">
            <table width="180" border="0" align="center" cellpadding="0" cellspacing="2">
                <tr bgcolor="#EEEEEE">
                    <td height="22" colspan="3" background="images/line-1.gif">&nbsp;<font color="#FFFFFF">栏目列表</font>
                    </td>
                </tr>
                <tr>
                    <td width="11%" height="2" bgcolor="#666666"></td>
                    <td width="11%" height="2" colspan="2" bgcolor="#FF9900"></td>
                </tr>
            </table>
            <?php
            $menuid = 1;
            while ($msql->next_record()) {
                $TitleName = trim($msql->f("TitleName"));
                $LinkName = trim($msql->f("LinkName"));
                $AccID = trim($msql->f("AccID"));
                $children = trim($msql->f("children"));

                ?>
                <table width="180" border="0" align="center" cellpadding="1" cellspacing="1">
                    <tr>
                        <td width="154" background="images/line-2.gif" bgcolor="#EEEEEE">&nbsp;<font
                                color="#999999">■</font>&nbsp;<a href="<?php echo  $LinkName ?>"
                                                                 target="mainFrame" <?php if ($children > 0) {
                                                                                      echo  "onClick='viewSubMenu('.$AccID.','. $AdminID .','.$menuid .');";
                                                                                     }?>><font color="#ff0000"><?php echo  $TitleName ?></font></a></td>
                        <td width="12" bgcolor="#EEEEEE">
                            <div align="center"><a href="#"><font color="#ff0000"><img src="images/Head_r1_c3.gif"
                                                                                       name="img<?php echo $menuid?>"
                                                                                       border="0"
                                                                                       id="img<?php echo $menuid?>"
                                                                                       onClick="viewSubMenu(<?php echo  $AccID ?>,<?php echo  $AdminID ?>,<?php echo  $menuid ?>);"></font></a>
                            </div>
                        </td>
                    </tr>
                </table>
                <div id="submenu<?php echo $menuid?>" style="display:none"></div>
                <?php
                $menuid = $menuid + 1;

            }

            ?>

            <table width="180" border="0" align="center" cellpadding="2">
                <tr>
                    <td height="1" bgcolor="#666666"></td>
                    <td height="1" colspan="2" bgcolor="#FF9900"></td>
                </tr>
                <tr>
                    <td width="14" bgcolor="#EEEEEE">&nbsp;</td>
                    <td width="152" bgcolor="#EEEEEE">&nbsp;<font color="#ff0000">|</font> <a href="logout.php"
                                                                                              target="_parent"><font
                                color="#ff0000">退出登陆</font></a>

                        <div id="stylevalue" style="visibility:hidden"></div>
                    </td>
                </tr>
            </table>
        </td>
        <td width="7" background="images/ht_pic1_r3_c3.gif">&nbsp;</td>
    </tr>
    <tr valign="top">
        <td height="11" colspan="3"><img src="images/ht_pic1_r4_c1.gif" width="207" height="11"></td>
    </tr>
</table>
</body>
</html>
<script language="javascript">
    function viewSubMenu(accid, adminid, mid) //显示子菜单
    { //alert (accid);
        var SubName = eval(document.getElementById("submenu" + mid));
//alert (SubName.style.display);

        if (SubName.style.display == "block") {
            document.getElementById("submenu" + mid).style.display = "none" ;
            imgid = eval("img" + mid);
            imgid.src = "images/Head_r1_c3.gif";
        }
        else if (SubName.style.display == "none") {

            //var trvalue="<table width=180 border=0 align=center cellpadding=2><tr><td width=14 bgcolor=#EEEEEE>&nbsp;</td><td width=152 bgcolor=#EEEEEE>&nbsp;sjfksdjkfsdlfjas</td></tr></table>";
            showSubMenu(accid, adminid, mid);
            //SubName.innerHTML=trvalue;
            SubName.style.display = "block";
            imgid = eval("img" + mid);
            imgid.src = "images/Head_r1_c1.gif";

        }
    }//-->

</script>