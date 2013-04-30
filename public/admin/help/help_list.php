
<!--#include file="../../_inc/checkoutTime3$_REQUEST[" -->

<?php
	$l_classid=trim($_REQUEST["l_classid"]);

	search="select * from z_helpClass  where l_id=".$l_classid.""
	$msql->query(search)
	
	if($msql->next_record()){
	l_classname=trim($msql->f("l_classname"))
	}

	
	$_REQUEST[
	Search = "select * from z_helpdetail where l_classid=".$l_classid." order by l_sort desc"
	'response.Write("Search="&Search)
	'Search = "select * from l_hotel"
    $msql->query($Search);
		 
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>友情链接列表</title>
<style type="text/css">
<!--
.STYLE3 {color: #993300}
-->
</style>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>
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
              <td width="134" height="21" bgcolor="#006699">&nbsp;<font color="#FFFFFF">友情链接列表</font></td>
              <form name="form1" method="post" action="help_list.php">
                <td width="494" bgcolor="#FFFFFF">&nbsp;排序：���ࣺ[ <span class="STYLE3"><?php echo $l_classname ?></span> ]</td>
                <td width="68" bgcolor="#FFFFFF"><div align="center"><a href="help_add.php?l_classid=<?php echo  $l_classid ?>">�������</a></div></td>
              </form>
            </tr>
            <tr>
              <td height="1" bgcolor="#A24E12"></td>
              <td height="1" colspan="2" bgcolor="#009999"></td>
            </tr>
          </table>
<?php if($msql->next_record()){ ?>
          <table width="700" border="0" cellpadding="0" cellspacing="1">
            <tr>
              <td height="15" colspan="11"><div align="right"><font color="#333333" size="2">��ҳ
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
                  <a href="help_list.php?pageno=1&l_classid=<?php echo  $l_classid ?>"><font color="#333333">��ҳ</font></a>&nbsp;&nbsp;
          <?php
				  echo("<a href='help_list.php?pageno="&intPageintNo-1&"&l_classid=".$l_classid.">&lt;&lt;&lt;&lt;</a>")
				  }
				  for i = 1 to int((intCountMax-1)/intPageMax)+1
					  if int(i) = int(intPageintNo) {
					  echo("<font color=red>"&i&"</font> ")
					  else
		  ?>
                 <a href="help_list.php?pageno=<?php echo(i?>&l_classid=<?php echo  $l_classid ?>"><?php echo(i?></a>
          <?php
					  }
				  next
				  if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
					 echo("<a href='help_list.php?pageno="&intPageintNo+1&"&l_classid=".$l_classid.">&gt;&gt;&gt;&gt;</a>")
		 ?>
                  &nbsp;&nbsp;<a href="help_list.php?pageno=<?php echo(count?>&l_classid=<?php echo  $l_classid ?>"><font color="#333333">βҳ</font></a>
                  <?php
				  }
			 }
				
		?>
                  <font color="#333333">&gt;</font></font> </div></td>
            </tr>
            <tr>
              <td width="41" height="20" bgcolor="#006699">&nbsp;<font color="#FFFFFF" size="2">���</font></td>
              <td width="404" bgcolor="#006699">&nbsp;<font color="#FFFFFF" size="2">�������ݱ���</font></td>
              <td width="61" bgcolor="#006699">&nbsp;<font color="#FFFFFF">����</font></td>
              <td width="62" bgcolor="#006699"><div align="center"><font color="#FFFFFF">״̬</font></div></td>
              <td width="42" bgcolor="#006699"><div align="center"><font color="#FFFFFF" size="2"></font><font color="#FFFFFF">ͼƬ</font></div></td>
              <td width="42" bgcolor="#006699"><div align="center"><font color="#FFFFFF">修改</font></div></td>
              <td width="40" bgcolor="#006699"><div align="center"><font color="#FFFFFF">ɾ��</font></div></td>
            </tr>
            <?php
			dim num 
		 	num=1 
			while( (not rs.eof) and (intNo<=intPageMax)
			l_id=trim($msql->f("l_id"))
			l_title=trim($msql->f("l_title"))
			l_detail=trim($msql->f("l_detail"))
			l_sort=trim($msql->f("l_sort"))
            l_views=trim($msql->f("l_views"))
			if l_views="不显示" { SelectColor="#ff0000"

			?>
            <tr>
              <td valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="#" title="文件名称：<?php echo $l_filename ?>"><font color="#993300"><?php echo $num?>、</font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<a href="help_Detail.php?l_id=<?php echo $l_id ?>&l_classid=<?php echo  $l_classid ?>" ><font color="#990000"><?php echo $l_title?></font></a></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1">&nbsp;<?php echo $l_sort ?></td>
              <td height="18" valign="bottom" bgcolor="F1F0F1"><div align="center"><font color="<?php echo $SelectColor ?>"><?php echo $l_Views?></font></div></td>
              <td valign="bottom" bgcolor="F1F0F1">
              
                <div align="center"><a href="#" onClick="MM_openBrWindow('Pic_list.php?l_helpid=<?php echo $l_id ?>&l_classid=<?php echo  $l_classid ?>','','status=yes,scrollbars=yes,resizable=yes,width=800,height=600')"><font size="2">ͼƬ</font></a></div>              </td>
              <td valign="bottom" bgcolor="F1F0F1"><div align="center">
                <div align="center"><a href="help_modi.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>"><font size="2">修改</font></a></div>
                <a href="help_modi.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>"><font size="2"></font></a></div></td>
              <td valign="bottom" bgcolor="F1F0F1"> <div align="center"><a href="help_del.php?l_id=<?php echo $l_id?>&l_classid=<?php echo  $l_classid ?>">
                  删除</a></div></td>
            </tr>
            <tr>
              <td height="1" colspan="11" bgcolor="#999999"></td>
            </tr>
            <?php
					Num=Num+1
					intNo = intNo +1						

					}
					?>
            <tr>
              <td height="21" colspan="11" valign="top"><font color="#333333" size="2">��ҳ
                &lt;</font><font size="2">
                <?php
	       if intCountMax > 0 {
		          if intPageintNo > 1 {
				   ?>
                <a href="help_list.php?pageno=1&l_classid=<?php echo  $l_classid ?>"><font color="#333333">��ҳ</font></a>
                &nbsp;&nbsp; 
                <?php
			          echo("<a href='help_list.php?pageno="&intPageintNo-1&"&l_classid=".$l_classid.">&lt;&lt;&lt;&lt;</a>")
		          }
		          for i = 1 to int((intCountMax-1)/intPageMax)+1
			              if int(i) = int(intPageintNo) {
				          echo("<font color=red>"&i&"</font> ")
			              else
              		?>
                <a href="help_list.php?pageno=<?php echo(i?>&l_classid=<?php echo  $l_classid ?>"><?php echo(i?></a>
                <?php
			              }
		          next
		          if int(intPageintNo) < int((intCountMax-1)/intPageMax)+1 {
			         echo("<a href='help_list.php?pageno="&intPageintNo+1&"&l_classid=".$l_classid.">&gt;&gt;&gt;&gt;</a>")
					  ?>
                &nbsp;&nbsp;<a href="help_list.php?pageno=<?php echo(count?>&l_classid=<?php echo  $l_classid ?>"><font color="#333333">βҳ</font></a>
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
              <td bgcolor="#FFFFFF"><div align="center"><a href="help_add.php?l_classid=<?php echo  $l_classid ?>">暂无内容，请点击右上方添加文字添加相关内容</a></div></td>
            </tr>
          </table>
          <?php } ?>
      </td>
    </tr>
  </table>
</div>
</body>
</html>

 
 