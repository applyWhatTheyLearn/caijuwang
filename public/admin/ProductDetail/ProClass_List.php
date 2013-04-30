<?php
include("../../include/common.inc.php");
include("../../include/SubPages.php");
include("../../_inc/checkoutTime3.php");
$msql->query("select * from z_class where l_fid=0 order by l_sort desc");
?>
<html>
<head>
    <title>后台管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <script src="subMenu.js"></script>
    <style type="text/css">
        <!--
        body {
            background-color: #CCCC99;
        }

        -->
    </style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div align="center">
    <table width="180" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr bgcolor="#EEEEEE">
            <td height="22" colspan="3" bgcolor="#999933">&nbsp;<font color="#00CCFF"> [ <font
                        color="#FFFFFF">商品分类名称</font> ]</font></td>
        </tr>
        <tr>
            <td width="88%" height="2" bgcolor="#666666"></td>
            <td width="12%" height="2" colspan="2" bgcolor="#666666"></td>
        </tr>
    </table>
    <?php
    $menuid = 1;
    while ($msql->next_record()) {
        $l_name = substr(trim($msql->f("l_name")), 0, 10);
        $LinkName = "Pro_Temp.php";
        $AccID = trim($msql->f("l_id"));
        $l_id = trim($msql->f("l_id"));

        ?>
        <table width="180" border="0" align="center" cellpadding="1" cellspacing="1">
            <tr>
                <td width="154" background="images/line-2.gif" bgcolor="#EEEEEE">&nbsp;<font color="#999999">■</font>&nbsp;<a
                        href="<?php echo  $LinkName ?>" target="window_main"
                        onClick="viewSubMenu(<?php echo  $l_id ?>,<?php echo  $menuid ?>);"><font
                            color="#0000FF"><?php echo  $l_name ?></font></a></td>
                <td width="12" bgcolor="#EEEEEE">
                    <div align="center"><a href="#"><font color="#ff0000"><img src="../images/Head_r1_c3.gif"
                                                                               name="img<?php echo $menuid?>" border="0"
                                                                               id="img<?php echo $menuid?>"
                                                                               onClick="viewSubMenu(<?php echo  $l_id ?>,<?php echo  $menuid ?>);"></font></a>
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
            <td width="14" height="1" bgcolor="#666666"></td>
            <td height="1" bgcolor="#666666"></td>
        </tr>
    </table>
</div>
</body>
</html>
<script language="javascript">
    function viewSubMenu(l_id, mid) //显示子菜单
    {
        var SubName = eval(document.getElementById("submenu" + mid));

        if (SubName.style.display == "block") {
            document.getElementById("submenu" + mid).style.display = "none"
            imgid = eval("img" + mid);
            imgid.src = "../images/Head_r1_c3.gif";
        }
        else if (SubName.style.display == "none") {


            showSubMenu(l_id, mid);
            SubName.style.display = "block";
            imgid = eval("img" + mid);
            imgid.src = "../images/Head_r1_c1.gif";

        }
    }//-->

</script>