


<?php
	$l_classid=trim($_REQUEST["l_classid"]);

	$_REQUEST[
	Search = "select * from z_product where  l_tuijian='推荐' order by l_tuijian desc ,l_sort "
    $msql->query($Search);
		 
'?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>��商品列表</title>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<iframe id='QuYu2' width=700 height=60 name=qyname frameborder=0 scrolling=no src="../menu/TopMenu.html"></iframe>
&nbsp;

  &nbsp;
  <p>
    <?php if($msql->next_record()){ ?>
</p>
  <table width="740" border="0"  cellpadding="0" cellspacing="1">
    <tr>
      <td height="15" colspan="9"><div align="right"><font color="#333333" size="2">��ҳ
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
                          <a href="Pro_TjList.php?pageno=1&l_classid=<?php echo  $l_classid ?>"><font color="#333333">��ҳ</font></a>&nbsp;&nbsp;
                          <?php
									  echo("<a href='Pro_TjList.php?pageno="&intPageintNo-1&"&l_classid=".$l_classid.">&lt;&lt;&lt;&lt;</a>")
								  }
								  for i = 1 to int((intCountMax-1)/intPageMax)+1
										  if int(i) = int(intPageintNo) {
										  echo("<font color=red>"&i&"</font> ")
										  else
							  ?>
                          <a href="Pro_TjList.php?pageno=<?php echo(i?>&l_classid=<?php echo  $l_classid ?>"><?php echo(i?></a>
                          <?php
										  }
								  next
								  if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
									 echo("<a href='Pro_TjList.php?pageno="&intPageintNo+1&"&l_classid=".$l_classid.">&gt;&gt;&gt;&gt;</a>")
									 ?>
          &nbsp;&nbsp;<a href="Pro_TjList.php?pageno=<?php echo(count?>&l_classid=<?php echo  $l_classid ?>"><font color="#333333">βҳ</font></a>
          <?php
								  }
							 }
				
							?>
          <font color="#333333">&gt;</font></font> </div></td>
    </tr>
    <tr>
      <td width="65" height="20" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">���</font></td>
      <td width="392" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;��Ʒ���</font></td>
      <td width="87" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;�г���/Ԫ</font></td>
      <td width="95" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;�̳Ǽ�/Ԫ</font></td>
      <td width="95" bgcolor="#999999"><font color="#FFFFFF" size="2">&nbsp;排序：���</font></td>
    </tr>
    <?php
						 dim num 
						 num=1 
						 while( (not rs.eof) and (intNo<=intPageMax)
						 l_id=trim($msql->f("l_id"))
						 l_name=trim($msql->f("l_name"))
						 l_price1=trim($msql->f("l_price1"))
						 l_price2=trim($msql->f("l_price2"))
						 l_num=trim($msql->f("l_num"))
						 				 
						 
						 'Response.Write("OpenView="&OpenView )
						 'Response.Write("SelectColor="&SelectColor &"<br>")
						?>
    <tr>
      <td valign="bottom" bgcolor="F1F0F1"><font size="2">&nbsp;<font color="#993300"><?php echo $num?></font>、</font></td>
      <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="Pro_TjDetail.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>&pageno=<?php echo $pageno ?>"><?php echo $l_name ?></a> </td>
      <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<font color="<?php echo $SelectColor ?>"><?php echo $l_price1 ?></font></td>
      <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<font color="<?php echo $SelectColor ?>"><?php echo $l_price2 ?></font></td>
      <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<font color="<?php echo $SelectColor ?>"><?php echo $l_num ?></font></td>
    </tr>
    <tr>
      <td height="1" colspan="9" bgcolor="#999999"></td>
    </tr>
    <?php
					Num=Num+1
					intNo = intNo +1						

					}
					?>
    <tr>
      <td height="21" colspan="9" valign="top"><font color="#333333" size="2">��ҳ
        &lt;</font><font size="2">
                      <?php
	       if intCountMax > 0 {
		          if intPageintNo > 1 {
				   ?>
                      <a href="Pro_TjList.php?pageno=1&l_classid=<?php echo  $l_classid ?>"><font color="#333333">��ҳ</font></a> &nbsp;&nbsp;
                      <?php
			          echo("<a href='Pro_TjList.php?pageno="&intPageintNo-1&"&l_classid=".$l_classid.">&lt;&lt;&lt;&lt;</a>")
		          }
		          for i = 1 to int((intCountMax-1)/intPageMax)+1
			              if int(i) = int(intPageintNo) {
				          echo("<font color=red>"&i&"</font> ")
			              else
              		?>
                      <a href="Pro_TjList.php?pageno=<?php echo(i?>&l_classid=<?php echo  $l_classid ?>"><?php echo(i?></a>
                      <?php
			              }
		          next
		          if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
			         echo("<a href='Pro_TjList.php?pageno="&intPageintNo+1&"&l_classid=".$l_classid.">&gt;&gt;&gt;&gt;</a>")
					  ?>
          &nbsp;&nbsp;<a href="Pro_TjList.php?pageno=<?php echo(count?>&l_classid=<?php echo  $l_classid ?>"><font color="#333333">βҳ</font></a>
          <?php
		          }
	         }
			?>
          <font color="#333333">&gt;</font></font></td>
    </tr>
  </table>
  <?php } ?>
<iframe id='QuYu2' width=100% height=60 name=qyname frameborder=0 scrolling=no src="../copyright.htm"></iframe>
</body>
</html>
<?php
 


?>