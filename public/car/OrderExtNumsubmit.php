
<?php

	l_id=trim($_GET("l_id"))
	l_num=trim($_GET("l_num"))
	$msql->query ("update z_carext set l_num='"&l_num&"' where l_id=".$l_id."")



	'response.charset="gb2312"
	echo l_id
?>

