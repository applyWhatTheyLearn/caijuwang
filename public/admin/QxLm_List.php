<?php
include("../include/common.inc.php");
include("../include/SubPages.php");
include("../_inc/checkoutTime.php");
$SearchClass = isset($_REQUEST[trim("SearchClass")]) ? $_REQUEST[trim("SearchClass")] : '';
$msql->query("select * from Accredit_t where FotherID_t=0 order by compositor_t");
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css.css" rel="stylesheet" type="text/css">
    <title>栏目列表</title>
    <script language="JavaScript">
        <!--
        Hiding
        function loadtwo(page2, page3) {
            parent.leftFrame.location.href = page2;
            parent.mainFrame.location.href = page3;
        }
        // -->
    </script>
    <script language="JavaScript">
        {
            parent.leftFrame.location.href = "manageleft.php"
        }
    </script>
    <style type="text/css">
        <!--
        .STYLE1 {
            color: #FFFFFF
        }

        -->
    </style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
        <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
        <td height="230" valign="top" bgcolor="#E4E4E4">
            <table width="740" border="0" cellspacing="1" cellpadding="0">
                <tr>
                    <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">网站栏目列表</font></td>
                    <form name="form1" method="post" action="QuanXian/QxLm_List.php">
                        <td width="514" bgcolor="#FFFFFF">
                            <div align="right"></div>
                        </td>
                        <td width="89" bgcolor="#FFFFFF">
                            <div align="center"><a href="Qxlm_addbig.php">添加主栏目</a></div>
                        </td>
                    </form>
                </tr>
            </table>
            <?php if ($msql->num_rows() > 0) { ?>
                <table width="740" border="0" cellpadding="0" cellspacing="1">
                    <tr>
                        <td height="15" colspan="11">
                            <div align="right">
                                <?php
                                //每页显示的条数
                                $page_size = 25;
                                //总条目数
                                $nums = $msql->num_rows();
                                //每次显示的页数
                                $sub_pages = 5;
                                //得到当前是第几页
                                $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                                $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "QuanXian/QxLm_List.php?pageno=", 2);
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="51" height="25" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
                        <td bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;栏目名称</font></td>
                        <td width="318" bgcolor="#999999"><span class="STYLE1">&nbsp;子栏目名称</span></td>
                        <td width="60" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">排序</font></div>
                        </td>
                        <td width="61" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">添加</font></div>
                        </td>
                        <td width="62" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">修改</font></div>
                        </td>
                        <td width="72" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">删除</font></div>
                        </td>
                    </tr>
                    <?php
                    $num = 1;
                    $beginPosition = $page_size * ($pageno - 1);
                    $endPosition = $page_size * $pageno;
                    //定位到开始位置
                    for ($m = 0; $m < $beginPosition; $m++) $msql->next_record();
                    for ($m = 0; $m < $endPosition; $m++) {
                        if ($msql->next_record()) {
                            $AccID_t = trim($msql->f("AccID_t"));
                            $FotherID_t = trim($msql->f("FotherID_t"));
                            $TitleName_t = trim($msql->f("TitleName_t"));
                            $compositor_t = trim($msql->f("compositor_t"));
                            $fsql->query("select * from Accredit_t where FotherID_t=" . $AccID_t . " order by compositor_t");
                            ?>
                            <tr bgcolor="#CCCCCC" onMouseOver="this.style.background = '#ffffff'"
                                onMouseOut="this.style.background = '#CCCCCC'">
                                <td valign="top"><font size="2">&nbsp;<font
                                            color="#993300"><?php echo $num?></font></font></td>
                                <td height="22" colspan="2">&nbsp;<font
                                        color="#990000"><?php echo  $TitleName_t ?></font></td>
                                <td height="22">
                                    <div align="center"><font color="#993300"><?php echo  $compositor_t ?></font></div>
                                </td>
                                <td>
                                    <div align="center"><a href="Qxlm_addsmall.php?AccID_t=<?php echo $AccID_t?>">添加</a>
                                    </div>
                                </td>
                                <td>
                                    <div align="center"><a href="Qxlm_Modi.php?AccID_t=<?php echo $AccID_t?>"><font
                                                size="2">修改</font></a></div>
                                </td>
                                <td>
                                    <div align="center"><a
                                            href="Qxlm_Del.php?AccID_t=<?php echo $AccID_t?>&FotherID_t=<?php echo  $FotherID_t ?>">
                                            <删除></删除>
                                        </a></div>
                                </td>
                            </tr>
                            <?php
                            $smnum = 1;
                            while ($fsql->next_record()) {
                                $TitleSmallName = trim($fsql->f("TitleName_t"));
                                $SmallAccID = trim($fsql->f("AccID_t"));
                                $SmFotherID_t = trim($fsql->f("FotherID_t"));
                                $Smcompositor_t = trim($fsql->f("compositor_t"));
                                ?>
                                <tr bgcolor="#F1F0F1" onMouseOver="this.style.background = '#ffcc00'"
                                    onMouseOut="this.style.background = '#F1F0F1'">
                                    <td valign="top">&nbsp;</td>
                                    <td width="108" height="22"><p align="right"><font
                                                color="#003366"><?php echo  $smnum ?>、</font></p></td>
                                    <td>&nbsp;<font color="#003366"><?php echo  $TitleSmallName ?></font></td>
                                    <td>
                                        <div align="center"><font color="#003366"><?php echo  $Smcompositor_t ?></font>
                                        </div>
                                    </td>
                                    <td>
                                        <div align="center"></div>
                                    </td>
                                    <td>
                                        <div align="center"><a
                                                href="Qxlm_Modi.php?AccID_t=<?php echo $SmallAccID?>"><font
                                                    size="2">修改</font></a></div>
                                    </td>
                                    <td>
                                        <div align="center"><a
                                                href="Qxlm_Del.php?AccID_t=<?php echo $SmallAccID?>&FotherID_t=<?php echo  $SmFotherID_t ?>">
                                                删除</a></div>
                                    </td>
                                </tr>
                                <?php
                                $smnum = $smnum + 1;
                            }
                            ?>
                            <tr>
                                <td height="1" colspan="11" bgcolor="#CCCCCC"></td>
                            </tr>
                        <?php
                        } else {
                            break;
                        }
                        $num += 1;
                    }
                    ?>
                    <tr>
                        <td height="21" colspan="11" valign="top">
                            <?php
                            //每页显示的条数
                            $page_size = 25;
                            //总条目数
                            $nums = $msql->num_rows();
                            //每次显示的页数
                            $sub_pages = 5;
                            //得到当前是第几页
                            $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                            $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "QuanXian/QxLm_List.php?pageno=", 2);
                            ?></td>
                    </tr>
                </table>
            <?php } else { ?>
                <table width="740" height="69" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td bgcolor="#FFFFFF">
                            <div align="center"><a href="../2006manage/MemberModi.php">暂无内容，请点击右上方添加文字添加相关内容</a></div>
                        </td>
                    </tr>
                </table>
            <?php } ?>
        </td>
    </tr>
</table>

</body>
</html>
