<?php
include("../../include/common.inc.php");
include("../../_inc/checkoutTime2.php");
$dbpath_value='';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../css.css" rel="stylesheet" type="text/css">
<title>数据库备份</title>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<div align="center">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr bgcolor="#999999">
      <td height="1" valign="top"></td>
    </tr>
    <tr bgcolor="#E4E4E4">
      <td height="246" valign="top" bgcolor="#E4E4E4">
        <div align="left">
          <form id="backupForm" method="post" action="backup_db.php">
            <table width="770" border="0" cellspacing="1" cellpadding="0">
              <tr>
                <td height="21" bgcolor="#A24E12">&nbsp;<font color="#FFFFFF">数据库备份</font></td>
                <td width="540" height="21" bgcolor="#FFFFFF">&nbsp;</td>
                <td width="101" bgcolor="#FFFFFF">&nbsp;</td>
              </tr>
              <tr>
                <td height="18" colspan="3" bgcolor="#F1F0F1">&nbsp;</td>
              </tr>
              <tr>
                <td width="125" height="1" bgcolor="#999999"></td>
                <td height="1" colspan="2" bgcolor="#999999"></td>
              </tr>
            </table>
            <table width="770" border="0" cellpadding="0" cellspacing="2">
              <tr>
                <td width="120" height="38" bgcolor="#F1F0F1">&nbsp;</td>
                <td width="644" bgcolor="#F1F0F1"><p><strong>备份数据库文件</strong><br>
                <span style=" line-height:25px;">您可以用这个功能来备份您重要的数据，以保证您网站数据库安全！</span>                </p></td>
              </tr>
              <!--<tr>
                <td height="22" bgcolor="#F1F0F1">&nbsp;</td>
                <td height="22" bgcolor="#F1F0F1">当前数据库路径</td>
              </tr>
              <tr>
                <td height="22" bgcolor="#F1F0F1">&nbsp;</td>
                <td height="22" bgcolor="#F1F0F1"><input type=text size=50 name=DBpath value="<?php echo $dbpath_value ?>"></td>
              </tr>-->
              <tr>
                <td height="22" bgcolor="#F1F0F1">&nbsp;</td>
                <td height="22" bgcolor="#F1F0F1"><input type="hidden" size=50 name=bkfolder value=backup_db ></td>
              </tr>
              <tr>
                <td height="22" bgcolor="#F1F0F1">&nbsp;</td>
                <td height="22" bgcolor="#F1F0F1"> 备份后数据库名</td>
              </tr>
              <tr>
                <td height="22" bgcolor="#F1F0F1">&nbsp;</td>
                <td height="22" bgcolor="#F1F0F1"><input type=text size=30 name=bkDBname value="<?php echo date("Y-m-d",time()) ?>"></td>
              </tr>
              <tr>
                <td height="22" bgcolor="#F1F0F1">&nbsp;</td>
                <td height="22" bgcolor="#F1F0F1">[备份目录如果不存在，程序将自动创建]</td>
              </tr>
              <tr>
                <td height="22" bgcolor="#F1F0F1">&nbsp;</td>
                <td height="22" bgcolor="#F1F0F1">&nbsp;</td>
              </tr>
              <tr>
                <td height="22" bgcolor="#F1F0F1"><div align="left"><br />
                </div></td>
                <td height="22" bgcolor="#F1F0F1"><input type=submit value="确定备份"></td>
              </tr>
              <tr>
                <td height="22" bgcolor="#F1F0F1">&nbsp;</td>
                <td height="22" bgcolor="#F1F0F1">&nbsp;</td>
              </tr>
            </table>
            <span class="back_southidc">
            </span><br>
          </form>
        <table width="770">
        <?php
		$msql->query("select * from w_db_bakinfo");
		?>
          <tr>
            <td width="111" height="52" bgcolor="#F1F0F1">备份列表：</td>
            <td width="647" bgcolor="#F1F0F1"><font color="#FF0000">注1：当点击[删除]后备份的数据将无法恢复，请谨慎操作！<br>
            注2：点击[恢复到]后数据库将恢复到显示日期时的状态，之后的数据会丢失请谨慎操作！！。</font></td></tr>
          <?php
		  $num1=1;
		  while($msql->next_record()){
              $db_w_id=trim($msql->f("w_id"));
              $db_name=trim($msql->f("w_name"));
              $db_inputime=trim($msql->f("w_time"));
              ?>
          <tr>
            <td height="20" align="right" bgcolor="#F1F0F1"><?php echo $num1 ?>、</td>
            <td bgcolor="#F1F0F1">备份文件名称：<?php echo $db_name ?> [ <a href="del_backup_db.php?db_w_id=<?php echo $db_w_id ?>&dbname=<?php echo $db_name ?>">删除</a> ] | [ <a href="recovery_db.php?db_w_id=<?php echo $db_w_id ?>&dbname=<?php echo $db_name ?>">恢复到</a>：<?php echo $db_inputime ?> ]</td>
          </tr>
          <?php

		  $num1=$num1+1;
		  }

		  ?>
        </table>
        </div>
        </td>
    </tr>
  </table>
</div>
</body>
</html>
<?php

?>