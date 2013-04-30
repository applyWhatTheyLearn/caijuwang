// JavaScript Documentvar xmlHttp
var num,linenum,submumid;
//显示项目大类
function TipOnce(detailid)
{ 
    //alert(detailid);
	//alert("AccID="+AccID+"--"+"AdminID="+AdminID+"--"+"SubMenuID="+SubMenuID+"submumid="+submumid);
	var url="../_inc/tiponce.php?detailid=" + detailid
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

	 //var SubN=eval(document.getElementById("submenu"+submumid));
	 //SubN.innerHTML=xmlHttp.responseText;
	 //alert(xmlHttp.responseText);
	 document.getElementById("article_ding_text").innerHTML=xmlHttp.responseText ;
}

function TipChange(detailid)
{ 
    //alert(detailid);
	//alert("AccID="+AccID+"--"+"AdminID="+AdminID+"--"+"SubMenuID="+SubMenuID+"submumid="+submumid);
	var url="../_inc/tipchange.php?detailid=" + detailid
	xmlHttp=GetXmlHttpObject(tipState)
	xmlHttp.open("post", url , true)
	xmlHttp.send(null)
}

function tipState() 

{ 
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{ 
		tipResults();
	} 
} 

function tipResults() {

	 //var SubN=eval(document.getElementById("submenu"+submumid));
	 //SubN.innerHTML=xmlHttp.responseText;
	 //alert(xmlHttp.responseText);
	 document.getElementById("article_ding_text").innerHTML=xmlHttp.responseText ;
}


function CheckUserName(){
	var w_username=document.sample.t_name.value;
	var url="../_inc/chenkusername.php?w_username=" + w_username
	xmlHttp=GetXmlHttpObject(checkuname)
	xmlHttp.open("post", url , true)
	xmlHttp.send(null)	
}


function checkuname() 

{ 
	if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
	{ 
		changeinfo();
	} 
} 

function changeinfo() {

	 //alert(xmlHttp.responseText);
	 document.getElementById("chackusername").innerHTML=xmlHttp.responseText ;
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

