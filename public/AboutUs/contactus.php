
<?php

	$_REQUEST[
	Search = "select * from z_contact"
    $msql->query($Search);
	w_company=trim($msql->f("w_company"))
    address=trim($msql->f("w_address"))
    tel=trim($msql->f("w_tel"))
    postcode=trim($msql->f("w_postcode"))
    Fax=trim($msql->f("w_Fax"))
    email=trim($msql->f("w_email"))
    Views=trim($msql->f("w_Views"))
	w_detail=trim($msql->f("w_detail"))
		 
'?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title> ��ϵ����</title>
<style type="text/css"><!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>

</head>

<body>
<div align="center">
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=window_top scrolling="no" src=../include/top.php  style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="762" valign="top"><table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
        <tr>
          <td height="32">&nbsp;&nbsp;��ҳ��&gt; ��ϵ����</td>
        </tr>
      </table>

          <table width="760" border="0" cellpadding="0" cellspacing="0">

            <tr>
              <td height="6"></td>
            </tr>
          </table>
          <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
            <tr>
              <td height="16" valign="top">&nbsp;</td>
              <td height="16">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td height="22" valign="top">&nbsp;</td>
              <td height="22"><font color="404040">��˾��ƣ�</font></td>
              <td><font color="404040"><?php echo( w_company ?></font></td>
            </tr>
            <tr>
              <td width="25" height="22" valign="top">&nbsp;</td>
              <td width="76" height="22" valign="top"><p style="line-height: 130%"><font color="404040">��˾��ַ��</font></td>
              <td width="649" height="22" valign="top"><font color="404040"><?php echo $address ?></font></td>
            </tr>
            <tr>
              <td height="22" valign="top">&nbsp;</td>
              <td height="22" valign="top"><font color="404040">��ϵ�绰��</font></td>
              <td height="22" valign="top"><font color="404040"><?php echo( tel ?></font></td>
            </tr>
            <tr>
              <td height="22" valign="top">&nbsp;</td>
              <td height="22" valign="top"><font color="404040">�������룺</font></td>
              <td height="22" valign="top"><font color="404040"><?php echo $postcode ?></font></td>
            </tr>
            <tr>
              <td height="22" valign="top">&nbsp;</td>
              <td height="22" valign="top"><font color="404040">��˾���棺</font></td>
              <td height="22" valign="top"><font color="404040"><?php echo( fax ?></font></td>
            </tr>
            <tr>
              <td height="22" valign="top">&nbsp;</td>
              <td height="22" valign="top"><font color="404040">Email��</font></td>
              <td height="22" valign="top"><font color="404040"><?php echo( email ?></font></td>
            </tr>
            <tr>
              <td height="22" valign="top">&nbsp;</td>
              <td height="22" valign="top"><font color="404040">���ݽ��ܣ�</font></td>
              <td height="22" valign="top"><font color="404040"><?php echo( w_detail ?></font></td>
            </tr>
            <tr>
              <td height="22" valign="top">&nbsp;</td>
              <td height="22" colspan="2" valign="top">&nbsp;</td>
            </tr>
          </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6" colspan="2"></td>
          </tr>
        </table>
		</td>
      <td width="222" align="right" valign="top"><iframe frameborder=0 name=window_left scrolling="no" src=../include/right_list_1.php  style=WIDTH:213;Z-INDEX:2" target="main"> </iframe></td>
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
