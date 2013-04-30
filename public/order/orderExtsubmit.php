
<?php

	'Response.write GetNewFileName()
	GetTempNum=trim($_GET("GetTempNum"))
	fittingsPic_id=trim($_GET("fittingsPic_id"))
	car_id=trim($_GET("car_id"))
	'sss="select l_fittingid,l_productid,l_tempnum from z_carext where l_tempnum='"&GetTempNum&"' and l_fittingid='"&fittingsPic_id&"' and l_carid='"&car_id&"' "
	$msql->query("select * from z_carext where l_tempnum='"&GetTempNum&"' and l_fittingid="&fittingsPic_id&" and l_carid="&car_id&" ")
	if rs.eof {
	$msql->query ("insert into z_carext (l_carid,l_fittingid,l_num,l_tempnum) values ('"&car_id&"','"&fittingsPic_id&"','1','"&GetTempNum&"')")
	else
	$msql->query ("update z_carext set l_num=l_num+1 where l_tempnum='"&GetTempNum&"' and l_fittingid="&fittingsPic_id&"")
	}





	'response.charset="gb2312"
	'response.Write sss	  		  		
?>

