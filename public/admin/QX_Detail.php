
<!--#include file="../_inc/checkoutTime.php"-->
<?php
   
	'TitleName=trim($_REQUEST["TitleName"))
	UserID=trim($_REQUEST["UserID"))
	AccID=trim($_REQUEST["AccID"))
	AccID_t=trim($_REQUEST["AccID_t"))

	$_REQUEST[
	Search = "select * from Accredit where AccID="&AccID&" and AdminID="&UserID&""
    $msql->query($Search);
	'response.Write("Search="&Search &"<br>")
	TitleName=trim($msql->f("TitleName"))
	Rs.close
	
	$_REQUEST[
	Search = "select * from Accredit where FotherID="&AccID&" and AdminID="&UserID&""
    $msql->query($Search);
'?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css.css" rel="stylesheet" type="text/css">
<title>�ɲ�������ģ��</title>
<script language="JavaScript">
<!-- Hiding
  function loadtwo(page2, page3) {
     parent.leftFrame.location.href=page2;
     parent.mainFrame.location.href=page3;
}
// -->
</script>
<link href="css.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="230" valign="top">
          <table width="740" border="0" cellspacing="1" cellpadding="0">
            <tr>
              <td width="130" height="21" bgcolor="#009999">&nbsp;<font color="#FFFFFF">�ɲ�������ģ��</font></td>
              <form name="form1" method="post" action="../2006manage/QX_Detail.phpp">
                <td width="607" bgcolor="#FFFFFF"> <div align="right"> </div>
                  <div align="center"></div></td>
              </form>
            </tr>
          </table>
          <table width="740" border="0" cellpadding="0" cellspacing="1">
            <tr>
              <td height="15" colspan="7"><div align="right"> </div></td>
            </tr>
            <tr>
              <td width="129" height="20" bgcolor="#999999">&nbsp;<font color="#FFFFFF">��ģ����ƣ�</font></td>
              <td width="608" height="20" colspan="2" bgcolor="#FFFFFF">&nbsp;<font color="#FF0000"><strong><?php echo $TitleName ?></strong></font></td>
            </tr>
            <tr>
              <td height="22" colspan="3" bgcolor="F1F0F1">
                <div align="right">
                  <table width="100%" border="0" cellspacing="1" cellpadding="0">
                    <tr>
                      <td width="26%" valign="top"><table width="99%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="19"><div align="right"><font color="#003366">�ɲ暂无内容���ģ����ƣ�</font></div></td>
                          </tr>
                        </table> </td>
                      <td width="74%" bgcolor="#E0E0E0"><table width="174" border="0" cellspacing="2" cellpadding="0">
                          <?php
						  Num=1
						  while($msql->next_record()){
						  TitleName=trim($msql->f("TitleName"))
						 ?>
                          <tr>
                            <td width="170">&nbsp;<?php echo $num?>、<?php echo(TitleName?></td>
                          </tr>
                          <?php
						  num=num+1
						  Rs.MoveNext
						  }
						  Rs.close
						  
						  ?>
                        </table> </td>
                    </tr>
                  </table>
                </div></td>
            </tr>
            <tr>
              <td height="1" colspan="7" bgcolor="#999999"></td>
            </tr>
            <tr>
              <td height="21" colspan="7" valign="top">&nbsp;</td>
            </tr>
          </table>
          <?php
			$_REQUEST[
			Search = "select * from Accredit_t where FotherID_t="&AccID_t&" "
			$msql->query($Search);
		  
		  ?>
          
            
          <table width="740" border="0" cellspacing="1" cellpadding="0">
            <form name="AddSmallClass" method="post" action="QX_AddSmallClass$_REQUEST[">
              <tr>
                <td width="130" height="22" bgcolor="#CCCCCC">&nbsp;<font color="#FF0000">�����ģ�飺</font></td>
                <td width="610"><select name="SmalllClass">
                    <option value="0" selected>ѡ������ӵ���ģ��</option>
					<?php
					SmallNum=1
					while($msql->next_record()){ ?>
                    <option value="<?php echo(trim($msql->f("TitleName_t"))?>"><?php echo( SmallNum ?>��<?php echo(trim($msql->f("TitleName_t"))?></option>
					<?php
					  SmallNum=SmallNum+1
					  Rs.MoveNext
					  }
					  Rs.close
					?>
                  </select>
                  <input name="Submit" type="submit" class="SubmitButtom" value="��ӿɲ�����ģ��Ȩ��">
                  <input name="UserID" type="hidden" value="<?php echo $UserID ?>">
				  <input name="AccID" type="hidden" value="<?php echo( AccID ?>">
				  <input name="AccID_t" type="hidden" value="<?php echo( AccID_t ?>"></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr></form>
            </table>
          
          <hr width="740" size="1">
          <br>
          <?php
			$_REQUEST[
			Search = "select * from Accredit where FotherID="&AccID&" and AdminID="&UserID&""
			$msql->query($Search);
		  
		  ?>
          <table width="740" border="0" cellspacing="1" cellpadding="0">
            <form name="DelSmallClass" method="post" action="QX_DelSmallClass$_REQUEST[">
              <tr>
                <td width="130" height="22" bgcolor="#CCCCCC">&nbsp;<font color="#FF0000">ɾ����ģ�飺</font></td>
                <td width="610"><select name="DelSmallClassID">
                    <option value="0" selected>ѡ����ɾ�����ģ��</option>
                    <?php
					SmallNum2=1
					while($msql->next_record()){ ?>
                    <option value="<?php echo(trim($msql->f("AccID"))?>"><?php echo( SmallNum2 ?>��<?php echo(trim($msql->f("TitleName"))?></option>
                    <?php
					  SmallNum2=SmallNum2+1
					  Rs.MoveNext
					  }



					  set myconn=nothing
					?>
                  </select> <input name="Submit2" type="submit" class="SubmitButtom" value="ɾ����ģ�����Ȩ��">
                  <input name="UserID" type="hidden" value="<?php echo $UserID ?>">
				  <input name="AccID" type="hidden" value="<?php echo( AccID ?>">
                  <input name="AccID_t" type="hidden" value="<?php echo( AccID_t ?>"></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
              </tr>
            </form>
          </table>
       </td>
    </tr>
  </table>
</body>
</html>
