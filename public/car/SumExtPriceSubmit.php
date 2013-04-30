
<?php

	car_id=trim($_GET("car_id"))
	$msql->query("select sum(l_price1*l_num)as price1all, sum(l_price2*l_num) as price2all from CarExtList  where l_carid="&car_id&"")
	price1all=trim($msql->f("price1all"))
	price2all=trim($msql->f("price2all"))
	$msql->query ("update z_car set l_extprice1='"&price1all&"',l_extprice2='"&price2all&"' where l_id="&car_id&"")

?>

