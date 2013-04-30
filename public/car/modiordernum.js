// JavaScript Documentvar xmlHttp
var num,linenum,submumid;
//显示项目大类

function MofiOrderNum(l_id,num)
{
    submumid=l_id;
    var l_num=eval("document.form1.l_num"+num+".value");
    //alert("l_id="+l_id+" num="+num+" l_num="+l_num);
    var url="../car/OrderNumsubmit.php?l_id="+ l_id+"&l_num="+l_num;
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
    // alert("submenu="+submumid);
    alert("数量已修改！");
    //

}



function MofiExtOrderNum(l_id,num)
{
    submumid=l_id;
    var l_num=eval("document.form1.l_num"+num+".value");
    //alert("l_id="+l_id+" num="+num+" l_num="+l_num);
    var url="../car/OrderExtNumsubmit.php?l_id="+ l_id+"&l_num="+l_num;
    xmlHttp=GetXmlHttpObject(stateExtChanged)
    xmlHttp.open("post", url , true)
    xmlHttp.send(null)
}


function stateExtChanged()

{
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
    {
        parseExtResults();
    }
}

function parseExtResults() {
    //alert(xmlHttp.responseText);
    alert("附属配件数量已修改！");
}


function SumCarExtPrice(car_id)
{

    var url="../car/SumExtPriceSubmit.php?car_id="+ car_id;
    //alert("url="+url);
    xmlHttp=GetXmlHttpObject(stateSumExtChanged)
    xmlHttp.open("post", url , true)
    xmlHttp.send(null)
}


function stateSumExtChanged()

{
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
    {
        parseSumExtResults();
    }
}

function parseSumExtResults() {

    //var SubN=eval(document.getElementById("submenu"+submumid));
    //SubN.innerHTML=xmlHttp.responseText;
    // alert(xmlHttp.responseText);
    // alert("submenu="+submumid);
    //alert("数量已修改！");
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

