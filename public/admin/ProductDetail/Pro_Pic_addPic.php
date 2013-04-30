<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
include("../../_inc/func.php");
$l_classid=trim($_REQUEST["l_classid"]);
$msql->query ("select * from z_product where l_id=".$l_classid);
if($msql->next_record()){
    $product_name=trim($msql->f("l_name"));
 }
?>

<html>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #E4E4E4;
}
.STYLE1 {color: #0033FF}
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>添加图片</title>
<script language="javascript">
function CheckForm (frm)
{

	if (frm.file1.value.length==0)
	{
		frm.file1.focus();
		frm.file1.select();
		alert ("请选择图片！");
		return false;

	}
}


</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="Pro_Pic_addPic_Save.php" name="theForm" enctype="multipart/form-data" onSubmit="return CheckForm(this);">
  <table width="740" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td height="3" colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td height="21" bgcolor="#999966">&nbsp;<font color="#FFFFFF">添加图片</font></td>
      <td width="507" height="21" bgcolor="#FFFFCC">&nbsp;所属产品： <font color="#0000FF"><?php echo $product_name ?></font> ]</td>
      <td width="92" bgcolor="#FFFFCC"><div align="center"><a href="Pro_Pic_List.php?l_classid=<?php echo  $l_classid ?>">返回图片列表</a></div></td>
    </tr>
    <tr>
      <td height="18" colspan="3">
      <div align="right"></div></td>
    </tr>
    <tr>
      <td width="137" height="1" bgcolor="#999999"></td>
      <td height="1" colspan="2" bgcolor="#999999"></td>
    </tr>
    <tr>
      <td height="32" bgcolor="F1F0F1"><font size="2">&nbsp;选择图片：</font></td>
      <td colspan="2" bgcolor="F1F0F1"><input type="file" name="file1" style="width:400" class="tx1" value=""></td>
    </tr>
    <tr>
      <td height="21" valign="top" bgcolor="F1F0F1">&nbsp;</td>
      <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><p><span class="STYLE1">纵向图片：（500 x 667 像素）并且图片大小不能超过不能超过200K<br>
横向图片：（500 x 375 像素）并且图片大小不能超过不能超过200K</span></p>
        </td>
    </tr>
    <tr>
      <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;图片注释：</font></td>
      <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_title" type="text" id="l_title" size="25" maxlength="20">
        文字说明（简要不要超过10个汉字）</td>
    </tr>
    <tr>
      <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：</font></td>
      <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="0" size="25" maxlength="6">
        *只能是小于6位数的数字（数字越大越靠前）</td>
    </tr>
    <tr>
      <td height="23" bgcolor="F1F0F1">&nbsp;显示状态：</td>
      <td height="23" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;显示
        <input name="l_views" type="radio" value="显示" checked>
        不显示
        <input type="radio" name="l_views" value="不显示">
      </font></td>
    </tr>
    
    <tr>
      <td height="16" valign="top" bgcolor="F1F0F1">&nbsp;</td>
      <td colspan="2" bgcolor="F1F0F1">&nbsp;</td>
    </tr>
    <tr>
      <td height="46" bgcolor="F1F0F1">&nbsp;</td>
      <td height="46" colspan="2" bgcolor="F1F0F1"><p>
        <input type="submit" name="Submit" value="开始上传">
        <input type="reset" name="reset" value="重新选择">
        <input type="button" name="Submit2" value="取消" onClick="location='Pro_Pic_List.php?l_classid=<?php echo  $l_classid ?>'">
        <input type="hidden" name="l_classid" value="<?php echo  $l_classid ?>">
      </p></td>
    </tr>
    <tr>
      <td height="21" colspan="3" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
