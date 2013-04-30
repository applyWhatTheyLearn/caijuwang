<?php
include("../../include/common.inc.php");
include("../../include/SubPages.php");
include("../../_inc/checkoutTime2.php");
$msql->query("select * from z_helpclass where 1=1 order by l_sort desc")

?>
<html>
<head>
    <title>后台管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        <!--
        body {
            background-color: #0099CC;
        }

        -->
    </style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<div align="center">
    <table width="180" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr bgcolor="#EEEEEE">
            <td height="22" colspan="3" bgcolor="#996600">&nbsp;<font color="#FFFFFF">[ 分类名称 ] |</font> <a
                    href="helpClass_managelist.php" target="window_main"><font color="#FFFF00">分类管理</font></a></td>
        </tr>
        <form name="form1" method="post" action=""></form>
        <tr>
            <td width="88%" height="2" bgcolor="#666666"></td>
            <td width="12%" height="2" colspan="2" bgcolor="#666666"></td>
        </tr>
    </table>
    <?php
    $menuid = 1;
    while ($msql->next_record()) {
        $l_classname = trim($msql->f("l_classname"));
        $l_id = trim($msql->f("l_id"));
        ?>
        <table width="180" border="0" align="center" cellpadding="1" cellspacing="1">
            <tr>
                <td height="22" background="images/line-2.gif" bgcolor="#EEEEEE">&nbsp;<font color="#999999">■</font>&nbsp;<a
                        href="help_list.php?l_classid=<?php echo $l_id ?>" target="window_main"><font
                            color="#0000FF"><?php echo $l_classname ?></font></a>

                    <div align="center"></div>
                </td>
            </tr>
        </table>
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
