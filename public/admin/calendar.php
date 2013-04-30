<?php
'WEB Calendar
'By Chaiwei 2002-7-31
'--------------------------------

'�·���ƶ���
Dim Month_Name(12)
Month_Name(1) = "һ��"
Month_Name(2) = "����"
Month_Name(3) = "����"
Month_Name(4) = "����"
Month_Name(5) = "����"
Month_Name(6) = "����"
Month_Name(7) = "����"
Month_Name(8) = "����"
Month_Name(9) = "����"
Month_Name(10) = "ʮ��"
Month_Name(11) = "ʮһ��"
Month_Name(12) = "ʮ����"

'��ݴ���,Ĭ��ֵΪ暂无内容ǰ���
if $_GET("year")<>"" {
Year_var=intval($_GET("year"))
else
Year_var=year(date())
}

'��һ�ꡢ��һ�긳ֵ
Previous_year=Year_var-1
Next_year=Year_var+1


'�·ݴ���,Ĭ��ֵΪ暂无内容ǰ�·�
if $_GET("Month")<>"" {
Month_var=intval($_GET("Month"))
else
Month_var=month(date())
}

'��һ�¡���һ�¸�ֵ
if Month_var<=1 {
Next_month=Month_var+1
Previous_month=1
else
if Month_var>=12 {
Next_month=12
Previous_month=Month_var-1
else
Next_month=Month_var+1
Previous_month=Month_var-1
}
}

'��ǰ����λ����
First_day=DateSerial(Year_var,Month_var,1)
Current_day=First_day-weekday(First_day)+2

?>
<html>
<head>
<title>Calendar</title>
<Script Language="JavaScript">

//ǰ������ѡ����

function pick(v) {
window.opener.document.<?php echo($_GET("form")?>.<?php echo($_GET("field")?>.value=v;
window.close();
return false;
}
</Script>
<style>
<!--
.page { text-decoration: none; color: #CAE3FF; font-size:9pt; 

font-family:Webdings }
.dayTable { border: 1px dotted #E6E6E6; padding-left: 4; 

padding-right: 4; padding-top: 1; padding-bottom: 1}
.day { font-family: Arial; font-size: 9pt; text-decoration: 

underline; color: #000000 }
:hover.day { font-family: Arial; font-size: 9pt; text-decoration: 

none; color: #FF0000 }
.title { font-family: Arial; font-size: 9pt; color: #FFFFFF; 

font-weight: bold }
:hover.page { text-decoration: underline; color: #FFFFFF; 

font-family:Webdings; font-size:9pt }
-->
</style>
</head>
<body topmargin="0" leftmargin="0" onLoad="window.focus();">
<div align="center">
<center>
<table border="0" cellspacing="0" style="border-collapse: collapse" 

width="100%" id="AutoNumber1" cellpadding="0">
<tr>
<td width="100%" bgcolor="#A24E12">
<?php
'�����ͷ显示
?>
<div align="center">
<center>
<table border="0" cellspacing="0" style="border-collapse: 

collapse" width="100%" id="AutoNumber3" cellpadding="2">
<tr>
<td width="20%" height="22" align="center">
<a href="calendar.php?year=<?php echo(Previous_year?>&month=<?php echo(Month_var?>&form=<?php echo($_GET("form")?>&field=<?php echo($_GET("field")?>" title="Previous Year" class="page">7</a>
<a href="calendar.php?year=<?php echo(Year_var?>&month=<?php echo(Previous_month?>&form=<?php echo($_GET("form")?>&field=<?php echo($_GET("field")?>" title="Previous Month" class="page">3</a></td>
<td width="60%" align="center" class="title"><?phpecho Month_Name(Month_var) & "��" & Year_var ?></td>
<td width="20%" align="center">
<a href="calendar.php?year=<?php echo(Year_var?>&month=<?php echo(Next_month?>&form=<?php echo($_GET("form")?>&field=<?php echo($_GET("field")?>" title="Next Month" class="page">4</a>
<a href="calendar.php?year=<?php echo(Next_year?>&month=<?php echo(Month_var?>&form=<?php echo($_GET("form")?>&field=<?php echo($_GET("field")?>" title="Next Year" class="page">8</a></td>
</tr>
</table>
</center>
</div>
</td>
</tr>
<tr>
<td width="100%">
<div align="center">
<center>
              <table border="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber2" cellpadding="3">
                <tr bgcolor="#FFFFFF">
                  <td align="center" class="title"><font color="#666666">һ</font></td>
                  <td align="center" class="title"><font color="#666666">��</font></td>
                  <td align="center" class="title"><font color="#666666">��</font></td>
                  <td align="center" class="title"><font color="#666666">��</font></td>
                  <td align="center" class="title"><font color="#666666">��</font></td>
                  <td align="center" class="title"><font color="#666666">��</font></td>
                  <td align="center" class="title"><font color="#666666">��</font></td>
                </tr>
                <?php
'暂无内容 5��*7�� 显示
'���ѭ不显示������

for i=0 to 4
?>
                <tr>
                  <?php
'�ڲ�ѭ不显示������

	for j=0 to 6
	echo "<td align='center' class='dayTable'"
	
	'��不显示�������족显示
	
	if Current_day = date {
	echo " bgcolor='#FFFFE0>"
	?>
                  <a href="javascript:pick('<?php echo(Current_day?>');" title="Today" class="day"><b><?php echo(day(Current_day)?></b></a>
                  <?php else
	
	'��不显示���Ǳ暂无内容�ʾ
	
		if Month(Current_day) <> Month_var {
		echo "bgcolor='#F0F0F0>"
		?>
                  <a href="javascript:pick('<?php echo(Current_day?>');" title="<?php echo(Current_day?>" class="day"><font color="#CCCCCC"><?php echo(day(Current_day)?></font></a>
                  <?php
		else
		
		'��不显示暂无内容不显示
		echo ">"
		?>
                  <a href="javascript:pick('<?php echo(Current_day?>');" title="<?php echo(Current_day?>" class="day"><?php echo(day(Current_day)?></a>
                  <?php
		}
	
	}
	
	'�����ۼ�����
	
	Current_day = Current_day + 1
	echo "</td>"
	next
	?>
                </tr>
                <?php
next
?>
              </table>
</center>
</div>
</td>
</tr>
</table>
</center>
</div>
</body>
</html>
