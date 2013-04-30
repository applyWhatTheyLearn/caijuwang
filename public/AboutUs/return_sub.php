
<?php
l_title=trim($_POST["l_title"))
l_detail=left(trim($_POST["l_detail")),600)

	AddDetail="INSERT INTO z_return (l_title,l_detail) VALUES ('" &l_title& "','".$l_detail."')"
    $msql->query (AddDetail)



	
?>

<html>
<head>
<title>�޸ĳɹ�!</title>
<meta http-equiv=refresh content="0; url=return.html">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body bgcolor="#FFFFFF" text="#000000">
</body>
</html>

 