
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->

<?php	$l_classid=trim($_REQUEST["l_classid"]);
	search="select * from z_fittings where l_id=".$l_classid.""
	 $msql->query (search)
	if($msql->next_record()){ fittings_name=trim($msql->f("l_name"))



	$_REQUEST[
	Search = "select * from z_fittings_pic where l_pjid=".$l_classid." order by l_sort desc"
    $msql->query($Search);
		 
'?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>���ͼƬ�б�</title>
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
              <td width="133" height="21" bgcolor="#669966">&nbsp;<font color="#FFFFFF">���ͼƬ�б�</font></td>
              <td width="538" bgcolor="#FFFF99">&nbsp;暂无内容�[ <font color="#0000FF"><?php echo( fittings_name ?></font> ]</td>
              <td width="65" bgcolor="#FFFF99"><div align="center"><a href="ProFittingsPic_addPic.php?l_classid=<?php echo  $l_classid ?>">���ͼƬ</a></div></td>
            </tr>
          </table>
          <?php if($msql->next_record()){ ?>
          <table width="740" border="0"  cellpadding="0" cellspacing="1">
            <tr>
              <td height="15" colspan="13"><div align="right"><font color="#333333" size="2">��ҳ
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
				'            û����ؼ�¼
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
                  <a href="ProFittingsPic_List.php?pageno=1&l_classid=<?php echo  $l_classid ?>"><font color="#333333">��ҳ</font></a>&nbsp;&nbsp;
                  <?php
									  echo("<a href='ProFittingsPic_List.php?pageno="&intPageintNo-1&"&l_classid=".$l_classid.">&lt;&lt;&lt;&lt;</a>")
								  }
								  for i = 1 to int((intCountMax-1)/intPageMax)+1
										  if int(i) = int(intPageintNo) {
										  echo("<font color=red>"&i&"</font> ")
										  else
							  ?>
                  <a href="ProFittingsPic_List.php?pageno=<?php echo(i?>&l_classid=<?php echo  $l_classid ?>"><?php echo(i?></a>
                  <?php
										  }
								  next
								  if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
									 echo("<a href='ProFittingsPic_List.php?pageno="&intPageintNo+1&"&l_classid=".$l_classid.">&gt;&gt;&gt;&gt;</a>")
									 ?>
                  &nbsp;&nbsp;<a href="ProFittingsPic_List.php?pageno=<?php echo(count?>&l_classid=<?php echo  $l_classid ?>"><font color="#333333">βҳ</font></a>
                  <?php
								  }
							 }
				
							?>
                  <font color="#333333">&gt;</font></font> </div></td>
            </tr>
            <tr>
              <td width="38" height="19" bgcolor="#669966">&nbsp;<font color="#FFFFFF" size="2">���</font></td>
              <td width="131" bgcolor="#669966"><font color="#FFFFFF" size="2">&nbsp;ͼƬ</font></td>
              <td width="194" bgcolor="#669966"><font color="#FFFFFF" size="2">&nbsp;���</font></td>
              <td width="100" bgcolor="#669966">&nbsp;<font color="#FFFFFF" size="2">�г���/Ԫ</font></td>
              <td width="96" bgcolor="#669966">&nbsp;<font color="#FFFFFF" size="2">�̳Ǽ�Ԫ</font></td>
              <td width="54" bgcolor="#669966">
              <div align="center"><font color="#FFFFFF">����</font> </div></td>
              <td width="49" bgcolor="#669966"><div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">״̬</font></div></td>
              <td width="33" bgcolor="#669966"><div align="center"><font color="#FFFFFF">修改</font></div></td>
              <td width="35" bgcolor="#669966"><div align="center"><font color="#FFFFFF">ɾ��</font></div></td>
            </tr>
            <?php
						 dim num 
						 num=1 
						 while( (not rs.eof) and (intNo<=intPageMax)
						 l_id=trim($msql->f("l_id"))
						 l_extname=trim($msql->f("l_extname"))
						 l_price1=trim($msql->f("l_price1"))
						 l_price2=trim($msql->f("l_price2"))
						 l_pic=trim($msql->f("l_pic"))
						 l_ext=trim($msql->f("l_ext"))
						 l_sort=trim($msql->f("l_sort"))
						 l_views=trim($msql->f("l_views"))
						 
						 'Response.Write("OpenView="&OpenView )
						 'Response.Write("SelectColor="&SelectColor &"<br>")
						?>
            <tr>
              <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<?php echo $num?></font></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<a href="../../folder/fittings/<?php echo $l_pic ?>.<?php echo $l_ext ?>" target="_blank"><img src="../../folder/fittings/<?php echo $l_pic ?>.<?php echo $l_ext ?>" alt="" name="qas" height="30" border="0"></a></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<?php echo $l_extname ?></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<?php echo $l_price1 ?></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<font color="#993300"><?php echo $l_price2 ?></font></td>
              <td bgcolor="F1F0F1"><div align="center"><font color="<?php echo $SelectColor ?>"><?php echo $l_sort ?></font></div></td>
              <td bgcolor="F1F0F1">
                <div align="center"><font color="<?php echo $SelectColor ?>"><?php echo $l_views?></font></div></td>
              <td bgcolor="F1F0F1"> <div align="center"><a href="ProFittingsPic_modiPic.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>"><font size="2">修改</font></a></div></td>
              <td bgcolor="F1F0F1"> <div align="center"><a href="ProFittingsPic_del.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>">删除</a></div></td>
            </tr>
            <tr>
              <td height="1" colspan="13" bgcolor="#999999"></td>
            </tr>
            <?php
					Num=Num+1
					intNo = intNo +1						

					}
					?>
            <tr>
              <td height="21" colspan="13" valign="top"><font color="#333333" size="2">��ҳ
                &lt;</font><font size="2">
                <?php
	       if intCountMax > 0 {
		          if intPageintNo > 1 {
				   ?>
                <a href="ProFittingsPic_List.php?pageno=1&l_classid=<?php echo  $l_classid ?>"><font color="#333333">��ҳ</font></a>
                &nbsp;&nbsp; 
                <?php
			          echo("<a href='ProFittingsPic_List.php?pageno="&intPageintNo-1&"&l_classid=".$l_classid.">&lt;&lt;&lt;&lt;</a>")
		          }
		          for i = 1 to int((intCountMax-1)/intPageMax)+1
			              if int(i) = int(intPageintNo) {
				          echo("<font color=red>"&i&"</font> ")
			              else
              		?>
                <a href="ProFittingsPic_List.php?pageno=<?php echo(i?>&l_classid=<?php echo  $l_classid ?>"><?php echo(i?></a>
                <?php
			              }
		          next
		          if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
			         echo("<a href='ProFittingsPic_List.php?pageno="&intPageintNo+1&"&l_classid=".$l_classid.">&gt;&gt;&gt;&gt;</a>")
					  ?>
                &nbsp;&nbsp;<a href="ProFittingsPic_List.php?pageno=<?php echo(count?>&l_classid=<?php echo  $l_classid ?>"><font color="#333333">βҳ</font></a>
                <?php
		          }
	         }
			?>
                <font color="#333333">&gt;</font></font></td>
            </tr>
          </table>
<?php } ?>      </td>
    </tr>
  </table>

</body>
</html>
<?php
 


?>