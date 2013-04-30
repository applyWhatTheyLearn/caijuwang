<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime3.php");
	$l_id=trim($_REQUEST["l_id"]);
	$pageno = trim($_REQUEST["pageno"]);
//	$l_classid=trim($_REQUEST["l_classid"]);
	$l_classid=trim($_REQUEST["l_classid"]);
    $msql->query("select * from z_fittings where l_id=".$l_id);
if($msql->next_record()){
    $l_name=trim($msql->f("l_name"));
    $l_detail=trim($msql->f("l_detail"));
    $l_sort=trim($msql->f("l_sort"));
    $l_views=trim($msql->f("l_views"));
    $View1 = $l_views == "显示" ? "checked" : "";
    $View2 = $l_views == "不显示" ? "checked" : "";
}

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>修改小类</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="300" valign="top">
        <div align="center">
          <form action="ProFittings_Modi_Submit.php" method="post" name="sample" id="sample">
            <table width="740" border="0" align="left" cellpadding="0" cellspacing="1">
              <tr>
                <td height="21" bgcolor="#009999">&nbsp;<font color="#FFFFFF">修改小类</font></td>
                <td width="541" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="71" bgcolor="#FFFFFF"><div align="center"><a href="ProFittings_List.php?pageno=<?php echo $pageno ?>&l_classid=<?php echo  $l_classid ?>">返回前页</a></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr>
                <td width="124" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td bgcolor="F1F0F1"><font size="2">&nbsp;分类名称：</font></td>
                <td colspan="2" bgcolor="F1F0F1"><input name="l_name" type="text" id="l_name" value="<?php echo $l_name ?>" size="70" maxlength="50"></td>
              </tr>
              
              <tr>
                <td valign="top" bgcolor="F1F0F1">&nbsp;简要说明：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><textarea name="l_detail" cols="70" rows="5" id="l_detail"><?php echo $l_detail ?></textarea></td>
              </tr>
              <tr>
                <td height="22" bgcolor="F1F0F1"><font size="2">&nbsp;排序信息：</font></td>
                <td height="22" colspan="2" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="<?php echo $l_sort ?>" size="25" maxlength="6">
                    *只能是小于6位数的数字（数字越大越靠前） </td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
                <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;显示
                  <input name="l_views" type="radio" value="显示" <?php echo $View1 ?>>
                  不显示 
                  <input type="radio" name="l_views" value="不显示" <?php echo $View2 ?>>
                  </font></td>
              </tr>
              <tr>
                <td height="30" bgcolor="F1F0F1">&nbsp;</td>
                <td height="30" colspan="2" bgcolor="F1F0F1"><input type="submit" name="Submit" value="修改">
                  <input type="button" name="Submit3" value="返回前页" onClick="location='ProFittings_List.php?pageno=<?php echo $pageno ?>&l_classid=<?php echo  $l_classid ?>'">
                  <input name="l_id" type="hidden" value="<?php echo $l_id?>">
                  <input name="pageno" type="hidden" value="<?php echo $pageno?>">
                  <input name="l_classid" type="hidden" value="<?php echo $l_classid?>">                  </td>
              </tr>
              <tr>
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
          </form>
        </div></td>
    </tr>
  </table>
</div>
</body>
</html>
