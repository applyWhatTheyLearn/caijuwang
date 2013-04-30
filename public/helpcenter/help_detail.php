
<?php

	pageno=trim($_REQUEST["pageno"))
	l_id=trim($_REQUEST["l_id"))
	search="select * from z_helpdetail where l_id=".$l_id.""
	$msql->query(search)
	if($msql->next_record()){
	l_id=trim($msql->f("l_id"))
	l_title=trim($msql->f("l_title"))
	l_detail=trim($msql->f("l_detail"))
		'ͼƬ
		search1="select * from z_helpic  where l_helpid=".$l_id." and l_views='显示' order by l_sort desc"
		set rs1=$msql->query (search1)
		pic=""
		while( next_record())
		l_pic=trim(rs1("l_pic"))
		l_ext=trim(rs1("l_ext"))
		'pic=pic&l_pic&"."&l_ext &"<br>"
		pic=pic&"<img src='../folder/helpic/"&l_pic &"."&l_ext &"'  border=0><br><br>"
		rs1.movenext
		}
		rs1.close	
		set rs1=nothing
	}



		 		
	
'?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>暂无内容</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>

<body>
<div align="center">
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><iframe frameborder=0 name=window_left scrolling="no" src=../include/top.php  style="HEIGHT:180px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <table width="984" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="762" valign="top"><table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
        <tr>
          <td height="32">&nbsp;&nbsp;��ҳ��&gt; 暂无内容 </td>
        </tr>
      </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="6" colspan="2"></td>
          </tr>
        </table>
        <table width="760" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="24">
            
                <div align="right"><a href="help_list.php?l_id=<?php echo $l_id ?>&pageno=<?php echo $pageno ?>">返回前页</a>&gt;&gt;</div>

            </td>
          </tr>
          <tr>
            <td height="6"></td>
          </tr>
        </table>
	    <table width="760" border="0" cellpadding="0" cellspacing="2" class="TableLineColor">
     
          <tr>
            <td width="25" height="27">&nbsp;</td>
            <td width="727"><strong><font color="#006699"><?php echo $l_title ?></font></strong></td>
          </tr>
          <tr>
            <td height="1"></td>
            <td height="1" background="../images/pic_4_9.gif"></td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td valign="top"><p style="line-height: 130%"><font color="404040"><?php echo $l_detail ?></font></p></td>
          </tr>
            <tr>
            <td height="1"></td>
            <td height="1" background="../images/pic_4_9.gif"></td>
          </tr>
          <tr>
            <td height="27">&nbsp;</td>
            <td valign="top"><?php echo $pic ?></td>
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
      <td><iframe frameborder=0 name=window_left scrolling="no" src=../include/copyright.php  style="HEIGHT:100px;VISIBILITY:inherit;WIDTH:100%;Z-INDEX:2" target="main"> </iframe></td>
    </tr>
  </table>
  <br>
  <br>
</div>
</body>
</html>
