
<!--#include file="../_inc/checkoutTime.php"-->
<?php
    ManageName=trim($_REQUEST["ManageName"))
	OUserID=trim($_REQUEST["UserID"))
	$_REQUEST[
	Search = "select * from Accredit where FotherID=0 and AdminID="&OUserID&" order by compositor"
    $msql->query($Search);
'?>
<html>
<head>
<title>������վ后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css.css" rel="stylesheet" type="text/css">
<script language="JavaScript">
<!-- Hiding
  function loadtwo(page2, page3) {
     parent.leftFrame.location.href=page2;
     parent.mainFrame.location.href=page3;
}
// -->
</script>
</head>

<body bgcolor="#CCCCCC" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="207" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr bgcolor="#009999">
    <td height="1" colspan="3"></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="25" colspan="3"> &nbsp;��½����ƣ� <?php echo( $_SESSION["UserName") ?>
      <div align="center"></div></td>
  </tr>
  <tr>
    <td colspan="3"><img src="images/ht_pic1_r2_c1.gif" width="207" height="10"></td>
  </tr>
  <tr>
    <td width="4" background="images/ht_pic1_r3_c1.gif">&nbsp;</td>
    <td width="196" valign="top">
      <table width="180" border="0" align="center" cellpadding="0" cellspacing="2">
        <tr>
          <td height="19" colspan="2" bgcolor="#EEEEEE">&nbsp;排序：Ա����<font color="#0000FF"><?php echo $ManageName ?></font></td>
        </tr>
        <tr>
          <td height="19" colspan="2" bgcolor="#EEEEEE">&nbsp;<font color="#FF0000">�ɲ�������ģ�����£�</font></td>
        </tr>
        <tr>
          <td width="17%" height="1" bgcolor="#666666"></td>
          <td width="83%" height="1" bgcolor="#666666"></td>
        </tr>
		<?php
		 num=1
		 while($msql->next_record()){
		 AccID_t=trim($msql->f("AccID_t"))
		 TitleName=trim($msql->f("TitleName"))
		 UserID=trim($msql->f("AdminID"))
		 AccID=trim($msql->f("AccID"))
		?>
        <tr>
          <td height="17" bgcolor="#EEEEEE"><div align="center"><?php echo(num?></div></td>
          <td bgcolor="#EEEEEE">&nbsp;<a href="QX_Detail.php?UserID=<?php echo $UserID?>&AccID=<?php echo(AccID?>&AccID_t=<?php echo( AccID_t ?>" target="mainFrame"><?php echo $TitleName ?></a></td>
        </tr>
		<?php
		 num=num+1

		 }

		?>
        <tr>
          <td height="1" bgcolor="#666666"></td>
          <td height="1" bgcolor="#666666"></td>
        </tr>
        <tr bgcolor="#EEEEEE">
          <td height="18">&nbsp;</td>
          <td bgcolor="#EEEEEE">&nbsp;<a href="#" onClick="loadtwo('manageleft.php','User_List.php')"><font color="#FF0000">返回前页</font></a></td>
        </tr>
      </table></td>
    <td width="7" background="images/ht_pic1_r3_c3.gif">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td height="16" colspan="3"><img src="images/ht_pic1_r4_c1.gif" width="207" height="11"></td>
  </tr>
</table>

  
<div align="center"><br>
  <?php
	$_REQUEST[
	Search = "select * from Accredit_t where FotherID_t=0 order by compositor_t"
    $msql->query($Search);
	'response.Write("Search="&Search)
?>
</div>
<table width="207" border="0" align="center" cellpadding="0" cellspacing="0">
  <form name="form1" method="post" action="Qx_AddClass$_REQUEST[" >
    <tr>
      <td colspan="3"><img src="images/ht_pic1_r2_c1.gif" width="207" height="10"></td>
    </tr>
    <tr>
      <td width="10" background="images/ht_pic1_r3_c1.gif">&nbsp;</td>
      <td width="190"><div align="center">
	  	
          <table width="180" border="0" cellspacing="2" cellpadding="0">
            <tr>
              <td>��ӷ��ࣺ</td>
            </tr>
            <tr>
              <td><select name="AddClass">
                  <option value="0" selected>ѡ������ӵķ���</option>
				  <?php num1=1
				    while($msql->next_record()){
					TitleName=trim($msql->f("TitleName_t"))
				  ?>
                  <option value="<?php echo $TitleName ?>"><?php echo( num1 ?>��<?php echo $TitleName ?></option>
				 <?php
		 		   num1=num1+1

		           }

		          ?>
                </select></td>
            </tr>
            <tr>
              <td><input name="Submit" type="submit" class="SubmitButtom" value="��ӷ���">
                <input name="OUserID" type="hidden" value="<?php echo(OUserID?>">
				<input name="ManageName" type="hidden" value="<?php echo(ManageName?>">
              </td>
            </tr>
          </table>
        </div></td>
      <td width="7" background="images/ht_pic1_r3_c3.gif">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><img src="images/ht_pic1_r4_c1.gif" width="207" height="11"></td>
    </tr></form>
  </table>
<div align="center">
  <?php
	$_REQUEST[
	Search = "select * from Accredit where FotherID=0 and AdminID="&OUserID&" order by compositor"
    $msql->query($Search);
?>
</div>
<div align="center"><br>
  
    <table width="207" border="0" align="center" cellpadding="0" cellspacing="0">
	<form name="Form2" method="post" action="Qx_DelClass$_REQUEST[">
      <tr>
        <td colspan="3"><img src="images/ht_pic1_r2_c1.gif" width="207" height="10"></td>
      </tr>
      <tr>
        <td width="10" background="images/ht_pic1_r3_c1.gif">&nbsp;</td>
        <td width="190"><div align="center">
            <table width="180" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td>ɾ����ࣺ</td>
              </tr>
              <tr>
                <td><select name="DelClass">
                    <option value="0" selected>ѡ����ɾ��ķ���</option>
                    <?php num2=1
				    while($msql->next_record()){
					TitleName=trim($msql->f("TitleName"))
				  ?>
                    <option value="<?php echo( TitleName ?>"><?php echo( num2 ?>��<?php echo( TitleName ?></option>
                    <?php
		 		   num2=num2+1

		           }

		          ?>
                  </select></td>
              </tr>
              <tr>
                <td><input name="Submit2" type="submit" class="SubmitButtom" value="ɾ�����">
                  <input name="OUserID" type="hidden" value="<?php echo(OUserID?>">
				  <input name="ManageName" type="hidden" value="<?php echo(ManageName?>">
				  </td>
              </tr>
            </table>
          </div></td>
        <td width="7" background="images/ht_pic1_r3_c3.gif">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><img src="images/ht_pic1_r4_c1.gif" width="207" height="11"></td>
      </tr></form>
    </table>
  
  <br>
  <table width="207" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="3"><img src="images/ht_pic1_r2_c1.gif" width="207" height="10"></td>
      </tr>
      <tr>
        <td width="10" background="images/ht_pic1_r3_c1.gif">&nbsp;</td>
        <td width="190"><div align="center">
            
          <input name="Submit22" type="button" class="QxReturn" onClick="loadtwo('manageleft.php','User_List.php')"  value="   �� �� ǰ ҳ   ">
          </div></td>
        <td width="7" background="images/ht_pic1_r3_c3.gif">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3"><img src="images/ht_pic1_r4_c1.gif" width="207" height="11"></td>
      </tr>
  </table>
  <br>
</div>
</body>
</html>
