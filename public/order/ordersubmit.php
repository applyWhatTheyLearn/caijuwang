
<?php
include("../include/common.inc.php");
session_start();
	$GetTempNum=trim($_GET["GetTempNum"]);
	$l_id=trim($_GET["l_id"]);
	$msql->query("select l_id,l_productid from z_car where l_tempnum='" . $GetTempNum . "' and l_productid=" . $l_id ."");
	if ($msql->next_record()){
        $msql->query ("update z_car set l_num=l_num+1 where l_productid=".$l_id);
    }else{
        $msql->query ("insert into z_car (l_num,l_productid,l_tempnum) values ('1','".$l_id."','" .$GetTempNum."')");
	}
?>

