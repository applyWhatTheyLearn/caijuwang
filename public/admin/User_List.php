<?php
include("../include/common.inc.php");
include("../include/SubPages.php");
include("../_inc/checkoutTime2.php");
include("../_inc/func.php");
$UserName = isset($_SESSION["UserName"]) ? trim($_SESSION["UserName"]) : '';
$UserID = isset($_SESSION["UserID"]) ? trim($_SESSION["UserID"]) : '';
$SearchClass = isset($_REQUEST["SearchClass"]) ? trim($_REQUEST["SearchClass"]) : '';
$msql->query("select * from admin");
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css.css" rel="stylesheet" type="text/css">
    <title>用户列表</title>
    <script language="JavaScript">
        <!--
        Hiding
        function loadtwo(page2, page3) {
            parent.leftFrame.location.href = page2;
            parent.mainFrame.location.href = page3;
        }
        // -->
    </script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
        <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
        <td height="230" valign="top">
            <table width="740" border="0" cellspacing="1" cellpadding="0">
                <tr>
                    <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">登录用户列表</font></td>
                    <form name="form1" method="post" action="User_List.php">
                        <td width="514" bgcolor="#FFFFFF">
                            <div align="right"></div>
                        </td>
                        <td width="89" bgcolor="#FFFFFF">
                            <div align="center"><a href="User_add.php">添加用户</a></div>
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
                                $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "User_List.php?pageno=", 2);
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="95" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
                        <td width="165" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;会员姓名</font></td>
                        <td width="175" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;</font><font
                                color="#FFFFFF">建立时间</font>

                            <div align="center"></div>
                        </td>
                        <td width="78" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">开通状态</font></div>
                        </td>
                        <td width="64" bgcolor="#999999">
                            <div align="center"><font color="#FFFFFF">权限设置</font></div>
                        </td>
                        <td width="74" bgcolor="#999999">
                            <div align="center"></div>
                            <div align="center"></div>
                            <div align="center"><font color="#FFFFFF">修改</font></div>
                        </td>
                        <td width="81" bgcolor="#999999">
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
                            $UserID = trim($msql->f("UserID"));
                            $UserName = trim($msql->f("UserName"));
                            $UserPass = trim($msql->f("UserPass"));
                            $opens = trim($msql->f("opens"));
                            $InpuTime = trim($msql->f("InpuTime"));
                            if ($opens == "open") {
                                $OpenView = "已开通ͨ";
                                $SelectColor = "#0066CC";
                            } elseif ($opens == "close") {
                                $OpenView = "未开通ͨ";
                                $SelectColor = "#FF0000";
                            }
                            ?>
                            <tr>
                                <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<font
                                            color="#993300"><?php echo $num?></font></font></td>
                                <td height="22" bgcolor="F1F0F1">&nbsp;<?php echo $UserName ?></td>
                                <td bgcolor="F1F0F1"> &nbsp;<?php echo $InpuTime ?></td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><font
                                            color="<?php echo $SelectColor ?>"><?php echo $OpenView?></a></font></div>
                                </td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><a href="#"
                                                           onClick="loadtwo('QX_list.php?ManageName=<?php echo $UserName?>&UserID=<?php echo $UserID?>','managedetail.php')"><font
                                                color="#FF0000">权限设置</font></a></div>
                                </td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><a href="User_Modi.php?UserID=<?php echo $UserID?>"><font
                                                size="2">修改</font></a>
                                    </div>
                                </td>
                                <td bgcolor="F1F0F1">
                                    <div align="center"><a href="User_Del.php?UserID=<?php echo $UserID?>">
                                            删除</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td height="1" colspan="11" bgcolor="#999999"></td>
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
                            <div align="right"><?php
                                //每页显示的条数
                                $page_size = 25;
                                //总条目数
                                $nums = $msql->num_rows();
                                //每次显示的页数
                                $sub_pages = 5;
                                //得到当前是第几页
                                $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                                $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "User_List.php?pageno=", 2);
                                ?>
                            </div>
                        </td>
                    </tr>
                </table>
            <?php
            } else {
                ?>
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
