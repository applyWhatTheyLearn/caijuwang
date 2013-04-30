// JavaScript Documentvar xmlHttp
var num,linenum,submumid,l_car_id,l_l_fid,l_tempnum;
//显示项目大类
function orderSub(l_id,GetTempNum)
{
    submumid=l_id;
    //alert("AccID="+AccID+"--"+"AdminID="+AdminID+"--"+"SubMenuID="+SubMenuID+"submumid="+submumid);
    //alert("l_id="+l_id);
    var GetTempNum ;
    var url="../order/ordersubmit.php?l_id="+ l_id+"&GetTempNum="+GetTempNum;
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
    document.getElementById('topiframe').src="../include/top.php";
    alert("商品已放入购物车！");
    //

}


function collection(productid,userid)
{
    //alert("AccID="+AccID+"--"+"AdminID="+AdminID+"--"+"SubMenuID="+SubMenuID+"submumid="+submumid);

    var productid,userid;
    if (userid.length==0) {
        alert ("您还没有登陆！") ;
        location.href="../myshop/user_login.php";
        return false;
    }
    var url="../order/collection.php?productid="+ productid+"&userid="+userid;
    //alert("userid="+userid+" productid="+productid);
    //alert("url="+url);
    xmlHttp=GetXmlHttpObject(collStateChanged)
    xmlHttp.open("post", url , true)
    xmlHttp.send(null)
}


function collStateChanged()

{
    if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
    {
        collParseResults();
    }
}

function collParseResults() {

    //var SubN=eval(document.getElementById("submenu"+submumid));
    //SubN.innerHTML=xmlHttp.responseText;
    //alert(xmlHttp.responseText);
    // alert("submenu="+submumid);
    alert("此商品已放入您的暂存架！");
    //

}



function orderExtSub(fittingsPic_id,car_id,GetTempNum,f_id)
{

    l_car_id=car_id;
    l_l_fid=f_id;
    l_tempnum=GetTempNum;
    //submumid=l_id;
    //alert("AccID="+AccID+"--"+"AdminID="+AdminID+"--"+"SubMenuID="+SubMenuID+"submumid="+submumid);
    //alert("fittingsPic_id="+fittingsPic_id+" car_id="+car_id+" GetTempNum="+GetTempNum+" l_fid="+l_fid);

    var GetTempNum ;
    var url="../order/orderExtsubmit.php?fittingsPic_id="+ fittingsPic_id+"&car_id="+car_id+"&GetTempNum="+GetTempNum;
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
    parent.location.href="carext.php?car_id="+l_car_id+"&l_fid="+l_l_fid+"&l_tempnum="+l_tempnum;
    alert("附属配件已放入购物车！");

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

