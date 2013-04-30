<!--#include file="../../_inc/w_conn.asp"-->
<!--#include file="../../_inc/adovbs.inc"-->
<!--#include file="../../_inc/chackoutime3.asp" -->


<% 
	l_id=Trim(Request.QueryString("l_id"))
	pageno=Trim(Request.QueryString("pageno"))
	'Response.Write("InfoID="&InfoID &"<br>")
	search="select l_id,l_pic,l_ext from z_class where l_id="&l_id&""
	set rs=myConn.execute (search)
	
	Path=Request.ServerVariables("APPL_PHYSICAL_PATH")
	Set oFSO = Server.CreateObject("Scripting.FileSystemObject")
		
		'删除商品
		'商品小类是否存在
		search="select l_id,l_fid from z_class where l_fid="&l_id&""
		'response.Write("search="&search &"<br>")
		set rs=myConn.execute (search)	
		
		do while not rs.eof 
		SmallClass_id=trim(rs("l_id")) '商品小类id
			search1="select l_id,l_classid from z_product where l_classid="&SmallClass_id&""
			set rs1=myConn.execute (search1)
			do while not rs1.eof
				product_id=trim(rs1("l_id")) '商品id
				search2="select l_id,l_productid,l_pic,l_ext from z_productpic where l_productid="&product_id&""
				set rs2=myConn.execute (search2)
				'response.Write("search2="&search2 &"<br>")	
				do while not rs2.eof 
					proPicid=trim(rs2("l_id")) '商品图片id
					proPicName=trim(rs2("l_pic"))
					proExt=trim(rs2("l_ext"))
					
					sMapFileName = Path &"folder\product\"& proPicName&"."&proExt
					'response.Write("sMapFileName="&sMapFileName &"<br>")
					'删除商品图片文件
					If oFSO.FileExists(sMapFileName) = True Then
					oFSO.DeleteFile(sMapFileName)
					End If		
					'删除商品图片库中记录
					DelProPic="Delete from z_productpic where l_id="&proPicid&""
					myConn.execute (DelProPic)	
					'response.Write("DelProPic="&DelProPic &"<br>")

				rs2.movenext
				loop	
				rs2.close			

				'删除商品	
				DelSmallInfo="Delete from z_product where l_id="&product_id&""
			    myConn.execute (DelSmallInfo)
				'response.Write("DelSmallInfo="&DelSmallInfo &"<br>")	
			
			rs1.movenext
			loop
			rs1.close	
			
		'删除商品小类	
		DelSmallInfo="Delete from z_class where l_id="&SmallClass_id&""
	    myConn.execute (DelSmallInfo)
		'response.Write("DelSmallInfo="&DelSmallInfo &"<br>")	
	
		rs.movenext
		loop
		rs.close		
	
	DelInfo="Delete from z_class where l_id="&l_id&""
    myConn.execute (DelInfo)
	'response.Write("DelInfo="&DelInfo &"<br>")
	myConn.close
	set rs=nothing
	set rs1=nothing
	set rs2=nothing
	set oFSO=nothing
	set myConn=nothing
	''response.redirect("DelUserOK.asp")
%>
<html>
<head>
<title>删除信息</title>
<meta http-equiv="refresh" content="0;url=ProBigClass_List.asp">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
</head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>

