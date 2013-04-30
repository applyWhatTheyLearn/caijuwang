
<!--#include file="../../_inc/checkoutTime2.php" -->

<?php
	$l_classid=trim($_REQUEST["l_classid"]);
	l_helpid=trim($_REQUEST["l_helpid"))
	search="select * from z_helpClass  where l_id=".$l_classid.""
	$msql->query(search)
	
	if($msql->next_record()){
	l_classname=trim($msql->f("l_classname"))
	}

	
	$_REQUEST[
	Search = "select * from z_helpic where l_helpid="&l_helpid&" order by l_sort desc"
	'response.Write("Search="&Search)
	'Search = "select * from l_hotel"
    $msql->query($Search);
		 
'?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>����ͼƬ�б�</title>
<style type="text/css">
<!--
.STYLE2 {	color: #0000FF;
	font-weight: bold;
}
.STYLE3 {color: #993300}
-->
</style>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="230" valign="top">
          <table width="700" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td width="98" height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">����ͼƬ�б�</font></td>
              <form name="form1" method="post" action="Pic_list.php">
                <td width="450" bgcolor="#FFFFFF">&nbsp;排序：���ࣺ[ <span class="STYLE3"><?php echo $l_classname ?></span> ]</td>
                <td width="148" bgcolor="#FFFFFF"><div align="center"><a href="Pic_addPic.php?l_classid=<?php echo  $l_classid ?>&l_id=<?php echo $l_id ?>&l_helpid=<?php echo $l_helpid ?>">���ͼƬ</a>|<a href="#" onClick="javascript:window.opener=null;window.close()">�رմ���</a></div></td>
              </form>
            </tr>
          </table>
<?php if($msql->next_record()){ ?>
          <table width="700" border="0" align="center" cellpadding="0" cellspacing="1">
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
                  <a href="Pic_list.php?pageno=1&l_classid=<?php echo  $l_classid ?>"><font color="#333333">��ҳ</font></a>&nbsp;&nbsp;
                  <?php
									  echo("<a href='Pic_list.php?pageno="&intPageintNo-1&"&l_classid=".$l_classid.">&lt;&lt;&lt;&lt;</a>")
								  }
								  for i = 1 to int((intCountMax-1)/intPageMax)+1
										  if int(i) = int(intPageintNo) {
										  echo("<font color=red>"&i&"</font> ")
										  else
							  ?>
                  <a href="Pic_list.php?pageno=<?php echo(i?>&l_classid=<?php echo  $l_classid ?>"><?php echo(i?></a>
                  <?php
										  }
								  next
								  if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
									 echo("<a href='Pic_list.php?pageno="&intPageintNo+1&"&l_classid=".$l_classid.">&gt;&gt;&gt;&gt;</a>")
									 ?>
                  &nbsp;&nbsp;<a href="Pic_list.php?pageno=<?php echo(count?>&l_classid=<?php echo  $l_classid ?>"><font color="#333333">βҳ</font></a>
                  <?php
								  }
							 }
				
							?>
                  <font color="#333333">&gt;</font></font> </div></td>
            </tr>
            <tr>
              <td width="49" height="24" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">���</font></td>
              <td width="341" bgcolor="#999999">&nbsp;<font color="#FFFFFF" size="2">ͼƬ</font></td>
              <td width="86" bgcolor="#999999">&nbsp;<font color="#FFFFFF">����</font></td>
              <td width="56" bgcolor="#999999"><div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">״̬</font></div></td>
              <td width="30" bgcolor="#999999"><div align="center"><font color="#FFFFFF">修改</font></div></td>
              <td width="31" bgcolor="#999999"><div align="center"><font color="#FFFFFF">ɾ��</font></div></td>
            </tr>
            <?php
						 dim num 
						 num=1 
						 while( (not rs.eof) and (intNo<=intPageMax)
						 l_id=trim($msql->f("l_id"))
						 l_pic=trim($msql->f("l_pic"))
						 l_sort=trim($msql->f("l_sort"))
                         l_Views=trim($msql->f("l_Views"))
						 l_ext=trim($msql->f("l_ext"))
						 'Response.Write("OpenView="&OpenView )
						 'Response.Write("SelectColor="&SelectColor &"<br>")
						?>
            <tr>
              <td valign="top" bgcolor="F1F0F1"><font size="2">&nbsp;<font color="#993300"><?php echo $num?></font></font></td>
              <td height="18" bgcolor="F1F0F1"><a href="Pic_picview.php?l_id=<?php echo $l_id?>" target="_blank"><img src="../../folder/helpic/<?php echo $l_pic ?>.<?php echo $l_ext ?>" height="60" border="0" ></a></td>
              <td height="18" bgcolor="F1F0F1">&nbsp;<?php echo $l_sort ?></td>
              <td bgcolor="F1F0F1">
              <div align="center"><font color="<?php echo $SelectColor ?>"><?php echo $l_Views?></font></div></td>
              <td bgcolor="F1F0F1"> <div align="center"><a href="Pic_ModiPic.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>&l_helpid=<?php echo $l_helpid ?>"><font size="2">修改</font></a></div></td>
              <td bgcolor="F1F0F1"> <div align="center"><a href="Pic_del.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>&l_helpid=<?php echo $l_helpid ?>">
                  删除</a></div></td>
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
                <a href="Pic_list.php?pageno=1&l_classid=<?php echo  $l_classid ?>"><font color="#333333">��ҳ</font></a>
                &nbsp;&nbsp; 
                <?php
			          echo("<a href='Pic_list.php?pageno="&intPageintNo-1&"&l_classid=".$l_classid.">&lt;&lt;&lt;&lt;</a>")
		          }
		          for i = 1 to int((intCountMax-1)/intPageMax)+1
			              if int(i) = int(intPageintNo) {
				          echo("<font color=red>"&i&"</font> ")
			              else
              		?>
                <a href="Pic_list.php?pageno=<?php echo(i?>&l_classid=<?php echo  $l_classid ?>"><?php echo(i?></a>
                <?php
			              }
		          next
		          if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
			         echo("<a href='Pic_list.php?pageno="&intPageintNo+1&"&l_classid=".$l_classid.">&gt;&gt;&gt;&gt;</a>")
					  ?>
                &nbsp;&nbsp;<a href="Pic_list.php?pageno=<?php echo(count?>&l_classid=<?php echo  $l_classid ?>"><font color="#333333">βҳ</font></a>
                <?php
		          }
	         }
			?>
                <font color="#333333">&gt;</font></font></td>
            </tr>
        </table>
<?php } else { ?>
          <table width="700" height="69" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td bgcolor="#FFFFFF"><div align="center"><a href="Pic_addPic.php?l_classid=<?php echo  $l_classid ?>">暂无内容，请点击右上方添加文字添加相关内容</a></div></td>
            </tr>
          </table>
          <?php } ?>
      </td>
    </tr>
  </table>
</div>
</body>
</html>

 
 