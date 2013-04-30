
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->
<?php
	l_id=trim($_REQUEST["l_id"))

'?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>���?��</title>
<style type="text/css">
<!--
.STYLE3 {color: #993300}
body {
	background-color: #EEEEEE;
}
-->
</style>
<script language="javascript">
function CheckForm (frm)
{

	if (frm.ChuLiDetail.value.length==0)
	{
		frm.ChuLiDetail.focus();
		frm.ChuLiDetail.select();
		alert ("������Ϣ����Ϊ�գ�");
		return false;

	}



}

	function closewindow(){
	window.close()
	}

</script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
          
            <table width="390" border="0" align="center" cellpadding="0" cellspacing="1">
            <form action="OrderChange_Sub.php" method="post" name="sample" id="sample"  onSubmit="return CheckForm(this);">
              <tr>
                <td height="21" bgcolor="#993300">&nbsp;<font color="#FFFFFF">暂无内容</font></td>
                <td width="311" height="21" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td width="76" height="1" bgcolor="#999999"></td>
                <td height="1" bgcolor="#999999"></td>
              </tr>
              <tr>
                <td height="23" colspan="2" bgcolor="F1F0F1"><iframe frameborder=0 name=window_left scrolling="auto" src="OrderChangeList.php?l_id=<?php echo $l_id ?>" style="HEIGHT:300px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
              </tr>
              <tr>
                <td height="23" colspan="2" bgcolor="F1F0F1">������Ϣ��</td>
              </tr>
              <tr>
                <td height="23" colspan="2" bgcolor="F1F0F1"><textarea name="ChuLiDetail" cols=52 rows="3" id="ChuLiDetail"></textarea></td>
              </tr>
              <tr>
                <td height="23" bgcolor="F1F0F1">&nbsp;���״̬��</td>
                <td height="23" bgcolor="F1F0F1"><font size="2"> &nbsp;排序：�
                  <input name="change" type="radio" value="�����">
                  ������
                  <input name="change" type="radio" value="������" checked >
                </font></td>
              </tr>
              <tr>
                <td height="57" colspan="2" bgcolor="F1F0F1">
                <input type="submit" name="Submit" value="�ύ������Ϣ">
                  <input name="l_id" type="hidden" id="l_id" value="<?php echo $l_id ?>">
                  <input type="button" name="Submit2" value="�رմ���" onClick="closewindow();"></td>
              </tr>
              </form>
</table>
        
</body>
</html>

 