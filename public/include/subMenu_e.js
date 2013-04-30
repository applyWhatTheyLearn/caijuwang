// JavaScript Documentvar xmlHttp
var num,linenum,submumid;
//��ʾ��Ŀ����
function showSubMenu(l_id,SubMenuID)
{ 
    submumid=SubMenuID;
	//alert("AccID="+AccID+"--"+"AdminID="+AdminID+"--"+"SubMenuID="+SubMenuID+"submumid="+submumid);
	//alert("l_id="+l_id+"SubMenuID="+SubMenuID+"submumid="+submumid);
	var url="subMenuView_e.php?l_id="+ l_id +"&SubMenuID="+ SubMenuID
	xmlHttp=GetXmlHttpObject(stateChanged)
	xmlHttp.open("post", url , true)
	xmlHttp.send(null)
}


function stateChanged() 

{ 
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{ 
		parseResults();
	} 
} 

function parseResults() {

	 var SubN=eval(document.getElementById("submenu"+submumid));
	 SubN.innerHTML=xmlHttp.responseText;
	 //alert(xmlHttp.responseText);
	 //alert("submenu"+submumid);
    //}
    //

}


function GetXmlHttpObject(handler)
{ 
	var objXmlHttp=null
	
	if (navigator.userAgent.indexOf("Opera")>=0)
	{
		alert("This example doesn't work in Opera") 
		return; 
	}
	if (navigator.userAgent.indexOf("MSIE")>=0)
	{ 
		var strName="Msxml2.XMLHTTP"
		
		if (navigator.appVersion.indexOf("MSIE 5.5")>=0)
		{
			strName="Microsoft.XMLHTTP"
		} 
		try
		{ 
			objXmlHttp=new ActiveXObject(strName)
			objXmlHttp.onreadystatechange=handler 
			return objXmlHttp
		} 
		catch(e)
		{ 
			alert("Error. Scripting for ActiveX might be disabled") 
			return 
		} 
	} 
	if (navigator.userAgent.indexOf("Mozilla")>=0)
	{
		objXmlHttp=new XMLHttpRequest()
		objXmlHttp.onload=handler
		objXmlHttp.onerror=handler 
		return objXmlHttp
	}
} 

