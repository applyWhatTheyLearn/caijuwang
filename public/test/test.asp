
<?php
	'ɾ����Сʱǰ�ύ�Ķ�����Ϣ
	nowtime=now()
    'myConn.execute ("Delete from z_carext where datediff(hh, cdate(l_datetime),cdate(now()))>'2'")
	'DateDiff("h", CDate("2009-12-20 5:30"), CDate(now()))
	 Server.CreateObject("ADODB.RecordSet")
	Search = "select * from z_carext where datediff(hh,l_datetime,'"&nowtime&"')>'2'"
	response.Write("Search="&Search &"<br>")
    'Rs.open Search,myConn,adOpenStatic,adLockReadOnly
	
	

'?>

<?php

response.Write("time="&now() &"<br>")
aa=DateDiff("h", CDate("2009-12-20 5:30"), CDate(now()))
response.Write("aa="&aa &"<br>")
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
</head>

<body>
</body>
</html>
