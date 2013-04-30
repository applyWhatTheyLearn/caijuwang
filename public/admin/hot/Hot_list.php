<?php
include("../../include/common.inc.php");
include("../../include/SubPages.php");
include("../../_inc/checkoutTime3.php");
$msql->query("select * from z_hot where 1=1 order by l_sort desc");
$l_classid='';
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>热门活动列表</title></head>
</html>
<html>
<head>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="230" valign="top">
          <table width="700" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td width="134" height="21" bgcolor="#993300">&nbsp;<font color="#FFFFFF">热门活动列表</font></td>
              <form name="form1" method="post" action="Hot_list.php">
                <td width="471" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="91" bgcolor="#FFFFFF"><div align="center"><a href="Hot_add.php?l_classid=<?php echo  $l_classid ?>">添加热门活动</a></div></td>
              </form>
            </tr>
            <tr>
              <td height="1" bgcolor="#A24E12"></td>
              <td height="1" colspan="2" bgcolor="#009999"></td>
            </tr>
          </table>
<?php if($msql->num_rows()>0){ ?>
          <table width="700" border="0" cellpadding="0" cellspacing="1">
            <tr>
              <td height="15" colspan="10"><div align="right">
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
                          $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Hot_list.php?pageno=", 2);
                      } else {
                          $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Hot_list.php?l_classid=" . $l_classid . "&pageno=", 2);
                      }
                      ?>
              </div></td>
            </tr>
              <tr>
                  <td width="41" height="20" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">序号</font></td>
                  <td width="467" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">热门活动标题</font></td>
                  <td width="58" bgcolor="#999999">&nbsp;<font color="#FFFFFF">排序</font></td>
                  <td width="60" bgcolor="#999999"><div align="center"><font color="#FFFFFF">状态</font></div></td>
                  <td width="34" bgcolor="#999999"><div align="center"><font color="#FFFFFF">修改</font></div></td>
                  <td width="33" bgcolor="#999999"><div align="center"><font color="#FFFFFF">删除</font></div></td>
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
                  $l_title = trim($msql->f("l_title"));
                  $l_detail = trim($msql->f("l_detail"));
                  $l_time = trim($msql->f("l_time"));
                  $l_sort = trim($msql->f("l_sort"));
                  $l_views = trim($msql->f("l_views"));
                  $SelectColor = $l_views == "不显示" ? "#ff0000" : "#000000";
                  $l_filename='';

			?>
            <tr>
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="#" title="文件名称：<?php echo $l_filename ?>"><font color="#993300"><?php echo $num?>、</font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="Hot_Detail.php?l_id=<?php echo $l_id ?>&l_classid=<?php echo  $l_classid ?>" ><font color="#990000"><?php echo $l_title?></font></a> <font color="#666666"><?php echo $l_time ?></font></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<?php echo $l_sort ?></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1"><div align="center"><font color="<?php echo $SelectColor ?>"><?php echo $l_views?></font></div></td>
              <td valign="bottom" bgcolor="F1F0F1"><div align="center">
                <div align="center"><a href="Hot_modi.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>"><font size="2">修改</font></a></div>
                <a href="Hot_modi.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>"><font size="2"></font></a></div></td>
              <td valign="bottom" bgcolor="F1F0F1"> <div align="center"><a href="Hot_del.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>">
                  删除</a></div></td>
            </tr>
            <tr>
              <td height="1" colspan="10" bgcolor="#999999"></td>
            </tr>
            <?php
              } else {
                  break;
              }
                  $num += 1;
              }
					?>
            <tr>
              <td height="21" colspan="10" valign="top">
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
                      $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Hot_list.php?pageno=", 2);
                  } else {
                      $subPages = new SubPages($page_size, $nums, $pageno, $sub_pages, "Hot_list.php?l_classid=" . $l_classid . "&pageno=", 2);
                  }
                  ?>
              </td>
            </tr>
        </table>
<?php } else { ?>
          <table width="700" height="69" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF"><div align="center">暂无内容</div></td>
            </tr>
          </table>
          <?php } ?>      </td>
    </tr>
  </table>
</div>
</body>
</html>


 
 