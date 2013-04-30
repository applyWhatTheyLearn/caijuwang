<?php
include("../../include/common.inc.php");
include("../../include/SubPages.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$SearchClass = isset($_REQUEST[trim("SearchClass")]) ? $_REQUEST[trim("SearchClass")] : '';

$Search = "Select * From z_user where 1=1 order by meid desc";

switch ($SearchClass) {
    case "姓名":
        $Sname = trim($_REQUEST["SearchDetail"]);
        ChackError($Sname, "姓名");
        $Search = "Select * From z_user where  ( agent_Name like '%" . $Sname . "%')  ORDER BY Meid DESC";
        break;
    case "用户级别":
        $UserLevel = trim($_REQUEST["SearchDetail"]);
        ChackError($UserLevel, "用户级别");
        $Search = "Select * From z_user where  ( Userlevel like '%" . $UserLevel . "%')  ORDER BY Meid DESC";
        break;
    case "用户状态":
        $UserStau = trim($_REQUEST["SearchDetail"]);
        ChackError(UserStau, "用户状态");
        $Search = "Select * From z_user where  ( UserStau like '%" . $UserStau . "%')  ORDER BY Meid DESC";
        break;
    case "省份":
        $Sshengfen = trim($_REQUEST["SearchDetail"]);
        ChackError($Sshengfen, "省份");
        $Search = "Select * From z_user where  ( province like '%" . $Sshengfen . "%')  ORDER BY Meid DESC";
        break;
    case "公司名称":
        $Scomanyname = trim($_REQUEST["SearchDetail"]);
        ChackError($Scomanyname, "公司名称");
        $Search = "Select * From z_user where  ( Company_Name like '%" . $Scomanyname . "%')  ORDER BY Meid DESC";
        break;
    case "地址":
        $SAddress = trim($_REQUEST["SearchDetail"]);
        ChackError($SAddress, "地址ַ");
        $Search = "Select * From z_user where  ( Address like '%" . $SAddress . "%')  ORDER BY Meid DESC";
        break;
}
$msql->query($Search);
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css.css" rel="stylesheet" type="text/css">
    <title>用户列表</title>
    <script language="JavaScript">
        <!--
        function loadtwo(page2, page3) {
            parent.leftFrame.location.href = page2;
            parent.mainFrame.location.href = page3;
        }
        // -->
    </script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table width="740" border="0" cellspacing="1" cellpadding="0">
    <tr>
        <td width="133" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">用户列表</font></td>
        <form name="form1" method="post" action="Member_List.php">
            <td width="514" bgcolor="#FFFFFF">
                <div align="right"><font color="#333333" size="2">查询：</font>
                    <select name="SearchClass">
                        <option>所有用户</option>
                        <option value="姓名">用户姓名</option>
                        <option value="用户级别">用户级别</option>
                        <option value="用户状态">用户状态</option>
                        <option value="省份">所在省份</option>
                        <option value="公司名称">公司名称</option>
                        <option value="地址">公司地址</option>
                    </select>
                    <input name="SearchDetail" type="text" size="20">
                    <input type="submit" name="Submit" value="查询">
                </div>
            </td>
            <td width="89" bgcolor="#FFFFFF">
                <div align="center"><a href="Member_add.php">添加新用户</a></div>
            </td>
        </form>
    </tr>
</table>
<?php if ($msql->num_rows() > 0) { ?>
    <table width="740" border="0" cellpadding="0" cellspacing="1">
        <tr>
            <td height="15" colspan="13">
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
                    if (empty($l_classid)) {
                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Member_List.php?pageno=", 2);
                    } else {
                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Member_List.php?l_classid=" . $l_classid . "&pageno=", 2);
                    }
                    ?>
                </div>
            </td>
        </tr>
        <tr>
            <td width="48" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
            <td width="73" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;会员号</font>

                <div align="center"></div>
            </td>
            <td width="115" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;用户姓名</font></td>
            <td width="142" bgcolor="#999999"><font color="#FFFFFF">&nbsp;昵称</font></td>
            <td width="187" bgcolor="#999999">
                <div align="center"><font color="#FFFFFF">注册时间</font></div>
            </td>
            <td width="53" bgcolor="#999999">
                <div align="center"><font color="#FFFFFF">登陆次数</font></div>
            </td>
            <td width="43" bgcolor="#999999">
                <div align="center"><font color="#FFFFFF">状态</font></div>
            </td>
            <td width="34" bgcolor="#999999">
                <div align="center"><font color="#FFFFFF">修改</font></div>
            </td>
            <td width="35" bgcolor="#999999">
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
                $Meid = trim($msql->f("Meid"));
                $UserName = trim($msql->f("UserName"));
                $NickName = trim($msql->f("NickName"));
                $Cnum = trim($msql->f("Cnum"));
                $RegTime = trim($msql->f("RegTime"));
                $LoginNum = trim($msql->f("LoginNum"));
                $Views = trim($msql->f("Views"));
                ?>
                <tr bgcolor="#F1F0F1" onMouseOver="this.style.background = '#ffffff'"
                    onMouseOut="this.style.background = '#F1F0F1'">
                    <td valign="top"><font size="2">&nbsp;<font color="#993300"><?php echo $num?></font></font></td>
                    <td height="18">&nbsp;<?php echo  $Cnum ?></td>
                    <td height="18">&nbsp;<a
                            href="Member_Detail.php?Meid=<?php echo $Meid?>&pageno=<?php echo $pageno?>"><?php echo  $UserName ?></a>
                    </td>
                    <td height="18">&nbsp;<?php echo  $NickName ?></td>
                    <td height="18" bgcolor="#C2C2C2">
                        <div align="center"><?php echo  $RegTime ?></div>
                    </td>
                    <td height="18" bgcolor="#CCCCCC">
                        <div align="center"><?php echo  $LoginNum ?></div>
                    </td>
                    <td>
                        <div align="center"><?php echo  $Views ?></div>
                    </td>
                    <td>
                        <div align="center"><a
                                href="Member_Modi.php?Meid=<?php echo $Meid?>&pageno=<?php echo $pageno?>"><font
                                    size="2">修改</font></a></div>
                    </td>
                    <td>
                        <div align="center"><a
                                href="Member_Del.php?Meid=<?php echo $Meid?>&pageno=<?php echo $pageno?>">
                                删除</a></div>
                    </td>
                </tr>
                <tr>
                    <td height="1" colspan="13" bgcolor="#999999"></td>
                </tr>
            <?php
            } else {
                break;
            }
            $num += 1;
        }
        ?>
        <tr>
            <td height="21" colspan="13" valign="top">
                <?php
                //每页显示的条数
                $page_size = 25;
                //总条目数
                $nums = $msql->num_rows();
                //每次显示的页数
                $sub_pages = 5;
                //得到当前是第几页
                $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                if (empty($l_classid)) {
                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Member_List.php?pageno=", 2);
                } else {
                    $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Member_List.php?l_classid=" . $l_classid . "&pageno=", 2);
                }


                ?>
            </td>
        </tr>
    </table>
<?php } else { ?>
    <table width="740" height="69" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td bgcolor="#FFFFFF">
                <div align="center"><a href="Member_add.php">暂无内容，请点击右上方添加文字添加相关内容</a></div>
            </td>
        </tr>
    </table>
<?php } ?>
</div></td>
</tr>
</table>
</body>
</html>
