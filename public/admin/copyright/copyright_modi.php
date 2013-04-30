<?php
    include("../../include/common.inc.php");
    include("../../include/SubPages.php");
    include("../../_inc/checkoutTime2.php");
    $msql->query("select * from w_copyright");
    if($msql->next_record()){
        $w_companyname=trim($msql->f("w_companyname"));
        $w_copyright=trim($msql->f("w_copyright"));
        $w_tongji=trim($msql->f("w_tongji"));
        $w_beiannum=trim($msql->f("w_beiannum"));
        $w_views=trim($msql->f("w_views"));
        $View1=$w_views=="显示"?"checked":"";
        $View2=$w_views=="不显示"?"checked":"";
    }
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>信息修改</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="246" valign="top">
          <form action="copyright_modi_sub.php" method="post" name="sample" id="sample">
            <table width="770" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">修改备案信息</font></td>
                <td width="505" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="107" bgcolor="#FFFFFF"><div align="center"></div></td>
              </tr>
              <tr>
                <td height="18" colspan="3"> <div align="right"></div></td>
              </tr>
              <tr>
                <td width="124" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="27" bgcolor="F1F0F1"><font size="2">&nbsp;公司名称：</font></td>
                <td height="27" colspan="2" bgcolor="F1F0F1"><font size="2">
                  <input name="w_companyname" type="text" id="w_companyname" value="<?php echo  $w_companyname ?>" size="50" maxlength="50">
                </font></td>
              </tr>
              <tr>
                <td height="27" bgcolor="F1F0F1"><font size="2">&nbsp;Copyright信息：</font></td>
                <td height="27" colspan="2" bgcolor="F1F0F1"><font size="2">
                  <input name="w_copyright" type="text" id="w_copyright" value="<?php echo  $w_copyright?>" size="50" maxlength="50">
                </font></td>
              </tr>
              <tr>
                <td rowspan="2" valign="top" bgcolor="F1F0F1">&nbsp;统计信息：</td>
                <td height="22" colspan="2" valign="top" bgcolor="F1F0F1"><font size="2">
                  <textarea name="w_tongji" cols="50" rows="5" id="w_tongji"><?php echo  $w_tongji?></textarea>
                </font></td>
              </tr>
              <tr>
                <td height="27" colspan="2" bgcolor="F1F0F1"><font size="2">此处可粘贴用于统计的功能代码，添加后统计信息会显示在网页的下端。</font></td>
              </tr>
              <tr>
                <td height="27" bgcolor="F1F0F1">&nbsp;备案信息：</td>
                <td height="27" colspan="2" bgcolor="F1F0F1"><font size="2">
                  <input name="w_beiannum" type="text" id="w_beiannum" value="<?php echo  $w_beiannum?>" size="50" maxlength="20">
                </font></td>
              </tr>
              <tr>
                <td height="46" bgcolor="F1F0F1">&nbsp;</td>
                <td height="46" colspan="2" bgcolor="F1F0F1"> <input type="submit" name="Submit" value="修改"></td>
              </tr>
              <tr>
                <td height="21" colspan="3" valign="top">&nbsp;</td>
              </tr>
            </table>
          </form>
        </td>
    </tr>
  </table>

</body>
</html>

 