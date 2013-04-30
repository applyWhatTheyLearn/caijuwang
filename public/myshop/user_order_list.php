<?php
include("../include/common.inc.php");
include("../include/SubPages.php");
session_start();
$UserLoginStatu = isset($_SESSION["UserLoginStatu"]) ? trim($_SESSION["UserLoginStatu"]) : '';
$UserLoginUserID = isset($_SESSION["UserLoginUserID"]) ? trim($_SESSION["UserLoginUserID"]) : '';
if (strlen($UserLoginStatu)==0 || $UserLoginStatu<>"login") {
 ?>
  <script language=javascript>
    alert("您还没有登陆");
    location.href="user_login.php";
  </script>
<?php
    exit;
}
$OrderDetail = "SELECT z_user.Meid, z_user.Cnum, z_user.UserName, z_order.* FROM z_user INNER JOIN z_order ON z_user.Meid = z_order.l_userid";
    $msql->query("select * from (".$OrderDetail.") t  where t.meid=".$UserLoginUserID." order by t.l_ordertime desc");
		 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>我的订单</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {color: #333333}
-->
</style></head>

<body>
<div align="center">
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=window_top scrolling="no" src=../include/top.php  style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="222" valign="top"><iframe frameborder=0 name=window_left scrolling="no" src=../include/myshop_left1.php  style="WIDTH:213;Z-INDEX:2" target="main"> </iframe></td>
      <td width="762" valign="top"><table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
        <tr>
          <td height="32">&nbsp;&nbsp;首页：&gt; 我的商城 &gt; 我的订单 </td>
        </tr>
      </table>
      <?php if ($msql->num_rows() > 0) { ?>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="24">
                <div align="right">
                    <?php
                    //每页显示的条数
                    $page_size = 20;
                    //总条目数
                    $nums = $msql->num_rows();
                    //每次显示的页数
                    $sub_pages = 5;
                    //得到当前是第几页
                    $pageno = isset($_GET["pageno"]) ? $_GET["pageno"] : 1;
                    if (empty($l_classid)) {
                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "user_order_list.php?pageno=", 2);
                    } else {
                        $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "user_order_list.php?l_classid=" . $l_classid . "&pageno=", 2);
                    }
                    ?>
                </div>
            </td>
          </tr>
          <tr>
            <td height="6"></td>
          </tr>
        </table>
        <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
          <tr>
            <td height="23" colspan="2" bgcolor="#EBEBEB">&nbsp;<span class="STYLE1">序号</span></td>
            <td width="164" bgcolor="#EBEBEB">&nbsp;<span class="STYLE1">订单号</span></td>
            <td width="343" bgcolor="#EBEBEB">&nbsp;<span class="STYLE1">订购时间</span></td>
            <td width="148" bgcolor="#EBEBEB">&nbsp;<span class="STYLE1">处理状态</span></td>
          </tr>
           <tr>
            <td height="1" colspan="5" background="../images/pic_4_9.gif"></td>
          </tr>
            <?php
            $num = 1;
            $beginPosition = $page_size * ($pageno - 1);
            $endPosition = $page_size * $pageno;
            //定位到开始位置
            for ($m = 0; $m < $beginPosition; $m++) $msql->next_record();
            for ($m = 0; $m < $endPosition; $m++) {
            if ($msql->next_record()) {
                $l_id = trim($msql->f("l_id"));
                $l_title = trim($msql->f("l_orderform"));
                $l_time = trim($msql->f("l_ordertime"));
                $l_takeffectime = trim($msql->f("l_takeffectime"));
                $l_orderstatu = trim($msql->f("l_orderstatu"));

                ?>


          <tr>
            <td height="21" colspan="2" bgcolor="#F3F3F3">&nbsp;<strong><font color="#333333"><?php echo $num ?>、</font></strong></td>
            <td bgcolor="#F3F3F3">&nbsp;<a href="user_order_detail.php?l_id=<?php echo $l_id ?>" target="_parent"><font color="#ff0000"><?php echo $l_title ?></font></a></td>
            <td bgcolor="#F3F3F3">&nbsp;<font color="404040"><?php echo $l_time ?></font></td>
            <td bgcolor="#F3F3F3">&nbsp;<font color="404040"><?php echo $l_orderstatu ?></font></td>
          </tr>
          <tr>
            <td height="1" colspan="5" background="../images/pic_4_9.gif"></td>
          </tr>
          <tr>
            <td width="21" height="5"></td>
            <td height="5" colspan="4"></td>
          </tr>
            <?php
            } else {
                break;
            }
                $num += 1;
            }
          ?>
        </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6" colspan="2"></td>
          </tr>
        </table>
      <?php } ?></td>
    </tr>
    <tr>
      <td height="6" colspan="2"></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=window_bottom scrolling="no" src=../include/copyright.php  style="HEIGHT:100px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <br>
  <br>
</div>
</body>
</html>
