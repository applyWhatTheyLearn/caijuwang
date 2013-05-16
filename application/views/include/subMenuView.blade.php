
		<?php
			  'AccID=trim($_REQUEST["AccID"))
			  l_fid=trim($_REQUEST["l_id"))
			  'l_fid=1
			  Set rs1 = Server.CreateObject("ADODB.RecordSet") 
			  'Search1 = "select * from Accredit where FotherID='"&AccID&"' and AdminID='"&AdminID&"' order by compositor"
			  Search1 = "select * from z_class  where l_fid="&l_fid&" order by l_sort desc"
			  Rs1.open Search1,myConn,adOpenStatic,adLockReadOnly
			  response.charset="gb2312"
			  n=1
			  while( next_record())
			  l_classid=trim(Rs1("l_id"))
			  TitleName1=left(trim(Rs1("l_name")),9)
			  'l_state=trim(Rs1("l_state"))
			  'LinkName1=trim(Rs1("l_city"))
		  		  		
		?>
				<table width=180 border=0 align=center cellpadding=1 cellspacing="1">
                 <tr>
                  <td width=14 background="images/line-3.gif" bgcolor=#CAFFCA>&nbsp;</td>
                  <td width=152 background="images/line-3.gif" bgcolor=#CAFFCA><?php echo( n ?>��<font color="#003366"><a href="../product/product_list.php?l_classid=<?php echo  $l_classid ?>" target="_parent"><?php echo( TitleName1 ?></a></font>                  </td>
                 </tr>
                </table>
				<?php
				  n=n+1
				  rs1.movenext
				  }
				  rs1.close	

				  set rs1=nothing
				  set myconn=nothing			
				?>
				<table width=180 border=0 align=center cellpadding=1 cellspacing="1">
                 <tr>
                   <td height="4" colspan="2"></td>
                  </tr>
                </table>