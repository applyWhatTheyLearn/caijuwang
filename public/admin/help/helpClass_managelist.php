
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->

<?php

	$_REQUEST[
	Search = "select * from z_helpclass where 1=1 order by l_sort desc"
    $msql->query($Search);
		 
'?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>暂无内容б�</title></head>
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
              <td width="232" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">暂无内容б�</font></td>
              <form name="form1" method="post" action="helpClass_managelist.php">
                <td width="1016" bgcolor="#FFFFFF"><div align="right"><a href="helpClass_add.php">��ӷ���</a></div></td>
              </form>
            </tr>
            <tr>
              <td height="1" bgcolor="#A24E12"></td>
              <td height="1" bgcolor="#009999"></td>
            </tr>
          </table>
<?php if($msql->next_record()){ ?>
          <table width="700" border="0" cellpadding="0" cellspacing="1">
            <tr>
              <td height="15" colspan="10"><div align="right"><font color="#333333" size="2">��ҳ
                  &lt;</font><font size="2">
         <?php
		if $_GET("pageno")<=0 {
		pageno=1
		else
		pageno=$_GET("pageno")
		}
						 
		intPageMax = 25 'ÿҳ�不显示intPageMax����¼
		intPageintNo = 1
		if $_GET("pageno") <= 0 {
		intPageintNo = 1
		else
		intPageintNo = $_GET("pageno")
		}
		intNo = 1
		intCountMax = rs.recordcount
		if intCountMax <= 0 {
		'   û����ؼ�¼
		 intPageintNo = 1
		 }
		 if (intPageintNo * intPageMax > intCountMax) {
		 intPageintNo = int(intCountMax / intPageMax) + 1
		 }
		 rs.move (intPageintNo-1)*intPageMax
							 
		 dim count
		  count=rs.pagecount
									  
		 if intCountMax > 0 {
		  if intPageintNo > 1 {
		 ?>
                  <a href="helpClass_managelist.php?pageno=1&city_id=<?php echo( city_id ?>"><font color="#333333">��ҳ</font></a>&nbsp;&nbsp;
          <?php
				  echo("<a href='helpClass_managelist.php?pageno="&intPageintNo-1&"&city_id="&city_id&">&lt;&lt;&lt;&lt;</a>")
				  }
				  for i = 1 to int((intCountMax-1)/intPageMax)+1
					  if int(i) = int(intPageintNo) {
					  echo("<font color=red>"&i&"</font> ")
					  else
		  ?>
                 <a href="helpClass_managelist.php?pageno=<?php echo(i?>&city_id=<?php echo( city_id ?>"><?php echo(i?></a>
          <?php
					  }
				  next
				  if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
					 echo("<a href='helpClass_managelist.php?pageno="&intPageintNo+1&"&city_id="&city_id&">&gt;&gt;&gt;&gt;</a>")
		 ?>
                  &nbsp;&nbsp;<a href="helpClass_managelist.php?pageno=<?php echo(count?>&city_id=<?php echo( city_id ?>"><font color="#333333">βҳ</font></a>
                  <?php
				  }
			 }
				
		?>
                  <font color="#333333">&gt;</font></font> </div></td>
            </tr>
            <tr>
              <td width="41" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">���</font></td>
              <td width="438" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">�������</font></td>
              <td width="58" bgcolor="#999999">&nbsp;<font color="#FFFFFF">����</font></td>
              <td width="57" bgcolor="#999999"><div align="center"><font color="#FFFFFF">״̬</font></div></td>
              <td width="41" bgcolor="#999999"><div align="center"><font color="#FFFFFF">修改</font></div></td>
              <td width="41" bgcolor="#999999"><div align="center"><font color="#FFFFFF">ɾ��</font></div></td>
            </tr>
            <?php
						 dim num 
						 num=1 
						 while( (not rs.eof) and (intNo<=intPageMax)
						 l_id=trim($msql->f("l_id"))
						 l_classname=trim($msql->f("l_classname"))
						 l_sort=trim($msql->f("l_sort"))
						 l_views=trim($msql->f("l_views"))
				 
					 
						 'Response.Write("OpenView="&OpenView )
						 'Response.Write("SelectColor="&SelectColor &"<br>")
						?>
            <tr>
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;<font color="#993300"><?php echo $num?>、</font></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<font color="#990000"><?php echo $l_classname?></font></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<?php echo $l_sort ?></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1"><div align="center"><?php echo $l_views ?></div></td>
              <td valign="bottom" bgcolor="F1F0F1"><div align="center"><a href="helpClass_modi.php?l_id=<?php echo $l_id ?>">修改</a></div></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1"><div align="center"><a href="helpClass_del.php?l_id=<?php echo $l_id ?>">删除</a></div></td>
            </tr>
            <tr>
              <td height="1" colspan="10" bgcolor="#999999"></td>
            </tr>
            <?php
					Num=Num+1
					intNo = intNo +1						

					}
					?>
            <tr>
              <td height="21" colspan="10" valign="top"><font color="#333333" size="2">��ҳ
                &lt;</font><font size="2">
                <?php
	       if intCountMax > 0 {
		          if intPageintNo > 1 {
				   ?>
                <a href="helpClass_managelist.php?pageno=1&city_id=<?php echo( city_id ?>"><font color="#333333">��ҳ</font></a>
                &nbsp;&nbsp; 
                <?php
			          echo("<a href='helpClass_managelist.php?pageno="&intPageintNo-1&"&city_id="&city_id&">&lt;&lt;&lt;&lt;</a>")
		          }
		          for i = 1 to int((intCountMax-1)/intPageMax)+1
			              if int(i) = int(intPageintNo) {
				          echo("<font color=red>"&i&"</font> ")
			              else
              		?>
                <a href="helpClass_managelist.php?pageno=<?php echo(i?>&city_id=<?php echo( city_id ?>"><?php echo(i?></a>
                <?php
			              }
		          next
		          if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
			         echo("<a href='helpClass_managelist.php?pageno="&intPageintNo+1&"&city_id="&city_id&">&gt;&gt;&gt;&gt;</a>")
					  ?>
                &nbsp;&nbsp;<a href="helpClass_managelist.php?pageno=<?php echo(count?>&city_id=<?php echo( city_id ?>"><font color="#333333">βҳ</font></a>
                <?php
		          }
	         }
			?>
                <font color="#333333">&gt;</font></font></td>
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

<?php



	set myconn=nothing
'call comate(city_id) '��ɺ������ҳ��
?>
 
 