
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->
<?php
	$l_classid=trim($_REQUEST["l_classid"]);
	search="select * from z_fittings where l_id=".$l_classid.""
	 $msql->query (search)
	if($msql->next_record()){ fittings_name=trim($msql->f("l_name"))



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
-->
</style>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>���ͼƬ</title>
<script language="javascript">
function CheckForm (frm)
{

	if (frm.file1.value.length==0)
	{
		frm.file1.focus();
		frm.file1.select();
		alert ("��ѡ��ͼƬ��");
		return false;

	}


	if (frm.l_extname.value.length==0)
	{
		frm.l_extname.focus();
		frm.l_extname.select();
		alert ("��Ʋ���Ϊ�գ�");
		return false;

	}

</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="ProFittingsPic_addPic_Save.php" name="theForm" enctype="multipart/form-data" onSubmit="return CheckForm(this);">
  <table width="740" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td height="3" colspan="3" bgcolor="#996600"></td>
    </tr>
    <tr>
      <td height="21" bgcolor="#669966">&nbsp;<font color="#FFFFFF">���ͼƬ</font></td>
      <td width="507" height="21" bgcolor="#FFFF99">&nbsp;暂无内容�[ <font color="#0000FF"><?php echo( fittings_name ?></font> ]</td>
      <td width="92" bgcolor="#FFFF99"><div align="center"><a href="ProFittingsPic_List.php?l_classid=<?php echo  $l_classid ?>">����ͼƬ�б�</a></div></td>
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
      <td height="19" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;��ƣ�</font></td>
      <td height="19" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_extname" type="text" id="l_extname" size="25" maxlength="20"></td>
    </tr>
    <tr>
      <td height="19" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;�г��ۣ�</font></td>
      <td height="19" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_price1" type="text" id="l_price1" value="0" size="25" maxlength="6">
      *ֻ����С��6λ�������</td>
    </tr>
    <tr>
      <td height="19" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;�̳Ǽۣ�</font></td>
      <td height="19" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_price2" type="text" id="l_price2" value="0" size="25" maxlength="6">
      *ֻ����С��6λ�������</td>
    </tr>
    <tr>
      <td height="19" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：</font></td>
      <td height="19" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="0" size="25" maxlength="6">
        *只能是小于6位数的数字（数字越大越靠前）</td>
    </tr>
    <tr>
      <td height="21" bgcolor="F1F0F1">&nbsp;显示状态：</td>
      <td height="21" colspan="2" bgcolor="F1F0F1"><font size="2"> &nbsp;显示
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
        <input type="button" name="Submit2" value="取消" onClick="location='ProFittingsPic_List.php?l_classid=<?php echo  $l_classid ?>'">
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
