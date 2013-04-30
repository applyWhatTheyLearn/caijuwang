
<!--#include file="../../_inc/checkoutTime2.php" -->
<?php
	$l_classid=trim($_REQUEST["l_classid"]);
	l_id=trim($_REQUEST["l_id"))
	l_helpid=trim($_REQUEST["l_helpid"))

	search="select * from z_helpic  where l_id=".$l_id.""
	$msql->query(search)
	if($msql->next_record()){
	l_sort=trim($msql->f("l_sort"))
	l_views=trim($msql->f("l_views"))
	}


	Select Case l_Views
	   Case "显示"
	   View1="checked"
	   Case "不显示"
	   View2="checked"
	End Select
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
<title>修改ͼƬ</title>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form method="post" action="Pic_ModiPic_Save.php" name="form1" enctype="multipart/form-data">
  <table width="740" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">修改ͼƬ</font></td>
      <td width="505" height="21" bgcolor="#FFFFFF">&nbsp;</td>
      <td width="107" bgcolor="#FFFFFF"><div align="center"><a href="Pic_list.php?l_classid=<?php echo  $l_classid ?>&l_id=<?php echo $l_id ?>&l_helpid=<?php echo $l_helpid ?>">����ͼƬ�б�</a></div></td>
    </tr>
    <tr>
      <td height="18" colspan="3"><div align="right"></div></td>
    </tr>
    <tr>
      <td width="124" height="1" bgcolor="#999999"></td>
      <td height="1" colspan="2" bgcolor="#999999"></td>
    </tr>
    <tr>
      <td height="49" valign="top" bgcolor="F1F0F1"><font size="2"><br>
        &nbsp;ѡ��ͼƬ��</font></td>
      <td colspan="2" bgcolor="F1F0F1"><input type="file" name="file1" style="width:400" class="tx1" value=""></td>
    </tr>
    <tr>
      <td height="21" valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;排序：</font></td>
      <td height="21" colspan="2" valign="top" bgcolor="F1F0F1"><input name="l_sort" type="text" id="l_sort" value="<?php echo $l_sort ?>" size="25" maxlength="6">
        *只能是小于6位数的数字（数字越大越靠前）</td>
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
      <td height="23" bgcolor="F1F0F1">&nbsp;</td>
      <td height="23" colspan="2" bgcolor="F1F0F1">ע���ϴ�ͼƬ��С��Ҫ����700px�����أ���Ȼǰ̨ҳ�����Σ�</td>
    </tr>
    
    <tr>
      <td height="46" bgcolor="F1F0F1">&nbsp;</td>
      <td height="46" colspan="2" bgcolor="F1F0F1"><p>
        <input type="submit" name="Submit" value="开始上传">
        <input type="reset" name="reset" value="重新选择">
        <input type="button" name="Submit2" value="取消" onClick="location='Pic_list.php?l_classid=<?php echo  $l_classid ?>&l_id=<?php echo $l_id ?>&l_helpid=<?php echo $l_helpid ?>'">
        <input type="hidden" name="l_id" value="<?php echo $l_id?>">
        <input type="hidden" name="l_classid" value="<?php echo  $l_classid ?>">
        <input type="hidden" name="l_helpid" value="<?php echo $l_helpid ?>">
      </p></td>
    </tr>
    <tr>
      <td height="21" colspan="3" valign="top">&nbsp;</td>
    </tr>
  </table>
</form>
</body>
</html>
